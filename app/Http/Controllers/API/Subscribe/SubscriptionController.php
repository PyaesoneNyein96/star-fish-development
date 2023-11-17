<?php

namespace App\Http\Controllers\API\Subscribe;

use App\Models\Grade;
use App\Models\Country;
use App\Models\Student;
use App\Models\StudentGrade;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SubscriptionController extends Controller
{



    public function plans(Request $request){

        $plans = Subscription::all();
        $student = Student::where('token', $request->header('token'))->first();


        $plans = $plans->map(function ($p) use($student){

            return [
                'id' => $p->id,
                'name' => $p->name,
                'currency' => $p->currency,
            ];
        });

        return $plans;


    }


    public function purchase(Request $request){

        $token = $request->header('token');
        $grade_id = $request->header('grade_id');
        $subscription_id = $request->header('payment_id');

        $student = Student::where('token', $token)->where('status',1)->first();

        if(!$student){
            return response()->json([
                "status" => "you are not allowed for this process."
            ], 403);
        }

        $purchasing = $this->purchasing($student, $grade_id, $subscription_id);


        if($purchasing){

            StudentGrade::create([
                'student_id' => $student->id,
                'grade_id' => $grade_id,
                'subscription_id' => $subscription_id,
                'created_at' => Carbon::now(strval($student->country['timezone']))
            ]);

            $student->update([
                'isSubscriber' => 1,
                'grade_chosen' => null,
                'created_at' => Carbon::now(strval($student->country['timezone'])),
                'updated_at' => Carbon::now(strval($student->country['timezone']))
            ]);

            return response()->json([
                'status' => "successfully purchased.",
            ], 200);

        }

    }


    private function purchasing($student, $grade_id, $subscription_id){

        return true;

    }








}
