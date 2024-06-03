<?php

namespace App\Http\Controllers\API\Mission;

use Carbon\Carbon;
use App\Models\Game;
use App\Models\Grade;
use App\Models\Lesson;

use App\Models\Student;
use App\Models\Assessment;
use App\Models\DailyBonus;
use App\Models\LoginBonus;
use App\Models\StudentGame;
use App\Models\StudentGrade;
use Illuminate\Http\Request;
use App\Models\QuestionBonus;
use App\Models\StudentLesson;
use App\Models\LoginDailyBonus;
use App\Models\ChampionshipBonus;
use App\Models\StudentLoginBonus;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\AssessmentFinishData;
use App\Http\Traits\PointAddingTrait;
use Illuminate\Support\Facades\Cache;
use App\Models\StudentChampionshipBonus;
use App\Http\Traits\AssessmentMissionTrait;
use Illuminate\Pagination\LengthAwarePaginator;


class MissionController extends Controller
{
    //
    use PointAddingTrait;
    use AssessmentMissionTrait;



    //===============================================================//
    // REPETITIVE GAME -
    //===============================================================//

    public function repetitiveGameList(Request $request){


        $repeat = StudentGame::where('student_id', $request->student->id)->get();

        $repetitiveRecords =  StudentGame::where('student_id', $request->student->id)
        ->where('count', '<=', 5)->get();


        $stu_grades = StudentGrade::where('student_id', $request->student->id)
        ->orderBy('created_at','desc')->pluck('grade_id');

        $grades = Grade::whereIn('id',$stu_grades)->orderByRaw('FIELD(id, 2, 1)')->get();

        if (!$grades || $grades->count() == 0) return response()->json(["message" => "You must be a subscriber for this feature."], 200);

        $grade_Cache_Key = implode('_', $grades->pluck('id')->toArray());

        // $rawUnitGames = $grades->pluck('units')->flatten()->pluck('games')->flatten();

        $rawUnitGames = Cache::rememberForever($grade_Cache_Key, function() use($grades){
            return $grades->pluck('units')->flatten()->pluck('games')->flatten();
        });



        /// ====================== 3 times

        $ThreeTimes = $rawUnitGames->map(function ($raw) use ($repetitiveRecords) {

            $repeat = $repetitiveRecords->where('game_id', $raw->id)->first();
            $exist = isset($repeat);
            $repeat = optional($repeat);


            if($exist && $repeat->count >= 3){

                if( $repeat->claimed_3 == 0){
                    $claimed = false;
                }
                else if($repeat->claimed_3 == 1){
                    $claimed = true;
                }
                else if($repeat->count < 3 && $repeat->claimed_3 == 0){
                    $claimed = false;
                }

            }
            else{
                $claimed = false;
            }


            return [
                'game_id' => $raw->id,
                'name' => "Game - " . $raw->name . ": 3 repetitive practices",
                // 'grade' => $raw->unit->grade->name,
                'allowed' => $repeat->count >= 3 ,
                'claimed' => $claimed ,
                'count' => $repeat->count,
                'point' =>  3,

            ];
        });



        /// ====================== 5 times

        $FiveTimes = $rawUnitGames->map(function ($raw) use ($repetitiveRecords) {

            $repeat = $repetitiveRecords->where('game_id', $raw->id)->first();

            $repeat = optional($repeat);
            return [
                'game_id' => $raw->id,
                'name' => "Game - " . $raw->name . ": 5 repetitive practices",
                // 'grade' => $raw->unit->grade->name,
                'allowed' => $repeat->count == 5,
                'claimed' =>  $repeat->count < 5 ? false : ($repeat->count == 5 && $repeat->claimed_5 == 0 ? false : true),
                'count' => $repeat->count,
                'point' => 5
            ];
        });


        $collection = array_merge($ThreeTimes->toArray(), $FiveTimes->toArray());


        $collection = new Collection($collection);

        $collection = $collection->sortBy(function ($lesson) {

            if ($lesson['allowed']) {
                return 0;
            }
            else{
                return 1;
            }

            // elseif ($lesson['allowed'] && $lesson['claimed']) {
            //     return 1;
            // }  elseif ($lesson['claimed']) {
            //     return 2;
            // } else {
            //     return 3;
            // }

        });

        // $collection = $collection->sortByDesc('grade');

        $perPage = $request->header('perPage') ? $request->header('perPage') : 20;
        $page = $request->header('page') ? $request->header('page') : 1;
        $startingPoint = 0;

        $slicedItems = $collection->slice($startingPoint, $perPage * $page)->all();

        $data =  collect($slicedItems)->values();

        return response()->json([
            'data' => $data,
            'perPage' => $perPage * $page > $data->count() ? $data->count() : $perPage * $page,
            'page' => $page,
            'total' => $data->count()
        ], 200);

    }


