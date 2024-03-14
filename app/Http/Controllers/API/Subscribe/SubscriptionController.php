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

        $time = strtotime(Carbon::now());
        $orderId =  $time."_"."123_ABZ";
        $nonce_str =  strtoupper(str_replace('-', '', Str::uuid()));

        $purchasing = $this->purchasing($time, $orderId, $nonce_str);

        $result = $purchasing['Response']['result'] == "SUCCESS";


        if(!$result) return response()->json(["message" => "something wrong."], 402);

        $data = ['timestamp' => $time, 'appid' => "kp0480c579f02f48ae8c37ce82260511"];
        $response =  array_merge($data,$purchasing['Response']);

        return $response;

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



    public function checkPaymentResult(Request $request){

        // $sign = $this->convert_SHA256_query_result($nonce_str, $prepay_id, $orderId, $time);
        $kbzCheckURL = "http://api.kbzpay.com/payment/gateway/uat/queryorder";

        $orderId = $request->header('order_id');

        $nonce_str = strtoupper(str_replace('-', '', Str::uuid()));
        $time = strtotime(Carbon::now());


        $stringA = "appid=kp0480c579f02f48ae8c37ce82260511&merch_code=70050901&merch_order_id=$order_id&method=kbz.payment.precreate&nonce_str=$nonce_str&notify_url=https://star-fish.myanmargateway.net/payment/notify&timestamp=$time&total_amount=1000&trade_type=PWAAPP&trans_currency=MMK&version=1.0";

        $sign = strtoupper(hash('sha256',$stringA."&key=starfish@123"));

        $data = [
            "Request" => [
                "timestamp" => $time,
                "nonce_str" => $nonce_str,
                "method" => "kbz.payment.queryorder",
                "sign_type" => "SHA256" ,
                "sign" => $sign,
                "version" => "3.0",
                "biz_content" => [
                    "appid" => "kp0480c579f02f48ae8c37ce82260511",
                    "merch_code" => "70050901",
                    "merch_code_id" => $orderId,
                ]
            ]


        ];

        logger(json_encode($data));

        if($sign){
            $checkResult_KBZ_Server = Http::post($kbzCheckURL,$data);
            return $checkResult_KBZ_Server;
        }

    }


    /////////////////////////////////////////////////////////////
    /////////////////// KBZ Private functions ///////////////////
    /////////////////////////////////////////////////////////////

    private function purchasing($time, $orderId, $nonce_str) {

        $kbzRequestURL = "http://api.kbzpay.com/payment/gateway/uat/precreate";

        $sign = $this->convert_SHA256($orderId,$time,$nonce_str);

        $data = [
            "Request" => [
                "timestamp" => $time,
                "method" => "kbz.payment.precreate",
                "notify_url" => "https://star-fish.myanmargateway.net/payment/notify",
                "nonce_str" => $nonce_str,
                "sign_type" => "SHA256",
                "sign" => $sign,
                "version" => "1.0",
                "biz_content" => [
                    "merch_order_id" => $orderId,
                    "merch_code" => "70050901",
                    "appid" => "kp0480c579f02f48ae8c37ce82260511",
                    "trade_type" => "PWAAPP",
                    "total_amount" => "1000",
                    "trans_currency" => "MMK",
                ]
            ]
        ];

        // return $responseFromKBZServer

        if($sign){
            $responseFromKBZServer = Http::post($kbzRequestURL,$data);
            return $responseFromKBZServer;
        }



    }


    // private function convert_SHA256($order_id, $time, $nonce_str){

    //     $stringA = "appid=kp0480c579f02f48ae8c37ce82260511&merch_code=70050901&merch_order_id=$order_id&method=kbz.payment.precreate&nonce_str=$nonce_str&notify_url=https://star-fish.myanmargateway.net/payment/notify&timestamp=$time&total_amount=1000&trade_type=PWAAPP&trans_currency=MMK&version=1.0";

    //     return strtoupper(hash('sha256',$stringA."&key=starfish@123"));

    // }


    private function convert_SHA256_query_result($nonce_str, $prepay_id, $orderId, $time){

        $queryOrderCheck = "appid=kp0480c579f02f48ae8c37ce82260511&merch_code=70050901&merch_order_id=$orderId&method=kbz.payment.queryorder&nonce_str=$nonce_str&timestamp=$time&version=3.0";

        logger($queryOrderCheck);

        $hashed = strtoupper(hash('sha256',$queryOrderCheck."&key=starfish@123"));

        logger($hashed);
        return $hashed;
    }

    public function notify(Request $request){
        logger([
            'notify' => $request
        ]);
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


    private function addGradeToStudent(){

        DB::beginTransaction();

        try {

            $now = Carbon::now(strval($student->country['timezone']));

            StudentGrade::create([
                'student_id' => $this->student->id,
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


        } catch (\Throwable $th) {
            DB::rollback();
            return $th;

        }

        return "already purchased";

    }












}
