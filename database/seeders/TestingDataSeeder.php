<?php

namespace Database\Seeders;

use Carbon\Carbon;
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


              ///////////////// testing ////////////////
        $done = [
            ['count' => 1, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            ['count' => 2, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            ['count' => 3, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            ['count' => 3, 'claimed_3'=> 1, 'claimed_5'=> 0 ],
            ['count' => 4, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            ['count' => 4, 'claimed_3'=> 1, 'claimed_5'=> 0 ],
            ['count' => 5, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            ['count' => 5, 'claimed_3'=> 1, 'claimed_5'=> 0 ],
            ['count' => 5, 'claimed_3'=> 0, 'claimed_5'=> 1 ],
            ['count' => 5, 'claimed_3'=> 1, 'claimed_5'=> 1 ],

            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],

            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],

            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
            // ['count' => 0, 'claimed_3'=> 0, 'claimed_5'=> 0 ],
        ];

        $lessons =  range(1,10);
        foreach ($lessons as $k => $l) {
            DB::table('student_lessons')->insert([
                [
                    'student_id' => 9,
                    'grade_id' => 1,
                    'lesson_id' => $l,
                    'count' => $done[$k]['count'],
                    'claimed_3' => $done[$k]['claimed_3'],
                    'claimed_5' => $done[$k]['claimed_5'],

                ]
            ]);
        }

        $lessons =  range(1,10);
        foreach ($lessons as $k => $l) {
            DB::table('student_lessons')->insert([
                [
                    'student_id' => 1,
                    'grade_id' => 1,
                    'lesson_id' => $l,
                    'count' => $done[$k]['count'],
                    'claimed_3' => $done[$k]['claimed_3'],
                    'claimed_5' => $done[$k]['claimed_5'],
                ]
            ]);
        }

        ////// Grade

        DB::table('student_grades')->insert([
            [
                'student_id' => 1,
                'grade_id' => 1,
                'subscription_id' => 1,
                'expire_date' => Carbon::now()->addYears(1),
                'isDone' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
        DB::table('student_grades')->insert([
            [
                'student_id' => 9,
                'grade_id' => 1,
                'subscription_id' => 1,
                'expire_date' => Carbon::now()->addYears(1),
                'isDone' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);



        // Assessment Finished Data
            DB::table('assessment_finish_data')->insert([
                [
                    'student_id' => 1,
                    'grade_id' => 1,
                    'assess_name' => 1,
                    'point' => 1,
                    'finish' => 1,
                ]
            ]);









    }
}
