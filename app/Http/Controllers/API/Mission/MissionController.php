<?php

namespace App\Http\Controllers\API\Mission;

use Carbon\Carbon;
use App\Models\Game;
use App\Models\Lesson;
use App\Models\Student;

use App\Models\DailyBonus;
use App\Models\LoginBonus;
use App\Models\StudentGame;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Models\LoginDailyBonus;
use App\Models\StudentLoginBonus;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Traits\PointAddingTrait;
use App\Http\Traits\AssessmentMissionTrait;
use Illuminate\Pagination\LengthAwarePaginator;


class MissionController extends Controller
{
    //
    use PointAddingTrait;
    use AssessmentMissionTrait;



    //===============================================================//
    // REPETITIVE LESSON -
    //===============================================================//



    // Repetitive Lesson List
    public function repetitiveLessonList(Request $request)
    {

        $repeat = StudentLesson::where('student_id', $request->student->id)
            ->get();

        $repetitiveRecords =  StudentLesson::where('student_id', $request->student->id)
            ->where('count', '<=', 5)
            ->get();


        $gradeId = Student::find($request->student->id)->grades;


        if (!$gradeId || $gradeId->count() == 0) return response()->json(["message" => "You must be a subscriber for this feature."], 200);

        $rawLessons = Lesson::whereIn('grade_id', $gradeId->pluck('id'))->get();



        /// ====================== 3 times

        $ThreeTimes = $rawLessons->map(function ($raw) use ($repetitiveRecords) {
            $repeat = $repetitiveRecords->where('lesson_id', $raw->id)->first();
            return [
                'lesson_id' => $raw->id,
                'name' => "Lesson " . $raw->name . ": 3 repetitive practices",
                'grade' => $raw->grade->name,
                'allowed' => optional($repeat)->count == 3 || optional($repeat)->count == 4,
                // 'claimed' => (optional($repeat)->count >= 3 && optional($repeat)->count < 5) && optional($repeat)->claimed_3 === 0 && false,
                'claimed' => (optional($repeat)->count >= 3 && optional($repeat)->count < 5) && optional($repeat)->claimed_3 == 0 ? false : true,
                'count' => optional($repeat)->count,
                'point' =>  3,

            ];
        });


        // /// ====================== 5 times

        $FiveTimes = $rawLessons->map(function ($raw) use ($repetitiveRecords) {
            $repeat = $repetitiveRecords->where('lesson_id', $raw->id)->first();
            return [
                'lesson_id' => $raw->id,
                'name' => "Lesson " . $raw->name . ": 5 repetitive practices",
                'grade' => $raw->grade->name,
                'allowed' => optional($repeat)->count == 5,
                'claimed' => optional($repeat)->count == 5 && optional($repeat)->claimed_5 == 0 ? false : true,
                'count' => optional($repeat)->count,
                'point' => 5
            ];
        });

        $collection = array_merge($ThreeTimes->toArray(), $FiveTimes->toArray());

        $perPage = $request->header('perPage') ? $request->header('perPage') : 20;
        $page = $request->header('page') ? $request->header('page') : 1;
        $startingPoint = ($page - 1) * $perPage;


        $collection = new Collection($collection);


        $slicedItems = $collection->slice($startingPoint, $perPage)->all();

        $data =  collect($slicedItems)->values();


        return response()->json([
            'data' => $data,
            'perPage' => $perPage,
            'page' => $page
        ], 200);

        // $paginatedData = new LengthAwarePaginator(
        //     $slicedItems,
        //     $collection->count(), // Total number of items
        //     $perPage,
        //     $page,
        //     ['path' => url()->current(), 'query' => request()->query()]
        // );

        // return response()->json([
        //     'data' => $paginatedData->items(),
        //     'page' => $paginatedData->currentPage(),
        //     'perPage' => $perPage
        // ], 200);

    }

    // Repetitive Bonus Claim
    public function repetitiveClaimLesson(Request $request)
    {

        $student = $request->student;
        $count = $request->header('count');
        $lesson_id = $request->header('lesson_id');

        DB::beginTransaction();
        try {

            $claimUpdate = StudentLesson::where('lesson_id', $lesson_id)
                ->where('student_id', $request->student->id)->first();

            $sms = null;
            if ($claimUpdate->claimed_3 == 0 && ($count == 3 || $count == 4)) {
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



    // ===============================================================//
    // Daily Bonus -
    // ===============================================================//

    public function dailyBonusCheck(Request $request)
    {

        try {

            $dailyRecord = DailyBonus::where('student_id', $request->student->id)->first();


            $day_count = $dailyRecord->created_at->diffInDays(Carbon::now());

            if (($dailyRecord->updated_at->addDays() <= Carbon::now() ||
                !$dailyRecord->first || !$dailyRecord->second || !$dailyRecord->daily) && $day_count < 7) {


                // daily Update process
                $dailyRecord->update([
                    'first' => Carbon::now()->addSeconds(20),
                    'second' => Carbon::now()->addMinutes(1),
                    'daily' => Carbon::Now()->addHours(1),
                    // 'first' => Carbon::now()->addMinutes(15),
                    // 'second' => Carbon::now()->addMinutes(30),
                    // 'daily' => Carbon::Now()->addDays(1),
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

        $record = DailyBonus::where('student_id', $request->student->id)->first();

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

        $record = DailyBonus::where('student_id', $request->student->id)->first();

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
                    'day_count' => $record->day_count + 1
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
                    'day_count' =>  1
                ]);

                DB::commit();
                return response()->json(['message' => "reset login bonus counting circle"], 200);
            }else{
                return response()->json(['message' => "nice try 🤭"], 201);
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
                'allowed (done)' => $student_bonus->contains('day_count', $bl->days),
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

        $record = StudentLoginBonus::where('student_id', $request->student->id)
        ->where('day_count',$days)->first();

        if(!$record) return response()->json(['error' => "Wrong days payload!"],404);

        if($record->claim == 1) return response()->json(['message' => "You already claimed this bonus!"],208);

        if($record->created_at->addDays($days)->isSameDay(Carbon::now()->addDays($days))){

            $record->update([
                'claim' => 1
            ]);


            $this->point_lvl($student, $points->point);

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





    ////////////
}
