<?php

namespace App\Http\Controllers\API\Lessons;

use stdClass;
use Carbon\Carbon;
use App\Models\Game;
use App\Models\Unit;
use ReflectionClass;
use App\Models\Grade;
use App\Models\Round;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Category;
use App\Models\StudentGame;
use App\Models\StudentUnit;
use App\Models\StudentGrade;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Http\Traits\gameTraits;
use App\Models\BackgroundImage;
use App\Http\Traits\gameTraits2;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;
use App\Models\AssessmentFinishData;
use App\Http\Traits\gameControlTrait;
use Illuminate\Support\Facades\Cache;

class GameController extends Controller
{



    use gameTraits, gameTraits2, gameControlTrait;


    public function grades(Request $request)
    {

        $student = Student::where('token', $request->header('token'))->first();

        $studentGrades = $student->grades;


        $allGrades = Grade::all();
        $isDone = StudentGrade::where('student_id', $student->id)->where('isDone', 1)->get();


        $studentGrade = $allGrades->map(function ($grade) use ($studentGrades, $isDone, $student) {

            $paid = false;
            $lock = false;
            $day_count = null;
            $expire_date = null;

            foreach ($studentGrades as $studentGrade) {

                if ($studentGrade->id == $grade->id) {
                    $stu_grade = StudentGrade::where('grade_id', $studentGrade->id)->first();
                    $expire_date = $stu_grade->expire_date;

                    $day_count = $stu_grade->created_at
                        ->diff($stu_grade->expire_date);

                    $type = $day_count->invert ? '-' : '';
                    $day_count = $type . $day_count->days;

                    // $day_count = Carbon::now()
                    // ->diff($stu_grade->expire_date)->days;
                }
            }

            if ($student->isSubscriber == 1 && $studentGrades->contains('id', $grade->id)) {
                $paid = true;
                $lock = true;
            } else if ($student->isSubscriber == 0 && $student->grade_chosen == null) {
                $paid = false;
                $lock = true;
            } else if ($student->isSubscriber == 0 && $student->grade_chosen !== null) {
                $paid = false;
                $lock = $student->grade_chosen == $grade->id;
            }


            return [
                'id' => $grade->id,
                'name' => $grade->name,
                'price' => $student->isLocal == 1 ? $grade->local_price : $grade->global_price,
                'day_count' => (int)$day_count ? (int)$day_count : null,
                'expire_date' => $expire_date,
                'paid' => $paid,
                'complete' => $isDone->contains('id', $grade->id),
                'allowed' => $lock && $grade->status == 1,
                'status' =>  $grade->status == 1,
            ];
        });

        return $studentGrade;
    }


    // Lessons

    public function lessons(Request $request)
    {

        $token = $request->header('token');
        $grade = $request->header('grade_id');

        $student = Student::where('token', $token)->first();
        $allLessons = Lesson::where('grade_id', $grade)->get();

        // $studentGrade = $student->grades;
        $GradeChosen = $request->student->grade_chosen;

        $studentLessons = $student->lessons; // ဆော့ပီးတဲ့ lessons

        $assessments = AssessmentFinishData::where('student_id',$student->id)
        ->where('grade_id',$grade)->select('student_id','grade_id','assess_name','finish')->get();

        $count = $assessments->count();

        $ls_count = StudentLesson::where('student_id', $student->id)->where('grade_id',$grade)->get()->count();

        // Map fun
        $lessons = $allLessons->map(function ($lesson, $index) use ($studentLessons, $grade, $count, $ls_count, $GradeChosen, $student) {


        $complete = $studentLessons->contains('id', $lesson->id) || $index == $ls_count ? true : false;

        $gradeDone =StudentGrade::where('student_id',$student->id)->where('grade_id',$grade)->where('isDone',1)->first();
        if($gradeDone){
            $ls_count = 40;
            $complete = true;
        }

            $ls = $ls_count % 8 == 0  ?  $ls_count : $ls_count + 1;

            if($count !== 0 && $count * 8 == $ls ){
                $ls ++;
            }

            return [
                'id' => $lesson->id,
                'grade_id' => $lesson->grade_id,
                'name' => $lesson->name,
                'complete' => $studentLessons->contains('id', $lesson->id),
                // 'allowed' => $GradeChosen ? $complete || ($index > $ls_count - 1 ? false : true) : $index < ($ls == 0 ? 1 : $ls),// Free open for BETA

                'allowed' => $GradeChosen ? ($index == 0 ? true : false) : $index < ($ls == 0 ? 1 : $ls) , // ‌include Assessment for - REAL - (only lesson 1 open if student is free user and chose grade * )


            ];


        });


        return $lessons;




    }


