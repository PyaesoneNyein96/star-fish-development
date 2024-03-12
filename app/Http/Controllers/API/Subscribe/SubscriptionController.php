<?php

namespace App\Http\Controllers\API\Subscribe;

use Carbon\Carbon;
use App\Models\Game;
use App\Models\Grade;
use App\Models\Country;
use App\Models\Student;
use App\Models\StudentGame;
use Illuminate\Support\Str;
use App\Models\StudentGrade;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Models\SubscriptionPlan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{


    public $token, $grade_id, $subscription_id, $student;

    public function __construct(Request $request) {
        $this->token = $request->header('token');
        $this->grade_id = $request->header('grade_id');
        $this->subscription_id = $request->header('subscription_id');

        $this->student = Student::where('token',$request->header('token'))->first();


    }

    ////////////////////////////////////////////////////////////////

    public function plans(Request $request){

        $student = Student::where('token', $this->token)->first();
        return Subscription::all();

    }


    public function purchase(Request $request){


        $student = Student::where('token', $this->token)->where('status',1)->first();

        if(!$student){
            return response()->json([
                "status" => "you are not allowed for this process."
            ], 403);
        }



        DB::beginTransaction();
        try {


            $purchasing = $this->purchasing();

            $result = $purchasing['Response']['result'] == "SUCCESS";

            // logger($purchasing);
            // logger("hello");

            if($result){

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

                $latest_date = StudentGrade::where('grade_id',$this->grade_id)
                ->pluck('expire_date');

                $this->addedSubscriptionDate($latest_date);


                DB::commit();

                return response()->json([
                    'status' => "successfully purchased.",
                ], 200);

            }else{
                return response()->json(["message" => "Payment request fail"], 401);
            }


        } catch (\Throwable $th) {
            DB::rollback();
            return $th;

        }

        return "already purchased";

    }


    public function removePlan(Request $request) {

            $student = Student::where('token', $this->token)->where('status',1)->first();

            $gradeLessons = Grade::find($this->grade_id)->lessons;

            $gradeUnit = Grade::find($this->grade_id)->units->pluck('id');

            $gradeGames = Game::whereIn('unit_id', $gradeUnit)->get();


            DB::beginTransaction();

            try {

                $del_lessons = $gradeLessons->filter(function($l) use($student) {
                    return $student->lessons->contains('id', $l->id);
                })->pluck('id');

                $res1= StudentLesson::where('student_id', $student->id)->whereIn('id', $del_lessons)->delete();

            //////////////////////////////

                $del_units = $gradeUnit->filter(function($l) use($student){
                    return $student->units->contains('id', $l->id);
                })->pluck('id');

                $res2 = StudentUnit::where('student_id', $student->id)->whereIn('id', $del_units)->delete();

            //////////////////////////////

                $del_games = $gradeGames->filter(function($g) use($student) {
                    return $student->games->contains('id', $g->id);
                })->pluck('id');

                $res3 = StudentGame::where('student_id',$student->id)->whereIn('id',$del_games)->delete();

                if($res1 && $res3){
                    StudentGrade::where('grade_id',$this->grade_id)->delete();
                }

                DB::commit();

                return true;


           } catch (\Throwable $th) {
                DB::rollback();
                return $th;
           }




    }


    private function purchasing() {



        $kbzRequestURL = "http://api.kbzpay.com/payment/gateway/uat/precreate";

        $time = 1536637503;
        // $time = strtotime(Carbon::now());
        $orderId =  $time."_"."123_ABZ";
        // $nonce_str =  strtoupper(str_replace('-', '', Str::uuid()));
        $nonce_str =  "ABCabc123";


        $sign = $this->convert_SHA256($orderId,$time,$nonce_str);


        logger($sign);

        $data = [
            "Request" => [
                "timestamp" => $time,
                "notify_url" => "https://star-fish-development.myanmargateway.net/payment/notify",
                "nonce_str" => $nonce_str,
                "sign_type" => "SHA256",
                "method" => "kbz.payment.precreate",
                "sign" => $sign,
                "version" => "1.0",
                "biz_content" => [
                    "merch_order_id" => $orderId,
                    "merch_code" => "70050901",
                    "appid" => "kp0480c579f02f48ae8c37ce82260511",
                    "trade_type" => "APP",
                    "total_amount" => "1000",
                    "trans_currency" => "MMK",
                ]
            ]
        ];



        if($sign){
            logger(json_encode($data));


            $responseFromKBZServer = Http::post($kbzRequestURL,json_encode($data, JSON_PRETTY_PRINT));

            return $responseFromKBZServer;
        }



    }



    private function convert_SHA256($order_id, $time,$nonce_str){


        $stringA = "appid=kp0480c579f02f48ae8c37ce82260511&merch_code=70050901&merch_order_id=".$order_id."&method=kbz.payment.precreate&nonce_str=$nonce_str&notify_url=https://star-fish-development.myanmargateway.net/payment/notify&timestamp=$time&total_amount=1000&trade_type=APP&trans_currency=MMK&version=1.0";


        logger($stringA);
        logger(" - ");

        $combine = $stringA."&starfish@123";

        $hashed = hash('sha256', $combine);


        return strtoupper($hashed);

    }



    /////////////////////////////////////////////////////
    /////////////      Private Functions     ////////////
    /////////////////////////////////////////////////////


    private function addedSubscriptionDate($latest_date){

        $grades = StudentGrade::where('student_id', $this->student->id)->get();

        $grades->filter(function($g) use($latest_date){
            if($g->expire_date !== $latest_date){
               $g->update(['expire_date' => Carbon::now()->addYear()]);
            }
        });

    }














}
