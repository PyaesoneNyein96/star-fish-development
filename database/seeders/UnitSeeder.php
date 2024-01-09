<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Grade 1 Units
        DB::table('units')->insert([

            // lesson 1's units count(5) start (1,5)

            ['name' => 'Video', 'lesson_id' => 1,],                   //1
            ['name' => 'Read and Practice', 'lesson_id' => 1,],
            ['name' => 'Song', 'lesson_id' => 1],
            ['name' => 'Listen and Practice', 'lesson_id' => 1],
            ['name' => 'Writing (Arranging Order)', 'lesson_id' => 1],   //5


            // lesson 2's units count(6) start (6,11)

            ['name' => 'Video', 'lesson_id' => 2,],                  //6
            ['name' => 'Read & Practice', 'lesson_id' => 2,],
            ['name' => 'Song', 'lesson_id' => 2,],
            ['name' => 'Listen & Practice', 'lesson_id' => 2,],
            ['name' => 'Matching', 'lesson_id' => 2,],
            ['name' => 'Writing (Arranging Order)', 'lesson_id' => 2,],           //11


            // lesson 3's units count(5) start (12,16)

            ['name' => 'Video', 'lesson_id' => 3,],                         //12
            ['name' => 'Read Listen & Repeat', 'lesson_id' => 3,],
            ['name' => 'Listen and practice', 'lesson_id' => 3,],
            ['name' => 'Writing (Arranging Order)', 'lesson_id' => 3,],
            ['name' => 'Speaking', 'lesson_id' => 3,],                      //16


            // // lesson 4's units count(5) start (17,20)

            ['name' => 'Video', 'lesson_id' => 4,],                      //17 ->
            ['name' => 'Read, Listen & Repeat', 'lesson_id' => 4,],
            ['name' => 'Read, Listen & Repeat', 'lesson_id' => 4,],
            ['name' => 'Listening & Practice', 'lesson_id' => 4],
            ['name' => 'Writing (Arranging Order)', 'lesson_id' => 4,],     //21


            // // lesson 5's units count(6) start (22,27)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 5], // 22 ->
            ['name' => 'Listen and Practice', 'lesson_id' => 5],
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 5],
            ['name' => 'Reading Passage', 'lesson_id' => 5],
            ['name' => 'Speaking Practice', 'lesson_id' => 5],
            ['name' => 'Writing', 'lesson_id' => 5],                     // 27


            // // lesson 6's units count(6) start(28,33)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 6],       // 28 ->
            ['name' => 'Reading', 'lesson_id' => 6],
            ['name' => 'Listen and Practice', 'lesson_id' => 6],
            ['name' => 'Matching', 'lesson_id' => 6,],
            ['name' => 'Speaking Practice', 'lesson_id' => 6],
            ['name' => 'Writing', 'lesson_id' => 6],                 // 33


            // // lesson 7's units count(6) start(34,39)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 7], //34 ->
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 7],
            ['name' => 'Listen and Practice', 'lesson_id' => 7],
            ['name' => 'Matching', 'lesson_id' => 7,],
            ['name' => 'Speaking Practice', 'lesson_id' => 7,],
            ['name' => 'Writing Sentences order', 'lesson_id' => 7],        //39


            // // lesson 8's units count(7) start(40,46)

            ['name' => 'Video', 'lesson_id' => 8],                      // 40 ->
            ['name' => 'Read', 'lesson_id' => 8],
            ['name' => 'listening Practice', 'lesson_id' => 8],
            ['name' => 'Matching', 'lesson_id' => 8],
            ['name' => 'Speaking Practice', 'lesson_id' => 8],
            ['name' => 'Reading Passage', 'lesson_id' => 8],
            ['name' => 'Writing', 'lesson_id' => 8],                    // 46


            // // lesson 9's units count(6) start (47,52)

            ['name' => 'Target Language', 'lesson_id' => 9],           // 47 ->
            ['name' => 'Reading', 'lesson_id' => 9],
            ['name' => 'Listen and practice', 'lesson_id' => 9],
            ['name' => 'Matching', 'lesson_id' => 9],
            ['name' => 'Speaking Practice', 'lesson_id' => 9],
            ['name' => 'Writing', 'lesson_id' => 9],                  // 52


            // // lesson 10's units count(6) start(53,58)

            ['name' => 'Target', 'lesson_id' => 10],                // 53 ->
            ['name' => 'Reading', 'lesson_id' => 10],
            ['name' => 'Listen and Practice', 'lesson_id' => 10],
            ['name' => 'Matching', 'lesson_id' => 10],
            ['name' => 'Speaking Practice', 'lesson_id' => 10],
            ['name' => 'Writing', 'lesson_id' => 10],                // 58


            // // lesson 11's units count(6) start(59,64)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 11],  // 59 ->
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 11],
            ['name' => 'Listen and Practice', 'lesson_id' => 11],
            ['name' => 'Matching', 'lesson_id' => 11],
            ['name' => 'Speaking Practice', 'lesson_id' => 11],
            ['name' => 'Reading Passage', 'lesson_id' => 11],           // 64


            // lesson 12's units count(6) start (65,70)

            ['name' => 'Target Language', 'lesson_id' => 12],         // 65 ->
            ['name' => 'Reading', 'lesson_id' => 12],
            ['name' => 'Listen and Practice', 'lesson_id' => 12],
            ['name' => 'Matching', 'lesson_id' => 12],
            ['name' => 'Speaking Practice', 'lesson_id' => 12],
            ['name' => 'Writing', 'lesson_id' => 12],                   // 70


            // // lesson 13's units count(5) start(71,75)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 13],   // 71 ->
            ['name' => 'Reading, Listen and Repeat', 'lesson_id' => 13,],
            ['name' => 'Drag and Drop', 'lesson_id' => 13],
            ['name' => 'Listen and Practice', 'lesson_id' => 13],
            ['name' => 'Speaking Practice', 'lesson_id' => 13], // 75


            // // lesson 14's units count(6) start (76,81)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 14],  // 76->
            ['name' => 'Reading, Listen and Repeat', 'lesson_id' => 14],
            ['name' => 'Listen and Practice', 'lesson_id' => 14],
            ['name' => 'Grammar', 'lesson_id' => 14],
            ['name' => 'Writing', 'lesson_id' => 14],
            ['name' => 'Speaking Practice', 'lesson_id' => 14,], // 81


            // // lesson 15's units count(6) start (82,87)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 15,],  // 82->
            ['name' => 'Listen, Reading and Repeat', 'lesson_id' => 15],
            ['name' => 'Listen and Practice', 'lesson_id' => 15],
            ['name' => 'Grammar', 'lesson_id' => 15],
            ['name' => 'Speaking Practice', 'lesson_id' => 15],
            ['name' => 'Reading', 'lesson_id' => 15],                       // 87


            // // lesson 16's units count(6) start (88,93)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 16],  // 88->
            ['name' => 'Reading, Listen and Repeat', 'lesson_id' => 16],
            ['name' => 'Listen and Practice, Game', 'lesson_id' => 16],
            ['name' => 'Matching', 'lesson_id' => 16],
            ['name' => 'Speaking 1', 'lesson_id' => 16],
            ['name' => 'Writing', 'lesson_id' => 16],                       // 93


            // // lesson 17's units count(6) start (94,99)

            ['name' => 'Target Language', 'lesson_id' => 17],               // 94->
            ['name' => 'Listen and Repeat Reading', 'lesson_id' => 17],
            ['name' => 'Listen and Practice', 'lesson_id' => 17],
            ['name' => 'Matching', 'lesson_id' => 17],
            ['name' => 'Listen and Act', 'lesson_id' => 17],
            ['name' => 'Speaking Practice', 'lesson_id' => 17],             // 99


            // // lesson 18's units count(6) start (100,105)

            ['name' => 'Grammar Explanation', 'lesson_id' => 18],           // 100 ->
            ['name' => 'Listen, Read and Repeat', 'lesson_id' => 18],
            ['name' => 'Listen and Practice', 'lesson_id' => 18],
            ['name' => 'Listen and Act', 'lesson_id' => 18],
            ['name' => 'Writing', 'lesson_id' => 18],
            ['name' => 'Speaking Practice', 'lesson_id' => 18],             // 105


            // // lesson 19's units count(6) start (106,111)

            ['name' => 'Target Language', 'lesson_id' => 19],              // 106 ->
            ['name' => 'Listen and Repeat', 'lesson_id' => 19],
            ['name' => 'Listen and Practice', 'lesson_id' => 19],
            ['name' => 'Listen and Act', 'lesson_id' => 19],
            ['name' => 'Reading', 'lesson_id' => 19],
            ['name' => 'Speaking Practice', 'lesson_id' => 19],             // 111


            // // lesson 20's units count(6) start (112,117)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 20], // 112 ->
            ['name' => 'Reading, Listen and Repeat', 'lesson_id' => 20],
            ['name' => 'Listen and Practice Game', 'lesson_id' => 20],
            ['name' => 'Matching', 'lesson_id' => 20,],
            ['name' => 'Speaking', 'lesson_id' => 20,],
            ['name' => 'Writing', 'lesson_id' => 20,],                 // 117


            // // lesson 21's units count(5) start (118,122)

            ['name' => 'Target Language', 'lesson_id' => 21],               // 118 ->
            ['name' => 'Listen and Repeat', 'lesson_id' => 21],
            ['name' => 'Listen and Practice', 'lesson_id' => 21],
            ['name' => 'Matching', 'lesson_id' => 21],
            ['name' => 'Speaking', 'lesson_id' => 21],              // 122

            // lesson 22's units count(6) start (123,128)

            ['name' => 'Target Language', 'lesson_id' => 22],           // 123 ->
            ['name' => 'Listen and Repeat', 'lesson_id' => 22],
            ['name' => 'Listen and Practice', 'lesson_id' => 22],
            ['name' => 'Matching', 'lesson_id' => 22],
            ['name' => 'Writing', 'lesson_id' => 22],
            ['name' => 'Speaking', 'lesson_id' => 22],              // 128

            // // lesson 23's units count(6) start (129,134)

            ['name' => 'Target Language', 'lesson_id' => 23],           // 129 ->
            ['name' => 'Listen and Repeat', 'lesson_id' => 23],
            ['name' => 'Listen and Practice', 'lesson_id' => 23],
            ['name' => 'True or False', 'lesson_id' => 23],
            ['name' => 'Reading', 'lesson_id' => 23],
            ['name' => 'Speaking Practice', 'lesson_id' => 23],         // 134

            // // lesson 24's units count(6) start (135,140)

            ['name' => 'Target Language', 'lesson_id' => 24],         // 135 ->
            ['name' => 'Reading', 'lesson_id' => 24],
            ['name' => 'Listen and Practice', 'lesson_id' => 24],
            ['name' => 'Song', 'lesson_id' => 24],
            ['name' => 'Speaking', 'lesson_id' => 24],
            ['name' => 'Writing', 'lesson_id' => 24],                 // 140

            // // lesson 25's units count(6) start (141,146)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 25], //141 ->
            ['name' => 'Listen and Repeat', 'lesson_id' => 25],
            ['name' => 'Listen and Practice', 'lesson_id' => 25],
            ['name' => 'Matching', 'lesson_id' => 25],
            ['name' => 'Speaking', 'lesson_id' => 25],
            ['name' => 'Writing', 'lesson_id' => 25],                   // 146


            // // lesson 26's units count(6) start (147,152)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 26], // 147 ->
            ['name' => 'Read, Listen and Repeat Reading 1', 'lesson_id' => 26],
            ['name' => 'Listen and Practice', 'lesson_id' => 26],
            ['name' => 'Matching', 'lesson_id' => 26],
            ['name' => 'Grammar', 'lesson_id' => 26],
            ['name' => 'Speaking', 'lesson_id' => 26],                  // 152


            // // lesson 27's  units count(6) start (153,158)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 27], // 153 ->
            ['name' => 'Read, Listen and Repeat Reading 1', 'lesson_id' => 27],
            ['name' => 'Listen and Practice Game', 'lesson_id' => 27],
            ['name' => 'Matching Round 1', 'lesson_id' => 27],
            ['name' => 'Speaking 1', 'lesson_id' => 27],
            ['name' => 'Writing', 'lesson_id' => 27],                  // 158


            // // lesson 28's units count(6) start (159 ,164)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 28],  // 159 ->
            ['name' => 'Read, Listen and Repeat Reading', 'lesson_id' => 28],
            ['name' => 'Listen and Practice', 'lesson_id' => 28],
            ['name' => 'Matching', 'lesson_id' => 28],
            ['name' => 'Reading', 'lesson_id' => 28],
            ['name' => 'Speaking', 'lesson_id' => 28],             // 164


            // // lesson 29's units count(6) start (165 ,170)

            ['name' => 'Target Language', 'lesson_id' => 29],       // 165 ->
            ['name' => 'Listen and Repeat', 'lesson_id' => 29],
            ['name' => 'Listen and Practice', 'lesson_id' => 29],
            ['name' => 'Song', 'lesson_id' => 29],
            ['name' => 'Word order', 'lesson_id' => 29],
            ['name' => 'Speaking', 'lesson_id' => 29],             // 170


            // // lesson 30's units count(6) start (171 ,176)

            ['name' => 'Target Language', 'lesson_id' => 30],       // 171 ->
            ['name' => 'Listen and Repeat', 'lesson_id' => 30],
            ['name' => 'Listen and Practice', 'lesson_id' => 30],
            ['name' => 'Matching', 'lesson_id' => 30],
            ['name' => 'Speaking', 'lesson_id' => 30],
            ['name' => 'Writing ', 'lesson_id' => 30],          // 176


            // // lesson 31's  units count(6) start (177 ,182)

            ['name' => 'Target Language', 'lesson_id' => 31],       // 177 ->
            ['name' => 'Listen and Repeat', 'lesson_id' => 31],
            ['name' => 'Listen and Practice', 'lesson_id' => 31],
            ['name' => 'Matching', 'lesson_id' => 31],
            ['name' => 'Speaking', 'lesson_id' => 31],
            ['name' => 'Writing', 'lesson_id' => 31],             // 182


            // // lesson 32's units count(6) start (183 ,188)

            ['name' => 'Target Language', 'lesson_id' => 32],       // 183 ->
            ['name' => 'Listen and Repeat', 'lesson_id' => 32],
            ['name' => 'Listen and Practice', 'lesson_id' => 32],
            ['name' => 'Matching', 'lesson_id' => 32],
            ['name' => 'Reading', 'lesson_id' => 32],
            ['name' => 'Speaking', 'lesson_id' => 32],          // 188

            // // lesson 33's units count(5) start (189 ,193)

            ['name' => 'Target Language and Grammar Explanation', 'lesson_id' => 33],   // 189 ->
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 33],
            ['name' => 'Listen and Practice', 'lesson_id' => 33],
            ['name' => 'Matching', 'lesson_id' => 33],
            ['name' => 'Speaking', 'lesson_id' => 33],          // 193

            // // lesson 34's units count(5) start (194 ,198)

            ['name' => 'Target Language and Grammar Explanation', 'lesson_id' => 34],  // 194 ->
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 34],
            ['name' => 'Listen and Practice Game', 'lesson_id' => 34],
            ['name' => 'Writing', 'lesson_id' => 34],
            ['name' => 'Speaking', 'lesson_id' => 34],          // 198

            // // lesson 35's units count(7) start (199 ,205)

            ['name' => 'Target Language and Grammar Explanation', 'lesson_id' => 35],   // 199 ->
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 35],
            ['name' => 'True or False', 'lesson_id' => 35],
            ['name' => 'Song', 'lesson_id' => 35],
            ['name' => 'Matching', 'lesson_id' => 35],
            ['name' => 'Reading', 'lesson_id' => 35],
            ['name' => 'Speaking', 'lesson_id' => 35],              // 205

            // // lesson 36's units count(6) start (206 ,211)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 36],     //206 ->
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 36],
            ['name' => 'Listen and Practice Game', 'lesson_id' => 36],
            ['name' => 'Matching', 'lesson_id' => 36],
            ['name' => 'Speaking', 'lesson_id' => 36],
            ['name' => 'Writing', 'lesson_id' => 36],                           // 211


            // // lesson 37's units count(5) start (212 ,216)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 37],     // 212 ->
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 37],
            ['name' => 'Listen and Practice Game', 'lesson_id' => 37],
            ['name' => 'Matching', 'lesson_id' => 37],
            ['name' => 'Speaking', 'lesson_id' => 37],              // 216


            // // lesson 38's units count(5) start (217 ,221)

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 38],   // 217 ->
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 38],
            ['name' => 'Listen and Practice Game', 'lesson_id' => 38],
            ['name' => 'Writing', 'lesson_id' => 38],
            ['name' => 'Speaking', 'lesson_id' => 38],                 // 221

            // // lesson 39's units count(6) start (222,237)

            ['name' => 'Target Language', 'lesson_id' => 39],           // 222  ->
            ['name' => 'Listen and Repeat Reading', 'lesson_id' => 39],
            ['name' => 'Listen and Practice', 'lesson_id' => 39],
            ['name' => 'Grammar', 'lesson_id' => 39],
            ['name' => 'Writing (Arranging order)', 'lesson_id' => 39],
            ['name' => 'Speaking', 'lesson_id' => 39],                 // 227

            // // lesson 40's units count(5) start (218,222)

            ['name' => 'Target Language', 'lesson_id' => 40],           // 228 ->
            ['name' => 'Listen and Repeat', 'lesson_id' => 40],
            ['name' => 'Listen and Practice', 'lesson_id' => 40],
            ['name' => 'Reading', 'lesson_id' => 40],
            ['name' => 'Speaking', 'lesson_id' => 40],                  // 232


        ]);

        // -------------------- Grade 1 End ----------------------------//



        // -------------------- Grade 2 start --------------------------//

        DB::table('units')->insert([

            // lesson 1's units count(6) start (233,238)

            ['name' => 'Video', 'lesson_id' => 41,],                // 233
            ['name' => 'Pronunciation', 'lesson_id' => 41],
            ['name' => 'Practice for Specking', 'lesson_id' => 41],
            ['name' => 'Listen and Practice', 'lesson_id' => 41],
            ['name' => 'Fill in the blank', 'lesson_id' => 41],
            ['name' => 'Free Practice', 'lesson_id' => 41],         //238


            // lesson 2's units count(6) start (239,244)

            ['name' => 'Reading', 'lesson_id' => 42,],                // 239
            ['name' => 'Trace Word', 'lesson_id' => 42],
            ['name' => 'Matching', 'lesson_id' => 42],
            ['name' => 'Listen and Write', 'lesson_id' => 42],
            ['name' => 'Video', 'lesson_id' => 42],
            ['name' => 'Listen & Speak', 'lesson_id' => 42],         //244


            // lesson 3's units count(3) start (245,247)

            ['name' => 'Listen and Repeat', 'lesson_id' => 43,],                // 255
            ['name' => 'Speak', 'lesson_id' => 43],
            ['name' => 'Reading Passages', 'lesson_id' => 43],                 //247


            // lesson 4's units count(5) start (248,252)

            ['name' => 'Read', 'lesson_id' => 44],                // 248
            ['name' => 'Trace Words', 'lesson_id' => 44],
            ['name' => 'Matching', 'lesson_id' => 44],
            ['name' => 'Writing', 'lesson_id' => 44],
            ['name' => 'Speak', 'lesson_id' => 44],               //252


            // lesson 5's units count(4) start (253,256)

            ['name' => 'Video', 'lesson_id' => 45],                // 253
            ['name' => 'Vocab (Reading)', 'lesson_id' => 45],
            ['name' => 'Listen and learn', 'lesson_id' => 45],
            ['name' => 'Sing and Dance', 'lesson_id' => 45],        // 256


            // lesson 6's units count(4) start (257,260)

            ['name' => 'Target Language Learn words', 'lesson_id' => 46],    // 257
            ['name' => 'Describing People', 'lesson_id' => 46],
            ['name' => 'Matching', 'lesson_id' => 46],
            ['name' => 'Speaking', 'lesson_id' => 46],        // 260


            // lesson 7's units count(6) start (261,266)

            ['name' => 'Video', 'lesson_id' => 47],             // 261
            ['name' => 'Listen and Repeat', 'lesson_id' => 47],
            ['name' => 'Trace', 'lesson_id' => 47],
            ['name' => 'Matching', 'lesson_id' => 47],
            ['name' => 'Listen and Write', 'lesson_id' => 47],
            ['name' => 'Speaking', 'lesson_id' => 47],          // 266


            // lesson 8's units count(6) start (267,272)

            ['name' => 'Video', 'lesson_id' => 48],             // 267
            ['name' => 'Listen and Write', 'lesson_id' => 48],
            ['name' => 'Write', 'lesson_id' => 48],
            ['name' => 'Look and Write', 'lesson_id' => 48],
            ['name' => 'Reading', 'lesson_id' => 48],
            ['name' => 'Speak', 'lesson_id' => 48],          // 272


            // lesson 9's units count(5) start (273,277)

            ['name' => 'Listen and Repeat', 'lesson_id' => 49],             // 273
            ['name' => 'Trace and Write', 'lesson_id' => 49],
            ['name' => 'Matching and words picture', 'lesson_id' => 49],
            ['name' => 'Arrange the letter', 'lesson_id' => 49],
            ['name' => 'Speak', 'lesson_id' => 49],                         // 277


            // lesson 10's units count(4) start (278,281)

            ['name' => 'Grammar Explain', 'lesson_id' => 50],             // 278
            ['name' => 'Listen and Repeat', 'lesson_id' => 50],
            ['name' => 'Look and Write', 'lesson_id' => 50],
            ['name' => 'Speak', 'lesson_id' => 50],                         // 281


            // lesson 11's units count(3) start (282,274)

            ['name' => 'Listen and Write', 'lesson_id' => 51],             // 282
            ['name' => 'Coloring', 'lesson_id' => 51],
            ['name' => 'Speak', 'lesson_id' => 51],                         // 284


            // lesson 12's units count(5) start (285,289)

            ['name' => 'Grammar Explanation', 'lesson_id' => 52],             // 285
            ['name' => 'Listen and Repeat', 'lesson_id' => 52],
            ['name' => 'Listen and Choose', 'lesson_id' => 52],
            ['name' => 'Speak', 'lesson_id' => 52],
            ['name' => 'Reading', 'lesson_id' => 52],                         // 289


            // lesson 13's units count(6) start (290,295)

            ['name' => 'Listen and Repeat', 'lesson_id' => 53],         // 290
            ['name' => 'Trace Words', 'lesson_id' => 53],
            ['name' => 'Matching', 'lesson_id' => 53],
            ['name' => 'Listen and Write', 'lesson_id' => 53],
            ['name' => 'Speak', 'lesson_id' => 53],
            ['name' => 'Target Grammar', 'lesson_id' => 53],                         // 295


            // lesson 14's units count(5) start (296,300)

            ['name' => 'Video', 'lesson_id' => 54],                     // 296
            ['name' => 'Listen and Repeat', 'lesson_id' => 54],
            ['name' => 'Listen and Choose', 'lesson_id' => 54],
            ['name' => 'Speak', 'lesson_id' => 54],
            ['name' => 'Speak more', 'lesson_id' => 54],                         // 300


            // lesson 15's units count(6) start (301,306)

            ['name' => 'Vocabulary', 'lesson_id' => 55],                    // 301
            ['name' => 'Trace Words', 'lesson_id' => 55],
            ['name' => 'Matching Words and Picture', 'lesson_id' => 55],
            ['name' => 'Listen and Write', 'lesson_id' => 55],
            ['name' => 'Speak', 'lesson_id' => 55],
            ['name' => 'Reading', 'lesson_id' => 55],                         // 306


            // lesson 16's units count(5) start (307,311)

            ['name' => 'Target Language Explanation', 'lesson_id' => 56],   // 307
            ['name' => 'Listen and Repeat', 'lesson_id' => 56],
            ['name' => 'Listen and Learn', 'lesson_id' => 56],
            ['name' => 'Sing and Dance', 'lesson_id' => 56],
            ['name' => 'Speak', 'lesson_id' => 56],                         // 311


            // lesson 17's units count(4) start (312,315)

            ['name' => 'Video', 'lesson_id' => 57],                         // 312
            ['name' => 'Listen and Repeat', 'lesson_id' => 57],
            ['name' => 'True or False', 'lesson_id' => 57],
            ['name' => 'Speak', 'lesson_id' => 57],                         // 315


            // lesson 18's units count(4) start (316,319)

            ['name' => 'Grammar Explain', 'lesson_id' => 58],                // 316
            ['name' => 'Listen and Repeat', 'lesson_id' => 58],
            ['name' => 'Speak', 'lesson_id' => 58],
            ['name' => 'Listen and Choose', 'lesson_id' => 58],              // 319


            // lesson 19's units count(6) start (320,325)

            ['name' => 'Video', 'lesson_id' => 59],                         // 320
            ['name' => 'Listen and Repeat', 'lesson_id' => 59],
            ['name' => 'Trace Words', 'lesson_id' => 59],
            ['name' => 'Matching words and picture', 'lesson_id' => 59],
            ['name' => 'Listen and write', 'lesson_id' => 59],
            ['name' => 'Speak', 'lesson_id' => 59],                         // 325


            // lesson 20's units count(5) start (326,330)

            ['name' => 'Listen and Repeat', 'lesson_id' => 60],             // 326
            ['name' => 'Trace Words', 'lesson_id' => 60],
            ['name' => 'Matching words', 'lesson_id' => 60],
            ['name' => 'Listen and write', 'lesson_id' => 60],
            ['name' => 'Reading', 'lesson_id' => 60],                       // 330


            // // lesson 21's units count(5) start (331,335)

            ['name' => 'Grammar Explanation', 'lesson_id' => 61],             // 331
            ['name' => 'Listen and Repeat', 'lesson_id' => 61],
            ['name' => 'Matching words and pictures', 'lesson_id' => 61],
            ['name' => 'Choose your answer', 'lesson_id' => 61],
            ['name' => 'Speak', 'lesson_id' => 61],                           // 335


            // // lesson 22's units count(4) start (336,339)

            ['name' => 'Target Language Explanation', 'lesson_id' => 62],      // 336
            ['name' => 'Listen and learn the song', 'lesson_id' => 62],
            ['name' => 'Sing and dance', 'lesson_id' => 62],
            ['name' => 'Speak', 'lesson_id' => 62],                            // 339


            // // lesson 23's units count(5) start (340,344)

            ['name' => 'Video', 'lesson_id' => 63],                             // 340
            ['name' => 'Listen and Repeat', 'lesson_id' => 63],
            ['name' => 'Trace Words', 'lesson_id' => 63],
            ['name' => 'Listen and Choose', 'lesson_id' => 63],
            ['name' => 'Speak', 'lesson_id' => 63],                             // 344


            // // lesson 24's units count(7) start (345,351)

            ['name' => 'Video', 'lesson_id' => 64],                              // 345
            ['name' => 'Listen and Practice', 'lesson_id' => 64],
            ['name' => 'Trace Words', 'lesson_id' => 64],
            ['name' => 'Matching', 'lesson_id' => 64],
            ['name' => 'Writing', 'lesson_id' => 64],
            ['name' => 'Speaking', 'lesson_id' => 64],
            ['name' => 'Reading short', 'lesson_id' => 64],                       // 351


            // // lesson 25's units count(5) start (352,356)

            ['name' => 'Grammar Explanation', 'lesson_id' => 65],             // 352
            ['name' => 'Listen and Repeat', 'lesson_id' => 65],
            ['name' => 'Choose', 'lesson_id' => 65],
            ['name' => 'Listen and write', 'lesson_id' => 65],
            ['name' => 'Speak', 'lesson_id' => 65],                             // 356


            // // lesson 26's units count(5) start (357,361)

            ['name' => 'Listen and Repeat', 'lesson_id' => 66],                 // 357
            ['name' => 'Trace words', 'lesson_id' => 66],
            ['name' => 'Matching words and pictures', 'lesson_id' => 66],
            ['name' => 'Listen and write', 'lesson_id' => 66],
            ['name' => 'Speak', 'lesson_id' => 66],                             // 361


            // // lesson 27's units count(4) start (362, 365)

            ['name' => 'Video', 'lesson_id' => 67],                         // 362
            ['name' => 'Reading', 'lesson_id' => 67],
            ['name' => 'Listen and write', 'lesson_id' => 67],
            ['name' => 'Speak', 'lesson_id' => 67],                         // 365


            // // lesson 28's units count(5) start (366,370)

            ['name' => 'Video', 'lesson_id' => 68],                         // 366
            ['name' => 'Reading', 'lesson_id' => 68],
            ['name' => 'Listen and write', 'lesson_id' => 68],
            ['name' => 'Matching', 'lesson_id' => 68],
            ['name' => 'Reading', 'lesson_id' => 68],                       // 370


            // // lesson 29's units count(4) start (371,374)

            ['name' => 'Grammar Explanation', 'lesson_id' => 69],            // 371
            ['name' => 'Listen and Repeat', 'lesson_id' => 69],
            ['name' => 'Look and Write', 'lesson_id' => 69],
            ['name' => 'Speak', 'lesson_id' => 69],                          // 374


            // // lesson 30's units count(5) start (375,379)

            ['name' => 'Listen and Repeat', 'lesson_id' => 70],              // 375
            ['name' => 'Trace words', 'lesson_id' => 70],
            ['name' => 'Matching words and pictures', 'lesson_id' => 70],
            ['name' => 'Listen and write', 'lesson_id' => 70],
            ['name' => 'Speak', 'lesson_id' => 70],                           // 379


            // // lesson 31's units count(5) start (380,384)

            ['name' => 'Video', 'lesson_id' => 71],              // 380
            ['name' => 'Listen and Repeat', 'lesson_id' => 71],
            ['name' => 'Look and Write', 'lesson_id' => 71],
            ['name' => 'Matching', 'lesson_id' => 71],
            ['name' => 'Speak', 'lesson_id' => 71],              // 384


            // // lesson 32's units count(6) start (385,390)

            ['name' => 'Video', 'lesson_id' => 72],              // 385
            ['name' => 'Listen and Repeat', 'lesson_id' => 72],
            ['name' => 'Trace', 'lesson_id' => 72],
            ['name' => 'Matching', 'lesson_id' => 72],
            ['name' => 'Listen and Write', 'lesson_id' => 72],
            ['name' => 'Reading', 'lesson_id' => 72],              // 390

            // // lesson 33's units count(3) start (391,393)

            ['name' => 'Grammar Explanation', 'lesson_id' => 73],              // 391
            ['name' => 'Listen and Repeat', 'lesson_id' => 73],
            ///////////////////////////////////////////
            ///////////////////////////////////////////
            ['name' => 'Speak', 'lesson_id' => 73],              // 393


            // // lesson 34's units count(5) start (394,398)

            ['name' => 'Listen and Repeat', 'lesson_id' => 74],     // 394
            ['name' => 'Trace Word', 'lesson_id' => 74],
            ['name' => 'Matching', 'lesson_id' => 74],
            ['name' => 'Listen and Write', 'lesson_id' => 74],
            ['name' => 'Speak', 'lesson_id' => 74],                 // 398


            // // lesson 35's units count(5) start (399,403)

            ['name' => 'Video', 'lesson_id' => 75],              // 399
            ['name' => 'Listen and Repeat', 'lesson_id' => 75],
            ['name' => 'Listen and Write', 'lesson_id' => 75],
            ['name' => 'Matching', 'lesson_id' => 75],
            ['name' => 'Speak', 'lesson_id' => 75],               // 403


            // // lesson 36's units count(5) start (404,408)

            ['name' => 'Video', 'lesson_id' => 76],              // 404
            ['name' => 'Listen and Repeat', 'lesson_id' => 76],
            ['name' => 'Listen and Write', 'lesson_id' => 76],
            ['name' => 'Speak', 'lesson_id' => 76],
            ['name' => 'Reading', 'lesson_id' => 76],               // 408


            // // lesson 37's units count(4) start (409,412)

            ['name' => 'Target Language Explanation', 'lesson_id' => 77],   // 409
            ['name' => 'Listen and Learn', 'lesson_id' => 77],
            ['name' => 'Sing and Dance', 'lesson_id' => 77],
            ['name' => 'Speak', 'lesson_id' => 77],                         // 412


            // // lesson 38's units count(6) start (413,418)

            ['name' => 'Video', 'lesson_id' => 78],                 // 413
            ['name' => 'Listen and Repeat', 'lesson_id' => 78],
            ['name' => 'Tracing', 'lesson_id' => 78],
            ['name' => 'Arranging Letters', 'lesson_id' => 78],
            ['name' => 'Matching', 'lesson_id' => 78],
            ['name' => 'Speak', 'lesson_id' => 78],                 // 418


            // // lesson 39's units count(6) start (419,422)

            ['name' => 'Grammar Explanation', 'lesson_id' => 79],       // 419
            ['name' => 'Listen and Repeat', 'lesson_id' => 79],
            ['name' => 'Look and write', 'lesson_id' => 79],
            ['name' => 'Speak', 'lesson_id' => 79],                     // 422


            // // lesson 40's units count(6) start (423,427)

            ['name' => 'Grammar Explanation', 'lesson_id' => 80],       // 423
            ['name' => 'Listen and Repeat', 'lesson_id' => 80],
            ['name' => 'Listen and Practice', 'lesson_id' => 80],
            ['name' => 'Matching', 'lesson_id' => 80],
            ['name' => 'Reading Passage', 'lesson_id' => 80],           // 427




        ]);

        // -------------------- Grade 2 End --------------------------//


        // -------------------- Grade 3 Start ------------------------//

        // Grade 3 Units
        DB::table('units')->insert([

            // G3 lesson 1

            // ['name' => 'Video', 'lesson_id' => 81],
            // ['name' => 'Read and Practice', 'lesson_id' => 81],
            // ['name' => 'Song', 'lesson_id' => 81],
            // ['name' => 'Listen and Practice', 'lesson_id' => 81],
            // ['name' => 'Writing (Arranging Order)', 'lesson_id' => 81],

            //G3 lesson 26
            ['name' => 'Target Language', 'lesson_id' => 106],
            ['name' => 'Vocabulary', 'lesson_id' => 106],
            ['name' => 'Practice', 'lesson_id' => 106],
            ['name' => 'Listening', 'lesson_id' => 106],
            ['name' => 'Speaking', 'lesson_id' => 106],
            ['name' => 'Reading', 'lesson_id' => 106],
            ['name' => 'Writing', 'lesson_id' => 106],
            ['name' => 'Free practice', 'lesson_id' => 106],

            //G3 lesson 33
            ['name' => 'Video', 'lesson_id' => 113],
            ['name' => 'Vocabulary', 'lesson_id' => 113],
            ['name' => 'Write the opposite', 'lesson_id' => 113],
            ['name' => 'Writing (Arrange the Order)', 'lesson_id' => 113],
            ['name' => 'Listen', 'lesson_id' => 113],
            ['name' => 'Speaking', 'lesson_id' => 113],
            ['name' => 'Free Speaking Practice', 'lesson_id' => 113],
        ]);


        // -------------------- Grade 3 End ------------------------//



        // -------------------- Grade 4 Start ------------------------//


        // Grade 4 Units
        DB::table('units')->insert([
            ['name' => 'Reading Lesson', 'lesson_id' => 124],
            ['name' => 'Listen and Repeat', 'lesson_id' => 124],
            ['name' => 'Speaking Practice', 'lesson_id' => 124],
            ['name' => 'Listen and Practice', 'lesson_id' => 124],
            ['name' => 'Speaking Topic', 'lesson_id' => 124],
        ]);
    }
}
