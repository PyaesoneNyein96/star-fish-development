<?php

namespace App\Http\Controllers\API\Subscribe;

use Carbon\Carbon;
use App\Models\Game;
use App\Models\Grade;
use App\Models\Country;
use App\Models\Student;
use App\Models\DailyBonus;
use App\Models\LoginBonus;
use App\Models\StudentGame;
use App\Models\StudentUnit;
use Illuminate\Support\Str;
use App\Models\StudentGrade;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\QuestionBonus;
use App\Models\StudentLesson;
use App\Models\OrderTransaction;
use App\Models\SubscriptionPlan;
use App\Models\ChampionshipBonus;
use App\Models\StudentLoginBonus;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Traits\removePlanTrait;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class SubscriptionController extends Controller
{
    use removePlanTrait;

    private $token, $grade_id, $subscription_id, $student, $time, $orderId, $nonce_str, $domain, $prepay_id;


    // Production
    // private $appId = "kp6d29862312994fa09afb52c00e6687";
    // private $merch_code = "70244201";
    // private $appKey = "ddfa5a774af37d9137f51d90c1871cb1";

    // Testing
    private $appId = "kp0480c579f02f48ae8c37ce82260511";
    private $merch_code = "70050901";
    private $appKey = "starfish@123";




    public function __construct(Request $request)
    {
        $this->token = $request->header('token');
        $this->grade_id = $request->header('grade_id');
        $this->subscription_id = $request->header('subscription_id');

        $this->student = Student::where('token', $request->header('token'))->first();

        $this->time = strtotime(Carbon::now());
        // $this->orderId =  $this->time . "_" . strtoupper(substr(Str::uuid(), 0, 10));
        $this->nonce_str =  strtoupper(str_replace('-', '', Str::uuid()));
        $this->domain = app('domain');
        $this->prepay_id;
    }

    ////////////////////////////////////////////////////////////////

    public function plans(Request $request)
    {
        $student = Student::where('token', $this->token)->first();
        return Subscription::all();
    }




    /////////////////////// Get Prepay ID ///////////////////////

    public function getPrepay_id(Request $request)
    {

        $student = Student::where('token', $this->token)->where('status', 1)->first();

        if (!$student) return response()->json(["error" => "you are not allowed for this process."], 403);

        // if ($student->isLocal == 0) return response()->json(["error" => "you need to be a local user for this process."], 403);


        $alreadyBought = StudentGrade::where('student_id', $student->id)->where('grade_id', $request->header('grade_id'))->first();

        if ($alreadyBought) {
            $renew = Carbon::now()->diff($alreadyBought->expire_date);
            $type = $renew->invert ? '-' : '';
            $day_count = $type . $renew->days;

            if ((int)$day_count > 0) {
                return response()->json([
                    "message" => "You have already purchased the plan."
                ], 402);
            }
        }

        // skip payment process
        try {
            return $this->getGradeAccess($student, $this->grade_id, $this->subscription_id);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

        //ts


        DB::beginTransaction();
        try {

            $order_id = $this->order_generator()->id;

            $response = $this->request_prepay_id($this->time, $order_id, $this->nonce_str);


            $result = $response['Response']['result'] == "SUCCESS";
            if (!$result) return response()->json(["message" => $response['Response']], 402);


            $data = ['timestamp' => $this->time, 'appid' => $this->appId, 'merch_code' => $this->merch_code];

            $params = "appid=" . $this->appId . "&merch_code=" . $this->merch_code . "&nonce_str=" . $this->nonce_str . "&prepay_id=" . $response['Response']['prepay_id'] . "&timestamp=" . $this->time;

            $result = strtoupper(hash('sha256', $params . "&key=" . $this->appKey));

            $data["orderinfo"] = $params . "&sign=$result";

            DB::commit();

            return  array_merge($data, $response['Response']);
        } catch (\Throwable $th) {
            DB::rollback();
            logger($th);
            return $th->getMessage();
        }
    }





    public function checkPaymentResult(Request $request)
    {

        $kbzCheckURL = "https://api.kbzpay.com/payment/gateway/queryorder";
        // $kbzCheckURL = "https://api.kbzpay.com/payment/gateway/uat/queryorder";
        $orderId = $request->header('order_id');

        $data = [
            "Request" => [
                "timestamp" => $this->time,
                "nonce_str" => $this->nonce_str,
                "method" => "kbz.payment.queryorder",
                "sign_type" => "SHA256",
                "sign" => $this->convert_SHA256_query_result($this->nonce_str, $orderId, $this->time),
                "version" => "3.0",
                "biz_content" => [
                    "appid" => $this->appId,
                    "merch_code" => $this->merch_code,
                    "merch_order_id" => $orderId,
                ]
            ]
        ];

        return Http::post($kbzCheckURL, $data);
    }


    // referer kpay
    public function referer(Request $request)
    {
        // $redirectUrl = "https://static.kbzpay.com/pgw/uat/pwa/#/";
        $redirectUrl = "https://static.kbzpay.com/pgw/pwa/#/";

        $appid = $request->query("appid");
        $merch_code = $request->query("merch_code");
        $nonce_str = $request->query("nonce_str");
        $prepay_id = $request->query("prepay_id");
        $timestamp = $request->query("timestamp");
        $sign = $request->query("sign");

        $params = "appid=$appid&merch_code=$merch_code&nonce_str=$nonce_str&prepay_id=$prepay_id&timestamp=$timestamp&sign=$sign";

        return view('referer', compact("redirectUrl", "params"));
    }



    // notify
    public function notify(Request $request)
    {
        if ($request["Request"]) {
            $payInfo = OrderTransaction::where("id", $request["Request"]["merch_order_id"])->first();
            if (
                $payInfo &&
                $request["Request"]["merch_code"] == $this->merch_code &&
                $request["Request"]["appid"] == $this->appId &&
                $request["Request"]["trade_status"] == "PAY_SUCCESS"
            ) {
                return "success";
            }
            return redirect($this->domain . "fail");
        }
    }

    // return url ( success )
    public function return_url(Request $request)
    {
        $payInfo = OrderTransaction::where("id", $request->merch_order_id)->first();
        if ($payInfo) {
            $successString = $this->time . "_" . strtoupper(substr(Str::uuid(), 0, 10));

            OrderTransaction::where("id", $request->merch_order_id)
                ->update([
                    "success_string" => $successString,
                    "status" => "success"
                ]);


            $student_id = $payInfo->student_id;

            $student = Student::find($student_id);

            $this->getGradeAccess($student, $payInfo->grade_id, $payInfo->subscription_id);

            return "success from url";
        }

        return redirect($this->domain . "fail");
    }






    /////////////////////////////////////////////////////////////
    /////////////////// KBZ Private functions ///////////////////
    /////////////////////////////////////////////////////////////

    private function request_prepay_id($time, $orderId, $nonce_str)
    {

        // $kbzRequestURL = "http://api.kbzpay.com/payment/gateway/uat/precreate";
        $kbzRequestURL = "https://api.kbzpay.com/payment/gateway/precreate";

        $isLocal = $this->student->isLocal;
        $price = Grade::find($this->grade_id)->local_price;

        $sign = $this->convert_SHA256($orderId, $time, $nonce_str, $price);


        $data = [
            "Request" => [
                "timestamp" => $time,
                "method" => "kbz.payment.precreate",
                "notify_url" => $this->domain . "payment/notify",
                "nonce_str" => $nonce_str,
                "sign_type" => "SHA256",
                "sign" => $sign,
                "version" => "1.0",
                "biz_content" => [
                    "merch_order_id" => $orderId,
                    "merch_code" => $this->merch_code,
                    "appid" => $this->appId,
                    "trade_type" => "PWAAPP",
                    "total_amount" => $price,
                    "trans_currency" => "MMK",
                ]
            ]
        ];

        if ($sign) {
            return Http::post($kbzRequestURL, $data);
        }
    }


    private function convert_SHA256($order_id, $time, $nonce_str, $price)
    {

        $stringA = "appid=" . $this->appId . "&merch_code=" . $this->merch_code . "&merch_order_id=$order_id&method=kbz.payment.precreate&nonce_str=$nonce_str&notify_url=" . $this->domain . "payment/notify&timestamp=$time&total_amount=$price&trade_type=PWAAPP&trans_currency=MMK&version=1.0";

        return strtoupper(hash('sha256', $stringA . "&key=" . $this->appKey));
    }


    private function convert_SHA256_query_result($nonce_str, $orderId, $time)
    {

        $stringA = "appid=" . $this->appId . "&merch_code=" . $this->merch_code . "&merch_order_id=$orderId&method=kbz.payment.queryorder&nonce_str=$nonce_str&timestamp=$time&version=3.0";

        return strtoupper(hash('sha256', $stringA . "&key=" . $this->appKey));
    }

    private function order_generator()
    {
        $isOrdered = OrderTransaction::where("student_id", $this->student->id)
            ->where("subscription_id", $this->subscription_id)
            ->where("grade_id", $this->grade_id)
            ->where("status", "pending")
            ->first();

        DB::beginTransaction();
        try {

            if ($isOrdered) {
                // $closeUrl = "https://api.kbzpay.com/payment/gateway/uat/closeorder";
                $closeUrl = "https://api.kbzpay.com/payment/gateway/closeorder";
                $signString = "appid=" . $this->appId . "&merch_code=" . $this->merch_code . "&merch_order_id=$isOrdered->id&method=kbz.payment.closeorder&nonce_str=" . $this->nonce_str . "&timestamp=" . $this->time . "&version=3.0&key=" . $this->appKey;
                $dataBody = [
                    "Request" => [
                        "timestamp" => $this->time,
                        "method" => "kbz.payment.closeorder",
                        "nonce_str" => $this->nonce_str,
                        "sign_type" => "SHA256",
                        "sign" => strtoupper(hash('sha256', $signString)),
                        "version" => "3.0",
                        "biz_content" => [
                            "merch_order_id" => $isOrdered->id,
                            "merch_code" => $this->merch_code,
                            "appid" => $this->appId
                        ]
                    ]
                ];
                $closeOrder = Http::post($closeUrl, $dataBody);
                if ($closeOrder["Response"]["result"] == "SUCCESS") $isOrdered->delete();
            }

            $order_transaction = OrderTransaction::create([
                'student_id' => $this->student->id,
                'subscription_id' => $this->subscription_id,
                'grade_id' => $this->grade_id,
            ]);

            DB::commit();
            if ($order_transaction) return $order_transaction;
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }





    /////////////////////////////////////////////////////
    /////////////      Private Functions     ////////////
    /////////////////////////////////////////////////////


    private function addedSubscriptionDate($latest_date, $student)
    {

        $grades = StudentGrade::where('student_id', $student->id)->get();

        $grades->filter(function ($g) use ($latest_date) {
            if ($g->expire_date !== $latest_date) {
                $g->update(['expire_date' => Carbon::now()->addYear()]);
            }
        });
    }


    private function getGradeAccess($student, $grade_id, $subscription_id)
    {

        DB::beginTransaction();

        try {

            // $now = Carbon::now(strval($student->country['timezone']));
            $now = Carbon::now();

            StudentGrade::create([
                'student_id' => $student->id,
                'grade_id' => $grade_id,
                'subscription_id' => $subscription_id,
                'created_at' => Carbon::now(),
                'expire_date' => $now->addYear(),
            ]);

            $student->update([
                'isSubscriber' => 1,
                'grade_chosen' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            $latest_date = StudentGrade::where('grade_id', $grade_id)
                ->pluck('expire_date');


            if ($student->grades->count() == 1) {

                //Daily Bonus Record Adding
                $this->addDailyBonusRecord($student);

                //Login Bonus Record Adding
                $this->addLoginBonusRecord($student);

                //Login Bonus Record Adding
                $this->addQuestionBonusRecords($student);

                //Championship Bonus Record Adding
                $this->addChampionshipBonusRecords($student);
            }


            $this->addedSubscriptionDate($latest_date, $student);

            DB::commit();

            return response()->json([
                'status' => "successfully purchased.",
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            return $th->getMessage();
        }
    }


    private function addDailyBonusRecord($student)
    {

        try {
            $duplicate = DailyBonus::where('student_id', $student->id)->get();

            if ($duplicate->count() == 0) {
                DailyBonus::create([
                    'student_id' => $student->id,
                    'fifteen' => null,
                    'thirty' => null,
                    'daily' => null,
                ]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    private function addLoginBonusRecord($student)
    {

        $already = StudentLoginBonus::where('student_id', $student->id)->get();

        try {
            if ($already->count() == 0) {

                $allDays = LoginBonus::all();

                StudentLoginBonus::create([
                    'student_id' => $student->id,
                    'date' => Carbon::now(),
                    'day_count' => 1,
                ]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    private function addQuestionBonusRecords($student)
    {

        $already = $student->questionBonus;

        try {

            if ($already->count() == 0) {

                foreach (range(1, 8) as $num) {
                    QuestionBonus::create([
                        'student_id' => $student->id,
                        'point' => $num * 10,
                        'question_count' => $num * 100
                    ]);
                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }



    private function addChampionshipBonusRecords($student)
    {

        $already = $student->championBonus;

        $champions = [
            ['platinum', 50],
            ['gold', 100],
            ['diamond', 200]
        ];

        try {

            if ($already->count() == 0) {

                foreach ($champions as $champ) {
                    ChampionshipBonus::create([
                        'student_id' => $student->id,
                        'point' => 1,
                        'champion' => $champ[0],
                        'fix_level' => $champ[1],
                    ]);
                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function autoSeed()
    {

        // $students = Student::whereIn('id', [1, 10, 11, 12, 13])->get();
        $students = Student::whereIn('id', [1,2,3,4,5,6,7,8,9])->get();


        foreach ($students as $k => $student) {
            $studentGrade = StudentGrade::where('student_id', $student->id)->where('grade_id',1)->first();
            if(!$studentGrade) {
                $this->getGradeAccess($student, 1, 1);
            }
        }

        return "ok";
    }
}
