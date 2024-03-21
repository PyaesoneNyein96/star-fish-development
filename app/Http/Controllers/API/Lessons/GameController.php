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
        $GradeChosen = $student->grade_chosen;

        $studentLessons = $student->lessons; // ဆော့ပီးတဲ့ lessons

        $assessments = AssessmentFinishData::where('student_id',$student->id)
        ->where('grade_id',$grade)->select('student_id','grade_id','assess_name','finish')->get();

        $count = $assessments->count();

        $ls_count = StudentLesson::where('student_id', $student->id)->where('grade_id',$grade)->get()->count();

        $lessons = $allLessons->map(function ($lesson, $index) use ($studentLessons, $grade, $count, $ls_count, $GradeChosen) {

        $complete = $studentLessons->contains('id', $lesson->id) || $index  == $ls_count ? true : false;


            $ls = $ls_count % 8 == 0  ?  $ls_count : $ls_count + 1;

            if($count !== 0 && $count * 8 == $ls ){
                $ls ++;
            }

            $gc = $GradeChosen;
            return [
                'id' => $lesson->id,
                'grade_id' => $lesson->grade_id,
                'name' => $lesson->name,
                'complete' => $studentLessons->contains('id', $lesson->id),
                // 'allowed' => $complete || ($index > $count * 8 - 1  ? false : true), // normal index +
                // 'allowed' => $gc && ($complete || ($index > $ls_count - 1  ? false : true)), // normal index+
                // 'allowed' =>  $index < ($ls == 0 ? 1 : $ls)  // ‌include Assessment
                'allowed' => $gc ? $gc && ($complete || ($index > $ls_count - 1  ? false : true)) :  $index < ($ls == 0 ? 1 : $ls)  // ‌include Assessment

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


        $student = Student::where('token', $token)->first();

        $game = Game::find($gameId);

        $unit = optional($game)->unit;

        $grade = Lesson::where('id', $lesson_id)->first()->grade;

        $exists = $unit->lesson_id == $lesson_id ? true : false;


        if (!$student || !$game || !$exists) {
            return 404;
        }


        $alreadyDone = StudentGame::where('student_id', $student->id)->where('status', 1 )
        ->where('game_id', $gameId)->first();


        // TEMPORARY BLOCK THIS FEATURE (POINT FILTER)
        // if ($student->grades->count() == 0)  return response()->json(["status" => "Plz subscribe the plan."], 200);

        if(!$alreadyDone) {
            StudentGame::insert([
                'student_id' => $student->id,
                'game_id' => $gameId,
                'unit_id' => $unit->id,
                'status' => 1,
                'count' => 1 ,
            ]);

        }else if($alreadyDone && $alreadyDone->count != 5){

                $fix_count = $alreadyDone->count;
                $alreadyDone->count = $fix_count + 1;
                $alreadyDone->save();
        }




        $gameDone = StudentGame::where('student_id', $student->id)->get();
        $unitDone = StudentUnit::where('student_id', $student->id)->get();

        $unitCheck = $unit->games->reject(function ($g) use ($gameDone) {  // sub units
            return $gameDone->contains('game_id', $g->id);
        });

        $gameCheck_two  = $unitDone->filter(function ($u) use ($unit) {
            return $u->unit_id == $unit->id;
        });


        // To prevent adding StudentUnit record for already done games;
        $lessonCheck = StudentLesson::where('student_id', $student->id)
        ->where('lesson_id', $unit->lesson_id)->first();


        if ($unitCheck->count() == 0 && $gameCheck_two->count() == 0 && !$lessonCheck ) {

            $unitInsert = StudentUnit::insert([
                'student_id' => $student->id,
                'unit_id' => $unit->id,
                'lesson_id' => $lesson_id,
            ]);

        }

        $lessonUnit = Unit::where('lesson_id', $lesson_id)->get();


        if (
            $this->lessonCheck($student, $lessonUnit)->count() == 0
            && $unitCheck->count() == 0
        ) {

            $alreadyExist =  StudentLesson::where('student_id', $student->id)
                ->where('lesson_id', $lesson_id)->first();

            if ($alreadyExist) return 201;

            $lessonInsert = StudentLesson::create([
                'student_id' => $student->id,
                'lesson_id' => $lesson_id,
                'grade_id' => $grade->id,
                'status' => 1
            ]);

            if ($lessonInsert) {
                StudentUnit::where('student_id', $student->id)
                    ->where('lesson_id', $lesson_id)->delete();
            }
        }


        if ($this->gradeCheck($student, $lesson_id)->count() == 0) {

            $grade_id = Lesson::find($lesson_id)->grade['id'];

            $studentGrade = StudentGrade::where('student_id', $student->id)
                ->where('grade_id', $grade_id)->first();

            if (!$studentGrade) return response()->json(
                ["status" => "U need to buy a grade"],
                402
            );



            StudentGrade::where('student_id', $student->id)
                ->where('grade_id', $grade_id)
                ->update(['isDone' => 1,]);

            $gradeDoneCheck = StudentGrade::where('student_id', $student->id)
                ->where('isDone', 1)->pluck('grade_id');

            $DeleteLessons = Lesson::whereIn('grade_id', $gradeDoneCheck)->pluck('id');

            StudentLesson::where('student_id', $student->id)
                ->whereIn('lesson_id', $DeleteLessons)
                ->where('grade_id', $grade_id)
                ->delete();

            // StudentLesson::where('student_id', $student->id)
            //     ->whereIn('lesson_id', $DeleteLessons)->delete();
        }


        //ထူးထူး
        // if ($student->grade_chosen == null) {
        //  $this->addPointFunction($student, $request->header('point'),$request->header('question_answer'));
        // }


        $this->addPointFunction($student, $point, $question_answer);


        // $assessment_records = AssessmentFinishData::where('student_id',$student->id)
        // ->where('grade_id',$grade)->select('student_id','grade_id','assess_name','finish')->get();


        return response()->json([
            'status' => 'success and recorded',
            // 'assessment_status' => $data,
            'fixed_point' => Student::where('id', $student->id)->pluck('fixed_point')->first(),
        ], 200);
    }





    private function lessonCheck($student, $lessonUnit)
    {



        $unitDone = StudentUnit::where('student_id', $student->id)->get();


        return $filter = $lessonUnit->reject(function ($u) use ($unitDone) {
            return $unitDone->contains('unit_id', $u->id);
        });
    }



    private function gradeCheck($student, $lesson_id)
    {

        $grade = Lesson::find($lesson_id)->grade;

        $lessons = Lesson::where('grade_id', $grade->id)->get();
        $lessonDone = studentLesson::where('student_id', $student->id)->get();

        // logger($lessons->toArray());
        // logger($lesson_id);
        // logger($lessonDone->toArray());

        $result = $lessons->filter(function ($i) use ($lessonDone) {
            return !$lessonDone->contains('lesson_id', $i->id);
        });

        // logger($result->toArray());
        return $result;
    }


    // =========***
    // add point
    // =========***

    private function addPointFunction($student, $point, $question_answer)
    {

        // return 'cc';
        $student_id = $student->id;

        $oldPoint = Student::where('id', $student_id)->first();
        $newPoint = $oldPoint->point + (int)$point;
        $newFixPoint = $oldPoint->fixed_point + (int)$point;

        if ($oldPoint->level >= 1 && $oldPoint->level <= 50) {
            $board = 'silver';
        }

        if ($oldPoint->level >= 51 && $oldPoint->level <= 100) {
            $board = 'platinum';
        }
        if ($oldPoint->level >= 101 && $oldPoint->level <= 200) {
            $board = 'gold';
        }
        if ($oldPoint->level >= 201 && $oldPoint->level <= 300) {
            $board = 'diamond';
        }

        if ($newFixPoint >= 0 && $newFixPoint <= 3000) {
            $level = ceil($newFixPoint / 10);
            Student::where('id', $student_id)->update([
                'point' => $newPoint,
                'fixed_point' => $newFixPoint,
                'level' => $level,
                'board' => $board
            ]);
        } else {
            Student::where('id', $student_id)->update([
                'point' => $newPoint,
                'fixed_point' => $newFixPoint,
                'board' => $board
            ]);
        }

        // Total - ans_ques


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
