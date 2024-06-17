<?php

namespace App\Http\Traits;

use App\Models\Grade;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\DailyBonus;
use App\Models\StudentGame;
use App\Models\StudentUnit;
use App\Models\StudentGrade;
use Illuminate\Http\Request;
use App\Models\QuestionBonus;
use App\Models\StudentLesson;
use App\Models\ChampionshipBonus;
use App\Models\StudentLoginBonus;
use Illuminate\Support\Facades\DB;

trait removePlanTrait {



    public function removePlan(Request $request){

        $student = Student::where('token', $request->header('token'))->first();
        $grade_id = $request->header('grade_id');
        $spec_grade = Grade::find($grade_id);


        DB::beginTransaction();
        try {

            $lessonByGrades = Lesson::where('grade_id', $grade_id)->pluck('id');

            $lessonsByGames = $student->games->pluck('lesson')->pluck('id')->unique()->values();

            $lessonFiltered = array_intersect($lessonByGrades->toArray(), $lessonsByGames->toArray());

            $gameIds =  Lesson::whereIn('id',$lessonFiltered)->get()->pluck('games')->flatten()->pluck('id');


            // delete grade ----
            $del_grade = StudentGrade::where('student_id', $student->id)->where('grade_id', $grade_id)->delete();
            // delete lessons ----
            $del_lessons = StudentLesson::where('student_id',$student->id)->where('grade_id',$grade_id)->delete();

            // delete units ----
            $del_units = StudentUnit::where('student_id',$student->id)->whereIn('unit_id', $spec_grade->units->pluck('id'))->delete();

            // delete games ----
            $del_games = StudentGame::where('student_id',$student->id)->whereIn('game_id', $gameIds)->delete();


            /////////////  -  ////////////

            $grade_count = Student::where('token', $student->token)->first()->grades->count();

            if($grade_count == 0){

                DailyBonus::where('student_id', $student->id)->delete();

                StudentLoginBonus::where('student_id', $student->id)->delete();

                QuestionBonus::where('student_id', $student->id)->delete();

                ChampionshipBonus::where('student_id', $student->id)->delete();

                $student->update([
                    'isSubscriber' => 0
                ]);

            }

        DB::commit();

        return response()->json(["message" => "Successfully deleted Grade $grade_id and relative records."], 200);


        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th], 500);
        }




    }






     // public function removePlan(Request $request) {

    //     $student = Student::where('token', $this->token)->where('status',1)->first();

    //     $gradeLessons = Grade::find($this->grade_id)->lessons;

    //     $gradeUnit = Grade::find($this->grade_id)->units->pluck('id');

    //     $gradeGames = Game::whereIn('unit_id', $gradeUnit)->get();


    //     DB::beginTransaction();

    //     try {

    //         $del_lessons = $gradeLessons->filter(function($l) use($student) {
    //             return $student->lessons->contains('id', $l->id);
    //         })->pluck('id');

    //         $res1= StudentLesson::where('student_id', $student->id)->whereIn('id', $del_lessons)->delete();

    //     //////////////////////////////

    //         $del_units = $gradeUnit->filter(function($l) use($student){
    //             return $student->units->contains('id', $l->id);
    //         })->pluck('id');

    //         $res2 = StudentUnit::where('student_id', $student->id)->whereIn('id', $del_units)->delete();

    //     //////////////////////////////

    //         $del_games = $gradeGames->filter(function($g) use($student) {
    //             return $student->games->contains('id', $g->id);
    //         })->pluck('id');

    //         $res3 = StudentGame::where('student_id',$student->id)->whereIn('id',$del_games)->delete();

    //         if($res1 && $res3){
    //             StudentGrade::where('grade_id',$this->grade_id)->delete();
    //         }

    //         DB::commit();

    //         return true;


    //    } catch (\Throwable $th) {
    //         DB::rollback();
    //         return $th;
    //    }




    // }



















}