    //======================================================================================//


    public function games(Request $request) // Units
    {

        $student = Student::where('token', $request->header('token'))->first();
        $lesson = $request->header('lesson_id');
        $gradeId = $request->header('grade_id');


        ////////////////////////////////////////////////////////////////////////////

        // $gradeId = Lesson::where('id', $lesson)->pluck('grade_id')->first();

        DB::beginTransaction();
        try {

            if ($student->isSubscriber == 0 && $student->grade_chosen == Null) {
                Student::where('id', $student->id)->update([
                    'grade_chosen' => $gradeId
                ]);
            }

            $lesson_id = Lesson::where('grade_id', $gradeId)
                ->where('id', $lesson)
                // ->where('name',$lesson)
                ->pluck('id')->first();


            $allGame = Unit::where('lesson_id', $lesson_id)->with('lesson')->get();

            $studentUnits = $student->units;


            $units = $allGame->map(function ($unit) use ($studentUnits, $lesson, $gradeId) {

                return [
                    'id' => $unit->id,
                    'lesson_id' => $unit->lesson_id,
                    'lesson_name' => $unit->lesson->name,
                    'name' => $unit->name,
                    'grade_id' => (int)$gradeId,
                    'complete' => $studentUnits->contains('id', $unit->id),
                    'sub_unit' => $unit->games->count() > 1 ? true : false,
                    'unit_status' => $unit->games->count() !== 1 ? Null : $unit->games[0]->status,
                    'category' => $unit->games->count() !== 1 ? Null : $unit->games[0]->category->name
                ];
            });


            DB::commit();
            // if(!$units) return "Game Not found!";
            return $units;
        } catch (\Throwable $th) {
            return $th;
            DB::rollback();
        }
    }


    public function specificGame(Request $request)
    {

        $student = Student::where('token', $request->header('token'))->first();
        $unit_id = $request->header('unit_id');
        $lesson_id = $request->header('lesson_id');
        $game_id = $request->header('game_id');


        $unit = Unit::where('id', $unit_id)->where('lesson_id', $lesson_id)->first();
        // $unit = Unit::find($unit_id);

        if (!$unit || !$student) return "lesson and unit are not match or student not found.";

        $gameInUnit = Game::where('unit_id', $unit_id)->where('id', $game_id)->exists();
        // if(!$gameUnit && $unit && $gameId) return "SubUnit game not found!";

        if ($gameInUnit) {

            $game = Game::find($game_id);

            $name = strval($game->category->name);

            $name = strval(Game::find($game_id)->category->name);

            if (!$this->funExist($name)) return $this->common_functions($game, $student, $unit);
            if (!$name) return "this game is not subUnit game";

            return $this->$name(Game::find($game_id), $student, $unit);
        }

        $games = Game::where('unit_id', $unit_id)->get();

        if ($games->count() == 1) {

            $name = strval($games->first()->category->name);

            if (!$this->funExist($name)) return $this->common_functions($games, $student, $unit);


            return $this->$name($games, $student, $unit);
        };

        return $this->Subunit_category($games, $unit);
    }



