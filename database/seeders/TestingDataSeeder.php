<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestingDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $userId = [1, 9];

        ///////////////// testing ////////////////
        $done = [
            ['count' => 1, 'claimed_3' => 0, 'claimed_5' => 0],
            ['count' => 2, 'claimed_3' => 0, 'claimed_5' => 0],
            ['count' => 3, 'claimed_3' => 0, 'claimed_5' => 0],
            ['count' => 3, 'claimed_3' => 1, 'claimed_5' => 0],
            ['count' => 4, 'claimed_3' => 0, 'claimed_5' => 0],
            ['count' => 4, 'claimed_3' => 1, 'claimed_5' => 0],
            ['count' => 5, 'claimed_3' => 0, 'claimed_5' => 0],
            ['count' => 5, 'claimed_3' => 1, 'claimed_5' => 0],
            ['count' => 5, 'claimed_3' => 0, 'claimed_5' => 1],
            ['count' => 5, 'claimed_3' => 1, 'claimed_5' => 1],

        ];

        $lessons =  range(1, 10);

        foreach ($userId as $key => $user) {
            foreach ($lessons as $k => $l) {
                DB::table('student_lessons')->insert([
                    [
                        'student_id' => $user,
                        'grade_id' => 1,
                        'lesson_id' => $l,
                        'count' => $done[$k]['count'],
                        'claimed_3' => $done[$k]['claimed_3'],
                        'claimed_5' => $done[$k]['claimed_5'],

                    ]
                ]);
            }
        }

        foreach (range(1, 8) as $k => $l) {
            DB::table('student_lessons')->insert([
                'student_id' => 3,
                'grade_id' => 1,
                'lesson_id' => $l,
                'count' => 1,
                'claimed_3' => 0,
                'claimed_5' => 0,
            ]);
        }





        ////// Grade


        // Student::where('id',1)->update(['isSubscriber'=> 1]);
        // Student::where('id',9)->update(['isSubscriber'=> 1]);


        // DB::table('student_grades')->insert([
        //     [
        //         'student_id' => 1,
        //         'grade_id' => 1,
        //         'subscription_id' => 1,
        //         'expire_date' => Carbon::now()->addYears(1),
        //         'isDone' => 0,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],

        // ]);
        // DB::table('student_grades')->insert([
        //     [
        //         'student_id' => 9,
        //         'grade_id' => 1,
        //         'subscription_id' => 1,
        //         'expire_date' => Carbon::now()->addYears(1),
        //         'isDone' => 0,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],

        // ]);


        // Daily Bonus Records

        // foreach ($userId as $key => $user) {
        //     DB::table('daily_bonuses')->insert([
        //         [
        //             'student_id' => $user,
        //             'first' => null,
        //             'second' => null,
        //             'daily' => null,
        //             'day_count' => 0,
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ]
        //     ]);
        // }



        // Assessment Finished Data
        DB::table('assessment_finish_data')->insert([
            [
                'student_id' => 9,
                'grade_id' => 1,
                'assess_name' => 1,
                'point' => 30,
                'finish' => 1,
            ]
        ]);
        DB::table('assessment_finish_data')->insert([
            [
                'student_id' => 9,
                'grade_id' => 1,
                'assess_name' => 2,
                'point' => 40,
                'finish' => 1,
            ]
        ]);
        DB::table('assessment_finish_data')->insert([
            [
                'student_id' => 9,
                'grade_id' => 1,
                'assess_name' => 3,
                'point' => 50,
                'finish' => 1,
            ]
        ]);
        DB::table('assessment_finish_data')->insert([
            [
                'student_id' => 9,
                'grade_id' => 1,
                'assess_name' => 4,
                'point' => 35,
                'finish' => 1,
            ]
        ]);
        DB::table('assessment_finish_data')->insert([
            [
                'student_id' => 9,
                'grade_id' => 1,
                'assess_name' => 5,
                'point' => 40,
                'finish' => 1,
            ]
        ]);


        // assessmen5t each record
        // DB::table('assessment_each_record_finish_data')->insert([
        //     [
        //         'student_id' => 9,
        //         'assess_id' => 28,
        //         'assess_name' => 5,
        //         'grade_id' => 1,
        //     ]
        // ]);
        // DB::table('assessment_each_record_finish_data')->insert([
        //     [
        //         'student_id' => 9,
        //         'assess_id' => 29,
        //         'assess_name' => 5,
        //         'grade_id' => 1,
        //     ]
        // ]);
        // DB::table('assessment_each_record_finish_data')->insert([
        //     [
        //         'student_id' => 9,
        //         'assess_id' => 30,
        //         'assess_name' => 5,
        //         'grade_id' => 1,
        //     ]
        // ]);
        // DB::table('assessment_each_record_finish_data')->insert([
        //     [
        //         'student_id' => 9,
        //         'assess_id' => 31,
        //         'assess_name' => 5,
        //         'grade_id' => 1,
        //     ]
        // ]);
        // DB::table('assessment_each_record_finish_data')->insert([
        //     [
        //         'student_id' => 9,
        //         'assess_id' => 32,
        //         'assess_name' => 5,
        //         'grade_id' => 1,
        //     ]
        // ]);
        // DB::table('assessment_each_record_finish_data')->insert([
        //     [
        //         'student_id' => 9,
        //         'assess_id' => 33,
        //         'assess_name' => 5,
        //         'grade_id' => 1,
        //     ]
        // ]);
    }
}
