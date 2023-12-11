<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $domain = app('domain');

        $instructionGif_path = $domain . "/storage/InstructionGif/";

        // unit 1's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 1,'category_id' => 1 ],
            ['name' => 'Read and Practice', 'unit_id' => 2, 'category_id' => 2 ],
            ['name' => 'Song', 'unit_id' => 3 , 'category_id' => 3 ] ,
            ['name' => 'Listen and Practice', 'unit_id' => 4,  'category_id' => 4],
            ['name' => 'Writing', 'unit_id' => 5,  'category_id' => 5 ],
        ]);

        // unit 2's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 6 , 'category_id' => 1 ],
            ['name' => 'Read and Practice', 'unit_id' => 7,  'category_id' => 2 ],
            ['name' => 'Song', 'unit_id' => 8 , 'category_id' => 3 ],
            ['name' => 'Listen and Practice', 'unit_id' => 9,  'category_id' => 6 ],
            ['name' => 'Matching', 'unit_id' => 10 ,  'category_id' => 7 ],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 11,  'category_id' => 5 ],

        ]);


        // unit 3's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 12 , 'category_id' => 1 ],
            ['name' => 'Read Listen and Repeat', 'unit_id' => 13,  'category_id' => 8 ],
            ['name' => 'Listen and Practice', 'unit_id' => 14,  'category_id' => 9],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 15,  'category_id' => 10 ],
            ['name' => 'Speaking', 'unit_id' => 16,  'category_id' => 11 ],

        ]);

        // unit 4's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 17,  'category_id' => 1 ],
            ['name' => 'Read, Listen & Repeat', 'unit_id' => 18,  'category_id' => 8 ],
            ['name' => 'Read, Listen & Repeat', 'unit_id' => 19,  'category_id' => 12 ],
            ['name' => 'Listening & Practice', 'unit_id' => 20 , 'category_id' => 13 ],
            ['name' => 'Writing (Arranging Order)', 'unit_id' => 21, 'category_id' => 14 ],

        ]);

        // // unit 5's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 22,  'category_id' => 1],
            ['name' => 'Listen and Practice', 'unit_id' => 23,  'category_id' => 15],
            ['name' => 'Read, Listen and Repeat', 'unit_id' => 24,  'category_id' => 8 ],
            ['name' => 'Reading Passage', 'unit_id' => 25,  'category_id' => 16 ],
            ['name' => 'Speaking Practice', 'unit_id' => 26,  'category_id' => 11 ],
            ['name' => 'Writing', 'unit_id' => 27,  'category_id' => 14 ],

        ]);
            // // unit 6's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 28,  'category_id' => 1],
            ['name' => 'Reading', 'unit_id' => 29,  'category_id' => 2 ],
            ['name' => 'Listen and Practice', 'unit_id' => 30,  'category_id' => 17 ],
            ['name' => 'Matching', 'unit_id' => 31,  'category_id' => 7 ],
            ['name' => 'Speaking Practice', 'unit_id' => 32,  'category_id' => 11 ],
            ['name' => 'Writing', 'unit_id' => 33,  'category_id' => 14 ],
        ]);

            // // unit 7's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 34, 'category_id' => 1 ],
            ['name' => 'Read, Listen and Repeat', 'unit_id' => 35,'category_id' => 2 ],
            ['name' => 'Listen and Practice', 'unit_id' => 36,'category_id' => 17 ],
            ['name' => 'Matching', 'unit_id' => 37, 'category_id' => 7 ],
            ['name' => 'Speaking Practice', 'unit_id' => 38, 'category_id' => 11 ],
            ['name' => 'Writing 1', 'unit_id' => 39,  'category_id' => 18 ],
            ['name' => 'Writing 2', 'unit_id' => 39,  'category_id' => 10 ],

        ]);

        // // unit 8's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 40 , 'category_id' => 1],
            ['name' => 'Read', 'unit_id' => 41,  'category_id' => 2],
            ['name' => 'listening Practice', 'unit_id' => 42,  'category_id' => 17 ],
            ['name' => 'Matching', 'unit_id' => 43,  'category_id' => 7 ],
            ['name' => 'Speaking Practice', 'unit_id' => 44,  'category_id' => 11 ],
            ['name' => 'Reading Passage', 'unit_id' => 45,  'category_id' => 16 ],
            ['name' => 'Writing', 'unit_id' => 46,  'category_id' => 14 ],

        ]);

        // // unit 9's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 47,  'category_id' => 1 ],
            ['name' => 'Reading', 'unit_id' => 48,  'category_id' => 2 ],
            ['name' => 'Listen and practice', 'unit_id' => 49,  'category_id' => 17],
            ['name' => 'Matching', 'unit_id' => 50,  'category_id' => 7],
            ['name' => 'Speaking Practice', 'unit_id' => 51,  'category_id' => 11],
            ['name' => 'Writing', 'unit_id' => 52,  'category_id' => 14],
        ]);

        // // unit 10's games
        DB::table('games')->insert([

            ['name' => 'Target', 'unit_id' => 53,  'category_id' => 1 ],
            ['name' => 'Reading', 'unit_id' => 54,  'category_id' => 2],
            ['name' => 'Listen and Practice', 'unit_id' => 55,  'category_id' => 17],
            ['name' => 'Matching', 'unit_id' => 56,  'category_id' => 7],
            ['name' => 'Speaking Practice', 'unit_id' => 57,  'category_id' => 11],
            ['name' => 'Writing', 'unit_id' => 58,  'category_id' => 14 ],
        ]);

        // // unit 11's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 59,  'category_id' => 1],
            ['name' => 'Read, Listen and Repeat', 'unit_id' => 60,  'category_id' => 2],
            ['name' => 'Listen and Practice', 'unit_id' => 61,  'category_id' => 6 ],
            ['name' => 'Matching', 'unit_id' => 62,  'category_id' => 7 ],
            ['name' => 'Speaking Practice', 'unit_id' => 63,  'category_id' => 11 ],
            ['name' => 'Reading Passage', 'unit_id' => 64,  'category_id' => 16 ],
        ]);

        // unit 12's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 65, 'category_id' => 1],
            ['name' => 'Reading', 'unit_id' => 66, 'category_id' => 2],
            ['name' => 'Listen and Practice', 'unit_id' => 67, 'category_id' => 17],
            ['name' => 'Matching', 'unit_id' => 68, 'category_id' => 7],
            ['name' => 'Speaking Practice', 'unit_id' => 69, 'category_id' => 11],

        ]);

        DB::table('games')->insert([ // 12

            ['name' => 'writing 1', 'unit_id' => 70, 'instructionGIF' => "trace and writ GIF",  'category_id' => 18 ],
            ['name' => 'writing 2',  'unit_id' => 70, 'instructionGIF' => "Writ the correct Letter GIF",  'category_id' => 10],

        ]);


        // // unit 13's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 71,  'category_id' => 1],
            ['name' => 'Reading, Listen and Repeat', 'unit_id' => 72,  'category_id' => 2 ],
            ['name' => 'Drag and Drop', 'unit_id' => 73,  'category_id' => 19 ],
            ['name' => 'Listen and Practice', 'unit_id' => 74,  'category_id' => 20 ],
            ['name' => 'Speaking Practice', 'unit_id' => 75, 'category_id' => 11 ],
        ]);

        // // unit 14's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 76,  'category_id' => 1 ],
            ['name' => 'Reading, Listen and Repeat', 'unit_id' => 77,  'category_id' => 2 ],
            ['name' => 'Listen and Practice', 'unit_id' => 78 ,  'category_id' => 20],
            ['name' => 'Grammar', 'unit_id' => 79 ,  'category_id' => 21 ],
            ['name' => 'Writing', 'unit_id' => 80,  'category_id' => 14 ],
            ['name' => 'Speaking Practice', 'unit_id' => 81, 'category_id' => 11 ],

        ]);

        // // unit 15's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 82,  'category_id' => 1 ],
            ['name' => 'Reading 1', 'unit_id' => 83 ,  'category_id' => 8 ],
            ['name' => 'Reading 2', 'unit_id' => 83 ,  'category_id' => 8 ],
            ['name' => '1', 'unit_id' => 84 ,   'category_id' => 17 ],
            ['name' => '2', 'unit_id' => 84 ,   'category_id' => 21 ],
            ['name' => 'Grammar', 'unit_id' => 85 ,  'category_id' => 21 ],
            ['name' => 'Speaking Practice', 'unit_id' => 86,  'category_id' => 11 ],
            ['name' => 'Reading', 'unit_id' => 87, 'category_id' => 16],

        ]);

        // // unit 16's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 88, 'category_id' => 1],
            ['name' => 'Reading, Listen and Repeat', 'unit_id' => 89, 'category_id' => 2],
            ['name' => 'Listen and Practice, Game', 'unit_id' => 90, 'category_id' => 17 ],
            ['name' => 'Matching', 'unit_id' => 91, 'category_id' => 7],

            ['name' => 'Speaking 1', 'unit_id' => 92, 'category_id' => 11 ],
            ['name' => 'Speaking 2', 'unit_id' => 92, 'category_id' => 11 ],
            ['name' => 'Writing 1', 'unit_id' => 93, 'category_id' => 18 ],
            ['name' => 'Writing 2', 'unit_id' => 93, 'category_id' => 10 ],

        ]);

        // // unit 17's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 94, 'category_id' => 1 ],

            ['name' => 'Reading 1', 'unit_id' => 95, 'category_id' => 22 ],
            ['name' => 'Reading 2', 'unit_id' => 95, 'category_id' => 2 ],

            ['name' => 'Listen and Practice', 'unit_id' => 96, 'category_id' => 23 ],
            ['name' => 'Matching', 'unit_id' => 97, 'category_id' => 7 ],
            ['name' => 'Listen and Act', 'unit_id' => 98, 'category_id' => 13 ],
            ['name' => 'Speaking Practice', 'unit_id' => 99, 'category_id' => 11 ],

        ]);
    }
}