    public function end_match(Request $request)
    {


        $token = $request->header('token');
        $gameId = $request->header('game_id');
        $lesson_id = $request->header('lesson_id');
        $question_answer = $request->header('question_answer');
        $point = $request->header('point');

        // =================================

        // return $gradeId = Lesson::find($lesson_id)->grade['id'];


        $student = $request->student;

        $game = Game::find($gameId);

        $unit = optional($game)->unit;

        // return $lessonGames = Lesson::find($lesson_id)->games;
        // return $gamesLesson = Game::find($gameId)->lesson;

        $lessonUnit = Unit::where('lesson_id', $lesson_id)->get();

        $grade = Lesson::where('id', $lesson_id)->first()->grade;

        $exists = $unit->lesson_id == $lesson_id ? true : false;


        if (!$student || !$game || !$exists) {
            return 404;
        }


        $alreadyDone = StudentGame::where('student_id', $student->id)
        ->where('game_id', $gameId)->first();

        // For block already done game adding points and duplicate lessons
        $ExistLesson =  StudentLesson::where('student_id', $student->id)
                ->where('lesson_id', $lesson_id)->first();


        // TEMPORARY BLOCK THIS FEATURE (POINT FILTER) Totally block free Trail players
        // if ($student->grades->count() == 0)  return response()->json(["message" => "Plz subscribe the plan."], 403);


        ////// populate Game records

        if(!$alreadyDone) {
            StudentGame::insert([
                'student_id' => $student->id,
                'game_id' => $gameId,
                'unit_id' => $unit->id,
                'count' => 1 ,
            ]);

        if(!$ExistLesson) $this->addPointFunction($student, $point, $question_answer);

        }else if($alreadyDone && $alreadyDone->count < 5 )
        {
                $alreadyDone->count = $alreadyDone->count + 1;
                $alreadyDone->save();
        }


        $gameDone = $student->games;
        $unitDone = $student->units;
        $lessonDone = StudentLesson::where('student_id', $student->id)->get();

        /// Check sub game check
        $subGameCheck = $unit->games->reject(function ($g) use ($gameDone) {
            return $gameDone->contains('id', $g->id);
        });

        /// Check duplicate unit
        $dup_unit_check = $unitDone->filter(function($done) use($unit){
            return $done->id == $unit->id;
        });

        ////// populate Unit records
        if(count($subGameCheck) == 0 && count($dup_unit_check) == 0) {

            $unitInsert = StudentUnit::insert([
                'student_id' => $student->id,
                'unit_id' => $unit->id,
                'lesson_id' => $lesson_id,
            ]);

        }


        /// unit left in each lesson ?
        $unit_left_check = empty($this->lessonCheck($student, $lessonUnit, $unitDone));

        $lesson_completed = false;
        if($unit_left_check) {
        $lesson_completed = true;

            // Subscription checkpoint (** block adding & updating lesson records **)
            $grade_id = Lesson::find($lesson_id)->grade['id'];
            $studentGrade = StudentGrade::where('student_id', $student->id)->where('grade_id', $grade_id)->first();

            $assessment_prove = AssessmentFinishData::where('student_id',$student->id)
            ->where('grade_id',$grade->id)->count() * 8 + ($grade->id - 1 ) * 40;


            if ($studentGrade && !$ExistLesson && ($lesson_id > $assessment_prove)){

                $lessonInsert = StudentLesson::create([
                    'student_id' => $student->id,
                    'lesson_id' => $lesson_id,
                    'grade_id' => $grade->id,
                    'count' => 1,
                ]);

            }

            /// Delete units and games after add lesson record
            $lessonGamesId = Lesson::find($lesson_id)->games->pluck('id');

            StudentUnit::where('student_id', $student->id)->where('lesson_id', $lesson_id)->delete();
            // StudentGame::where('student_id', $student->id)->whereIn('game_id', $lessonGamesId)->delete();


            //  For Subscription and Real Server (** block adding lesson records **)

                if (!$studentGrade) return response()->json(
                    ["message" => "You are not a subscriber"],402);

            //----------------

        }


        if ($this->gradeCheck($student, $lesson_id)->count() == 0) {

            $grade_id = Lesson::find($lesson_id)->grade['id'];

            $studentGrade = StudentGrade::where('student_id', $student->id)
                ->where('grade_id', $grade_id)->first();


            StudentGrade::where('student_id', $student->id)
                ->where('grade_id', $grade_id)
                ->update(['isDone' => 1,]);

        }


        // repetitive lesson done check for (lesson completed screen)

        // $re_lesson_games = Lesson::find($game->lesson->id)->games;

        // $re_lesson_check = array_filter($re_lesson_games->toArray(), function ($re_l_g) use ($gameDone){
        //     return !$gameDone->contains('id',$re_l_g['id']);
        // });
        // $lesson_completed = count($re_lesson_check) == 0;


        ////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////

        $updateStudent = Student::find($student->id);
        return response()->json([
            'message' => 'success and recorded',
            'fixed_point' => $updateStudent->fixed_point,
            'level' => $updateStudent->level,
            'question_answer' => $updateStudent->question_answer,
            'board' => $updateStudent->board,
            'completed_lesson_id' => $lesson_completed ? $game->lesson->id : 0,
            'completed_lesson_name' => $lesson_completed ? $game->lesson->name : 0,
            // 'repetitive' => $alreadyDone && true
        ], 200);
    }





