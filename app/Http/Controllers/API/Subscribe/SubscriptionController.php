<?php

namespace App\Http\Controllers\API\Subscribe;

use Carbon\Carbon;
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

            return response()->json([
                'status' => "successfully purchased.",
            ], 200);

        }

        return "already purchased";

    }


    public function removePlan(Request $request) {

            $student = Student::where('token', $this->token)->where('status',1)->first();

            $gradeLessons = Grade::find($this->grade_id)->lessons;
            $gradeGames = Grade::find($this->grade_id)->games;


            DB::beginTransaction();

            try {

                $del_lessons = $gradeLessons->filter(function($l) use($student) {
                    return $student->lessons->contains('id', $l->id);
                })->pluck('id');

                $res1= StudentLesson::where('student_id', $student->id)->whereIn('id', $del_lessons)->delete();

                $del_games = $gradeGames->filter(function($g) use($student) {
                    return $student->games->contains('id', $g->id);
                })->pluck('id');

                $res2 = StudentGame::where('student_id',$student->id)->whereIn('id',$del_games)->delete();

                if($res1 && $res2){
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


    private function addedSubscriptionDate($latest_date){

        $grades = StudentGrade::where('student_id', $this->student->id)->get();

        $grades->filter(function($g) use($latest_date){
            if($g->expire_date !== $latest_date){
               $g->update(['expire_date' => Carbon::now()->addYear()]);
            }
        });


    }








}
