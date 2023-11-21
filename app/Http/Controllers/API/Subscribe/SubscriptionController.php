<?php

namespace App\Http\Controllers\API\Subscribe;

use Carbon\Carbon;
use App\Models\Grade;
use App\Models\Country;
use App\Models\Student;
use App\Models\StudentGrade;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Models\SubscriptionPlan;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{


    public $token, $grade_id, $subscription_id;

    public function __construct(Request $request) {
        $this->token = $request->header('token');
        $this->grade_id = $request->header('grade_id');
        $this->subscription_id = $request->header('payment_id');
    }


    public function plans(Request $request){

        $student = Student::where('token', $this->token)->first();


        return $plans = Subscription::all()->map(function ($p) use($student){

            return [
                'id' => $p->id,
                'name' => $p->name,
                'currency' => $p->currency,
            ];
        });

    }


    public function purchase(Request $request){


        $student = Student::where('token', $this->token)->where('status',1)->first();

        if(!$student){
            return response()->json([
                "status" => "you are not allowed for this process."
            ], 403);
        }

        $purchasing = $this->purchasing($student, $this->grade_id, $this->subscription_id);

        if($purchasing){

            // $studentGrades = $student->grades;


            StudentGrade::create([
                'student_id' => $student->id,
                'grade_id' => $this->grade_id,
                'subscription_id' => $this->subscription_id,
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
        return "already purchased";

    }


    public function removePlan(Request $request){
        $student = Student::where('token', $this->token)->where('status',1)->first();

        $grade = StudentGrade::where('student_id', $student->id)->first();

        $lessons = $student->lessons;


        return $lessons;
        // return $studentLessons;

    }


    public function purchasing($student, $grade_id, $subscription_id){

        return !$student->grades->contains('id', $grade_id) ? true : false;



    }








}