    private function lessonCheck($student, $lessonUnit, $unitDone)
    {

        try {

            $unitDone = StudentUnit::where('student_id',$student->id)->get();

            // return $lessonUnit->reject(function ($u) use ($unitDone) {
            //     return $unitDone->contains('unit_id', $u->id);
            // });

            return array_filter($lessonUnit->toArray(), function ($u) use ($unitDone){
                return !$unitDone->contains('unit_id', $u['id']);
            });

        } catch (\Throwable $th) {
            throw $th;
        }

    }



    private function gradeCheck($student, $lesson_id)
    {

        try {

            $grade = Lesson::find($lesson_id)->grade;

            $lessons = Lesson::where('grade_id', $grade->id)->get();
            $lessonDone = studentLesson::where('student_id', $student->id)->get();

            return $lessons->filter(function ($i) use ($lessonDone) {
                return !$lessonDone->contains('lesson_id', $i->id);
            });


        } catch (\Throwable $th) {
            throw $th;
        }

    }


    // =========***
    // add point
    // =========***

    private function addPointFunction($student, $point, $question_answer)
    {

        $student_id = $student->id;

        $oldPoint = Student::where('id', $student_id)->first();
        $newPoint = $oldPoint->point + (int)$point;
        $newFixPoint = $oldPoint->fixed_point + (int)$point;

            $lvl = floor($newFixPoint / 10) ;

            if ($lvl <= 50) {
                $board = 'silver';
            }else if
            ($lvl > 50 && $lvl <= 100) {
                $board = 'platinum';
            }
            else if
            ($lvl > 100 && $lvl <= 200) {
                $board = 'gold';
            }
            else if
            ($lvl > 200) {
                $board = 'diamond';
            }


        $data = [
            'point' => $newPoint > 3000 ? 3000 : $newPoint,
            'fixed_point' => $newFixPoint > 3000 ? 3000 : $newFixPoint,
            'board' => $board
        ];

            if ($newFixPoint >= 0 && $newFixPoint <= 3000) {
                    $level = floor($newFixPoint / 10);
                    $data['level'] = $level < 1 ?  1 : $level;
                    Student::where('id', $student->id)->update($data);
            } else {
                    Student::where('id', $student->id)->update($data);
            }

        Student::where('id', $student_id)->update([
            'question_answer' => (int)$question_answer + Student::find($student_id)->question_answer
        ]);
    }





    // ==========================================
    // ================= db-test =================
    // ==========================================

    // public function test(Request $request)
    // {
    //     $studentID = $request->header('student_id');
    //     $gradeID = $request->header('grade_id');
    //     $unitID = $request->header('unit_id');
    //     $gameId = $request->header('game_id');
    //     $lessonId = $request->header('lesson_id');

    //     $result = DB::connection('secondary_mysql')->table('end_matches')->insert([
    //         'student_id' => $studentID,
    //         'unit_id' => $unitID,
    //         'game_id' => $gameId,
    //         'lesson_id' => $lessonId,
    //         'grade_id' => $gradeID
    //     ]);

    //     return response()->json($result);
    // }






    // For Common Function

