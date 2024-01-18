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

        $q_content_G3_L1_Game459 = [
            'What is he?', 'What is he?', 'What is he?', 'What is he?', 'What is he?', 'What is she?', 'What is she?', 'What is he?', "What are they?", "What are you?"
        ];

        foreach ($q_content_G3_L1_Game459_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 459, 'round' => $key + 1,
                    'q_content' => $q_content_G3_L1_Game459[$key],
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
            ['round' => 5, 'game_id' => 461, 'q_image' => $l1_G461image . "teacher.png", "q_conver" => "What is your father?", "round_instruction" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-father" . ".mp3"],
        ]);






        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 462 (  writing )
        //////////////////////////////////////////////////////////////

        $G3_L1_Game462_ans = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magnam animi a rem recusandae, nobis voluptate, quas laboriosam alias natus esse delectus necessitatibus ipsum sed debitis dolorem. Repellendus, quibusdam beatae.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 462, 'a_content' => $G3_L1_Game462_ans],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 463 (  Speaking )
        //////////////////////////////////////////////////////////////

        $G3_L1_speaking = "Grade_3/" . "Lesson_1/" . "speaking/";
        $l1_G463image = $domain . "/storage/images/Grade_3/lesson_1/speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 463,   'q_image' => $l1_G463image . "teacher.png", "q_conver" => "Describe your family members \nHow many family members do you have? \nWhat are they? \nWhat do they do everyday?"],
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

        $q_content_G3_L2_Game466 = [
            'What does he look like?', 'What is she like?', 'What does he look like?', 'What does she look like?', 'What is he like?'
        ];

        foreach ($q_content_G3_L2_Game466_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 466, 'round' => $key + 1,
                    'q_content' => $q_content_G3_L2_Game466[$key],
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
        $G3_L2_listening = "Grade_3/" . "Lesson_2/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 467,  'q_audio' =>  $AudioDomain . $G3_L2_listening . "clever" . ".mp3", "q_content" => "She is strong", "a_content" => 0],
            ['round' => 1, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "She is clever", "a_content" => 1],
            ['round' => 1, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "She is helpful", "a_content" => 0],

            ['round' => 2, 'game_id' => 467,  'q_audio' =>  $AudioDomain . $G3_L2_listening . "funny" . ".mp3", "q_content" => "He is kind", "a_content" => 0],
            ['round' => 2, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "He is happy", "a_content" => 0],
            ['round' => 2, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "He is funny", "a_content" => 1],

            ['round' => 3, 'game_id' => 467,  'q_audio' =>  $AudioDomain . $G3_L2_listening . "gorgeous" . ".mp3", "q_content" => "She is clever", "a_content" => 0],
            ['round' => 3, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "She is strong", "a_content" => 0],
            ['round' => 3, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "She is gorgeous", "a_content" => 1],

            ['round' => 4, 'game_id' => 467,  'q_audio' =>  $AudioDomain . $G3_L2_listening . "friendly" . ".mp3", "q_content" => "They are friendly", "a_content" => 1],
            ['round' => 4, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "They are helpful", "a_content" => 0],
            ['round' => 4, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "They are kind", "a_content" => 0],

            ['round' => 5, 'game_id' => 467,  'q_audio' =>  $AudioDomain . $G3_L2_listening . "handsome" . ".mp3", "q_content" => "He is strong", "a_content" => 0],
            ['round' => 5, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "He is handsome", "a_content" => 1],
            ['round' => 5, 'game_id' => 467,  'q_audio' =>  null, "q_content" => "He is funny", "a_content" => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 468 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L2_practice_speaking = "Grade_3/" . "Lesson_2/" . "practice_speaking/";
        $l2_G468image = $domain . "/storage/images/Grade_3/lesson_2/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 468, 'q_image' => $l2_G468image . "mother.png", "q_content" => "What is your mother like?", "round_instruction" => $AudioDomain . $G3_L2_practice_speaking . "what-is-your-mother-like" . ".mp3"],
            ['round' => 2, 'game_id' => 468, 'q_image' => $l2_G468image . "two-girls.png", "q_content" => "What does she look like?", "round_instruction" => $AudioDomain . $G3_L2_practice_speaking . "what-does-she-look-like" . ".mp3"],
            ['round' => 3, 'game_id' => 468, 'q_image' => $l2_G468image . "girl.png", "q_content" => "What does she look like?", "round_instruction" => $AudioDomain . $G3_L2_practice_speaking . "what-does-she-look-like" . ".mp3"],
            ['round' => 4, 'game_id' => 468, 'q_image' => $l2_G468image . "man.png", "q_content" => "What does he look like?", "round_instruction" => $AudioDomain . $G3_L2_practice_speaking . "what-does-he-look-like" . ".mp3"],
            ['round' => 5, 'game_id' => 468, 'q_image' => $l2_G468image . "man-strong.png", "q_content" => "What is your father like?", "round_instruction" => $AudioDomain . $G3_L2_practice_speaking . "what-is-your-father-like" . ".mp3"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 469 (  Writing )
        //////////////////////////////////////////////////////////////

        $G3_L2_Game469_ans = ["boys", "girl-cat", 'girl', "man", "old", "boy"];

        foreach ($G3_L2_Game469_ans as $key => $value) {
            DB::table('ans_n_ques')->insert([
                ["round" => $key + 1, 'game_id' => 469, 'q_content' => $value],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 470 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L2_speaking = "Grade_3/" . "Lesson_2/" . "Speaking/";
        $l2_G470image = $domain . "/storage/images/Grade_3/lesson_2/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 470, "q_content" => "Describe your family members. \nWhat are they like? What do they look like?"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 471 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 471, 'a_content' => 'lesson_3_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 471, 'a_content' => 'lesson_3_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 472 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l3_G472_image = $domain . "/storage/images/Grade_3/lesson_3/vocab/";
        $G3_L3_vocab = "Grade_3/" . "Lesson_3/" . "vocab/";


        $ans_G472 = [
            "Actor", "Actress", "Artist", "Athlete", "Chef", "Dentist", "Designer", "Engineer", "Hairdresser", "Lawyer", "Model", "Musician", "Nurse", "Pilot", "Police-officer", "Singer"
        ];

        foreach ($ans_G472 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 472, 'a_content' => $key, 'a_image' => $l3_G472_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L3_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 473 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l3_G473_image = $domain . "/storage/images/Grade_3/lesson_3/listen_n_practice/";
        $G3_L3_listen_n_practice = "Grade_3/" . "Lesson_3/" . "listen_n_practice/";

        $q_content_G3_L3_Game473_img = ["actress", "artist", "athlete", "lawyer", "hairdresser", "singer", "nurse", "musician", "actor", "pilot"];

        $a_content_G3_L3_Game473 = [
            "I want to be an actress",
            "I want to be an artist",
            "I want to be an athlete",
            "I want to be a lawyer",
            "I want to be a hairdresser",
            "I want to be a singer",
            "I want to be a nurse",
            "I want to be a musician",
            "I want to be an actor",
            "I want to be a pilot"
        ];

        $q_content_G3_L3_Game473 = [
            "Do you want to be an actress?",
            "Do you want to be an artist?",
            "Do you want to be an athlete?",
            "Do you want to be a lawyer?",
            "Do you want to be a hairdresser?",
            "Do you want to be a singer?",
            "Do you want to be a nurse?",
            "Do you want to be a musician?",
            "Do you want to be an actor?",
            "Do you want to be a pilot?"
        ];

        foreach ($q_content_G3_L3_Game473_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 473, 'round' => $key + 1,
                    'q_content' => $q_content_G3_L3_Game473[$key],
                    'q_image' => $l3_G473_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L3_listen_n_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L3_Game473[$key],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 474 ( Listening )
        ////////////////////////////////////////////////////////

        $l3_G474_image = $domain . "/storage/images/Grade_3/lesson_3/listening/";
        $G3_L3_listening = "Grade_3/" . "Lesson_3/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 474,  'q_audio' =>  $AudioDomain . $G3_L3_listening . "pilot" . ".mp3", "q_content" => "pilot", "a_content" => 1],
            ['round' => 1, 'game_id' => 474,  'q_audio' =>  null, "q_content" => "singer", "a_content" => 0],
            ['round' => 1, 'game_id' => 474,  'q_audio' =>  null, "q_content" => "nurse", "a_content" => 0],

            ['round' => 2, 'game_id' => 474,  'q_audio' =>  $AudioDomain . $G3_L3_listening . "nurse" . ".mp3", "q_content" => "singer", "a_content" => 0],
            ['round' => 2, 'game_id' => 474,  'q_audio' =>  null, "q_content" => "nurse", "a_content" => 1],
            ['round' => 2, 'game_id' => 474,  'q_audio' =>  null, "q_content" => "lawyer", "a_content" => 0],

            ['round' => 3, 'game_id' => 474,  'q_audio' =>  $AudioDomain . $G3_L3_listening . "singer" . ".mp3", "q_content" => "musian", "a_content" => 0],
            ['round' => 3, 'game_id' => 474,  'q_audio' =>  null, "q_content" => "designer", "a_content" => 0],
            ['round' => 3, 'game_id' => 474,  'q_audio' =>  null, "q_content" => "singer", "a_content" => 1],

            ['round' => 4, 'game_id' => 474,  'q_audio' =>  $AudioDomain . $G3_L3_listening . "artist" . ".mp3", "q_content" => "artist", "a_content" => 1],
            ['round' => 4, 'game_id' => 474,  'q_audio' =>  null, "q_content" => "designer", "a_content" => 0],
            ['round' => 4, 'game_id' => 474,  'q_audio' =>  null, "q_content" => "actress", "a_content" => 0],

            ['round' => 5, 'game_id' => 474,  'q_audio' =>  $AudioDomain . $G3_L3_listening . "engineer" . ".mp3", "q_content" => "designer", "a_content" => 0],
            ['round' => 5, 'game_id' => 474,  'q_audio' =>  null, "q_content" => "artist", "a_content" => 0],
            ['round' => 5, 'game_id' => 474,  'q_audio' =>  null, "q_content" => "engineer", "a_content" => 1],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 475 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L3_practice_speaking = "Grade_3/" . "Lesson_3/" . "practice_speaking/";
        $l3_G475image = $domain . "/storage/images/Grade_3/lesson_3/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 475, 'q_image' => $l3_G475image . "hairdresser.png", "q_content" => "Do you want to be a hairdresser?", "round_instruction" => $AudioDomain . $G3_L3_practice_speaking . "hairdresser" . ".mp3"],
            ['round' => 2, 'game_id' => 475, 'q_image' => $l3_G475image . "singer.png", "q_content" => "Do you want to be a singer?", "round_instruction" => $AudioDomain . $G3_L3_practice_speaking . "singer" . ".mp3"],
            ['round' => 3, 'game_id' => 475, 'q_image' => $l3_G475image . "designer.png", "q_content" => "Do you want to be a designer?", "round_instruction" => $AudioDomain . $G3_L3_practice_speaking . "designer" . ".mp3"],
            ['round' => 4, 'game_id' => 475, 'q_image' => $l3_G475image . "artist.png", "q_content" => "Do you want to be an artist?", "round_instruction" => $AudioDomain . $G3_L3_practice_speaking . "artist" . ".mp3"],
            ['round' => 5, 'game_id' => 475, 'q_image' => $l3_G475image . "pilot.png", "q_content" => "Do you want to be a pilot?", "round_instruction" => $AudioDomain . $G3_L3_practice_speaking . "pilot" . ".mp3"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 476 (  writing )
        //////////////////////////////////////////////////////////////

        $G3_L3_Game476_ans = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magnam animi a rem recusandae, nobis voluptate, quas laboriosam alias natus esse delectus necessitatibus ipsum sed debitis dolorem. Repellendus, quibusdam beatae.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 476, 'a_content' => $G3_L3_Game476_ans],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 477 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L3_speaking = "Grade_3/" . "Lesson_3/" . "Speaking/";
        $l3_G477image = $domain . "/storage/images/Grade_3/lesson_3/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 477, "q_content" => "Talk about your dream job? \nWhat do you want to be? \nWhat do you want to do?"],
        ]);





        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 4 Game 478 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 478, 'a_content' => 'lesson_4_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 478, 'a_content' => 'lesson_4_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 4 Game 479 ( Vocabulary )
        ////////////////////////////////////////////////////////

        $l3_G479_image = $domain . "/storage/images/Grade_3/lesson_3/vocab/";
        $G3_L3_vocab = "Grade_3/" . "Lesson_3/" . "vocab/";

        $q_content_G3_L3_Game479_img = ["grandmother", "father", "uncle", "wife", "sister", "daughter", "niece"];

        $a_content_G3_L3_Game479 = [
            "grandmother", "father", "uncle", "wife", "sister", "daughter", "niece"
        ];

        $q_content_G3_L3_Game479 = [
            "grandfather and ______", "______ and mother", "aunt and ______", "husband and ______", "brother and ______", "son and ______", "______ and nephew"
        ];

        foreach ($q_content_G3_L3_Game479_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 479, 'round' => $key + 1,
                    'q_content' => $q_content_G3_L3_Game479[$key],
                    'q_image' => $l3_G479_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L3_vocab . $value . ".mp3",
                    'a_content' => $a_content_G3_L3_Game479[$key],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 4 Game 480 , 481 (  Listen and Practice )
        ////////////////////////////////////////////////////////

        $G3_L4_listen_practice = "Grade_3/" . "Lesson_4/" . "listen_practice/";
        $l4_G480_G481_image = $domain . "/storage/images/Grade_3/lesson_4/listen_practice/";


        DB::table('ans_n_ques')->insert([

            // game 480
            ['round' => 1, 'game_id' => 480, 'a_image' => $l4_G480_G481_image . "mom.png", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "download-song.mp3", "a_conver" => "Are you downloading a song, Cindy?", "background" =>  $l4_G480_G481_image . "bg1.png"],
            ['round' => 1, 'game_id' => 480, 'a_image' => $l4_G480_G481_image . "cindy.png", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "yes-song.mp3", "a_conver" => "Oh, Hi mom. Yes I am. It is \nthe new Miley Cyrus's song.", "background" =>  $l4_G480_G481_image . "bg1.png"],

            ['round' => 2, 'game_id' => 480, 'a_image' => $l4_G480_G481_image . "mom.png", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "miley-is-she.mp3", "a_conver" => "Miley Cyrus.... \nIs she Billy Ray Cyrus's daughter?", "background" =>  $l4_G480_G481_image . "bg1.png"],
            ['round' => 2, 'game_id' => 480, 'a_image' => $l4_G480_G481_image . "cindy.png", "a_audio" =>  $AudioDomain . $G3_L4_listen_practice . "dont-know.mp3", "a_conver" => "I don't know. Who is he?", "background" =>  $l4_G480_G481_image . "bg1.png"],

            ['round' => 3, 'game_id' => 480, 'a_image' => $l4_G480_G481_image . "mom.png", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "he-is-singer-actor.mp3", "a_conver" => "He is a singer and actor. He is very \nhandsome.", "background" =>  $l4_G480_G481_image . "bg1.png"],
            ['round' => 3, 'game_id' => 480, 'a_image' => $l4_G480_G481_image . "cindy.png", "a_audio" => null, "a_conver" => null, "background" =>  $l4_G480_G481_image . "bg1.png"],


            // game 481
            ['round' => 1, 'game_id' => 481, 'a_image' => $l4_G480_G481_image . "left.png", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "what-reading.mp3", "a_conver" => "What are you reading, Pete?", "background" =>  $l4_G480_G481_image . "bg2.png"],
            ['round' => 1, 'game_id' => 481, 'a_image' => $l4_G480_G481_image . "right.png", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "reading-about.mp3", "a_conver" => "I am reading about \nFrancis Ford Coppola.", "background" =>  $l4_G480_G481_image . "bg2.png"],

            ['round' => 2, 'game_id' => 481, 'a_image' => $l4_G480_G481_image . "left.png", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "who.mp3", "a_conver" => "who?", "background" =>  $l4_G480_G481_image . "bg2.png"],
            ['round' => 2, 'game_id' => 481, 'a_image' => $l4_G480_G481_image . "right.png", "a_audio" =>  $AudioDomain . $G3_L4_listen_practice . "nephew.mp3", "a_conver" => "Francis Ford Coppola. The \ndirector. Do you know who \nhis nephew is? The actor \nNicholas Cage.", "background" =>  $l4_G480_G481_image . "bg2.png"],

            ['round' => 3, 'game_id' => 481, 'a_image' => $l4_G480_G481_image . "left.png", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "really.mp3", "a_conver" => "Oh, really.", "background" =>  $l4_G480_G481_image . "bg2.png"],
            ['round' => 3, 'game_id' => 481, 'a_image' => $l4_G480_G481_image . "right.png", "a_audio" => null, "a_conver" => null, "background" =>  $l4_G480_G481_image . "bg2.png"],

        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 4 Game 482 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L4_speaking = "Grade_3/" . "Lesson_4/" . "Speaking/";
        $l4_G482image = $domain . "/storage/images/Grade_3/lesson_4/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 482, "q_content" => "Talk about your family members? \nWhat are they? \nWhat are they like? What do they look like?"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 4 Game 483 (  writing )
        //////////////////////////////////////////////////////////////

        $G3_L4_Game483_ans = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magnam animi a rem recusandae, nobis voluptate, quas laboriosam alias natus esse delectus necessitatibus ipsum sed debitis dolorem. Repellendus, quibusdam beatae.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 483, 'a_content' => $G3_L4_Game483_ans],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 484 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 484, 'a_content' => 'lesson_1_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 484, 'a_content' => 'lesson_1_video_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 485 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l5_G485_image = $domain . "/storage/images/Grade_3/lesson_5/vocab/";
        $G3_L5_vocab = "Grade_3/" . "Lesson_5/" . "vocab/";


        $ans_G485 = [
            "Apple", "Asporagus", "Banana", "Beans", "Cabbage", "Carrot", "Cucumber", "Eggplant", "Grapes", "Mango", "Papaya", "Pear", "Pineapple", "Potato", "Strawberry", "Tomato", "Watermelon"
        ];

        foreach ($ans_G485 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 485, 'a_content' => $key, 'a_image' => $l5_G485_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L5_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 486 (  Choose Fruits and Vegetables  )
        ////////////////////////////////////////////////////////

        $l5G486image = $domain . "/storage/images/Grade_1/lesson_13/choose_fru_vege/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 486, "q_image" => "Banana", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],
            ['round' => 1, 'game_id' => 486, "q_image" => "Asporagus", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 486, "q_image" => "Carrot", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 486, "q_image" => "Mango", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],
            ['round' => 1, 'game_id' => 486, "q_image" => "Cabbage", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 486, "q_image" => "Pineapple", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],

            ['round' => 1, 'game_id' => 486, "q_image" => "Eggplant", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 486, "q_image" => "Grapes", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],
            ['round' => 1, 'game_id' => 486, "q_image" => "Potato", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 486, "q_image" => "Beans", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 486, "q_image" => "Pear", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],
            ['round' => 1, 'game_id' => 486, "q_image" => "Watermelon", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 487 ( Arrange Letter )
        ////////////////////////////////////////////////////////

        $G3_L5_arrange_letter = "Grade_3/" . "Lesson_5/" . "arrange_letter/";
        $l5_G487_image = $domain . "/storage/images/Grade_3/lesson_5/arrange_letter/";


        $q_G487 = [

            ["E", "N", "P", "A", "I", "P", "L", "P", "E"],
            ["B", "C", "U", "U", "M", "R", "E", "C"],
            ["E", "A", "P", "R"],
            ["A", "N", "M", "G", "O"],
            ["C", "R", "T", "A", "R", "O"],
            ["T", "A", "L", "O", "E", "W", "R", "E", "N", "M"],
            ["E", "P", "G", "G", "T", "N", "A", "L"],
            ["P", "Y", "A", "A", "A", "P"],
            ["A", "G", "E", "B", "B", "C", "A"],
            ["O", "O", "T", "A", "P", "O"],


        ];

        $a_G487 = [
            "PINEAPPLE", "CUCUMBER", "PEAR", "MANGO", "CARROT", "WATERMELON", "EGGPLANT", "PAPAYA", "CABBAGE", "POTATO"
        ];

        $G487_Index = 0;

        for ($i = 0; $i < count($q_G487); $i++) {
            foreach ($q_G487[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 487, 'q_content' => $j, 'q_audio' => $AudioDomain . $G3_L5_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 487,
                    'q_image' => $l5_G487_image . str_replace(' ', '', strtolower($a_G487[$G487_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L5_arrange_letter . strtolower($a_G487[$G487_Index]) . ".mp3",
                    'a_content' => $a_G487[$G487_Index],
                ],
            ]);
            $G487_Index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 488 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l5_G488_image = $domain . "/storage/images/Grade_3/lesson_5/listen_n_practice/";
        $G3_L5_listen_n_practice = "Grade_3/" . "Lesson_5/" . "listen_n_practice/";

        $q_content_G3_L5_Game488_img = ["carrot", "papaya", "potato", "eggplant", "watermelon", "tomato", "mango", "asporagus", "cabbage", "pineapple", "strawberry", "banana"];

        $a_content_G3_L5_Game488 = [
            "I like carrot",
            "I don't like payaya",
            "I don't like potato",
            "I like eggplant",
            "I like watermelon",
            "I don't like tomato",
            "I like mango",
            "I don't like asporagus",
            "I don't like cabbage",
            "I like pineapple",
            "I don't like strawberry",
            "I like banana"
        ];

        foreach ($q_content_G3_L5_Game488_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 488, 'round' => $key + 1,
                    'q_image' => $l5_G488_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L5_listen_n_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L5_Game488[$key],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 489 ( Listening )
        ////////////////////////////////////////////////////////

        $l3_G489_image = $domain . "/storage/images/Grade_3/lesson_3/listening/";
        $G3_L5_listening = "Grade_3/" . "Lesson_3/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 489,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "apple" . ".mp3", "q_content" => "pineapple", "a_content" => 0],
            ['round' => 1, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "cabbage", "a_content" => 0],
            ['round' => 1, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "apple", "a_content" => 1],
            ['round' => 1, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "banana", "a_content" => 0],

            ['round' => 2, 'game_id' => 489,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "papaya" . ".mp3", "q_content" => "payaya", "a_content" => 1],
            ['round' => 2, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "apple", "a_content" => 0],
            ['round' => 2, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "pineapple", "a_content" => 0],
            ['round' => 2, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "eggplant", "a_content" => 0],

            ['round' => 3, 'game_id' => 489,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "pineapple" . ".mp3", "q_content" => "cabbage", "a_content" => 0],
            ['round' => 3, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "strawberry", "a_content" => 0],
            ['round' => 3, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "mango", "a_content" => 0],
            ['round' => 3, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "pineapple", "a_content" => 1],

            ['round' => 4, 'game_id' => 489,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "mango" . ".mp3", "q_content" => "asporagus", "a_content" => 0],
            ['round' => 4, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "mango", "a_content" => 1],
            ['round' => 4, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "strawberry", "a_content" => 0],
            ['round' => 4, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "tomato", "a_content" => 0],

            ['round' => 5, 'game_id' => 489,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "carrot" . ".mp3", "q_content" => "banana", "a_content" => 0],
            ['round' => 5, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "eggplant", "a_content" => 0],
            ['round' => 5, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "carrot", "a_content" => 1],
            ['round' => 5, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "watermelon", "a_content" => 0],

            ['round' => 6, 'game_id' => 489,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "eggplant" . ".mp3", "q_content" => "eggplant", "a_content" => 1],
            ['round' => 6, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "pineapple", "a_content" => 0],
            ['round' => 6, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "watermelon", "a_content" => 0],
            ['round' => 6, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "mango", "a_content" => 0],

            ['round' => 7, 'game_id' => 489,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "tomato" . ".mp3", "q_content" => "carrot", "a_content" => 0],
            ['round' => 7, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "apple", "a_content" => 0],
            ['round' => 7, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "cabbage", "a_content" => 0],
            ['round' => 7, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "tomato", "a_content" => 1],

            ['round' => 8, 'game_id' => 489,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "potato" . ".mp3", "q_content" => "potato", "a_content" => 1],
            ['round' => 8, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "carrot", "a_content" => 0],
            ['round' => 8, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "watermelon", "a_content" => 0],
            ['round' => 8, 'game_id' => 489,  'q_audio' =>  null, "q_content" => "mango", "a_content" => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 490 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L5_practice_speaking = "Grade_3/" . "Lesson_5/" . "practice_speaking/";
        $l5_G490image = $domain . "/storage/images/Grade_3/lesson_5/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 490, 'q_image' => $l5_G490image . "banana.png", "q_content" => "What is your favorite fruit?\nWhat fruit don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-fruit" . ".mp3"],
            ['round' => 2, 'game_id' => 490, 'q_image' => $l5_G490image . "parrot.png", "q_content" => "What is your favorite vegetable?\nWhat vegetable don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-vege" . ".mp3"],
            ['round' => 3, 'game_id' => 490, 'q_image' => $l5_G490image . "tomato.png", "q_content" => "What is your favorite vegetable?\nWhat vegetable don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-vege" . ".mp3"],
            ['round' => 4, 'game_id' => 490, 'q_image' => $l5_G490image . "potato.png", "q_content" => "What is your favorite vegetable?\nWhat vegetable don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-vege" . ".mp3"],
            ['round' => 5, 'game_id' => 490, 'q_image' => $l5_G490image . "mango.png", "q_content" => "What is your favorite fruit?\nWhat fruit don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-fruit" . ".mp3"],
            ['round' => 6, 'game_id' => 490, 'q_image' => $l5_G490image . "apple.png", "q_content" => "What is your favorite fruit?\nWhat fruit don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-fruit" . ".mp3"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 491 ( Writing )
        ////////////////////////////////////////////////////////

        $l5_G491_image = $domain . "/storage/images/Grade_3/lesson_5/writing/";
        $G3_L5_writing = "Grade_3/" . "Lesson_5/" . "writing/";

        $q_content_G3_L5_Game491_img = ["apple-like", "pineapple-dislike", "banana-like", "carrot-like", "tomato-like", "potato-like"];

        $a_content_G3_L5_Game491 = [

            "My favorite fruit is apple. I like apple. I don't like papaya.",
            "My favorite fruit is mango. I like mango. I don't like pineapple.",
            "My favorite fruit is banana. I like banana. I don't like strawberry.",
            "My favorite fruit is carrot. I like carrot. I don't like eggplant.",
            "My favorite fruit is tomato. I like tomato. I don't like carrot.",
            "My favorite fruit is potato. I like potato. I don't like cabbage.",
        ];

        foreach ($q_content_G3_L5_Game491_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 491, 'round' => $key + 1,
                    "q_content" => "My favorite _____ is ______",
                    'q_image' => $l5_G491_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L5_writing . $value . ".mp3",
                    'a_content' => $a_content_G3_L5_Game491[$key],
                ],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 492 (  Speaking )
        //////////////////////////////////////////////////////////////

        $G2_L5_speaking = "Grade_3/" . "Lesson_5/" . "speaking/";
        $l5_G492image = $domain . "/storage/images/Grade_3/lesson_5/speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 492,  'q_image' => $l5_G492image . "girl.png", "q_conver" => "What is your favorite fruit? \nWhat fruit don't you like?", "round_instruction" => $AudioDomain . $G2_L5_speaking . "fav-fruit.mp3"],
            ['round' => 2, 'game_id' => 492,  'q_image' => $l5_G492image . "girl.png", "q_conver" => "What is your favorite vegetable? \nWhat vegetable don't like?", "round_instruction" => $AudioDomain . $G2_L5_speaking . "fav-vege.mp3"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 6 Game 493 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 493, 'a_content' => 'lesson_6_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 493, 'a_content' => 'lesson_6_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 6 Game 494 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l6_G494_image = $domain . "/storage/images/Grade_3/lesson_6/vocab/";
        $G3_L6_vocab = "Grade_3/" . "Lesson_6/" . "vocab/";


        $ans_G494 = [
            "Archery", "Badminton", "Basketball", "Cycling", "Football", "Golf", "Hockey", "Judo", "Running", "Sailing", "Skiing", "Swimming", "Table-Tennis", "Tennis", "Weightlifting"
        ];

        foreach ($ans_G494 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 494, 'a_content' => $key, 'a_image' => $l6_G494_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L6_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 6 Game 495 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l6_G495_image = $domain . "/storage/images/Grade_3/lesson_6/listen_n_practice/";
        $G3_L6_listen_n_practice = "Grade_3/" . "Lesson_6/" . "listen_n_practice/";

        $q_content_G3_L6_Game495_img = ["running", "tennis", "archery", "judo", "basketball", "badminton", "golf", "skateboarding"];

        $a_content_G3_L6_Game495 = [

            "My favorite sport is running. I m good at running. I'm not good at cycling.",
            "My favorite sport is tennis. I m good at tennis. I'm not good at football.",
            "My favorite sport is archery. I m good at archery. I'm bad at swimming.",
            "My favorite sport is judo. I m good at judo. I'm not good at cycling.",
            "My favorite sport is basketball. I m good at basketball. I'm not good at football.",
            "My favorite sport is badminton. I m good at badminton. I'm not good at skiing.",
            "My favorite sport is golf. I m good at golf. I'm not good at hockey.",
            "My favorite sport is skateboarding. I m good at skateboarding. I'm not good at sailing.",

        ];

        foreach ($q_content_G3_L6_Game495_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 495, 'round' => $key + 1,
                    'q_image' => $l6_G495_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L6_listen_n_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L6_Game495[$key],
                ],
            ]);
        }
    }
}
