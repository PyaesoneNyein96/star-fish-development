<?php

namespace Database\Seeders\AnsNQueSeed2\Grade3;

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
        ////    Grade 3  Lesson 1 Game 457 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 457, 'a_content' => 'lesson_1_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 457, 'a_content' => 'lesson_1_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 458 (  Reading  )
        ////////////////////////////////////////////////////////

        $l1_G458_image = $domain . "/storage/images/Grade_3/lesson_1/reading/";
        $G3_L1_reading = "Grade_3/" . "Lesson_1/" . "reading/";


        $ans_G458 = [
            "He is a writer", "She is a shopkeeper", "She is a teacher", "He is a farmer",  "He is a dancer", "She is a student", "He is a sailor", "She is a flight attendant", "He is a pilot", "He is a waiter", "He is an engineer", "He is a bus driver", "She is a singer", "He is a guitarist", "He is a taxi driver"
        ];

        $G3_L1_Game458_index = 0;

        foreach ($ans_G458 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 458, 'a_content' => $key, 'a_image' => $l1_G458_image . str_replace(' ', '-',  strtolower($ans_G458[$G3_L1_Game458_index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L1_reading . str_replace(' ', '-', strtolower($ans_G458[$G3_L1_Game458_index])) . ".mp3"
                ],
            ]);
            $G3_L1_Game458_index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 459 ( look and write )
        ////////////////////////////////////////////////////////

        $l1_G459_image = $domain . "/storage/images/Grade_3/lesson_1/learning_n_practice/";
        $G3_L1_look_n_write = "Grade_3/" . "Lesson_1/" . "learning_n_practice/";

        $q_content_G3_L1_Game459_img = ["doctor", "dancer", "teacher", "writer", "farmer", "shopkeeper", "flight-attendant", "engineer", "waiter", "student"];

        $a_content_G3_L1_Game459 = [
            'Yes, He is a doctor', 'He is a dancer', 'She is a teacher', 'He is a writer', 'He is a farmer', 'She is a shopkeeper', 'she is a flight attendant', 'He is an engineer', "They are waiters", "I am a student"
        ];

        foreach ($q_content_G3_L1_Game459_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 459, 'round' => $key + 1,
                    'q_image' => $l1_G459_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L1_look_n_write . $value . ".mp3",
                    'a_content' => $a_content_G3_L1_Game459[$key],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 460 ( Listen and write )
        ////////////////////////////////////////////////////////

        $l1_G460_image = $domain . "/storage/images/Grade_3/lesson_1/listen_n_write/";
        $G3_L1_listen_n_write = "Grade_3/" . "Lesson_1/" . "listen_n_write/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 460,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "My-brothers-name-is-Tony-He" . ".mp3", "q_content" => "a teacher", "a_content" => 0],
            ['round' => 1, 'game_id' => 460,  'q_audio' =>  null, "q_content" => "a cook", "a_content" => 1],

            ['round' => 2, 'game_id' => 460,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "My-sisters-name-is-Maria-She" . ".mp3", "q_content" => "a student", "a_content" => 1],
            ['round' => 2, 'game_id' => 460,  'q_audio' =>  null, "q_content" => "a farmer", "a_content" => 0],

            ['round' => 3, 'game_id' => 460,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "My-uncles-name-is-Chris-He-i" . ".mp3", "q_content" => "a cook", "a_content" => 0],
            ['round' => 3, 'game_id' => 460,  'q_audio' =>  null, "q_content" => "a doctor", "a_content" => 1],

            ['round' => 4, 'game_id' => 460,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "My-mothers-name-is-Mary-She" . ".mp3", "q_content" => "a doctor", "a_content" => 0],
            ['round' => 4, 'game_id' => 460,  'q_audio' =>  null, "q_content" => "a teacher", "a_content" => 1],

            ['round' => 5, 'game_id' => 460,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "My-fathers-name-is-George-He" . ".mp3", "q_content" => "a farmer", "a_content" => 1],
            ['round' => 5, 'game_id' => 460,  'q_audio' =>  null, "q_content" => "a teacher", "a_content" => 0],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 461 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L1_practice_speaking = "Grade_3/" . "Lesson_1/" . "practice_speaking/";
        $l1_G461image = $domain . "/storage/images/Grade_3/lesson_1/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 461, 'q_image' => $l1_G461image . "teacher.png", "q_conver" => "What is your brother?", "round_instruction" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-brother" . ".mp3"],
            ['round' => 2, 'game_id' => 461, 'q_image' => $l1_G461image . "teacher.png", "q_conver" => "What is your sister?", "round_instruction" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-sister" . ".mp3"],
            ['round' => 3, 'game_id' => 461, 'q_image' => $l1_G461image . "teacher.png", "q_conver" => "What is your are you?", "round_instruction" => $AudioDomain . $G3_L1_practice_speaking . "what-are-you" . ".mp3"],
            ['round' => 4, 'game_id' => 461, 'q_image' => $l1_G461image . "teacher.png", "q_conver" => "What is your mother?", "round_instruction" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-mother" . ".mp3"],
            ['round' => 4, 'game_id' => 461, 'q_image' => $l1_G461image . "teacher.png", "q_conver" => "What is your father?", "round_instruction" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-father" . ".mp3"],
        ]);






        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 462 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L1_Game462_ans = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magnam animi a rem recusandae, nobis voluptate, quas laboriosam alias natus esse delectus necessitatibus ipsum sed debitis dolorem. Repellendus, quibusdam beatae.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 462, 'a_content' => $G3_L1_Game462_ans],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 463 (  Speaking )
        //////////////////////////////////////////////////////////////

        $G2_L1_speaking = "Grade_2/" . "Lesson_1/" . "speaking/";
        $l1_G254image = $domain . "/storage/images/Grade_2/lesson_1/speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 463,   'q_image' => $l1_G254image . "teacher.png", "q_conver" => "Describe your family members \nHow many family members do you have? \nWhat are they? \nWhat do they do everyday?"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 464 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 464, 'a_content' => 'lesson_2_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 464, 'a_content' => 'lesson_2_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 465 (  Reading  )
        ////////////////////////////////////////////////////////

        $l2_G465_image = $domain . "/storage/images/Grade_3/lesson_2/reading/";
        $G3_L2_reading = "Grade_3/" . "Lesson_2/" . "reading/";


        $ans_G465 = [
            "This is my father. He is handsome.",
            "This is my mother. She is beautiful.",
            "This is my sister. She is clever.",
            "This is my brother. He is smart.",
            "This is my grandfather. He is quiet.",
            "This is my grandmother. She is kind.",
            "This is my cousin brother. He is helpful.",
            "This is my cousin sister. She is talkative.",
            "This is my mother. She is friendly.",
            "This is my father. He is hardworking.",
            "This is my brother. He is tall.",
            "This is my sister. She is gorgeous.",
            "This is my grandmother. She is nice.",
            "This is my grandfather. He is fat.",
            "This is me. I am strong.",
            "This is me. I am attractive."
        ];

        $audio_img_G465 = [
            "father-handsome",
            "mother-beautiful",
            "sister-clever",
            "brother-smart",
            "grandfather-quiet",
            "grandmother-kind",
            "cousin-helpful",
            "cousin-talkative",
            "mother-friendly",
            "father-hardworking",
            "brother-tall",
            "sister-gorgeous",
            "grandmother-nice",
            "grandfather-fat",
            "me-strong",
            "me-attractive"
        ];

        $G3_L2_Game465_index = 0;

        foreach ($ans_G465 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 465, 'a_content' => $key, 'a_image' => $l2_G465_image . str_replace(' ', '-',  strtolower($audio_img_G465[$G3_L2_Game465_index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L2_reading . str_replace(' ', '-', strtolower($audio_img_G465[$G3_L2_Game465_index])) . ".mp3"
                ],
            ]);
            $G3_L2_Game465_index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 466 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l2_G466_image = $domain . "/storage/images/Grade_3/lesson_2/listen_n_practice/";
        $G3_L2_listen_n_practice = "Grade_3/" . "Lesson_2/" . "listen_n_practice/";

        $q_content_G3_L2_Game466_img = ["handsome", "talkative", "funny", "gorgeous", "strong"];

        $a_content_G3_L2_Game466 = [
            'He is handsome', 'She is talkative', 'He is funny', 'She is gorgeous', 'Yes, He is strong'
        ];

        foreach ($q_content_G3_L2_Game466_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 466, 'round' => $key + 1,
                    'q_image' => $l2_G466_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L2_listen_n_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L2_Game466[$key],
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 467 ( Listening )
        ////////////////////////////////////////////////////////

        $l1_G460_image = $domain . "/storage/images/Grade_3/lesson_2/listening/";
        $G3_L1_listen_n_write = "Grade_3/" . "Lesson_2/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 467,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "clever" . ".mp3", "q_content" => "She is strong", "a_content" => 0],
            ['round' => 1, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "She is clever", "a_content" => 1],
            ['round' => 1, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "She is helpful", "a_content" => 0],

            ['round' => 2, 'game_id' => 467,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "funny" . ".mp3", "q_content" => "He is kind", "a_content" => 0],
            ['round' => 2, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "He is happy", "a_content" => 0],
            ['round' => 2, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "He is funny", "a_content" => 1],

            ['round' => 3, 'game_id' => 467,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "gorgeous" . ".mp3", "q_content" => "She is clever", "a_content" => 0],
            ['round' => 3, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "She is strong", "a_content" => 0],
            ['round' => 3, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "She is gorgeous", "a_content" => 1],

            ['round' => 4, 'game_id' => 467,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "friendly" . ".mp3", "q_content" => "They are friendly", "a_content" => 1],
            ['round' => 4, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "They are helpful", "a_content" => 0],
            ['round' => 4, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "They are kind", "a_content" => 0],

            ['round' => 5, 'game_id' => 467,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "handsome" . ".mp3", "q_content" => "He is strong", "a_content" => 0],
            ['round' => 5, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "He is handsome", "a_content" => 1],
            ['round' => 5, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "He is funny", "a_content" => 0],

        ]);
    }
}
