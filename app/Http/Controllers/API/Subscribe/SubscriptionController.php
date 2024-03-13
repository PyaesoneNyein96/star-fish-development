<?php

namespace App\Http\Controllers\API\Subscribe;

use Carbon\Carbon;
use App\Models\Game;
use App\Models\Grade;
use App\Models\Country;
use App\Models\Student;
use App\Models\StudentGame;
use App\Models\StudentGrade;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Models\SubscriptionPlan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\StudentUnit;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{


    public $token, $grade_id, $subscription_id, $student;

    public function __construct(Request $request)
    {
        $this->token = $request->header('token');
        $this->grade_id = $request->header('grade_id');
        $this->subscription_id = $request->header('subscription_id');

        $this->student = Student::where('token', $request->header('token'))->first();
    }

    ////////////////////////////////////////////////////////////////

    public function plans(Request $request)
    {

        $student = Student::where('token', $this->token)->first();
        return Subscription::all();
    }


    public function purchase(Request $request)
    {



        $student = Student::where('token', $this->token)->where('status', 1)->first();

        if (!$student) {
            return response()->json([
                "status" => "you are not allowed for this process."
            ], 403);
        }



        DB::beginTransaction();
        try {

            return $purchasing = $this->purchasing($student, $this->grade_id, $this->subscription_id);

            if ($purchasing == 1) {

                $now = Carbon::now(strval($student->country['timezone']));

                StudentGrade::create([
                    'student_id' => $student->id,
                    'grade_id' => $this->grade_id,
                    'subscription_id' => $this->subscription_id,
                    'created_at' => Carbon::now(strval($student->country['timezone'])),
                    'expire_date' => $now->addYear(),
                ]);

                $student->update([
                    'isSubscriber' => 1,
                    'grade_chosen' => null,
                    'created_at' => Carbon::now(strval($student->country['timezone'])),
                    'updated_at' => Carbon::now(strval($student->country['timezone']))
                ]);

                $latest_date = StudentGrade::where('grade_id', $this->grade_id)
                    ->pluck('expire_date');

                $this->addedSubscriptionDate($latest_date);


                DB::commit();

                return response()->json([
                    'status' => "successfully purchased.",
                ], 200);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }

        return "already purchased";
    }


    public function removePlan(Request $request)
    {

        $student = Student::where('token', $this->token)->where('status', 1)->first();

        $gradeLessons = Grade::find($this->grade_id)->lessons;

        $gradeUnit = Grade::find($this->grade_id)->units->pluck('id');

        $gradeGames = Game::whereIn('unit_id', $gradeUnit)->get();
        // return $gradeGames;

        DB::beginTransaction();

        try {

            $del_lessons = $gradeLessons->filter(function ($l) use ($student) {
                return $student->lessons->contains('id', $l->id);
            })->pluck('id');

            $res1 = StudentLesson::where('student_id', $student->id)->whereIn('id', $del_lessons)->delete();

            //////////////////////////////

            $del_units = $gradeUnit->filter(function ($l) use ($student) {
                return $student->units->contains('id', $l->id);
            })->pluck('id');

            $res2 = StudentUnit::where('student_id', $student->id)->whereIn('id', $del_units)->delete();

            //////////////////////////////

            $del_games = $gradeGames->filter(function ($g) use ($student) {
                return $student->games->contains('id', $g->id);
            })->pluck('id');

            $res3 = StudentGame::where('student_id', $student->id)->whereIn('id', $del_games)->delete();

            if ($res1 && $res3) {
                StudentGrade::where('grade_id', $this->grade_id)->delete();
            }

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }


    private function purchasing($student, $grade_id, $subscription_id)
    {

        $kbzRequestURL = "http://api.kbzpay.com/payment/gateway/uat/precreate";

        // $order_id = rand(1, 999) . chr(rand(65, 90));
        $order_id = rand(1, 999);
        $time = Carbon::now()->timestamp;

        $data = [
            "Request" => [
                "timestamp" => (string)$time,
                "notify_url" => "https://star-fish-development.myanmargateway.net/payment/notify",
                "nonce_str" => "8264ILTKCH16CQ2502SI8ZNMTM67VS_3",
                "sign_type" => "SHA256",
                "method" => "kbz.payment.precreate",
                "sign" => strtoupper($this->convert_SHA256($order_id, $time)),
                "version" => "1.0",
                "biz_content" => [
                    // "merch_order_id" => "$order_id",
                    "merch_order_id" => str_pad($order_id, 9, '0', STR_PAD_LEFT),
                    "merch_code" => "70050901",
                    "appid" => "kp0480c579f02f48ae8c37ce82260511",
                    "trade_type" => "PWAAPP",
                    "total_amount" => "20000",
                    "trans_currency" => "MMK",
                ]
            ]
        ];

        // return $data;


        // $responseFromKBZServer = Http::post($kbzRequestURL, json_encode($data, JSON_PRETTY_PRINT));
        $responseFromKBZServer = Http::post($kbzRequestURL, json_encode($data, JSON_PRETTY_PRINT));

        return $responseFromKBZServer;
    }



    private function convert_SHA256($order_id, $time)
    {

        // $stringA = "appid=kp123456789987654321abcdefghijkl&merch_code=100001&merch_order_id=201811212009001&method=kbz.payment.precreate&nonce_str=845255910308564481&notify_url=http://test.com/payment/notify&timestamp=1536637503&total_amount=1000&trade_type=APPH5&trans_currency=MMK&version=1.0";

        $raw = "appid=kp0480c579f02f48ae8c37ce82260511" . "&merch_code=70050901" . "&merch_order_id=" . $order_id . "&method=kbz.payment.precreate" . "&nonce_str=8264ILTKCH16CQ2502SI8ZNMTM67VS_3" . "&notify_url=https://star-fish-development.myanmargateway.net/payment/notify" . "&timestamp=" . $time . "&total_amount=1000&trade_type=APPH5&trans_currency=MMK&version=1.0";

        $combine = $raw . "&key=starfish@123";

        $hashed = hash('sha256', $combine);


        return $hashed;
    }



    /////////////////////////////////////////////////////
    /////////////      Private Functions     ////////////
    /////////////////////////////////////////////////////


    private function addedSubscriptionDate($latest_date)
    {

        $grades = StudentGrade::where('student_id', $this->student->id)->get();

        $grades->filter(function ($g) use ($latest_date) {
            if ($g->expire_date !== $latest_date) {
                $g->update(['expire_date' => Carbon::now()->addYear()]);
            }
        });
    }
}
