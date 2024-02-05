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
        $l1_G759_image = $domain . "/storage/images/Grade_4/lesson_1/spelling_game/";


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
                    'q_image' => $l1_G759_image . str_replace(' ', '', strtolower($a_G759[$G759_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G4_L1_spelling_game . strtolower($a_G759[$G759_Index]) . ".mp3",
                    'a_content' => $a_G759[$G759_Index],
                ],
            ]);
            $G759_Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 1 Game 760 (  Practice  )
        ////////////////////////////////////////////////////////

        $l1G760image = $domain . "/storage/images/Grade_4/lesson_1/practice/";
        $G4_L1_practice_path = "Grade_4/" . "Lesson_1/" . "practice/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 760, 'q_image' =>  $l1G760image . "he.png", 'q_content' =>  "He She", 'a_content' => "He"],
            ['round' => 1, 'game_id' => 760, 'q_image' =>  $l1G760image . "she.png", 'q_content' =>  "He She", 'a_content' => "She"],


            ['round' => 2, 'game_id' => 760, 'q_image' =>  $l1G760image . "tall.png", 'q_content' =>  "Tall Short", 'a_content' => "Tall"],
            ['round' => 2, 'game_id' => 760, 'q_image' =>  $l1G760image . "short.png", 'q_content' =>  "Tall Short", 'a_content' => "Short"],


            ['round' => 3, 'game_id' => 760, 'q_image' =>  $l1G760image . "slim.png", 'q_content' =>  "Slim Plump", 'a_content' => "Slim"],
            ['round' => 3, 'game_id' => 760, 'q_image' =>  $l1G760image . "plump.png", 'q_content' =>  "Slim Plump", 'a_content' => "Plump"],


            ['round' => 4, 'game_id' => 760, 'q_image' =>  $l1G760image . "square.png", 'q_content' =>  "Round Square", 'a_content' => "Square"],
            ['round' => 4, 'game_id' => 760, 'q_image' =>  $l1G760image . "round.png", 'q_content' =>  "Round Square", 'a_content' => "Round"],


            ['round' => 5, 'game_id' => 760, 'q_image' =>  $l1G760image . "young.png", 'q_content' =>  "Old Young", 'a_content' => "Young"],
            ['round' => 5, 'game_id' => 760, 'q_image' =>  $l1G760image . "old.png", 'q_content' =>  "Old Young", 'a_content' => "Old"],


            ['round' => 6, 'game_id' => 760, 'q_image' =>  $l1G760image . "beautiful.png", 'q_content' =>  "Beautiful Handsome", 'a_content' => 'Beautiful'],
            ['round' => 6, 'game_id' => 760, 'q_image' =>  $l1G760image . "handsome.png", 'q_content' =>  "Beautiful Handsome", 'a_content' => "Handsome"],


            ['round' => 7, 'game_id' => 760, 'q_image' =>  $l1G760image . "pretty.png", 'q_content' =>  "Pretty Handsome", 'a_content' => "Pretty"],
            ['round' => 7, 'game_id' => 760, 'q_image' =>  $l1G760image . "middleaged.png", 'q_content' =>  "Old Middle-Aged", 'a_content' => "Middle-Aged"],


            ['round' => 8, 'game_id' => 760, 'q_image' =>  $l1G760image . "she-2.png", 'q_content' =>  "He She", 'a_content' => "She"],
            ['round' => 8, 'game_id' => 760, 'q_image' =>  $l1G760image . "he-2.png", 'q_content' =>  "He She", 'a_content' => "He"],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 1 Game 761 (  Listen and Repeat )
        //////////////////////////////////////////////////////////////


        $G4_L1_listen_practice_reading = "Grade_4/" . "Lesson_1/" . "listen_n_repeat_reading/";
        $l1_G761_image = $domain . "/storage/images/Grade_4/lesson_1/listen_n_repeat_reading/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 761, 'a_image' => $l1_G761_image . "john.gif", "a_audio" => $AudioDomain . $G4_L1_listen_practice_reading . "john.mp3", "a_conver" => $l1_G761_image . "john-text.png", "background" =>  $l1_G761_image . "bg.jpg"],
            ['round' => 1, 'game_id' => 761, 'a_image' => $l1_G761_image . "rose.gif", "a_audio" => $AudioDomain . $G4_L1_listen_practice_reading . "rose.mp3", "a_conver" => $l1_G761_image . "rose-text.png", "background" =>  $l1_G761_image . "bg.jpg"],

            ['round' => 2, 'game_id' => 761, 'a_image' => $l1_G761_image . "max.gif", "a_audio" => $AudioDomain . $G4_L1_listen_practice_reading . "max.mp3", "a_conver" => $l1_G761_image . "max-text.png", "background" =>  $l1_G761_image . "bg.jpg"],
            ['round' => 2, 'game_id' => 761, 'a_image' => $l1_G761_image . "sophie.gif", "a_audio" =>  $AudioDomain . $G4_L1_listen_practice_reading . "sophie.mp3", "a_conver" => $l1_G761_image . "sophie-text.png", "background" =>  $l1_G761_image . "bg.jpg"],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 1 Game 762 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L1_practice_speaking_A = "Grade_4/" . "Lesson_1/" . "practice_speaking_A/";
        $l1_G762image = $domain . "/storage/images/Grade_4/lesson_1/practice_speaking_A/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 762, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_A . ".mp3", 'q_image' => $l1_G762image . "john-short.png", "q_content" => "This is John. \nHe is short and slim. \nHe is young.", "round_instruction" => $AudioDomain . $G4_L1_practice_speaking_A . "john-short" . ".mp3"],
            ['round' => 2, 'game_id' => 762, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_A . ".mp3", 'q_image' => $l1_G762image . "winnie.png", "q_content" => "This is Winnie the Pooh. \nHe is ____.", "round_instruction" => $AudioDomain . $G4_L1_practice_speaking_A . "winnie" . ".mp3"],
            ['round' => 3, 'game_id' => 762, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_A . ".mp3", 'q_image' => $l1_G762image . "woody.png", "q_content" => "This is Woody. \nHe is ____.", "round_instruction" => $AudioDomain . $G4_L1_practice_speaking_A . "woody" . ".mp3"],
            ['round' => 4, 'game_id' => 762, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_A . ".mp3", 'q_image' => $l1_G762image . "elsa.png", "q_content" => "This is Elsa. \nShe is ____.", "round_instruction" => $AudioDomain . $G4_L1_practice_speaking_A . "elsa" . ".mp3"],
            ['round' => 5, 'game_id' => 762, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_A . ".mp3", 'q_image' => $l1_G762image . "john.png", "q_content" => "This is John. \nHe is ____.", "round_instruction" => $AudioDomain . $G4_L1_practice_speaking_A . "john" . ".mp3"],
            ['round' => 6, 'game_id' => 762, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_A . ".mp3", 'q_image' => $l1_G762image . "max.png", "q_content" => "This is Max. \nHe is ____.", "round_instruction" => $AudioDomain . $G4_L1_practice_speaking_A . "max" . ".mp3"],
            ['round' => 7, 'game_id' => 762, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_A . ".mp3", 'q_image' => $l1_G762image . "nick.png", "q_content" => "This is Nick. \nHe is ____.", "round_instruction" => $AudioDomain . $G4_L1_practice_speaking_A . "nick" . ".mp3"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 1 Game 763 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L1_practice_speaking_B = "Grade_4/" . "Lesson_1/" . "practice_speaking_B/";
        $l1_G763image = $domain . "/storage/images/Grade_4/lesson_1/practice_speaking_B/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 763, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_B . ".mp3", 'q_image' => $l1_G763image . "john-short.png", "q_content" => $l1_G763image . "john-content.png"],
            ['round' => 2, 'game_id' => 763, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_B . ".mp3", 'q_image' => $l1_G763image . "emma.png", "q_content" => $l1_G763image . "emma-content.png"],
            ['round' => 3, 'game_id' => 763, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_B . ".mp3", 'q_image' => $l1_G763image . "john-max.png", "q_content" => $l1_G763image . "john-max-content.png"],
            ['round' => 4, 'game_id' => 763, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_B . ".mp3", 'q_image' => $l1_G763image . "rose.png", "q_content" => $l1_G763image . "rose-tall-content.png"],
            ['round' => 5, 'game_id' => 763, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_B . ".mp3", 'q_image' => $l1_G763image . "sophie.png", "q_content" => $l1_G763image . "sophie-content.png"],
            ['round' => 6, 'game_id' => 763, "q_audio" => $AudioDomain . $G4_L1_practice_speaking_B . ".mp3", 'q_image' => $l1_G763image . "rose2.png", "q_content" => $l1_G763image . "rose-old-content.png"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 1 Game 764 ( listen and Practice )
        //////////////////////////////////////////////////////////////

        $G3_L11_listen_n_practice_path = "Grade_4/" . "Lesson_1/" . "listen_n_practice/";
        $l11_G764_image = $domain . "/storage/images/Grade_4/lesson_1/listen_n_practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Tall", "q_conver" => null, 'a_content' => 1],
            ['round' => 1, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Short", "q_conver" => null, 'a_content' => 0],
            ['round' => 1, 'game_id' => 764, "q_image" => $l11_G764_image . "emma.png", "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Emma-She-is-tall-and.mp3", "q_content" => null, 'q_conver' => "This is Emma. She is ____ and slim.", 'a_content' => null],

            ['round' => 2, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => 1, "q_conver" => null, 'a_content' => 0],
            ['round' => 2, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => 3, "q_conver" => null, 'a_content' => 1],
            ['round' => 2, 'game_id' => 764, "q_image" => $l11_G764_image . "emma.png", "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Emma-She-is-tall-and.mp3", "q_content" => null, 'q_conver' => "She is in Grade ____.", 'a_content' => null],

            ['round' => 3, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Tall", "q_conver" => null, 'a_content' => 0],
            ['round' => 3, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Short", "q_conver" => null, 'a_content' => 1],
            ['round' => 3, 'game_id' => 764, "q_image" => $l11_G764_image . "max.png", "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Max-He-is-short-and-p.mp3", "q_content" => null, 'q_conver' => "This is Max. He is short and ____.", 'a_content' => null],

            ['round' => 4, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => 1, "q_conver" => null, 'a_content' => 0],
            ['round' => 4, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => 2, "q_conver" => null, 'a_content' => 1],
            ['round' => 4, 'game_id' => 764, "q_image" => $l11_G764_image . "max.png", "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Max-He-is-short-and-p.mp3", "q_content" => null, 'q_conver' => "He is in Grade ____.", 'a_content' => null],

            ['round' => 5, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "family", "q_conver" => null, 'a_content' => 0],
            ['round' => 5, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "friends", "q_conver" => null, 'a_content' => 1],
            ['round' => 5, 'game_id' => 764, "q_image" => $l11_G764_image . "sophie-max.png", "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "SubBlock_They-are-Sophie-and-Max-They.mp3", "q_content" => null, 'q_conver' => "They are Sophie and Max. They are ____.", 'a_content' => null],

            ['round' => 6, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Tall", "q_conver" => null, 'a_content' => 1],
            ['round' => 6, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Short", "q_conver" => null, 'a_content' => 0],
            ['round' => 6, 'game_id' => 764, "q_image" => $l11_G764_image . "john.png", "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-John-He-is-tall-and-s.mp3", "q_content" => null, 'q_conver' => "This is John. He is ____ and ____. He is in Grade 1.", 'a_content' => null],

            ['round' => 7, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Plump", "q_conver" => null, 'a_content' => 0],
            ['round' => 7, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Slim", "q_conver" => null, 'a_content' => 1],
            ['round' => 7, 'game_id' => 764, "q_image" => $l11_G764_image . "john.png", "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-John-He-is-tall-and-s.mp3", "q_content" => null, 'q_conver' => "This is John. He is ____ and ____. He is in Grade 1.", 'a_content' => null],

            ['round' => 8, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Tall", "q_conver" => null, 'a_content' => 0],
            ['round' => 8, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Short", "q_conver" => null, 'a_content' => 1],
            ['round' => 8, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Emma-She-is-short-and.mp3", "q_content" => null, 'q_conver' => "This is Emma. She is ____ and ____. She is____. She is in Grade 4.", 'a_content' => null],

            ['round' => 9, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Handsome", "q_conver" => null, 'a_content' => 0],
            ['round' => 9, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Beautiful", "q_conver" => null, 'a_content' => 1],
            ['round' => 9, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Emma-She-is-short-and.mp3", "q_content" => null, 'q_conver' => "This is Emma. She is ____ and ____. She is____. She is in Grade 4.", 'a_content' => null],

            ['round' => 10, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Plump", "q_conver" => null, 'a_content' => 0],
            ['round' => 10, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Slim", "q_conver" => null, 'a_content' => 1],
            ['round' => 10, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Emma-She-is-short-and.mp3", "q_content" => null, 'q_conver' => "This is Emma. She is ____ and ____. She is____. She is in Grade 4.", 'a_content' => null],

            ['round' => 11, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Young", "q_conver" => null, 'a_content' => 1],
            ['round' => 11, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Old", "q_conver" => null, 'a_content' => 0],
            ['round' => 11, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Elsa-She-is-young-and.mp3", "q_content" => null, 'q_conver' => "This is Elsa. She is ____  and ____ . She is ____. Her face is oval.", 'a_content' => null],

            ['round' => 12, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Tall", "q_conver" => null, 'a_content' => 1],
            ['round' => 12, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Short", "q_conver" => null, 'a_content' => 0],
            ['round' => 12, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Elsa-She-is-young-and.mp3", "q_content" => null, 'q_conver' => "This is Elsa. She is ____  and ____ . She is ____. Her face is oval.", 'a_content' => null],

            ['round' => 13, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Handsome", "q_conver" => null, 'a_content' => 0],
            ['round' => 13, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Beautiful", "q_conver" => null, 'a_content' => 1],
            ['round' => 13, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Elsa-She-is-young-and.mp3", "q_content" => null, 'q_conver' => "This is Elsa. She is ____  and ____ . She is ____. Her face is oval.", 'a_content' => null],

            ['round' => 14, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Tall", "q_conver" => null, 'a_content' => 0],
            ['round' => 14, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Medium Height", "q_conver" => null, 'a_content' => 1],
            ['round' => 14, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Jack-He-is-medium-hei.mp3", "q_content" => null, 'q_conver' => "This is Jack. He is ____. He is ____.", 'a_content' => null],

            ['round' => 15, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Plump", "q_conver" => null, 'a_content' => 0],
            ['round' => 15, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Well Built", "q_conver" => null, 'a_content' => 1],
            ['round' => 15, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Jack-He-is-medium-hei.mp3", "q_content" => null, 'q_conver' => "This is Jack. He is ____. He is ____.", 'a_content' => null],

            ['round' => 16, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Young", "q_conver" => null, 'a_content' => 0],
            ['round' => 16, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Old", "q_conver" => null, 'a_content' => 1],
            ['round' => 16, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-David-He-is-tall-and.mp3", "q_content" => null, 'q_conver' => "This is David. He is tall and ____. His face is ____.", 'a_content' => null],

            ['round' => 17, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Oval", "q_conver" => null, 'a_content' => 0],
            ['round' => 17, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Square", "q_conver" => null, 'a_content' => 1],
            ['round' => 17, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-David-He-is-tall-and.mp3", "q_content" => null, 'q_conver' => "This is David. He is tall and ____. His face is ____.", 'a_content' => null],

            ['round' => 18, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Short", "q_conver" => null, 'a_content' => 0],
            ['round' => 18, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Medium Height", "q_conver" => null, 'a_content' => 1],
            ['round' => 18, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Woody-He-is-medium-he.mp3", "q_content" => null, 'q_conver' => "This is Woody. He is ____ and ____. His face is ____.", 'a_content' => null],

            ['round' => 19, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Pretty", "q_conver" => null, 'a_content' => 0],
            ['round' => 19, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Handsome", "q_conver" => null, 'a_content' => 1],
            ['round' => 19, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Woody-He-is-medium-he.mp3", "q_content" => null, 'q_conver' => "This is Woody. He is ____ and ____. His face is ____.", 'a_content' => null],

            ['round' => 20, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Oval", "q_conver" => null, 'a_content' => 1],
            ['round' => 20, 'game_id' => 764, "q_image" => null, "q_audio" =>  null, 'q_content' => "Square", "q_conver" => null, 'a_content' => 0],
            ['round' => 20, 'game_id' => 764, "q_image" => null, "q_audio" => $AudioDomain . $G3_L11_listen_n_practice_path . "This-is-Woody-He-is-medium-he.mp3", "q_content" => null, 'q_conver' => "This is Woody. He is ____ and ____. His face is ____.", 'a_content' => null],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 1 Game 765 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L1_practice_speaking = "Grade_4/" . "Lesson_1/" . "speaking_topic/";
        $l1_G765image = $domain . "/storage/images/Grade_4/lesson_1/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 765, "q_audio" => $AudioDomain . $G4_L1_practice_speaking . "" . ".mp3", 'q_image' => $l1_G765image . "girl.png", "q_content" => null, "round_instruction" => $AudioDomain . $G4_L1_practice_speaking . "Describe-the-pictures" . ".mp3"],
            ['round' => 2, 'game_id' => 765, "q_audio" => $AudioDomain . $G4_L1_practice_speaking . "" . ".mp3", 'q_image' => $l1_G765image . "boy.png", "q_content" => null, "round_instruction" =>  $AudioDomain . $G4_L1_practice_speaking . "Describe-the-pictures" . ".mp3"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 1 Game 766 (  writing topic )
        //////////////////////////////////////////////////////////////

        $G4_L1_Game766_ans = "My friend is Max. He is short and slim. He is handsome. He is young. He is in Grade 4. We are friends.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 766, 'a_content' => $G4_L1_Game766_ans],
        ]);





        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 2 Game 767 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 767, 'a_content' => 'lesson_2_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 767, 'a_content' => 'lesson_2_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 2 Game 768 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l1_G768_image = $domain . "/storage/images/Grade_4/lesson_2/listen_n_repeat/";
        $G4_L1_listen_n_repeat = "Grade_4/" . "Lesson_2/" . "listen_n_repeat/";


        $ans_G768 = [
            "Curly-hair", "Long-hair",    "Short-hair",    "Medium-length-hair",    "Dark-hair",    "Red-hair",    "Blonde-hair",    "Brown-hair",    "Bald-hair"
        ];

        foreach ($ans_G768 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 768, 'a_content' => $key, 'a_image' => $l1_G768_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G4_L1_listen_n_repeat . str_replace(' ', '-', $key) . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 2 Game 769 ( Spelling Game )
        ////////////////////////////////////////////////////////

        $G4_L2_spelling_game = "Grade_4/" . "Lesson_2/" . "spelling_game/";
        $l2_G769_image = $domain . "/storage/images/Grade_4/lesson_2/spelling_game/";


        $q_G769 = [

            ["A", "B", "D", "L"],
            ["L", "N", "O", "D", "E", "B"],
            ["B", "R", "W", "O", "N"],
            ["C", "R", "U", "Y", "L"],
            ["D", "R", "A", "K"],
            ["O", "L", "N", "G"],
            ["M", "D", "U", "I", "M", "L", "G", "N", "E", "G", "H", "T"],
            ["E", "D", "R"],
            ["S", "O", "H", "R", "T"],
            ["S", "R", "A", "T", "I", "G", "H"],

        ];

        $a_G769 = [
            "BALD", "BLONDE", "BROWN", "CURLY", "DARK", "LONG", "MEDIUMLENGTH", "RED", "SHORT", "STRAIGHT"
        ];

        $audio_G769 = [
            "Bald-hair",  "Blonde-hair",    "Brown-hair", "Curly-hair",  "Dark-hair", "Long-hair", "Medium-length-hair", "Red-hair",  "Short-hair", "Straight-hair"
        ];

        $G769_Index = 0;

        for ($i = 0; $i < count($q_G769); $i++) {
            foreach ($q_G769[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 769, 'q_content' => $j, 'q_audio' => $AudioDomain . $G4_L2_spelling_game . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 769,
                    'q_image' => $l2_G769_image . str_replace(' ', '', strtolower($a_G769[$G769_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G4_L2_spelling_game . strtolower($audio_G769[$G769_Index]) . ".mp3",
                    'a_content' => $a_G769[$G769_Index],
                ],
            ]);
            $G769_Index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 2 Game 770 (  Practice  )
        ////////////////////////////////////////////////////////

        $l2_G770_G771_image = $domain . "/storage/images/Grade_4/lesson_2/practice/";
        $G4_L2_practice_path = "Grade_4/" . "Lesson_2/" . "practice/";


        // Game 770
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 770, 'q_image' =>  $l2_G770_G771_image . "blonde.png", 'q_content' =>  "Brown-hair Blonde-hair", 'a_content' => "Blonde-hair"],
            ['round' => 1, 'game_id' => 770, 'q_image' =>  $l2_G770_G771_image . "brown.png", 'q_content' =>  "Brown-hair Blonde-hair", 'a_content' => "Brown-hair"],


            ['round' => 2, 'game_id' => 770, 'q_image' =>  $l2_G770_G771_image . "red.png", 'q_content' =>  "Red-hair Dark-hair", 'a_content' => "Red-hair"],
            ['round' => 2, 'game_id' => 770, 'q_image' =>  $l2_G770_G771_image . "dark.png", 'q_content' =>  "Red-hair Dark-hair", 'a_content' => "Dark-hair"],


            ['round' => 3, 'game_id' => 770, 'q_image' =>  $l2_G770_G771_image . "bald.png", 'q_content' =>  "Bald Short-hair", 'a_content' => "Bald"],
            ['round' => 3, 'game_id' => 770, 'q_image' =>  $l2_G770_G771_image . "medium-length.png", 'q_content' =>  "Medium-length-hair Short-hair", 'a_content' => "Medium-length-hair"],


            ['round' => 4, 'game_id' => 770, 'q_image' =>  $l2_G770_G771_image . "straight.png", 'q_content' =>  "Curly-hair Straight-hair", 'a_content' => "Straight-hair"],
            ['round' => 4, 'game_id' => 770, 'q_image' =>  $l2_G770_G771_image . "short.png", 'q_content' =>  "Long-hair Short-hair", 'a_content' => "Short-hair"],


            ['round' => 5, 'game_id' => 770, 'q_image' =>  $l2_G770_G771_image . "curly.png", 'q_content' =>  "Curly-hair Straight-hair", 'a_content' => "Curly-hair"],
            ['round' => 5, 'game_id' => 770, 'q_image' =>  $l2_G770_G771_image . "long.png", 'q_content' =>  "Long-hair Short-hair", 'a_content' => "Long-hair"],

        ]);


        // Game 771
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 771, 'q_image' => $l2_G770_G771_image . "he.png", "q_content" => "Has", "a_content" => 1],
            ['round' => 1, 'game_id' => 771, 'q_image' => null, "q_content" => "Have", "a_content" => 0],

            ['round' => 2, 'game_id' => 771, 'q_image' => $l2_G770_G771_image . "she.png", "q_content" => "Has", "a_content" => 1],
            ['round' => 2, 'game_id' => 771, 'q_image' => null, "q_content" => "Have", "a_content" => 0],

            ['round' => 3, 'game_id' => 771, 'q_image' => $l2_G770_G771_image . "john.png", "q_content" => "Has", "a_content" => 1],
            ['round' => 3, 'game_id' => 771, 'q_image' => null, "q_content" => "Have", "a_content" => 0],

            ['round' => 4, 'game_id' => 771, 'q_image' => $l2_G770_G771_image . "emma.png", "q_content" => "Has", "a_content" => 1],
            ['round' => 4, 'game_id' => 771, 'q_image' => null, "q_content" => "Have", "a_content" => 0],

            ['round' => 5, 'game_id' => 771, 'q_image' => $l2_G770_G771_image . "max.png", "q_content" => "Has", "a_content" => 1],
            ['round' => 5, 'game_id' => 771, 'q_image' => null, "q_content" => "Have", "a_content" => 0],

            ['round' => 6, 'game_id' => 771, 'q_image' => $l2_G770_G771_image . "rose.png", "q_content" => "Has", "a_content" => 1],
            ['round' => 6, 'game_id' => 771, 'q_image' => null, "q_content" => "Have", "a_content" => 0],

            ['round' => 7, 'game_id' => 771, 'q_image' => $l2_G770_G771_image . "they.png", "q_content" => "Has", "a_content" => 0],
            ['round' => 7, 'game_id' => 771, 'q_image' => null, "q_content" => "Have", "a_content" => 1],


        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 2 Game 772 (  Listen and Repeat )
        //////////////////////////////////////////////////////////////


        $G4_L2_listen_practice_reading = "Grade_4/" . "Lesson_2/" . "listen_n_repeat_reading/";
        $l2_G772_image = $domain . "/storage/images/Grade_4/lesson_2/listen_n_repeat_reading/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 772, 'a_image' => $l2_G772_image . "john.gif", "a_audio" => $AudioDomain . $G4_L2_listen_practice_reading . "john.mp3", "a_conver" => "Hello, I am John. \nI am short and slim. \nI have short hair. \nI have dark hair.", "background" =>  $l2_G772_image . "bg.jpg"],
            ['round' => 1, 'game_id' => 772, 'a_image' => $l2_G772_image . "rose.gif", "a_audio" => $AudioDomain . $G4_L2_listen_practice_reading . "rose.mp3", "a_conver" => "This is Rose. \nShe has straight hair. \nShe has blonde hair.", "background" =>  $l2_G772_image . "bg.jpg"],

            ['round' => 2, 'game_id' => 772, 'a_image' => $l2_G772_image . "max.gif", "a_audio" => $AudioDomain . $G4_L2_listen_practice_reading . "max.mp3", "a_conver" => "This is Max. \nHe has short hair. \nHe has dark hair.", "background" =>  $l2_G772_image . "bg.jpg"],
            ['round' => 2, 'game_id' => 772, 'a_image' => $l2_G772_image . "emma.gif", "a_audio" =>  $AudioDomain . $G4_L2_listen_practice_reading . "emma.mp3", "a_conver" => "This is Emma. \nShe has curly hair. \nShe has brown hair.", "background" =>  $l2_G772_image . "bg.jpg"],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 2 Game 773 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L2_practice_speaking = "Grade_4/" . "Lesson_2/" . "practice_speaking/";
        $l2_G773image = $domain . "/storage/images/Grade_4/lesson_2/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 773, "q_audio" => $AudioDomain . $G4_L2_practice_speaking . ".mp3", 'q_image' => $l2_G773image . "max.png", "q_content" => "This is Max. \nHe has ____ (long/short) hair.\nHe has ____ (straight/curly) hair.\nHe has ____ (blonde/brown) hair."],
            ['round' => 2, 'game_id' => 773, "q_audio" => $AudioDomain . $G4_L2_practice_speaking . ".mp3", 'q_image' => $l2_G773image . "john.png", "q_content" => "This is John. \nHe has ____ (long/short) hair.\nHe has ____ (straight/curly) hair.\nHe has ____ (blonde/red) hair."],
            ['round' => 3, 'game_id' => 773, "q_audio" => $AudioDomain . $G4_L2_practice_speaking . ".mp3", 'q_image' => $l2_G773image . "sophie.png", "q_content" => "This is Sophie. \nShe has ____ (long/short) hair.\nShe has ____ (straight/curly) hair.\nShe has ____ (blonde/brown) hair."],
            ['round' => 4, 'game_id' => 773, "q_audio" => $AudioDomain . $G4_L2_practice_speaking . ".mp3", 'q_image' => $l2_G773image . "rose.png", "q_content" => "This is Rose. \nShe has ____ hair. \n(straight/curly)"],
            ['round' => 5, 'game_id' => 773, "q_audio" => $AudioDomain . $G4_L2_practice_speaking . ".mp3", 'q_image' => $l2_G773image . "emma.png", "q_content" => "This is Emma. \nShe has ____ (long/short) hair.\nShe has ____ (straight/curly) hair.\nShe has ____ (blonde/brown) hair."],
            ['round' => 6, 'game_id' => 773, "q_audio" => $AudioDomain . $G4_L2_practice_speaking . ".mp3", 'q_image' => $l2_G773image . "max-q.png", "q_content" => "A: Is Max short? \nB: Yes, he is.\nA:Is he plump.\nB:No, he isn't.\nDoes he have short hair?\nYes, he does."],
            ['round' => 7, 'game_id' => 773, "q_audio" => $AudioDomain . $G4_L2_practice_speaking . ".mp3", 'q_image' => $l2_G773image . "sophie.png", "q_content" => "A: Is Sophie tall? \nB: No, ____.\nA:Is she slim.\nB:_____.\nDoes she have curly hair?\n_____."],
            ['round' => 8, 'game_id' => 773, "q_audio" => $AudioDomain . $G4_L2_practice_speaking . ".mp3", 'q_image' => $l2_G773image . "john-q.png", "q_content" => "A: Is John tall? \nB: Yes, ____.\nA:Is he plump.\nB:_____.\nDoes he have long hair?\nNo,_____."],
            ['round' => 9, 'game_id' => 773, "q_audio" => $AudioDomain . $G4_L2_practice_speaking . ".mp3", 'q_image' => $l2_G773image . "sophie-q.png", "q_content" => "A: Is Sophie tall? \nB: Yes, ____.\nA:Is she plump.\nB:_____.\nDoes she have straight hair?\nYes, _____."]
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 2 Game 774 (  Listening and practice  )
        ////////////////////////////////////////////////////////

        $l2G774image = $domain . "/storage/images/Grade_4/lesson_2/listern_n_practice/";
        $G4_L2_G774_listen_n_practice_path = "Grade_4/" . "Lesson_2/" . "listern_n_practice/";

        $l2_G774_ans = [
            "She has short hair. She has dark hair. She has straight hair.",
            "She has long hair. She has dark hair. She has curly hair.",
            "She has long hair. She has dark hair. She has straight hair.",
            "She has short hair. She has dark hair. She has curly hair.",
            "She has medium length hair. She has dark hair. She has curly hair.",
            "He has short hair. He has brown hair. He has curly hair.",
            "She has short hair. She has blonde hair. She has curly hair.",
            "He is bald"
        ];

        $l2_G774_audio_img = [
            "short-dark-straight",
            "long-dark-curly",
            "long-dark-straight",
            "short-dark-curly",
            "medium-dark-curly",
            "short-brown-curly",
            "short-blonde-curly",
            "bald"
        ];

        foreach ($l2_G774_audio_img as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 774, 'q_image' => $l2G774image . $val . ".png",
                    'q_audio' => $AudioDomain . $G4_L2_G774_listen_n_practice_path . $val . ".mp3", 'a_content' => $l2_G774_ans[$key]
                ],
            ]);
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 2 Game 775 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L2_speaking_topic = "Grade_4/" . "Lesson_2/" . "speaking_topic/";
        $l2_G775image = $domain . "/storage/images/Grade_4/lesson_2/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 775, "q_audio" => $AudioDomain . $G4_L2_speaking_topic . "Who-is-your-teacher.mp3", "q_conver" => "Who is your teacher?"],
            ['round' => 2, 'game_id' => 775, "q_audio" => $AudioDomain . $G4_L2_speaking_topic . "Does-she-have-long-hair.mp3", "q_conver" => "Does she has long hair?"],
            ['round' => 2, 'game_id' => 775, "q_audio" => $AudioDomain . $G4_L2_speaking_topic . "Does-she-have-straight-hair.mp3", "q_conver" => "Does she have straight hair?"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 2 Game 776 (  writing topic )
        //////////////////////////////////////////////////////////////

        $G4_L2_Game776_ans = "My teacher is Rose. She is tall and slim. She has long hair. She has dark hair. She has straight hair.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 776, 'a_content' => $G4_L2_Game776_ans],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 3 Game 777 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 777, 'a_content' => 'lesson_3_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 777, 'a_content' => 'lesson_3_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 3 Game 778 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l3_G778_image = $domain . "/storage/images/Grade_4/lesson_3/listen_n_repeat/";
        $G4_L3_listen_n_repeat = "Grade_4/" . "Lesson_3/" . "listen_n_repeat/";


        $ans_G778 = [
            "Cheerful",
            "Talkative",
            "Lazy",
            "Hardworking",
            "Helpful",
            "Quiet",
            "Grey-hair",
            "Blue-eyes",
            "Brown-eyes",
            "Dark-eyes"
        ];

        foreach ($ans_G778 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 778, 'a_content' => $key, 'a_image' => $l3_G778_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G4_L3_listen_n_repeat . str_replace(' ', '-', $key) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 1 Game 779 ( Spelling Game )
        ////////////////////////////////////////////////////////

        $G4_L3_spelling_game = "Grade_4/" . "Lesson_3/" . "spelling_game/";
        $l3_G779_image = $domain . "/storage/images/Grade_4/lesson_3/spelling_game/";


        $q_G779 = [

            ["U", "L", "B", "E", "E", "S", "E", "Y"],
            ["C", "H", "F", "U", "L", "R", "E", "E"],
            ["A", "R", "D", "H", "O", "R", "K", "W", "I", "G", "N"],
            ["L", "P", "F", "U", "L", "E", "H", "P"],
            ["A", "Z", "L", "Y"],
            ["Q", "I", "T", "E", "U"],
            ["A", "T", "K", "L", "I", "T", "E", "V"],

        ];

        $a_G779 = [
            "BLUEEYES", "CHEERFUL", "HARDWORKING", "HELPFUL", "LAZY", "QUIET", "TALKATIVE"
        ];

        $G779_Index = 0;

        for ($i = 0; $i < count($q_G779); $i++) {
            foreach ($q_G779[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 779, 'q_content' => $j, 'q_audio' => $AudioDomain . $G4_L3_spelling_game . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 779,
                    'q_image' => $l3_G779_image . str_replace(' ', '', strtolower($a_G779[$G779_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G4_L3_spelling_game . strtolower($a_G779[$G779_Index]) . ".mp3",
                    'a_content' => $a_G779[$G779_Index],
                ],
            ]);
            $G779_Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 3 Game 780 (  Practice  )
        ////////////////////////////////////////////////////////

        $l3_G780_G781_image = $domain . "/storage/images/Grade_4/lesson_3/practice/";
        $G4_L3_practice_path = "Grade_4/" . "Lesson_3/" . "practice/";


        // Game 780
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 780, 'q_image' =>  $l3_G780_G781_image . "1/" . "helpful.png", 'q_content' =>  "Helpful Hardworking", 'a_content' => "Helpful"],
            ['round' => 1, 'game_id' => 780, 'q_image' =>  $l3_G780_G781_image . "1/" . "lazy.png", 'q_content' =>  "Talkative Lazy", 'a_content' => "Lazy"],

            ['round' => 2, 'game_id' => 780, 'q_image' =>  $l3_G780_G781_image . "1/" . "blue-eyes.png", 'q_content' =>  "Black-Eyes Blue-Eyes", 'a_content' => "Blue-Eyes"],
            ['round' => 2, 'game_id' => 780, 'q_image' =>  $l3_G780_G781_image . "1/" . "dark-eyes.png", 'q_content' =>  "Dark-Eyes Blue-Eyes", 'a_content' => "Dark-Eyes"],

            ['round' => 3, 'game_id' => 780, 'q_image' =>  $l3_G780_G781_image . "1/" . "grey.png", 'q_content' =>  "Blonde-hair Grey-hair", 'a_content' => "Grey-hair"],
            ['round' => 3, 'game_id' => 780, 'q_image' =>  $l3_G780_G781_image . "1/" . "lazy.png", 'q_content' =>  "Talkative Lazy", 'a_content' => "Lazy"],

            ['round' => 4, 'game_id' => 780, 'q_image' =>  $l3_G780_G781_image . "1/" . "hardworking.png", 'q_content' =>  "Nice Hardworking", 'a_content' => "Hardworking"],
            ['round' => 4, 'game_id' => 780, 'q_image' =>  $l3_G780_G781_image . "1/" . "talkative.png", 'q_content' =>  "Talkative Quiet", 'a_content' => "Talkative"],

            ['round' => 5, 'game_id' => 780, 'q_image' =>  $l3_G780_G781_image . "1/" . "quiet.png", 'q_content' =>  "Hardworking Quiet", 'a_content' => "Quiet"],
            ['round' => 5, 'game_id' => 780, 'q_image' =>  $l3_G780_G781_image . "1/" . "cheerful.png", 'q_content' =>  "Cheerful Quiet", 'a_content' => "Cheerful"],

        ]);

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 781, 'q_audio' => $AudioDomain . $G4_L3_practice_path . "John-always-gets-100-marks-He.mp3", "q_conver" => "John always gets 100 marks. He is c____.", 'q_content' =>  "Clever", 'a_content' => 1, 'q_image' =>  $l3_G780_G781_image . "2/" . "clever.png"],
            ['round' => 1, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Cheerful", 'a_content' => 0, 'q_image' => null],
            ['round' => 1, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Friendly", 'a_content' => 0, 'q_image' => null],
            ['round' => 1, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Hardworking", 'a_content' => 0, 'q_image' => null],

            ['round' => 2, 'game_id' => 781, 'q_audio' => $AudioDomain . $G4_L3_practice_path . "Our-teacher-always-smiles-She.mp3", "q_conver" => "Our teacher always smiles. She is f____.", 'q_content' =>  "Clever", 'a_content' => 0, 'q_image' =>  $l3_G780_G781_image . "2/" . "teacher-friendly.png"],
            ['round' => 2, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Cheerful", 'a_content' => 0, 'q_image' => null],
            ['round' => 2, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Friendly", 'a_content' => 1, 'q_image' => null],
            ['round' => 2, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Hardworking", 'a_content' => 0, 'q_image' => null],

            ['round' => 3, 'game_id' => 781, 'q_audio' => $AudioDomain . $G4_L3_practice_path . "Stay-in-the-library.mp3", "q_conver" => "Stay q ____ in the library.", 'q_content' =>  "Hardworking", 'a_content' => 0, 'q_image' =>  $l3_G780_G781_image . "2/" . "quiet.png"],
            ['round' => 3, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Nice", 'a_content' => 0, 'q_image' => null],
            ['round' => 3, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Quiet", 'a_content' => 1, 'q_image' => null],
            ['round' => 3, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Friendly", 'a_content' => 0, 'q_image' => null],

            ['round' => 4, 'game_id' => 781, 'q_audio' => $AudioDomain . $G4_L3_practice_path . "Jack-is-He-gives-me-pocket-mon.mp3", "q_conver" => "Jack is n____. He gives me pocket money.", 'q_content' =>  "Hardworking", 'a_content' => 0, 'q_image' =>  $l3_G780_G781_image . "2/" . "nice.png"],
            ['round' => 4, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Nice", 'a_content' => 1, 'q_image' => null],
            ['round' => 4, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Quiet", 'a_content' => 0, 'q_image' => null],
            ['round' => 4, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Friendly", 'a_content' => 0, 'q_image' => null],

            ['round' => 5, 'game_id' => 781, 'q_audio' => $AudioDomain . $G4_L3_practice_path . "Rose-and-I-are-friends-She-is.mp3", "q_conver" => "Rose and I are friends. She is very f____.", 'q_content' =>  "Hardworking", 'a_content' => 0, 'q_image' =>  $l3_G780_G781_image . "2/" . "friendly.png"],
            ['round' => 5, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Nice", 'a_content' => 0, 'q_image' => null],
            ['round' => 5, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Quiet", 'a_content' => 0, 'q_image' => null],
            ['round' => 5, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Friendly", 'a_content' => 1, 'q_image' => null],

            ['round' => 6, 'game_id' => 781, 'q_audio' => $AudioDomain . $G4_L3_practice_path . "Max-studies-the-lesson-every-d.mp3", "q_conver" => "Max studies the lesson every day. She is h____.", 'q_content' =>  "Hardworking", 'a_content' => 1, 'q_image' =>  $l3_G780_G781_image . "2/" . "hardworking.png"],
            ['round' => 6, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Nice", 'a_content' => 0, 'q_image' => null],
            ['round' => 6, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Quiet", 'a_content' => 0, 'q_image' => null],
            ['round' => 6, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Friendly", 'a_content' => 0, 'q_image' => null],

            ['round' => 7, 'game_id' => 781, 'q_audio' => $AudioDomain . $G4_L3_practice_path . "Dont-be-while-learning-lesson.mp3", "q_conver" => "Don't be t____ while learning lessons.", 'q_content' =>  "Talkative", 'a_content' => 1, 'q_image' =>  $l3_G780_G781_image . "2/" . "talkative.png"],
            ['round' => 7, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Lazy", 'a_content' => 0, 'q_image' => null],
            ['round' => 7, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Quiet", 'a_content' => 0, 'q_image' => null],
            ['round' => 7, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Friendly", 'a_content' => 0, 'q_image' => null],

            ['round' => 8, 'game_id' => 781, 'q_audio' => $AudioDomain . $G4_L3_practice_path . "Emma-is-She-never-does-housewo.mp3", "q_conver" => "Emma is l____. She never does housework.", 'q_content' =>  "Talkative", 'a_content' => 0, 'q_image' =>  $l3_G780_G781_image . "2/" . "lazy.png"],
            ['round' => 8, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Lazy", 'a_content' => 1, 'q_image' => null],
            ['round' => 8, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Quiet", 'a_content' => 0, 'q_image' => null],
            ['round' => 8, 'game_id' => 781, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "Friendly", 'a_content' => 0, 'q_image' => null],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 3 Game 782 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $G4_L3_listen_practice_reading = "Grade_4/" . "Lesson_3/" . "listen_n_repeat_reading/";
        $l3_G782_image = $domain . "/storage/images/Grade_4/lesson_3/listen_n_repeat_reading/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 782, 'a_image' => $l3_G782_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L3_listen_practice_reading . "is-rose-talk.mp3", "a_conver" => $l3_G782_image . "rose-talk.png", "background" =>  $l3_G782_image . "bg.jpg"],
            ['round' => 1, 'game_id' => 782, 'a_image' => $l3_G782_image . "girl.gif", "a_audio" => $AudioDomain . $G4_L3_listen_practice_reading . "no-she-quiet.mp3", "a_conver" => $l3_G782_image . "no-quiet.png", "background" =>  $l3_G782_image . "bg.jpg"],

            ['round' => 2, 'game_id' => 782, 'a_image' => $l3_G782_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L3_listen_practice_reading . "is-emma-lazy.mp3", "a_conver" => $l3_G782_image . "emma-lazy.png", "background" =>  $l3_G782_image . "bg.jpg"],
            ['round' => 2, 'game_id' => 782, 'a_image' => $l3_G782_image . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L3_listen_practice_reading . "no-she-hardwork.mp3", "a_conver" => $l3_G782_image . "no-hard.png", "background" =>  $l3_G782_image . "bg.jpg"],

            ['round' => 3, 'game_id' => 782, 'a_image' => $l3_G782_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L3_listen_practice_reading . "is-jack-clever.mp3", "a_conver" => $l3_G782_image . "jack-clever.png", "background" =>  $l3_G782_image . "bg.jpg"],
            ['round' => 3, 'game_id' => 782, 'a_image' => $l3_G782_image . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L3_listen_practice_reading . "yes-he.mp3", "a_conver" => $l3_G782_image . "yes-he.png", "background" =>  $l3_G782_image . "bg.jpg"],

            ['round' => 4, 'game_id' => 782, 'a_image' => $l3_G782_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L3_listen_practice_reading . "is-max-help.mp3", "a_conver" => $l3_G782_image . "max-help.png", "background" =>  $l3_G782_image . "bg.jpg"],
            ['round' => 4, 'game_id' => 782, 'a_image' => $l3_G782_image . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L3_listen_practice_reading . "yes-he.mp3", "a_conver" => $l3_G782_image . "yes-he.png", "background" =>  $l3_G782_image . "bg.jpg"],

            ['round' => 5, 'game_id' => 782, 'a_image' => $l3_G782_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L3_listen_practice_reading . "is-soph-cheer.mp3", "a_conver" => $l3_G782_image . "sophie-cheer.png", "background" =>  $l3_G782_image . "bg.jpg"],
            ['round' => 5, 'game_id' => 782, 'a_image' => $l3_G782_image . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L3_listen_practice_reading . "yes-she-clever.mp3", "a_conver" => $l3_G782_image . "yes-clever.png", "background" =>  $l3_G782_image . "bg.jpg"],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 3 Game 783 (  Practice  )
        ////////////////////////////////////////////////////////

        $l3_G783_image = $domain . "/storage/images/Grade_4/lesson_3/reading_lesson/";
        $G4_L3_reading_lesson_path = "Grade_4/" . "Lesson_3/" . "reading_lesson/";


        // Game 780
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 783, 'q_image' =>  $l3_G783_image . "girl.png", "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "What-building-do-you-see-in-th.mp3", "q_conver" => "What building do you see in the picture?", 'q_content' => "A shopping mall", 'a_content' => 1],
            ['round' => 1, 'game_id' => 783, 'q_image' => null, "q_audio" => null, "q_conver" => null, 'q_content' => "A school", 'a_content' => 0],
            ['round' => 1, 'game_id' => 783, 'q_image' => null, "q_audio" => null, "q_conver" => null, 'q_content' => "A playground", 'a_content' => 0],

            ['round' => 2, 'game_id' => 783, 'q_image' =>  $l3_G783_image . "girl.png", "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "What-do-you-see-in-the-picture.mp3", "q_conver" => "What do you see in the picture?", 'q_content' => "Two friends", 'a_content' => 1],
            ['round' => 2, 'game_id' => 783, 'q_image' => null, "q_audio" => null, "q_conver" => null, 'q_content' => "Three people", 'a_content' => 0],
            ['round' => 2, 'game_id' => 783, 'q_image' => null, "q_audio" => null, "q_conver" => null, 'q_content' => "One teacher", 'a_content' => 0],

        ]);


        DB::table('ans_n_ques')->insert([

            ['round' => 3, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "straight.mp3", 'q_content' => "Straight Hair", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "curly.mp3", 'q_content' => "Curly Hair", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "Emma-has-Straight-hair-Curly-h.mp3", "q_conver" => "Emma has ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            [
                'round' => 3, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "I-am-Max-I-am-a-Grade-2-stude.mp3", "q_content" => "I am Max",
                'q_conver' => "I am Max. I am a Grade 2 student. I have a sister. Her name is Emma. She is ten years old. She is tall and slim. She has shoulder-length straight hair. Her hair is brown colour. She is helpful, and kind. We go shopping every Sunday. We usually buy fruit and vegetables.",
                'a_content' => null, "background" => $l3_G783_image . "bg.png"
            ],

            ['round' => 4, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "two.mp3", 'q_content' => "Two", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "three.mp3", 'q_content' => "Three", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "Max-is-in-Grade-two-3.mp3", "q_conver" => "Max is in Grade ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            [
                'round' => 4, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "I-am-Max-I-am-a-Grade-2-stude.mp3", "q_content" => "I am Max",
                'q_conver' => "I am Max. I am a Grade 2 student. I have a sister. Her name is Emma. She is ten years old. She is tall and slim. She has shoulder-length straight hair. Her hair is brown colour. She is helpful, and kind. We go shopping every Sunday. We usually buy fruit and vegetables.",
                'a_content' => null, "background" => $l3_G783_image . "bg.png"
            ],

            ['round' => 5, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "school.mp3", 'q_content' => "School", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "cinema.mp3", 'q_content' => "The Cinema", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "shopping-mall.mp3", 'q_content' => "Shopping Mall", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "Emma-and-Max-go-to-together-S.mp3", "q_conver" => "Emma and Max go to \n ____ together.", 'q_content' => null, 'a_content' => null, "background" => null],
            [
                'round' => 5, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "I-am-Max-I-am-a-Grade-2-stude.mp3", "q_content" => "I am Max",
                'q_conver' => "I am Max. I am a Grade 2 student. I have a sister. Her name is Emma. She is ten years old. She is tall and slim. She has shoulder-length straight hair. Her hair is brown colour. She is helpful, and kind. We go shopping every Sunday. We usually buy fruit and vegetables.",
                'a_content' => null, "background" => $l3_G783_image . "bg.png"
            ],

            ['round' => 6, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "cheerful.mp3", 'q_content' => "Cheerful", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 6, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "helpful.mp3", 'q_content' => "Helpful", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 6, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "Emma-is-and-kind-Cheerful-Hel.mp3", "q_conver" => "Emma is ____ and kind.", 'q_content' => null, 'a_content' => null, "background" => null],
            [
                'round' => 6, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "I-am-Max-I-am-a-Grade-2-stude.mp3", "q_content" => "I am Max",
                'q_conver' => "I am Max. I am a Grade 2 student. I have a sister. Her name is Emma. She is ten years old. She is tall and slim. She has shoulder-length straight hair. Her hair is brown colour. She is helpful, and kind. We go shopping every Sunday. We usually buy fruit and vegetables.",
                'a_content' => null, "background" => $l3_G783_image . "bg.png"
            ],

            ['round' => 7, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "plump.mp3", 'q_content' => "Plump", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 7, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "slim.mp3", 'q_content' => "Slim", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 7, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "SubBlock_Emma-is-Plump-Slim.mp3", "q_conver" => "Emma is ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            [
                'round' => 7, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "I-am-Max-I-am-a-Grade-2-stude.mp3", "q_content" => "I am Max",
                'q_conver' => "I am Max. I am a Grade 2 student. I have a sister. Her name is Emma. She is ten years old. She is tall and slim. She has shoulder-length straight hair. Her hair is brown colour. She is helpful, and kind. We go shopping every Sunday. We usually buy fruit and vegetables.",
                'a_content' => null, "background" => $l3_G783_image . "bg.png"
            ],

            ['round' => 8, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "tall.mp3", 'q_content' => "Tall", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 8, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "short.mp3", 'q_content' => "Short", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 8, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "medium-height.mp3", 'q_content' => "Medium Height", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 8, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "Emma-is-Tall-short-Medium-heig.mp3", "q_conver" => "Emma is ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            [
                'round' => 8, 'game_id' => 783, "q_audio" => $AudioDomain . $G4_L3_reading_lesson_path . "I-am-Max-I-am-a-Grade-2-stude.mp3", "q_content" => "I am Max",
                'q_conver' => "I am Max. I am a Grade 2 student. I have a sister. Her name is Emma. She is ten years old. She is tall and slim. She has shoulder-length straight hair. Her hair is brown colour. She is helpful, and kind. We go shopping every Sunday. We usually buy fruit and vegetables.",
                'a_content' => null, "background" => $l3_G783_image . "bg.png"
            ],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 3 Game 784 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L3_practice_speaking = "Grade_4/" . "Lesson_3/" . "practice_speaking/";
        $l3_G784image = $domain . "/storage/images/Grade_4/lesson_3/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 784, "q_audio" => $AudioDomain . $G4_L3_practice_speaking . ".mp3", 'q_image' => $l3_G784image . "curly-boy.png", "q_content" => "Ben is ____ and ____. \nHe has ____ black hair. \nHe ____  hair.\nHe is quiet.", "round_instruction" => $AudioDomain . $G4_L3_practice_speaking . "" . ".mp3"],
            ['round' => 2, 'game_id' => 784, "q_audio" => $AudioDomain . $G4_L3_practice_speaking . ".mp3", 'q_image' => $l3_G784image . "grey.png", "q_content" => "Tom is ____ and ____. \nHe has short  ____ hair. \nHe has ____ hair. \nHe is hard-working.", "round_instruction" => $AudioDomain . $G4_L3_practice_speaking . "" . ".mp3"],
            ['round' => 3, 'game_id' => 784, "q_audio" => $AudioDomain . $G4_L3_practice_speaking . ".mp3", 'q_image' => $l3_G784image . "short.png", "q_content" => "Emma is short and ____. \nShe has short brown hair. \nShe has straight hair.", "round_instruction" => $AudioDomain . $G4_L3_practice_speaking . "" . ".mp3"],
            ['round' => 4, 'game_id' => 784, "q_audio" => $AudioDomain . $G4_L3_practice_speaking . ".mp3", 'q_image' => $l3_G784image . "long.png", "q_content" => "Rose is ____ and ____.\nShe has ____ red hair. \nShe has ____ hair. \nShe is cheerful.", "round_instruction" => $AudioDomain . $G4_L3_practice_speaking . "" . ".mp3"],
            ['round' => 5, 'game_id' => 784, "q_audio" => $AudioDomain . $G4_L3_practice_speaking . ".mp3", 'q_image' => $l3_G784image . "curly.png", "q_content" => "Susan is ____. \nShe has short brown hair. \nShe has curly hair.", "round_instruction" => $AudioDomain . $G4_L3_practice_speaking . "" . ".mp3"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 3 Game 785 (  Listening and practice  )
        ////////////////////////////////////////////////////////

        $l3G785image = $domain . "/storage/images/Grade_4/lesson_3/listern_n_practice/";
        $G4_L3_G785_listen_n_practice_path = "Grade_4/" . "Lesson_3/" . "listern_n_practice/";

        $l3_G785_ans = [
            "She has curly hair. She has long brown hair.",
            "He has short black hair. He has straight hair.",
            "She has short black hair. She has straight hair. She is thin.",
            "She has long brown hair. She has curly hair. She is tall and plump.",
            "He has short grey hair. He has straight hair.",
            "He has long black hair. He has straight hair. He is tall and slim."
        ];

        $l3_G785_audio_img = [
            "she-curly-long-brown",
            "he-short-black-straight",
            "she-short-black-straight-thin",
            "she-long-brown-curly",
            "he-short-straight",
            "he-long-straight",
        ];

        foreach ($l3_G785_audio_img as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 785, 'q_image' => $l3G785image . $val . ".png",
                    'q_audio' => $AudioDomain . $G4_L3_G785_listen_n_practice_path . $val . ".mp3", 'a_content' => $l3_G785_ans[$key]
                ],
            ]);
        }

        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 3 Game 786 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L3_speaking_topic = "Grade_4/" . "Lesson_3/" . "speaking_topic/";
        $l3_G786image = $domain . "/storage/images/Grade_4/lesson_3/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 786, "q_audio" => $AudioDomain . $G4_L3_speaking_topic . "Choose-three-words-to-describe.mp3", "q_conver" => $l3_G786image . "text.png", "round_instruction" => $AudioDomain . $G4_L3_speaking_topic . "Choose-three-words-to-describe" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 3 Game 787 (  writing topic )
        //////////////////////////////////////////////////////////////

        $G4_L3_Game787_ans = "My best friend is Susan. She is tall and slim. She has blue eyes. She has short brown hair. She has curly hair. She is clever, and hard-working.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 787, 'a_content' => $G4_L3_Game787_ans],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 4 Game 788 ( video )
        //////////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 788, 'a_content' => 'lesson_4_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 788, 'a_content' => 'lesson_4_video_global', 'isLocal' => 0]);





        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 4 Game 789 (  Practice  )
        ////////////////////////////////////////////////////////

        $l4_G789_image = $domain . "/storage/images/Grade_4/lesson_4/reading_lesson/";
        $G4_L4_reading_lesson_path = "Grade_4/" . "Lesson_4/" . "reading_lesson/";

        $l4_G789_q_audio = [
            "How-many-people-do-you-see-in",
            "What-is-the-name-of-Johns-cat",
            "What-is-John-doing-Playing-wit",
            "Does-John-have-long-hair-Yes",
            "Does-Max-have-long-hair-Yes-h",
            "Does-Emma-have-short-hair-Yes",
            "What-is-Emma-doing-Picking-app",
            "Who-is-helping-Emma-Max-john",
            "How-is-the-weather-Sunny-Rainy",
            "Where-are-they-In-the-shopping"
        ];
        $l4_G789_q_conver = [
            "How many people do you see in picture?",
            "What is the name of John's cat?",
            "What is John doing?",
            "Does John have long hair?",
            "Does Max have long hair?",
            "Does Emma have short hair?",
            "What is Emma doing?",
            "Who is helping Emma?",
            "How is the weather?",
            "Where are they?"
        ];
        $l4_G789_q_audio_ans = [
            ["Two", "Three", "Four"],
            ["Kate", "Max", "Ben"],
            ["Playing with his cat", "Digging the soil", "Picking apples"],
            ["Yes, he does", "No, he doesn't"],
            ["Yes, he does", "No, he doesn't"],
            ["Yes, she does", "No, she doesn't"],
            ["Picking apples", "Planting", "Playing in the garden"],
            ["Max", "John", "Ben"],
            ["Sunny", "Rainy", "Cloudy"],
            ["In the shopping mall", "In the playground", "In the garden"]

        ];
        $l4_G789_q_audio_a_content = [
            [0, 1, 0],
            [0, 0, 1],
            [1, 0, 0],
            [0, 1],
            [0, 1],
            [0, 1],
            [0, 1, 0],
            [1, 0, 0],
            [0, 0, 1],
            [0, 0, 1],
        ];


        for ($i = 0; $i < count($l4_G789_q_audio); $i++) {

            foreach ($l4_G789_q_audio_ans[$i] as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 789, "q_audio" => $AudioDomain . $G4_L4_reading_lesson_path . str_replace(' ', '-', strtolower($val)) . ".mp3", 'q_content' => $val, "q_conver" => null, 'a_content' => $l4_G789_q_audio_a_content[$i][$key], "background" => null],
                ]);
            }

            foreach ($l4_G789_q_audio as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 789, "q_audio" => $AudioDomain . $G4_L4_reading_lesson_path . $val . ".mp3", "q_conver" => $l4_G789_q_conver[$key], 'q_content' => null, 'a_content' => null, "background" => null],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 789, "q_audio" => $AudioDomain . $G4_L4_reading_lesson_path . "They-are-John-Max-and-Emma-M.mp3", "q_content" => null,
                    'q_conver' => "They are John, Max and Emma. Max is in Grade 2, John is in Grade 3 and Emma is in Grade-3. John has short brown hair. He is playing with his cat, Ben. Max has short hair. He is digging the soil. Emma has shoulder length hair. She is wearing eyeglasses. Emma loves gardening. Max is helping Emma to plant. They are in the garden. It is a cloudy but beautiful day.",
                    'a_content' => null, "background" => $l4_G789_image . "bg.png"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 4 Game 790 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l4_G790_image = $domain . "/storage/images/Grade_4/lesson_4/listen_n_repeat/";
        $G4_L4_listen_n_repeat = "Grade_4/" . "Lesson_4/" . "listen_n_repeat/";


        $ansL4_G790 = [
            ["plump", "slim"],
            ["tall", "short"],
            ["straight-hair", "curly-hair"],
            ["talkative", "quiet"],
            ["hardworking", "lazy"],
            ["blue-eyes", "dark-eyes"],
            ["dark-hair", "grey-hair"],
            ["red-hair", "blonde-hair"],
            ["slim", "well-built"],
            ["tall", "medium-height"],
        ];

        for ($i = 0; $i < count($ansL4_G790); $i++) {
            for ($j = 0; $j < count($ansL4_G790[$i]); $j++) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 790,
                        'a_content' => $ansL4_G790[$i][$j],
                        'a_image' => $l4_G790_image . $ansL4_G790[$i][$j] . ".png",
                        'a_audio' => $AudioDomain . $G4_L4_listen_n_repeat . strtolower($ansL4_G790[$i][$j]) . ".mp3",
                        'q_content' => $i,
                    ],
                ]);
            }
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 4 Game 791 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L4_speaking_practice = "Grade_4/" . "Lesson_3/" . "speaking_practice/";
        $l4_G791image = $domain . "/storage/images/Grade_4/lesson_3/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 791, "q_audio" => $AudioDomain . $G4_L4_speaking_practice . ".mp3", "q_conver" => $l4_G791image . "teacher.png", "round_instruction" => $AudioDomain . $G4_L4_speaking_practice . "" . ".mp3"],
            ['round' => 2, 'game_id' => 791, "q_audio" => $AudioDomain . $G4_L4_speaking_practice . ".mp3", "q_conver" => $l4_G791image . "friend.png", "round_instruction" => $AudioDomain . $G4_L4_speaking_practice . "" . ".mp3"],
            ['round' => 3, 'game_id' => 791, "q_audio" => $AudioDomain . $G4_L4_speaking_practice . ".mp3", "q_conver" => $l4_G791image . "bro.png", "round_instruction" => $AudioDomain . $G4_L4_speaking_practice . "" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 4 Game 792 (  Listen and Practice )
        //////////////////////////////////////////////////////////////

        $G4_L4_listen_n_practice = "Grade_4/Lesson_4/Listen_and_Practice/";
        $l4_G792image = $domain .  "/storage/images/Grade_4/lesson_4/Listen_and_Practice/";

        $G4L4U5 = range(1, 8);
        $G4L4U5content = [
            'She has brown hair. She has straight and short hair. She has brown eyes.',
            'He has brown hair. He has straight and short hair.',
            'She has brown hair. She has long curly hair. ',
            'She has grey hair. She has straight and long hair. ',
            'She has pink hair. She has long curly hair.',
            'He has brown hair. He has short curly hair.',
            'He has short hair. He has straight hair. He is lazy. ',
            'She has short curly hair. She had dark hair. She is cheerful. She has blue eyes.',
        ];

        foreach ($G4L4U5 as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 792, 'q_image' => $l4_G792image . $G4L4U5[$v - 1] . ".png",
                    'q_audio' =>  $AudioDomain . $G4_L4_listen_n_practice . $G4L4U5[$v - 1] . ".mp3", 'a_content' => $G4L4U5content[$v - 1]
                ],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 4 Game 793 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L4_speaking_topic = "Grade_4/" . "Lesson_4/" . "speaking_topic/";
        $l4_G793image = $domain . "/storage/images/Grade_4/lesson_4/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 793, 'q_image' => $l4_G793image . "1.png", "q_audio" => $AudioDomain . $G4_L4_speaking_topic . ".mp3", "q_conver" => "Describe this photo about Taylor. \nPrepare before you talk.", "round_instruction" => $AudioDomain . $G4_L4_speaking_topic . "Describe-this-photo-about-Tayl" . ".mp3"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 5 Game 794 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 794, 'a_content' => 'lesson_5_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 794, 'a_content' => 'lesson_5_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 5 Game 795 , 796 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l5_G795_G796_image = $domain . "/storage/images/Grade_4/lesson_5/listen_n_repeat/";
        $G4_L5_listen_n_repeat = "Grade_4/" . "Lesson_5/" . "listen_n_repeat/";


        $ans_G795 = [
            "Cat", "Cock", "Cow", "Dog", "Duck", "Goat", "Horse", "Pig", "Rat", "Turkey", "Rabbit", "Elephant", "Sheep",  "Fish", "Deer", "Goose", "Ox", "Bird", "Snake", "Bear"
        ];

        foreach ($ans_G795 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 795, 'a_content' => $key, 'a_image' => $l5_G795_G796_image . "1/" . str_replace(' ', '-', $key)  . ".png",
                    'a_audio' => $AudioDomain . $G4_L5_listen_n_repeat . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }

        $ansL5_G796 = [
            ["duck", "ducks"],
            ["dog", "dogs"],
            ["horse", "horses"],
            ["goat", "goats"],
            ["cat", "cats"],
            ["cock", "cocks"],
            ["pig", "pigs"],
            ["rat", "rats"],
            ["turkey", "turkeys"],
            ["cow", "cows"],
            ["rabbit", "rabbits"],
            ["elephant", "elephants"],
            ["bird", "birds"],
            ["bear", "bears"],
            ["snake", "snakes"],
            ["ox", "oxen"],
            ["sheep", "sheep2"],
            ["goose", "geese"],
            ["fish", "fish2"],
            ["deer", "deer2"],
        ];

        for ($i = 0; $i < count($ansL5_G796); $i++) {
            for ($j = 0; $j < count($ansL5_G796[$i]); $j++) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 796,
                        'a_content' => $ansL5_G796[$i][$j],
                        'a_image' => $l5_G795_G796_image . "2/" .  $ansL5_G796[$i][$j] . ".png",
                        'a_audio' => $AudioDomain . $G4_L5_listen_n_repeat . strtolower($ansL5_G796[$i][$j]) . ".mp3",
                        'q_content' => $i,
                    ],
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 5 Game 797 ( Spelling Practice )
        ////////////////////////////////////////////////////////

        $G4_L5_spelling_game = "Grade_4/" . "Lesson_5/" . "spelling_game/";
        $l5_G797_image = $domain . "/storage/images/Grade_4/lesson_5/spelling_game/";


        $q_G797 = [

            ["G", "T", "O", "A"],
            ["T", "R", "A"],
            ["S", "R", "O", "H", "E"],
            ["T", "C", "A"],
            ["S", "G", "O", "E", "O"],
            ["A", "B", "I", "T", "R", "B"],
            ["K", "U", "D", "C"],
            ["C", "W", "O"],
            ["D", "G", "O"],
            ["E", "H", "P", "S", "E"],
            ["F", "I", "H", "S"],
            ["R", "E", "E", "D"],
            ["X", "O"],
            ["I", "R", "B", "D"],
            ["K", "E", "N", "S", "A"],
            ["A", "B", "E", "R"],
            ["H", "E", "T", "N", "L", "E", "P", "A"],
            ["E", "R", "K", "T", "U", "Y"],
            ["G", "P", "I"],
            ["C", "K", "O", "C"],

        ];

        $a_G797 = [
            "GOAT", "RAT", "HORSE", "CAT", "GOOSE", "RABBIT", "DUCK", "COW", "DOG", "SHEEP",
            "FISH", "DEER", "OX", "BIRD", "SNAKE", "BEAR", "ELEPHANT", "TURKEY", "PIG", "COCK"
        ];

        $G797_Index = 0;

        for ($i = 0; $i < count($q_G797); $i++) {
            foreach ($q_G797[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 797, 'q_content' => $j, 'q_audio' => $AudioDomain . $G4_L5_spelling_game . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 797,
                    'q_image' => $l5_G797_image . str_replace(' ', '', strtolower($a_G797[$G797_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G4_L5_spelling_game . strtolower($a_G797[$G797_Index]) . ".mp3",
                    'a_content' => $a_G797[$G797_Index],
                ],
            ]);
            $G797_Index++;
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 5 Game 798 , 799  (  Practice  )
        ////////////////////////////////////////////////////////

        $l5_G798_G799_image = $domain . "/storage/images/Grade_4/lesson_5/practice/";
        $G4_L5_practice_path = "Grade_4/" . "Lesson_5/" . "practice/";



        // Game 798
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "pig.png", "q_content" => "Pig", "a_content" => 1],
            ['round' => 1, 'game_id' => 798, 'q_image' => null, "q_content" => "Rat", "a_content" => 0],
            ['round' => 1, 'game_id' => 798, 'q_image' => null, "q_content" => "Bear", "a_content" => 0],

            ['round' => 2, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "fish.png", "q_content" => "Has", "a_content" => 1],
            ['round' => 2, 'game_id' => 798, 'q_image' => null, "q_content" => "Snake", "a_content" => 0],
            ['round' => 2, 'game_id' => 798, 'q_image' => null, "q_content" => "Sheep", "a_content" => 0],

            ['round' => 3, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "goat.png", "q_content" => "Horse", "a_content" => 0],
            ['round' => 3, 'game_id' => 798, 'q_image' => null, "q_content" => "Goat", "a_content" => 1],
            ['round' => 3, 'game_id' => 798, 'q_image' => null, "q_content" => "Elephant", "a_content" => 0],

            ['round' => 4, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "turkey.png", "q_content" => "Turkey", "a_content" => 1],
            ['round' => 4, 'game_id' => 798, 'q_image' => null, "q_content" => "Ox", "a_content" => 0],
            ['round' => 4, 'game_id' => 798, 'q_image' => null, "q_content" => "Deer", "a_content" => 0],

            ['round' => 5, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "deer.png", "q_content" => "Turkey", "a_content" => 0],
            ['round' => 5, 'game_id' => 798, 'q_image' => null, "q_content" => "Ox", "a_content" => 0],
            ['round' => 5, 'game_id' => 798, 'q_image' => null, "q_content" => "Deer", "a_content" => 1],

            ['round' => 6, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "rabbit.png", "q_content" => "Rabbit", "a_content" => 1],
            ['round' => 6, 'game_id' => 798, 'q_image' => null, "q_content" => "Bear", "a_content" => 0],
            ['round' => 6, 'game_id' => 798, 'q_image' => null, "q_content" => "Sheep", "a_content" => 0],

            ['round' => 7, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "goose.png", "q_content" => "Goose", "a_content" => 1],
            ['round' => 7, 'game_id' => 798, 'q_image' => null, "q_content" => "Goat", "a_content" => 0],
            ['round' => 7, 'game_id' => 798, 'q_image' => null, "q_content" => "Rabbit", "a_content" => 0],

            ['round' => 8, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "deer.png", "q_content" => "Deer", "a_content" => 1],
            ['round' => 8, 'game_id' => 798, 'q_image' => null, "q_content" => "Horse", "a_content" => 0],
            ['round' => 8, 'game_id' => 798, 'q_image' => null, "q_content" => "Sheep", "a_content" => 0],

            ['round' => 9, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "rat.png", "q_content" => "Rat", "a_content" => 1],
            ['round' => 9, 'game_id' => 798, 'q_image' => null, "q_content" => "Rabbit", "a_content" => 0],
            ['round' => 9, 'game_id' => 798, 'q_image' => null, "q_content" => "Ox", "a_content" => 0],

            ['round' => 10, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "ox.png", "q_content" => "Ox", "a_content" => 1],
            ['round' => 10, 'game_id' => 798, 'q_image' => null, "q_content" => "Elephant", "a_content" => 0],
            ['round' => 10, 'game_id' => 798, 'q_image' => null, "q_content" => "Bear", "a_content" => 0],

            ['round' => 11, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "bear.png", "q_content" => "Ox", "a_content" => 0],
            ['round' => 11, 'game_id' => 798, 'q_image' => null, "q_content" => "Elephant", "a_content" => 0],
            ['round' => 11, 'game_id' => 798, 'q_image' => null, "q_content" => "Bear", "a_content" => 1],

            ['round' => 12, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "elephant.png", "q_content" => "Bear", "a_content" => 0],
            ['round' => 12, 'game_id' => 798, 'q_image' => null, "q_content" => "Sheep", "a_content" => 0],
            ['round' => 12, 'game_id' => 798, 'q_image' => null, "q_content" => "Elephant", "a_content" => 1],

            ['round' => 13, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "snake.png", "q_content" => "Bear", "a_content" => 0],
            ['round' => 13, 'game_id' => 798, 'q_image' => null, "q_content" => "Sheep", "a_content" => 0],
            ['round' => 13, 'game_id' => 798, 'q_image' => null, "q_content" => "Snake", "a_content" => 1],

            ['round' => 14, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "duck.png", "q_content" => "Cat", "a_content" => 0],
            ['round' => 14, 'game_id' => 798, 'q_image' => null, "q_content" => "Dog", "a_content" => 0],
            ['round' => 14, 'game_id' => 798, 'q_image' => null, "q_content" => "Duck", "a_content" => 1],

            ['round' => 15, 'game_id' => 798, 'q_image' => $l5_G798_G799_image . "1/" . "cow.png", "q_content" => "Cat", "a_content" => 0],
            ['round' => 15, 'game_id' => 798, 'q_image' => null, "q_content" => "Cock", "a_content" => 0],
            ['round' => 15, 'game_id' => 798, 'q_image' => null, "q_content" => "Cow", "a_content" => 1],

        ]);

        // Game 798
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 799, 'q_image' => $l5_G798_G799_image . "2/" . "fish.png", "q_conver" => "____ many fish.", "q_content" => "There is", "a_content" => 0],
            ['round' => 1, 'game_id' => 799, 'q_image' => null, "q_conver" => null, "q_content" => "There are", "a_content" => 1],

            ['round' => 2, 'game_id' => 799, 'q_image' => $l5_G798_G799_image . "2/" . "dogs.png", "q_conver" => "____ dogs.", "q_content" => "There is", "a_content" => 0],
            ['round' => 2, 'game_id' => 799, 'q_image' => null, "q_conver" => null, "q_content" => "There are", "a_content" => 1],

            ['round' => 3, 'game_id' => 799, 'q_image' => $l5_G798_G799_image . "2/" . "ducks.png", "q_conver" => "____ ducks.", "q_content" => "There is", "a_content" => 0],
            ['round' => 3, 'game_id' => 799, 'q_image' => null, "q_conver" => null, "q_content" => "There are", "a_content" => 1],

            ['round' => 4, 'game_id' => 799, 'q_image' => $l5_G798_G799_image . "2/" . "turkey.png", "q_conver" => "____ a turkey.", "q_content" => "There is", "a_content" => 1],
            ['round' => 4, 'game_id' => 799, 'q_image' => null, "q_conver" => null, "q_content" => "There are", "a_content" => 0],

            ['round' => 5, 'game_id' => 799, 'q_image' => $l5_G798_G799_image . "2/" . "pig.png", "q_conver" => "____ a pig.", "q_content" => "There is", "a_content" => 1],
            ['round' => 5, 'game_id' => 799, 'q_image' => null, "q_conver" => null, "q_content" => "There are", "a_content" => 0],

            ['round' => 6, 'game_id' => 799, 'q_image' => $l5_G798_G799_image . "2/" . "snake.png", "q_conver" => "____ a snake.", "q_content" => "There is", "a_content" => 1],
            ['round' => 6, 'game_id' => 799, 'q_image' => null, "q_conver" => null, "q_content" => "There are", "a_content" => 0],

            ['round' => 7, 'game_id' => 799, 'q_image' => $l5_G798_G799_image . "2/" . "birds.png", "q_conver" => "____ birds.", "q_content" => "There is", "a_content" => 0],
            ['round' => 7, 'game_id' => 799, 'q_image' => null, "q_conver" => null, "q_content" => "There are", "a_content" => 1],

            ['round' => 8, 'game_id' => 799, 'q_image' => $l5_G798_G799_image . "2/" . "elephant.png", "q_conver" => "____ an elephant.", "q_content" => "There is", "a_content" => 1],
            ['round' => 8, 'game_id' => 799, 'q_image' => null, "q_conver" => null, "q_content" => "There are", "a_content" => 0],

            ['round' => 9, 'game_id' => 799, 'q_image' => $l5_G798_G799_image . "2/" . "dog.png", "q_conver" => "____ a dog.", "q_content" => "There is", "a_content" => 1],
            ['round' => 9, 'game_id' => 799, 'q_image' => null, "q_conver" => null, "q_content" => "There are", "a_content" => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 5 Game 800 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L5_practice_speaking = "Grade_4/" . "Lesson_5/" . "practice_speaking/";
        $l5_G800image = $domain . "/storage/images/Grade_4/lesson_5/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 800, "q_audio" => $AudioDomain . $G4_L5_practice_speaking . ".mp3", 'q_image' => $l5_G800image . "cat.png", "q_content" => "How many cats are are there?", "round_instruction" => $AudioDomain . $G4_L5_practice_speaking . "SubBlock_How-many-cats-are-there" . ".mp3"],
            ['round' => 2, 'game_id' => 800, "q_audio" => $AudioDomain . $G4_L5_practice_speaking . ".mp3", 'q_image' => $l5_G800image . "bear.png", "q_content" => "How many bears are are there?", "round_instruction" => $AudioDomain . $G4_L5_practice_speaking . "SubBlock_How-many-bears-are-there" . ".mp3"],
            ['round' => 3, 'game_id' => 800, "q_audio" => $AudioDomain . $G4_L5_practice_speaking . ".mp3", 'q_image' => $l5_G800image . "sheep2.png", "q_content" => "How many sheep are are there?", "round_instruction" => $AudioDomain . $G4_L5_practice_speaking . "SubBlock_How-many-sheep-are-there" . ".mp3"],
            ['round' => 4, 'game_id' => 800, "q_audio" => $AudioDomain . $G4_L5_practice_speaking . ".mp3", 'q_image' => $l5_G800image . "dog.png", "q_content" => "How many dogs are are there?", "round_instruction" => $AudioDomain . $G4_L5_practice_speaking . "SubBlock_How-many-dogs-are-there" . ".mp3"],
            ['round' => 5, 'game_id' => 800, "q_audio" => $AudioDomain . $G4_L5_practice_speaking . ".mp3", 'q_image' => $l5_G800image . "goose.png", "q_content" => "How many geese are are there?", "round_instruction" => $AudioDomain . $G4_L5_practice_speaking . "SubBlock_How-many-geese-are-there" . ".mp3"],
            ['round' => 6, 'game_id' => 800, "q_audio" => $AudioDomain . $G4_L5_practice_speaking . ".mp3", 'q_image' => $l5_G800image . "horse.png", "q_content" => "How many horses are are there?", "round_instruction" => $AudioDomain . $G4_L5_practice_speaking . "SubBlock_How-many-horses-are-there" . ".mp3"],
            ['round' => 7, 'game_id' => 800, "q_audio" => $AudioDomain . $G4_L5_practice_speaking . ".mp3", 'q_image' => $l5_G800image . "rabbit.png", "q_content" => "How many rabbit are are there?", "round_instruction" => $AudioDomain . $G4_L5_practice_speaking . "SubBlock_How-many-rabbits-are-there" . ".mp3"],
            ['round' => 8, 'game_id' => 800, "q_audio" => $AudioDomain . $G4_L5_practice_speaking . ".mp3", 'q_image' => $l5_G800image . "elephant.png", "q_content" => "How many elephants are are there?", "round_instruction" => $AudioDomain . $G4_L5_practice_speaking . "how-many-elephants-are-there" . ".mp3"],
            ['round' => 9, 'game_id' => 800, "q_audio" => $AudioDomain . $G4_L5_practice_speaking . ".mp3", 'q_image' => $l5_G800image . "sheep.png", "q_content" => "How many sheep are are there?", "round_instruction" => $AudioDomain . $G4_L5_practice_speaking . "SubBlock_How-many-sheep-are-there" . ".mp3"],
            ['round' => 10, 'game_id' => 800, "q_audio" => $AudioDomain . $G4_L5_practice_speaking . ".mp3", 'q_image' => $l5_G800image . "goat.png", "q_content" => "How many goats are are there?", "round_instruction" => $AudioDomain . $G4_L5_practice_speaking . "SubBlock_How-many-goats-are-there" . ".mp3"],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 5 Game 801 (  Listening  )
        ////////////////////////////////////////////////////////

        $l5G801image = $domain . "/storage/images/Grade_4/lesson_5/listern_n_practice/";
        $G4_L5_G801_listen_n_practice_path = "Grade_4/" . "Lesson_5/" . "listern_n_practice/";

        DB::table('ans_n_ques')->insert([

            ["round" => 1, "game_id" => 801, "q_image" => $l5G801image . "cock.png", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "game_id" => 801, "q_image" => $l5G801image . "dog.png", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "game_id" => 801, "q_image" => $l5G801image . "duck.png", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "game_id" => 801, "q_image" => $l5G801image . "cow.png", "q_audio" => null, "a_content" => 1],
            ["round" => 1, "game_id" => 801, "q_image" =>  null, "q_audio" => $AudioDomain . $G4_L5_G801_listen_n_practice_path . "cow" . ".mp3", "a_content" => null],

            ["round" => 2, "game_id" => 801, "q_image" => $l5G801image . "horse.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "game_id" => 801, "q_image" => $l5G801image . "cat.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "game_id" => 801, "q_image" => $l5G801image . "goat.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "game_id" => 801, "q_image" => $l5G801image . "rabbit.png", "q_audio" => null, "a_content" => 1],
            ["round" => 2, "game_id" => 801, "q_image" =>  null, "q_audio" => $AudioDomain . $G4_L5_G801_listen_n_practice_path . "rabbit" . ".mp3", "a_content" => null],

            ["round" => 3, "game_id" => 801, "q_image" => $l5G801image . "sheep.png", "q_audio" => null, "a_content" => 1],
            ["round" => 3, "game_id" => 801, "q_image" => $l5G801image . "duck.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "game_id" => 801, "q_image" => $l5G801image . "cock.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "game_id" => 801, "q_image" => $l5G801image . "dog.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "game_id" => 801, "q_image" =>  null, "q_audio" => $AudioDomain . $G4_L5_G801_listen_n_practice_path . "sheep" . ".mp3", "a_content" => null],

            ["round" => 4, "game_id" => 801, "q_image" => $l5G801image . "horse.png", "q_audio" => null, "a_content" => 0],
            ["round" => 4, "game_id" => 801, "q_image" => $l5G801image . "cow.png", "q_audio" => null, "a_content" => 0],
            ["round" => 4, "game_id" => 801, "q_image" => $l5G801image . "goat.png", "q_audio" => null, "a_content" => 1],
            ["round" => 4, "game_id" => 801, "q_image" => $l5G801image . "cat.png", "q_audio" => null, "a_content" => 0],
            ["round" => 4, "game_id" => 801, "q_image" =>  null, "q_audio" => $AudioDomain . $G4_L5_G801_listen_n_practice_path . "goat" . ".mp3", "a_content" => null],

            ["round" => 5, "game_id" => 801, "q_image" => $l5G801image . "cow.png", "q_audio" => null, "a_content" => 0],
            ["round" => 5, "game_id" => 801, "q_image" => $l5G801image . "cock.png", "q_audio" => null, "a_content" => 0],
            ["round" => 5, "game_id" => 801, "q_image" => $l5G801image . "sheep.png", "q_audio" => null, "a_content" => 0],
            ["round" => 5, "game_id" => 801, "q_image" => $l5G801image . "horse.png", "q_audio" => null, "a_content" => 1],
            ["round" => 5, "game_id" => 801, "q_image" =>  null, "q_audio" => $AudioDomain . $G4_L5_G801_listen_n_practice_path . "horse" . ".mp3", "a_content" => null],

            ["round" => 6, "game_id" => 801, "q_image" => $l5G801image . "cat.png", "q_audio" => null, "a_content" => 1],
            ["round" => 6, "game_id" => 801, "q_image" => $l5G801image . "dog.png", "q_audio" => null, "a_content" => 0],
            ["round" => 6, "game_id" => 801, "q_image" => $l5G801image . "rabbit.png", "q_audio" => null, "a_content" => 0],
            ["round" => 6, "game_id" => 801, "q_image" => $l5G801image . "goat.png", "q_audio" => null, "a_content" => 0],
            ["round" => 6, "game_id" => 801, "q_image" =>  null, "q_audio" => $AudioDomain . $G4_L5_G801_listen_n_practice_path . "cat" . ".mp3", "a_content" => null],

            ["round" => 7, "game_id" => 801, "q_image" => $l5G801image . "duck.png", "q_audio" => null, "a_content" => 1],
            ["round" => 7, "game_id" => 801, "q_image" => $l5G801image . "sheep.png", "q_audio" => null, "a_content" => 0],
            ["round" => 7, "game_id" => 801, "q_image" => $l5G801image . "cow.png", "q_audio" => null, "a_content" => 0],
            ["round" => 7, "game_id" => 801, "q_image" => $l5G801image . "horse.png", "q_audio" => null, "a_content" => 0],
            ["round" => 7, "game_id" => 801, "q_image" =>  null, "q_audio" => $AudioDomain . $G4_L5_G801_listen_n_practice_path . "duck" . ".mp3", "a_content" => null],

            ["round" => 8, "game_id" => 801, "q_image" => $l5G801image . "dog.png", "q_audio" => null, "a_content" => 1],
            ["round" => 8, "game_id" => 801, "q_image" => $l5G801image . "rabbit.png", "q_audio" => null, "a_content" => 0],
            ["round" => 8, "game_id" => 801, "q_image" => $l5G801image . "horse.png", "q_audio" => null, "a_content" => 0],
            ["round" => 8, "game_id" => 801, "q_image" => $l5G801image . "duck.png", "q_audio" => null, "a_content" => 0],
            ["round" => 8, "game_id" => 801, "q_image" =>  null, "q_audio" => $AudioDomain . $G4_L5_G801_listen_n_practice_path . "dog" . ".mp3", "a_content" => null],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 5 Game 802 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L5_speaking_topic = "Grade_4/" . "Lesson_5/" . "speaking_topic/";
        $l5_G802image = $domain . "/storage/images/Grade_4/lesson_5/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 802, "q_audio" => $AudioDomain . $G4_L5_speaking_topic . ".mp3", 'q_image' => $l5_G802image . "1.png", "q_content" => "Describe the picture of a farm.\nWhich animals do you see?\nHow many animals are there?", "round_instruction" => $AudioDomain . $G4_L5_speaking_topic . "SubBlock_Describe-the-picture-of-a-farm" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 5 Game 803 (  Writing Topic )
        //////////////////////////////////////////////////////////////

        $l5_G803image = $domain . "/storage/images/Grade_4/lesson_5/writing_topic/";
        $G5_L5_Game803_ans = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu";

        DB::table('ans_n_ques')->insert([
            ["round" => 1, 'game_id' => 803, 'q_content' => $l5_G803image . "farm.png", 'a_content' => $G5_L5_Game803_ans],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 10 Game 835 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 835, 'a_content' => 'lesson_10_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 835, 'a_content' => 'lesson_10_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 10 Game 836 ( Listen and Repeat )
        ////////////////////////////////////////////////////////

        $G4_L10_listen_and_repeat_path = "Grade_4/" . "Lesson_10/" . "listen_and_repeat/";
        $l10G836Image = $domain . "/storage/images/Grade_4/lesson_10/listen_and_repeat/";


        $conver_audio_G836 = [
            ["what-sun", "sun-text"],
            ["what-mon", "mon-text"],
            ["what-tue", "tue-text"],
            ["what-wed", "wed-text"],
            ["what-thur", "thur-text"],
            ["what-fri", "fri-text"],
            ["what-sat", "sat-text"],
        ];

        $imageG836 = [
            ["mike", "mary"],
            ["mike", "mary"],
            ["mike", "mary"],
            ["mike", "mary"],
            ["mike", "mary"],
            ["mike", "mary"],
            ["mike", "mary"],
        ];

        $bg_G836 = [
            "sun-bg", "mon-bg", "tue-bg", "wed-bg", "thur-bg", "fri-bg", "sat-bg"
        ];

        for ($i = 0; $i < count($conver_audio_G836); $i++) {

            for ($j = 0; $j < count($conver_audio_G836[$i]); $j++) {

                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 836, 'a_image' => $l10G836Image . $imageG836[$i][$j] . ".gif", 'a_conver' => $l10G836Image . $conver_audio_G836[$i][$j] . ".png", 'a_audio' => $AudioDomain . $G4_L10_listen_and_repeat_path . $conver_audio_G836[$i][$j] . ".mp3", "background" => $l10G836Image . $bg_G836[$j] . ".png"],
                ]);
            }
        }
    }
}
