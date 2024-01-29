<?php

namespace Database\Seeders\AnsNQueSeed2\Grade4;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnsNQueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domain = app('domain');
        $AudioDomain = $domain . "/storage/audios/";



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 1 Game 757 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 757, 'a_content' => 'lesson_1_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 757, 'a_content' => 'lesson_1_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 1 Game 758 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l1_G758_image = $domain . "/storage/images/Grade_4/lesson_1/listen_n_repeat/";
        $G4_L1_listen_n_repeat = "Grade_4/" . "Lesson_1/" . "listen_n_repeat/";


        $ans_G758 = [
            "Beautiful", "Handsome", "Medium-height", "Middle-aged", "Old", "Oval-face", "Plump", "Pretty", "Round-face", "Short", "Slim", "Square-face", "Tall", "Well-built", "Young"
        ];

        foreach ($ans_G758 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 758, 'a_content' => $key, 'a_image' => $l1_G758_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G4_L1_listen_n_repeat . str_replace(' ', '-', $key) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 1 Game 759 ( Spelling Game )
        ////////////////////////////////////////////////////////

        $G4_L1_spelling_game = "Grade_4/" . "Lesson_1/" . "spelling_game/";
        $l5_G759_image = $domain . "/storage/images/Grade_4/lesson_1/spelling_game/";


        $q_G759 = [

            ["U", "B", "E", "A", "T", "F", "I", "U", "L"],
            ["A", "N", "H", "A", "D", "S", "O", "M", "E"],
            ["M", "E", "I", "U", "M", "D", "H", "E", "G", "I", "H", "T"],
            ["M", "I", "L", "E", "D", "D", "A", "G", "E", "D"],
            ["L", "O", "D"],
            ["V", "O", "A", "L", "E", "F", "A", "C"],
            ["U", "M", "P", "L", "P"],
            ["E", "P", "R", "T", "T", "Y"],
            ["O", "U", "R", "N", "D", "E", "F", "A", "C"],
            ["O", "S", "T", "H", "R"],
            ["I", "L", "S", "M"],
            ["S", "F", "A", "E", "Q", "U", "C", "R", "A", "E"],
            ["A", "L", "T", "L"],
            ["W", "E", "L", "L", "B", "I", "D", "U", "L", "T"],
            ["O", "U", "N", "G", "Y"],

        ];

        $a_G759 = [
            "BEAUTIFUL", "HANDSOME", "MEDIUMHEIGHT", "MIDDLEAGED", "OLD", "OVALFACE", "PLUMP", "PRETTY", "ROUNDFACE", "SHORT", "SLIM", "SQUAREFACE", "TALL", "WELLBUILT", "YOUNG"
        ];

        $G759_Index = 0;

        for ($i = 0; $i < count($q_G759); $i++) {
            foreach ($q_G759[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 759, 'q_content' => $j, 'q_audio' => $AudioDomain . $G4_L1_spelling_game . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 759,
                    'q_image' => $l5_G759_image . str_replace(' ', '', strtolower($a_G759[$G759_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G4_L1_spelling_game . strtolower($a_G759[$G759_Index]) . ".mp3",
                    'a_content' => $a_G759[$G759_Index],
                ],
            ]);
            $G759_Index++;
        }
    }
}