    // Repetitive Bonus Claim

     public function repetitiveClaimGame(Request $request)
    {

        $student = $request->student;
        $count = $request->header('count');
        $game_id = $request->header('game_id');

        DB::beginTransaction();
        try {

            $claimUpdate = StudentGame::where('game_id', $game_id)
                ->where('student_id', $request->student->id)->first();

            $sms = null;
            if ($claimUpdate->claimed_3 == 0 && $count <= 3 ) {
                $claimUpdate->claimed_3 = 1;
                $sms = 3;
                $this->point_lvl($student, 1);
            } else if ($claimUpdate->claimed_5 == 0 && $count == 5) {
                $claimUpdate->claimed_5 = 1;
                $sms = 5;
                $this->point_lvl($student, 3);
            }

            $claimUpdate->save();


            DB::commit();
            return response()->json([
                'message' => $sms == null ? "Already Claimed this bonus!" : "Successfully claimed " . $sms . " repetitive bonus."
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
            return response()->json($th, 200);
        }
    }














    //===============================================================//
    // REPETITIVE LESSON -
    //===============================================================//



    // Repetitive Lesson List
    // public function repetitiveLessonList(Request $request)
    // {

    //     $repeat = StudentLesson::where('student_id', $request->student->id)
    //         ->get();

    //     $repetitiveRecords =  StudentLesson::where('student_id', $request->student->id)
    //         ->where('count', '<=', 5)
    //         ->get();


    //     $gradeId = Student::find($request->student->id)->grades;


    //     if (!$gradeId || $gradeId->count() == 0) return response()->json(["message" => "You must be a subscriber for this feature."], 200);

    //     $rawLessons = Lesson::whereIn('grade_id', $gradeId->pluck('id'))->get();



    //     /// ====================== 3 times

    //     $ThreeTimes = $rawLessons->map(function ($raw) use ($repetitiveRecords) {
    //         $repeat = $repetitiveRecords->where('lesson_id', $raw->id)->first();
    //         return [
    //             'lesson_id' => $raw->id,
    //             'name' => "Lesson " . $raw->name . ": 3 repetitive practices",
    //             'grade' => $raw->grade->name,
    //             'allowed' => optional($repeat)->count == 3 || optional($repeat)->count == 4,
    //             // 'claimed' => (optional($repeat)->count >= 3 && optional($repeat)->count < 5) && optional($repeat)->claimed_3 === 0 && false,
    //             'claimed' => (optional($repeat)->count >= 3 && optional($repeat)->count < 5) && optional($repeat)->claimed_3 == 0 ? false : true,
    //             'count' => optional($repeat)->count,
    //             'point' =>  3,

    //         ];
    //     });


    //     // /// ====================== 5 times

    //     $FiveTimes = $rawLessons->map(function ($raw) use ($repetitiveRecords) {
    //         $repeat = $repetitiveRecords->where('lesson_id', $raw->id)->first();
    //         return [
    //             'lesson_id' => $raw->id,
    //             'name' => "Lesson " . $raw->name . ": 5 repetitive practices",
    //             'grade' => $raw->grade->name,
    //             'allowed' => optional($repeat)->count == 5,
    //             'claimed' => optional($repeat)->count == 5 && optional($repeat)->claimed_5 == 0 ? false : true,
    //             'count' => optional($repeat)->count,
    //             'point' => 5
    //         ];
    //     });

    //     $collection = array_merge($ThreeTimes->toArray(), $FiveTimes->toArray());

    //     // foreach ($collection as $k => $v) {
    //     //      $v['i'] = 3  ;
    //     // }

    //     // return $collection;



    //     $perPage = $request->header('perPage') ? $request->header('perPage') : 20;
    //     $page = $request->header('page') ? $request->header('page') : 1;
    //     // $startingPoint = ($page - 1) * $perPage;
    //     $startingPoint = 0;


    //     $collection = new Collection($collection);

    //     $collection = $collection->sortByDesc(function ($lesson) {

    //         if ($lesson['claimed'] && $lesson['allowed']) {
    //             return 0;
    //         } elseif ($lesson['claimed'] && $lesson['allowed']) {
    //             return 1;
    //         }  elseif ($lesson['claimed']) {
    //             return 2;
    //         } else {
    //             return 3;
    //         }

    //     });

    //     $slicedItems = $collection->slice($startingPoint, $perPage * $page)->all();

    //     $data =  collect($slicedItems)->values();

    //     return response()->json([
    //         'data' => $data,
    //         'perPage' => $perPage * $page > $data->count() ? $data->count() : $perPage * $page,
    //         'page' => $page,
    //         'total' => $data->count()
    //     ], 200);

    //     // $paginatedData = new LengthAwarePaginator(
    //     //     $slicedItems,
    //     //     $collection->count(), // Total number of items
    //     //     $perPage,
    //     //     $page,
    //         // ['path' => url()->current(), 'query' => request()->query()]
    //     // );

    //     // return response()->json([
    //     //     'data' => $paginatedData->items(),
    //     //     'page' => $paginatedData->currentPage(),
    //     //     'perPage' => (int)$perPage,
    //     //     'lastPage' => $paginatedData->lastPage(),
    //     //     'total_items' => $collection->count()

    //     // ], 200);

    // }

    // Repetitive Bonus Claim
    // public function repetitiveClaimLesson(Request $request)
    // {

    //     $student = $request->student;
    //     $count = $request->header('count');
    //     $lesson_id = $request->header('lesson_id');

    //     DB::beginTransaction();
    //     try {

    //         $claimUpdate = StudentLesson::where('lesson_id', $lesson_id)
    //             ->where('student_id', $request->student->id)->first();

    //         $sms = null;
    //         if ($claimUpdate->claimed_3 == 0 && ($count == 3 || $count == 4)) {
    //             $claimUpdate->claimed_3 = 1;
    //             $sms = 3;
    //             $this->point_lvl($student, 1);
    //         } else if ($claimUpdate->claimed_5 == 0 && $count == 5) {
    //             $claimUpdate->claimed_5 = 1;
    //             $sms = 5;
    //             $this->point_lvl($student, 3);
    //         }

    //         $claimUpdate->save();


    //         DB::commit();
    //         return response()->json([
    //             'message' => $sms == null ? "Already Claimed this bonus!" : "Successfully claimed " . $sms . " repetitive bonus."
    //         ], 200);
    //     } catch (\Throwable $th) {
    //         DB::rollback();
    //         return $th;
    //         return response()->json($th, 200);
    //     }
    // }



    // ===============================================================//
    // Daily Bonus -
    // ===============================================================//

    public function dailyBonusCheck(Request $request)
    {

        try {

            $dailyRecord = $request->student->dailyBonus->first();


            $day_count = $dailyRecord->created_at->diffInDays(Carbon::now());

            if (($dailyRecord->updated_at->addDays() <= Carbon::now() ||
                !$dailyRecord->first || !$dailyRecord->second || !$dailyRecord->daily) && $day_count < 7) {


                // daily Update process
                $dailyRecord->update([
                    // 'first' => Carbon::now()->addMinutes(1),
                    // 'second' => Carbon::now()->addMinutes(3),
                    // 'daily' => Carbon::Now()->addHours(1),
                    'first' => Carbon::now()->addMinutes(15),
                    'second' => Carbon::now()->addMinutes(30),
                    'daily' => Carbon::Now()->addDays(),
                    'day_count' => $day_count,
                    'updated_at' => Carbon::now()
                ]);
            } else if ($day_count > 7) {

                $dailyRecord->update([
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'day_count' => 0,
                ]);
            }

            return response()->json([
                'message' => 'Daily-bonus record updated successfully.'
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    // Daily Bonus list
    public function dailyBonusList(Request $request)
    {

        $record =  $request->student->dailyBonus->first();

        $now = Carbon::now()
            // ->addMinutes(35)
        ;

        $result = [
            [
                'name' => "15 mins",
                'allowed' => $record->first == 1 || ($record->first != 1 && Carbon::parse($record->first) <= Carbon::now()) ,
                'claimed' => $record->first == 1 ,
                'full_name' => "15 minutes time spent in the app."
            ],
            [
                'name' => "30 mins",
                 'allowed' => $record->second == 1 || ($record->second != 1 && Carbon::parse($record->second) <= Carbon::now()) ,
                'claimed' => $record->second == 1 ,
                'full_name' => "30 minutes time spent in the app."
            ],
            [
                'name' => "daily",
                'allowed' => $record->daily == 1 || ($record->daily != 1 && Carbon::parse($record->daily)->isSameDay(Carbon::now())),
                'claimed' => $record->daily == 1,
                'full_name' => "Daily Loging"
            ],
        ];

        return $result;
    }

    // Daily Bonus claim
    public function dailyBonusClaim(Request $request)
    {

        $record = $request->student->dailyBonus->first();

        $now = Carbon::now()
            // ->addMinutes(30)
        ;

        $claim_name = $request->header('claim_name');


        $first_claim = $claim_name == '15 mins';
        $second_claim = $claim_name == '30 mins';
        $daily_claim = $claim_name == 'daily';

        DB::beginTransaction();
        try {

            // $msg;
            $day_count = $record->created_at->diffInDays(Carbon::now());


            if ($first_claim && $record->first != 1) {
                $record->update([
                    'first' =>  Carbon::parse($record->first) <= $now ? 1 : $record->first
                ]);
                $msg = "15 minutes";
            }


            if ($second_claim && $record->second != 1) {
                $update = $record->update([
                    'second' => Carbon::parse($record->second) <= $now ? 1 : $record->second
                ]);
                $msg = "30 minutes";
            }

            if ($daily_claim && $record->daily != 1 && Carbon::parse($record->daily)->isSameDay($now)) {
                $record->update([
                    'daily' =>  Carbon::parse($record->daily)->isSameDay($now)  ? 1 : $record->daily
                ]);
                $msg = "1 day";
            }

            if ($day_count <= 5) {
                $this->point_lvl($request->student, 1);
            }

            DB::commit();




            if (isset($msg)) {
                return response()->json([
                    'success' =>  "Successfully claimed daily rewards for $msg."
                ], 200);
            } else {
                return response()->json([
                    'errors' => "Already claimed bonus for today"
                ], 403);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                'errors' => $th
            ], 500);
        }
    }



    // ===============================================================//
    // Login Bonus -
    // ===============================================================//


    public function checkLogin(Request $request){

        $record = StudentLoginBonus::where('student_id', $request->student->id)->latest('created_at')->first();
        // return $record;
        $add_date = Carbon::parse($record->date)->addDays(1);
        $givenDates = LoginBonus::all()->pluck('days')->toArray();

        $testing_day = $request->header('day');
        $testing_day = !$testing_day ? 0 : $testing_day;

        $all_records = $request->student->loginBonus;


        $now = Carbon::now()
        ->addDays($testing_day)
        ;


        DB::beginTransaction();

        try {

            if($add_date->isSameDay($now) && !in_array($record->day_count, $givenDates) ){
                $record->update([
                    'updated_at' => $now,
                    'date' => $now,
                    'day_count' => $record->day_count + 1
                ]);
                DB::commit();
                return response()->json(['message' => "login bonus record was updated"], 200);

            }else if($add_date->isSameDay($now) && $record->claim == 0  && in_array($record->day_count, $givenDates) ){

                StudentLoginBonus::create([
                    'student_id' => $request->student->id,
                    'date' => $now,
                    'day_count' => $record->day_count + 1,
                    'created_at' => $now
                ]);
                DB::commit();
                return response()->json(['message' => "create new one"], 200);

            }else if ($add_date < $now){

                foreach ($all_records as $key => $rd) {
                    $rd->delete();
                }

                StudentLoginBonus::create([
                    'student_id' => $request->student->id,
                    'date' => $now,
                    'day_count' =>  1,
                    'created_at' => $now
                ]);

                DB::commit();
                return response()->json(['message' => "reset login bonus counting circle"], 200);
            }else{
                return response()->json(['message' => "nth 🤭"], 201);
            }

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }


    }


    public function loginBonusList(Request $request){

        $loginBonus = LoginBonus::all();

        $student_bonus = $request->student->loginBonus;

        $result = $loginBonus->map(function($bl,$index) use($student_bonus) {

            $now = Carbon::now()->addDays(1);
            $same_record = $bl->days == isset($student_bonus[$index]);

            return [
                'day' => $bl->days,
                'point' => $bl->point,
                'allowed' => $student_bonus->contains('day_count', $bl->days),
                'claimed' => $same_record ? ($student_bonus[$index]->claim ? true : false ) : false ,
            ];

        });


        return $result;



    }

    // Login bonus claim
    public function loginBonusClaim (Request $request){

        $days = $request->header('days');

        $points = LoginBonus::where('days',$days)->first();


        DB::beginTransaction();
        try {

            $record = $request->student->loginBonus->where('day_count',$days)->first();


            if(!$record) return response()->json(['error' => "Wrong days payload!"],404);

            if($record->claim == 1) return response()->json(['message' => "You already claimed this bonus!"],208);

            if($record->created_at->addDays($days)->isSameDay(Carbon::now()->addDays($days))){

                $record->update([
                    'claim' => 1
                ]);


                $this->point_lvl($request->student, $points->point);

            DB::commit();

            return response()->json(['message' => "successfully claimed"], 200);

            }else{
                return response()->json([
                'error' => "Days not match."
                ], 403);
            }

        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;


        }




    }


    // ===============================================================//
    // Question Bonus -
    // ===============================================================//

    public function questionBonusList(Request $request){

        $student = $request->student;

        $records = $student->questionBonus;


        return  $records->map(function ($record) use($student) {

            return [
                'name' => $record->question_count,
                'point' => $record->point,
                'allowed' => $record->question_count <= $student->question_answer,
                'claimed' => $record->claim && true
            ];

        });

    }


    public function questionBonusClaim(Request $request){

        $student = $request->student;
        $name = $request->header('name');

        DB::beginTransaction();
        try {

            $record = $student->questionBonus->where('question_count', $name)->first();
            $allowed = $student->question_answer >= $name;

            if(!$allowed) return response()->json(['error' => "not enough question for this Questions bonus"], 403);

            if($record && $allowed){
                $record->update(['claim' => 1]);

                $this->point_lvl($request->student, $record->point);

                DB::Commit();
                return response()->json([
                    'message' => "Successfully Claim for $name questions Bonus"
                ], 200);
            }



        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }



    }






    public function championshipBonusList(Request $request){

        $student = $request->student;

        $record = $student->championBonus;

        return $record->map(function ($record) use($student){
            return [
                'name' => ucfirst($record->champion),
                'point' => $record->point,
                'allowed' => $record->champion == $student->board || $record->fix_level < $student->level,
                'claimed' => $record->claim && true
            ];
        });
    }


    public function championshipBonusClaim(Request $request){

        $student =  $request->student;
        $name = $request->header('name');

        DB::beginTransaction();

        try {


            $record = $student->championBonus->where('champion', $name)->first();
            $allowed = $student->board == $name || $record->fix_level <= $student->level;

            if(!$allowed) return response()->json(['error' => "not enough level for championship bonus"], 403);

            if($record && $allowed){

                $record->update(['claim' => 1]);

                $this->point_lvl($request->student, $record->point);

                DB::Commit();
                return response()->json([
                    'message' => "Successfully Claim for $name champion Bonus"
                ], 200);

            }


        } catch (\Throwable $th){
            DB::rollback();
            throw $th;
        }




    }


    // ===============================================================//
    // Notify -
    // ===============================================================//


    public function notify(Request $request){

        $student = $request->student;


        // ==================================
        // Repetitive
        // ==================================
        $repetitive_3 = StudentGame::where('student_id', $student->id)
        ->where('count', '>=' , 3)->where('count', '<' , 5)
        ->where('claimed_3', 0)->get()->toArray();

        $repetitive_5 = StudentGame::where('student_id', $student->id)
        ->where('count', 5)
        ->where('claimed_5', 0)->get()->toArray();

        $repetitive_count = collect(array_merge($repetitive_3,$repetitive_5))->count();



        // ==================================
        // Daily
        // ==================================
        // $daily = DailyBonus::where('student_id',$student->id)->first();
        $daily = $student->dailyBonus->first();

        $daily_count = intval($daily->first != 1) + intval($daily->second != 1) + intval($daily->daily != 1);


        // ==================================
        // Login
        // ==================================

        $login_count = $student->loginBonus->whereIn('day_count',LoginBonus::all()->pluck('days'))->where('claim',0)->count();



        // ==================================
        // Question
        // ==================================
        $question_count = $student->questionBonus->where('claim','!=', 1)
        ->where('question_count','<=',$student->question_answer)->values()->count();


        // ==================================
        // Champion
        // ==================================
        $champion_count = $student->championBonus->where('claim',0)
        ->where('fix_level','<',$student->level)->count();


        // ==================================
        // Assessment
        // ==================================

        // $assessment_count = AssessmentFinishData::where("student_id", $student->id)
        //     ->where("finish", 1)
        //     ->where("claim", 0)->count();


        ///////////////////////////
        // Assessment Detail
        ///////////////////////////

        $res = Assessment::select("name", "grade_id", "total_assess_ques")->get();

        $assessment_count = [];

        foreach ($res as $index => $data) {
        $isExistData = AssessmentFinishData::where("student_id", $student->id)
                                ->where("claim", 0)
                                ->where('grade_id', $data->grade_id)
                                ->where('assess_name', $data->name)
                                ->first();

       if($isExistData)
       {
        $percentage = ($isExistData->point / $data->total_assess_ques) * 100;
        array_push($assessment_count, floor($percentage/ 10) * 10);

       }
    }
        logger([
            'repetitive' => $repetitive_count,
            'daily' => $daily_count,
            'login' => $login_count,
            'question' => $question_count,
            'champion' => $champion_count,
            'assessment' => collect($assessment_count)->unique()->count()
        ]);


       $total = intval($repetitive_count) + intval($daily_count) + intval($login_count) + intval($question_count) + intval($champion_count) + intval(0) + intval($assessment_count);

       if($total > 0) {
         return response()->json(['notify_count' => $total], 200);
       }
        return response()->json(['notify_count' => 0], 200);

    }


}
