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

class SubscriptionController extends Controller
{


    public $token, $grade_id, $subscription_id, $student;

    public function __construct(Request $request) {
        $this->token = $request->header('token');
        $this->grade_id = $request->header('grade_id');
        $this->subscription_id = $request->header('subscription_id');

        $this->student = Student::where('token',$request->header('token'))->first();


    }


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

            $purchasing = $this->purchasing($student, $this->grade_id, $this->subscription_id);

            if($purchasing){

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
            // return $gradeGames;

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


    public function purchasing($student, $grade_id, $subscription_id) {

        return !$student->grades->contains('id', $grade_id) ? true : false;

    }



    public function notify(Request $request){

        return $this->algorithm($request);

    }

    public function algorithm($request){

        $par = $request->Request;


        // return $par['biz_content']['merch_order_id'];

        $result = "appid=".$par['biz_content']['appid']."&".
        "march_code=".$par['biz_content']['merch_code']."&".
        "merch_order_id=".$par['biz_content']['merch_order_id']."&".
        "method=".$par['method']."&".
        "nonce_str=".$par['nonce_str']."&".
        "notify_url=".$par['notify_url']."&".
        "timestamp=".$par['timestamp']."&".
        "total_amount".$par['biz_content']['total_amount']."&".
        "trade_type".$par['biz_content']['trade_type']."&".
        "trans_currency".$par['biz_content']['trans_currency']."&".
        "version=".$par['version'];


        $stringToSign = $result."&key=starfish@123";
        $sign = strtoupper("8a78203a902f25124f95f6ec1582fe6b00f471a3114b264b2bf0c9a6f7be2518");

        $par['sign'] = $sign;

        return $par;

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