    private function funExist($method)
    {
        $traits = class_uses_recursive(static::class);

        foreach ($traits as $trait) {
            if (method_exists($trait, $method)) {
                return true;
            }
        }

        return false;
    }




}




    // public function end_match(Request $request)
    // {

    //     $token = $request->header('token');
    //     $gameId = $request->header('game_id');
    //     $lesson_id = $request->header('lesson_id');
    //     $question_answer = $request->header('question_answer');
    //     $point = $request->header('point');

    //     // =================================

    //     $student = Student::where('token', $token)->first();

    //     $game = Game::find($gameId);
    //     $unit = optional($game)->unit;
    //     $grade = Lesson::where('id', $lesson_id)->first()->grade;

    //     $exists = $unit->lesson_id == $lesson_id ? true : false;

    //     if (!$student || !$game || !$exists) {
    //         return 404;
    //     }


    //     $alreadyDone = $student->games()->where('game_id', $gameId)->first();

    //     if(!$alreadyDone){
    //         StudentGame::insert([
    //             'student_id' => $student->id,
    //             'unit_id' => $unit->id,
    //             'game_id' => $gameId,
    //             'count' => 1
    //         ]);

    //     }

    //     $count = StudentGame::where('student_id',$student->id)
    //     ->where('game_id',$gameId)->pluck('count')->first();


    //     if($count < 5){

    //         StudentGame::where('student_id', $student->id)
    //         ->where('game_id', $gameId)
    //         ->update([
    //             'unit_id' => $unit->id,
    //             'count' => $count + 1,
    //         ]);


    //     }

    //     // Alternative point values
    //     $alreadyDoneGame = $student->games()->where('game_id', $gameId)->first();
    //     $point = ($alreadyDoneGame->count == 3) ? $point * 1.5 : (($alreadyDoneGame->count == 5) ? $point * 2 : $point);

    //     // $gameCount3 = $student->games()->where('student_id', $student->id)->first();

    //     // $repetitive = $gameDone->groupBy('game_id')->map(function ($group) {
    //     //     return $group->count();
    //     // })->values();


    //     if ($count == 5 && !StudentUnit::where('student_id',$student->unit)->where('unit_id',$unit->id)->exists() ) {
    //         $unitInsert = StudentUnit::insert([
    //             'student_id' => $student->id,
    //             'unit_id' => $unit->id,
    //             'lesson_id' => $lesson_id,
    //         ]);
    //     }

    //     $lessonUnit = Unit::where('lesson_id', $lesson_id)->get();

    //     if (
    //         $this->lessonCheck($student, $lessonUnit)->count() == 0
    //         && $unitCheck->count() == 0
    //     ) {

    //         $alreadyExist =  StudentLesson::where('student_id', $student->id)
    //             ->where('lesson_id', $lesson_id)->first();

    //         if ($alreadyExist) return 201;

    //         $lessonInsert = StudentLesson::create([
    //             'student_id' => $student->id,
    //             'lesson_id' => $lesson_id,
    //             'grade_id' => $grade->id,
    //             'status' => 1
    //         ]);

    //         // if ($lessonInsert) {
    //         //     StudentUnit::where('student_id', $student->id)
    //         //         ->where('lesson_id', $lesson_id)->delete();
    //         // }
    //     }


    //     if ($this->gradeCheck($student, $lesson_id)->count() == 0) {

    //         $grade_id = Lesson::find($lesson_id)->grade['id'];

    //         $studentGrade = StudentGrade::where('student_id', $student->id)
    //             ->where('grade_id', $grade_id)->first();

    //         if (!$studentGrade) return response()->json(
    //             ["status" => "U need to buy a grade"],
    //             200
    //         );

    //         StudentGrade::where('student_id', $student->id)
    //             ->where('grade_id', $grade_id)
    //             ->update(['isDone' => 1,]);

    //         $gradeDoneCheck = StudentGrade::where('student_id', $student->id)
    //             ->where('isDone', 1)->pluck('grade_id');

    //         $DeleteLessons = Lesson::whereIn('grade_id', $gradeDoneCheck)->pluck('id');

    //         StudentLesson::where('student_id', $student->id)
    //             ->whereIn('lesson_id', $DeleteLessons)->delete();
    //     }


    //     //ထူးထူး
    //     // if ($student->grade_chosen == null) {
    //     //  $this->addPointFunction($student, $request->header('point'),$request->header('question_answer'));
    //     // }
    //     $this->addPointFunction($student, $point, $question_answer);


    //     return response()->json([
    //         'status' => 'success and recorded',
    //         'fixed_point' => Student::where('id', $student->id)->pluck('fixed_point')->first(),
    //     ], 200);
    // }
