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
            ['round' => 1, 'game_id' => 765,  'q_image' => $l1_G765image . "girl.png", "q_content" => null, "round_instruction" => $AudioDomain . $G4_L1_practice_speaking . "Describe-the-pictures" . ".mp3"],
            ['round' => 2, 'game_id' => 765,  'q_image' => $l1_G765image . "boy.png", "q_content" => null, "round_instruction" =>  $AudioDomain . $G4_L1_practice_speaking . "Describe-the-pictures" . ".mp3"],
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
        ////    Grade 4  Lesson 3 Game 779 ( Spelling Game )
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
        $G4_L5_Game803_ans = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 803, 'q_content' => $l5_G803image . "farm.png", 'a_content' => $G4_L5_Game803_ans],
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



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 10 Game 837 , 838  (  Practice  )
        ////////////////////////////////////////////////////////

        $l10_G837_G838_image = $domain . "/storage/images/Grade_4/lesson_10/practice/";
        $G4_L10_practice_path = "Grade_4/" . "Lesson_10/" . "practice/";

        // Game 837
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 837, 'q_image' => $l10_G837_G838_image . "1/" . "sun.png", "q_conver" => "On Sunday, it will be windy.", "q_content" => "True", "a_content" => 1],
            ['round' => 1, 'game_id' => 837, 'q_image' => null, "q_conver" => null, "q_content" => "False", "a_content" => 0],

            ['round' => 2, 'game_id' => 837, 'q_image' => $l10_G837_G838_image . "1/" . "mon.png", "q_conver" => "On Monday, it will be rainy.", "q_content" => "True", "a_content" => 0],
            ['round' => 2, 'game_id' => 837, 'q_image' => null, "q_conver" => null, "q_content" => "False", "a_content" => 1],

            ['round' => 3, 'game_id' => 837, 'q_image' => $l10_G837_G838_image . "1/" . "tue.png", "q_conver" => "On Tuesday, it will be thunder.", "q_content" => "True", "a_content" => 1],
            ['round' => 3, 'game_id' => 837, 'q_image' => null, "q_conver" => null, "q_content" => "False", "a_content" => 0],

            ['round' => 4, 'game_id' => 837, 'q_image' => $l10_G837_G838_image . "1/" . "wed.png", "q_conver" => "On Wednesday, it will be snowy.", "q_content" => "True", "a_content" => 0],
            ['round' => 4, 'game_id' => 837, 'q_image' => null, "q_conver" => null, "q_content" => "False", "a_content" => 1],

            ['round' => 5, 'game_id' => 837, 'q_image' => $l10_G837_G838_image . "1/" . "thur.png", "q_conver" => "On Thursday, it will be foggy.", "q_content" => "True", "a_content" => 0],
            ['round' => 5, 'game_id' => 837, 'q_image' => null, "q_conver" => null, "q_content" => "False", "a_content" => 1],

            ['round' => 6, 'game_id' => 837, 'q_image' => $l10_G837_G838_image . "1/" . "fri.png", "q_conver" => "On Friday, it will be rainy.", "q_content" => "True", "a_content" => 1],
            ['round' => 6, 'game_id' => 837, 'q_image' => null, "q_conver" => null, "q_content" => "False", "a_content" => 0],

            ['round' => 7, 'game_id' => 837, 'q_image' => $l10_G837_G838_image . "1/" . "sat.png", "q_conver" => "On Saturday, it will be cold.", "q_content" => "True", "a_content" => 0],
            ['round' => 7, 'game_id' => 837, 'q_image' => null, "q_conver" => null, "q_content" => "False", "a_content" => 1],

        ]);

        // Game 838
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 838, 'q_image' => $l10_G837_G838_image . "2/" . "cloudy.png", "q_conver" => "Is it cloudy?", "q_content" => "Yes, It is.", "a_content" => 1],
            ['round' => 1, 'game_id' => 838, 'q_image' => null, "q_conver" => null, "q_content" => "No, It isn't.", "a_content" => 0],

            ['round' => 2, 'game_id' => 838, 'q_image' => $l10_G837_G838_image . "2/" . "snowy.png", "q_conver" => "Is it sunny?", "q_content" => "Yes, It is.", "a_content" => 0],
            ['round' => 2, 'game_id' => 838, 'q_image' => null, "q_conver" => null, "q_content" => "No, It isn't.", "a_content" => 1],

            ['round' => 3, 'game_id' => 838, 'q_image' => $l10_G837_G838_image . "2/" . "windy.png", "q_conver" => "Is it rainy?", "q_content" => "Yes, It is.", "a_content" => 0],
            ['round' => 3, 'game_id' => 838, 'q_image' => null, "q_conver" => null, "q_content" => "No, It isn't.", "a_content" => 1],

            ['round' => 4, 'game_id' => 838, 'q_image' => $l10_G837_G838_image . "2/" . "hot.png", "q_conver" => "Is it hot?", "q_content" => "Yes, It is.", "a_content" => 1],
            ['round' => 4, 'game_id' => 838, 'q_image' => null, "q_conver" => null, "q_content" => "No, It isn't.", "a_content" => 0],

            ['round' => 5, 'game_id' => 838, 'q_image' => $l10_G837_G838_image . "2/" . "rainy.png", "q_conver" => "Is it cloudy?", "q_content" => "Yes, It is.", "a_content" => 0],
            ['round' => 5, 'game_id' => 838, 'q_image' => null, "q_conver" => null, "q_content" => "No, It isn't.", "a_content" => 1],

            ['round' => 6, 'game_id' => 838, 'q_image' => $l10_G837_G838_image . "2/" . "sunny.png", "q_conver" => "Is it sunny?", "q_content" => "Yes, It is.", "a_content" => 1],
            ['round' => 6, 'game_id' => 838, 'q_image' => null, "q_conver" => null, "q_content" => "No, It isn't.", "a_content" => 0],

            ['round' => 7, 'game_id' => 838, 'q_image' => $l10_G837_G838_image . "2/" . "cold.png", "q_conver" => "Is it cold?", "q_content" => "Yes, It is.", "a_content" => 1],
            ['round' => 7, 'game_id' => 838, 'q_image' => null, "q_conver" => null, "q_content" => "No, It isn't.", "a_content" => 0],

            ['round' => 8, 'game_id' => 838, 'q_image' => $l10_G837_G838_image . "2/" . "stormy.png", "q_conver" => "Is it stormy?", "q_content" => "Yes, It is.", "a_content" => 1],
            ['round' => 8, 'game_id' => 838, 'q_image' => null, "q_conver" => null, "q_content" => "No, It isn't.", "a_content" => 0],

            ['round' => 9, 'game_id' => 838, 'q_image' => $l10_G837_G838_image . "2/" . "foggy.png", "q_conver" => "Is it rainy?", "q_content" => "Yes, It is.", "a_content" => 0],
            ['round' => 9, 'game_id' => 838, 'q_image' => null, "q_conver" => null, "q_content" => "No, It isn't.", "a_content" => 1],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 10 Game 839 (  Speaking Practice  )
        //////////////////////////////////////////////////////////////

        $G4_L10_speaking_practice = "Grade_4/" . "Lesson_10/" . "speaking_practice/";
        $l10_G829image = $domain . "/storage/images/Grade_4/lesson_10/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 839, "q_audio" => $AudioDomain . $G4_L10_speaking_practice . ".mp3", 'q_image' => $l10_G829image . "mon.png", "q_content" => "Talk about the weather \nforecast for a week.", "round_instruction" => $AudioDomain . $G4_L10_speaking_practice . "SubBlock_Talk-about-the-weather-forecas" . ".mp3"],
            ['round' => 2, 'game_id' => 839, "q_audio" => $AudioDomain . $G4_L10_speaking_practice . ".mp3", 'q_image' => $l10_G829image . "tue.png", "q_content" => "Talk about the weather \nforecast for a week.", "round_instruction" => $AudioDomain . $G4_L10_speaking_practice . "SubBlock_Talk-about-the-weather-forecas" . ".mp3"],
            ['round' => 3, 'game_id' => 839, "q_audio" => $AudioDomain . $G4_L10_speaking_practice . ".mp3", 'q_image' => $l10_G829image . "wed.png", "q_content" => "Talk about the weather \nforecast for a week.", "round_instruction" => $AudioDomain . $G4_L10_speaking_practice . "SubBlock_Talk-about-the-weather-forecas" . ".mp3"],
            ['round' => 4, 'game_id' => 839, "q_audio" => $AudioDomain . $G4_L10_speaking_practice . ".mp3", 'q_image' => $l10_G829image . "thur.png", "q_content" => "Talk about the weather \nforecast for a week.", "round_instruction" => $AudioDomain . $G4_L10_speaking_practice . "SubBlock_Talk-about-the-weather-forecas" . ".mp3"],
            ['round' => 5, 'game_id' => 839, "q_audio" => $AudioDomain . $G4_L10_speaking_practice . ".mp3", 'q_image' => $l10_G829image . "fri.png", "q_content" => "Talk about the weather \nforecast for a week.", "round_instruction" => $AudioDomain . $G4_L10_speaking_practice . "SubBlock_Talk-about-the-weather-forecas" . ".mp3"],
            ['round' => 6, 'game_id' => 839, "q_audio" => $AudioDomain . $G4_L10_speaking_practice . ".mp3", 'q_image' => $l10_G829image . "sat.png", "q_content" => "Talk about the weather \nforecast for a week.", "round_instruction" => $AudioDomain . $G4_L10_speaking_practice . "SubBlock_Talk-about-the-weather-forecas" . ".mp3"],
            ['round' => 7, 'game_id' => 839, "q_audio" => $AudioDomain . $G4_L10_speaking_practice . ".mp3", 'q_image' => $l10_G829image . "sun.png", "q_content" => "Talk about the weather \nforecast for a week.", "round_instruction" => $AudioDomain . $G4_L10_speaking_practice . "SubBlock_Talk-about-the-weather-forecas" . ".mp3"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 10 Game 840 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l10_G840_image = $domain . "/storage/images/Grade_4/lesson_10/listen_n_practice/";
        $G4_L10_listen_n_practice = "Grade_4/" . "Lesson_10/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 840,  'q_audio' =>  $AudioDomain . $G4_L10_listen_n_practice . "Welcome-to-the-weather-forecas" . ".mp3", "q_content" => "Cloudy", "q_conver" => "In Japan, it is cold and ____.", "a_content" => 0],
            ['round' => 1, 'game_id' => 840,  'q_audio' =>  null, "q_content" => "Snowy", "q_conver" => null, "a_content" => 0],
            ['round' => 1, 'game_id' => 840,  'q_audio' =>  null, "q_content" => "Windy", "q_conver" => null, "a_content" => 1],

            ['round' => 2, 'game_id' => 840,  'q_audio' =>  $AudioDomain . $G4_L10_listen_n_practice . "Welcome-to-the-weather-forecas" . ".mp3", "q_content" => "Hot", "q_conver" => "In Singapore, it is ____ the whole day.", "a_content" => 0],
            ['round' => 2, 'game_id' => 840,  'q_audio' =>  null, "q_content" => "Cloudy", "q_conver" => null, "a_content" => 0],
            ['round' => 2, 'game_id' => 840,  'q_audio' =>  null, "q_content" => "Rainy", "q_conver" => null, "a_content" => 1],

            ['round' => 3, 'game_id' => 840,  'q_audio' =>  $AudioDomain . $G4_L10_listen_n_practice . "Welcome-to-the-weather-forecas" . ".mp3", "q_content" => "Windy", "q_conver" => "In Thailand, it is hot and ____.", "a_content" => 0],
            ['round' => 3, 'game_id' => 840,  'q_audio' =>  null, "q_content" => "Cloudy", "q_conver" => null, "a_content" => 0],
            ['round' => 3, 'game_id' => 840,  'q_audio' =>  null, "q_content" => "Sunny", "q_conver" => null, "a_content" => 1],

            ['round' => 4, 'game_id' => 840,  'q_audio' =>  $AudioDomain . $G4_L10_listen_n_practice . "Welcome-to-the-weather-forecas" . ".mp3", "q_content" => "Singapore", "q_conver" => "It does not rain in ____ today.", "a_content" => 0],
            ['round' => 4, 'game_id' => 840,  'q_audio' =>  null, "q_content" => "Egypt", "q_conver" => null, "a_content" => 0],
            ['round' => 4, 'game_id' => 840,  'q_audio' =>  null, "q_content" => "Thailand", "q_conver" => null, "a_content" => 1],

            ['round' => 5, 'game_id' => 840,  'q_audio' =>  $AudioDomain . $G4_L10_listen_n_practice . "Welcome-to-the-weather-forecas" . ".mp3", "q_content" => "Cloudy", "q_conver" => "In Myanmar, it is ____ and sunny.", "a_content" => 1],
            ['round' => 5, 'game_id' => 840,  'q_audio' =>  null, "q_content" => "Sunny", "q_conver" => null, "a_content" => 0],
            ['round' => 5, 'game_id' => 840,  'q_audio' =>  null, "q_content" => "Windy", "q_conver" => null, "a_content" => 0],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 10 Game 841 (  Practice  )
        ////////////////////////////////////////////////////////

        $l10_G841_image = $domain . "/storage/images/Grade_4/lesson_10/reading_passage/";
        $G4_L10_reading_passage_path = "Grade_4/" . "Lesson_10/" . "reading_passage/";

        $l10_G841_q_audio = [
            "audio",
            "audio",
            "audio",
            "audio",
            "audio",
            "audio"
        ];
        $l10_G841_q_conver = [
            "In the early morning, it will be windy.",
            "At 9 in the morning, you should take an umbrella.",
            "At 9 in the morning, it will not be sunny.",
            "In the afternoon, it will be sunny and hot.",
            "At 7 in the evening, you should fly a kite.",
            "At 7 in the evening, it will be stormy and snowy.",
        ];
        $l10_G841_q_audio_ans = [
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"]
        ];
        $l10_G841_q_audio_a_content = [
            [0, 1],
            [1, 0],
            [0, 1],
            [1, 0],
            [1, 0],
            [0, 1],
        ];


        for ($i = 0; $i < count($l10_G841_q_audio); $i++) {

            foreach ($l10_G841_q_audio_ans[$i] as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 841, "q_audio" => $AudioDomain . $G4_L10_reading_passage_path . str_replace(' ', '-', strtolower($val)) . ".mp3", 'q_content' => $val, "q_conver" => null, 'a_content' => $l10_G841_q_audio_a_content[$i][$key], "background" => null],
                ]);
            }

            foreach ($l10_G841_q_audio as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 841, "q_audio" => $AudioDomain . $G4_L10_reading_passage_path . $val . ".mp3", "q_conver" => $l10_G841_q_conver[$key], 'q_content' => null, 'a_content' => null, "background" => null],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 841, "q_audio" => $AudioDomain . $G4_L10_reading_passage_path . "audio" . ".mp3", "q_conver" => "Good morning! It is six o'clock in the morning. Here is the weather news. It is very cold outside. Wear warm clothes and jackets. \nHere is the weather at 9 o'clock. It's raining now. Don't forget your umbrellas and your raincoats. Don't get wet! \nIt's 2 o'clock in the afternoon. The weather is now sunny and hot. Don't forget your sun hats and sunglasses. Have a nice afternoon in the sun.\nIt's 7 o'clock and here is the weather. It's very windy outside now. It's a good time to fly a kite. But, don't let your hats fly away!",
                    'a_content' => null, "background" => $l10_G841_image . "bg.jpg"
                ],
            ]);
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 10 Game 842 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L1_practice_speaking = "Grade_4/" . "Lesson_1/" . "speaking_topic/";
        $l1_G842image = $domain . "/storage/images/Grade_4/lesson_1/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 842,  'q_image' => $l1_G842image . "1.png", "a_content" => "Today, in the morning, it is sunny. In the afternoon, it is partly cloudy. In the evening, it is rainy. At night, it is windy. ", "q_content" => null, "round_instruction" => $AudioDomain . $G4_L1_practice_speaking . "SubBlock_speak-a-weather-forecast-for-t" . ".mp3"],
            ['round' => 2, 'game_id' => 842,  'q_image' => $l1_G842image . "2.png", "a_content" => null, "q_content" => null, "round_instruction" =>  $AudioDomain . $G4_L1_practice_speaking . "SubBlock_speak-a-weather-forecast-for-t" . ".mp3"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 10 Game 843 (  Writing Topic )
        //////////////////////////////////////////////////////////////

        $l10_G843image = $domain . "/storage/images/Grade_4/lesson_10/writing_topic/";
        $G4_L10_Game843_ans = "On Monday, it will be sunny.\nOn Tuesday, it will be stormy.\nOn Wednesday, it will be rainy.\nOn Thursday, it will be rainy.\nOn Friday, it will be sunny, and rainy.\nOn Saturday, it will be cloudy, and sunny. \nOn Sunday, it will be sunny.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 843, 'q_content' => $l10_G843image . "1.png", 'a_content' => $G4_L10_Game843_ans],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 11 Game 844 ( video )
        //////////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 844, 'a_content' => 'lesson_11_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 844, 'a_content' => 'lesson_11_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 11 Game 845 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l11_G845_image = $domain . "/storage/images/Grade_4/lesson_11/vocab/";
        $G4_L11_vocab = "Grade_4/" . "Lesson_11/" . "vocab/";


        $ans_G845 = [
            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
        ];

        foreach ($ans_G845 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 845, 'a_content' => $key, 'a_image' => $l11_G845_image . str_replace(' ', '-', $key)  . ".png",
                    'a_audio' => $AudioDomain . $G4_L11_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 11 Game 846 ( Spelling Game )
        ////////////////////////////////////////////////////////

        $G4_L10_spelling_game = "Grade_4/" . "Lesson_11/" . "spelling_game/";
        $l10_G846_image = $domain . "/storage/images/Grade_4/lesson_11/spelling_game/";


        $q_G846 = [

            ["A", "N", "Y", "A", "R", "J", "U"],
            ["U", "A", "B", "R", "Y", "R", "F", "E"],
            ["H", "M", "A", "C", "R"],
            ["P", "R", "L", "I", "A"],
            ["A", "M", "Y"],
            ["J", "E", "N", "U"],
            ["J", "Y", "L", "U"],
            ["U", "G", "T", "U", "S", "A"],
            ["M", "B", "P", "E", "S", "T", "R", "E", "E"],
            ["B", "E", "O", "R", "O", "T", "C"],
            ["V", "N", "B", "E", "E", "R", "M", "O"],
            ["E", "B", "E", "M", "R", "D", "E", "C"],

        ];

        $a_G846 = [
            "JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER"
        ];
        $img_G846 = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12
        ];

        $G846_Index = 0;

        for ($i = 0; $i < count($q_G846); $i++) {
            foreach ($q_G846[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 846, 'q_content' => $j, 'q_audio' => $AudioDomain . $G4_L10_spelling_game . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 846,
                    'q_image' => $l10_G846_image . $img_G846[$G846_Index] . ".png",
                    'a_audio' => $AudioDomain . $G4_L10_spelling_game . strtolower($a_G846[$G846_Index]) . ".mp3",
                    'a_content' => $a_G846[$G846_Index],
                ],
            ]);
            $G846_Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 11 Game 847   (  Practice  )
        ////////////////////////////////////////////////////////

        $l11_G847_image = $domain . "/storage/images/Grade_4/lesson_11/practice/";
        $G4_L11_practice_path = "Grade_4/" . "Lesson_11/" . "practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 847, 'q_image' => $l11_G847_image .  "1.png",  "q_content" => "February", "a_content" => 0],
            ['round' => 1, 'game_id' => 847, 'q_image' => null, "q_content" => "January", "a_content" => 1],
            ['round' => 1, 'game_id' => 847, 'q_image' => null, "q_content" => "April", "a_content" => 0],

            ['round' => 2, 'game_id' => 847, 'q_image' => $l11_G847_image .  "3.png",  "q_content" => "May", "a_content" => 0],
            ['round' => 2, 'game_id' => 847, 'q_image' => null, "q_content" => "March", "a_content" => 1],
            ['round' => 2, 'game_id' => 847, 'q_image' => null, "q_content" => "April", "a_content" => 0],

            ['round' => 3, 'game_id' => 847, 'q_image' => $l11_G847_image .  "4.png",  "q_content" => "April", "a_content" => 1],
            ['round' => 3, 'game_id' => 847, 'q_image' => null, "q_content" => "June", "a_content" => 0],
            ['round' => 3, 'game_id' => 847, 'q_image' => null, "q_content" => "July", "a_content" => 0],

            ['round' => 4, 'game_id' => 847, 'q_image' => $l11_G847_image .  "6.png",  "q_content" => "July", "a_content" => 0],
            ['round' => 4, 'game_id' => 847, 'q_image' => null, "q_content" => "December", "a_content" => 0],
            ['round' => 4, 'game_id' => 847, 'q_image' => null, "q_content" => "June", "a_content" => 1],

            ['round' => 5, 'game_id' => 847, 'q_image' => $l11_G847_image .  "7.png",  "q_content" => "June", "a_content" => 0],
            ['round' => 5, 'game_id' => 847, 'q_image' => null, "q_content" => "July", "a_content" => 1],
            ['round' => 5, 'game_id' => 847, 'q_image' => null, "q_content" => "August", "a_content" => 0],

            ['round' => 6, 'game_id' => 847, 'q_image' => $l11_G847_image .  "8.png",  "q_content" => "October", "a_content" => 0],
            ['round' => 6, 'game_id' => 847, 'q_image' => null, "q_content" => "July", "a_content" => 0],
            ['round' => 6, 'game_id' => 847, 'q_image' => null, "q_content" => "August", "a_content" => 1],

            ['round' => 7, 'game_id' => 847, 'q_image' => $l11_G847_image .  "9.png",  "q_content" => "October", "a_content" => 0],
            ['round' => 7, 'game_id' => 847, 'q_image' => null, "q_content" => "Spetember", "a_content" => 1],
            ['round' => 7, 'game_id' => 847, 'q_image' => null, "q_content" => "December", "a_content" => 0],

            ['round' => 8, 'game_id' => 847, 'q_image' => $l11_G847_image .  "10.png",  "q_content" => "October", "a_content" => 1],
            ['round' => 8, 'game_id' => 847, 'q_image' => null, "q_content" => "December", "a_content" => 0],
            ['round' => 8, 'game_id' => 847, 'q_image' => null, "q_content" => "November", "a_content" => 0],

            ['round' => 9, 'game_id' => 847, 'q_image' => $l11_G847_image .  "11.png",  "q_content" => "September", "a_content" => 0],
            ['round' => 9, 'game_id' => 847, 'q_image' => null, "q_content" => "October", "a_content" => 0],
            ['round' => 9, 'game_id' => 847, 'q_image' => null, "q_content" => "November", "a_content" => 1],

            ['round' => 10, 'game_id' => 847, 'q_image' => $l11_G847_image .  "12.png",  "q_content" => "December", "a_content" => 1],
            ['round' => 10, 'game_id' => 847, 'q_image' => null, "q_content" => "January", "a_content" => 0],
            ['round' => 10, 'game_id' => 847, 'q_image' => null, "q_content" => "October", "a_content" => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 11 Game 848 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L11_practice_speaking = "Grade_4/" . "Lesson_11/" . "speaking_practice/";
        $l11_G848image = $domain . "/storage/images/Grade_4/lesson_11/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 848,  'q_image' => $l11_G848image . "1.png", "a_content" => "There are 30 days in June.", "q_content" => "How many days are there in June?", "round_instruction" => $AudioDomain . $G4_L11_practice_speaking . "SubBlock_How-many-days-are-there-in-Jun" . ".mp3"],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 848,  'q_image' => $l11_G848image . "1.png",  "q_content" => "How many days are there in February?", "round_instruction" =>  $AudioDomain . $G4_L11_practice_speaking . "SubBlock_How-many-days-are-there-in-Feb" . ".mp3"],
            ['round' => 3, 'game_id' => 848,  'q_image' => $l11_G848image . "1.png",  "q_content" => "How many days are there in December?", "round_instruction" =>  $AudioDomain . $G4_L11_practice_speaking . "SubBlock_How-many-days-are-there-in-Dec" . ".mp3"],
            ['round' => 4, 'game_id' => 848,  'q_image' => $l11_G848image . "1.png",  "q_content" => "How many days are there in July?", "round_instruction" =>  $AudioDomain . $G4_L11_practice_speaking . "SubBlock_How-many-days-are-there-in-Jul" . ".mp3"],
            ['round' => 5, 'game_id' => 848,  'q_image' => $l11_G848image . "1.png",  "q_content" => "How many days are there in September?", "round_instruction" =>  $AudioDomain . $G4_L11_practice_speaking . "SubBlock_How-many-days-are-there-in-Sep" . ".mp3"],
            ['round' => 6, 'game_id' => 848,  'q_image' => $l11_G848image . "1.png",  "q_content" => "How many days are there in May?", "round_instruction" =>  $AudioDomain . $G4_L11_practice_speaking . "SubBlock_How-many-days-are-there-in-May" . ".mp3"],
            ['round' => 7, 'game_id' => 848,  'q_image' => $l11_G848image . "1.png",  "q_content" => "How many days are there in April?", "round_instruction" =>  $AudioDomain . $G4_L11_practice_speaking . "SubBlock_How-many-days-are-there-in-Apr" . ".mp3"],
            ['round' => 8, 'game_id' => 848,  'q_image' => $l11_G848image . "1.png",  "q_content" => "How many months are there in a year?", "round_instruction" =>  $AudioDomain . $G4_L11_practice_speaking . "SubBlock_How-many-months-are-there-in-a" . ".mp3"],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 11 Game 849 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l11_G849_image = $domain . "/storage/images/Grade_4/lesson_11/listen_n_practice/";
        $G4_L11_listen_n_practice = "Grade_4/" . "Lesson_11/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 849,  'q_audio' =>  $AudioDomain . $G4_L11_listen_n_practice . "september" . ".mp3", "q_content" => "September", "a_content" => 1],
            ['round' => 1, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "October", "a_content" => 0],
            ['round' => 1, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "November", "a_content" => 0],

            ['round' => 2, 'game_id' => 849,  'q_audio' =>  $AudioDomain . $G4_L11_listen_n_practice . "june" . ".mp3", "q_content" => "June",  "a_content" => 1],
            ['round' => 2, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "July", "a_content" => 0],
            ['round' => 2, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "August", "a_content" => 0],

            ['round' => 3, 'game_id' => 849,  'q_audio' =>  $AudioDomain . $G4_L11_listen_n_practice . "november" . ".mp3", "q_content" => "October", "a_content" => 0],
            ['round' => 3, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "November", "a_content" => 1],
            ['round' => 3, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "December", "a_content" => 0],

            ['round' => 4, 'game_id' => 849,  'q_audio' =>  $AudioDomain . $G4_L11_listen_n_practice . "february" . ".mp3", "q_content" => "January", "a_content" => 0],
            ['round' => 4, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "February", "a_content" => 1],
            ['round' => 4, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "March", "a_content" => 0],

            ['round' => 5, 'game_id' => 849,  'q_audio' =>  $AudioDomain . $G4_L11_listen_n_practice . "october" . ".mp3", "q_content" => "September",  "a_content" => 0],
            ['round' => 5, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "October", "a_content" => 1],
            ['round' => 5, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "November", "a_content" => 0],

            ['round' => 6, 'game_id' => 849,  'q_audio' =>  $AudioDomain . $G4_L11_listen_n_practice . "august" . ".mp3", "q_content" => "July",  "a_content" => 0],
            ['round' => 6, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "August", "a_content" => 1],
            ['round' => 6, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "September", "a_content" => 0],

            ['round' => 7, 'game_id' => 849,  'q_audio' =>  $AudioDomain . $G4_L11_listen_n_practice . "december" . ".mp3", "q_content" => "December",  "a_content" => 1],
            ['round' => 7, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "January", "a_content" => 0],
            ['round' => 7, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "February", "a_content" => 0],

            ['round' => 8, 'game_id' => 849,  'q_audio' =>  $AudioDomain . $G4_L11_listen_n_practice . "april" . ".mp3", "q_content" => "April",  "a_content" => 1],
            ['round' => 8, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "May", "a_content" => 0],
            ['round' => 8, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "June", "a_content" => 0],

            ['round' => 9, 'game_id' => 849,  'q_audio' =>  $AudioDomain . $G4_L11_listen_n_practice . "january" . ".mp3", "q_content" => "October",  "a_content" => 0],
            ['round' => 9, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "January", "a_content" => 1],
            ['round' => 9, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "December", "a_content" => 0],

            ['round' => 10, 'game_id' => 849,  'q_audio' =>  $AudioDomain . $G4_L11_listen_n_practice . "march" . ".mp3", "q_content" => "February",  "a_content" => 0],
            ['round' => 10, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "March", "a_content" => 1],
            ['round' => 10, 'game_id' => 849,  'q_audio' =>  null, "q_content" => "April", "a_content" => 0],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 11 Game 850 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L11_speaking_topic = "Grade_4/" . "Lesson_11/" . "speaking_topic/";
        $l11_G850image = $domain . "/storage/images/Grade_4/lesson_11/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 850, "q_audio" => $AudioDomain . $G4_L11_speaking_topic . "audio.mp3", "q_conver" => $l11_G850image . "text.png", "round_instruction" => $AudioDomain . $G4_L11_speaking_topic . "audio" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 12 Game 851 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 851, 'a_content' => 'lesson_12_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 851, 'a_content' => 'lesson_12_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 12 Game 852 (  Liaten and Repeat  )
        ////////////////////////////////////////////////////////

        $l12_G852_image = $domain . "/storage/images/Grade_4/lesson_12/listen_n_repeat/";
        $G4_L12_listen_n_repeat = "Grade_4/" . "Lesson_12/" . "listen_n_repeat/";


        $ans_G852 = [
            "spring", "summer", "the-rainy-season", "fall-autumn", "winter"
        ];

        foreach ($ans_G852 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 852, 'a_content' => $key, 'a_image' => $l12_G852_image . str_replace(' ', '-', $key)  . ".png",
                    'a_audio' => $AudioDomain . $G4_L12_listen_n_repeat . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 12 Game 853 , 854 (  Matching  )
        ////////////////////////////////////////////////////////

        $l12_G853_image = $domain . "/storage/images/Grade_3/lesson_12/Matching/";
        $G4_L12_Matching = "Grade_3/" . "Lesson_12/" . "Matching/";

        // Game 853
        $G4_L12_Game853_Matching = [

            $l12_G853_image . 'fall.png', $l12_G853_image . 'spring.png', $l12_G853_image . 'winter.png', $l12_G853_image . 'rainy.png', $l12_G853_image . 'summer.png',
            'Fall', 'The hot season / Summer', "Rainy Season", 'Spring', 'The cold season / Winter'

        ];

        $G4_L12_Game853_Matching_audio_ans = [

            'fall-autumn', 'spring', "winter", 'the-rainy-season', 'summer',
            'fall-autumn', 'summer', 'the-rainy-season', 'spring', 'winter'

        ];

        foreach ($G4_L12_Game853_Matching as $key => $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 853, 'round' => 1, 'q_content' => $G4_L12_Game853_Matching_audio_ans[$key],
                    'q_image' =>  strtolower($value), 'q_audio' => $AudioDomain . $G4_L12_Matching .  strtolower($G4_L12_Game853_Matching_audio_ans[$key]) . ".mp3",
                ]
            ]);
        }


        // Game 854
        $G4_L12_Game854_Matching = [

            'Spring', 'Summer', 'Rainy Season', 'Fall / Autumn', 'Winter',
            'It rains a lot.', "It's very cold. Sometimes, it snows.", "It is very hot and dry.", 'Flowers blossom and they are beautiful.', 'Leaves fall. Trees are colorful.'

        ];

        $G4_L12_Game854_Matching_audio = [

            'spring', 'summer', 'the-rainy-season', 'fall-autumn',  "winter",
            'It-rains-a-lot', 'It-is-very-cold-Sometimes-it', 'It-is-very-hot-and-dry', 'Flowers-blossom-and-they-are-b', 'Leaves-fall-Trees-are-colorfu'

        ];

        $G4_L12_Game854_Matching_ans = [

            'spring', 'summer', 'the-rainy-season', 'fall-autumn',  "winter",
            'the-rainy-season', 'winter', 'summer', 'fall-autumn', 'spring'

        ];

        foreach ($G4_L12_Game854_Matching as $key => $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 854, 'round' => 1, 'q_content' => $G4_L12_Game854_Matching_ans[$key],
                    'q_image' =>  strtolower($value), 'q_audio' => $AudioDomain . $G4_L12_Matching .  strtolower($G4_L12_Game854_Matching_audio[$key]) . ".mp3",
                ]
            ]);
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 12 Game 855 (  Speaking Practice  )
        //////////////////////////////////////////////////////////////

        $G4_L12_practice_speaking = "Grade_4/" . "Lesson_12/" . "speaking_practice/";
        $l12_G855image = $domain . "/storage/images/Grade_4/lesson_12/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 855,  'q_image' => $l12_G855image . "summer.png", "a_content" => "It is summer.", "q_audio" => $AudioDomain . $G4_L12_practice_speaking . "" . ".mp3", "q_content" => "What is the hottest season?", "round_instruction" => $AudioDomain . $G4_L12_practice_speaking . "SubBlock_What-is-the-hottest-season" . ".mp3"],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 855,  'q_image' => $l12_G855image . "winter.png", "q_audio" => $AudioDomain . $G4_L12_practice_speaking . "" . ".mp3", "q_content" => "What is the coldest season? \n ____", "round_instruction" =>  $AudioDomain . $G4_L12_practice_speaking . "SubBlock_What-is-the-coldest-season" . ".mp3"],
            ['round' => 3, 'game_id' => 855,  'q_image' => $l12_G855image . "rainy.png", "q_audio" => $AudioDomain . $G4_L12_practice_speaking . "" . ".mp3", "q_content" => "In which season does it rain? \nIt rains in ____", "round_instruction" =>  $AudioDomain . $G4_L12_practice_speaking . "In-which-season-does-it-rain" . ".mp3"],
            ['round' => 4, 'game_id' => 855,  'q_image' => $l12_G855image . "spring.png", "q_audio" => $AudioDomain . $G4_L12_practice_speaking . "" . ".mp3", "q_content" => "When are flowers colorful? \nFlowers are colorful in ____.", "round_instruction" =>  $AudioDomain . $G4_L12_practice_speaking . "SubBlock_When-are-flowers-colorful" . ".mp3"],
            ['round' => 5, 'game_id' => 855,  'q_image' => $l12_G855image . "fall.png", "q_audio" => $AudioDomain . $G4_L12_practice_speaking . "" . ".mp3", "q_content" => "When are trees colorful? \nTrees are ____.", "round_instruction" =>  $AudioDomain . $G4_L12_practice_speaking . "SubBlock_When-are-trees-colorful" . ".mp3"],
            ['round' => 6, 'game_id' => 855,  'q_image' => $l12_G855image . "spring2.png", "q_audio" => $AudioDomain . $G4_L12_practice_speaking . "" . ".mp3", "q_content" => "When is it sunny? \nIt is in ____.", "round_instruction" =>  $AudioDomain . $G4_L12_practice_speaking . "SubBlock_When-is-it-sunny" . ".mp3"],
            ['round' => 7, 'game_id' => 855,  'q_image' => $l12_G855image . "summer2.png", "q_audio" => $AudioDomain . $G4_L12_practice_speaking . "" . ".mp3", "q_content" => "When is it hot? \n ____", "round_instruction" =>  $AudioDomain . $G4_L12_practice_speaking . "SubBlock_When-is-it-hot" . ".mp3"],
            ['round' => 8, 'game_id' => 855,  'q_image' => $l12_G855image . "rainy.png", "q_audio" => $AudioDomain . $G4_L12_practice_speaking . "" . ".mp3", "q_content" => "In which season does it thunder? \nIt is in ____.", "round_instruction" =>  $AudioDomain . $G4_L12_practice_speaking . "In-which-season-does-it-thunde" . ".mp3"],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 12 Game 856 ( Listening )
        ////////////////////////////////////////////////////////

        $l12_G856_image = $domain . "/storage/images/Grade_4/lesson_12/listening/";
        $G4_L12_listening = "Grade_4/" . "Lesson_12/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 856,  'q_audio' =>  $AudioDomain . $G4_L12_listening . "SubBlock_The-sky-is-blue-The-sun-is-ho" . ".mp3", "q_content" => "Summer", "a_content" => 1],
            ['round' => 1, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Rainy Season", "a_content" => 0],
            ['round' => 1, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Fall", "a_content" => 0],

            ['round' => 2, 'game_id' => 856,  'q_audio' =>  $AudioDomain . $G4_L12_listening . "SubBlock_The-sky-is-grey-There-are-lot" . ".mp3", "q_content" => "Summer",  "a_content" => 0],
            ['round' => 2, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Rainy Season", "a_content" => 1],
            ['round' => 2, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Cold Season", "a_content" => 0],

            ['round' => 3, 'game_id' => 856,  'q_audio' =>  $AudioDomain . $G4_L12_listening . "It-snows-and-is-cold-What-is" . ".mp3", "q_content" => "Summer", "a_content" => 0],
            ['round' => 3, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Spring", "a_content" => 0],
            ['round' => 3, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Cold Season", "a_content" => 1],

            ['round' => 4, 'game_id' => 856,  'q_audio' =>  $AudioDomain . $G4_L12_listening . "SubBlock_The-sky-is-dark-There-is-ligh" . ".mp3", "q_content" => "Sunny", "a_content" => 0],
            ['round' => 4, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Windy", "a_content" => 0],
            ['round' => 4, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Stormy", "a_content" => 1],

            ['round' => 5, 'game_id' => 856,  'q_audio' =>  $AudioDomain . $G4_L12_listening . "SubBlock_The-air-is-moving-fast-You-ca" . ".mp3", "q_content" => "Sunny",  "a_content" => 0],
            ['round' => 5, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Windy", "a_content" => 1],
            ['round' => 5, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Stormy", "a_content" => 0],

            ['round' => 6, 'game_id' => 856,  'q_audio' =>  $AudioDomain . $G4_L12_listening . "Flowers-are-colorful-and-beaut" . ".mp3", "q_content" => "Summer",  "a_content" => 0],
            ['round' => 6, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Winter", "a_content" => 0],
            ['round' => 6, 'game_id' => 856,  'q_audio' =>  null, "q_content" => "Spring", "a_content" => 1],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 12 Game 857 (  Practice  )
        ////////////////////////////////////////////////////////

        $l12_G857_image = $domain . "/storage/images/Grade_4/lesson_12/reading_passage/";
        $G4_L12_reading_passage_path = "Grade_4/" . "Lesson_12/" . "reading_passage/";

        $l12_G857_q_audio = [
            "SubBlock_Who-was-the-weather-like-sunn",
            "SubBlock_Who-are-the-twins-Jack-and-Ju",
            "SubBlock_What-did-dad-say-to-them-To-wa",
            "What-did-mom-say-to-them-To-w",
            "SubBlock_What-did-Jack-make-with-snow",
            "audio"
        ];
        $l12_G857_q_conver = [
            "Who was the weather like?",
            "Who are the twins?",
            "What did dad say to them?",
            "What did mom say to them?",
            "What did Jack make with snow?",
            "What did June make with snow?",
        ];
        $l12_G857_q_audio_ans = [
            ["Sunny", "Icy", "Snowy"],
            ["Jack and June", "Joe and June", "Jack and Joe"],
            ["To warm up", "To eat more", "To play outside"],
            ["To wear jackets", "To wear hats", "To wear socks"],
            ["Snow man", "Snow angel", "Snowball"],
            ["Snow man", "Snow angel", "Snowball"],
        ];
        $l12_G857_q_audio_a_content = [
            [0, 0, 1],
            [1, 0, 0],
            [1, 0, 0],
            [0, 1, 0],
            [0, 0, 1],
            [0, 1, 0],
        ];


        for ($i = 0; $i < count($l12_G857_q_audio); $i++) {

            foreach ($l12_G857_q_audio_ans[$i] as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 857, "q_audio" => $AudioDomain . $G4_L12_reading_passage_path . str_replace(' ', '-', strtolower($val)) . ".mp3", 'q_content' => $val, "q_conver" => null, 'a_content' => $l12_G857_q_audio_a_content[$i][$key], "background" => null],
                ]);
            }

            foreach ($l12_G857_q_audio as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 857, "q_audio" => $AudioDomain . $G4_L12_reading_passage_path . $val . ".mp3", "q_conver" => $l12_G857_q_conver[$key], 'q_content' => null, 'a_content' => null, "background" => null],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 857, "q_audio" => $AudioDomain . $G4_L12_reading_passage_path . "It-was-snowing-like-never-bef" . ".mp3", "q_content" => "The Special Snowman", "q_conver" => "It was snowing, like never before. The twins Jack and June just couldn't wait to go out there, into the deep snow. \n\"Wrap up warm,\" Dad yelled. \n\"Hats and gloves,\" Mom shouted. \nIt was very cold, but the twins were ready for everything. \n\"Snowballs,\" Jack started making the snowballs into a pile.\n\"A snow angel,\" June fell onto the snow and moved her arms wide, up and down like the angel's wings. \nMom called for lunch. \"Snow makes you hungry. I know it.\" She smiled.\nThey smelled a yummy smell in the kitchen.\n\"A carrot soup,\" Jack and June smiled.",
                    'a_content' => null, "background" => $l12_G857_image . "bg.png"
                ],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 12 Game 858 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L12_speaking_topic = "Grade_4/" . "Lesson_12/" . "speaking_topic/";
        $l12_G858image = $domain . "/storage/images/Grade_4/lesson_12/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 858, "q_conver" => $l12_G858image . "text.png", "round_instruction" => $AudioDomain . $G4_L12_speaking_topic . "SubBlock_Talk-about-your-favorite-seaso" . ".mp3"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 12 Game 859 (  Writing Topic )
        //////////////////////////////////////////////////////////////

        $G4_L12_Game859_ans = "Rainy season is my favorite season. It is rainy and wet. School opens during this season. I like it because I can see my friends at school. I like running in the rain. Trees are green and beautiful";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 859, 'q_content' => "My favorite season is _____. \nIt is _____ and _____. \n_____ (what happens during the season) \n_____ (what do you do?)", 'a_content' => $G4_L12_Game859_ans],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 13 Game 860 ( video )
        //////////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 860, 'a_content' => 'lesson_13_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 860, 'a_content' => 'lesson_13_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 13 Game 861 (  Liaten and Repeat  )
        ////////////////////////////////////////////////////////

        $l13_G861_image = $domain . "/storage/images/Grade_4/lesson_13/listen_n_repeat/";
        $G4_L13_listen_n_repeat = "Grade_4/" . "Lesson_13/" . "listen_n_repeat/";


        $ans_G861 = [
            "First", "Second", "Third", "Fourth", "Fifth", "Sixth", "Seventh", "Eighth", "Ninth", "Tenth", "Eleventh", "Twelfth"
        ];

        foreach ($ans_G861 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 861, 'a_content' => $key, 'a_image' => $l13_G861_image . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L13_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 13 Game 862 (  Matching  )
        ////////////////////////////////////////////////////////

        $l13_G862_image = $domain . "/storage/images/Grade_4/lesson_13/Matching/";
        $G4_L13_Matching = "Grade_4/" . "Lesson_13/" . "Matching/";


        $G4_L13_Game862_Matching = [

            ['First', 'Fifth', 'Fourth', 'Second', "Third"],
            ['Seventh', 'Tenth', 'Sixth', "Ninth",  'Eighth'],

        ];

        $G4_L13_Game862_Matching_image = [

            ['Fifth', 'Second', 'First', "Third",  'Fourth'],
            ["Ninth", 'Eighth', 'Tenth', 'Sixth', 'Seventh'],

        ];


        for ($i = 0; $i < count($G4_L13_Game862_Matching); $i++) {

            foreach ($G4_L13_Game862_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 862, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G4_L13_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_L13_Game862_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 862, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l13_G862_image . $q . ".png", 'q_audio' => $AudioDomain . $G4_L13_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 13 Game 863 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L13_practice_speaking = "Grade_4/" . "Lesson_13/" . "speaking_practice/";
        $l13_G863image = $domain . "/storage/images/Grade_4/lesson_13/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "Anna is in the ____ place."],
            ['round' => 2, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "Emma is in the ____ place."],
            ['round' => 3, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "Rose is in the ____ place."],
            ['round' => 4, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "Max is in the ____ place."],
            ['round' => 5, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "Paul is in the ____ place."],
            ['round' => 6, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "Sam is in the ____ place."],
            ['round' => 7, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "John is in the ____ place."],
            ['round' => 8, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "Sara is in the ____ place."],
            ['round' => 9, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "David is in the ____ place."],
            ['round' => 10, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "Jack is in the ____ place."],
            ['round' => 11, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "Ben is in the ____ place."],
            ['round' => 12, 'game_id' => 863,  'q_image' => $l13_G863image . "1.png", "q_audio" => $AudioDomain . $G4_L13_practice_speaking . "" . ".mp3",  "q_content" => "Amara is in the ____ place."],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 13 Game 864 (  Reading  )
        ////////////////////////////////////////////////////////

        $l13_G864_image = $domain . "/storage/images/Grade_4/lesson_13/reading_passage/";
        $G4_L13_reading_passage_path = "Grade_4/" . "Lesson_13/" . "reading_passage/";

        $l13_G864_q_audio = [
            "SubBlock_The-sisters-had-hair-brown-bl",
            "SubBlock_Except-the-last-one-the-siste",
            "SubBlock_Who-could-ride-the-scooter-Th",
            "SubBlock_Whom-could-the-third-sister-ta",
            "SubBlock_What-could-the-sixth-sister-ma",
            "SubBlock_What-could-the-seventh-sister"
        ];
        $l13_G864_q_conver = [
            "The sisters had ____ hair.",
            "Except the last one, the sisters were ____.",
            "Who could ride the scooter?",
            "Whom could the third sister talk to?",
            "What could the sixth sister make?",
            "What could the seventh sister do?",
        ];
        $l13_G864_q_audio_ans = [
            ["Brown", "Blonde", "Black"],
            ["Tall", "Short", "Neither tall nor short"],
            ["First", "second", "Third"],
            ["Cats", "Dogs", "Birds"],
            ["Noodle", "Shabu", "Fried rice"],
            ["Karate", "Catching ball", "Nothing yet"]
        ];
        $l13_G864_q_audio_a_content = [
            [0, 0, 1],
            [1, 0, 0],
            [1, 0, 0],
            [0, 1, 0],
            [1, 0, 0],
            [0, 0, 1],
        ];


        for ($i = 0; $i < count($l13_G864_q_audio); $i++) {

            foreach ($l13_G864_q_audio_ans[$i] as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 864, "q_audio" => $AudioDomain . $G4_L13_reading_passage_path . str_replace(' ', '-', strtolower($val)) . ".mp3", 'q_content' => $val, "q_conver" => null, 'a_content' => $l13_G864_q_audio_a_content[$i][$key], "background" => null],
                ]);
            }

            foreach ($l13_G864_q_audio as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 864, "q_audio" => $AudioDomain . $G4_L13_reading_passage_path . $val . ".mp3", "q_conver" => $l13_G864_q_conver[$key], 'q_content' => null, 'a_content' => null, "background" => null],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 864, "q_audio" => $AudioDomain . $G4_L13_reading_passage_path . "SubBlock_Once-upon-a-time-there-were-s" . ".mp3", "q_conver" => "Once upon a time, there were seven sisters who lived together and took care of each other. \nEach sister had shining black hair and sparkling eyes. Each stood straight and tall, except for Seventh sister, who was just a baby. \nBut, the sisters were very different.\nThe first sister could ride the scooter as fast as the wind. \nThe second sister knew karate- kick, chop, hi-yah.\nThe third sister could count -to five hundred and beyond.\nThe fourth sister could talk to dogs.\nThe fifth sister could catch the ball- no matter how fast or high it was thrown.\nThe sixth sister could cook the most delicious noodle soup in the world.\nAnd, the seventh sister? No one was really sure yet what she could do, as she was so little, she had never spoken even one word.",
                    'a_content' => null, "background" => $l13_G864_image . "bg.jpg"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 13 Game 865 ( writing topic )
        ////////////////////////////////////////////////////////

        $l13_G865_image = $domain . "/storage/images/Grade_4/lesson_13/writing_topic/";
        $G4_L13_look_n_write = "Grade_4/" . "Lesson_13/" . "writing_topic/";

        $q_content_G4_L13_Game865_img = ["feb", "june", "a", "j", "dec", "july",  "sept", "c", "f", "k"];

        $a_content_G4_L13_Game865 = [
            "February is the second month of the year.",
            "June is the sixth month of the year.",
            "A is the first letter of English alphabet.",
            "J is the tenth letter of English alphabet.",
            "December is the twelfth month of the year.",
            "July is the seventh month of the yar.",
            "September is the ninth month of the year.",
            "C is the third letter of the alphabet.",
            "F is the sixth letter of the alphabet.",
            "K is the eleventh letter of the alphabet."
        ];

        $q_content_G4_L13_Game865 = [
            'February is the ____ month of the year.',
            'June is the ____ month of the year.',
            'A is the ____ letter of English alphabet.',
            'J is the ____ letter of English alphabet.',
            'December is the ____ month of the year.',
            'July is the ____ month of the year.',
            'September is the ____ month of the year.',
            "C is the ____ letter of the alphabet.",
            "F is the ____ letter of the alphabet.",
            "K is the ____ letter of the alphabet."
        ];

        foreach ($q_content_G4_L13_Game865_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 865, 'round' => $key + 1,
                    'q_content' => $q_content_G4_L13_Game865[$key],
                    'q_image' => $l13_G865_image . $value . ".png",
                    'a_content' => $a_content_G4_L13_Game865[$key],
                ],
            ]);
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 11 Game 866 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L13_speaking_topic = "Grade_4/" . "Lesson_13/" . "speaking_topic/";
        $l13_G866image = $domain . "/storage/images/Grade_4/lesson_13/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 866, "q_audio" => $AudioDomain . $G4_L13_speaking_topic . "" . ".mp3", 'q_image' => $l13_G866image . "feb.png",  "q_content" => "February is the ____ month of the year."],
            ['round' => 2, 'game_id' => 866, "q_audio" => $AudioDomain . $G4_L13_speaking_topic . "" . ".mp3", 'q_image' => $l13_G866image . "june.png",  "q_content" => "June is the ____ month of the year."],
            ['round' => 3, 'game_id' => 866, "q_audio" => $AudioDomain . $G4_L13_speaking_topic . "" . ".mp3", 'q_image' => $l13_G866image . "alpha.png",  "q_content" => "A is the ____ letter of English alphabet."],
            ['round' => 4, 'game_id' => 866, "q_audio" => $AudioDomain . $G4_L13_speaking_topic . "" . ".mp3", 'q_image' => $l13_G866image . "alpha.png",  "q_content" => "J is the ____ letter of English alphabet."],
            ['round' => 5, 'game_id' => 866, "q_audio" => $AudioDomain . $G4_L13_speaking_topic . "" . ".mp3", 'q_image' => $l13_G866image . "dec.png",  "q_content" => "December is the ____ month of the year."],
            ['round' => 6, 'game_id' => 866, "q_audio" => $AudioDomain . $G4_L13_speaking_topic . "" . ".mp3", 'q_image' => $l13_G866image . "july.png",  "q_content" => "July is the ____ month of the year."],
            ['round' => 7, 'game_id' => 866, "q_audio" => $AudioDomain . $G4_L13_speaking_topic . "" . ".mp3", 'q_image' => $l13_G866image . "sept.png",  "q_content" => "September is the ____ month of the year."],
            ['round' => 8, 'game_id' => 866, "q_audio" => $AudioDomain . $G4_L13_speaking_topic . "" . ".mp3", 'q_image' => $l13_G866image . "alpha.png",  "q_content" => "C is the ____ letter of the alphabet."],
            ['round' => 9, 'game_id' => 866, "q_audio" => $AudioDomain . $G4_L13_speaking_topic . "" . ".mp3", 'q_image' => $l13_G866image . "alpha.png",  "q_content" => "F is the ____ letter of the alphabet."],
            ['round' => 10, 'game_id' => 866, "q_audio" => $AudioDomain . $G4_L13_speaking_topic . "" . ".mp3", 'q_image' => $l13_G866image . "alpha.png",  "q_content" => "K is the ____ letter of the alphabet."],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 14 Game 867 ( video )
        //////////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 867, 'a_content' => 'lesson_14_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 867, 'a_content' => 'lesson_14_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 14 Game 868 (  Liaten and Repeat  )
        ////////////////////////////////////////////////////////

        $l14_G868_image = $domain . "/storage/images/Grade_4/lesson_14/listen_n_repeat/";
        $G4_L14_listen_n_repeat = "Grade_4/" . "Lesson_14/" . "listen_n_repeat/";


        $ans_G868 = [
            13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31
        ];

        foreach ($ans_G868 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 868, 'a_content' => $key, 'a_image' => $l14_G868_image . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L14_listen_n_repeat . $key . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 14 Game 869 (  Matching  )
        ////////////////////////////////////////////////////////

        $l13_G869_image = $domain . "/storage/images/Grade_4/lesson_14/Matching/";
        $G4_L14_Matching = "Grade_4/" . "Lesson_14/" . "Matching/";


        $G4_L14_Game869_Matching = [

            ['13th', '16th', '15th', '17th', "14th"],
            ['18th', '21th', '22th', '22th', "19th"],
            ['23th', '24th', '25th', '26th', "27th"],

        ];

        $G4_L14_Game869_Matching_audio1 = [

            ['13', '16', '15', '17', "14"],
            ['18', '21', '22', '22', "19"],
            ['23', '24', '25', '26', "27"],

        ];

        $G4_L14_Game869_Matching_audio2 = [

            ['14', '16', '13', '17', "15"],
            ['20', '19', '18', '21', "22"],
            ['25', '27', '26', '24', "23"],

        ];


        $G4_L14_Game869_Matching_image = [

            ['Fourteenth', 'Sixteenth', 'thirteenth', "Seventeenth",  'Fifteenth'],
            ['Twentieth', 'Nineteenth', 'Eighteenth', "Twenty first",  'Twenty second'],
            ["Twenty fifty", 'Twenty Seventh', 'Twenty sixth', 'Twenty fourth', 'Twenty third'],

        ];


        for ($i = 0; $i < count($G4_L14_Game869_Matching); $i++) {

            foreach ($G4_L14_Game869_Matching_audio1[$i] as $key => $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 869, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $G4_L14_Game869_Matching[$i][$key], 'q_audio' => $AudioDomain . $G4_L14_Matching .  $q . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_L14_Game869_Matching_audio2[$i] as $key => $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 869, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $G4_L14_Game869_Matching_image[$i][$key], 'q_audio' => $AudioDomain . $G4_L14_Matching .  $q . ".mp3",
                    ]
                ]);
            }
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 14 Game 870 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L14_practice_speaking = "Grade_4/" . "Lesson_14/" . "speaking_practice/";
        $l14_G870image = $domain . "/storage/images/Grade_4/lesson_14/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 870,  'q_image' => $l14_G870image . "1.png", "a_content" => "7th of June. ", "q_audio" => $AudioDomain . $G4_L14_practice_speaking . "" . ".mp3",  "q_content" => "Rose, when's your birthday?"],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 870,  'q_image' => $l14_G870image . "1.png", "q_audio" => $AudioDomain . $G4_L14_practice_speaking . "" . ".mp3",  "q_content" => "Emma, when's your birthday?"],
            ['round' => 3, 'game_id' => 870,  'q_image' => $l14_G870image . "1.png", "q_audio" => $AudioDomain . $G4_L14_practice_speaking . "" . ".mp3",  "q_content" => "Anna, when's your birthday?"],
            ['round' => 4, 'game_id' => 870,  'q_image' => $l14_G870image . "1.png", "q_audio" => $AudioDomain . $G4_L14_practice_speaking . "" . ".mp3",  "q_content" => "Jack, when's your birthday?"],
            ['round' => 5, 'game_id' => 870,  'q_image' => $l14_G870image . "1.png", "q_audio" => $AudioDomain . $G4_L14_practice_speaking . "" . ".mp3",  "q_content" => "Max, when's your birthday?"],
            ['round' => 6, 'game_id' => 870,  'q_image' => $l14_G870image . "1.png", "q_audio" => $AudioDomain . $G4_L14_practice_speaking . "" . ".mp3",  "q_content" => "Ben, when's your birthday?"],
            ['round' => 7, 'game_id' => 870,  'q_image' => $l14_G870image . "1.png", "q_audio" => $AudioDomain . $G4_L14_practice_speaking . "" . ".mp3",  "q_content" => "Paul, when's your birthday?"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 14 Game 871 (  Reading  )
        ////////////////////////////////////////////////////////

        $l14_G871_image = $domain . "/storage/images/Grade_4/lesson_14/reading_passage/";
        $G4_L14_reading_passage_path = "Grade_4/" . "Lesson_14/" . "reading_passage/";

        $l14_G871_q_audio = [
            "SubBlock_The-sisters-had-hair-brown-bl",
            "SubBlock_Except-the-last-one-the-siste",
            "SubBlock_Who-could-ride-the-scooter-Th",
            "SubBlock_Whom-could-the-third-sister-ta",
            "SubBlock_What-could-the-sixth-sister-ma",
            "SubBlock_What-could-the-seventh-sister"
        ];
        $l14_G871_q_conver = [
            "The sisters had ____ hair.",
            "Except the last one, the sisters were ____.",
            "Who could ride the scooter?",
            "Whom could the third sister talk to?",
            "What could the sixth sister make?",
            "What could the seventh sister do?",
        ];
        $l14_G871_q_audio_ans = [
            ["Brown", "Blonde", "Black"],
            ["Tall", "Short", "Neither tall nor short"],
            ["First", "Second", "Third"],
            ["Cats", "Dogs", "Birds"],
            ["Noodle", "Shabu", "Fried rice"],
            ["Karate", "Catching ball", "Nothing yet"]
        ];
        $l14_G871_q_audio_a_content = [
            [0, 0, 1],
            [1, 0, 0],
            [1, 0, 0],
            [0, 1, 0],
            [1, 0, 0],
            [0, 0, 1],
        ];


        for ($i = 0; $i < count($l14_G871_q_audio); $i++) {

            foreach ($l14_G871_q_audio_ans[$i] as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 871, "q_audio" => $AudioDomain . $G4_L14_reading_passage_path . str_replace(' ', '-', strtolower($val)) . ".mp3", 'q_content' => $val, "q_conver" => null, 'a_content' => $l14_G871_q_audio_a_content[$i][$key], "background" => null],
                ]);
            }

            foreach ($l14_G871_q_audio as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 871, "q_audio" => $AudioDomain . $G4_L14_reading_passage_path . $val . ".mp3", "q_conver" => $l14_G871_q_conver[$key], 'q_content' => null, 'a_content' => null, "background" => null],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 871, "q_audio" => $AudioDomain . $G4_L14_reading_passage_path . "SubBlock_Once-upon-a-time-there-were-s" . ".mp3", "q_conver" => "Once upon a time, there were seven sisters who lived together and took care of each other. \nEach sister had shining black hair and sparkling eyes. Each stood straight and tall, except for Seventh sister, who was just a baby. \nBut, the sisters were very different.\nThe first sister could ride the scooter as fast as the wind. \nThe second sister knew karate- kick, chop, hi-yah.\nThe third sister could count -to five hundred and beyond.\nThe fourth sister could talk to dogs.\nThe fifth sister could catch the ball- no matter how fast or high it was thrown.\nThe sixth sister could cook the most delicious noodle soup in the world.\nAnd, the seventh sister? No one was really sure yet what she could do, as she was so little, she had never spoken even one word.",
                    'a_content' => null, "background" => $l14_G871_image . "bg.jpg"
                ],
            ]);
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 14 Game 872 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L14_speaking_topic = "Grade_4/" . "Lesson_14/" . "speaking_topic/";
        $l14_G872image = $domain . "/storage/images/Grade_4/lesson_14/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 872, "round_instruction" => $AudioDomain . $G4_L14_speaking_topic . "SubBlock_Ask-your-family-members-and-fr" . ".mp3", 'q_image' => $l14_G872image . "1.png",  "q_content" => "Ask your family members and friends,\n \"when's your birthday?\"\nTalk about their birthday."],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 15 Game 873 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 873, 'a_content' => 'lesson_15_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 873, 'a_content' => 'lesson_15_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 15 Game 874 , 875 (  Liaten and Repeat  )
        ////////////////////////////////////////////////////////

        $l15_G874_G875_image = $domain . "/storage/images/Grade_4/lesson_15/listen_n_repeat/";
        $G4_L15_listen_n_repeat = "Grade_4/" . "Lesson_15/" . "listen_n_repeat/";

        // Game 874
        $ans_G874 = [
            "Chinese-New-Year", "Christmas", "Diwali", "Festival-of-lights", "Halloween", "Thanksgiving", "Valentines-Day", "Water-festival"
        ];

        foreach ($ans_G874 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 874, 'a_content' => $key, 'a_image' => $l15_G874_G875_image . "1/" . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L15_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }

        // Game 875
        $ans_G875 = [
            "Exchange-Gifts", "Have-dinner", "Lightcandles", "Pay-homage-to-elders", "Praying-to-god", "Sing-Songs", "Throw-water", "Wear-costumes"
        ];

        foreach ($ans_G875 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 875, 'a_content' => $key, 'a_image' => $l15_G874_G875_image . "2/" . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L15_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 15 Game 876 (  Matching  )
        ////////////////////////////////////////////////////////

        $l15_G876_image = $domain . "/storage/images/Grade_4/lesson_15/Matching/";
        $G4_L15_Matching = "Grade_4/" . "Lesson_15/" . "Matching/";


        $G4_L15_Game876_Matching = [

            ['Have dinner', 'Wear costumes', 'Light candles', 'Praying to god', "Throw water"],
            ['Pay homage to elders', 'Throw water', 'Sing songs', "Exchange gifts",  'Wear costumes'],

        ];

        $G4_L15_Game876_Matching_image = [

            ['Wear costumes', "Throw water", 'Have dinner', 'Praying to god', 'Light candles'],
            ['Wear costumes', 'Pay homage to elders', 'Sing songs', 'Throw water', "Exchange gifts"],

        ];


        for ($i = 0; $i < count($G4_L15_Game876_Matching); $i++) {

            foreach ($G4_L15_Game876_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 876, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G4_L15_Matching .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_L15_Game876_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 876, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l15_G876_image . str_replace(' ', '-', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G4_L15_Matching . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 15 Game 877 (  listen practice  )
        ////////////////////////////////////////////////////////

        $l15_G877_image = $domain . "/storage/images/Grade_4/lesson_15/listen_n_practice/";
        $G4_L15_listen_n_practice = "Grade_4/" . "Lesson_15/" . "listen_n_practice/";


        $G4_L15_Game877_listen_n_practice_image = [

            ['speaker', "speaker", 'speaker', 'speaker', 'speaker', 'speaker'],

        ];

        $G4_L15_Game877_listen_n_practice_image_ans = [

            ["Water festival", "Chinese New Year", 'Halloween', 'Thadingyut', 'Christmas',  "Valentine's Day",],

        ];

        $G4_L15_Game877_listen_n_practice_audio = [

            ['SubBlock_It-is-in-April-People-throw-w', "SubBlock_It-is-in-October-People-pay-h", 'SubBlock_It-is-in-October-People-wear', 'SubBlock_It-is-known-as-the-festival-of', 'SubBlock_It-is-usually-in-December-Dur', 'SubBlock_It-is-usually-in-February-Peo'],

        ];

        $G4_L15_Game877_listen_n_practice = [

            ['Christmas', 'Halloween', 'Thadingyut', "Valentine's Day", "Water festival", "Chinese New Year"],

        ];


        for ($i = 0; $i < count($G4_L15_Game877_listen_n_practice); $i++) {

            foreach ($G4_L15_Game877_listen_n_practice_image[$i] as $key => $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 877, 'round' => $i + 1, 'q_content' => $G4_L15_Game877_listen_n_practice_image_ans[$i][$key],
                        'q_image' => $l15_G877_image . str_replace(' ', '-', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G4_L15_listen_n_practice . str_replace(' ', '-',  strtolower($G4_L15_Game877_listen_n_practice_audio[$i][$key])) . ".mp3",
                    ]
                ]);
            }
            foreach ($G4_L15_Game877_listen_n_practice[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 877, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G4_L15_listen_n_practice .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 15 Game 878 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L15_practice_speaking = "Grade_4/" . "Lesson_15/" . "speaking_practice/";
        $l15_G878image = $domain . "/storage/images/Grade_4/lesson_15/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 878,  'q_image' => $l15_G878image . "christmas.png", "a_content" => "It is in December.\nWhat do you do?\nI sing and exchange gifts.", "q_audio" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3",   "q_content" => "When is Christmas?"],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 878,  'q_image' => $l15_G878image . "valentine.png", "q_audio" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3",  "q_content" => "When is Christmas?"],
            ['round' => 3, 'game_id' => 878,  'q_image' => $l15_G878image . "water.png", "q_audio" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3",  "q_content" => "When is the water festival?"],
            ['round' => 4, 'game_id' => 878,  'q_image' => $l15_G878image . "thading.png", "q_audio" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3",  "q_content" => "When is Thadingyut?"],
            ['round' => 5, 'game_id' => 878,  'q_image' => $l15_G878image . "chinese.png", "q_audio" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3",  "q_content" => "When is the Chinese New Year?"],
            ['round' => 6, 'game_id' => 878,  'q_image' => $l15_G878image . "thanks.png", "q_audio" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3",  "q_content" => " When is thanksgiving?"],
            ['round' => 7, 'game_id' => 878,  'q_image' => $l15_G878image . "halloween.png", "q_audio" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3",  "q_content" => "When is Halloween?"],
            ['round' => 8, 'game_id' => 878,  'q_image' => $l15_G878image . "diwali.png", "q_audio" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L15_practice_speaking . "" . ".mp3",  "q_content" => "When is Diwali?"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 15 Game 879 (  Practice  )
        ////////////////////////////////////////////////////////

        $l15_G879_image = $domain . "/storage/images/Grade_4/lesson_15/reading_passage/";
        $G4_L15_reading_passage_path = "Grade_4/" . "Lesson_15/" . "reading_passage/";

        $l15_G879_q_audio = [
            "SubBlock_Diwali-is-called-festival-of-W",
            "SubBlock_On-the-first-day-of-Diwali-pe",
            "SubBlock_On-the-second-day-homes-are-d",
            "SubBlock_Who-do-families-do-on-the-thir",
            "SubBlock_On-the-fourth-day-what-do-the",
            "SubBlock_On-the-last-day-what-else-do"
        ];
        $l15_G879_q_conver = [
            "Diwali is called festival \nof ____.",
            "On the first day of Diwali, \npeople clean their homes \nand shop for ____.",
            "On the second day, \nhomes are decorated \nwith ____.",
            "Who do families do on \nthe third day of Diwali?",
            "On the fourth day, \nwhat do they do?",
            "On the last day, \nwhat else do siblings do apart \nfrom exchanging gifts?",
        ];
        $l15_G879_q_audio_ans = [
            ["Water", "Lights", "Colors"],
            ["Kitchenware", "Food", "Gifts"],
            ["Lamps", "Flowers", "Candles"],
            ["Praysto goddess Lakshmi", "Sharing food", "Going to relatives"],
            ["Decoration with lamps", "Giving gifts", "Visiting temples"],
            ["Praying", "Visting Temples", "Cleaning workspaces"]
        ];
        $l15_G879_q_audio_a_content = [
            [0, 1, 0],
            [1, 0, 0],
            [1, 0, 0],
            [1, 0, 0],
            [0, 1, 0],
            [0, 0, 1],
        ];


        for ($i = 0; $i < count($l15_G879_q_audio); $i++) {

            foreach ($l15_G879_q_audio_ans[$i] as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 879, "q_audio" => $AudioDomain . $G4_L15_reading_passage_path . str_replace(' ', '-', strtolower($val)) . ".mp3", 'q_content' => $val, "q_conver" => null, 'a_content' => $l15_G879_q_audio_a_content[$i][$key], "background" => null],
                ]);
            }

            foreach ($l15_G879_q_audio as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 879, "q_audio" => $AudioDomain . $G4_L15_reading_passage_path . $val . ".mp3", "q_conver" => $l15_G879_q_conver[$key], 'q_content' => null, 'a_content' => null, "background" => null],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 879, "q_audio" => $AudioDomain . $G4_L15_reading_passage_path . "Block_Binny-woke-up-happy-but-nervou" . ".mp3", "q_conver" => "Binny woke up happy but nervous, it was her day to share about Diwali, the festival of Lights!\nSince her class was learning about different celebrations, her teacher, Mr. Boomer, had asked her to talk about her favorite holiday.\nToday, it was Binny's turn. She hoped everything would go just as she and her teacher planned.\nAfter morning circle time, Mr. Boomer called Binny's name.\nWhen she stood, suddenly she felt shy and scared.\n\"Today is Diwali,\" Binny said nervously.\n\"Take a deep breath,\" Mr. Boomer said. \"I know you can do this.\"\n\"On the first day of Diwali, people often clean their homes and shop for kitchen utensils.\nOn the second day, homes are decorated with lamps and color patterns called rangoli, which are created on the floor with colored sand or powder.\nOn the third day, families gather to pray to the goddess Lakshmi, to enjoy a delicious feast, and to watch fireworks.\nOn the fourth day, friends and relatives give one another gifts, and good wishes for the season.\nOn the fifth and the last day, siblings visit one another and exchange gifts. Others use the day to clean and organize their workspaces.\"\n\"Happy Diwali to you all!\" Binny said.\n\"Happy Diwali to you, too,\" her friends said with big smiles.",
                    'q_content' => "Binny's Diwali", "background" => $l15_G879_image . "bg.jpg"
                ],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 15 Game 880 (  Writing Topic )
        //////////////////////////////////////////////////////////////

        $G4_L15_Game880_ans = "I like Christmas. During this festival, I visit my friends, sing along with them, and exchange gifts. I love going carol singing with my friends. I also like receiving gifts from my parents and friends. I love enjoying Christmas dinner with the family, too.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 880, 'q_content' => "The festival I like\nI like ____.\nDuring the festival, \nI ____.\nI ____.", 'a_content' => $G4_L15_Game880_ans],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 15 Game 881 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L15_speaking_topic = "Grade_4/" . "Lesson_15/" . "speaking_topic/";
        $l15_G881image = $domain . "/storage/images/Grade_4/lesson_15/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 881, "round_instruction" => $AudioDomain . $G4_L15_speaking_topic . "SubBlock_What-is-your-favorite-festival" . ".mp3", 'q_image' => $l15_G881image . "green-star.png",  "q_content" => "What is your favorite festival? \nTalk about it and why do you like it."],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 16 Game 882 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 882, 'a_content' => 'lesson_16_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 882, 'a_content' => 'lesson_16_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 16 Game 883 (  Liaten and Repeat  )
        ////////////////////////////////////////////////////////

        $l16_G883_image = $domain . "/storage/images/Grade_4/lesson_16/listen_n_repeat/";
        $G4_L16_listen_n_repeat = "Grade_4/" . "Lesson_16/" . "listen_n_repeat/";

        $ans_G883 = [
            "Artist", "Doctor", "Engineer", "Fire-Fighter", "Nurse", "Postman", "Singer", "Student", "Teacher"
        ];

        foreach ($ans_G883 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 883, 'a_content' => $key, 'a_image' => $l16_G883_image .  $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L16_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 16 Game 884 (  Practice  )
        ////////////////////////////////////////////////////////

        $l16_G884_image = $domain . "/storage/images/Grade_4/lesson_16/practice/";
        $G4_L16_practice = "Grade_4/" . "Lesson_16/" . "practice/";


        $G4_L16_Game884_practice = [

            ['Doctor', 'Artist', 'Engineer', 'Student', "Fire Fighter"],
            ['Nurse', 'Artist', 'Postman', "Teacher",  'Singer'],

        ];

        $G4_L16_Game884_practice_image = [

            ['Engineer', "Fire Fighter", 'Student', 'Doctor', 'Artist'],
            ['Teacher', 'Postman', 'Singer', 'Artist', "Nurse"],

        ];


        for ($i = 0; $i < count($G4_L16_Game884_practice); $i++) {

            foreach ($G4_L16_Game884_practice[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 884, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G4_L16_practice .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_L16_Game884_practice_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 884, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l16_G884_image . str_replace(' ', '-', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G4_L16_practice . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }






        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 16 Game 885 (  listen practice  )
        ////////////////////////////////////////////////////////

        $l16_G885_image = $domain . "/storage/images/Grade_4/lesson_16/listen_n_practice/";
        $G4_L16_listen_n_practice = "Grade_4/" . "Lesson_16/" . "listen_n_practice/";


        $G4_L16_Game885_listen_n_practice_image_ans = [

            ["singer", "engineer", 'nurse', 'artist', 'postman'],
            ["teacher", "fire-fighter", "student", "doctor", "singer",],

        ];

        $G4_L16_Game885_listen_n_practice_audio = [

            ['This-is-Rose-She-is-a-singer', 'SubBlock_This-is-Mark-He-is-an-enginee', 'SubBlock_This-is-John-He-is-a-nurse-H', 'SubBlock_This-is-Max-He-is-an-artist', 'SubBlock_This-is-Ben-He-is-a-postman'],
            ['SubBlock_This-is-Anna-She-is-a-teacher', 'SubBlock_This-is-Jack-He-is-a-firefigh', 'SubBlock_This-is-Emily-She-is-a-studen', 'SubBlock_This-is-Emma-She-is-a-doctor', 'This-is-Rose-She-is-a-singer']

        ];

        $G4_L16_Game885_listen_n_practice = [

            ['postman', 'nurse', 'artist', "singer", "engineer"],
            ["doctor", "teacher",  "singer", "fire-fighter", "student"],


        ];


        for ($i = 0; $i < count($G4_L16_Game885_listen_n_practice); $i++) {

            foreach ($G4_L16_Game885_listen_n_practice_image_ans[$i] as $key => $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 885, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l16_G885_image .  "speaker.png", 'q_audio' => $AudioDomain . $G4_L16_listen_n_practice . str_replace(' ', '-',  strtolower($G4_L16_Game885_listen_n_practice_audio[$i][$key])) . ".mp3",
                    ]
                ]);
            }
            foreach ($G4_L16_Game885_listen_n_practice[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 885, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l16_G885_image . $q . ".png", 'q_audio' => $AudioDomain . $G4_L16_listen_n_practice .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 16 Game 886 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L16_practice_speaking = "Grade_4/" . "Lesson_16/" . "speaking_practice/";
        $l16_G886image = $domain . "/storage/images/Grade_4/lesson_16/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 886,  'q_image' => $l16_G886image . "emily.png", "q_audio" => $AudioDomain . $G4_L16_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L16_practice_speaking . "SubBlock_Look-at-the-following-informat" . ".mp3",   "q_content" => "Look at the following information in the table.\nTalk about these people."],
            ['round' => 2, 'game_id' => 886,  'q_image' => $l16_G886image . "mark.png", "q_audio" => $AudioDomain . $G4_L16_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L16_practice_speaking . "SubBlock_Look-at-the-following-informat" . ".mp3",  "q_content" => "Look at the following information in the table.\nTalk about these people."],
            ['round' => 3, 'game_id' => 886,  'q_image' => $l16_G886image . "emma.png", "q_audio" => $AudioDomain . $G4_L16_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L16_practice_speaking . "SubBlock_Look-at-the-following-informat" . ".mp3",  "q_content" => "Look at the following information in the table.\nTalk about these people."],
            ['round' => 4, 'game_id' => 886,  'q_image' => $l16_G886image . "rose.png", "q_audio" => $AudioDomain . $G4_L16_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L16_practice_speaking . "SubBlock_Look-at-the-following-informat" . ".mp3",  "q_content" => "Look at the following information in the table.\nTalk about these people."],
            ['round' => 5, 'game_id' => 886,  'q_image' => $l16_G886image . "ben.png", "q_audio" => $AudioDomain . $G4_L16_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L16_practice_speaking . "SubBlock_Look-at-the-following-informat" . ".mp3",  "q_content" => "Look at the following information in the table.\nTalk about these people."],
            ['round' => 6, 'game_id' => 886,  'q_image' => $l16_G886image . "max.png", "q_audio" => $AudioDomain . $G4_L16_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L16_practice_speaking . "SubBlock_Look-at-the-following-informat" . ".mp3",  "q_content" => " Look at the following information in the table.\nTalk about these people."],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 16 Game 887 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L16_speaking_topic = "Grade_4/" . "Lesson_16/" . "speaking_topic/";
        $l16_G887image = $domain . "/storage/images/Grade_4/lesson_16/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 887, "q_conver" => $l16_G887image . "text.png", "round_instruction" => $AudioDomain . $G4_L16_speaking_topic . "SubBlock_Look-at-the-chart-below-and-ta" . ".mp3"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 17 Game 888 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 888, 'a_content' => 'lesson_17_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 888, 'a_content' => 'lesson_17_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 17 Game 889 , 890 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l17_G889_G890_image = $domain . "/storage/images/Grade_4/lesson_17/listen_n_repeat/";
        $G4_L17_listen_n_repeat = "Grade_4/" . "Lesson_17/" . "listen_n_repeat/";

        // Game 889
        $ans_G889 = [
            "Pencil", "Pencil-case", "Eraser", "Marker", "Ruler", "Drawing-book", "Crayons", "Pen", "Sticky-notes", "Highlighter", "Crayon", "Notebook", "Notepad", "Clipboard"
        ];

        foreach ($ans_G889 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 889, 'a_content' => $key, 'a_image' => $l17_G889_G890_image . "1/" . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L17_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }

        // Game 890
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 890, 'a_image' => $l17_G889_G890_image . "girl.gif", "a_audio" => $AudioDomain . $G4_L17_listen_n_repeat . "audio.mp3", "a_conver" => $l17_G889_G890_image . "can-i-help.png", "background" =>  $l17_G889_G890_image . "bg.jpg"],
            ['round' => 1, 'game_id' => 890, 'a_image' => $l17_G889_G890_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L17_listen_n_repeat . "audio.mp3", "a_conver" => $l17_G889_G890_image . "you-have-notebook.png", "background" =>  $l17_G889_G890_image . "bg.jpg"],

            ['round' => 2, 'game_id' => 890, 'a_image' => $l17_G889_G890_image . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L17_listen_n_repeat . "audio.mp3", "a_conver" => $l17_G889_G890_image . "sure-how-many.png", "background" =>  $l17_G889_G890_image . "bg.jpg"],
            ['round' => 2, 'game_id' => 890, 'a_image' => $l17_G889_G890_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L17_listen_n_repeat . "audio.mp3", "a_conver" => $l17_G889_G890_image . "two-please.png", "background" =>  $l17_G889_G890_image . "bg.jpg"],

            ['round' => 3, 'game_id' => 890, 'a_image' => $l17_G889_G890_image . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L17_listen_n_repeat . "audio.mp3", "a_conver" => $l17_G889_G890_image . "here-you.png", "background" =>  $l17_G889_G890_image . "bg.jpg"],
            ['round' => 3, 'game_id' => 890, 'a_image' => $l17_G889_G890_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L17_listen_n_repeat . "audio.mp3", "a_conver" => $l17_G889_G890_image . "thank-y.png", "background" =>  $l17_G889_G890_image . "bg.jpg"],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 17 Game 891 (  Practice  )
        ////////////////////////////////////////////////////////

        $l17_G891_image = $domain . "/storage/images/Grade_4/lesson_17/practice/";
        $G4_L17_practice = "Grade_4/" . "Lesson_17/" . "practice/";


        $G4_L17_Game891_practice = [

            ['clipboard', 'marker', 'notebook', 'notepad', "crayon"],
            ['pencil', 'pencil-case', 'eraser', "ruler",  'drawing-book'],

        ];

        $G4_L17_Game891_practice_image = [

            ["crayon", 'notebook', 'notepad', 'clipboard', 'marker'],
            ["ruler", 'eraser', 'drawing-book',  'pencil', 'pencil-case'],

        ];


        for ($i = 0; $i < count($G4_L17_Game891_practice); $i++) {

            foreach ($G4_L17_Game891_practice[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 891, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G4_L17_practice .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_L17_Game891_practice_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 891, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l17_G891_image . str_replace(' ', '-', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G4_L17_practice . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 17 Game 892 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L17_practice_speaking = "Grade_4/" . "Lesson_17/" . "speaking_practice/";
        $l17_G892image = $domain . "/storage/images/Grade_4/lesson_17/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 892,  'q_image' => $l17_G892image . "notebook.png", "q_audio" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3", "q_content" => "S: Can I help you?\nC: __________________________.\nS: Sure. How many do you want?\nC: __________________________.\nS: Here you are.\nC: Thank you.",   "a_content" => "Sample \nShopkeeper: Can I help you?\nCustomer: Do you have any notebooks?\nShopkeeper: Sure. How many do you want?\nCustomer: Two, please.\nShopkeeper: Here you are.\nCustomer: Thank you."],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 892,  'q_image' => $l17_G892image . "crayon.png", "q_audio" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3",  "q_content" => "S: Can I help you?\nC: __________________________.\nS: Sure. How many do you want?\nC: __________________________.\nS: Here you are.\nC: Thank you."],
            ['round' => 3, 'game_id' => 892,  'q_image' => $l17_G892image . "clipboard.png", "q_audio" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3",  "q_content" => "S: Can I help you?\nC: __________________________.\nS: Sure. How many do you want?\nC: __________________________.\nS: Here you are.\nC: Thank you."],
            ['round' => 4, 'game_id' => 892,  'q_image' => $l17_G892image . "highlighter.png", "q_audio" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3",  "q_content" => "S: Can I help you?\nC: __________________________.\nS: Sure. How many do you want?\nC: __________________________.\nS: Here you are.\nC: Thank you."],
            ['round' => 5, 'game_id' => 892,  'q_image' => $l17_G892image . "pencil-case.png", "q_audio" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3",  "q_content" => "S: Can I help you?\nC: __________________________.\nS: Sure. How many do you want?\nC: __________________________.\nS: Here you are.\nC: Thank you."],
            ['round' => 6, 'game_id' => 892,  'q_image' => $l17_G892image . "eraser.png", "q_audio" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3",  "q_content" => "S: Can I help you?\nC: __________________________.\nS: Sure. How many do you want?\nC: __________________________.\nS: Here you are.\nC: Thank you."],
            ['round' => 7, 'game_id' => 892,  'q_image' => $l17_G892image . "sticky-note.png", "q_audio" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L17_practice_speaking . "" . ".mp3",  "q_content" => "S: Can I help you?\nC: __________________________.\nS: Sure. How many do you want?\nC: __________________________.\nS: Here you are.\nC: Thank you."],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 17 Game 893 ( Listening Practice )
        ////////////////////////////////////////////////////////

        $l17_G893_image = $domain . "/storage/images/Grade_4/lesson_17/listening/";
        $G4_L17_listening = "Grade_4/" . "Lesson_17/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 893,  'q_audio' =>  $AudioDomain . $G4_L17_listening . "Shopkeeper-listening" . ".mp3", "q_conver" => "Where is Anna?", "q_content" => "At train station", "a_content" => 0],
            ['round' => 1, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => "at the cinema", "a_content" => 0],
            ['round' => 1, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => "at the shop", "a_content" => 1],

            ['round' => 2, 'game_id' => 893,  'q_audio' =>  $AudioDomain . $G4_L17_listening . "Shopkeeper-listening" . ".mp3", "q_conver" => "What is Anna looking for?", "q_content" => "Stationery", "a_content" => 1],
            ['round' => 2, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Food", "a_content" => 0],
            ['round' => 2, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Kitchenware", "a_content" => 0],

            ['round' => 3, 'game_id' => 893,  'q_audio' =>  $AudioDomain . $G4_L17_listening . "Shopkeeper-listening" . ".mp3", "q_conver" => "How many notebooks does she need?", "q_content" => 3, "a_content" => 0],
            ['round' => 3, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => 4, "a_content" => 0],
            ['round' => 3, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => 5, "a_content" => 1],

            ['round' => 4, 'game_id' => 893,  'q_audio' =>  $AudioDomain . $G4_L17_listening . "Shopkeeper-listening" . ".mp3", "q_conver" => "How many highlighters does she need?", "q_content" => 2, "a_content" => 0],
            ['round' => 4, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => 3, "a_content" => 1],
            ['round' => 4, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => 4, "a_content" => 0],

            ['round' => 5, 'game_id' => 893,  'q_audio' =>  $AudioDomain . $G4_L17_listening . "Shopkeeper-listening" . ".mp3", "q_conver" => "How many pencil cases has she bought?", "q_content" => 2, "a_content" => 1],
            ['round' => 5, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => 3, "a_content" => 0],
            ['round' => 5, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => 4, "a_content" => 0],

            ['round' => 6, 'game_id' => 893,  'q_audio' =>  $AudioDomain . $G4_L17_listening . "Shopkeeper-listening" . ".mp3", "q_conver" => "How many drawing books has she bought?", "q_content" => 2, "a_content" => 0],
            ['round' => 6, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => 3, "a_content" => 0],
            ['round' => 6, 'game_id' => 893,  'q_audio' =>  null, "q_conver" => null, "q_content" => 4, "a_content" => 1],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 17 Game 894 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L17_speaking_topic = "Grade_4/" . "Lesson_17/" . "speaking_topic/";
        $l17_G894image = $domain . "/storage/images/Grade_4/lesson_17/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 894, "q_conver" => $l17_G894image . "text.png", "round_instruction" => $AudioDomain . $G4_L17_speaking_topic . "SubBlock_Please-make-a-shopping-list-T" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 18 Game 895 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 895, 'a_content' => 'lesson_18_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 895, 'a_content' => 'lesson_18_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 18 Game 896 , 897 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l18_G896_G897_image = $domain . "/storage/images/Grade_4/lesson_18/listen_n_repeat/";
        $G4_L18_listen_n_repeat = "Grade_4/" . "Lesson_18/" . "listen_n_repeat/";

        $ans_G896 = [
            "Cake", "Toy-robot", "Doll", "T-shirt", "Skirt", "Fruits", "Kite", "Shorts", "Shoes", "Bread", "Chocolate", "Flowers", "Slippers"
        ];

        foreach ($ans_G896 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 896, 'a_content' => $key, 'a_image' => $l18_G896_G897_image . "1/" .  $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L18_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }

        $ansL18_G897 = [
            ["toy-robot", "toy-shop"],
            ["kite", "toy-shop"],
            ["book", "stationery-shop"],
            ["skirt", "fashion-shop"],
            ["fruits", "mart"],
            ["flower", "floral-shop"],
            ["bread", "bakery"],
            ["shoes", "fashion-shop"],
            ["shorts", "fashion-shop"],
            ["chocolate", "mart"],
        ];

        for ($i = 0; $i < count($ansL18_G897); $i++) {
            for ($j = 0; $j < count($ansL18_G897[$i]); $j++) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 897,
                        'a_content' => $ansL18_G897[$i][$j],
                        'a_image' => $l18_G896_G897_image . "2/" .  $ansL18_G897[$i][$j] . ".png",
                        'a_audio' => $AudioDomain . $G4_L18_listen_n_repeat . strtolower($ansL18_G897[$i][$j]) . ".mp3",
                        'q_content' => $i,
                    ],
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 18 Game 898   (  Practice  )
        ////////////////////////////////////////////////////////

        $l18_G898_image = $domain . "/storage/images/Grade_4/lesson_18/practice/";
        $G4_L18_practice_path = "Grade_4/" . "Lesson_18/" . "practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 898, 'q_image' => $l18_G898_image .  "cake.png",  "q_content" => "Stationery shop", "a_content" => 0],
            ['round' => 1, 'game_id' => 898, 'q_image' => null, "q_content" => "Kite shop", "a_content" => 0],
            ['round' => 1, 'game_id' => 898, 'q_image' => null, "q_content" => "Bakery", "a_content" => 1],

            ['round' => 2, 'game_id' => 898, 'q_image' => $l18_G898_image .  "flower.png",  "q_content" => "Shoes shop", "a_content" => 0],
            ['round' => 2, 'game_id' => 898, 'q_image' => null, "q_content" => "Fashion shop", "a_content" => 0],
            ['round' => 2, 'game_id' => 898, 'q_image' => null, "q_content" => "Floral shop", "a_content" => 1],

            ['round' => 3, 'game_id' => 898, 'q_image' => $l18_G898_image .  "shoe.png",  "q_content" => "Bakery", "a_content" => 0],
            ['round' => 3, 'game_id' => 898, 'q_image' => null, "q_content" => "Shoes shop", "a_content" => 1],
            ['round' => 3, 'game_id' => 898, 'q_image' => null, "q_content" => "Toy shop", "a_content" => 0],

            ['round' => 4, 'game_id' => 898, 'q_image' => $l18_G898_image .  "kite.png",  "q_content" => "Stationery shop", "a_content" => 0],
            ['round' => 4, 'game_id' => 898, 'q_image' => null, "q_content" => "Kite shop", "a_content" => 1],
            ['round' => 4, 'game_id' => 898, 'q_image' => null, "q_content" => "Bakery", "a_content" => 0],

            ['round' => 5, 'game_id' => 898, 'q_image' => $l18_G898_image .  "robot.png",  "q_content" => "Stationery shop", "a_content" => 0],
            ['round' => 5, 'game_id' => 898, 'q_image' => null, "q_content" => "Toy shop", "a_content" => 1],
            ['round' => 5, 'game_id' => 898, 'q_image' => null, "q_content" => "Kite shop", "a_content" => 0],

            ['round' => 6, 'game_id' => 898, 'q_image' => $l18_G898_image .  "bread.png",  "q_content" => "Toy shop", "a_content" => 0],
            ['round' => 6, 'game_id' => 898, 'q_image' => null, "q_content" => "Fashion shop", "a_content" => 0],
            ['round' => 6, 'game_id' => 898, 'q_image' => null, "q_content" => "Bakery", "a_content" => 1],

            ['round' => 7, 'game_id' => 898, 'q_image' => $l18_G898_image .  "fruit.png",  "q_content" => "Mart", "a_content" => 1],
            ['round' => 7, 'game_id' => 898, 'q_image' => null, "q_content" => "Fashion shop", "a_content" => 0],
            ['round' => 7, 'game_id' => 898, 'q_image' => null, "q_content" => "Bakery", "a_content" => 0],

            ['round' => 8, 'game_id' => 898, 'q_image' => $l18_G898_image .  "book.png",  "q_content" => "Stationery shop", "a_content" => 1],
            ['round' => 8, 'game_id' => 898, 'q_image' => null, "q_content" => "Toy shop", "a_content" => 0],
            ['round' => 8, 'game_id' => 898, 'q_image' => null, "q_content" => "Kite shop", "a_content" => 0],

            ['round' => 9, 'game_id' => 898, 'q_image' => $l18_G898_image .  "t-shirt.png",  "q_content" => "Floral shop", "a_content" => 0],
            ['round' => 9, 'game_id' => 898, 'q_image' => null, "q_content" => "Stationery shop", "a_content" => 0],
            ['round' => 9, 'game_id' => 898, 'q_image' => null, "q_content" => "Fashion shop", "a_content" => 1],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 18 Game 899 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L18_practice_speaking = "Grade_4/" . "Lesson_18/" . "speaking_practice/";
        $l18_G899image = $domain . "/storage/images/Grade_4/lesson_18/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 899,  'q_image' => $l18_G899image . "stationery.png", "q_audio" => $AudioDomain . $G4_L18_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L18_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3", "q_content" => "You can buy __________ \n _________________.",  "a_content" => "Sample \nYou can buy pencils, crayons, and books \nat a stationery shop."],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 899,  'q_image' => $l18_G899image . "bakery.png", "q_audio" => $AudioDomain . $G4_L18_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L18_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "You can buy __________ \n _________________."],
            ['round' => 3, 'game_id' => 899,  'q_image' => $l18_G899image . "fashion.png", "q_audio" => $AudioDomain . $G4_L18_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L18_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "You can buy __________ \n _________________."],
            ['round' => 4, 'game_id' => 899,  'q_image' => $l18_G899image . "fashion-shirt.png", "q_audio" => $AudioDomain . $G4_L18_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L18_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "You can buy __________ \n _________________."],
            ['round' => 5, 'game_id' => 899,  'q_image' => $l18_G899image . "flower.png", "q_audio" => $AudioDomain . $G4_L18_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L18_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "You can buy __________ \n _________________."],
            ['round' => 6, 'game_id' => 899,  'q_image' => $l18_G899image . "mart.png", "q_audio" => $AudioDomain . $G4_L18_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L18_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => " You can buy __________ \n _________________."],
            ['round' => 7, 'game_id' => 899,  'q_image' => $l18_G899image . "toy.png", "q_audio" => $AudioDomain . $G4_L18_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L18_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => " You can buy __________ \n _________________."],
        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 18 Game 900 ( Listening Practice )
        ////////////////////////////////////////////////////////

        $l18_G900_image = $domain . "/storage/images/Grade_4/lesson_18/listening/";
        $G4_L18_listening = "Grade_4/" . "Lesson_18/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 900,  'q_audio' =>  $AudioDomain . $G4_L18_listening . "SubBlock_Ben-goes-to-a-stationery-shop" . ".mp3", "q_conver" => "Where does Ben go?", "q_content" => "A bakery", "a_content" => 0],
            ['round' => 1, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A stationery", "a_content" => 1],
            ['round' => 1, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A toy shop", "a_content" => 0],

            ['round' => 2, 'game_id' => 900,  'q_audio' =>  $AudioDomain . $G4_L18_listening . "SubBlock_Ben-goes-to-a-stationery-shop" . ".mp3", "q_conver" => "How many pencil cases does he buy?", "q_content" => 1, "a_content" => 1],
            ['round' => 2, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => 3, "a_content" => 0],
            ['round' => 2, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => 4, "a_content" => 0],

            ['round' => 3, 'game_id' => 900,  'q_audio' =>  $AudioDomain . $G4_L18_listening . "SubBlock_Ben-goes-to-a-stationery-shop" . ".mp3", "q_conver" => "Which shop does Emma go to?", "q_content" => "A bakery", "a_content" => 1],
            ['round' => 3, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A stationery", "a_content" => 0],
            ['round' => 3, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A toy shop", "a_content" => 0],

            ['round' => 4, 'game_id' => 900,  'q_audio' =>  $AudioDomain . $G4_L18_listening . "SubBlock_Ben-goes-to-a-stationery-shop" . ".mp3", "q_conver" => "What kind of cake does she buy?", "q_content" => "A strawberry", "a_content" => 0],
            ['round' => 4, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A vanilla", "a_content" => 0],
            ['round' => 4, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A chocolate", "a_content" => 1],

            ['round' => 5, 'game_id' => 900,  'q_audio' =>  $AudioDomain . $G4_L18_listening . "SubBlock_Ben-goes-to-a-stationery-shop" . ".mp3", "q_conver" => "Where does Max go to?", "q_content" => "A bakery", "a_content" => 0],
            ['round' => 5, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A stationery", "a_content" => 0],
            ['round' => 5, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A toy shop", "a_content" => 1],

            ['round' => 6, 'game_id' => 900,  'q_audio' =>  $AudioDomain . $G4_L18_listening . "SubBlock_Ben-goes-to-a-stationery-shop" . ".mp3", "q_conver" => "Which toy does he buy for his litter sister?", "q_content" => "A toy robot", "a_content" => 0],
            ['round' => 6, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A toy barbie", "a_content" => 1],
            ['round' => 6, 'game_id' => 900,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A toy bear", "a_content" => 0],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 18 Game 901 (  Practice  )
        ////////////////////////////////////////////////////////

        $l18_G901_image = $domain . "/storage/images/Grade_4/lesson_18/reading_passage/";
        $G4_L18_reading_passage_path = "Grade_4/" . "Lesson_18/" . "reading_passage/";

        $l18_G901_q_audio = [
            "SubBlock_How-many-pineapples-did-Maxs",
            "SubBlock_How-many-oranges-did-she-buy",
            "SubBlock_What-kind-of-cake-did-his-moth",
            "SubBlock_What-kind-of-flowers-did-his-m",
            "SubBlock_What-kind-of-toys-did-his-moth",
            "SubBlock_Why-did-she-buy-it-for-him-He"
        ];
        $l18_G901_q_conver = [
            "How many pineapples did Max's mom buy?",
            "How many oranges did she buy?",
            "What kind of cake did his mother buy him?",
            "What kind of flowers did his mother buy at the floral shop?",
            "What kind of toys did his mother buy Max?",
            "Why did she buy it for him?",
        ];
        $l18_G901_q_audio_ans = [
            ["1", "2", "3"],
            ["3", "4", "5"],
            ["Chocolate", "Vanilla", "Strawberry"],
            ["Rose", "Orchid", "Tulips"],
            ["A toy car", "A toy bear", "A toy robot"],
            ["He helped his mother", "He helped his friend", "He helped his sister"]
        ];
        $l18_G901_q_audio_a_content = [
            [1, 0, 0],
            [0, 0, 1],
            [1, 0, 0],
            [1, 0, 0],
            [0, 0, 1],
            [0, 1, 0],
        ];


        for ($i = 0; $i < count($l18_G901_q_audio); $i++) {

            foreach ($l18_G901_q_audio_ans[$i] as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 901, "q_audio" => $AudioDomain . $G4_L18_reading_passage_path . str_replace(' ', '-', strtolower($val)) . ".mp3", 'q_content' => $val, "q_conver" => null, 'a_content' => $l18_G901_q_audio_a_content[$i][$key], "background" => null],
                ]);
            }

            foreach ($l18_G901_q_audio as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 901, "q_audio" => $AudioDomain . $G4_L18_reading_passage_path . $val . ".mp3", "q_conver" => $l18_G901_q_conver[$key], 'q_content' => null, 'a_content' => null, "background" => null],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 901, "q_audio" => $AudioDomain . $G4_L18_reading_passage_path . "SubBlock_Last-Sunday-Max-went-shopping" . ".mp3", "q_conver" => "Last Sunday, Max went shopping with his mom. Max was excited to go there as he wanted to buy a toy robot.  At the mart, Max's mom bought some fruits;\n 5 apples, 1 pineapple, some bananas, 1 watermelon, and 5 oranges. And then, she went to the bakery shop. \nMax asked his mom, “Mom, can you buy me a chocolate cake, please? It looks yummy.” \nMom smiled, “Okay, Max. Only one, right?”\nMax was happy. After buying the chocolate cake, Max's mom went to the floral shop and bought a bouquet of roses. It was so beautiful and colorful. Finally, they went to the toy shop.\nMax got a toy robot as his mother promised him to buy it if he helped his friends, and studies hard. He did it! It was a lovely day.",
                    'q_content' => "Going Shopping", "background" => $l18_G901_image . "bg.png"
                ],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 18 Game 902 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L18_speaking_topic = "Grade_4/" . "Lesson_18/" . "speaking_topic/";
        $l18_G902image = $domain . "/storage/images/Grade_4/lesson_18/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 902, "q_image" =>  $l18_G902image . "green-star.png", "q_content" => "Talk about your favorite shop. \nWhere is it? What can you buy there?\nMy favorite shop is ______.\nIt is ______.\nI can buy ______.\nI like it because ______.", "round_instruction" => $AudioDomain . $G4_L18_speaking_topic . "SubBlock_Talk-about-your-favorite-shop" . ".mp3"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 18 Game 903 (  Writing Topic )
        //////////////////////////////////////////////////////////////

        $G4_L18_Game903_ans = "My favorite shop is a toy shop. It is in Mandalay. I can buy toy robots, toy bears, toy cars, and toy barbies. I like this shop because it is big and nice.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 903, 'q_content' => "My favorite shop is _______________________. It is in ____________________.\nI can buy ___________, ____________, and ________________________. \nI like this shop because ___________________.", 'a_content' => $G4_L18_Game903_ans],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 19 Game 904 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 904, 'a_content' => 'lesson_19_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 904, 'a_content' => 'lesson_19_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 19 Game 905 , 906 (  Liaten and Repeat  )
        ////////////////////////////////////////////////////////

        $l19_G905_G906_image = $domain . "/storage/images/Grade_4/lesson_19/listen_n_repeat/";
        $G4_L19_listen_n_repeat = "Grade_4/" . "Lesson_19/" . "listen_n_repeat/";

        // Game 905
        $ans_G905 = [
            "100", "200", "300", "400", "500", "600", "700", "800", "900", "Kyat", "Dollar", "Pound", "Euro", "Yen", "Yuan", "Baht"
        ];

        foreach ($ans_G905 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 905, 'a_content' => $key, 'a_image' => $l19_G905_G906_image . "1/" .  $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L19_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }


        // Game 906
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 906, 'a_image' => $l19_G905_G906_image . "2/" . "girl.gif", "a_audio" => $AudioDomain . $G4_L19_listen_n_repeat . "audio.mp3", "a_conver" => $l19_G905_G906_image . "how-much-is-it.png", "background" =>  $l19_G905_G906_image . "2/" . "bg.jpg"],
            ['round' => 1, 'game_id' => 906, 'a_image' => $l19_G905_G906_image . "2/" . "boy.gif", "a_audio" => $AudioDomain . $G4_L19_listen_n_repeat . "audio.mp3", "a_conver" => $l19_G905_G906_image . "20-dollar.png", "background" =>  $l19_G905_G906_image . "2/" . "bg.jpg"],

            ['round' => 2, 'game_id' => 906, 'a_image' => $l19_G905_G906_image . "2/" . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L19_listen_n_repeat . "audio.mp3", "a_conver" => $l19_G905_G906_image . "how-much-book.png", "background" =>  $l19_G905_G906_image . "2/" . "bg.jpg"],
            ['round' => 2, 'game_id' => 906, 'a_image' => $l19_G905_G906_image . "2/" . "boy.gif", "a_audio" => $AudioDomain . $G4_L19_listen_n_repeat . "audio.mp3", "a_conver" => $l19_G905_G906_image . "100-dollar.png", "background" =>  $l19_G905_G906_image . "2/" . "bg.jpg"],

            ['round' => 3, 'game_id' => 906, 'a_image' => $l19_G905_G906_image . "2/" . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L19_listen_n_repeat . "audio.mp3", "a_conver" => $l19_G905_G906_image . "how-much-shirt.png", "background" =>  $l19_G905_G906_image . "2/" . "bg.jpg"],
            ['round' => 3, 'game_id' => 906, 'a_image' => $l19_G905_G906_image . "2/" . "boy.gif", "a_audio" => $AudioDomain . $G4_L19_listen_n_repeat . "audio.mp3", "a_conver" => $l19_G905_G906_image . "500-dollar.png", "background" =>  $l19_G905_G906_image . "2/" . "bg.jpg"],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 19 Game 907 , 908  ( Practice )
        //////////////////////////////////////////////////////////////

        $G3_L19_practice_path = "Grade_4/" . "Lesson_19/" . "practice/";
        $l19_G907_G908_image = $domain . "/storage/images/Grade_4/lesson_19/practice/";

        // Game 907
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 100, "q_conver" => null, 'a_content' => 1],
            ['round' => 1, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 200, "q_conver" => null, 'a_content' => 0],
            ['round' => 1, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 300, "q_conver" => null, 'a_content' => 0],
            ['round' => 1, 'game_id' => 907, "q_image" => $l19_G907_G908_image . "1.png", "q_audio" => $AudioDomain . $G3_L19_practice_path . "100.mp3", "q_content" => null, 'q_conver' => "Choose the right words \nfor the given picture.", 'a_content' => null],

            ['round' => 2, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 100, "q_conver" => null, 'a_content' => 0],
            ['round' => 2, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 200, "q_conver" => null, 'a_content' => 1],
            ['round' => 2, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 300, "q_conver" => null, 'a_content' => 0],
            ['round' => 2, 'game_id' => 907, "q_image" => $l19_G907_G908_image . "2.png", "q_audio" => $AudioDomain . $G3_L19_practice_path . "100.mp3", "q_content" => null, 'q_conver' => "Choose the right words \nfor the given picture.", 'a_content' => null],

            ['round' => 3, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 100, "q_conver" => null, 'a_content' => 0],
            ['round' => 3, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 200, "q_conver" => null, 'a_content' => 0],
            ['round' => 3, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 300, "q_conver" => null, 'a_content' => 1],
            ['round' => 3, 'game_id' => 907, "q_image" => $l19_G907_G908_image . "3.png", "q_audio" => $AudioDomain . $G3_L19_practice_path . "300.mp3", "q_content" => null, 'q_conver' => "Choose the right words \nfor the given picture.", 'a_content' => null],

            ['round' => 4, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 400, "q_conver" => null, 'a_content' => 1],
            ['round' => 4, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 500, "q_conver" => null, 'a_content' => 0],
            ['round' => 4, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 600, "q_conver" => null, 'a_content' => 0],
            ['round' => 4, 'game_id' => 907, "q_image" => $l19_G907_G908_image . "4.png", "q_audio" => $AudioDomain . $G3_L19_practice_path . "400.mp3", "q_content" => null, 'q_conver' => "Choose the right words \nfor the given picture.", 'a_content' => null],

            ['round' => 5, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 400, "q_conver" => null, 'a_content' => 0],
            ['round' => 5, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 500, "q_conver" => null, 'a_content' => 1],
            ['round' => 5, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 600, "q_conver" => null, 'a_content' => 0],
            ['round' => 5, 'game_id' => 907, "q_image" => $l19_G907_G908_image . "5.png", "q_audio" => $AudioDomain . $G3_L19_practice_path . "500.mp3", "q_content" => null, 'q_conver' => "Choose the right words \nfor the given picture.", 'a_content' => null],

            ['round' => 6, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 400, "q_conver" => null, 'a_content' => 0],
            ['round' => 6, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 500, "q_conver" => null, 'a_content' => 0],
            ['round' => 6, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 600, "q_conver" => null, 'a_content' => 1],
            ['round' => 6, 'game_id' => 907, "q_image" => $l19_G907_G908_image . "6.png", "q_audio" => $AudioDomain . $G3_L19_practice_path . "600.mp3", "q_content" => null, 'q_conver' => "Choose the right words \nfor the given picture.", 'a_content' => null],

            ['round' => 7, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 700, "q_conver" => null, 'a_content' => 1],
            ['round' => 7, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 800, "q_conver" => null, 'a_content' => 0],
            ['round' => 7, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 900, "q_conver" => null, 'a_content' => 0],
            ['round' => 7, 'game_id' => 907, "q_image" => $l19_G907_G908_image . "7.png", "q_audio" => $AudioDomain . $G3_L19_practice_path . "700.mp3", "q_content" => null, 'q_conver' => "Choose the right words \nfor the given picture.", 'a_content' => null],

            ['round' => 8, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 700, "q_conver" => null, 'a_content' => 0],
            ['round' => 8, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 800, "q_conver" => null, 'a_content' => 1],
            ['round' => 8, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 900, "q_conver" => null, 'a_content' => 0],
            ['round' => 8, 'game_id' => 907, "q_image" => $l19_G907_G908_image . "8.png", "q_audio" => $AudioDomain . $G3_L19_practice_path . "800.mp3", "q_content" => null, 'q_conver' => "Choose the right words \nfor the given picture.", 'a_content' => null],

            ['round' => 9, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 700, "q_conver" => null, 'a_content' => 0],
            ['round' => 9, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 800, "q_conver" => null, 'a_content' => 0],
            ['round' => 9, 'game_id' => 907, "q_image" => null, "q_audio" =>  null, 'q_content' => 900, "q_conver" => null, 'a_content' => 1],
            ['round' => 9, 'game_id' => 907, "q_image" => $l19_G907_G908_image . "9.png", "q_audio" => $AudioDomain . $G3_L19_practice_path . "900.mp3", "q_content" => null, 'q_conver' => "Choose the right words \nfor the given picture.", 'a_content' => null],

        ]);

        // Game 908
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 908, 'q_image' => $l19_G907_G908_image .  "can-I-help-you.png",  "q_content" => "Customer", "a_content" => 0],
            ['round' => 1, 'game_id' => 908, 'q_image' => null, "q_content" => "Shopkeeper", "a_content" => 1],

            ['round' => 2, 'game_id' => 908, 'q_image' => $l19_G907_G908_image .  "do-you-have.png",  "q_content" => "Customer", "a_content" => 1],
            ['round' => 2, 'game_id' => 908, 'q_image' => null, "q_content" => "Shopkeeper", "a_content" => 0],

            ['round' => 3, 'game_id' => 908, 'q_image' => $l19_G907_G908_image .  "here-you-are.png",  "q_content" => "Customer", "a_content" => 0],
            ['round' => 3, 'game_id' => 908, 'q_image' => null, "q_content" => "Shopkeeper", "a_content" => 1],

            ['round' => 4, 'game_id' => 908, 'q_image' => $l19_G907_G908_image .  "hom-much-is-this.png",  "q_content" => "Customer", "a_content" => 1],
            ['round' => 4, 'game_id' => 908, 'q_image' => null, "q_content" => "Shopkeeper", "a_content" => 0],

            ['round' => 5, 'game_id' => 908, 'q_image' => $l19_G907_G908_image .  "I-want.png",  "q_content" => "Customer", "a_content" => 1],
            ['round' => 5, 'game_id' => 908, 'q_image' => null, "q_content" => "Shopkeeper", "a_content" => 0],

            ['round' => 6, 'game_id' => 908, 'q_image' => $l19_G907_G908_image .  "please-visit-next-time.png",  "q_content" => "Customer", "a_content" => 0],
            ['round' => 6, 'game_id' => 908, 'q_image' => null, "q_content" => "Shopkeeper", "a_content" => 1],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 19 Game 909 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L19_practice_speaking = "Grade_4/" . "Lesson_19/" . "speaking_practice/";
        $l19_G909image = $domain . "/storage/images/Grade_4/lesson_19/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 909,  'q_image' => $l19_G909image . "marker.png", "q_audio" => $AudioDomain . $G4_L19_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L19_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3", "q_content" => "How much is the marker?\n ________________________.",  "a_content" => "Sample \nHow much is the marker?\nIt's 30 dollars."],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 909,  'q_image' => $l19_G909image . "cake.png", "q_audio" => $AudioDomain . $G4_L19_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L19_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "How much is the cake?\n ________________________."],
            ['round' => 3, 'game_id' => 909,  'q_image' => $l19_G909image . "shoes.png", "q_audio" => $AudioDomain . $G4_L19_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L19_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "How much are the shoes?\n ________________________."],
            ['round' => 4, 'game_id' => 909,  'q_image' => $l19_G909image . "pencil-case.png", "q_audio" => $AudioDomain . $G4_L19_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L19_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "How much is the pencil-case?\n ________________________."],
            ['round' => 5, 'game_id' => 909,  'q_image' => $l19_G909image . "skirt.png", "q_audio" => $AudioDomain . $G4_L19_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L19_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "________________________?\n ________________________."],
            ['round' => 6, 'game_id' => 909,  'q_image' => $l19_G909image . "robot.png", "q_audio" => $AudioDomain . $G4_L19_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L19_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => " ________________________?\n ________________________."],
            ['round' => 7, 'game_id' => 909,  'q_image' => $l19_G909image . "shorts.png", "q_audio" => $AudioDomain . $G4_L19_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L19_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => " How much are the shorts?\n ________________________."],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 19 Game 910 ( Listening Practice )
        ////////////////////////////////////////////////////////

        $l19_G910_image = $domain . "/storage/images/Grade_4/lesson_19/listening/";
        $G4_L19_listening = "Grade_4/" . "Lesson_19/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 910,  'q_audio' =>  $AudioDomain . $G4_L19_listening . "SubBlock_I-went-shopping-with-my-sister" . ".mp3", "q_conver" => "Where did Anna go?", "q_content" => "Mart", "a_content" => 0],
            ['round' => 1, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Supermarket", "a_content" => 1],
            ['round' => 1, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Store", "a_content" => 0],

            ['round' => 2, 'game_id' => 910,  'q_audio' =>  $AudioDomain . $G4_L19_listening . "SubBlock_I-went-shopping-with-my-sister" . ".mp3", "q_conver" => "What color T-shirt did she buy?", "q_content" => "Blue", "a_content" => 0],
            ['round' => 2, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Green", "a_content" => 0],
            ['round' => 2, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Pink", "a_content" => 1],

            ['round' => 3, 'game_id' => 910,  'q_audio' =>  $AudioDomain . $G4_L19_listening . "SubBlock_I-went-shopping-with-my-sister" . ".mp3", "q_conver" => "How much was the T-shirt?", "q_content" => 200, "a_content" => 0],
            ['round' => 3, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => 300, "a_content" => 1],
            ['round' => 3, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => 400, "a_content" => 0],

            ['round' => 4, 'game_id' => 910,  'q_audio' =>  $AudioDomain . $G4_L19_listening . "SubBlock_I-went-shopping-with-my-sister" . ".mp3", "q_conver" => "What else did she buy to wear with the T-shirt?", "q_content" => "Jeans", "a_content" => 0],
            ['round' => 4, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Shorts", "a_content" => 0],
            ['round' => 4, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Skirt", "a_content" => 1],

            ['round' => 5, 'game_id' => 910,  'q_audio' =>  $AudioDomain . $G4_L19_listening . "SubBlock_I-went-shopping-with-my-sister" . ".mp3", "q_conver" => "How much was it?", "q_content" => 200, "a_content" => 1],
            ['round' => 5, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => 300, "a_content" => 0],
            ['round' => 5, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => 400, "a_content" => 0],

            ['round' => 6, 'game_id' => 910,  'q_audio' =>  $AudioDomain . $G4_L19_listening . "SubBlock_I-went-shopping-with-my-sister" . ".mp3", "q_conver" => "How much was the cake?", "q_content" => 100, "a_content" => 1],
            ['round' => 6, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => 200, "a_content" => 0],
            ['round' => 6, 'game_id' => 910,  'q_audio' =>  null, "q_conver" => null, "q_content" => 300, "a_content" => 0],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 19 Game 911 (  Reading Practice  )
        ////////////////////////////////////////////////////////

        $l19_G911_image = $domain . "/storage/images/Grade_4/lesson_19/reading_passage/";
        $G4_L19_reading_passage_path = "Grade_4/" . "Lesson_19/" . "reading_passage/";

        $l19_G911_q_audio = [
            "SubBlock_What-does-the-boy-take-when-he",
            "SubBlock_What-do-they-buy-for-tomorrow",
            "SubBlock_What-fruit-does-he-like-the-be",
            "SubBlock_Which-color-egg-does-his-mothe",
            "SubBlock_What-do-they-buy-all-these-thi",
            "SubBlock_What-do-they-do-when-they-get"
        ];
        $l19_G911_q_conver = [
            "What does the boy take when he is at the supermarket?",
            "What do they buy for tomorrow?",
            "What fruit does he like the best?",
            "Which color egg does his mother like?",
            "What do they buy all these things for?",
            "What do they do when they get home?",
        ];
        $l19_G911_q_audio_ans = [
            ["Shopping basket", "Shopping cart", "Shopping bag"],
            ["Chicken", "Hamburger", "Pork chops"],
            ["Oranges", "Apples", "Grapes"],
            ["White", "Brown", "Yellow"],
            ["Tomorrow is his mother's birthday.", "Tomorrow is his father'birthday.", "Tomorrow is his birthday."],
            ["Bake some bread", "Make a cake", "Make ice cream"]
        ];
        $l19_G911_q_audio_a_content = [
            [0, 1, 0],
            [0, 1, 0],
            [0, 0, 1],
            [0, 1, 0],
            [0, 0, 1],
            [0, 1, 0],
        ];


        for ($i = 0; $i < count($l19_G911_q_audio); $i++) {

            foreach ($l19_G911_q_audio_ans[$i] as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 911, "q_audio" => $AudioDomain . $G4_L19_reading_passage_path . str_replace(' ', '-', strtolower($val)) . ".mp3", 'q_content' => $val, "q_conver" => null, 'a_content' => $l19_G911_q_audio_a_content[$i][$key], "background" => null],
                ]);
            }

            foreach ($l19_G911_q_audio as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 911, "q_audio" => $AudioDomain . $G4_L19_reading_passage_path . $val . ".mp3", "q_conver" => $l19_G911_q_conver[$key], 'q_content' => null, 'a_content' => null, "background" => null],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 911, "q_audio" => $AudioDomain . $G4_L19_reading_passage_path . "Block_I-like-the-way-the-door-opens" . ".mp3", "q_conver" => "I like the way the door opens all by itself at the supermarket.\nWe take shopping cart and get our meat.\nThere is chicken for tonight, hamburger for tomorrow and pork chops for Wednesday.\nWe get onions, lettuce, grapes, oranges, carrots, apples, and potatoes.\nI like grapes best.\nWe take a big jar of peanut butter and a loaf of bread.We go to the diary case. It's very cold. We get milk and butter and eggs and cheese. My mother likes brown egg best.\nWe get flour, sugar, baking powder, vanilla, and candleholders with yellow candles.\nBecause tomorrow is my birthday. I'm going to have a party!\nAs soon as we get home, I help everything put away.\nThen, I say…\n\"Now, can we make a cake, please?\"\nAnd, that's exactly what we do.",
                    'a_content' => null, "q_content" => "At the Supermarket", "background" => $l19_G911_image . "bg.png"
                ],
            ]);
        }

        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 19 Game 912 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L19_speaking_topic = "Grade_4/" . "Lesson_19/" . "speaking_topic/";
        $l19_G912image = $domain . "/storage/images/Grade_4/lesson_19/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 912, "q_image" =>  $l19_G912image . "green-star.png", "q_content" => "You are at the stationery shop. \nYou want 1 notebook, 3 pens, and 5 pencils.\nAsk the shopkeeper and talk about it.", "round_instruction" => $AudioDomain . $G4_L19_speaking_topic . "SubBlock_You-are-at-the-stationery-shop" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 20 Game 913 ( video )
        //////////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 913, 'a_content' => 'lesson_20_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 913, 'a_content' => 'lesson_20_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 20 Game 914 , 915 (  Liaten and Repeat  )
        ////////////////////////////////////////////////////////

        $l20_G914_G915_image = $domain . "/storage/images/Grade_4/lesson_20/listen_n_repeat/";
        $G4_L20_listen_n_repeat = "Grade_4/" . "Lesson_20/" . "listen_n_repeat/";

        // Game 914
        $ans_G914 = [
            "1000", "2000", "3000", "4000", "5000", "6000", "7000", "8000", "9000"
        ];

        foreach ($ans_G914 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 914, 'a_content' => $key, 'a_image' => $l20_G914_G915_image . "1/" .  $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L20_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }

        // Game 915
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 915, 'a_image' => $l20_G914_G915_image . "2/" . "girl.gif", "a_audio" => $AudioDomain . $G4_L20_listen_n_repeat . "audio.mp3", "a_conver" => $l20_G914_G915_image . "can-i-help-u.png", "background" =>  $l20_G914_G915_image . "2/" . "bg.jpg"],
            ['round' => 1, 'game_id' => 915, 'a_image' => $l20_G914_G915_image . "2/" . "boy.gif", "a_audio" => $AudioDomain . $G4_L20_listen_n_repeat . "audio.mp3", "a_conver" => $l20_G914_G915_image . "i-want-some.png", "background" =>  $l20_G914_G915_image . "2/" . "bg.jpg"],

            ['round' => 2, 'game_id' => 915, 'a_image' => $l20_G914_G915_image . "2/" . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L20_listen_n_repeat . "audio.mp3", "a_conver" => $l20_G914_G915_image . "yes-we-do.png", "background" =>  $l20_G914_G915_image . "2/" . "bg.jpg"],
            ['round' => 2, 'game_id' => 915, 'a_image' => $l20_G914_G915_image . "2/" . "boy.gif", "a_audio" => $AudioDomain . $G4_L20_listen_n_repeat . "audio.mp3", "a_conver" => $l20_G914_G915_image . "how-much.png", "background" =>  $l20_G914_G915_image . "2/" . "bg.jpg"],

            ['round' => 3, 'game_id' => 915, 'a_image' => $l20_G914_G915_image . "2/" . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L20_listen_n_repeat . "audio.mp3", "a_conver" => $l20_G914_G915_image . "500-kyat.png", "background" =>  $l20_G914_G915_image . "2/" . "bg.jpg"],
            ['round' => 3, 'game_id' => 915, 'a_image' => $l20_G914_G915_image . "2/" . "boy.gif", "a_audio" => $AudioDomain . $G4_L20_listen_n_repeat . "audio.mp3", "a_conver" => $l20_G914_G915_image . "i-want-six.png", "background" =>  $l20_G914_G915_image . "2/" . "bg.jpg"],

            ['round' => 4, 'game_id' => 915, 'a_image' => $l20_G914_G915_image . "2/" . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L20_listen_n_repeat . "audio.mp3", "a_conver" => $l20_G914_G915_image . "3000-kyat.png", "background" =>  $l20_G914_G915_image . "2/" . "bg.jpg"],
            ['round' => 4, 'game_id' => 915, 'a_image' => $l20_G914_G915_image . "2/" . "boy.gif", "a_audio" => $AudioDomain . $G4_L20_listen_n_repeat . "audio.mp3", "a_conver" => $l20_G914_G915_image . "here-you-are.png", "background" =>  $l20_G914_G915_image . "2/" . "bg.jpg"],

            ['round' => 5, 'game_id' => 915, 'a_image' => $l20_G914_G915_image . "2/" . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L20_listen_n_repeat . "audio.mp3", "a_conver" => $l20_G914_G915_image . "thank-u.png", "background" =>  $l20_G914_G915_image . "2/" . "bg.jpg"],
            ['round' => 5, 'game_id' => 915, 'a_image' => $l20_G914_G915_image . "2/" . "boy.gif", "a_audio" => null, "a_conver" => null, "background" =>  $l20_G914_G915_image . "2/" . "bg.jpg"],

        ]);

        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 20 Game 916  ( Practice )
        //////////////////////////////////////////////////////////////

        $G3_L20_practice_path = "Grade_4/" . "Lesson_20/" . "practice/";
        $l20_G916_image = $domain . "/storage/images/Grade_4/lesson_20/practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 916, 'q_image' => $l20_G916_image .  "4000.png",  "q_content" => "2000", "a_content" => 0],
            ['round' => 1, 'game_id' => 916, 'q_image' => null, "q_content" => "3000", "a_content" => 0],
            ['round' => 1, 'game_id' => 916, 'q_image' => null, "q_content" => "4000", "a_content" => 1],

            ['round' => 2, 'game_id' => 916, 'q_image' => $l20_G916_image .  "7000.png",  "q_content" => "5000", "a_content" => 0],
            ['round' => 2, 'game_id' => 916, 'q_image' => null, "q_content" => "6000", "a_content" => 0],
            ['round' => 2, 'game_id' => 916, 'q_image' => null, "q_content" => "7000", "a_content" => 1],

            ['round' => 3, 'game_id' => 916, 'q_image' => $l20_G916_image .  "8000.png",  "q_content" => "6000", "a_content" => 0],
            ['round' => 3, 'game_id' => 916, 'q_image' => null, "q_content" => "7000", "a_content" => 0],
            ['round' => 3, 'game_id' => 916, 'q_image' => null, "q_content" => "8000", "a_content" => 1],

            ['round' => 4, 'game_id' => 916, 'q_image' => $l20_G916_image .  "5000.png",  "q_content" => "5000", "a_content" => 1],
            ['round' => 4, 'game_id' => 916, 'q_image' => null, "q_content" => "6000", "a_content" => 0],
            ['round' => 4, 'game_id' => 916, 'q_image' => null, "q_content" => "7000", "a_content" => 0],

            ['round' => 5, 'game_id' => 916, 'q_image' => $l20_G916_image .  "9000.png",  "q_content" => "7000", "a_content" => 0],
            ['round' => 5, 'game_id' => 916, 'q_image' => null, "q_content" => "8000", "a_content" => 0],
            ['round' => 5, 'game_id' => 916, 'q_image' => null, "q_content" => "9000", "a_content" => 1],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 20 Game 917 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L20_practice_speaking = "Grade_4/" . "Lesson_20/" . "speaking_practice/";
        $l20_G917image = $domain . "/storage/images/Grade_4/lesson_20/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 917,  'q_image' => $l20_G917image . "pudding.png", "q_audio" => $AudioDomain . $G4_L20_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L20_practice_speaking . "" . ".mp3", "q_content" => "S: Can I help you?\nYou: _______________________________.\nS: Yes, we do.\nYou: ________________________________.\nS: It's $10.\nYou: ________________________________.\nS: Thank you.",  "a_content" => "Sample \nS: Can I help you?\nC: I want some puddings, please. Do you have any?\nS: Yes, we do.\nC: How much is one?\nS: It's $10.\nC: I want six, please.\nS: OK. That will be $60 kyats.\nC: Here you are.\nS: Thank you."],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 917,  'q_image' => $l20_G917image . "toy-monkey.png", "q_audio" => $AudioDomain . $G4_L20_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L20_practice_speaking . "" . ".mp3",  "q_content" => "S: Can I help you?\nYou: _______________________________.\nS: Yes, we do.\nYou: ________________________________.\nS: It's $100.\nYou: ________________________________.\nS: Thank you."],
            ['round' => 3, 'game_id' => 917,  'q_image' => $l20_G917image . "shirt.png", "q_audio" => $AudioDomain . $G4_L20_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L20_practice_speaking . "" . ".mp3",  "q_content" => "S: Can I help you?\nYou: _______________________________.\nS: Yes, we do.\nYou: ________________________________.\nS: What color do you want?\nYou: ________________________________.\nS: What size do you want?\nYou: ________________________________.\nYou:________________________________.\nS: It’s $1000.\nYou: ________________________________.\nS: Thank you."],
            ['round' => 4, 'game_id' => 917,  'q_image' => $l20_G917image . "toy-monkey.png", "q_audio" => $AudioDomain . $G4_L20_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L20_practice_speaking . "" . ".mp3",  "q_content" => "S: Can I help you?\nYou: _______________________________.\nS: Yes, we do.\nYou: ________________________________.\nS: It's $200.\nYou: ________________________________.\nS: Thank you."],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 20 Game 918 ( Listening Practice )
        ////////////////////////////////////////////////////////

        $l20_G918_image = $domain . "/storage/images/Grade_4/lesson_20/listening_practice/";
        $G4_L20_listening = "Grade_4/" . "Lesson_20/" . "listening_practice/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 918,  'q_audio' =>  $AudioDomain . $G4_L20_listening . "Conver" . ".mp3", "q_conver" => "What is the customer looking for?", "q_content" => "Skirt", "a_content" => 0],
            ['round' => 1, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "T-shirt", "a_content" => 0],
            ['round' => 1, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Sweater", "a_content" => 1],

            ['round' => 2, 'game_id' => 918,  'q_audio' =>  $AudioDomain . $G4_L20_listening . "Conver" . ".mp3", "q_conver" => "Who is she buying it for?", "q_content" => "A younger sister", "a_content" => 1],
            ['round' => 2, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A brother", "a_content" => 0],
            ['round' => 2, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "An older sister", "a_content" => 0],

            ['round' => 3, 'game_id' => 918,  'q_audio' =>  $AudioDomain . $G4_L20_listening . "Conver" . ".mp3", "q_conver" => "What size does she buy?", "q_content" => "Small", "a_content" => 1],
            ['round' => 3, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Medium", "a_content" => 0],
            ['round' => 3, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Large", "a_content" => 0],

            ['round' => 4, 'game_id' => 918,  'q_audio' =>  $AudioDomain . $G4_L20_listening . "Conver" . ".mp3", "q_conver" => "What color does she buy?", "q_content" => "Black", "a_content" => 0],
            ['round' => 4, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Pink", "a_content" => 1],
            ['round' => 4, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "White", "a_content" => 0],

            ['round' => 5, 'game_id' => 918,  'q_audio' =>  $AudioDomain . $G4_L20_listening . "Conver" . ".mp3", "q_conver" => "How much is it?", "q_content" => "$200", "a_content" => 0],
            ['round' => 5, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "$300", "a_content" => 1],
            ['round' => 5, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "$400", "a_content" => 0],

            ['round' => 6, 'game_id' => 918,  'q_audio' =>  $AudioDomain . $G4_L20_listening . "Conver" . ".mp3", "q_conver" => "How much is the skirt?", "q_content" => "$200", "a_content" => 0],
            ['round' => 6, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "$300", "a_content" => 0],
            ['round' => 6, 'game_id' => 918,  'q_audio' =>  null, "q_conver" => null, "q_content" => "$400", "a_content" => 1],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 20 Game 919 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L20_speaking_topic = "Grade_4/" . "Lesson_20/" . "speaking_topic/";
        $l20_G919image = $domain . "/storage/images/Grade_4/lesson_20/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 919, "q_image" =>  $l20_G919image . "green-star.png", "q_content" => "You want 3 apples, 5 oranges, and 1 watermelon. \nYou are at the mart. \nAnswer the questions and talk. ", "round_instruction" => $AudioDomain . $G4_L20_speaking_topic . "SubBlock_You-want-3-apples-5-oranges" . ".mp3"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 20 Game 920 (  Writing Topic )
        //////////////////////////////////////////////////////////////

        $G4_L20_Game920_ans = "I went to the supermarket last Sunday. I went there with my mom. We bought 1 strawberry cake, 3 apples, and some bread. The cake was $10. The apples were $5. And, the bread was $5. I was very happy.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 920, 'q_content' => "Where did you go?\nWho did you go there with?\nWhat did you buy?\nHow much are those?\nWere you happy?", 'a_content' => $G4_L20_Game920_ans],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 21 Game 921 ( video )
        //////////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 921, 'a_content' => 'lesson_21_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 921, 'a_content' => 'lesson_21_video_global', 'isLocal' => 0]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 21 Game 922 ( Listen and Repeat] )
        //////////////////////////////////////////////////////////////

        $l21_G922_image = $domain . "/storage/images/Grade_4/lesson_21/listen_n_repeat/";
        $G4_L21_listen_n_repeat = "Grade_4/" . "Lesson_21/" . "listen_n_repeat/";

        $ans_G922 = [
            "North", "East", "South", "West", "Northwest", "Northeast", "Southeast", "Pagoda", "School", "Park", "Library", "House", "Train-station", "Zoo", "Market", "Playground", "Shopping-mall", "Pharmacy", "Cinema"
        ];

        foreach ($ans_G922 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 922, 'a_content' => $key, 'a_image' => $l21_G922_image . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L21_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 21 Game 923 ( Spelling Game )
        ////////////////////////////////////////////////////////

        $G4_L21_spelling_game = "Grade_4/" . "Lesson_21/" . "spelling_game/";
        $l21_G923_image = $domain . "/storage/images/Grade_4/lesson_21/spelling_game/";


        $q_G923 = [

            ["O", "R", "T", "H", "N"],
            ["T", "H", "S", "O", "U"],
            ["T", "S", "A", "E"],
            ["S", "T", "E", "W"],
            ["O", "R", "T", "N", "H", "A", "E", "S", "T"],
            ["H", "T", "R", "O", "N", "S", "E", "W", "T"],
            ["O", "U", "S", "T", "H", "E", "S", "W", "T"],
            ["S", "T", "H", "O", "U", "S", "T", "A", "E"],

        ];

        $a_G923 = [
            "NORTH", "SOUTH", "EAST", "WEST", "NORTHEAST", "NORTHWEST", "SOUTHWEST", "SOUTHEAST"
        ];

        $G923_Index = 0;

        for ($i = 0; $i < count($q_G923); $i++) {
            foreach ($q_G923[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 923, 'q_content' => $j, 'q_audio' => $AudioDomain . $G4_L21_spelling_game . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 923,
                    'q_image' => $l21_G923_image . str_replace(' ', '', strtolower($a_G923[$G923_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G4_L21_spelling_game . strtolower($a_G923[$G923_Index]) . ".mp3",
                    'a_content' => $a_G923[$G923_Index],
                ],
            ]);
            $G923_Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 21 Game 924 (  Practice  )
        ////////////////////////////////////////////////////////

        $l21_G924_image = $domain . "/storage/images/Grade_4/lesson_21/practice/";
        $G4_L21_Matching = "Grade_4/" . "Lesson_21/" . "practice/";


        $G4_L21_Game924_Matching = [

            ['Market', 'Pharmacy', 'Cinema', 'Shopping mall', "Library"],
            ['Pagoda', 'Park', 'Train station', "Library",  'Zoo'],
            ['School', 'West', 'East', "North",  'South'],

        ];

        $G4_L21_Game924_Matching_image = [

            ['Pharmacy', "Library", 'Market', 'Shopping mall', 'Cinema'],
            ['Zoo', 'Pagoda', 'Train station', 'Park', "Library"],
            ['North', 'East', 'School', "South", 'West'],

        ];


        for ($i = 0; $i < count($G4_L21_Game924_Matching); $i++) {

            foreach ($G4_L21_Game924_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 924, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G4_L21_Matching .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_L21_Game924_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 924, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l21_G924_image . str_replace(' ', '-', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G4_L21_Matching . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 21 Game 925 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L21_practice_speaking = "Grade_4/" . "Lesson_21/" . "speaking_practice/";
        $l21_G925image = $domain . "/storage/images/Grade_4/lesson_21/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 925,  'q_image' => $l21_G925image . "map.png", "q_audio" => $AudioDomain . $G4_L21_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L21_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3", "q_content" => "A: Where is the library?\nB: __________________________.",  "a_content" => "Sample \nStudent A: Where is the library?\nStudent B: It's to the west of my house."],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 925,  'q_image' => $l21_G925image . "map.png", "q_audio" => $AudioDomain . $G4_L21_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L21_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "A: Where is the shopping mall?\nB: __________________________."],
            ['round' => 3, 'game_id' => 925,  'q_image' => $l21_G925image . "map.png", "q_audio" => $AudioDomain . $G4_L21_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L21_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "A: Where is the zoo?\nB: __________________________."],
            ['round' => 4, 'game_id' => 925,  'q_image' => $l21_G925image . "map.png", "q_audio" => $AudioDomain . $G4_L21_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L21_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "A: Where is the playground?\nB: __________________________."],
            ['round' => 5, 'game_id' => 925,  'q_image' => $l21_G925image . "map.png", "q_audio" => $AudioDomain . $G4_L21_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L21_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "A: Where is the pharmacy?\nB: __________________________."],
            ['round' => 6, 'game_id' => 925,  'q_image' => $l21_G925image . "map.png", "q_audio" => $AudioDomain . $G4_L21_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L21_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "A: Where is the cinema?\nB: __________________________."],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 21 Game 926 ( Listening Practice )
        ////////////////////////////////////////////////////////

        $l21_G926_image = $domain . "/storage/images/Grade_4/lesson_21/listening_practice/";
        $G4_L21_listening = "Grade_4/" . "Lesson_21/" . "listening_practice/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 926,  'q_audio' =>  $AudioDomain . $G4_L21_listening . "Starfish-Grade-3-listening" . ".mp3", "q_conver" => "The cinema is to the ____ of the pharmacy.", "q_content" => "East", "a_content" => 0],
            ['round' => 1, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "West", "a_content" => 1],
            ['round' => 1, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "North", "a_content" => 0],

            ['round' => 2, 'game_id' => 926,  'q_audio' =>  $AudioDomain . $G4_L21_listening . "Starfish-Grade-3-listening" . ".mp3", "q_conver" => "The school is to the _____ of the bus station.", "q_content" => "East",  "a_content" => 1],
            ['round' => 2, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "West", "a_content" => 0],
            ['round' => 2, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "North", "a_content" => 0],

            ['round' => 3, 'game_id' => 926,  'q_audio' =>  $AudioDomain . $G4_L21_listening . "Starfish-Grade-3-listening" . ".mp3", "q_conver" => "The café is to the ____ of the hotel.", "q_content" => "North", "a_content" => 0],
            ['round' => 3, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "South", "a_content" => 1],
            ['round' => 3, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "West", "a_content" => 0],

            ['round' => 4, 'game_id' => 926,  'q_audio' =>  $AudioDomain . $G4_L21_listening . "Starfish-Grade-3-listening" . ".mp3", "q_conver" => "The supermarket is to the ____ of the hospital.", "q_content" => "North", "a_content" => 1],
            ['round' => 4, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "South", "a_content" => 0],
            ['round' => 4, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "East", "a_content" => 0],

            ['round' => 5, 'game_id' => 926,  'q_audio' =>  $AudioDomain . $G4_L21_listening . "Starfish-Grade-3-listening" . ".mp3", "q_conver" => "The pharmacy is to the ____ of the café.", "q_content" => "East", "a_content" => 0],
            ['round' => 5, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "West", "a_content" => 1],
            ['round' => 5, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "South", "a_content" => 0],

            ['round' => 6, 'game_id' => 926,  'q_audio' =>  $AudioDomain . $G4_L21_listening . "Starfish-Grade-3-listening" . ".mp3", "q_conver" => "The hospital is to the ____ of the pharmacy.", "q_content" => "Northeast", "a_content" => 1],
            ['round' => 6, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Southwest", "a_content" => 0],
            ['round' => 6, 'game_id' => 926,  'q_audio' =>  null, "q_conver" => null, "q_content" => "West", "a_content" => 0],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 21 Game 927 (  Speaking topic )
        //////////////////////////////////////////////////////////////

        $G4_L21_speaking_topic = "Grade_4/" . "Lesson_21/" . "speaking_topic/";
        $l21_G927image = $domain . "/storage/images/Grade_4/lesson_21/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 927,  'q_image' => $l21_G927image . "map.png", "q_audio" => $AudioDomain . $G4_L21_speaking_topic . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L21_speaking_topic . "SubBlock_Look-at-the-following-picture" . ".mp3", "q_content" => "Where is the school?"],
            ['round' => 2, 'game_id' => 927,  'q_image' => $l21_G927image . "map.png", "q_audio" => $AudioDomain . $G4_L21_speaking_topic . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L21_speaking_topic . "SubBlock_Look-at-the-following-picture" . ".mp3",  "q_content" => "Where is the pharmacy?"],
            ['round' => 3, 'game_id' => 927,  'q_image' => $l21_G927image . "map.png", "q_audio" => $AudioDomain . $G4_L21_speaking_topic . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L21_speaking_topic . "SubBlock_Look-at-the-following-picture" . ".mp3",  "q_content" => "Where is the park?"],
            ['round' => 4, 'game_id' => 927,  'q_image' => $l21_G927image . "map.png", "q_audio" => $AudioDomain . $G4_L21_speaking_topic . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L21_speaking_topic . "SubBlock_Look-at-the-following-picture" . ".mp3",  "q_content" => "Where is the cinema?"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 21 Game 928 (  Writing Topic )
        //////////////////////////////////////////////////////////////

        $G4_L21_Game928_ans = "The school is to the east of my house. The café is to the west of my house.The pharmacy is to the north of my house. The library is to the south of my house.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 928, 'q_content' => "_____ is to the _____ of my house. (north)\n_____ is to the _____ of my house. (east)\n_____ is to the _____ of my house. (south)\n_____ is to the _____ of my house. (west)", 'a_content' => $G4_L21_Game928_ans],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 22 Game 929 ( video )
        //////////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 929, 'a_content' => 'lesson_22_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 929, 'a_content' => 'lesson_22_video_global', 'isLocal' => 0]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 22 Game 930 , 931 ( Listen and Repeat )
        //////////////////////////////////////////////////////////////

        $l22_G930_G931_image = $domain . "/storage/images/Grade_4/lesson_22/listen_n_repeat/";
        $G4_L22_listen_n_repeat = "Grade_4/" . "Lesson_22/" . "listen_n_repeat/";

        // game 930
        $ans_G930 = [
            "Myanmar", "China", "Laos", "Thailand", "India", "Vietnam", "Cambodia", "Bangladesh", "Singapore", "Kip", "Rupee", "Yuan", "Baht", "Taka", "Kyat", "Singapore-Dollar", "Riel", "Dong"
        ];

        foreach ($ans_G930 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 930, 'a_content' => $key, 'a_image' => $l22_G930_G931_image . "1/" . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L22_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }


        $ansL22_G931 = [
            ["Myanmar", "Kyat"],
            ["China", "Yuan"],
            ["India", "Rupee"],
            ["Thailand", "Baht"],
            ["Laos", "Kip"],
            ["Bangladesh", "Taka"],
            ["Vietnam", "Dong"],
            ["Singapore", "Singapore-dollar"],
            ["Cambodia", "Riel"],
        ];

        for ($i = 0; $i < count($ansL22_G931); $i++) {
            for ($j = 0; $j < count($ansL22_G931[$i]); $j++) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 931,
                        'a_content' => $ansL22_G931[$i][$j],
                        'a_image' => $l22_G930_G931_image . "2/" .  $ansL22_G931[$i][$j] . ".png",
                        'a_audio' => $AudioDomain . $G4_L22_listen_n_repeat . strtolower($ansL22_G931[$i][$j]) . ".mp3",
                        'q_content' => $i,
                    ],
                ]);
            }
        }




        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 22 Game 932 ( Spelling Game )
        ////////////////////////////////////////////////////////

        $G4_L22_spelling_game = "Grade_4/" . "Lesson_22/" . "spelling_game/";
        $l22_G932_image = $domain . "/storage/images/Grade_4/lesson_22/spelling_game/";


        $q_G932 = [

            ["M", "N", "M", "A", "Y", "A", "R"],
            ["A", "I", "H", "N", "C"],
            ["A", "L", "S", "O"],
            ["A", "T", "D", "H", "N", "I", "L", "A"],
            ["I", "D", "N", "I", "A"],
            ["V", "I", "A", "E", "N", "T", "M"],
            ["A", "M", "D", "O", "C", "B", "A", "I"],
            ["G", "E", "B", "A", "D", "N", "H", "L", "A", "S"],
            ["A", "O", "I", "G", "S", "N", "P", "E", "R"],
            ["I", "P", "K"],
            ["E", "P", "E", "U", "R"],
            ["A", "Y", "N", "U"],
            ["A", "H", "B", "T"],
            ["A", "T", "K", "A"],
            ["T", "K", "Y", "A"],
            ["I", "P", "N", "A", "G", "R", "S", "E", "O", "R", "D", "L", "O", "L", "A"],
            ["E", "R", "L", "I"],
            ["G", "O", "N", "D"],

        ];

        $a_G932 = [
            "MYANMAR", "CHINA", "LAOS", "THAILAND", "INDIA", "VIETNAM", "CAMBODIA", "BANGLADESH", "SINGAPORE", "KIP", "RUPEE", "YUAN", "BAHT", "TAKA", "KYAT", "SINGAPOREDOLLAR", "RIEL", "DONG"
        ];

        $G932_Index = 0;

        for ($i = 0; $i < count($q_G932); $i++) {
            foreach ($q_G932[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 932, 'q_content' => $j, 'q_audio' => $AudioDomain . $G4_L22_spelling_game . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 932,
                    'q_image' => $l22_G932_image . str_replace(' ', '', strtolower($a_G932[$G932_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G4_L22_spelling_game . strtolower($a_G932[$G932_Index]) . ".mp3",
                    'a_content' => $a_G932[$G932_Index],
                ],
            ]);
            $G932_Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 22 Game 933   (  Practice  )
        ////////////////////////////////////////////////////////

        $l22_G933_image = $domain . "/storage/images/Grade_4/lesson_22/practice/";
        $G4_L22_practice_path = "Grade_4/" . "Lesson_22/" . "practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 933, 'q_image' => $l22_G933_image .  "thai.png",  "q_content" => "Yuan", "a_content" => 0],
            ['round' => 1, 'game_id' => 933, 'q_image' => null, "q_content" => "Kyat", "a_content" => 0],
            ['round' => 1, 'game_id' => 933, 'q_image' => null, "q_content" => "Baht", "a_content" => 1],

            ['round' => 2, 'game_id' => 933, 'q_image' => $l22_G933_image .  "myan.png",  "q_content" => "Baht", "a_content" => 0],
            ['round' => 2, 'game_id' => 933, 'q_image' => null, "q_content" => "Dong", "a_content" => 0],
            ['round' => 2, 'game_id' => 933, 'q_image' => null, "q_content" => "Kyat", "a_content" => 1],

            ['round' => 3, 'game_id' => 933, 'q_image' => $l22_G933_image .  "viet.png",  "q_content" => "Dong", "a_content" => 1],
            ['round' => 3, 'game_id' => 933, 'q_image' => null, "q_content" => "Riel", "a_content" => 0],
            ['round' => 3, 'game_id' => 933, 'q_image' => null, "q_content" => "Kip", "a_content" => 0],

            ['round' => 4, 'game_id' => 933, 'q_image' => $l22_G933_image .  "cambo.png",  "q_content" => "Kip", "a_content" => 0],
            ['round' => 4, 'game_id' => 933, 'q_image' => null, "q_content" => "Riel", "a_content" => 1],
            ['round' => 4, 'game_id' => 933, 'q_image' => null, "q_content" => "Rupee", "a_content" => 0],

            ['round' => 5, 'game_id' => 933, 'q_image' => $l22_G933_image .  "india.png",  "q_content" => "Rupee", "a_content" => 1],
            ['round' => 5, 'game_id' => 933, 'q_image' => null, "q_content" => "Taka", "a_content" => 0],
            ['round' => 5, 'game_id' => 933, 'q_image' => null, "q_content" => "Dong", "a_content" => 0],

            ['round' => 6, 'game_id' => 933, 'q_image' => $l22_G933_image .  "laos.png",  "q_content" => "Kip", "a_content" => 1],
            ['round' => 6, 'game_id' => 933, 'q_image' => null, "q_content" => "Taka", "a_content" => 0],
            ['round' => 6, 'game_id' => 933, 'q_image' => null, "q_content" => "Yuan", "a_content" => 0],

            ['round' => 7, 'game_id' => 933, 'q_image' => $l22_G933_image .  "bangla.png",  "q_content" => "Taka", "a_content" => 1],
            ['round' => 7, 'game_id' => 933, 'q_image' => null, "q_content" => "Dong", "a_content" => 0],
            ['round' => 7, 'game_id' => 933, 'q_image' => null, "q_content" => "Rupee", "a_content" => 0],

            ['round' => 8, 'game_id' => 933, 'q_image' => $l22_G933_image .  "china.png",  "q_content" => "Yuan", "a_content" => 1],
            ['round' => 8, 'game_id' => 933, 'q_image' => null, "q_content" => "Dollar", "a_content" => 0],
            ['round' => 8, 'game_id' => 933, 'q_image' => null, "q_content" => "Baht", "a_content" => 0],

            ['round' => 9, 'game_id' => 933, 'q_image' => $l22_G933_image .  "singa.png",  "q_content" => "Dollar", "a_content" => 1],
            ['round' => 9, 'game_id' => 933, 'q_image' => null, "q_content" => "Daka", "a_content" => 0],
            ['round' => 9, 'game_id' => 933, 'q_image' => null, "q_content" => "Dong", "a_content" => 0],
        ]);

        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 22 Game 934 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L22_practice_speaking = "Grade_4/" . "Lesson_22/" . "speaking_practice/";
        $l22_G934image = $domain . "/storage/images/Grade_4/lesson_22/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 934,  'q_image' => $l22_G934image . "map.png", "q_audio" => $AudioDomain . $G4_L22_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L22_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3", "q_content" => "Q: Where is India?\nB: ________________________.\nQ: What is the currency of India?\nB: ________________________.",  "a_content" => "Sample \nQ: Where is India?\nB: It's to the northwest of Myanmar.\nQ: What is the currency of India?\nB: It's rupees."],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 934,  'q_image' => $l22_G934image . "map.png", "q_audio" => $AudioDomain . $G4_L22_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L22_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "Q: Where is China?\nB: ________________________.\nQ: What is the currency of China?\nB: ________________________."],
            ['round' => 3, 'game_id' => 934,  'q_image' => $l22_G934image . "map.png", "q_audio" => $AudioDomain . $G4_L22_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L22_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "Q: Where is Thailand?\nB: ________________________.\nQ: What is the currency of Thailand?\nB: ________________________."],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 22 Game 935 ( Listening Practice )
        ////////////////////////////////////////////////////////

        $l22_G935_image = $domain . "/storage/images/Grade_4/lesson_22/listening_practice/";
        $G4_L22_listening = "Grade_4/" . "Lesson_22/" . "listening_practice/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 935,  'q_audio' =>  $AudioDomain . $G4_L22_listening . "SubBlock_I-went-to-Thailand-with-my-mom" . ".mp3", "q_conver" => "When did Max go to Thailand?", "q_content" => "Last week", "a_content" => 0],
            ['round' => 1, 'game_id' => 935,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Last month", "a_content" => 1],
            ['round' => 1, 'game_id' => 935,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Last Year", "a_content" => 0],

            ['round' => 2, 'game_id' => 935,  'q_audio' =>  $AudioDomain . $G4_L22_listening . "SubBlock_I-went-to-Thailand-with-my-mom" . ".mp3", "q_conver" => "How much was the robot toy?", "q_content" => "500 baht",  "a_content" => 1],
            ['round' => 2, 'game_id' => 935,  'q_audio' =>  null, "q_conver" => null, "q_content" => "500 yuan", "a_content" => 0],
            ['round' => 2, 'game_id' => 935,  'q_audio' =>  null, "q_conver" => null, "q_content" => "500 kyat", "a_content" => 0],

            ['round' => 3, 'game_id' => 935,  'q_audio' =>  $AudioDomain . $G4_L22_listening . "SubBlock_I-went-to-Thailand-with-my-mom" . ".mp3", "q_conver" => "Who bought Max a T-shirt?", "q_content" => "Max's mom", "a_content" => 0],
            ['round' => 3, 'game_id' => 935,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Max's dad", "a_content" => 1],
            ['round' => 3, 'game_id' => 935,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Max's uncle", "a_content" => 0],

            ['round' => 4, 'game_id' => 935,  'q_audio' =>  $AudioDomain . $G4_L22_listening . "SubBlock_I-went-to-Thailand-with-my-mom" . ".mp3", "q_conver" => "How much was the T-shirt?", "q_content" => "7000 riels", "a_content" => 0],
            ['round' => 4, 'game_id' => 935,  'q_audio' =>  null, "q_conver" => null, "q_content" => "8000 riels", "a_content" => 0],
            ['round' => 4, 'game_id' => 935,  'q_audio' =>  null, "q_conver" => null, "q_content" => "9000 riels", "a_content" => 1],

            ['round' => 5, 'game_id' => 935,  'q_audio' =>  $AudioDomain . $G4_L22_listening . "SubBlock_I-went-to-Thailand-with-my-mom" . ".mp3", "q_conver" => "What did Max eat in Vietnam? ", "q_content" => "Dumpling", "a_content" => 0],
            ['round' => 5, 'game_id' => 935,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Cake", "a_content" => 0],
            ['round' => 5, 'game_id' => 935,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Noodles", "a_content" => 1],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 22 Game 936 (  Practice  )
        ////////////////////////////////////////////////////////

        $l22_G936_image = $domain . "/storage/images/Grade_4/lesson_22/reading_passage/";
        $G4_L22_reading_passage_path = "Grade_4/" . "Lesson_22/" . "reading_passage/";

        $l22_G936_q_audio = [
            "SubBlock_Where-do-the-little-ones-go-fi",
            "SubBlock_Is-London-a-big-city-Yes-it",
            "SubBlock_What-is-the-capital-city-of-Fr",
            "SubBlock_What-do-people-use-to-go-aroun",
            "SubBlock_What-do-people-eat-for-lunch-i",
            "SubBlock_Where-is-Kenya-Asia-Africa-Eu"
        ];
        $l22_G936_q_conver = [
            "Where do the little ones go first?",
            "Is London a big city?",
            "What is the capital city of France?",
            "What do people use to go around in Venice?",
            "What do people eat for lunch in Italy?",
            "Where is Kenya?",
        ];
        $l22_G936_q_audio_ans = [
            ["Paris", "Landon", "Venice"],
            ["Yes, It is.", "No, It isn't.", "Maybe"],
            ["Paris", "Landon", "Venice"],
            ["Cars", "Planes", "Boats"],
            ["Noodles", "Rice", "Pizza"],
            ["Asia", "Africa", "Europe"]
        ];
        $l22_G936_q_audio_a_content = [
            [0, 1, 0],
            [1, 0, 0],
            [1, 0, 0],
            [0, 0, 1],
            [0, 0, 1],
            [0, 1, 0],
        ];


        for ($i = 0; $i < count($l22_G936_q_audio); $i++) {

            foreach ($l22_G936_q_audio_ans[$i] as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 936, "q_audio" => $AudioDomain . $G4_L22_reading_passage_path . str_replace(' ', '-', strtolower($val)) . ".mp3", 'q_content' => $val, "q_conver" => null, 'a_content' => $l22_G936_q_audio_a_content[$i][$key], "background" => null],
                ]);
            }

            foreach ($l22_G936_q_audio as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 936, "q_audio" => $AudioDomain . $G4_L22_reading_passage_path . $val . ".mp3", "q_conver" => $l22_G936_q_conver[$key], 'q_content' => null, 'a_content' => null, "background" => null],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 936, "q_audio" => $AudioDomain . $G4_L22_reading_passage_path . "Block_Hello-and-welcome-to-little-la" . ".mp3", "q_conver" => "Hello and welcome to littleland!\nThe little ones are going on a big trip today. They've packed their bags and are ready to go. Have you got everything they'll need, do you think? \nGoodbye, little house, see you soon! Where do you think the little ones will go to first?\nYes, it's London, the capital city of the United Kingdom. London is the big, noisy city, full of cars, and buses and grand buildings.\nThere's so much to see and to do here. Just be careful when you cross the road, little ones! \nThe little ones' next stop is Paris, the capital of France. \nThis is the beautiful city, Venice, in Italy. Here, they have canals instead of road, so people travel around the boat, not cars. \nIn Italy, people often eat pizza for their lunch. Do you like pizza?\nThe little ones are going on safari today. They are in Kenya, a big country in Africa.",
                    'q_content' => "Littleland around the world", "background" => $l22_G936_image . "bg.png"
                ],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 22 Game 937 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L22_speaking_topic = "Grade_4/" . "Lesson_22/" . "speaking_topic/";
        $l22_G937image = $domain . "/storage/images/Grade_4/lesson_22/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 937, "q_image" =>  $l22_G937image . "green-star.png", "q_content" => "Talk about the country you want to visit. \nWhere do you want to go?\nWhere do you want to visit? \nWhat do you want to eat there?", "round_instruction" => $AudioDomain . $G4_L22_speaking_topic . "SubBlock_You-are-at-the-stationery-shop" . ".mp3"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 23 Game 938 ( video )
        //////////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 938, 'a_content' => 'lesson_23_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 938, 'a_content' => 'lesson_23_video_global', 'isLocal' => 0]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 23 Game 939 , 940 ( Listen and Repeat] )
        //////////////////////////////////////////////////////////////

        $l23_G939_G940_image = $domain . "/storage/images/Grade_4/lesson_23/listen_n_repeat/";
        $G4_L23_listen_n_repeat = "Grade_4/" . "Lesson_23/" . "listen_n_repeat/";

        // game 939
        $ans_G939 = [
            "Nay-Pyi-Taw", "Dhaka", "Beijing", "New-Dehli", "Vientiane", "Bangkok", "Singapore", "Hanoi", "Phnom-Penh"
        ];

        foreach ($ans_G939 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 939, 'a_content' => $key, 'a_image' => $l23_G939_G940_image . "1/" . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L23_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }

        // game 940
        $ansL23_G940 = [
            ["Myanmar", "Nay-Pyi-Taw"],
            ["Bangladesh", "Dhaka"],
            ["China", "Beijing"],
            ["India", "New-Dehli"],
            ["Laos", "Vientiane"],
            ["Thailand", "Bangkok"],
            ["Singapore", "Singapore-c"],
            ["Vietnam", "Hanoi"],
            ["Cambodia", "Phnom-Penh"],
        ];

        for ($i = 0; $i < count($ansL23_G940); $i++) {
            for ($j = 0; $j < count($ansL23_G940[$i]); $j++) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 940,
                        'a_content' => $ansL23_G940[$i][$j],
                        'a_image' => $l23_G939_G940_image . "2/" .  $ansL23_G940[$i][$j] . ".png",
                        'a_audio' => $AudioDomain . $G4_L23_listen_n_repeat . strtolower($ansL23_G940[$i][$j]) . ".mp3",
                        'q_content' => $i,
                    ],
                ]);
            }
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 23 Game 941   (  Practice  )
        ////////////////////////////////////////////////////////

        $l23_G941_image = $domain . "/storage/images/Grade_4/lesson_23/practice/";
        $G4_L23_practice_path = "Grade_4/" . "Lesson_23/" . "practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 941, 'q_image' => $l23_G941_image .  "china.png",  "q_content" => "India", "a_content" => 0],
            ['round' => 1, 'game_id' => 941, 'q_image' => null, "q_content" => "China", "a_content" => 1],
            ['round' => 1, 'game_id' => 941, 'q_image' => null, "q_content" => "Vietnam", "a_content" => 0],

            ['round' => 2, 'game_id' => 941, 'q_image' => $l23_G941_image .  "myan.png",  "q_content" => "Thailand", "a_content" => 0],
            ['round' => 2, 'game_id' => 941, 'q_image' => null, "q_content" => "Vietnam", "a_content" => 0],
            ['round' => 2, 'game_id' => 941, 'q_image' => null, "q_content" => "Myanmar", "a_content" => 1],

            ['round' => 3, 'game_id' => 941, 'q_image' => $l23_G941_image .  "thai.png",  "q_content" => "Vietnam", "a_content" => 0],
            ['round' => 3, 'game_id' => 941, 'q_image' => null, "q_content" => "Thailand", "a_content" => 1],
            ['round' => 3, 'game_id' => 941, 'q_image' => null, "q_content" => "Myanmar", "a_content" => 0],

            ['round' => 4, 'game_id' => 941, 'q_image' => $l23_G941_image .  "india.png",  "q_content" => "India", "a_content" => 1],
            ['round' => 4, 'game_id' => 941, 'q_image' => null, "q_content" => "Bangladesh", "a_content" => 0],
            ['round' => 4, 'game_id' => 941, 'q_image' => null, "q_content" => "Cambodia", "a_content" => 0],

            ['round' => 5, 'game_id' => 941, 'q_image' => $l23_G941_image .  "bangla.png",  "q_content" => "India", "a_content" => 0],
            ['round' => 5, 'game_id' => 941, 'q_image' => null, "q_content" => "Bangladesh", "a_content" => 1],
            ['round' => 5, 'game_id' => 941, 'q_image' => null, "q_content" => "Cambodia", "a_content" => 0],

            ['round' => 6, 'game_id' => 941, 'q_image' => $l23_G941_image .  "singa.png",  "q_content" => "India", "a_content" => 0],
            ['round' => 6, 'game_id' => 941, 'q_image' => null, "q_content" => "Bangladesh", "a_content" => 0],
            ['round' => 6, 'game_id' => 941, 'q_image' => null, "q_content" => "Singapore", "a_content" => 1],

            ['round' => 7, 'game_id' => 941, 'q_image' => $l23_G941_image .  "viet.png",  "q_content" => "Vietnam", "a_content" => 1],
            ['round' => 7, 'game_id' => 941, 'q_image' => null, "q_content" => "Laos", "a_content" => 0],
            ['round' => 7, 'game_id' => 941, 'q_image' => null, "q_content" => "Cambodia", "a_content" => 0],

            ['round' => 8, 'game_id' => 941, 'q_image' => $l23_G941_image .  "laos.png",  "q_content" => "Vietnam", "a_content" => 0],
            ['round' => 8, 'game_id' => 941, 'q_image' => null, "q_content" => "Laos", "a_content" => 1],
            ['round' => 8, 'game_id' => 941, 'q_image' => null, "q_content" => "Cambodia", "a_content" => 0],

            ['round' => 9, 'game_id' => 941, 'q_image' => $l23_G941_image .  "cambo.png",  "q_content" => "Vietnam", "a_content" => 0],
            ['round' => 9, 'game_id' => 941, 'q_image' => null, "q_content" => "Laos", "a_content" => 0],
            ['round' => 9, 'game_id' => 941, 'q_image' => null, "q_content" => "Cambodia", "a_content" => 1],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 23 Game 942 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L23_practice_speaking = "Grade_4/" . "Lesson_23/" . "speaking_practice/";
        $l23_G942image = $domain . "/storage/images/Grade_4/lesson_23/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 942,  'q_image' => $l23_G942image . "myan.png", "q_audio" => $AudioDomain . $G4_L23_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L23_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3", "q_content" => "Q: What is the capital of Myanmar?\nB: It's _________________.\nQ: What is the currency of Myanmar?\nB: It's __________________.",  "a_content" => "Sample \nQ: What is the capital of Myanmar?\nB: It's Nay Pyi Daw.\nQ: What is the currency of Myanmar?\nB: It's kyat."],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 942,  'q_image' => $l23_G942image . "china.png", "q_audio" => $AudioDomain . $G4_L23_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L23_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "Q: What is the capital of China?\nB: It's _________________.\nQ: What is the currency of China?\nB: ________________________."],
            ['round' => 3, 'game_id' => 942,  'q_image' => $l23_G942image . "india.png", "q_audio" => $AudioDomain . $G4_L23_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L23_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "Q: What is the capital of India?\nB: It's _________________.\nQ: What is the currency of India?\nB: ________________________."],
            ['round' => 4, 'game_id' => 942,  'q_image' => $l23_G942image . "viet.png", "q_audio" => $AudioDomain . $G4_L23_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L23_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "Q: What is the capital of Vietnam?\nB: It's _________________.\nQ: What is the currency of Vietnam?\nB: ________________________."],
            ['round' => 5, 'game_id' => 942,  'q_image' => $l23_G942image . "cambo.png", "q_audio" => $AudioDomain . $G4_L23_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L23_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "Q: What is the capital of Cambodia?\nB: It's _________________.\nQ: What is the currency of Cambodia?\nB: ________________________."],
            ['round' => 6, 'game_id' => 942,  'q_image' => $l23_G942image . "singa.png", "q_audio" => $AudioDomain . $G4_L23_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L23_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "Q: What is the capital of Singapore?\nB: It's _________________.\nQ: What is the currency of Singapore?\nB: ________________________."],
            ['round' => 6, 'game_id' => 942,  'q_image' => $l23_G942image . "bangla.png", "q_audio" => $AudioDomain . $G4_L23_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L23_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "Q: What is the capital of Bangladesh?\nB: It's _________________.\nQ: What is the currency of Bangladesh?\nB: ________________________."],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 23 Game 943 ( Listening Practice )
        ////////////////////////////////////////////////////////

        $l23_G943_image = $domain . "/storage/images/Grade_4/lesson_23/listening_practice/";
        $G4_L23_listening = "Grade_4/" . "Lesson_23/" . "listening_practice/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 943,  'q_audio' =>  $AudioDomain . $G4_L23_listening . "SubBlock_Hi-I-am-Ben-I-am-from-Thaila" . ".mp3", "q_conver" => "Where is Ben from?", "q_content" => "Cambodia", "a_content" => 0],
            ['round' => 1, 'game_id' => 943,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Vietnam", "a_content" => 0],
            ['round' => 1, 'game_id' => 943,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Thailand", "a_content" => 1],

            ['round' => 2, 'game_id' => 943,  'q_audio' =>  $AudioDomain . $G4_L23_listening . "SubBlock_Hi-I-am-Ben-I-am-from-Thaila" . ".mp3", "q_conver" => "What is the capital of Thailand?", "q_content" => "Dhaka",  "a_content" => 0],
            ['round' => 2, 'game_id' => 943,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Bangkok", "a_content" => 1],
            ['round' => 2, 'game_id' => 943,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Beijing", "a_content" => 0],

            ['round' => 3, 'game_id' => 943,  'q_audio' =>  $AudioDomain . $G4_L23_listening . "SubBlock_Hi-I-am-Ben-I-am-from-Thaila" . ".mp3", "q_conver" => "What is the currency of Thailand?", "q_content" => "Taka", "a_content" => 0],
            ['round' => 3, 'game_id' => 943,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Kip", "a_content" => 0],
            ['round' => 3, 'game_id' => 943,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Baht", "a_content" => 1],

            ['round' => 4, 'game_id' => 943,  'q_audio' =>  $AudioDomain . $G4_L23_listening . "SubBlock_Hi-I-am-Ben-I-am-from-Thaila" . ".mp3", "q_conver" => "What food is famous?", "q_content" => "Dumpling", "a_content" => 0],
            ['round' => 4, 'game_id' => 943,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Pizza", "a_content" => 0],
            ['round' => 4, 'game_id' => 943,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Pad Thai", "a_content" => 1],

            ['round' => 5, 'game_id' => 943,  'q_audio' =>  $AudioDomain . $G4_L23_listening . "SubBlock_Hi-I-am-Ben-I-am-from-Thaila" . ".mp3", "q_conver" => "What kind of ice cream does Ben like?", "q_content" => "Vanilla", "a_content" => 0],
            ['round' => 5, 'game_id' => 943,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Green Tea", "a_content" => 0],
            ['round' => 5, 'game_id' => 943,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Coconut", "a_content" => 1],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 23 Game 944 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L23_speaking_topic = "Grade_4/" . "Lesson_23/" . "speaking_topic/";
        $l23_G944image = $domain . "/storage/images/Grade_4/lesson_23/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 944, "q_image" =>  $l23_G944image . "green-star.png", "q_content" => "Talk about your own country.\nAnswer the questions. Use the prompts.\nWhat is your country?\nWhere is it?\nWhat is the capital?\nWhat is the currency?\nWhat are the famous foods?", "round_instruction" => $AudioDomain . $G4_L23_speaking_topic . "SubBlock_Talk-about-your-own-country-A" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 24 Game 945 , 946 ( Listen and Repeat] )
        //////////////////////////////////////////////////////////////

        $l24_G945_G946_image = $domain . "/storage/images/Grade_4/lesson_24/listen_n_repeat/";
        $G4_L24_listen_n_repeat = "Grade_4/" . "Lesson_24/" . "listen_n_repeat/";

        // game 945
        $ans_G945 = [
            "America", "UK", "France", "Italy", "Germany", "Sweden", "US-Dollar", "Pound", "Euro", "Krona"
        ];

        foreach ($ans_G945 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 945, 'a_content' => $key, 'a_image' => $l24_G945_G946_image . "1/" . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L24_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }

        // game 946
        $ansL24_G946 = [
            ["America", "US-dollar"],
            ["UK", "Pound"],
            ["France", "Euro"],
            ["Italy", "Euro"],
            ["Germany", "Euro"],
            ["Sweden", "Krona"],
        ];

        for ($i = 0; $i < count($ansL24_G946); $i++) {
            for ($j = 0; $j < count($ansL24_G946[$i]); $j++) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 946,
                        'a_content' => $ansL24_G946[$i][$j],
                        'a_image' => $l24_G945_G946_image . "2/" .  $ansL24_G946[$i][$j] . ".png",
                        'a_audio' => $AudioDomain . $G4_L24_listen_n_repeat . strtolower($ansL24_G946[$i][$j]) . ".mp3",
                        'q_content' => $i,
                    ],
                ]);
            }
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 24 Game 947   (  Practice  )
        ////////////////////////////////////////////////////////

        $l24_G947_image = $domain . "/storage/images/Grade_4/lesson_24/practice/";
        $G4_L24_practice_path = "Grade_4/" . "Lesson_24/" . "practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 947, 'q_image' => $l24_G947_image .  "us.png",  "q_content" => "US Dollar", "a_content" => 1],
            ['round' => 1, 'game_id' => 947, 'q_image' => null, "q_content" => "Pound", "a_content" => 0],
            ['round' => 1, 'game_id' => 947, 'q_image' => null, "q_content" => "Euro", "a_content" => 0],

            ['round' => 2, 'game_id' => 947, 'q_image' => $l24_G947_image .  "france.png",  "q_content" => "US Dollar", "a_content" => 0],
            ['round' => 2, 'game_id' => 947, 'q_image' => null, "q_content" => "Pound", "a_content" => 0],
            ['round' => 2, 'game_id' => 947, 'q_image' => null, "q_content" => "Euro", "a_content" => 1],

            ['round' => 3, 'game_id' => 947, 'q_image' => $l24_G947_image .  "uk.png",  "q_content" => "US Dollar", "a_content" => 0],
            ['round' => 3, 'game_id' => 947, 'q_image' => null, "q_content" => "Pound", "a_content" => 1],
            ['round' => 3, 'game_id' => 947, 'q_image' => null, "q_content" => "Euro", "a_content" => 0],

            ['round' => 4, 'game_id' => 947, 'q_image' => $l24_G947_image .  "italy.png",  "q_content" => "US Dollar", "a_content" => 0],
            ['round' => 4, 'game_id' => 947, 'q_image' => null, "q_content" => "Pound", "a_content" => 0],
            ['round' => 4, 'game_id' => 947, 'q_image' => null, "q_content" => "Euro", "a_content" => 1],

            ['round' => 5, 'game_id' => 947, 'q_image' => $l24_G947_image .  "germany.png",  "q_content" => "US Dollar", "a_content" => 0],
            ['round' => 5, 'game_id' => 947, 'q_image' => null, "q_content" => "Pound", "a_content" => 0],
            ['round' => 5, 'game_id' => 947, 'q_image' => null, "q_content" => "Euro", "a_content" => 1],

            ['round' => 6, 'game_id' => 947, 'q_image' => $l24_G947_image .  "sweden.png",  "q_content" => "US Dollar", "a_content" => 0],
            ['round' => 6, 'game_id' => 947, 'q_image' => null, "q_content" => "Pound", "a_content" => 0],
            ['round' => 6, 'game_id' => 947, 'q_image' => null, "q_content" => "Euro", "a_content" => 1],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 24 Game 948 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L24_practice_speaking = "Grade_4/" . "Lesson_24/" . "speaking_practice/";
        $l24_G948image = $domain . "/storage/images/Grade_4/lesson_24/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 948,  'q_image' => $l24_G948image . "germany.png", "q_audio" => $AudioDomain . $G4_L24_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L24_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3", "q_content" => "Q: Where is the Germany?\nB: ________________________.\nQ: What is the currency of the Germany?\nB: ________________________.",  "a_content" => "Sample \nQ: Where is Germany?\nB: It's to the northeast of France.\nQ: What is the currency of Germany?\nB: It's Euro."],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 948,  'q_image' => $l24_G948image . "uk.png", "q_audio" => $AudioDomain . $G4_L24_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L24_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "Q: Where is the United Kingdom?\nB: ________________________.\nQ: What is the currency of the United Kingdom?\nB: ________________________."],
            ['round' => 3, 'game_id' => 948,  'q_image' => $l24_G948image . "italy.png", "q_audio" => $AudioDomain . $G4_L24_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L24_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "Q: Where is the Italy?\nB: ________________________.\nQ: What is the currency of the Italy?\nB: ________________________."],
            ['round' => 4, 'game_id' => 948,  'q_image' => $l24_G948image . "sweden.png", "q_audio" => $AudioDomain . $G4_L24_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L24_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "Q: Where is the Sweden?\nB: ________________________.\nQ: What is the currency of the Sweden?\nB: ________________________."],
        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 24 Game 949   (  Listening Practice  )
        ////////////////////////////////////////////////////////

        $l24_G949_image = $domain . "/storage/images/Grade_4/lesson_24/listening_practice/";
        $G4_L24_listening_practice_path = "Grade_4/" . "Lesson_24/" . "listening_practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 949, 'q_image' => $l24_G949_image .  "france.png", "q_conver" => "What is the capital of France?", "q_content" => "Berlin", "a_content" => 0],
            ['round' => 1, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Rome", "a_content" => 0],
            ['round' => 1, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Paris", "a_content" => 1],

            ['round' => 2, 'game_id' => 949, 'q_image' => $l24_G949_image .  "germany.png", "q_conver" => "What is the capital of Germany?", "q_content" => "Berlin", "a_content" => 1],
            ['round' => 2, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Rome", "a_content" => 0],
            ['round' => 2, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Paris", "a_content" => 0],

            ['round' => 3, 'game_id' => 949, 'q_image' => $l24_G949_image .  "italty.png", "q_conver" => "What is the capital of Italy?", "q_content" => "Berlin", "a_content" => 0],
            ['round' => 3, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Rome", "a_content" => 1],
            ['round' => 3, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Paris", "a_content" => 0],

            ['round' => 4, 'game_id' => 949, 'q_image' => $l24_G949_image .  "pound.png", "q_conver" => "What do France and Germany use?", "q_content" => "Krona", "a_content" => 0],
            ['round' => 4, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Dollar", "a_content" => 0],
            ['round' => 4, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Euro", "a_content" => 1],

            ['round' => 5, 'game_id' => 949, 'q_image' => $l24_G949_image .  "dollar.png", "q_conver" => "What is the currency of the US?", "q_content" => "Pound", "a_content" => 0],
            ['round' => 5, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Dollar", "a_content" => 1],
            ['round' => 5, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Euro", "a_content" => 0],

            ['round' => 6, 'game_id' => 949, 'q_image' => $l24_G949_image .  "euro.png", "q_conver" => "What is the currency of the UK?", "q_content" => "Pound", "a_content" => 1],
            ['round' => 6, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Dollar", "a_content" => 0],
            ['round' => 6, 'game_id' => 949, 'q_image' => null, "q_conver" => null, "q_content" => "Euro", "a_content" => 0],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 24 Game 950 (  Practice  )
        ////////////////////////////////////////////////////////

        $l24_G950_image = $domain . "/storage/images/Grade_4/lesson_24/reading_passage/";
        $G4_L24_reading_passage_path = "Grade_4/" . "Lesson_24/" . "reading_passage/";

        $l24_G950_q_audio = [
            "SubBlock_Where-is-Ben-going-London-Par",
            "SubBlock_How-does-Ben-feel-about-the-tr",
            "SubBlock_What-does-he-pack-Shorts-Jack",
            "SubBlock_What-is-the-weather-like-in-Lo",
            "SubBlock_Who-gives-Ben-the-carrot-in-hi",
            "SubBlock_What-does-ben-promise-his-mom"
        ];
        $l24_G950_q_conver = [
            "Where is Ben going?",
            "How does Ben feel about the trip?",
            "What does he pack?",
            "What is the weather like in London now?",
            "Who gives Ben the carrot in his dream?",
            "What does ben promise his mom?",
        ];
        $l24_G950_q_audio_ans = [
            ["London", "Paris", "Rome"],
            ["Happy", "Sad", "Angry"],
            ["Shorts", "Jackets", "Hats"],
            ["Windy", "Snowy", "Rainy"],
            ["Goofy", "Micky", "Olaf"],
            ["To eat more bananas", "To drink milk", "To eat more carrots"]
        ];
        $l24_G950_q_audio_a_content = [
            [1, 0, 0],
            [1, 0, 0],
            [0, 1, 0],
            [0, 1, 0],
            [0, 0, 1],
            [0, 0, 1],
        ];


        for ($i = 0; $i < count($l24_G950_q_audio); $i++) {

            foreach ($l24_G950_q_audio_ans[$i] as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 950, "q_audio" => $AudioDomain . $G4_L24_reading_passage_path . str_replace(' ', '-', strtolower($val)) . ".mp3", 'q_content' => $val, "q_conver" => null, 'a_content' => $l24_G950_q_audio_a_content[$i][$key], "background" => null],
                ]);
            }

            foreach ($l24_G950_q_audio as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 950, "q_audio" => $AudioDomain . $G4_L24_reading_passage_path . $val . ".mp3", "q_conver" => $l24_G950_q_conver[$key], 'q_content' => null, 'a_content' => null, "background" => null],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 950, "q_audio" => $AudioDomain . $G4_L24_reading_passage_path . "SubBlock_Ben-is-wide-awake-He-is-ready" . ".mp3", "q_conver" => "Ben is wide awake. He is ready to get up and drink milk.\nMommy says to Ben, \"Are you excited?\"\nBen nods his head, and packs his bag.\nBen is full of joy and smiles. He is happy. He is going to London with his mom, and his puppy. Ben packs a lot of his shirts, pants, and jackets. It is cold and snowy in London now. After some time, Ben is tired and sits on the sofa.\nBen opens his eyes. \"Wow, a lot of snow!\"\nOlaf is giving Ben a carrot. Ben does not like it. He runs.\nFast! Fast! Fast!\n\"Ooops\"\nBen hits a big snowball and falls. He looks back.\nOlaf with a carrot! Oh No!\n\"Wake up, Ben! Wake up! It is time to go!\" That is mommy's voice.\nBen now knows he is dreaming. Ben promises his mom that he will eat more carrots.",
                    'a_content' => null, "background" => $l24_G950_image . "bg.png"
                ],
            ]);
        }

        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 24 Game 951 (  Speaking Topic )
        //////////////////////////////////////////////////////////////

        $G4_L24_speaking_topic = "Grade_4/" . "Lesson_24/" . "speaking_topic/";
        $l24_G951image = $domain . "/storage/images/Grade_4/lesson_24/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 951, "q_image" =>  $l24_G951image . "green-star.png", "q_content" => "Find out the country you would like to talk about. \nAsk your mom and dad about that country or your teachers and friends.\nPlan and talk about it.", "round_instruction" => $AudioDomain . $G4_L24_speaking_topic . "Block_Find-out-the-country-you-would" . ".mp3"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 25 Game 952 ( video )
        //////////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 952, 'a_content' => 'lesson_25_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 952, 'a_content' => 'lesson_25_video_global', 'isLocal' => 0]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 25 Game 953 , 954 ( Listen and Repeat )
        //////////////////////////////////////////////////////////////

        $l25_G953_G954_image = $domain . "/storage/images/Grade_4/lesson_25/listen_n_repeat/";
        $G4_L25_listen_n_repeat = "Grade_4/" . "Lesson_25/" . "listen_n_repeat/";

        // game 953
        $ans_G953 = [
            "Blouse", "Dress", "Flip-flops", "Jeans", "Pyjamas", "Sandals", "Shorts", "Skirt", "Sweater", "Tracksuit", "Trainers", "T-shirt", "Hat", "Cap", "Sunglasses", "Eyeglasses", "Jacket"
        ];

        foreach ($ans_G953 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 953, 'a_content' => $key, 'a_image' => $l25_G953_G954_image . "1/" . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L25_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }

        // Game 954
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 954, 'a_image' => $l25_G953_G954_image . "2/" . "girl.gif", "a_audio" => $AudioDomain . $G4_L25_listen_n_repeat . "audio.mp3", "a_conver" => $l25_G953_G954_image . "what-she-wear.png", "background" =>  $l25_G953_G954_image . "2/" . "bg.png"],
            ['round' => 1, 'game_id' => 954, 'a_image' => $l25_G953_G954_image . "2/" . "boy.gif", "a_audio" => $AudioDomain . $G4_L25_listen_n_repeat . "audio.mp3", "a_conver" => $l25_G953_G954_image . "she-wear.png", "background" =>  $l25_G953_G954_image . "2/" . "bg.png"],

            ['round' => 2, 'game_id' => 954, 'a_image' => $l25_G953_G954_image . "2/" . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L25_listen_n_repeat . "audio.mp3", "a_conver" => $l25_G953_G954_image . "what-he-wear.png", "background" =>  $l25_G953_G954_image . "2/" . "bg.png"],
            ['round' => 2, 'game_id' => 954, 'a_image' => $l25_G953_G954_image . "2/" . "boy.gif", "a_audio" => $AudioDomain . $G4_L25_listen_n_repeat . "audio.mp3", "a_conver" => $l25_G953_G954_image . "he-wear.png", "background" =>  $l25_G953_G954_image . "2/" . "bg.png"],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 25 Game 955 ( Spelling Game )
        ////////////////////////////////////////////////////////

        $G4_L25_spelling_game = "Grade_4/" . "Lesson_25/" . "spelling_game/";
        $l25_G955_image = $domain . "/storage/images/Grade_4/lesson_25/spelling_game/";


        $q_G955 = [

            ["O", "S", "E", "B", "U", "L"],
            ["R", "E", "S", "D", "S"],
            ["P", "F", "L", "L", "O", "I", "P", "F", "S"],
            ["E", "S", "N", "J", "A"],
            ["A", "J", "M", "S", "P", "A", "Y"],
            ["N", "S", "A", "A", "D", "L", "S"],
            ["S", "O", "S", "T", "H", "R"],
            ["I", "K", "T", "S", "R"],
            ["R", "E", "T", "A", "W", "E", "S"],
            ["K", "U", "T", "A", "I", "C", "T", "S", "R"],
            ["S", "R", "T", "R", "A", "N", "I", "E"],
            ["S", "I", "T", "R", "H", "T"],
            ["G", "A", "S", "L", "S", "E", "S", "U", "N"],
            ["S", "E", "Y", "G", "S", "E", "L", "S", "E", "A"],
            ["A", "T", "H"],
            ["P", "C", "A"],

        ];

        $a_G955 = [
            "BLOUSE", "DRESS", "FLIPFLOPS", "JEANS", "PYJAMAS", "SANDALS", "SHORTS", "SKIRT", "SWEATER", "TRACKSUIT", "TRAINERS", "TSHIRT", "SUNGLASSES", "EYEGLASSES", "HAT", "CAP"
        ];

        $G955_Index = 0;

        for ($i = 0; $i < count($q_G955); $i++) {
            foreach ($q_G955[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 955, 'q_content' => $j, 'q_audio' => $AudioDomain . $G4_L25_spelling_game . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 955,
                    'q_image' => $l25_G955_image . str_replace(' ', '', strtolower($a_G955[$G955_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G4_L25_spelling_game . strtolower($a_G955[$G955_Index]) . ".mp3",
                    'a_content' => $a_G955[$G955_Index],
                ],
            ]);
            $G955_Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 25 Game 956 (  Practice  )
        ////////////////////////////////////////////////////////

        $l25_G956_image = $domain . "/storage/images/Grade_4/lesson_25/practice/";
        $G4_L25_practice = "Grade_4/" . "Lesson_25/" . "practice/";


        $G4_L25_Game956_practice = [

            ['Trainers', 'Blouse', 'Skirt', 'T-shirt', "Sweater"],
            ['Sunglasses', 'Eyeglasses', 'Cap', "Hat",  'Jacket'],

        ];

        $G4_L25_Game956_practice_image = [

            ["Sweater", 'Skirt', 'T-shirt', 'Trainers', 'Blouse'],
            ["Hat", 'Cap', 'Jacket',  'Sunglasses', 'Eyeglasses'],

        ];


        for ($i = 0; $i < count($G4_L25_Game956_practice); $i++) {

            foreach ($G4_L25_Game956_practice[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 956, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G4_L25_practice .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_L25_Game956_practice_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 956, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l25_G956_image . str_replace(' ', '-', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G4_L25_practice . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 25 Game 957 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L25_practice_speaking = "Grade_4/" . "Lesson_25/" . "speaking_practice/";
        $l25_G957image = $domain . "/storage/images/Grade_4/lesson_25/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 957,  'q_image' => $l25_G957image . "pyjama.png", "q_audio" => $AudioDomain . $G4_L25_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L25_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3", "q_content" => "A: What's he wearing?\nB: __________________________.",  "a_content" => "Sample \nStudent A: What's he wearing?\nStudent B: He's wearing pyjamas."],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 957,  'q_image' => $l25_G957image . "flower.png", "q_audio" => $AudioDomain . $G4_L25_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L25_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "A: What's she wearing?\nB: __________________________."],
            ['round' => 3, 'game_id' => 957,  'q_image' => $l25_G957image . "skirt.png", "q_audio" => $AudioDomain . $G4_L25_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L25_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "A: What's she wearing?\nB: __________________________."],
            ['round' => 4, 'game_id' => 957,  'q_image' => $l25_G957image . "sunglasses.png", "q_audio" => $AudioDomain . $G4_L25_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L25_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "A: What's she wearing?\nB: __________________________."],
            ['round' => 5, 'game_id' => 957,  'q_image' => $l25_G957image . "sweater.png", "q_audio" => $AudioDomain . $G4_L25_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L25_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "A: What's he wearing?\nB: __________________________."],
            ['round' => 6, 'game_id' => 957,  'q_image' => $l25_G957image . "trainers.png", "q_audio" => $AudioDomain . $G4_L25_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L25_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "A: What's he wearing?\nB: __________________________."],
            ['round' => 7, 'game_id' => 957,  'q_image' => $l25_G957image . "t-shirt.png", "q_audio" => $AudioDomain . $G4_L25_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L25_practice_speaking . "SubBlock_Look-at-the-sample-picture-and" . ".mp3",  "q_content" => "A: What's he wearing?\nB: __________________________."],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 25 Game 958 (  Listen and Practice )
        //////////////////////////////////////////////////////////////

        $G4_L25_listen_n_practice = "Grade_25/Lesson_25/Listen_and_Practice/";
        $l25_G958image = $domain .  "/storage/images/Grade_25/lesson_25/Listen_and_Practice/";

        $G4L25U5 = range(1, 4);
        $G4L25U5content = [
            "Ben is wearing a sweater, pants, and trainers.",
            "Anna is wearing a dress, a hat, and trainers.",
            "Rose is wearing a blouse, a skirt, sunglasses and shoes.",
            "Max is wearing a T-shirt, pants, and trainers."
        ];

        foreach ($G4L25U5 as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 958, 'q_image' => $l25_G958image . $G4L25U5[$v - 1] . ".png",
                    'q_audio' =>  $AudioDomain . $G4_L25_listen_n_practice . $G4L25U5[$v - 1] . ".mp3", 'a_content' => $G4L25U5content[$v - 1]
                ],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 25 Game 959 (  Speaking topic )
        //////////////////////////////////////////////////////////////

        $G4_L25_speaking_topic = "Grade_4/" . "Lesson_25/" . "speaking_topic/";
        $l25_G959image = $domain . "/storage/images/Grade_4/lesson_25/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 959,  'q_image' => $l25_G959image . "pic.png", "q_audio" => $AudioDomain . $G4_L25_speaking_topic . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L25_speaking_topic . "SubBlock_Look-at-the-pictures-below-De" . ".mp3", "q_content" => "What's he wearing? What's she wearing?\nHe's wearing ______________________.\nShe's wearing ______________________."],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 25 Game 960 (  Writing Topic )
        //////////////////////////////////////////////////////////////

        $G4_L25_Game960_ans = "She is wearing a T-shirt and blue jeans. She's also wearing eyeglasses, hat, and trainers.";
        $l25_G960image = $domain . "/storage/images/Grade_4/lesson_25/writing_topic/";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 960, 'q_content' => $l25_G960image . "pic.png", "q_image" => $l25_G960image . "big-pic.png", 'a_content' => $G4_L25_Game960_ans],
        ]);









        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 38 Game 1047  ( Listen and Repeat )
        //////////////////////////////////////////////////////////////

        $l38_G1047_image = $domain . "/storage/images/Grade_4/lesson_38/listen_n_repeat/";
        $G4_L38_listen_n_repeat = "Grade_4/" . "Lesson_38/" . "listen_n_repeat/";

        $ans_G1047 = [
            "what-will-she", "what-will-he", "what-will-they",
        ];

        foreach ($ans_G1047 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1047, 'a_content' => $key, 'a_image' => $l38_G1047_image . "1/" . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L38_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 38 Game 1048 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L38_practice_speaking = "Grade_4/" . "Lesson_38/" . "speaking_practice/";
        $l38_G1048image = $domain . "/storage/images/Grade_4/lesson_38/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 1048,  'q_image' => $l38_G1048image . "tomorrow.png", "q_audio" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3", "q_content" => "Q: What will you do on tomorrow?\nA: _____________________.",  "a_content" => "Sample \nQ: What will you do tomorrow?\nA: I will stay at home tomorrow."],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 1048,  'q_image' => $l38_G1048image . "grandma.png", "q_audio" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3",  "q_content" => "Q: What will you do on Monday?\nA: _____________________."],
            ['round' => 3, 'game_id' => 1048,  'q_image' => $l38_G1048image . "watching.png", "q_audio" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3",  "q_content" => "Q: What will you do on Tuesday?\nA: _____________________."],
            ['round' => 4, 'game_id' => 1048,  'q_image' => $l38_G1048image . "grandma.png", "q_audio" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3",  "q_content" => "Q: What will you do on Wednesday?\nA: _____________________."],
            ['round' => 5, 'game_id' => 1048,  'q_image' => $l38_G1048image . "cinema.png", "q_audio" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3",  "q_content" => "Q: What will you do on Thursday?\nA: _____________________."],
            ['round' => 6, 'game_id' => 1048,  'q_image' => $l38_G1048image . "swim.png", "q_audio" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3",  "q_content" => "Q: What will you do on Friday?\nA: _____________________."],
            ['round' => 7, 'game_id' => 1048,  'q_image' => $l38_G1048image . "read.png", "q_audio" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L38_practice_speaking . "" . ".mp3",  "q_content" => "Q: What will you do on Saturday?\nA: _____________________."],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 38 Game 1049 ( Listening Practice )
        ////////////////////////////////////////////////////////

        $l38_G1049_image = $domain . "/storage/images/Grade_4/lesson_38/listening_practice/";
        $G4_L38_listening = "Grade_4/" . "Lesson_38/" . "listening_practice/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 1049,  'q_audio' =>  $AudioDomain . $G4_L38_listening . "SubBlock_She-will-go-to-the-supermarket" . ".mp3", "q_conver" => "What will she buy there?", "q_content" => "A T-shirt", "a_content" => 0],
            ['round' => 1, 'game_id' => 1049,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A skirt", "a_content" => 0],
            ['round' => 1, 'game_id' => 1049,  'q_audio' =>  null, "q_conver" => null, "q_content" => "A dress", "a_content" => 1],

            ['round' => 2, 'game_id' => 1049,  'q_audio' =>  $AudioDomain . $G4_L38_listening . "SubBlock_He-will-stay-at-home-and-help" . ".mp3", "q_conver" => "What will he do after?", "q_content" => "Wiil stay at home",  "a_content" => 0],
            ['round' => 2, 'game_id' => 1049,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Will help his mother", "a_content" => 0],
            ['round' => 2, 'game_id' => 1049,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Will ride a bicycle", "a_content" => 1],

            ['round' => 3, 'game_id' => 1049,  'q_audio' =>  $AudioDomain . $G4_L38_listening . "SubBlock_He-will-go-to-the-swimming-poo" . ".mp3", "q_conver" => "Who will he help?", "q_content" => "His mother", "a_content" => 1],
            ['round' => 3, 'game_id' => 1049,  'q_audio' =>  null, "q_conver" => null, "q_content" => "His sister", "a_content" => 0],
            ['round' => 3, 'game_id' => 1049,  'q_audio' =>  null, "q_conver" => null, "q_content" => "His brother", "a_content" => 0],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 38 Game 1050 (  Practice  )
        ////////////////////////////////////////////////////////

        $l38_G1050_image = $domain . "/storage/images/Grade_4/lesson_38/reading_passage/";
        $G4_L38_reading_passage_path = "Grade_4/" . "Lesson_38/" . "reading_passage/";

        $l38_G1050_q_audio = [
            "SubBlock_Where-will-Emma-go-on-Monday",
            "SubBlock_What-will-Emma-do-from-Tuesday",
            "SubBlock_What-will-she-do-in-the-evenin",
            "SubBlock_Where-will-she-go-on-Friday-a",
            "SubBlock_Who-will-she-go-there-with-He",
            "SubBlock_What-will-she-do-on-Saturday"
        ];
        $l38_G1050_q_conver = [
            "Where will Emma go on Monday?",
            "What will Emma do from Tuesday to Thursday?",
            "What will she do in the evening?",
            "Where will she go on Friday?",
            "Who will she go there with?",
            "What will she do on Saturday?",
        ];
        $l38_G1050_q_audio_ans = [
            ["The sport centre", "The swimming pool", "The restaurant "],
            ["The sport centre", "The school", "The restaurant "],
            ["Will swim", "Will play badminton", "Will ride a bicycle"],
            ["A restaurant ", "A library", "A shopping centre"],
            ["Her parents", "Her friends", "Her sister"],
            ["Go shopping", "Will swim", "Will stay at home "]
        ];
        $l38_G1050_q_audio_a_content = [
            [0, 1, 0],
            [0, 1, 0],
            [0, 1, 0],
            [1, 0, 0],
            [1, 0, 0],
            [1, 0, 0],
        ];


        for ($i = 0; $i < count($l38_G1050_q_audio); $i++) {

            foreach ($l38_G1050_q_audio_ans[$i] as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 1050, "q_audio" => $AudioDomain . $G4_L38_reading_passage_path . str_replace(' ', '-', strtolower($val)) . ".mp3", 'q_content' => $val, 'a_content' => $l38_G1050_q_audio_a_content[$i][$key]],
                ]);
            }

            foreach ($l38_G1050_q_audio as $key => $val) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 1050, "q_audio" => $AudioDomain . $G4_L38_reading_passage_path . $val . ".mp3", "q_conver" => $l38_G1050_q_conver[$key]],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 1050, "q_audio" => $AudioDomain . $G4_L38_reading_passage_path . "SubBlock_Hi-I-am-Emma-This-is-my-plan" . ".mp3", "q_conver" => "Hi! I am Emma. This is my plan for next week. I will go to the swimming pool with my sister on Monday. I am excited. From Tuesday to Thursday, I will go to school. In the evening, I will play badminton with my brother. He is very good at playing badminton. I will go to a restaurant with my parents on Friday. Then, on Saturday, we will go shopping together. On Sunday, I will stay at home and watch TV.",
                    'a_content' => null, "q_content" => "My plan for next week", "background" => $l38_G1050_image . "bg.png"
                ],
            ]);
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 38 Game 1051 (  Speaking topic )
        //////////////////////////////////////////////////////////////

        $G4_L38_speaking_topic = "Grade_4/" . "Lesson_38/" . "speaking_topic/";
        $l38_G1051image = $domain . "/storage/images/Grade_4/lesson_38/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 1051,  'q_image' => $l38_G1051image . "green-star.png", "round_instruction" => $AudioDomain . $G4_L38_speaking_topic . "SubBlock_Look-at-the-table-below-Talk" . ".mp3", "q_content" => $l38_G1051image . "text.png"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 39 Game 1052 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 1052, 'a_content' => 'lesson_39_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 1052, 'a_content' => 'lesson_39_video_global', 'isLocal' => 0]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 39 Game 1053 , 1054 ( Listen and Repeat )
        //////////////////////////////////////////////////////////////

        $l39_G1053_G1054_image = $domain . "/storage/images/Grade_4/lesson_39/listen_n_repeat/";
        $G4_L39_listen_n_repeat = "Grade_4/" . "Lesson_39/" . "listen_n_repeat/";


        // Game 1053
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 1053, 'a_image' => $l39_G1053_G1054_image . "girl.gif", "a_audio" => $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "hello.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],
            ['round' => 1, 'game_id' => 1053, 'a_image' => $l39_G1053_G1054_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "hello-may-i-speak.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],

            ['round' => 2, 'game_id' => 1053, 'a_image' => $l39_G1053_G1054_image . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "this-is-anna.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],
            ['round' => 2, 'game_id' => 1053, 'a_image' => $l39_G1053_G1054_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "hi-anna-this-is-max.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],

            ['round' => 3, 'game_id' => 1053, 'a_image' => $l39_G1053_G1054_image . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "that-sound-great.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],
            ['round' => 3, 'game_id' => 1053, 'a_image' => $l39_G1053_G1054_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "at-6.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],

            ['round' => 4, 'game_id' => 1053, 'a_image' => $l39_G1053_G1054_image . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "ok-i-be-there.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],
            ['round' => 4, 'game_id' => 1053, 'a_image' => $l39_G1053_G1054_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "see-u.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],

        ]);

        // Game 1054
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 1054, 'a_image' => $l39_G1053_G1054_image . "girl.gif", "a_audio" => $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "i-will-go-to-mus.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],
            ['round' => 1, 'game_id' => 1054, 'a_image' => $l39_G1053_G1054_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "the-mus-that-sound.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],

            ['round' => 2, 'game_id' => 1054, 'a_image' => $l39_G1053_G1054_image . "girl.gif", "a_audio" =>  $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "would-you-like-to.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],
            ['round' => 2, 'game_id' => 1054, 'a_image' => $l39_G1053_G1054_image . "boy.gif", "a_audio" => $AudioDomain . $G4_L39_listen_n_repeat . "audio.mp3", "a_conver" => $l39_G1053_G1054_image . "sure-i-would.png", "background" =>  $l39_G1053_G1054_image . "bg.png"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 39 Game 1055 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G4_L39_practice_speaking = "Grade_4/" . "Lesson_39/" . "speaking_practice/";
        $l39_G1055image = $domain . "/storage/images/Grade_4/lesson_39/speaking_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 1055,  'q_image' => $l39_G1055image . "museum.png", "q_audio" => $AudioDomain . $G4_L39_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L39_practice_speaking . "" . ".mp3", "q_content" => "A: I will go to _______ with my aunt tomorrow.\nB: The museum! That sounds great.\nA: Would you like to join us?\nB: __________________________.",  "a_content" => "Sample \nA: I will go to the museum with my aunt tomorrow.\nB: The museum! That sounds great.\nA: Would you like to join us?\nB: Sure, I would love to."],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 1055,  'q_image' => $l39_G1055image . "shopping-centre.png", "q_audio" => $AudioDomain . $G4_L39_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L39_practice_speaking . "SubBlock_Look-at-the-following-picture" . ".mp3",  "q_content" => "A: I will go to _______ with my aunt tomorrow.\nB: The shopping centre! That sounds great.\nA: Would you like to join us?\nB: __________________________."],
            ['round' => 3, 'game_id' => 1055,  'q_image' => $l39_G1055image . "zoo.png", "q_audio" => $AudioDomain . $G4_L39_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L39_practice_speaking . "SubBlock_Look-at-the-following-picture" . ".mp3",  "q_content" => "A: I will go to _______ with my aunt tomorrow.\nB: The zoo! That sounds great.\nA: Would you like to join us?\nB: __________________________."],
            ['round' => 4, 'game_id' => 1055,  'q_image' => $l39_G1055image . "library.png", "q_audio" => $AudioDomain . $G4_L39_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L39_practice_speaking . "SubBlock_Look-at-the-following-picture" . ".mp3",  "q_content" => "A: I will go to _______ with my aunt tomorrow.\nB: The library! That sounds great.\nA: Would you like to join us?\nB: __________________________."],
            ['round' => 5, 'game_id' => 1055,  'q_image' => $l39_G1055image . "swim.png", "q_audio" => $AudioDomain . $G4_L39_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L39_practice_speaking . "SubBlock_Look-at-the-following-picture" . ".mp3",  "q_content" => "A: I will go to _______ with my aunt tomorrow.\nB:_______! That sounds great.\nA: __________________?\nB: __________________________."],
            ['round' => 6, 'game_id' => 1055,  'q_image' => $l39_G1055image . "cinema.png", "q_audio" => $AudioDomain . $G4_L39_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L39_practice_speaking . "SubBlock_Look-at-the-following-picture" . ".mp3",  "q_content" => "A: I will go to _______ with my aunt tomorrow.\nB: _______! That sounds great.\nA: __________________?\nB: __________________________."],
            ['round' => 7, 'game_id' => 1055,  'q_image' => $l39_G1055image . "playground.png", "q_audio" => $AudioDomain . $G4_L39_practice_speaking . "" . ".mp3", "round_instruction" => $AudioDomain . $G4_L39_practice_speaking . "SubBlock_Look-at-the-following-picture" . ".mp3",  "q_content" => "A: I will go to _______ with my aunt tomorrow.\nB: _______! That sounds great.\nA: __________________?\nB: __________________________."],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 39 Game 1056 ( Listening Practice )
        ////////////////////////////////////////////////////////

        $l39_G1056_image = $domain . "/storage/images/Grade_4/lesson_39/listening_practice/";
        $G4_L39_listening = "Grade_4/" . "Lesson_39/" . "listening_practice/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 1056,  'q_audio' =>  $AudioDomain . $G4_L39_listening . "conver" . ".mp3", "q_conver" => "Where will Max's friend go?", "q_content" => "The park", "a_content" => 0],
            ['round' => 1, 'game_id' => 1056,  'q_audio' =>  null, "q_conver" => null, "q_content" => "The zoo", "a_content" => 1],
            ['round' => 1, 'game_id' => 1056,  'q_audio' =>  null, "q_conver" => null, "q_content" => "The shopping centre", "a_content" => 0],

            ['round' => 2, 'game_id' => 1056,  'q_audio' =>  $AudioDomain . $G4_L39_listening . "conver" . ".mp3", "q_conver" => "Will Max join him?", "q_content" => "Yes, he will",  "a_content" => 1],
            ['round' => 2, 'game_id' => 1056,  'q_audio' =>  null, "q_conver" => null, "q_content" => "No, he won't", "a_content" => 0],

            ['round' => 3, 'game_id' => 1056,  'q_audio' =>  $AudioDomain . $G4_L39_listening . "conver" . ".mp3", "q_conver" => "Where will Jack's friend go?", "q_content" => "The park", "a_content" => 1],
            ['round' => 3, 'game_id' => 1056,  'q_audio' =>  null, "q_conver" => null, "q_content" => "The zoo", "a_content" => 0],
            ['round' => 3, 'game_id' => 1056,  'q_audio' =>  null, "q_conver" => null, "q_content" => "The shopping centre", "a_content" => 0],

            ['round' => 4, 'game_id' => 1056,  'q_audio' =>  $AudioDomain . $G4_L39_listening . "conver" . ".mp3", "q_conver" => "Will Jack join him?", "q_content" => "Yes, he will", "a_content" => 1],
            ['round' => 4, 'game_id' => 1056,  'q_audio' =>  null, "q_conver" => null, "q_content" => "No, he won't", "a_content" => 0],

            ['round' => 5, 'game_id' => 1056,  'q_audio' =>  $AudioDomain . $G4_L39_listening . "conver" . ".mp3", "q_conver" => "When will Rose's friend go to the shopping centre?", "q_content" => "The park", "a_content" => 0],
            ['round' => 5, 'game_id' => 1056,  'q_audio' =>  null, "q_conver" => null, "q_content" => "The zoo", "a_content" => 0],
            ['round' => 5, 'game_id' => 1056,  'q_audio' =>  null, "q_conver" => null, "q_content" => "The shopping centre", "a_content" => 1],

            ['round' => 6, 'game_id' => 1056,  'q_audio' =>  $AudioDomain . $G4_L39_listening . "conver" . ".mp3", "q_conver" => "Will she join him? ", "q_content" => "Yes, she will", "a_content" => 0],
            ['round' => 6, 'game_id' => 1056,  'q_audio' =>  null, "q_conver" => null, "q_content" => "No, she won't", "a_content" => 1],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 39 Game 1057 (  Speaking topic )
        //////////////////////////////////////////////////////////////

        $G4_L39_speaking_topic = "Grade_4/" . "Lesson_39/" . "speaking_topic/";
        $l39_G1057image = $domain . "/storage/images/Grade_4/lesson_39/speaking_topic/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 1057,  'q_image' => $l39_G1057image . "green-star.png", "round_instruction" => $AudioDomain . $G4_L39_speaking_topic . "SubBlock_Look-at-the-given-question-Re" . ".mp3", "q_content" => "A: Would you like to go to the library with me?\nB: Yes, ___________________."],
            ['round' => 2, 'game_id' => 1057,  'q_image' => $l39_G1057image . "green-star.png", "round_instruction" => $AudioDomain . $G4_L39_speaking_topic . "SubBlock_Look-at-the-given-question-Re" . ".mp3", "q_content" => "A: Would you like to go to the swimming pool with me?\nB: I am sorry. ___________________."],
            ['round' => 3, 'game_id' => 1057,  'q_image' => $l39_G1057image . "green-star.png", "round_instruction" => $AudioDomain . $G4_L39_speaking_topic . "SubBlock_Look-at-the-given-question-Re" . ".mp3", "q_content" => "A: ___________________? \nB: I am sorry. I can't."],
            ['round' => 4, 'game_id' => 1057,  'q_image' => $l39_G1057image . "green-star.png", "round_instruction" => $AudioDomain . $G4_L39_speaking_topic . "SubBlock_Look-at-the-given-question-Re" . ".mp3", "q_content" => "A: ___________________? \nB: Sure, I would love to."],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 40 Game 1058  ( Listen and Repeat )
        //////////////////////////////////////////////////////////////

        $l40_G1058_image = $domain . "/storage/images/Grade_4/lesson_40/listen_n_repeat/";
        $G4_L40_listen_n_repeat = "Grade_4/" . "Lesson_40/" . "listen_n_repeat/";

        $ans_G1058 = [
            "bd-party", "invite", "bd-cake", "coco-rice", "sing-songs"
        ];

        foreach ($ans_G1058 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1058, 'a_content' => $key, 'a_image' => $l40_G1058_image . "1/" . $key  . ".png",
                    'a_audio' => $AudioDomain . $G4_L40_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4  Lesson 40 Game 1059   (  Practice  )
        ////////////////////////////////////////////////////////

        $l40_G1059_image = $domain . "/storage/images/Grade_4/lesson_40/practice/";
        $G4_L40_practice_path = "Grade_4/" . "Lesson_40/" . "practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 1059, 'q_image' => $l40_G1059_image .  "us.png",  "q_content" => "US Dollar", "a_content" => 1],
            ['round' => 1, 'game_id' => 1059, 'q_image' => null, "q_content" => "Pound", "a_content" => 0],
            ['round' => 1, 'game_id' => 1059, 'q_image' => null, "q_content" => "Euro", "a_content" => 0],

            ['round' => 2, 'game_id' => 1059, 'q_image' => $l40_G1059_image .  "france.png",  "q_content" => "US Dollar", "a_content" => 0],
            ['round' => 2, 'game_id' => 1059, 'q_image' => null, "q_content" => "Pound", "a_content" => 0],
            ['round' => 2, 'game_id' => 1059, 'q_image' => null, "q_content" => "Euro", "a_content" => 1],

            ['round' => 3, 'game_id' => 1059, 'q_image' => $l40_G1059_image .  "uk.png",  "q_content" => "US Dollar", "a_content" => 0],
            ['round' => 3, 'game_id' => 1059, 'q_image' => null, "q_content" => "Pound", "a_content" => 1],
            ['round' => 3, 'game_id' => 1059, 'q_image' => null, "q_content" => "Euro", "a_content" => 0],

            ['round' => 4, 'game_id' => 1059, 'q_image' => $l40_G1059_image .  "italy.png",  "q_content" => "US Dollar", "a_content" => 0],
            ['round' => 4, 'game_id' => 1059, 'q_image' => null, "q_content" => "Pound", "a_content" => 0],
            ['round' => 4, 'game_id' => 1059, 'q_image' => null, "q_content" => "Euro", "a_content" => 1],

            ['round' => 5, 'game_id' => 1059, 'q_image' => $l40_G1059_image .  "germany.png",  "q_content" => "US Dollar", "a_content" => 0],
            ['round' => 5, 'game_id' => 1059, 'q_image' => null, "q_content" => "Pound", "a_content" => 0],
            ['round' => 5, 'game_id' => 1059, 'q_image' => null, "q_content" => "Euro", "a_content" => 1],

        ]);
    }
}
