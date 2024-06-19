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
        ////    Grade 3  Lesson 1 Game 458 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 458, 'a_content' => '943931347', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 458, 'a_content' => 'lesson_1_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 459 (  Reading  )
        ////////////////////////////////////////////////////////

        $l1_G459_image = $domain . "/storage/images/Grade_3/lesson_1/reading/";
        $G3_L1_reading = "Grade_3/" . "Lesson_1/" . "reading/";


        $ans_G459 = [
            "He is a writer", "She is a shopkeeper", "She is a teacher", "He is a farmer", "She is a student", "He is a flight attendant", "He is a pilot", "He is a waiter", "He is an engineer", "He is a bus driver", "She is a singer", "He is a guitarist", "He is a taxi driver"
        ];

        $G3_L1_Game459_index = 0;

        foreach ($ans_G459 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 459, 'a_content' => $key, 'a_image' => $l1_G459_image . str_replace(' ', '-',  strtolower($ans_G459[$G3_L1_Game459_index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L1_reading . str_replace(' ', '-', strtolower($ans_G459[$G3_L1_Game459_index])) . ".mp3"
                ],
            ]);
            $G3_L1_Game459_index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 460 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l1_G460_image = $domain . "/storage/images/Grade_3/lesson_1/learning_n_practice/";
        $G3_L1_look_n_write = "Grade_3/" . "Lesson_1/" . "learning_n_practice/";

        $q_content_G3_L1_Game460_img = ["doctor", "dancer", "teacher", "writer", "farmer", "shopkeeper",  "engineer", "waiter"];

        $a_content_G3_L1_Game460 = [
            'He is a doctor.', 'He is a dancer.', 'She is a teacher.', 'He is a writer.', 'He is a farmer.', 'She is a shopkeeper.', 'He is an engineer.', "They are waiters.",
        ];

        // $q_content_G3_L1_Game460 = [
        //     'What is he?', 'What is he?', 'What is he?', 'What is he?', 'What is he?', 'What is she?', 'What is he?', "What are they?"
        // ];

        foreach ($q_content_G3_L1_Game460_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 460, 'round' => $key + 1,
                    // 'q_content' => $q_content_G3_L1_Game460[$key],
                    'q_image' => $l1_G460_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L1_look_n_write . $value . ".mp3",
                    'a_content' => $a_content_G3_L1_Game460[$key],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 461 ( Listening )
        ////////////////////////////////////////////////////////

        $l1_G461_image = $domain . "/storage/images/Grade_3/lesson_1/listen_n_write/";
        $G3_L1_listen_n_write = "Grade_3/" . "Lesson_1/" . "listen_n_write/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 461,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "My-brothers-name-is-Tony-He" . ".mp3", "q_content" => "a teacher", "a_content" => 0],
            ['round' => 1, 'game_id' => 461,  'q_audio' =>  null, "q_content" => "a cook", "a_content" => 1],

            ['round' => 2, 'game_id' => 461,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "My-sisters-name-is-Maria-She" . ".mp3", "q_content" => "a student", "a_content" => 1],
            ['round' => 2, 'game_id' => 461,  'q_audio' =>  null, "q_content" => "a farmer", "a_content" => 0],

            ['round' => 3, 'game_id' => 461,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "My-uncles-name-is-Chris-He-i" . ".mp3", "q_content" => "a cook", "a_content" => 0],
            ['round' => 3, 'game_id' => 461,  'q_audio' =>  null, "q_content" => "a doctor", "a_content" => 1],

            ['round' => 4, 'game_id' => 461,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "My-mothers-name-is-Mary-She" . ".mp3", "q_content" => "a doctor", "a_content" => 0],
            ['round' => 4, 'game_id' => 461,  'q_audio' =>  null, "q_content" => "a teacher", "a_content" => 1],

            ['round' => 5, 'game_id' => 461,  'q_audio' =>  $AudioDomain . $G3_L1_listen_n_write . "My-fathers-name-is-George-He" . ".mp3", "q_content" => "a farmer", "a_content" => 1],
            ['round' => 5, 'game_id' => 461,  'q_audio' =>  null, "q_content" => "a teacher", "a_content" => 0],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 462 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L1_practice_speaking = "Grade_3/" . "Lesson_1/" . "practice_speaking/";
        $l1_G462image = $domain . "/storage/images/Grade_3/lesson_1/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 462, 'q_image' => $l1_G462image . "teacher_chara.png", "q_conver" => $l1_G462image . "brother.png", "q_audio" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-brother" . ".mp3", "round_instruction" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-brother" . ".mp3"],
            ['round' => 2, 'game_id' => 462, 'q_image' => $l1_G462image . "teacher_chara.png", "q_conver" => $l1_G462image . "sister.png", "q_audio" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-sister" . ".mp3", "round_instruction" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-sister" . ".mp3"],
            ['round' => 3, 'game_id' => 462, 'q_image' => $l1_G462image . "teacher_chara.png", "q_conver" => $l1_G462image . "you.png", "q_audio" => $AudioDomain . $G3_L1_practice_speaking . "what-are-you" . ".mp3", "round_instruction" => $AudioDomain . $G3_L1_practice_speaking . "what-are-you" . ".mp3"],
            ['round' => 4, 'game_id' => 462, 'q_image' => $l1_G462image . "teacher_chara.png", "q_conver" => $l1_G462image . "mother.png", "q_audio" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-mother" . ".mp3", "round_instruction" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-mother" . ".mp3"],
            ['round' => 5, 'game_id' => 462, 'q_image' => $l1_G462image . "teacher_chara.png", "q_conver" => $l1_G462image . "father.png", "q_audio" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-father" . ".mp3", "round_instruction" => $AudioDomain . $G3_L1_practice_speaking . "what-is-your-father" . ".mp3"],
        ]);






        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 463 (  writing )
        //////////////////////////////////////////////////////////////

        $G3_L1_Game463_ans = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magnam animi a rem recusandae, nobis voluptate, quas laboriosam alias natus esse delectus necessitatibus ipsum sed debitis dolorem. Repellendus, quibusdam beatae.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 463, 'a_content' => $G3_L1_Game463_ans],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 1 Game 464 (  Speaking )
        //////////////////////////////////////////////////////////////

        $G3_L1_speaking = "Grade_3/" . "Lesson_1/" . "speaking/";
        $l1_G464image = $domain . "/storage/images/Grade_3/lesson_1/speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 464,  "q_audio" => $AudioDomain . $G3_L1_speaking . "Describe-your-family-members-H" . ".mp3",  'background' => $l1_G464image . "bg.png",   'q_image' => $l1_G464image . "teacher_chara.png", "q_conver" => $l1_G464image . "text.png"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 465 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 465, 'a_content' => '943931487', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 465, 'a_content' => 'lesson_2_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 466 (  Reading  )
        ////////////////////////////////////////////////////////

        $l2_G466_image = $domain . "/storage/images/Grade_3/lesson_2/reading/";
        $G3_L2_reading = "Grade_3/" . "Lesson_2/" . "reading/";


        $ans_G466 = [
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

        $audio_img_G466 = [
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

        $G3_L2_Game466_index = 0;

        foreach ($ans_G466 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 466, 'a_content' => $key, 'a_image' => $l2_G466_image . str_replace(' ', '-',  strtolower($audio_img_G466[$G3_L2_Game466_index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L2_reading . str_replace(' ', '-', strtolower($audio_img_G466[$G3_L2_Game466_index])) . ".mp3"
                ],
            ]);
            $G3_L2_Game466_index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 467 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l2_G467_image = $domain . "/storage/images/Grade_3/lesson_2/listen_n_practice/";
        $G3_L2_listen_n_practice = "Grade_3/" . "Lesson_2/" . "listen_n_practice/";

        $q_content_G3_L2_Game467_img = ["handsome", "talkative", "funny", "gorgeous", "strong"];

        $a_content_G3_L2_Game467 = [
            'He is handsome.', 'She is talkative.', 'He is funny.', 'She is gorgeous.', 'he is strong.'
        ];

        // $q_content_G3_L2_Game467 = [
        //     'What does he look like?', 'What is she like?', 'What does he look like?', 'What does she look like?', 'What is he like?'
        // ];

        foreach ($q_content_G3_L2_Game467_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 467, 'round' => $key + 1,
                    // 'q_content' => $q_content_G3_L2_Game467[$key],
                    'q_image' => $l2_G467_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L2_listen_n_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L2_Game467[$key],
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 468 ( Listening )
        ////////////////////////////////////////////////////////

        $l1_G460_image = $domain . "/storage/images/Grade_3/lesson_2/listening/";
        $G3_L2_listening = "Grade_3/" . "Lesson_2/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 468,  'q_audio' =>  $AudioDomain . $G3_L2_listening . "clever" . ".mp3", "q_content" => "She is strong", "a_content" => 0],
            ['round' => 1, 'game_id' => 468,  'q_audio' =>  null, "q_content" => "She is clever", "a_content" => 1],
            ['round' => 1, 'game_id' => 468,  'q_audio' =>  null, "q_content" => "She is helpful", "a_content" => 0],

            ['round' => 2, 'game_id' => 468,  'q_audio' =>  $AudioDomain . $G3_L2_listening . "funny" . ".mp3", "q_content" => "He is kind", "a_content" => 0],
            ['round' => 2, 'game_id' => 468,  'q_audio' =>  null, "q_content" => "He is happy", "a_content" => 0],
            ['round' => 2, 'game_id' => 468,  'q_audio' =>  null, "q_content" => "He is funny", "a_content" => 1],

            ['round' => 3, 'game_id' => 468,  'q_audio' =>  $AudioDomain . $G3_L2_listening . "gorgeous" . ".mp3", "q_content" => "She is clever", "a_content" => 0],
            ['round' => 3, 'game_id' => 468,  'q_audio' =>  null, "q_content" => "She is strong", "a_content" => 0],
            ['round' => 3, 'game_id' => 468,  'q_audio' =>  null, "q_content" => "She is gorgeous", "a_content" => 1],

            ['round' => 4, 'game_id' => 468,  'q_audio' =>  $AudioDomain . $G3_L2_listening . "friendly" . ".mp3", "q_content" => "They are friendly", "a_content" => 1],
            ['round' => 4, 'game_id' => 468,  'q_audio' =>  null, "q_content" => "They are helpful", "a_content" => 0],
            ['round' => 4, 'game_id' => 468,  'q_audio' =>  null, "q_content" => "They are kind", "a_content" => 0],

            ['round' => 5, 'game_id' => 468,  'q_audio' =>  $AudioDomain . $G3_L2_listening . "handsome" . ".mp3", "q_content" => "He is strong", "a_content" => 0],
            ['round' => 5, 'game_id' => 468,  'q_audio' =>  null, "q_content" => "He is handsome", "a_content" => 1],
            ['round' => 5, 'game_id' => 468,  'q_audio' =>  null, "q_content" => "He is funny", "a_content" => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 469 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L2_practice_speaking = "Grade_3/" . "Lesson_2/" . "practice_speaking/";
        $l2_G469image = $domain . "/storage/images/Grade_3/lesson_2/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 469, "q_audio" =>  $AudioDomain . $G3_L2_practice_speaking . "she-is-gorgrous.mp3", 'q_image' => $l2_G469image . "mother.png", "q_content" => "What is your mother like?", "round_instruction" => $AudioDomain . $G3_L2_practice_speaking . "what-is-your-mother-like" . ".mp3"],
            ['round' => 2, 'game_id' => 469, "q_audio" =>  $AudioDomain . $G3_L2_practice_speaking . "she-iskind.mp3", 'q_image' => $l2_G469image . "two-girls.png", "q_content" => "What does she look like?", "round_instruction" => $AudioDomain . $G3_L2_practice_speaking . "what-does-she-look-like" . ".mp3"],
            ['round' => 3, 'game_id' => 469, "q_audio" =>  $AudioDomain . $G3_L2_practice_speaking . "she-is-clever.mp3", 'q_image' => $l2_G469image . "girl.png", "q_content" => "What does she look like?", "round_instruction" => $AudioDomain . $G3_L2_practice_speaking . "what-does-she-look-like" . ".mp3"],
            ['round' => 4, 'game_id' => 469, "q_audio" =>  $AudioDomain . $G3_L2_practice_speaking . "he-is-handsome.mp3", 'q_image' => $l2_G469image . "man.png", "q_content" => "What does he look like?", "round_instruction" => $AudioDomain . $G3_L2_practice_speaking . "what-does-he-look-like" . ".mp3"],
            ['round' => 5, 'game_id' => 469, "q_audio" =>  $AudioDomain . $G3_L2_practice_speaking . "he-is-strong.mp3", 'q_image' => $l2_G469image . "man-strong.png", "q_content" => "What is your father like?", "round_instruction" => $AudioDomain . $G3_L2_practice_speaking . "what-is-your-father-like" . ".mp3"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 470 (  Writing )
        //////////////////////////////////////////////////////////////

        $G3_L2_Game470_ans = ["boys", "girl-cat", 'girl', "man", "old", "boy"];
        $l2_G401image = $domain . "/storage/images/Grade_3/lesson_2/writing_topic/";
        $G3_L2_writing_topic = "Grade_3/" . "Lesson_2/" . "writing_topic/";

        foreach ($G3_L2_Game470_ans as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    "round" => $key + 1, 'game_id' => 470,
                    'q_audio' => $AudioDomain . $G3_L2_writing_topic . $value . ".mp3",
                    'q_content' => $l2_G401image . $value . ".png"
                ],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 2 Game 471 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L2_speaking = "Grade_3/" . "Lesson_2/" . "Speaking/";
        $l2_G471image = $domain . "/storage/images/Grade_3/lesson_2/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 471, "q_image" => $l2_G471image . "green-star_round.png", "q_audio" => $AudioDomain . $G3_L2_speaking . "SubBlock_Describe-your-family-members.mp3", "q_content" => "Describe your family members. \nWhat are they like? What do they look like?", "round_instruction" => $AudioDomain . $G3_L2_speaking . "SubBlock_Describe-your-family-members.mp3"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 472 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 472, 'a_content' => '943931585', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 472, 'a_content' => 'lesson_3_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 473 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l3_G473_image = $domain . "/storage/images/Grade_3/lesson_3/vocab/";
        $G3_L3_vocab = "Grade_3/" . "Lesson_3/" . "vocab/";


        $ans_G473 = [
            "Actor", "Actress", "Artist", "Athlete", "Chef", "Dentist", "Designer", "Engineer", "Hairdresser", "Lawyer", "Model", "Musician", "Nurse", "Pilot", "Police-officer", "Singer"
        ];

        foreach ($ans_G473 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 473, 'a_content' => $key, 'a_image' => $l3_G473_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L3_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 474 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l3_G474_image = $domain . "/storage/images/Grade_3/lesson_3/listen_n_practice/";
        $G3_L3_listen_n_practice = "Grade_3/" . "Lesson_3/" . "listen_n_practice/";

        $q_content_G3_L3_Game474_img = ["actress", "artist", "athlete", "lawyer", "hairdresser", "singer", "nurse", "musician", "actor", "pilot"];

        $a_content_G3_L3_Game474 = [
            "I want to be an actress.",
            "I want to be an artist.",
            "I want to be an athlete.",
            "I want to be a lawyer.",
            "I want to be a hairdresser.",
            "I want to be a singer.",
            "I want to be a nurse.",
            "I want to be a musician.",
            "I want to be an actor.",
            "I want to be a pilot."
        ];

        $q_content_G3_L3_Game474 = [
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

        foreach ($q_content_G3_L3_Game474_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 474, 'round' => $key + 1,
                    // 'q_content' => $q_content_G3_L3_Game474[$key],
                    'q_image' => $l3_G474_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L3_listen_n_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L3_Game474[$key],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 475 ( Listening )
        ////////////////////////////////////////////////////////

        $l3_G475_image = $domain . "/storage/images/Grade_3/lesson_3/listening/";
        $G3_L3_listening = "Grade_3/" . "Lesson_3/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 475,  'q_audio' =>  $AudioDomain . $G3_L3_listening . "pilot" . ".mp3", "q_content" => "pilot", "a_content" => 1],
            ['round' => 1, 'game_id' => 475,  'q_audio' =>  null, "q_content" => "singer", "a_content" => 0],
            ['round' => 1, 'game_id' => 475,  'q_audio' =>  null, "q_content" => "nurse", "a_content" => 0],

            ['round' => 2, 'game_id' => 475,  'q_audio' =>  $AudioDomain . $G3_L3_listening . "nurse" . ".mp3", "q_content" => "singer", "a_content" => 0],
            ['round' => 2, 'game_id' => 475,  'q_audio' =>  null, "q_content" => "nurse", "a_content" => 1],
            ['round' => 2, 'game_id' => 475,  'q_audio' =>  null, "q_content" => "lawyer", "a_content" => 0],

            ['round' => 3, 'game_id' => 475,  'q_audio' =>  $AudioDomain . $G3_L3_listening . "singer" . ".mp3", "q_content" => "musician", "a_content" => 0],
            ['round' => 3, 'game_id' => 475,  'q_audio' =>  null, "q_content" => "designer", "a_content" => 0],
            ['round' => 3, 'game_id' => 475,  'q_audio' =>  null, "q_content" => "singer", "a_content" => 1],

            ['round' => 4, 'game_id' => 475,  'q_audio' =>  $AudioDomain . $G3_L3_listening . "artist" . ".mp3", "q_content" => "artist", "a_content" => 1],
            ['round' => 4, 'game_id' => 475,  'q_audio' =>  null, "q_content" => "designer", "a_content" => 0],
            ['round' => 4, 'game_id' => 475,  'q_audio' =>  null, "q_content" => "actress", "a_content" => 0],

            ['round' => 5, 'game_id' => 475,  'q_audio' =>  $AudioDomain . $G3_L3_listening . "engineer" . ".mp3", "q_content" => "designer", "a_content" => 0],
            ['round' => 5, 'game_id' => 475,  'q_audio' =>  null, "q_content" => "artist", "a_content" => 0],
            ['round' => 5, 'game_id' => 475,  'q_audio' =>  null, "q_content" => "engineer", "a_content" => 1],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 476 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L3_practice_speaking = "Grade_3/" . "Lesson_3/" . "practice_speaking/";
        $l3_G476image = $domain . "/storage/images/Grade_3/lesson_3/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 476, 'q_image' => $l3_G476image . "hairdresser.png", "q_content" => "Do you want to be a hairdresser?", "round_instruction" => $AudioDomain . $G3_L3_practice_speaking . "hairdresser" . ".mp3"],
            ['round' => 2, 'game_id' => 476, 'q_image' => $l3_G476image . "singer.png", "q_content" => "Do you want to be a singer?", "round_instruction" => $AudioDomain . $G3_L3_practice_speaking . "singer" . ".mp3"],
            ['round' => 3, 'game_id' => 476, 'q_image' => $l3_G476image . "designer.png", "q_content" => "Do you want to be a designer?", "round_instruction" => $AudioDomain . $G3_L3_practice_speaking . "designer" . ".mp3"],
            ['round' => 4, 'game_id' => 476, 'q_image' => $l3_G476image . "artist.png", "q_content" => "Do you want to be an artist?", "round_instruction" => $AudioDomain . $G3_L3_practice_speaking . "artist" . ".mp3"],
            ['round' => 5, 'game_id' => 476, 'q_image' => $l3_G476image . "pilot.png", "q_content" => "Do you want to be a pilot?", "round_instruction" => $AudioDomain . $G3_L3_practice_speaking . "pilot" . ".mp3"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 477 (  writing )
        //////////////////////////////////////////////////////////////

        $G3_L3_Game477_ans = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magnam animi a rem recusandae, nobis voluptate, quas laboriosam alias natus esse delectus necessitatibus ipsum sed debitis dolorem. Repellendus, quibusdam beatae.";

        DB::table('ans_n_ques')->insert([
            ['game_id' => 477, 'a_content' => $G3_L3_Game477_ans],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 3 Game 478 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L3_speaking = "Grade_3/" . "Lesson_3/" . "Speaking/";
        $l3_G478image = $domain . "/storage/images/Grade_3/lesson_3/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 478, "q_image" => $l3_G478image . "green-star_round.png", "q_content" => "Talk about your dream job. \nWhat do you want to be? \nWhat do you want to do?", "q_audio" => $AudioDomain . $G3_L3_speaking . "SubBlock_Talk-about-your-dream-job-Wha" . ".mp3", "round_instruction" => $AudioDomain . $G3_L3_speaking . "SubBlock_Talk-about-your-dream-job-Wha" . ".mp3"],
        ]);





        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 4 Game 479 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 479, 'a_content' => 'lesson_4_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 479, 'a_content' => 'lesson_4_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 4 Game 480 ( Vocabulary )
        ////////////////////////////////////////////////////////

        $l3_G480_image = $domain . "/storage/images/Grade_3/lesson_4/vocab/";
        $G3_L3_vocab = "Grade_3/" . "Lesson_4/" . "vocab/";

        $q_content_G3_L3_Game480_img = ["grandmother", "father", "uncle", "wife", "sister", "daughter", "niece"];

        $a_content_G3_L3_Game480 = [
            "grandmother", "father", "uncle", "wife", "sister", "daughter", "niece"
        ];

        // $q_content_G3_L3_Game480 = [
        //     "grandfather and ______", "______ and mother", "aunt and ______", "husband and ______", "brother and ______", "son and ______", "______ and nephew"
        // ];

        foreach ($q_content_G3_L3_Game480_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 480, 'round' => $key + 1,
                    // 'q_content' => $q_content_G3_L3_Game480[$key],
                    'q_image' => $l3_G480_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L3_vocab . $value . ".mp3",
                    'a_content' => $a_content_G3_L3_Game480[$key],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 4 Game 481 , 482 (  Listen and Practice )
        ////////////////////////////////////////////////////////

        $G3_L4_listen_practice = "Grade_3/" . "Lesson_4/" . "listen_practice/";
        $l4_G481_G481_image = $domain . "/storage/images/Grade_3/lesson_4/listen_practice/";


        DB::table('ans_n_ques')->insert([

            // game 481
            ['round' => 1, 'game_id' => 481, 'a_image' => $l4_G481_G481_image . "mom.gif", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "download-song.mp3", "a_conver" => $l4_G481_G481_image . "download-song-cindy.png", "background" =>  $l4_G481_G481_image . "bg1.jpg"],
            ['round' => 1, 'game_id' => 481, 'a_image' => $l4_G481_G481_image . "cindy.gif", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "yes-song.mp3", "a_conver" => $l4_G481_G481_image . "mom-yes.png", "background" =>  $l4_G481_G481_image . "bg1.jpg"],

            ['round' => 2, 'game_id' => 481, 'a_image' => $l4_G481_G481_image . "mom.gif", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "miley-is-she.mp3", "a_conver" => $l4_G481_G481_image . "miley-cyrus-song.png", "background" =>  $l4_G481_G481_image . "bg1.jpg"],
            ['round' => 2, 'game_id' => 481, 'a_image' => $l4_G481_G481_image . "cindy.gif", "a_audio" =>  $AudioDomain . $G3_L4_listen_practice . "dont-know.mp3", "a_conver" => $l4_G481_G481_image . "dont-know-who.png", "background" =>  $l4_G481_G481_image . "bg1.jpg"],

            ['round' => 3, 'game_id' => 481, 'a_image' => $l4_G481_G481_image . "mom.gif", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "he-is-singer-actor.mp3", "a_conver" => $l4_G481_G481_image . "singer-actor-handsome.png", "background" =>  $l4_G481_G481_image . "bg1.jpg"],
            ['round' => 3, 'game_id' => 481, 'a_image' => $l4_G481_G481_image . "cindy.gif", "a_audio" => null, "a_conver" =>  null, "background" =>  $l4_G481_G481_image . "bg1.jpg"],


            // game 482
            ['round' => 1, 'game_id' => 482, 'a_image' => $l4_G481_G481_image . "left.gif", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "what-reading.mp3", "a_conver" => $l4_G481_G481_image . "reading-pete.png", "background" =>  $l4_G481_G481_image . "bg2.jpg"],
            ['round' => 1, 'game_id' => 482, 'a_image' => $l4_G481_G481_image . "right.gif", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "reading-about.mp3", "a_conver" => $l4_G481_G481_image . "reading-ford.png", "background" =>  $l4_G481_G481_image . "bg2.jpg"],

            ['round' => 2, 'game_id' => 482, 'a_image' => $l4_G481_G481_image . "left.gif", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "who.mp3", "a_conver" => $l4_G481_G481_image . "who.png", "background" =>  $l4_G481_G481_image . "bg2.jpg"],
            ['round' => 2, 'game_id' => 482, 'a_image' => $l4_G481_G481_image . "right.gif", "a_audio" =>  $AudioDomain . $G3_L4_listen_practice . "nephew.mp3", "a_conver" => $l4_G481_G481_image . "his-nephew-nicolas.png", "background" =>  $l4_G481_G481_image . "bg2.jpg"],

            ['round' => 3, 'game_id' => 482, 'a_image' => $l4_G481_G481_image . "left.gif", "a_audio" => $AudioDomain . $G3_L4_listen_practice . "really.mp3", "a_conver" => $l4_G481_G481_image . "really.png", "background" =>  $l4_G481_G481_image . "bg2.jpg"],
            ['round' => 3, 'game_id' => 482, 'a_image' => $l4_G481_G481_image . "right.gif", "a_audio" => null, "a_conver" =>  null, "background" =>  $l4_G481_G481_image . "bg2.jpg"],

        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 4 Game 483 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L4_speaking = "Grade_3/" . "Lesson_4/" . "Speaking/";
        $l4_G483image = $domain . "/storage/images/Grade_3/lesson_4/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 483, "q_image" => $l4_G483image . "green-star_round.png", "q_audio" => $AudioDomain . $G3_L4_speaking . "SubBlock_Describe-your-family-members" . ".mp3", "round_instruction" => $AudioDomain . $G3_L4_speaking . "SubBlock_Describe-your-family-members" . ".mp3", "q_content" => "Describe your family members? \nWhat are they? \nWhat are they like? What do they look like?"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 4 Game 484 (  writing )
        //////////////////////////////////////////////////////////////

        $G3_L4_Game484_ans = "There are 5 people in my family. My father’s name is George. He is a farmer. He is very hardworking. He is handsome. My mother’s name is Judy. She is a teacher. She is very kind. She is very beautiful. My sister’s name is Jenny. She is a student. She is very funny. My brother’s name is Tony. He is an engineer. He is funny and friendly. My name is Toby. I am a student. I am clever.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 484,
                'a_content' => $G3_L4_Game484_ans
            ],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 485 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 485, 'a_content' => '945249778', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 485, 'a_content' => 'lesson_5_video_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 486 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l5_G486_image = $domain . "/storage/images/Grade_3/lesson_5/vocab/";
        $G3_L5_vocab = "Grade_3/" . "Lesson_5/" . "vocab/";


        $ans_G486 = [
            "Apple", "Asparagus", "Banana", "Beans", "Cabbage", "Carrot", "Cucumber", "Eggplant", "Grapes", "Mango", "Papaya", "Pear", "Pineapple", "Potato", "Strawberry", "Tomato", "Watermelon"
        ];

        foreach ($ans_G486 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 486, 'a_content' => $key, 'a_image' => $l5_G486_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L5_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 487 (  Choose Fruits and Vegetables  )
        ////////////////////////////////////////////////////////

        $l5G487image = $domain . "/storage/images/Grade_3/lesson_13/choose_fru_vege/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 487, "q_image" => "Banana", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],
            ['round' => 1, 'game_id' => 487, "q_image" => "Asparagus", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 487, "q_image" => "Carrot", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 487, "q_image" => "Mango", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],
            ['round' => 1, 'game_id' => 487, "q_image" => "Cabbage", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 487, "q_image" => "Pineapple", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],

            ['round' => 1, 'game_id' => 487, "q_image" => "Eggplant", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 487, "q_image" => "Grapes", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],
            ['round' => 1, 'game_id' => 487, "q_image" => "Potato", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 487, "q_image" => "Beans", "q_content" => "Fruit Vegetable", "a_content" => "Vegetable"],
            ['round' => 1, 'game_id' => 487, "q_image" => "Pear", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],
            ['round' => 1, 'game_id' => 487, "q_image" => "Watermelon", "q_content" => "Fruit Vegetable", "a_content" => "Fruit"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 488 ( Arrange Letter )
        ////////////////////////////////////////////////////////

        $G3_L5_arrange_letter = "Grade_3/" . "Lesson_5/" . "arrange_letter/";
        $l5_G488_image = $domain . "/storage/images/Grade_3/lesson_5/arrange_letter/";


        $q_G488 = [

            ["E", "N", "P", "A", "I", "P", "L", "P", "E"],
            ["B", "C", "U", "U", "M", "R", "E", "C"],
            ["E", "A", "P", "R"],
            ["A", "N", "M", "G", "O"],
            ["C", "R", "T", "A", "R", "O"],
            ["T", "A", "L", "O", "E", "W", "R", "E", "N", "M"],
            ["E", "P", "G", "G", "T", "N", "A", "L"],
            ["P", "Y", "A", "A", "A", "P"],
            ["A", "G", "E", "B", "B", "C", "A"],
            ["O", "O", "T", "A", "P", "T"],


        ];

        $a_G488 = [
            "PINEAPPLE", "CUCUMBER", "PEAR", "MANGO", "CARROT", "WATERMELON", "EGGPLANT", "PAPAYA", "CABBAGE", "POTATO"
        ];

        $G488_Index = 0;

        for ($i = 0; $i < count($q_G488); $i++) {
            foreach ($q_G488[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 488, 'q_content' => $j, 'q_audio' => $AudioDomain . $G3_L5_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 488,
                    'q_image' => $l5_G488_image . str_replace(' ', '', strtolower($a_G488[$G488_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L5_arrange_letter . strtolower($a_G488[$G488_Index]) . ".mp3",
                    'a_content' => $a_G488[$G488_Index],
                ],
            ]);
            $G488_Index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 489 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l5_G489_image = $domain . "/storage/images/Grade_3/lesson_5/listen_n_practice/";
        $G3_L5_listen_n_practice = "Grade_3/" . "Lesson_5/" . "listen_n_practice/";

        $q_content_G3_L5_Game489_img = [ "strawberry", "banana","carrot", "papaya", "potato", "eggplant", "watermelon", "tomato", "mango", "asparagus", "cabbage", "pineapple", ];

        $a_content_G3_L5_Game489 = [
            "I don't like strawberries.",
            "I like banana.",
            "I like carrot.",
            "I don't like papaya.",
            "I don't like potato.",
            "I like eggplant.",
            "I like watermelon.",
            "I don't like tomato.",
            "I like mango.",
            "I don't like asparagus.",
            "I don't like cabbage.",
            "I like pineapple.",
        ];

        $a_audio_G3_L5_Game489 = [
            "I-dont-like",
            "I-like",
            "I-like",
            "I-dont-like",
            "I-dont-like",
            "I-like",
            "I-like",
            "I-dont-like",
            "I-like",
            "I-dont-like",
            "I-dont-like",
            "I-like"
        ];

        foreach ($q_content_G3_L5_Game489_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 489, 'round' => $key + 1,
                    'q_image' => $l5_G489_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L5_listen_n_practice . $a_audio_G3_L5_Game489[$key] . ".mp3",
                    'a_content' => $a_content_G3_L5_Game489[$key],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 490 ( Listening )
        ////////////////////////////////////////////////////////

        $l3_G490_image = $domain . "/storage/images/Grade_3/lesson_5/listening/";
        $G3_L5_listening = "Grade_3/" . "Lesson_5/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 490,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "grape" . ".mp3", "q_content" => "pineapple", "a_content" => 0],
            ['round' => 1, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "cabbage", "a_content" => 0],
            ['round' => 1, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "grapes", "a_content" => 1],
            ['round' => 1, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "banana", "a_content" => 0],

            ['round' => 2, 'game_id' => 490,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "mango" . ".mp3", "q_content" => "mango", "a_content" => 1],
            ['round' => 2, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "apple", "a_content" => 0],
            ['round' => 2, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "pineapple", "a_content" => 0],
            ['round' => 2, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "eggplant", "a_content" => 0],

            ['round' => 3, 'game_id' => 490,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "potato" . ".mp3", "q_content" => "cabbage", "a_content" => 0],
            ['round' => 3, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "strawberry", "a_content" => 0],
            ['round' => 3, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "mango", "a_content" => 0],
            ['round' => 3, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "potato", "a_content" => 1],

            ['round' => 4, 'game_id' => 490,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "asparagus" . ".mp3", "q_content" => "asporagus", "a_content" => 1],
            ['round' => 4, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "mango", "a_content" => 0],
            ['round' => 4, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "strawberry", "a_content" => 0],
            ['round' => 4, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "tomato", "a_content" => 0],

            ['round' => 5, 'game_id' => 490,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "apple" . ".mp3", "q_content" => "banana", "a_content" => 0],
            ['round' => 5, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "eggplant", "a_content" => 0],
            ['round' => 5, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "apple", "a_content" => 1],
            ['round' => 5, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "watermelon", "a_content" => 0],

            ['round' => 6, 'game_id' => 490,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "eggplant" . ".mp3", "q_content" => "eggplant", "a_content" => 1],
            ['round' => 6, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "pineapple", "a_content" => 0],
            ['round' => 6, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "watermelon", "a_content" => 0],
            ['round' => 6, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "mango", "a_content" => 0],

            ['round' => 7, 'game_id' => 490,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "beans" . ".mp3", "q_content" => "eggplant and potato", "a_content" => 0],
            ['round' => 7, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "apple and orange", "a_content" => 0],
            ['round' => 7, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "cabbage and beans", "a_content" => 0],
            ['round' => 7, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "beans and papaya", "a_content" => 1],

            ['round' => 8, 'game_id' => 490,  'q_audio' =>  $AudioDomain . $G3_L5_listening . "watermelon" . ".mp3", "q_content" => "watermelon", "a_content" => 1],
            ['round' => 8, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "carrot", "a_content" => 0],
            ['round' => 8, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "strawberry", "a_content" => 0],
            ['round' => 8, 'game_id' => 490,  'q_audio' =>  null, "q_content" => "mango", "a_content" => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 491 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L5_practice_speaking = "Grade_3/" . "Lesson_5/" . "practice_speaking/";
        $l5_G491image = $domain . "/storage/images/Grade_3/lesson_5/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 491, "q_audio" => $AudioDomain . $G3_L5_practice_speaking . "SubBlock_My-favorite-fruit-is-banana-I.mp3", 'q_image' => $l5_G491image . "banana.png", "q_content" => "What is your favorite fruit?\nWhat fruit don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-fruit" . ".mp3"],
            ['round' => 2, 'game_id' => 491, "q_audio" => $AudioDomain . $G3_L5_practice_speaking . "SubBlock_My-favorite-fruit-is-carrot-I.mp3", 'q_image' => $l5_G491image . "carrot.png", "q_content" => "What is your favorite vegetable?\nWhat vegetable don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-vege" . ".mp3"],
            ['round' => 3, 'game_id' => 491, "q_audio" => $AudioDomain . $G3_L5_practice_speaking . "SubBlock_My-favorite-fruit-is-tomato-I.mp3", 'q_image' => $l5_G491image . "tomato.png", "q_content" => "What is your favorite vegetable?\nWhat vegetable don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-vege" . ".mp3"],
            ['round' => 4, 'game_id' => 491, "q_audio" => $AudioDomain . $G3_L5_practice_speaking . "SubBlock_My-favorite-fruit-is-potato-I.mp3", 'q_image' => $l5_G491image . "potato.png", "q_content" => "What is your favorite vegetable?\nWhat vegetable don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-vege" . ".mp3"],
            ['round' => 5, 'game_id' => 491, "q_audio" => $AudioDomain . $G3_L5_practice_speaking . "SubBlock_My-favorite-fruit-is-mango-I.mp3", 'q_image' => $l5_G491image . "mango.png", "q_content" => "What is your favorite fruit?\nWhat fruit don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-fruit" . ".mp3"],
            ['round' => 6, 'game_id' => 491, "q_audio" => $AudioDomain . $G3_L5_practice_speaking . "SubBlock_My-favorite-fruit-is-apple-I.mp3", 'q_image' => $l5_G491image . "apple.png", "q_content" => "What is your favorite fruit?\nWhat fruit don't you like?", "round_instruction" => $AudioDomain . $G3_L5_practice_speaking . "fav-fruit" . ".mp3"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 492 ( Writing )
        ////////////////////////////////////////////////////////

        $l5_G492_image = $domain . "/storage/images/Grade_3/lesson_5/writing/";
        $G3_L5_writing = "Grade_3/" . "Lesson_5/" . "writing/";

        $q_content_G3_L5_Game492_img = ["apple-fav", "apple-like", "papaya-dislike", "potato-fav", "potato-like", "tomato-dislike"];

        $a_content_G3_L5_Game492 = [

            "apple",
            "apple",
            "papaya",
            "favorite, potato",
            "potato",
            "tomato",
        ];

        $a_audio_G3_L5_Game492 = [

            "My-favorite-fruit-is",
            "I-like",
            "I-dont-like",
            "My-vegetable",
            "I-like",
            "I-dont-like",
        ];

        foreach ($q_content_G3_L5_Game492_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 492, 'round' => $key + 1,
                    'q_image' => $l5_G492_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L5_writing . $a_audio_G3_L5_Game492[$key] . ".mp3",
                    'a_content' => $a_content_G3_L5_Game492[$key],
                ],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 5 Game 493 (  Speaking )
        //////////////////////////////////////////////////////////////

        $G2_L5_speaking = "Grade_3/" . "Lesson_5/" . "speaking/";
        $l5_G493image = $domain . "/storage/images/Grade_3/lesson_5/speaking/";

        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 493,
                'q_image' => $l5_G493image . "girl_chara2.png",
                "q_conver" => $l5_G493image. "fruit_small.png",
                "round_instruction" => $AudioDomain . $G2_L5_speaking . "fav-fruit.mp3", "q_audio" => $AudioDomain . $G2_L5_speaking . "fav-fruit.mp3"
            ],
            [
                'round' => 2,
                'game_id' => 493,
                'q_image' => $l5_G493image . "girl_chara2.png",
                "q_conver" => $l5_G493image. "vegetable_small.png",
                "round_instruction" => $AudioDomain . $G2_L5_speaking . "fav-vege.mp3",
                "q_audio" => $AudioDomain . $G2_L5_speaking . "fav-vege.mp3"
            ],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 6 Game 494 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 494, 'a_content' => '945250089', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 494, 'a_content' => 'lesson_6_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 6 Game 495 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l6_G495_image = $domain . "/storage/images/Grade_3/lesson_6/vocab/";
        $G3_L6_vocab = "Grade_3/" . "Lesson_6/" . "vocab/";


        $ans_G495 = [
            "Archery", "Badminton", "Basketball", "Cycling", "Football", "Golf", "Hockey", "Judo", "Running", "Sailing", "Skiing", "Swimming", "Table-Tennis", "Tennis", "Weightlifting"
        ];

        foreach ($ans_G495 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 495, 'a_content' => $key, 'a_image' => $l6_G495_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L6_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 6 Game 496 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l6_G496_image = $domain . "/storage/images/Grade_3/lesson_6/listen_n_practice/";
        $G3_L6_listen_n_practice = "Grade_3/" . "Lesson_6/" . "listen_n_practice/";

        $q_content_G3_L6_Game496_img = ["running", "tennis", "archery", "judo", "football", "golf",];

        $a_content_G3_L6_Game496 = [

            "My favorite sport is running. I'm good at running. I'm not good at cycling.",
            "My favorite sport is tennis. I'm good at tennis. I'm not good at football.",
            "My favorite sport is archery. I'm good at archery. I'm bad at swimming.",
            "My favorite sport is judo. I'm good at judo. I'm not good at cycling.",
            "My favorite sport is football. I'm good at football. I'm not good at skiing.",
            "My favorite sport is golf. I'm good at golf. I'm not good at hockey.",
        ];

        foreach ($q_content_G3_L6_Game496_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 496, 'round' => $key + 1,
                    'q_image' => $l6_G496_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L6_listen_n_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L6_Game496[$key],
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 6 Game 497 ( reading passage )
        ////////////////////////////////////////////////////////

        $G3_L6_reading_passage_path = "Grade_3/" . "Lesson_6/" . "reading_passage/";
        $l6_G497_image = $domain . "/storage/images/Grade_3/lesson_6/reading_passage/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 497, "q_audio" =>  $AudioDomain . $G3_L6_reading_passage_path . "grade1.mp3", 'q_content' => "Grade - 1", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 497, "q_audio" =>  $AudioDomain . $G3_L6_reading_passage_path . "grade2.mp3", 'q_content' => "Grade - 2", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 497, "q_audio" =>  $AudioDomain . $G3_L6_reading_passage_path . "grade3.mp3", 'q_content' => "Grade - 3", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 497, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "what-grade-is.mp3", "q_conver" => "What grade is Alice?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 497, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "I-am-alice-I-am-eight-year-old.mp3", "q_content" => null, 'q_conver' => "I am Alice. I am 8 years old. Now I am a Grade (3) student.  I want to be an athlete in the future. I like playing tennis. I am good at tennis. If I become a professional player, I will travel around the world and play tennis. I will be very happy.", 'a_content' => null, "background" => $l6_G497_image . "bg.png"],


            ['round' => 2, 'game_id' => 497, "q_audio" =>  $AudioDomain . $G3_L6_reading_passage_path . "doctor.mp3", 'q_content' => "doctor", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 497, "q_audio" =>  $AudioDomain . $G3_L6_reading_passage_path . "athlete.mp3", 'q_content' => "athlete", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 497, "q_audio" =>  $AudioDomain . $G3_L6_reading_passage_path . "engineer.mp3", 'q_content' => "engineer", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 497, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "what-does-she-want-to.mp3", "q_conver" =>  "What does she want to be?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 497, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "I-am-alice-I-am-eight-year-old.mp3", "q_content" => null, 'q_conver' => "I am Alice. I am 8 years old. Now I am a Grade (3) student.  I want to be an athlete in the future. I like playing tennis. I am good at tennis. If I become a professional player, I will travel around the world and play tennis. I will be very happy.", 'a_content' => null, "background" => $l6_G497_image . "bg.png"],


            ['round' => 3, 'game_id' => 497, "q_audio" =>  $AudioDomain . $G3_L6_reading_passage_path . "tennis.mp3", 'q_content' => "tennis",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 497, "q_audio" =>  $AudioDomain . $G3_L6_reading_passage_path . "football.mp3", 'q_content' => "football",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 497, "q_audio" =>  $AudioDomain . $G3_L6_reading_passage_path . "basketball.mp3", 'q_content' => "basketball",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 497, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "what-is-she-good-at.mp3", "q_conver" => "What is she good at?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 497, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "I-am-alice-I-am-eight-year-old.mp3", "q_content" => null, 'q_conver' => "I am Alice. I am 8 years old. Now I am a Grade (3) student.  I want to be an athlete in the future. I like playing tennis. I am good at tennis. If I become a professional player, I will travel around the world and play tennis. I will be very happy.", 'a_content' => null, "background" => $l6_G497_image . "bg.png"],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 6 Game 498 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L6_practice_speaking = "Grade_3/" . "Lesson_6/" . "practice_speaking/";
        $l6_G498image = $domain . "/storage/images/Grade_3/lesson_6/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 498, "q_audio" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_Im-good-at-swimming-My-favor.mp3", 'q_image' => $l6_G498image . "swim.png", "round_instruction" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_what-sports-and-games-are-you.mp3", "q_content" => "What sports and games are you good at? (or) aren't you good at?"],
            ['round' => 2, 'game_id' => 498, "q_audio" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_Im-good-at-basketball-My-fav.mp3", 'q_image' => $l6_G498image . "basketball.png", "round_instruction" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_what-sports-and-games-are-you.mp3", "q_content" => "What sports and games are you good at? (or) aren't you good at?"],
            ['round' => 3, 'game_id' => 498, "q_audio" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_Im-good-at-tennis-My-favorit.mp3", 'q_image' => $l6_G498image . "tennis.png", "round_instruction" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_what-sports-and-games-are-you.mp3", "q_content" => "What sports and games are you good at? (or) aren't you good at?"],
            ['round' => 4, 'game_id' => 498, "q_audio" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_Im-good-at-sailing-My-favori.mp3", 'q_image' => $l6_G498image . "boat.png", "round_instruction" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_what-sports-and-games-are-you.mp3", "q_content" => "What sports and games are you good at? (or) aren't you good at?"],
            ['round' => 5, 'game_id' => 498, "q_audio" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_Im-good-at-cycling-My-favori.mp3", 'q_image' => $l6_G498image . "cycling.png", "round_instruction" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_what-sports-and-games-are-you.mp3", "q_content" => "What sports and games are you good at? (or) aren't you good at?"],
            ['round' => 6, 'game_id' => 498, "q_audio" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_Im-good-at-archery-My-favori.mp3", 'q_image' => $l6_G498image . "archery.png", "round_instruction" => $AudioDomain . $G3_L6_practice_speaking . "SubBlock_what-sports-and-games-are-you.mp3", "q_content" => "What sports and games are you good at? (or) aren't you good at?"],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 6 Game 499 ( Listening )
        ////////////////////////////////////////////////////////

        $l6_G499_image = $domain . "/storage/images/Grade_3/lesson_6/listening/";
        $G3_L6_listening = "Grade_3/" . "Lesson_6/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 499,  'q_audio' =>  $AudioDomain . $G3_L6_listening . "jame-football" . ".mp3", "q_content" => "Football", "a_content" => 1],
            ['round' => 1, 'game_id' => 499,  'q_audio' =>  null, "q_content" => "Badminton", "a_content" => 0],
            ['round' => 1, 'game_id' => 499,  'q_audio' =>  null, "q_content" => "Tennis", "a_content" => 0],

            ['round' => 2, 'game_id' => 499,  'q_audio' =>  $AudioDomain . $G3_L6_listening . "toby-tennis" . ".mp3", "q_content" => "Badminton", "a_content" => 0],
            ['round' => 2, 'game_id' => 499,  'q_audio' =>  null, "q_content" => "Football", "a_content" => 0],
            ['round' => 2, 'game_id' => 499,  'q_audio' =>  null, "q_content" => "Tennis", "a_content" => 1],

            ['round' => 3, 'game_id' => 499,  'q_audio' =>  $AudioDomain . $G3_L6_listening . "alice-badminton" . ".mp3", "q_content" => "Football", "a_content" => 0],
            ['round' => 3, 'game_id' => 499,  'q_audio' =>  null, "q_content" => "Badminton", "a_content" => 1],
            ['round' => 3, 'game_id' => 499,  'q_audio' =>  null, "q_content" => "Tennis", "a_content" => 0],

            ['round' => 4, 'game_id' => 499,  'q_audio' =>  $AudioDomain . $G3_L6_listening . "judy-judo" . ".mp3", "q_content" => "Tennis", "a_content" => 0],
            ['round' => 4, 'game_id' => 499,  'q_audio' =>  null, "q_content" => "Badminton", "a_content" => 0],
            ['round' => 4, 'game_id' => 499,  'q_audio' =>  null, "q_content" => "Judo", "a_content" => 1],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 6 Game 500 ( Writing )
        ////////////////////////////////////////////////////////

        $l6_G500_image = $domain . "/storage/images/Grade_3/lesson_6/writing/";
        $G3_L6_writing = "Grade_3/" . "Lesson_6/" . "writing/";


        $ques_G3_L6_game500 = $l6_G500_image . "pic.png";

        $sampleANS_G3_L6_game500 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magnam animi a rem recusandae, nobis voluptate, quas laboriosam alias natus esse delectus necessitatibus ipsum sed debitis dolorem. Repellendus, quibusdam beatae.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 500, 'q_content' => $ques_G3_L6_game500,
                'a_content' => $sampleANS_G3_L6_game500
            ],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 6 Game 501 (  Speaking )
        //////////////////////////////////////////////////////////////

        $G3_L6_speaking = "Grade_3/" . "Lesson_6/" . "speaking/";
        $l6_G501image = $domain . "/storage/images/Grade_3/lesson_6/speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 501, 'q_image' => $l6_G501image . "green-star_round.png", "q_content" => "Speak about your favorite games and sports.", "round_instruction" => $AudioDomain . $G3_L6_speaking . "SubBlock_speak-about-your-favourite-gam.mp3", "q_audio" => $AudioDomain . $G3_L6_speaking . "SubBlock_speak-about-your-favourite-gam.mp3"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 7 Game 502 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 502, 'a_content' => '945250237', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 502, 'a_content' => 'lesson_7_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 7 Game 503 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l7_G503_image = $domain . "/storage/images/Grade_3/lesson_7/vocab/";
        $G3_L7_vocab = "Grade_3/" . "Lesson_7/" . "vocab/";


        $ans_G503 = [
            "board", "bookcase", "calculator", "crayons", "chair", "computer", "desk", "english", "eraser", "globe", "map", "maths", "myanmar", "paper-clips", "pencil-case", "ruler", "science", "scissors", "sharpener", "social-studies"
        ];

        foreach ($ans_G503 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 503, 'a_content' => $key, 'a_image' => $l7_G503_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L7_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 7 Game 504 ( Writing )
        ////////////////////////////////////////////////////////

        $G3_L7_arrange_letter = "Grade_3/" . "Lesson_7/" . "writing/";
        $l7_G504_image = $domain . "/storage/images/Grade_3/lesson_7/writing/";


        $q_G504 = [

            ["A", "T", "M", "H", "S"],
            ["S", "I", "N", "C", "E", "E", "C"],
            ["P", "E", "N", "H", "A", "S", "R", "E", "R"],
            ["O", "B", "E", "G", "L"],
            ["K", "E", "S", "D"],
            ["S", "E", "B", "O", "O",  "C", "A", "K"],
            ["S", "E", "C", "A", "C", "I", "L", "P", "E", "N"],
            ["R", "E", "E", "A", "S", "R"],
            ["N", "E", "S", "H", "L", "G", "I"],
            ["M", "A", "Y", "M", "N", "R", "A"],


        ];

        $a_G504 = [
            "MATHS", "SCIENCE", "SHARPENER", "GLOBE", "DESK", "BOOKCASE", "PENCILCASE", "ERASER", "ENGLISH", "MYANMAR"
        ];

        $G504_Index = 0;

        for ($i = 0; $i < count($q_G504); $i++) {
            foreach ($q_G504[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 504, 'q_content' => $j, 'q_audio' => $AudioDomain . $G3_L7_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 504,
                    'q_image' => $l7_G504_image . str_replace(' ', '', strtolower($a_G504[$G504_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L7_arrange_letter . strtolower($a_G504[$G504_Index]) . ".mp3",
                    'a_content' => $a_G504[$G504_Index],
                ],
            ]);
            $G504_Index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 7 Game 505 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l7_G505_image = $domain . "/storage/images/Grade_3/lesson_7/listen_n_practice/";
        $G3_L7_listen_n_practice = "Grade_3/" . "Lesson_7/" . "listen_n_practice/";

        $q_content_G3_L7_Game505_img = ["myanmar-fav", "maths-fav", "science-fav"];

        $a_content_G3_L7_Game505 = [

            "My favorite subject is myanmar. I'm good at myanmar. I'm not good at english.",
            "My favorite subject is maths. I'm good at maths. I'm not good at science.",
            "My favorite subject is science. I'm good at science. I'm not good at maths.",

        ];

        foreach ($q_content_G3_L7_Game505_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 505, 'round' => $key + 1,
                    'q_image' => $l7_G505_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L7_listen_n_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L7_Game505[$key],
                ],
            ]);
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 7 Game 506 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L7_practice_speaking = "Grade_3/" . "Lesson_7/" . "practice_speaking/";
        $l7_G506image = $domain . "/storage/images/Grade_3/lesson_7/practice_speaking/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 506, "q_audio" => $AudioDomain . $G3_L7_practice_speaking . "SubBlock_Im-good-at-social-studies-I.mp3", 'q_image' => $l7_G506image . "social-fav.png", "q_content" => "What subject are you good at?", "round_instruction" => $AudioDomain . $G3_L7_practice_speaking . "SubBlock_what-subject-are-you-good-at.mp3"],
            ['round' => 2, 'game_id' => 506, "q_audio" => $AudioDomain . $G3_L7_practice_speaking . "SubBlock_Im-good-at-physics-I-think-i.mp3", 'q_image' => $l7_G506image . "phys-fav.png", "q_content" => "What subject are you good at?", "round_instruction" => $AudioDomain . $G3_L7_practice_speaking . "SubBlock_what-subject-are-you-good-at.mp3"],
            ['round' => 3, 'game_id' => 506, "q_audio" => $AudioDomain . $G3_L7_practice_speaking . "SubBlock_Im-good-at-science-I-think-i.mp3", 'q_image' => $l7_G506image . "science-fav.png", "q_content" => "What subject are you good at?", "round_instruction" => $AudioDomain . $G3_L7_practice_speaking . "SubBlock_what-subject-are-you-good-at.mp3"],
            ['round' => 4, 'game_id' => 506, "q_audio" => $AudioDomain . $G3_L7_practice_speaking . "SubBlock_Im-good-at-history-I-think-i.mp3", 'q_image' => $l7_G506image . "history-fav.png", "q_content" => "What subject are you good at?", "round_instruction" => $AudioDomain . $G3_L7_practice_speaking . "SubBlock_what-subject-are-you-good-at.mp3"],
            ['round' => 5, 'game_id' => 506, "q_audio" => $AudioDomain . $G3_L7_practice_speaking . "SubBlock_Im-good-at-english-I-think-i.mp3", 'q_image' => $l7_G506image . "english-fav.png", "q_content" => "What subject are you good at?", "round_instruction" => $AudioDomain . $G3_L7_practice_speaking . "SubBlock_what-subject-are-you-good-at.mp3"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 7 Game 507 (  Matching  )
        ////////////////////////////////////////////////////////

        $l7_G507_image = $domain . "/storage/images/Grade_3/lesson_7/Matching/";
        $G3_L7_Matching = "Grade_3/" . "Lesson_7/" . "Matching/";

        $G3_L7_Game507_Matching = [

            $l7_G507_image .  'james.png', $l7_G507_image .  'alice.png', $l7_G507_image . 'amy.png', $l7_G507_image .  'maria.png',
            'english', 'maths', "social-studies", 'science',

        ];

        $G3_L7_Game507_Matching_audio = [

            'james', 'alice', 'amy', 'maria',
            'english', 'maths', "social-studies", 'science',

        ];

        $G3_L7_Game507_Matching_ans = [

            'social studies', 'science', 'Maths', 'English',
            'English', 'Maths', "social studies", 'science',

        ];


        foreach ($G3_L7_Game507_Matching as $key => $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 507, 'round' => 1, 'q_content' => $G3_L7_Game507_Matching_ans[$key],
                    'q_image' => $value, 'q_audio' => $AudioDomain . $G3_L7_Matching .  strtolower($G3_L7_Game507_Matching_audio[$key]) . ".mp3",
                ]
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 7 Game 508 (  Speaking )
        //////////////////////////////////////////////////////////////

        $G3_L7_speaking = "Grade_3/" . "Lesson_7/" . "speaking/";
        $l7_G508image = $domain . "/storage/images/Grade_3/lesson_7/speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 508, 'q_image' => $l7_G508image . "green-star_round.png", "q_content" => "What is your favorite subjects? \nWhat subjects don't you like?", "round_instruction" => $AudioDomain . $G3_L7_speaking . "SubBlock_what-is-your-favourite-subject.mp3", "q_audio" => $AudioDomain . $G3_L7_speaking . "SubBlock_what-is-your-favourite-subject.mp3"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 8 Game 509 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 509, 'a_content' => '945250413', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 509, 'a_content' => 'lesson_8_video_global', 'isLocal' => 0]);





        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 8 Game 510 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l8_G510_image = $domain . "/storage/images/Grade_3/lesson_8/vocab/";
        $G3_L8_vocab = "Grade_3/" . "Lesson_8/" . "vocab/";


        $ans_G510 = [

            "swim", "cant-swim", "skip", "cant-skip", "football", "cant-football", "violin", "cant-violin",
            "bike", "cant-bike", "horse", "cant-horse", "tennis", "cant-tennis", "fly-kite", "cant-fly-kite",
            "piano", "cant-piano", "chinese", "cant-chinese", "guitar", "cant-guitar", "sing", "cant-sing",
            "cook", "cant-cook", "draw", "cant-draw"

        ];

        foreach ($ans_G510 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 510, 'a_content' => $key, 'a_image' => $l8_G510_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L8_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 8 Game 511 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l8_G511_image = $domain . "/storage/images/Grade_3/lesson_8/listen_n_practice/";
        $G3_L8_listen_n_practice = "Grade_3/" . "Lesson_8/" . "listen_n_practice/";

        $q_content_G3_L8_Game511_img = ["piano", "guitar", "cook", "tennis"];

        $a_content_G3_L8_Game511 = [

            "Ned can't play the piano. Alice can play the piano.",
            "Ned can play the guitar. Alice can't play the guitar.",
            "Ned can't cook. Alice can cook.",
            "Ned can play tennis. Alice can't play tennis.",
        ];

        foreach ($q_content_G3_L8_Game511_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 511, 'round' => $key + 1,
                    'q_image' => $l8_G511_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L8_listen_n_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L8_Game511[$key],
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 8 Game 512 (  Matching  )
        ////////////////////////////////////////////////////////

        $l8_G512_image = $domain . "/storage/images/Grade_3/lesson_8/Matching/";
        $G3_L8_Matching = "Grade_3/" . "Lesson_8/" . "Matching/";

        $G3_L8_Game512_Matching = [

            'Can you dance?', 'Can you fly a kite?', 'Can you ride a horse?', 'Can you play the guitar?',
            'Yes, I can. I can play the piano,too.', "Yes,I can. And I can sing.", "No,I can't. I haven't got a kite.", "No, I can't. But I can ride a bike."

        ];

        $G3_L8_Game512_Matching_ans = [

            'dance', 'fly-kite', 'ride-horse', 'play-guitar',
            'play-guitar', "dance", "fly-kite", 'ride-horse'

        ];

        $G3_L8_Game512_Matching_auido = [

            'q-dance', 'q-fly-kite', 'q-ride-horse', 'q-play-guitar',
            'a-play-guitar', "a-dance", "a-fly-kite", 'a-ride-horse'
        ];


        foreach ($G3_L8_Game512_Matching as $key => $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 512, 'round' => 1, 'q_content' => $G3_L8_Game512_Matching_ans[$key],
                    'q_image' => $value, 'q_audio' => $AudioDomain . $G3_L8_Matching .  strtolower($G3_L8_Game512_Matching_auido[$key]) . ".mp3",
                ]
            ]);
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 8 Game 513 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L8_practice_speaking = "Grade_3/" . "Lesson_8/" . "practice_speaking/";
        $l8_G513image = $domain . "/storage/images/Grade_3/lesson_8/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 513, "q_audio" => $AudioDomain . $G3_L8_practice_speaking . "can-guitar" . ".mp3", 'q_image' => $l8_G513image . "guitar.png", "q_content" => "Can you play the guitar?", "round_instruction" => $AudioDomain . $G3_L8_practice_speaking . "guitar" . ".mp3"],
            ['round' => 2, 'game_id' => 513, "q_audio" => $AudioDomain . $G3_L8_practice_speaking . "cant-swim" . ".mp3", 'q_image' => $l8_G513image . "swim.png", "q_content" => "Can you swim?", "round_instruction" => $AudioDomain . $G3_L8_practice_speaking . "swim" . ".mp3"],
            ['round' => 3, 'game_id' => 513, "q_audio" => $AudioDomain . $G3_L8_practice_speaking . "cant-tennis" . ".mp3", 'q_image' => $l8_G513image . "tennis.png", "q_content" => "Can you play tennis?", "round_instruction" => $AudioDomain . $G3_L8_practice_speaking . "tennis" . ".mp3"],
            ['round' => 4, 'game_id' => 513, "q_audio" => $AudioDomain . $G3_L8_practice_speaking . "can-cook" . ".mp3", 'q_image' => $l8_G513image . "cook.png", "q_content" => "Can you cook?", "round_instruction" => $AudioDomain . $G3_L8_practice_speaking . "cook" . ".mp3"],
            ['round' => 5, 'game_id' => 513, "q_audio" => $AudioDomain . $G3_L8_practice_speaking . "can-sing" . ".mp3", 'q_image' => $l8_G513image . "sing.png", "q_content" => "Can you sing?", "round_instruction" => $AudioDomain . $G3_L8_practice_speaking . "sing" . ".mp3"],
            ['round' => 6, 'game_id' => 513, "q_audio" => $AudioDomain . $G3_L8_practice_speaking . "cant-draw" . ".mp3", 'q_image' => $l8_G513image . "draw.png", "q_content" => "Can you draw?", "round_instruction" => $AudioDomain . $G3_L8_practice_speaking . "draw" . ".mp3"],
            ['round' => 7, 'game_id' => 513, "q_audio" => $AudioDomain . $G3_L8_practice_speaking . "can-horse" . ".mp3", 'q_image' => $l8_G513image . "horse.png", "q_content" => "Can you ride a horse?", "round_instruction" => $AudioDomain . $G3_L8_practice_speaking . "horse" . ".mp3"],
            ['round' => 8, 'game_id' => 513, "q_audio" => $AudioDomain . $G3_L8_practice_speaking . "cant-chinese" . ".mp3", 'q_image' => $l8_G513image . "chinese.png", "q_content" => "Can you speak Chinese?", "round_instruction" => $AudioDomain . $G3_L8_practice_speaking . "chinese" . ".mp3"],
            ['round' => 9, 'game_id' => 513, "q_audio" => $AudioDomain . $G3_L8_practice_speaking . "canpiano" . ".mp3", 'q_image' => $l8_G513image . "piano.png", "q_content" => "Can you play the piano?", "round_instruction" => $AudioDomain . $G3_L8_practice_speaking . "piano" . ".mp3"],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 8 Game 514 ( Listening )
        ////////////////////////////////////////////////////////

        $l8_G514_image = $domain . "/storage/images/Grade_3/lesson_8/listening/";
        $G3_L8_listening = "Grade_3/" . "Lesson_8/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 514,  'q_audio' =>  $AudioDomain . $G3_L8_listening . "piano" . ".mp3", "q_content" => "I can play the piano.", "a_content" => 0],
            ['round' => 1, 'game_id' => 514,  'q_audio' =>  null, "q_content" => "I can't play the piano.", "a_content" => 1],

            ['round' => 2, 'game_id' => 514,  'q_audio' =>  $AudioDomain . $G3_L8_listening . "drive-car" . ".mp3", "q_content" => "I can drive.", "a_content" => 1],
            ['round' => 2, 'game_id' => 514,  'q_audio' =>  null, "q_content" => "I can't drive.", "a_content" => 0],

            ['round' => 3, 'game_id' => 514,  'q_audio' =>  $AudioDomain . $G3_L8_listening . "tennis" . ".mp3", "q_content" => "I can play football.", "a_content" => 1],
            ['round' => 3, 'game_id' => 514,  'q_audio' =>  null, "q_content" => "I can't play football.", "a_content" => 0],

            ['round' => 4, 'game_id' => 514,  'q_audio' =>  $AudioDomain . $G3_L8_listening . "draw" . ".mp3", "q_content" => "I can draw", "a_content" => 1],
            ['round' => 4, 'game_id' => 514,  'q_audio' =>  null, "q_content" => "I can't draw.", "a_content" => 0],

            ['round' => 5, 'game_id' => 514,  'q_audio' =>  $AudioDomain . $G3_L8_listening . "sing" . ".mp3", "q_content" => "I can dance.", "a_content" => 1],
            ['round' => 5, 'game_id' => 514,  'q_audio' =>  null, "q_content" => "I can't dance.", "a_content" => 0],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 8 Game 515 ( reading )
        ////////////////////////////////////////////////////////

        $G3_L8_reading_passage_path = "Grade_3/" . "Lesson_8/" . "reading_passage/";
        $l8_G515_image = $domain . "/storage/images/Grade_3/lesson_8/reading_passage/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 515, "q_audio" => null, 'q_content' => "Yes", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 515, "q_audio" => null, 'q_content' => "No", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 515, "q_audio" => $AudioDomain . $G3_L8_reading_passage_path . "bobb-can-dance.mp3", "q_conver" => "Bobb can dance.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 515, "q_audio" => $AudioDomain . $G3_L8_reading_passage_path . "my-cat-is-called-bobb-he-is-black.mp3", "q_content" => null, 'q_conver' => "My cat is called Bobb. He is black. He is two years old. He can jump and dance. He can sing,too. I have got a dog ,too. His name is Bobby. He can swim. And he can play football. We play football in the garden. But My horse can't sing. But He can jump high. Her name is Izzy.", 'a_content' => null, "background" => $l8_G515_image . "bg.png"],


            ['round' => 2, 'game_id' => 515, "q_audio" => null, 'q_content' => "Yes", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 515, "q_audio" => null, 'q_content' => "No", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 515, "q_audio" => $AudioDomain . $G3_L8_reading_passage_path . "bobb-cant-sing.mp3", "q_conver" =>  "Bobb can't sing.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 515, "q_audio" => $AudioDomain . $G3_L8_reading_passage_path . "my-cat-is-called-bobb-he-is-black.mp3", "q_content" => null, 'q_conver' => "My cat is called Bobb. He is black. He is two years old. He can jump and dance. He can sing,too. I have got a dog ,too. His name is Bobby. He can swim. And he can play football. We play football in the garden. But My horse can't sing. But He can jump high. Her name is Izzy.", 'a_content' => null, "background" => $l8_G515_image . "bg.png"],


            ['round' => 3, 'game_id' => 515, "q_audio" => null, 'q_content' => "Yes", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 515, "q_audio" => null, 'q_content' => "No", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 515, "q_audio" => $AudioDomain . $G3_L8_reading_passage_path . "bobb-cant-swim.mp3", "q_conver" => "Bobby can't swim.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 515, "q_audio" => $AudioDomain . $G3_L8_reading_passage_path . "my-cat-is-called-bobb-he-is-black.mp3", "q_content" => null, 'q_conver' => "My cat is called Bobb. He is black. He is two years old. He can jump and dance. He can sing,too. I have got a dog ,too. His name is Bobby. He can swim. And he can play football. We play football in the garden. But My horse can't sing. But He can jump high. Her name is Izzy.", 'a_content' => null, "background" => $l8_G515_image . "bg.png"],


            ['round' => 4, 'game_id' => 515, "q_audio" => null, 'q_content' => "Yes", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 515, "q_audio" => null, 'q_content' => "No", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 515, "q_audio" => $AudioDomain . $G3_L8_reading_passage_path . "bobb-can-football.mp3", "q_conver" => "Bobby can play football.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 515, "q_audio" => $AudioDomain . $G3_L8_reading_passage_path . "my-cat-is-called-bobb-he-is-black.mp3", "q_content" => null, 'q_conver' => "My cat is called Bobb. He is black. He is two years old. He can jump and dance. He can sing,too. I have got a dog ,too. His name is Bobby. He can swim. And he can play football. We play football in the garden. But My horse can't sing. But He can jump high. Her name is Izzy.", 'a_content' => null, "background" => $l8_G515_image . "bg.png"],


            ['round' => 5, 'game_id' => 515, "q_audio" => null, 'q_content' => "Yes", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 515, "q_audio" => null, 'q_content' => "No", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 515, "q_audio" => $AudioDomain . $G3_L8_reading_passage_path . "izzy-cant-sing.mp3", "q_conver" => "Izzy can't sing.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 515, "q_audio" => $AudioDomain . $G3_L8_reading_passage_path . "my-cat-is-called-bobb-he-is-black.mp3", "q_content" => null, 'q_conver' => "My cat is called Bobb. He is black. He is two years old. He can jump and dance. He can sing,too. I have got a dog ,too. His name is Bobby. He can swim. And he can play football. We play football in the garden. But My horse can't sing. But He can jump high. Her name is Izzy.", 'a_content' => null, "background" => $l8_G515_image . "bg.png"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 8 Game 516 ( Writing )
        ////////////////////////////////////////////////////////

        $l8_G516_image = $domain . "/storage/images/Grade_3/lesson_8/writing/";
        $G3_L8_writing = "Grade_3/" . "Lesson_8/" . "writing/";


        $ques_G3_L8_game516 = $l8_G516_image . "pic.png";

        $sampleANS_G3_L8_game516 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magnam animi a rem recusandae, nobis voluptate, quas laboriosam alias natus esse delectus necessitatibus ipsum sed debitis dolorem. Repellendus, quibusdam beatae.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 516, 'q_content' => $ques_G3_L8_game516,
                'a_content' => $sampleANS_G3_L8_game516
            ],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 9 Game 517 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 517, 'a_content' => '943933986', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 517, 'a_content' => 'lesson_9_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 9 Game 518 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l9_G518_image = $domain . "/storage/images/Grade_3/lesson_9/vocab/";
        $G3_L9_vocab = "Grade_3/" . "Lesson_9/" . "vocab/";


        $ans_G518 = [
            "Armchair", "Bathroom", "Bedroom", "Bookshelves", "Cooker", "Dining-room", "Garage", "Kitchen", "Living-room", "Mirror", "Oven", "Shower", "Sofa", "Table", "Toilet", "TV", "Washing-machine"
        ];

        foreach ($ans_G518 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 518, 'a_content' => $key, 'a_image' => $l9_G518_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L9_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 9 Game 519 (  write the words  )
        ////////////////////////////////////////////////////////

        $l9G519image = $domain . "/storage/images/Grade_3/lesson_9/write_word/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 519, "q_image" => "Mirror", "q_content" => "Living-room Kitchen", "a_content" => "Living-room"],
            ['round' => 1, 'game_id' => 519, "q_image" => "Bookshelves", "q_content" => "Living-room Kitchen", "a_content" => "Living-room"],
            ['round' => 1, 'game_id' => 519, "q_image" => "Cooker", "q_content" => "Living-room Kitchen", "a_content" => "Kitchen"],
            ['round' => 1, 'game_id' => 519, "q_image" => "Fridge", "q_content" => "Living-room Kitchen", "a_content" => "Kitchen"],
            ['round' => 1, 'game_id' => 519, "q_image" => "Armchair", "q_content" => "Living-room Kitchen", "a_content" => "Living-room"],

            ['round' => 1, 'game_id' => 519, "q_image" => "TV", "q_content" => "Living-room Kitchen", "a_content" => "Living-room"],
            ['round' => 1, 'game_id' => 519, "q_image" => "Washing Machine", "q_content" => "Living-room Kitchen", "a_content" => "Kitchen"],
            ['round' => 1, 'game_id' => 519, "q_image" => "Oven", "q_content" => "Living-room Kitchen", "a_content" => "Kitchen"],
            ['round' => 1, 'game_id' => 519, "q_image" => "Table", "q_content" => "Living-room Kitchen", "a_content" => "Living-room"],
            ['round' => 1, 'game_id' => 519, "q_image" => "Sofa", "q_content" => "Living-room Kitchen", "a_content" => "Living-room"],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 9 Game 520 , 521 ( language and practice )
        //////////////////////////////////////////////////////////////

        $G3_L9_language_n_practice = "Grade_3/" . "Lesson_9/" . "language_n_practice/";
        $l9_G520_G521_image = $domain . "/storage/images/Grade_3/lesson_9/language_n_practice/";

        // game 520
        $g3_l9_Game520_fill_q1 = [

            ["is", "are"],
            ["is", "are"],
            ["is", "are"],
            ["is", "are"],
            ["is", "are"],
            ["is", "are"],

        ];

        $g3_l9_Game520_fill_q2 = [
            "There ____ a living room in my house.",
            "There ____ a dining room in my house.",
            "There ____ a kitchen in my house.",
            "There ____ three bedrooms in my house.",
            "There ____ two bathrooms in my house.",
            "There ____ a garage beside my house."
        ];

        $correct_G3_l9_Ans =   [

            ["is"], ["is"], ["is"], ["are"], ["are"], ["is"],

        ];

        $g3_l9_Game520_fill_a = [
            "There is a living room in my house.",
            "There is a dining room in my house.",
            "There is a kitchen in my house.",
            "There are three bedrooms in my house.",
            "There are two bathrooms in my house.",
            "There is a garage beside my house."
        ];

        $g3_l9_Game520_fill_audio_img = [
            "living-room", "dining-room", "kitchen", "bedroom", "bathroom", "garage"
        ];

        for ($i = 0; $i < count($g3_l9_Game520_fill_q1); $i++) {

            foreach ($g3_l9_Game520_fill_q1[$i] as $k => $word) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 520,
                        'q_content' => $word,
                        'a_content' => implode(' ', $correct_G3_l9_Ans[$i]),
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 520,
                    "q_image" => $l9_G520_G521_image  . "1/" . $g3_l9_Game520_fill_audio_img[$i] . ".png",
                    'q_audio' => $AudioDomain . $G3_L9_language_n_practice . "1/" . $g3_l9_Game520_fill_audio_img[$i] . ".mp3",
                    'q_content' => $g3_l9_Game520_fill_q2[$i],
                    'a_content' => $g3_l9_Game520_fill_a[$i]
                ],
            ]);
        }


        // game 521
        $q_G521 = [

            ["is", "There", "in", "my", "house.", "living room", "a"],
            ["bedrooms", "in", "There", "three", "are", "my", "house."],
            ["my house.", "kitchen", "There", "in", "a", "is"],
            ["There", "in", "my house.", "two", "are", "bathrooms"],
            ["is", "beside", "There", "garage", "a", "my house."],

        ];

        $a_G521 = [
            "There is a living room in my house.", "There are three bedrooms in my house.", "There is a kitchen in my house.", "There are two bathrooms in my house.", "There is a garage beside my house."
        ];

        $audio_img_G521 = [
            "living-room", "bedrooms", "kitchen", "bathrooms", "garage"
        ];

        $G521_Index = 0;

        for ($i = 0; $i < count($q_G521); $i++) {
            foreach ($q_G521[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 521, 'q_content' => $j],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 521,
                    'q_image' => $l9_G520_G521_image . "2/" . str_replace(' ', '', strtolower($audio_img_G521[$G521_Index]))  . ".png",
                    'a_audio' => $AudioDomain . $G3_L9_language_n_practice . "2/" . strtolower($audio_img_G521[$G521_Index]) . ".mp3",
                    'a_content' => $a_G521[$G521_Index],
                ],
            ]);
            $G521_Index++;
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 9 Game 522 (  Listening  )
        ////////////////////////////////////////////////////////

        $l9G522image = $domain . "/storage/images/Grade_3/lesson_9/listern_n_practice/";
        $G3_L9_G522_listen_n_practice_path = "Grade_3/" . "Lesson_9/" . "listern_n_practice/";

        DB::table('ans_n_ques')->insert([

            ["game_id" => 522, "q_image" =>  null, "q_audio" => $AudioDomain . $G3_L9_G522_listen_n_practice_path . "In-my-new-house-there-is-a-go" . ".mp3", "a_content" => null],
            ["game_id" => 522, "q_image" => $l9G522image . "sofa.png", "q_audio" => null, "a_content" => 1],
            ["game_id" => 522, "q_image" => $l9G522image . "TV.png", "q_audio" => null, "a_content" => 0],
            ["game_id" => 522, "q_image" => $l9G522image . "washing-machine.png", "q_audio" => null, "a_content" => 1],
            ["game_id" => 522, "q_image" => $l9G522image . "book.png", "q_audio" => null, "a_content" => 1],
            ["game_id" => 522, "q_image" => $l9G522image . "fridge.png", "q_audio" => null, "a_content" => 1],
            ["game_id" => 522, "q_image" => $l9G522image . "cooker.png", "q_audio" => null, "a_content" => 0],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 9 Game 523 (  Speaking  )
        //////////////////////////////////////////////////////////////

        $G3_L9_practice_speaking = "Grade_3/" . "Lesson_9/" . "practice_speaking/";
        $l9_G523image = $domain . "/storage/images/Grade_3/lesson_9/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 523, "q_audio" => $AudioDomain . $G3_L9_practice_speaking . "TV" . ".mp3", 'q_image' => $l9_G523image . "room.png", "q_content" => "Is there a TV?", "round_instruction" => $AudioDomain . $G3_L9_practice_speaking . "TV" . ".mp3"],
            ['round' => 2, 'game_id' => 523, "q_audio" => $AudioDomain . $G3_L9_practice_speaking . "photographs" . ".mp3", 'q_image' => $l9_G523image . "room.png", "q_content" => "Are there photographs?", "round_instruction" => $AudioDomain . $G3_L9_practice_speaking . "photographs" . ".mp3"],
            ['round' => 3, 'game_id' => 523, "q_audio" => $AudioDomain . $G3_L9_practice_speaking . "desk" . ".mp3", 'q_image' => $l9_G523image . "room.png", "q_content" => "Is there a desk?", "round_instruction" => $AudioDomain . $G3_L9_practice_speaking . "desk" . ".mp3"],
            ['round' => 4, 'game_id' => 523, "q_audio" => $AudioDomain . $G3_L9_practice_speaking . "telephone" . ".mp3", 'q_image' => $l9_G523image . "room.png", "q_content" => "Is there a telephone?", "round_instruction" => $AudioDomain . $G3_L9_practice_speaking . "telephone" . ".mp3"],
            ['round' => 5, 'game_id' => 523, "q_audio" => $AudioDomain . $G3_L9_practice_speaking . "lamps" . ".mp3", 'q_image' => $l9_G523image . "room.png", "q_content" => "Are there any lamps?", "round_instruction" => $AudioDomain . $G3_L9_practice_speaking . "lamps" . ".mp3"],
            ['round' => 5, 'game_id' => 523, "q_audio" => $AudioDomain . $G3_L9_practice_speaking . "DVD-player" . ".mp3", 'q_image' => $l9_G523image . "room.png", "q_content" => "Is there a DVD player?", "round_instruction" => $AudioDomain . $G3_L9_practice_speaking . "DVD-player" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 9 Game 524 (  Free Practice )
        //////////////////////////////////////////////////////////////

        $G3_L9_speaking = "Grade_3/" . "Lesson_9/" . "Speaking/";
        $l9_G524image = $domain . "/storage/images/Grade_3/lesson_9/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 524, "q_image" => $l9_G524image . "green-star_round.png", "q_content" => "What is in your room?", "round_instruction" => $AudioDomain . $G3_L9_speaking . "SubBlock_what-is-in-your-room" . ".mp3", "q_audio" => $AudioDomain . $G3_L9_speaking . "SubBlock_what-is-in-your-room" . ".mp3"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 10 Game 525 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 525, 'a_content' => '943934112', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 525, 'a_content' => 'lesson_10_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 10 Game 526 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l10_G526_image = $domain . "/storage/images/Grade_3/lesson_10/vocab/";
        $G3_L10_vocab = "Grade_3/" . "Lesson_10/" . "vocab/";


        $ans_G526 = [
            "bookshelf", "chair", "chair-box", "bed", "dustbin"
        ];

        foreach ($ans_G526 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 526, 'a_content' => $key, 'a_image' => $l10_G526_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L10_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 10 Game 527 , 528 ( practice )
        //////////////////////////////////////////////////////////////

        $G3_L10_language_n_practice = "Grade_3/" . "Lesson_10/" . "language_n_practice/";
        $l10_G527_image = $domain . "/storage/images/Grade_3/lesson_10/language_n_practice/";

        // Game 527
        $g3_l10_Game527_fill_q1 = [

            ["in", "in front of", "on"],
            ["in", "in front of", "on"],
            ["in", "in front of", "on"],
            ["in", "behind", "under"],
            ["next to", "behind", "on"],
            ["next to", "behind", "on"],
            ["beside", "between", "behind"],
            ["next to", "in", "on"],


        ];

        $g3_l10_Game527_fill_q2 = [
            "There is a cat ____ the box.",
            "There is a computer ____ the table.",
            "There is a chair ____ the table.",
            "There is a dustbin ____ the table.",
            "There is a bed ____ the window.",
            "There is a chair ____ the box.",
            "There is a bookshelf ____ the table and the bed.",
            "There is a clock ____ the wall.",
        ];

        $correct_G3_l10_Ans =   [

            ["in"], ["on"], ["in front of"], ["under"], ["next to"], ["behind"], ["between"],  ["on"],

        ];

        $g3_l10_Game527_fill_a = [
            "There is a cat in the box.",
            "There is a computer on the table.",
            "There is a chair in front of the table.",
            "There is a dustbin under the table.",
            "There is a bed next to the window.",
            "There is a chair behind the box.",
            "There is a bookshelf between the table and the bed.",
            "There is a clock on the wall.",

        ];

        $g3_l10_Game527_fill_audio_img = [
            "cat", "computer", "chair", "dustbin", "bed", "cat-chair", "bookshelf",  "clock",
        ];

        for ($i = 0; $i < count($g3_l10_Game527_fill_q1); $i++) {

            foreach ($g3_l10_Game527_fill_q1[$i] as $k => $word) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 527,
                        'q_content' => $word,
                        'a_content' => implode(' ', $correct_G3_l10_Ans[$i]),
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 527,
                    "q_image" => $l10_G527_image . "1/" . $g3_l10_Game527_fill_audio_img[$i] . ".png",
                    'q_audio' => $AudioDomain . $G3_L10_language_n_practice . $g3_l10_Game527_fill_audio_img[$i] . ".mp3",
                    'q_content' => $g3_l10_Game527_fill_q2[$i],
                    'a_content' => $g3_l10_Game527_fill_a[$i]
                ],
            ]);
        }


        // Game 528
        $q_content_G3_L10_Game528_img = ["apple", "cat", "pencil",  "computer", "cats", "books", "flowers", "chairs"];

        $a_content_G3_L10_Game528 = [
            "There is an apple in front of the glass.",
            "There is a cat in front of the chair.",
            "There is a pencil next to the book.",
            "There is a computer on the table.",
            "There are three cats under the table.",
            "There are books on the table.",
            "There are flowers in the vase.",
            "There are chairs next to the table.",
        ];

        foreach ($q_content_G3_L10_Game528_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 528, 'round' => $key + 1,
                    // 'q_content' => $q_content_G3_L10_Game528[$key],
                    'q_image' => $l10_G527_image . "2/" . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L10_language_n_practice ."practice_2_".$value . ".mp3",
                    'a_content' => $a_content_G3_L10_Game528[$key],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 10 Game 529 ( Listening )
        ////////////////////////////////////////////////////////

        $l10_G529_image = $domain . "/storage/images/Grade_3/lesson_10/listening/";
        $G3_L10_listening = "Grade_3/" . "Lesson_10/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 529,  'q_audio' =>  $AudioDomain . $G3_L10_listening . "next-to" . ".mp3", "q_content" => "next to", "a_content" => 1],
            ['round' => 1, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "beside", "a_content" => 0],
            ['round' => 1, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "in front of", "a_content" => 0],

            ['round' => 2, 'game_id' => 529,  'q_audio' =>  $AudioDomain . $G3_L10_listening . "under" . ".mp3", "q_content" => "on the table", "a_content" => 0],
            ['round' => 2, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "under the table", "a_content" => 1],
            ['round' => 2, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "behind the table", "a_content" => 0],

            ['round' => 3, 'game_id' => 529,  'q_audio' =>  $AudioDomain . $G3_L10_listening . "in" . ".mp3", "q_content" => "on the vase", "a_content" => 0],
            ['round' => 3, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "in front of the vase", "a_content" => 0],
            ['round' => 3, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "in the vase", "a_content" => 1],

            ['round' => 4, 'game_id' => 529,  'q_audio' =>  $AudioDomain . $G3_L10_listening . "in-front-of" . ".mp3", "q_content" => "in front of the table", "a_content" => 1],
            ['round' => 4, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "under the table", "a_content" => 0],
            ['round' => 4, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "behind the table", "a_content" => 0],

            ['round' => 5, 'game_id' => 529,  'q_audio' =>  $AudioDomain . $G3_L10_listening . "on" . ".mp3", "q_content" => "under the table", "a_content" => 0],
            ['round' => 5, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "beside the table", "a_content" => 0],
            ['round' => 5, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "on the table", "a_content" => 1],

            ['round' => 6, 'game_id' => 529,  'q_audio' =>  $AudioDomain . $G3_L10_listening . "beside" . ".mp3", "q_content" => "beside the bed", "a_content" => 1],
            ['round' => 6, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "on the bed", "a_content" => 0],
            ['round' => 6, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "under the bed", "a_content" => 0],

            ['round' => 7, 'game_id' => 529,  'q_audio' =>  $AudioDomain . $G3_L10_listening . "on-wall" . ".mp3", "q_content" => "in the wall", "a_content" => 0],
            ['round' => 7, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "next to the wall", "a_content" => 0],
            ['round' => 7, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "on the wall", "a_content" => 1],

            ['round' => 8, 'game_id' => 529,  'q_audio' =>  $AudioDomain . $G3_L10_listening . "between" . ".mp3", "q_content" => "between the book and the vase", "a_content" => 1],
            ['round' => 8, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "in front of the book and the vase", "a_content" => 0],
            ['round' => 8, 'game_id' => 529,  'q_audio' =>  null, "q_content" => "next to the book and the vase", "a_content" => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 10 Game 530 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L10_practice_speaking = "Grade_3/" . "Lesson_10/" . "practice_speaking/";
        $l10_G530image = $domain . "/storage/images/Grade_3/lesson_10/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 530, "q_audio" => $AudioDomain . $G3_L10_practice_speaking . "SubBlock_There-is-cat-in-front-of-sofa" . ".mp3", 'q_image' => $l10_G530image . "cat.png", "q_content" => "Where is the cat?", "round_instruction" => $AudioDomain . $G3_L10_practice_speaking . "cat" . ".mp3"],
            ['round' => 2, 'game_id' => 530, "q_audio" => $AudioDomain . $G3_L10_practice_speaking . "SubBlock_There-are-pictures-behind-the" . ".mp3", 'q_image' => $l10_G530image . "picture.png", "q_content" => "Where are the pictures? ", "round_instruction" => $AudioDomain . $G3_L10_practice_speaking . "picture" . ".mp3"],
            ['round' => 3, 'game_id' => 530, "q_audio" => $AudioDomain . $G3_L10_practice_speaking . "SubBlock_There-are-books-under-the-tabl" . ".mp3", 'q_image' => $l10_G530image . "book.png", "q_content" => "Where are the books?", "round_instruction" => $AudioDomain . $G3_L10_practice_speaking . "book" . ".mp3"],
            ['round' => 4, 'game_id' => 530, "q_audio" => $AudioDomain . $G3_L10_practice_speaking . "SubBlock_There-is-telephone-on-the-sofa" . ".mp3", 'q_image' => $l10_G530image . "telephone.png", "q_content" => "Where is the telephone?", "round_instruction" => $AudioDomain . $G3_L10_practice_speaking . "telephone" . ".mp3"],
            ['round' => 5, 'game_id' => 530, "q_audio" => $AudioDomain . $G3_L10_practice_speaking . "SubBlock_There-is-TV-on-the-table" . ".mp3", 'q_image' => $l10_G530image . "TV.png", "q_content" => "Where is the TV?", "round_instruction" => $AudioDomain . $G3_L10_practice_speaking . "TV" . ".mp3"],
            ['round' => 6, 'game_id' => 530, "q_audio" => $AudioDomain . $G3_L10_practice_speaking . "SubBlock_There-is-sofa-beside-the-chair" . ".mp3", 'q_image' => $l10_G530image . "sofa.png", "q_content" => "Where is the sofa?", "round_instruction" => $AudioDomain . $G3_L10_practice_speaking . "sofa" . ".mp3"],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 10 Game 531 ( reading passage )
        ////////////////////////////////////////////////////////

        $G3_L10_reading_passage_path = "Grade_3/" . "Lesson_10/" . "reading_passage/";
        $l10_G531_image = $domain . "/storage/images/Grade_3/lesson_10/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 531, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 531, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "the-house-is-small.mp3", "q_conver" => "The house is small.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "i-live-in-a-big-house-it-isnt-very-old.mp3", "q_content" => null, 'q_conver' => "I live in a big house. It isn't very old, it's new. There are four bedrooms, a kitchen, a dining room, a living room and a hall. My bedroom is my favorite room. It is blue. There are posters of animals, and I've got a green rug. There is a desk in my bedroom, and I have got a computer. There isn't a TV. My toys are in my bedroom. My teddy bear is on my bed. I play with my toys at the weekends.", 'a_content' => null, "background" => $l10_G531_image . "bg.png"],


            ['round' => 2, 'game_id' => 531, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 531, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "there-are-five-bedrooms.mp3", "q_conver" =>  "There are five bedrooms.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "i-live-in-a-big-house-it-isnt-very-old.mp3", "q_content" => null, 'q_conver' => "I live in a big house. It isn't very old, it's new. There are four bedrooms, a kitchen, a dining room, a living room and a hall. My bedroom is my favorite room. It is blue. There are posters of animals, and I've got a green rug. There is a desk in my bedroom, and I have got a computer. There isn't a TV. My toys are in my bedroom. My teddy bear is on my bed. I play with my toys at the weekends.", 'a_content' => null, "background" => $l10_G531_image . "bg.png"],


            ['round' => 3, 'game_id' => 531, "q_audio" =>  null, 'q_content' => "True",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 531, "q_audio" =>  null, 'q_content' => "False",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "the-rug-is.mp3", "q_conver" => "The rug is green.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "i-live-in-a-big-house-it-isnt-very-old.mp3", "q_content" => null, 'q_conver' => "I live in a big house. It isn't very old, it's new. There are four bedrooms, a kitchen, a dining room, a living room and a hall. My bedroom is my favorite room. It is blue. There are posters of animals, and I've got a green rug. There is a desk in my bedroom, and I have got a computer. There isn't a TV. My toys are in my bedroom. My teddy bear is on my bed. I play with my toys at the weekends.", 'a_content' => null, "background" => $l10_G531_image . "bg.png"],


            ['round' => 4, 'game_id' => 531, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 531, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "there-isnt-a-computer.mp3", "q_conver" => "There isn't a computer.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "i-live-in-a-big-house-it-isnt-very-old.mp3", "q_content" => null, 'q_conver' => "I live in a big house. It isn't very old, it's new. There are four bedrooms, a kitchen, a dining room, a living room and a hall. My bedroom is my favorite room. It is blue. There are posters of animals, and I've got a green rug. There is a desk in my bedroom, and I have got a computer. There isn't a TV. My toys are in my bedroom. My teddy bear is on my bed. I play with my toys at the weekends.", 'a_content' => null, "background" => $l10_G531_image . "bg.png"],


            ['round' => 5, 'game_id' => 531, "q_audio" => null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 531, "q_audio" => null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "there-is-a-tv.mp3", "q_conver" => "There is a TV in my bedroom.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "i-live-in-a-big-house-it-isnt-very-old.mp3", "q_content" => null, 'q_conver' => "I live in a big house. It isn't very old, it's new. There are four bedrooms, a kitchen, a dining room, a living room and a hall. My bedroom is my favorite room. It is blue. There are posters of animals, and I've got a green rug. There is a desk in my bedroom, and I have got a computer. There isn't a TV. My toys are in my bedroom. My teddy bear is on my bed. I play with my toys at the weekends.", 'a_content' => null, "background" => $l10_G531_image . "bg.png"],


            ['round' => 6, 'game_id' => 531, "q_audio" => null, 'q_content' => "True", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 6, 'game_id' => 531, "q_audio" => null, 'q_content' => "False", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 6, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "there-are-toys.mp3", "q_conver" => "There are toys in my bedroom.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 6, 'game_id' => 531, "q_audio" => $AudioDomain . $G3_L10_reading_passage_path . "i-live-in-a-big-house-it-isnt-very-old.mp3", "q_content" => null, 'q_conver' => "I live in a big house. It isn't very old, it's new. There are four bedrooms, a kitchen, a dining room, a living room and a hall. My bedroom is my favorite room. It is blue. There are posters of animals, and I've got a green rug. There is a desk in my bedroom, and I have got a computer. There isn't a TV. My toys are in my bedroom. My teddy bear is on my bed. I play with my toys at the weekends.", 'a_content' => null, "background" => $l10_G531_image . "bg.png"],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 10 Game 532 ( Writing )
        ////////////////////////////////////////////////////////

        $l10_G532_image = $domain . "/storage/images/Grade_3/lesson_10/writing/";
        $G3_L10_writing = "Grade_3/" . "Lesson_10/" . "writing/";


        $ques_G3_L10_game532 = $l10_G532_image . "pic.png";

        $sampleANS_G3_L10_game532 = "I live in a small house. There are only four rooms in my house, a living room, two bedroom, and a kitchen. There are some posters of animals on the wall in the living room. There is a TV in the living room. I have many toys in my bedroom. There are a fridge, a washing machine and dining table in the kitchen.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 532, 'q_content' => $ques_G3_L10_game532,
                'a_content' => $sampleANS_G3_L10_game532
            ],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 10 Game 533 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L10_speaking = "Grade_3/" . "Lesson_10/" . "Speaking/";
        $l10_G533image = $domain . "/storage/images/Grade_3/lesson_10/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 533, "q_image" => $l10_G533image . "green-star_round.png", "q_content" => "Talk about your house.", "round_instruction" => $AudioDomain . $G3_L10_speaking . "SubBlock_talk-about-your-house" . ".mp3", "q_audio" => $AudioDomain . $G3_L10_speaking . "SubBlock_talk-about-your-house" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 11 Game 534 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 534, 'a_content' => '943934266', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 534, 'a_content' => 'lesson_11_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 11 Game 535 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l11_G535_image = $domain . "/storage/images/Grade_3/lesson_11/vocab/";
        $G3_L11_vocab = "Grade_3/" . "Lesson_11/" . "vocab/";


        $ans_G535 = [
            "Cat", "Dog", "Duck", "Goat", "Goldfish", "Hamster", "Horse", "Parrot", "Pig", "Pigeon", "Rabbit", "Sheep", "Spider", "Squirrel", "Tortoise"
        ];

        foreach ($ans_G535 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 535, 'a_content' => $key, 'a_image' => $l11_G535_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L11_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 11 Game 536 ( look at pic )
        ////////////////////////////////////////////////////////

        $G3_L11_arrange_letter = "Grade_3/" . "Lesson_11/" . "look_at_pic/";
        $l536_image = $domain . "/storage/images/Grade_3/lesson_11/look_at_pic/";


        $q536 = [

            ["C", "T", "A"],
            ["S", "R", "U", "I", "R", "Q", "E", "L"],
            ["I", "F", "G", "D", "H", "O", "S", "L"],
            ["P", "T", "A", "R", "O",  "R"],
            ["T", "R", "O", "T", "O", "E", "S", "I"],
            ["D", "E", "R", "S", "P", "I"],
            ["I", "P", "N", "E", "O", "G"],
            ["D", "K", "U", "C"],
            ["G", "D", "O"],
            ["A", "T", "I", "B", "B", "R"],

        ];

        $a536 = [
            "CAT", "SQUIRREL", "GOLDFISH", "PARROT", "TORTOISE", "SPIDER", "PIGEON", "DUCK", "DOG", "RABBIT"
        ];

        $G536_Index = 0;

        for ($i = 0; $i < count($q536); $i++) {
            foreach ($q536[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 536, 'q_content' => $j, 'q_audio' => $AudioDomain . $G3_L11_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 536,
                    'q_image' => $l536_image . str_replace(' ', '', strtolower($a536[$G536_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L11_arrange_letter . strtolower($a536[$G536_Index]) . ".mp3",
                    'a_content' => $a536[$G536_Index],
                ],
            ]);
            $G536_Index++;
        }




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 11 Game 537 ( Practice )
        //////////////////////////////////////////////////////////////

        $G3_L11_language_n_practice = "Grade_3/" . "Lesson_11/" . "language_n_practice/";
        $l11_G537_image = $domain . "/storage/images/Grade_3/lesson_11/language_n_practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 537, "q_image" => $l11_G537_image . "squirrel.png", "q_conver" => "Do you have a squirrel?", 'q_content' => "Yes, I do.", 'a_content' => 0],
            ['round' => 1, 'game_id' => 537, "q_image" => null, "q_conver" => null, 'q_content' => "No, I don't.", 'a_content' => 1],

            ['round' => 2, 'game_id' => 537, "q_image" => $l11_G537_image . "fish.png", "q_conver" => "Do you have a fish?", 'q_content' => "Yes, I do.", 'a_content' => 1],
            ['round' => 2, 'game_id' => 537, "q_image" => null, "q_conver" => null, 'q_content' => "No, I don't.", 'a_content' => 0],

            ['round' => 3, 'game_id' => 537, "q_image" => $l11_G537_image . "cat.png", "q_conver" => "Do you have a cat?", 'q_content' => "Yes, I do.", 'a_content' => 1],
            ['round' => 3, 'game_id' => 537, "q_image" => null, "q_conver" => null, 'q_content' => "No, I don't.", 'a_content' => 0],

            ['round' => 4, 'game_id' => 537, "q_image" => $l11_G537_image . "parrot.png", "q_conver" => "Do you have a parrot?", 'q_content' => "Yes, I do.", 'a_content' => 0],
            ['round' => 4, 'game_id' => 537, "q_image" => null, "q_conver" => null, 'q_content' => "No, I don't.", 'a_content' => 1],

            ['round' => 5, 'game_id' => 537, "q_image" => $l11_G537_image . "duck.png", "q_conver" => "Do you have a duck?", 'q_content' => "Yes, I do.", 'a_content' => 0],
            ['round' => 5, 'game_id' => 537, "q_image" => null, "q_conver" => null, 'q_content' => "No, I don't.", 'a_content' => 1],

            ['round' => 6, 'game_id' => 537, "q_image" => $l11_G537_image . "pig.png", "q_conver" => "Do you have a pig?", 'q_content' => "Yes, I do.", 'a_content' => 1],
            ['round' => 6, 'game_id' => 537, "q_image" => null, "q_conver" => null, 'q_content' => "No, I don't.", 'a_content' => 0],

            ['round' => 7, 'game_id' => 537, "q_image" => $l11_G537_image . "tortoise.png", "q_conver" => "Do you have a tortoise?", 'q_content' => "Yes, I do.", 'a_content' => 0],
            ['round' => 7, 'game_id' => 537, "q_image" => null, "q_conver" => null, 'q_content' => "No, I don't.", 'a_content' => 1],

            ['round' => 8, 'game_id' => 537, "q_image" => $l11_G537_image . "hamster.png", "q_conver" => "Do you have a hamster?", 'q_content' => "Yes, I do.", 'a_content' => 1],
            ['round' => 8, 'game_id' => 537, "q_image" => null, "q_conver" => null, 'q_content' => "No, I don't.", 'a_content' => 0],

        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 11 Game 538 ( listening )
        //////////////////////////////////////////////////////////////

        $G3_L11_listening_path = "Grade_3/" . "Lesson_11/" . "listening/";
        $l11_G538_image = $domain . "/storage/images/Grade_3/lesson_11/listening/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 538, "q_image" => $l11_G538_image . "jerry.png", "q_audio" => $AudioDomain . $G3_L11_listening_path . "jerry-has-dog.mp3", "q_content" => "Yes", 'q_conver' => "Jerry has a dog.", 'a_content' => 1],
            ['round' => 1, 'game_id' => 538, "q_image" => null, "q_audio" =>  null, 'q_content' => "No", "q_conver" => null, 'a_content' => 0],

            ['round' => 2, 'game_id' => 538, "q_image" => $l11_G538_image . "jerry.png", "q_audio" => $AudioDomain . $G3_L11_listening_path . "jerry-doesnt-have-cat.mp3", "q_content" => "Yes", 'q_conver' => "Jerry doesn't have a cat.", 'a_content' => 1],
            ['round' => 2, 'game_id' => 538, "q_image" => null, "q_audio" =>  null, 'q_content' => "No", "q_conver" => null, 'a_content' => 0],

            ['round' => 3, 'game_id' => 538, "q_image" => $l11_G538_image . "jerry.png", "q_audio" => $AudioDomain . $G3_L11_listening_path . "jerry-has-spider.mp3", "q_content" => "Yes", 'q_conver' => "Jerry has a spider.",  'a_content' => 1],
            ['round' => 3, 'game_id' => 538, "q_image" => null, "q_audio" =>  null, 'q_content' => "No", "q_conver" => null, 'a_content' => 0],

            ['round' => 4, 'game_id' => 538, "q_image" => $l11_G538_image . "jerry.png", "q_audio" => $AudioDomain . $G3_L11_listening_path . "jerry-doesnt-have-rabbit.mp3", "q_content" => "Yes", 'q_conver' => "Jerry doesn't have a rabbit.", 'a_content' => 0],
            ['round' => 4, 'game_id' => 538, "q_image" => null, "q_audio" =>  null, 'q_content' => "No", "q_conver" => null, 'a_content' => 1],

            ['round' => 5, 'game_id' => 538, "q_image" => $l11_G538_image . "jerry.png", "q_audio" => $AudioDomain . $G3_L11_listening_path . "jerry-has-goldfish.mp3", "q_content" => "Yes", 'q_conver' => "Jerry has a goldfish.", 'a_content' => 1],
            ['round' => 5, 'game_id' => 538, "q_image" => null, "q_audio" =>  null, 'q_content' => "No", "q_conver" => null, 'a_content' => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 11 Game 539 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L11_practice_speaking = "Grade_3/" . "Lesson_11/" . "practice_speaking/";
        $l11_G539image = $domain . "/storage/images/Grade_3/lesson_11/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 539, "q_audio" => $AudioDomain . $G3_L11_practice_speaking . "SubBlock_Yes-I-do-I-have-a-rabbit-Bu" . ".mp3", 'q_image' => $l11_G539image . "rabbit.png", "q_content" => "Do you have a rabbit? \nDo you have a squirrel?", "round_instruction" => $AudioDomain . $G3_L11_practice_speaking . "rabbit" . ".mp3"],
            ['round' => 2, 'game_id' => 539, "q_audio" => $AudioDomain . $G3_L11_practice_speaking . "SubBlock_Yes-I-do-I-have-a-duck-But" . ".mp3", 'q_image' => $l11_G539image . "duck.png", "q_content" => "Do you have a duck? \nDo you have a cat?", "round_instruction" =>  $AudioDomain . $G3_L11_practice_speaking . "duck" . ".mp3"],
            ['round' => 3, 'game_id' => 539, "q_audio" => $AudioDomain . $G3_L11_practice_speaking . "SubBlock_Yes-I-do-I-have-a-hamster-B" . ".mp3", 'q_image' => $l11_G539image . "hamster.png", "q_content" => "Do you have a hamster? \nDo you have a pigeon?", "round_instruction"  => $AudioDomain . $G3_L11_practice_speaking . "hamster" . ".mp3"],
            ['round' => 4, 'game_id' => 539, "q_audio" => $AudioDomain . $G3_L11_practice_speaking . "SubBlock_Yes-I-do-I-have-a-cat-But-I" . ".mp3", 'q_image' => $l11_G539image . "cat.png", "q_content" => "Do you have a cat? \nDo you have a spider?", "round_instruction" => $AudioDomain . $G3_L11_practice_speaking . "cat" . ".mp3"],
            ['round' => 5, 'game_id' => 539, "q_audio" => $AudioDomain . $G3_L11_practice_speaking . "SubBlock_Yes-I-do-I-have-a-dog-But-I" . ".mp3", 'q_image' => $l11_G539image . "dog.png", "q_content" => "Do you have a dog? \nDo you have a mouse?", "round_instruction" => $AudioDomain . $G3_L11_practice_speaking . "dog" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 11 Game 540 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L11_speaking = "Grade_3/" . "Lesson_11/" . "Speaking/";
        $l11_G540image = $domain . "/storage/images/Grade_3/lesson_11/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 540, "q_image" => $l11_G540image . "green-star_round.png", "q_content" => "Do you have a pet? Please talk about it.", "round_instruction" => $AudioDomain . $G3_L11_speaking . "SubBlock_do-you-have-a-pet-please-talk" . ".mp3", "q_audio" => $AudioDomain . $G3_L11_speaking . "SubBlock_do-you-have-a-pet-please-talk" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 12 Game 541 ( target Explain )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 541, 'a_content' => '943934431', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 541, 'a_content' => 'lesson_12_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 12 Game 542 ( Arrange Letter )
        ////////////////////////////////////////////////////////

        $G3_L12_arrange_letter = "Grade_3/" . "Lesson_12/" . "arrange_letter/";
        $l12_G542_image = $domain . "/storage/images/Grade_3/lesson_12/arrange_letter/";


        $q_G542 = [

            ["A", "E", "S", "L"],
            ["L", "O", "F", "F", "B", "U", "A"],
            ["E", "E", "C", "H", "T", "A", "H"],
            ["N", "I", "L",  "O"],
            ["A", "N", "P", "D", "A"],
            ["A", "G", "E", "E", "L"],
            ["A", "R", "T", "O", "R", "P"],
            ["N", "O", "Y", "E", "K", "M"],
            ["A", "R", "Z", "E", "B"],
            ["R", "O", "C", "O", "C", "E", "L", "D", "I"],


        ];

        $a_G542 = [
            "SEAL", "BUFFALO", "CHEETAH", "LION", "PANDA", "EAGLE", "PARROT", "MONKEY", "ZEBRA", "CROCODILE"
        ];

        $G542_Index = 0;

        for ($i = 0; $i < count($q_G542); $i++) {
            foreach ($q_G542[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 542, 'q_content' => $j, 'q_audio' => $AudioDomain . $G3_L12_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 542,
                    'q_image' => $l12_G542_image . str_replace(' ', '', strtolower($a_G542[$G542_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L12_arrange_letter . strtolower($a_G542[$G542_Index]) . ".mp3",
                    'a_content' => $a_G542[$G542_Index],
                ],
            ]);
            $G542_Index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 12 Game 543 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l12_G543_image = $domain . "/storage/images/Grade_3/lesson_12/vocab/";
        $G3_L12_vocab = "Grade_3/" . "Lesson_12/" . "vocab/";


        $ans_G543 = [
            "Bear", "Buffalo", "Cheetah", "Crocodile", "Eagle", "Hippo", "Kaola", "Lion", "Monkey", "Orangutan", "Panda", "Parrot", "Seal", "Snake", "tiger", "Zebra"
        ];

        foreach ($ans_G543 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 543, 'a_content' => $key, 'a_image' => $l12_G543_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L12_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 12 Game 544 ( Language learning and Practice  )
        ////////////////////////////////////////////////////////

        $G3_L12_learning_practice = "Grade_3/" . "Lesson_12/" . "learning_practice/";
        $l12_G544_image = $domain . "/storage/images/Grade_3/lesson_12/learning_practice/";
        $l12_G544_audio = $domain . "/storage/audios/Grade_3/Lesson_12/learning_practice/";


        $q_G544 = [

            ["monkeys", "Do", "bananas", "like", "?"],
            ["the zebra", "Does", "fruit", "eat", "?"],
            ["hippos", "a sleep", "Do", "like", "after lunch", "?"],
            ["the seal", "swimming", "Does", "?", "like"],
            ["cats", "a lot", "sleeping", "Do", "like", "?"],
            ["bamboo", "the panda", "like", "Does", "?"],
            ["lions", "like", "Do", "vegetables", "?"],
            ["apples", "Does", "the parrot", "?", "like"]

        ];

        $a_G544 = [
            "Do monkeys like bananas ?",
            "Does the zebra eat fruit ?",
            "Do hippos like a sleep after lunch ?",
            "Does the seal like swimming ?",
            "Do cats like sleeping a lot ?",
            "Does the panda like bamboo ?",
            "Do lions like vegetables ?",
            "Does the parrot like apples ?"
        ];

        $audio_img_G544 = [
            "monkey", "zebra", "hippo", "seal", "cat", "panda", "lion", "parrot"
        ];

        $G544_Index = 0;

        for ($i = 0; $i < count($q_G544); $i++) {
            foreach ($q_G544[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 544, 'q_content' => $j, 'q_audio' => $AudioDomain . $G3_L12_learning_practice . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 544,
                    'q_image' => $l12_G544_image . str_replace(' ', '', strtolower($audio_img_G544[$G544_Index])) . ".png",
                    'a_audio' => $l12_G544_audio . strtolower($audio_img_G544[$G544_Index]) . ".mp3",
                    'a_content' => $a_G544[$G544_Index],
                ],
            ]);
            $G544_Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 12 Game 545 ( Listening )
        ////////////////////////////////////////////////////////

        $l12_G545_image = $domain . "/storage/images/Grade_3/lesson_12/listening/";
        $G3_L12_listening = "Grade_3/" . "Lesson_12/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 545,  'q_audio' =>  $AudioDomain . $G3_L12_listening . "james" . ".mp3", "q_conver" => "James", "q_content" => "Panda", "a_content" => 1],
            ['round' => 1, 'game_id' => 545,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Elephant", "a_content" => 0],
            ['round' => 1, 'game_id' => 545,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Monkey", "a_content" => 0],

            ['round' => 2, 'game_id' => 545,  'q_audio' =>  $AudioDomain . $G3_L12_listening . "jerry" . ".mp3", "q_conver" => "Jerry", "q_content" => "Lions", "a_content" => 0],
            ['round' => 2, 'game_id' => 545,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Elephants", "a_content" => 0],
            ['round' => 2, 'game_id' => 545,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Tigers", "a_content" => 1],

            ['round' => 3, 'game_id' => 545,  'q_audio' =>  $AudioDomain . $G3_L12_listening . "peter" . ".mp3", "q_conver" => "Peter", "q_content" => "Goats", "a_content" => 0],
            ['round' => 3, 'game_id' => 545,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Elephants", "a_content" => 1],
            ['round' => 3, 'game_id' => 545,  'q_audio' =>  null, "q_conver" => null, "q_content" => "Sheeps", "a_content" => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 12 Game 546 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L12_practice_speaking = "Grade_3/" . "Lesson_12/" . "practice_speaking/";
        $l12_G546image = $domain . "/storage/images/Grade_3/lesson_12/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 546, "q_audio" => $AudioDomain . $G3_L12_practice_speaking . "Do-you-like-polar-bears" . ".mp3", 'q_image' => $l12_G546image . "polar-bear.png", "q_content" => "Do you love polar bears? ", "round_instruction" => $AudioDomain . $G3_L12_practice_speaking . "polar-bear" . ".mp3", "a_content" => "Do you love polar bears? \nYes, I do. I like polar bears. \nThey are very beautiful."],
        ]);
        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 546, 'q_image' => $l12_G546image . "crocodile.png", "q_content" => "Do you love crocodiles?", "round_instruction" => $AudioDomain . $G3_L12_practice_speaking . "crocodiles" . ".mp3"],
            ['round' => 3, 'game_id' => 546, 'q_image' => $l12_G546image . "parrot.png", "q_content" => "Do you love parrots?", "round_instruction" => $AudioDomain . $G3_L12_practice_speaking . "parrots" . ".mp3"],
            ['round' => 4, 'game_id' => 546, 'q_image' => $l12_G546image . "snake.png", "q_content" => "Do you love snakes?", "round_instruction" => $AudioDomain . $G3_L12_practice_speaking . "snakes" . ".mp3"],
            ['round' => 5, 'game_id' => 546, 'q_image' => $l12_G546image . "elephants.png", "q_content" => "Does Peter love elephants?", "round_instruction" => $AudioDomain . $G3_L12_practice_speaking . "elephants" . ".mp3"],
            ['round' => 6, 'game_id' => 546, 'q_image' => $l12_G546image . "panda-bear.png", "q_content" => "Does James love Panda Bears?", "round_instruction" => $AudioDomain . $G3_L12_practice_speaking . "panda-bear" . ".mp3"],
            ['round' => 7, 'game_id' => 546, 'q_image' => $l12_G546image . "monkey.png", "q_content" => "Do they love monkeys?", "round_instruction" => $AudioDomain . $G3_L12_practice_speaking . "monkeys" . ".mp3"],
            ['round' => 8, 'game_id' => 546, 'q_image' => $l12_G546image . "lions.png", "q_content" => "Do you love lions?", "round_instruction" => $AudioDomain . $G3_L12_practice_speaking . "lions" . ".mp3"],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 12 Game 547 ( reading passage )
        ////////////////////////////////////////////////////////

        $G3_L12_reading_passage_path = "Grade_3/" . "Lesson_12/" . "reading_passage/";
        $l12_G547_image = $domain . "/storage/images/Grade_3/lesson_12/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 547, "q_audio" =>  $AudioDomain . $G3_L12_reading_passage_path . "africa.mp3", 'q_content' => "He is from Africa.", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 547, "q_audio" =>  $AudioDomain . $G3_L12_reading_passage_path . "korea.mp3", 'q_content' => "He is from Korea.", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "where-is-hugo-from.mp3", "q_conver" => "Where is Hugo from?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "this-is-hugo-the-hippo-he-is-fifteen.mp3", "q_content" => null, 'q_conver' => "This is Hugo the hippo. He is fifteen years old and he lives at the zoo. He is from Africa. He's got a big house and water to swim in. He gets up early in the morning but he likes a sleep after lunch in the afternoon. He likes fruit and his favorite food is apples But he doesn't like carrots. Does he like the waters? Yes, he does. And he can swim.", 'a_content' => null, "background" => $l12_G547_image . "bg.png"],


            ['round' => 2, 'game_id' => 547, "q_audio" =>  $AudioDomain . $G3_L12_reading_passage_path . "yes-he-does.mp3", 'q_content' => "Yes, he does.", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 547, "q_audio" =>  $AudioDomain . $G3_L12_reading_passage_path . "no-he-doesnt.mp3", 'q_content' => "No, he doesn't.", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "does-he-get-up-early.mp3", "q_conver" =>  "Does he get up early?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "this-is-hugo-the-hippo-he-is-fifteen.mp3", "q_content" => null, 'q_conver' => "This is Hugo the hippo. He is fifteen years old and he lives at the zoo. He is from Africa. He's got a big house and water to swim in. He gets up early in the morning but he likes a sleep after lunch in the afternoon. He likes fruit and his favorite food is apples But he doesn't like carrots. Does he like the waters? Yes, he does. And he can swim.", 'a_content' => null, "background" => $l12_G547_image . "bg.png"],


            ['round' => 3, 'game_id' => 547, "q_audio" =>  $AudioDomain . $G3_L12_reading_passage_path . "yes-he-does.mp3", 'q_content' => "Yes, he does.",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 547, "q_audio" =>  $AudioDomain . $G3_L12_reading_passage_path . "no-he-doesnt.mp3", 'q_content' => "No, he doesn't.",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "does-he-sleep-in.mp3", "q_conver" => "Does he sleep in the morning?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "this-is-hugo-the-hippo-he-is-fifteen.mp3", "q_content" => null, 'q_conver' => "This is Hugo the hippo. He is fifteen years old and he lives at the zoo. He is from Africa. He's got a big house and water to swim in. He gets up early in the morning but he likes a sleep after lunch in the afternoon. He likes fruit and his favorite food is apples But he doesn't like carrots. Does he like the waters? Yes, he does. And he can swim.", 'a_content' => null, "background" => $l12_G547_image . "bg.png"],


            ['round' => 4, 'game_id' => 547, "q_audio" =>  $AudioDomain . $G3_L12_reading_passage_path . "apple.mp3", 'q_content' => "Apples", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 547, "q_audio" =>  $AudioDomain . $G3_L12_reading_passage_path . "carrot.mp3", 'q_content' => "Carrots", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "whais-his-fav-food.mp3", "q_conver" => "What is his favorite food?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "this-is-hugo-the-hippo-he-is-fifteen.mp3", "q_content" => null, 'q_conver' => "This is Hugo the hippo. He is fifteen years old and he lives at the zoo. He is from Africa. He's got a big house and water to swim in. He gets up early in the morning but he likes a sleep after lunch in the afternoon. He likes fruit and his favorite food is apples But he doesn't like carrots. Does he like the waters? Yes, he does. And he can swim.", 'a_content' => null, "background" => $l12_G547_image . "bg.png"],


            ['round' => 5, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "yes-he-does.mp3", 'q_content' => "Yes, he does.", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "no-he-doesnt.mp3", 'q_content' => "No, he doesn't.", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "does-he-like-carrots.mp3", "q_conver" => "Does he like carrots?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 547, "q_audio" => $AudioDomain . $G3_L12_reading_passage_path . "this-is-hugo-the-hippo-he-is-fifteen.mp3", "q_content" => null, 'q_conver' => "This is Hugo the hippo. He is fifteen years old and he lives at the zoo. He is from Africa. He's got a big house and water to swim in. He gets up early in the morning but he likes a sleep after lunch in the afternoon. He likes fruit and his favorite food is apples But he doesn't like carrots. Does he like the waters? Yes, he does. And he can swim.", 'a_content' => null, "background" => $l12_G547_image . "bg.png"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 12 Game 548 ( Writing )
        ////////////////////////////////////////////////////////

        $l12_G548_image = $domain . "/storage/images/Grade_3/lesson_12/writing/";
        $G3_L12_writing = "Grade_3/" . "Lesson_12/" . "writing/";


        $ques_G3_L12_game548 = $l12_G548_image . "pic.png";

        $sampleANS_G3_L12_game548 = "My favorite animal is tiger. He is from India. He likes meat. He doesn't like carrots. He lives in the zoo. He can run very fast. He is yellow.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 548, 'q_content' => $ques_G3_L12_game548,
                'a_content' => $sampleANS_G3_L12_game548
            ],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 12 Game 549 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L12_speaking = "Grade_3/" . "Lesson_12/" . "Speaking/";
        $l2_G549image = $domain . "/storage/images/Grade_3/lesson_12/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 549, "q_image" => $l2_G549image . "green-star_round.png", "q_content" => "What is your favorite animal? \nWhere is he/she from? \nWhat doesn't he like or she like? \nWhere does he/she live? \nWhat color is he/she?", "round_instruction" => $AudioDomain . $G3_L12_speaking . "SubBlock_What-is-your-favorite-animal" . ".mp3", "q_audio" => $AudioDomain . $G3_L12_speaking . "SubBlock_What-is-your-favorite-animal" . ".mp3"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 13 Game 550 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 550, 'a_content' => '943934579', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 550, 'a_content' => 'lesson_13_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 13 Game 551 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l13_G551_image = $domain . "/storage/images/Grade_3/lesson_13/vocab/";
        $G3_L13_vocab = "Grade_3/" . "Lesson_13/" . "vocab/";


        $ans_G551 = [
            "a-desk", "a-DVD-player", "a-fridge", "a-lamp", "a-laptop", "a-magazine", "an-arm-chair", "bed", "cooker", "picture", "shower", "sofa", "table", "toilet", "tv"
        ];

        foreach ($ans_G551 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 551, 'a_content' => $key, 'a_image' => $l13_G551_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L13_vocab . str_replace(' ', '-', $key) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 13 Game 552  (  Practice  )
        ////////////////////////////////////////////////////////

        $G3_L13_learning_practice = "Grade_3/" . "Lesson_13/" . "learning_practice/";
        $l13_G552_image = $domain . "/storage/images/Grade_3/lesson_13/learning_practice/";


        $q_G552 = [

            ["the", "Where's", "book?", "under", "table.", "It's",  "the"],
            ["the", "Where's", "cat?", "sofa.",   "It's", "the", "on"],
            ["Where", "the", "is", "lamp?", "on",  "It's", "the", "table."],
            ["sofa?", "Where's", "the", "next", "to", "It's", "table.", "the"],

        ];

        $a_G552 = [
            "Where's the book? It's under the table.",
            "Where's the cat? It's on the sofa.",
            "where is the lamp? It's on the table.",
            "Where's the sofa? It's next to the table.",
        ];

        $audio_img_G552 = [
            "book", "cat", "lamp", "sofa"
        ];

        $G552_Index = 0;

        for ($i = 0; $i < count($q_G552); $i++) {
            foreach ($q_G552[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 552, 'q_content' => $j],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 552,
                    'q_image' => $l13_G552_image . str_replace(' ', '', strtolower($audio_img_G552[$G552_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L13_learning_practice . strtolower($audio_img_G552[$G552_Index]) . ".mp3",
                    'a_content' => $a_G552[$G552_Index],
                ],
            ]);
            $G552_Index++;
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 13 Game 553 ( Read and Choose )
        //////////////////////////////////////////////////////////////

        $G3_L13_read_n_choose_path = "Grade_3/" . "Lesson_13/" . "read_n_choose/";
        $l13_G553_image = $domain . "/storage/images/Grade_3/lesson_13/read_n_choose/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 553, "q_image" => $l13_G553_image . "lamp.png", "q_content" => "on", 'q_conver' => "Where is the lamp?",  'a_content' => 1],
            ['round' => 1, 'game_id' => 553, "q_image" => null, 'q_content' => "next to", "q_conver" => null, 'a_content' => 0],
            ['round' => 1, 'game_id' => 553, "q_image" => null, 'q_content' => "under", "q_conver" => null, 'a_content' => 0],

            ['round' => 2, 'game_id' => 553, "q_image" => $l13_G553_image . "duck.png", "q_content" => "on", 'q_conver' => "Where is the duck?", 'a_content' => 0],
            ['round' => 2, 'game_id' => 553, "q_image" => null, 'q_content' => "next to", "q_conver" => null, 'a_content' => 0],
            ['round' => 2, 'game_id' => 553, "q_image" => null, 'q_content' => "in", "q_conver" => null, 'a_content' => 1],

            ['round' => 3, 'game_id' => 553, "q_image" => $l13_G553_image . "cat.png", "q_content" => "under", 'q_conver' => "Where is the cat?", 'a_content' => 1],
            ['round' => 3, 'game_id' => 553, "q_image" => null, 'q_content' => "on", "q_conver" => null, 'a_content' => 0],
            ['round' => 3, 'game_id' => 553, "q_image" => null, 'q_content' => "in", "q_conver" => null, 'a_content' => 0],

            ['round' => 4, 'game_id' => 553, "q_image" => $l13_G553_image . "sofa.png", "q_content" => "in front fo", 'q_conver' => "Where is the sofa?", 'a_content' => 0],
            ['round' => 4, 'game_id' => 553, "q_image" => null, 'q_content' => "behind", "q_conver" => null, 'a_content' => 0],
            ['round' => 4, 'game_id' => 553, "q_image" => null, 'q_content' => "next to", "q_conver" => null, 'a_content' => 1],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 13 Game 554 (  listening  )
        ////////////////////////////////////////////////////////

        $l13G554image = $domain . "/storage/images/Grade_3/lesson_13/listening/";
        $G3_L13_listening_path = "Grade_3/" . "Lesson_13/" . "listening/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 554, "q_audio" => $AudioDomain . $G3_L13_listening_path . "tom_anna" . ".mp3", "q_image" => null, "q_content" => "Anna Tom", "a_content" => null],

            ['round' => 1, 'game_id' => 554, "q_audio" => null, "q_image" => "refrigerator", "q_content" => "Anna Tom", "a_content" => "Anna"],
            ['round' => 1, 'game_id' => 554, "q_audio" => null, "q_image" => "bookshelf", "q_content" => "Anna Tom", "a_content" => "Tom"],
            ['round' => 1, 'game_id' => 554, "q_audio" => null, "q_image" => "sofa", "q_content" => "Anna Tom", "a_content" => "Anna"],
            ['round' => 1, 'game_id' => 554, "q_audio" => null, "q_image" => "lamp", "q_content" => "Anna Tom", "a_content" => "Tom"],
            ['round' => 1, 'game_id' => 554, "q_audio" => null, "q_image" => "TV", "q_content" => "Anna Tom", "a_content" => "Tom"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 13 Game 555 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L13_practice_speaking = "Grade_3/" . "Lesson_13/" . "practice_speaking/";
        $l13_G555image = $domain . "/storage/images/Grade_3/lesson_13/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 555, "q_audio" => $AudioDomain . $G3_L13_practice_speaking . "TV" . ".mp3", 'q_image' => $l13_G555image . "TV.png", "q_content" => "Where is the TV in your home?", "round_instruction" => $AudioDomain . $G3_L13_practice_speaking . "TV" . ".mp3"],
            ['round' => 2, 'game_id' => 555, "q_audio" => $AudioDomain . $G3_L13_practice_speaking . "bed" . ".mp3", 'q_image' => $l13_G555image . "bed.png", "q_content" => "Where is the bed in your home?", "round_instruction" => $AudioDomain . $G3_L13_practice_speaking . "bed" . ".mp3"],
            ['round' => 3, 'game_id' => 555, "q_audio" => $AudioDomain . $G3_L13_practice_speaking . "bathtub" . ".mp3", 'q_image' => $l13_G555image . "bathtub.png", "q_content" => "Where is the bathtub in your home?", "round_instruction" => $AudioDomain . $G3_L13_practice_speaking . "bathtub" . ".mp3"],
            ['round' => 4, 'game_id' => 555, "q_audio" => $AudioDomain . $G3_L13_practice_speaking . "sofa" . ".mp3", 'q_image' => $l13_G555image . "sofa.png", "q_content" => "Where is the sofa in your home?", "round_instruction" => $AudioDomain . $G3_L13_practice_speaking . "sofa" . ".mp3"],
            ['round' => 5, 'game_id' => 555, "q_audio" => $AudioDomain . $G3_L13_practice_speaking . "stove" . ".mp3", 'q_image' => $l13_G555image . "stove.png", "q_content" => "Where is the stove in your home?", "round_instruction" => $AudioDomain . $G3_L13_practice_speaking . "stove" . ".mp3"],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 14 Game 556 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 556, 'a_content' => '943942240', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 556, 'a_content' => 'lesson_14_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 14 Game 557 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l14_G557_image = $domain . "/storage/images/Grade_3/lesson_14/vocab/";
        $G3_L14_vocab = "Grade_3/" . "Lesson_14/" . "vocab/";


        $ans_G557 = [

            "spaghetti",
            "an-omelet",
            "yoghurt",
            "cereal",
            "a-pancake",
            "tea",
            "hot-chocolate",
            "hamburger",
            "stew",
            "steak",
            "fried-chicken",
            "fruit-salad",
            "bread",
            "ham",
            "sausage",
            "butter",
            "pizza",
            "seafood",
            "ice-cream"

        ];

        foreach ($ans_G557 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 557, 'a_content' => $key, 'a_image' => $l14_G557_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L14_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 14 Game 558 ( Arrange Writing )
        ////////////////////////////////////////////////////////

        $G3_L14_arrange_letter = "Grade_3/" . "Lesson_14/" . "arrange_writing/";
        $l14_G558_image = $domain . "/storage/images/Grade_3/lesson_14/arrange_writing/";


        $q_G558 = [

            ["I", "E", "R", "C", "E", "A", "M", "C"],
            ["E", "S", "D", "F", "O", "O", "A"],
            ["T", "E", "K", "A", "S"],
            ["M", "U", "R", "G", "E", "A", "B", "H", "R"],
            ["D", "E", "I", "F", "R", "C", "K", "C", "I", "E", "N", "H"],
            ["A", "E", "R", "B", "D"],
            ["T", "E", "S",  "W"],
            ["G", "O", "R", "H", "U", "Y", "T"],

        ];

        $a_G558 = [
            "ICECREAM", "SEAFOOD", "STEAK", "HAMBURGER",  "FRIEDCHICKEN", "BREAD", "STEW", "YOGHURT",
        ];

        $G558_Index = 0;

        for ($i = 0; $i < count($q_G558); $i++) {
            foreach ($q_G558[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 558, 'q_content' => $j, 'q_audio' => $AudioDomain . $G3_L14_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 558,
                    'q_image' => $l14_G558_image . str_replace(' ', '', strtolower($a_G558[$G558_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L14_arrange_letter . strtolower($a_G558[$G558_Index]) . ".mp3",
                    'a_content' => $a_G558[$G558_Index],
                ],
            ]);
            $G558_Index++;
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 14 Game 559 (  Practice  )
        ////////////////////////////////////////////////////////

        $G3_L14_practice = "Grade_3/" . "Lesson_14/" . "practice/";
        $l14_G559_image = $domain . "/storage/images/Grade_3/lesson_14/practice/";


        $q_G559 = [

            ["a", "He", "hot", "chocolate.",  "wants"],
            ["omelet.",  "She", "an", "wants"],
            ["wants",  "cereal.",   "He"],
            ["Do", "spaghetti",  "you", "want", "?"],
            ["you", "Do", "ice", "cream", "want", "?"],
            ["want", "We", "candy", "bar."],

        ];

        $a_G559 = [
            "He wants a hot chocolate.",
            "She wants an omelet.",
            "He wants cereal.",
            "Do you want spaghetti ?",
            "Do you want ice cream ?",
            "We want candy bar.",
        ];

        $audio_img_G559 = [
            "chocolate", "omelet", "cereal", "spaghetti", "icecream", "candy"
        ];

        $G559_Index = 0;

        for ($i = 0; $i < count($q_G559); $i++) {
            foreach ($q_G559[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 559, 'q_content' => $j, 'q_audio' => $AudioDomain . $G3_L14_practice . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 559,
                    'q_image' => $l14_G559_image . str_replace(' ', '', strtolower($audio_img_G559[$G559_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L14_practice . strtolower($audio_img_G559[$G559_Index]) . ".mp3",
                    'a_content' => $a_G559[$G559_Index],
                ],
            ]);
            $G559_Index++;
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 14 Game 560 (  Look and Check  )
        ////////////////////////////////////////////////////////

        $l14G560image = $domain . "/storage/images/Grade_3/lesson_14/look_n_check/";
        $G3_L14_look_n_check_path = "Grade_3/" . "Lesson_14/" . "look_n_check/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 560, 'q_audio' => $AudioDomain . $G3_L14_look_n_check_path . "spaghetti.mp3", "q_conver" => "Do you want spaghetti?", 'q_content' =>  "Yes, Please.", 'a_content' => 1, 'q_image' =>  $l14G560image . "spaghetti.png"],
            ['round' => 1, 'game_id' => 560, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, Thanks.", 'a_content' => 0, 'q_image' => null],

            ['round' => 2, 'game_id' => 560, 'q_audio' => $AudioDomain . $G3_L14_look_n_check_path . "candy.mp3", "q_conver" => "Do you want candy bar?", 'q_content' =>  "Yes, Please.", 'a_content' => 0, 'q_image' =>  $l14G560image . "candy.png"],
            ['round' => 2, 'game_id' => 560, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, Thanks.", 'a_content' => 1, 'q_image' => null],

            ['round' => 3, 'game_id' => 560, 'q_audio' => $AudioDomain . $G3_L14_look_n_check_path . "yogurt.mp3", "q_conver" => "Does he want yogurt?", 'q_content' =>  "Yes, Please.", 'a_content' => 0, 'q_image' =>  $l14G560image . "yogurt.png"],
            ['round' => 3, 'game_id' => 560, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, Thanks.", 'a_content' => 1, 'q_image' => null],

            ['round' => 4, 'game_id' => 560, 'q_audio' => $AudioDomain . $G3_L14_look_n_check_path . "omelet.mp3", "q_conver" => "Do you want an omelet?", 'q_content' =>  "Yes, Please.", 'a_content' => 0, 'q_image' =>  $l14G560image . "omelet.png"],
            ['round' => 4, 'game_id' => 560, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, Thanks.", 'a_content' => 1, 'q_image' => null],

            ['round' => 5, 'game_id' => 560, 'q_audio' => $AudioDomain . $G3_L14_look_n_check_path . "cereal.mp3", "q_conver" => "Does she want cereal?", 'q_content' =>  "Yes, Please.", 'a_content' => 1, 'q_image' =>  $l14G560image . "cereal.png"],
            ['round' => 5, 'game_id' => 560, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, Thanks.", 'a_content' => 0, 'q_image' => null],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 14 Game 561 ( Listening )
        ////////////////////////////////////////////////////////

        $l14_G561_image = $domain . "/storage/images/Grade_3/lesson_14/listening/";
        $G3_L14_listening = "Grade_3/" . "Lesson_14/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 561,  'q_audio' =>  $AudioDomain . $G3_L14_listening . "icecream" . ".mp3", "q_content" => "Pizza", "a_content" => 0],
            ['round' => 1, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Ice Cream", "a_content" => 1],
            ['round' => 1, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Hamburger", "a_content" => 0],

            ['round' => 2, 'game_id' => 561,  'q_audio' =>  $AudioDomain . $G3_L14_listening . "pancake" . ".mp3", "q_content" => "Pancakes", "a_content" => 1],
            ['round' => 2, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Hot Chocolate", "a_content" => 0],
            ['round' => 2, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Cheese", "a_content" => 0],

            ['round' => 3, 'game_id' => 561,  'q_audio' =>  $AudioDomain . $G3_L14_listening . "hamburger" . ".mp3", "q_content" => "Tea", "a_content" => 0],
            ['round' => 3, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Pancake", "a_content" => 0],
            ['round' => 3, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Hamburger", "a_content" => 1],

            ['round' => 4, 'game_id' => 561,  'q_audio' =>  $AudioDomain . $G3_L14_listening . "stew" . ".mp3", "q_content" => "Steak", "a_content" => 0],
            ['round' => 4, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Stew", "a_content" => 1],
            ['round' => 4, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Sausage", "a_content" => 0],

            ['round' => 5, 'game_id' => 561,  'q_audio' =>  $AudioDomain . $G3_L14_listening . "steak" . ".mp3", "q_content" => "Stew", "a_content" => 0],
            ['round' => 5, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Sausage", "a_content" => 0],
            ['round' => 5, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Steak", "a_content" => 1],

            ['round' => 6, 'game_id' => 561,  'q_audio' =>  $AudioDomain . $G3_L14_listening . "chocolate" . ".mp3", "q_content" => "Hot Chocolate", "a_content" => 1],
            ['round' => 6, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Pancake", "a_content" => 0],
            ['round' => 6, 'game_id' => 561,  'q_audio' =>  null, "q_content" => "Tea", "a_content" => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 14 Game 562 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L14_practice_speaking = "Grade_3/" . "Lesson_14/" . "practice_speaking/";
        $l14_G562image = $domain . "/storage/images/Grade_3/lesson_14/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 562, "q_audio"  => $AudioDomain . $G3_L14_practice_speaking . "steak" . ".mp3", 'q_image' => $l14_G562image . "steak.png", "q_content" => "Do you want steak?", "round_instruction" => $AudioDomain . $G3_L14_practice_speaking . "steak" . ".mp3"],
            ['round' => 2, 'game_id' => 562, "q_audio"  => $AudioDomain . $G3_L14_practice_speaking . "fried-chicken" . ".mp3", 'q_image' => $l14_G562image . "fried-chicken.png", "q_content" => "Do you want fried chicken?", "round_instruction" => $AudioDomain . $G3_L14_practice_speaking . "fried-chicken" . ".mp3"],
            ['round' => 3, 'game_id' => 562, "q_audio"  => $AudioDomain . $G3_L14_practice_speaking . "salad" . ".mp3", 'q_image' => $l14_G562image . "salad.png", "q_content" => "Does she want fruit salad?", "round_instruction" => $AudioDomain . $G3_L14_practice_speaking . "salad" . ".mp3"],
            ['round' => 4, 'game_id' => 562, "q_audio"  => $AudioDomain . $G3_L14_practice_speaking . "yoghurt" . ".mp3", 'q_image' => $l14_G562image . "yoghurt.png", "q_content" => "Does she want yoghurt?", "round_instruction" => $AudioDomain . $G3_L14_practice_speaking . "yogurt" . ".mp3"],
            ['round' => 5, 'game_id' => 562, "q_audio"  => $AudioDomain . $G3_L14_practice_speaking . "pancakes" . ".mp3", 'q_image' => $l14_G562image . "pancake.png", "q_content" => "Do they want pancakes?", "round_instruction" => $AudioDomain . $G3_L14_practice_speaking . "pancakes" . ".mp3"],
            ['round' => 6, 'game_id' => 562, "q_audio"  => $AudioDomain . $G3_L14_practice_speaking . "ham" . ".mp3", 'q_image' => $l14_G562image . "ham.png", "q_content" => "Do you want ham?", "round_instruction" => $AudioDomain . $G3_L14_practice_speaking . "ham" . ".mp3"],
            ['round' => 7, 'game_id' => 562, "q_audio"  => $AudioDomain . $G3_L14_practice_speaking . "omelet" . ".mp3", 'q_image' => $l14_G562image . "omelet.png", "q_content" => "Do you want an omelet?", "round_instruction" => $AudioDomain . $G3_L14_practice_speaking . "omelet" . ".mp3"],
            ['round' => 8, 'game_id' => 562, "q_audio"  => $AudioDomain . $G3_L14_practice_speaking . "spaghetti" . ".mp3", 'q_image' => $l14_G562image . "spaghetti.png", "q_content" => "Do you want spaghetti?", "round_instruction" => $AudioDomain . $G3_L14_practice_speaking . "spaghetti" . ".mp3"],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 14 Game 563 ( reading passage )
        ////////////////////////////////////////////////////////

        $G3_L14_reading_passage_path = "Grade_3/" . "Lesson_14/" . "reading_passage/";
        $l14_G563_image = $domain . "/storage/images/Grade_3/lesson_14/reading_passage/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 563, "q_audio" => null, 'q_content' => "Yes", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 563, "q_audio" => null, 'q_content' => "No", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 563, "q_audio" => $AudioDomain . $G3_L14_reading_passage_path . "toby-likes-fruit.mp3", "q_conver" => "Toby likes fruit salad  for breakfast.", 'q_content' => null, 'a_content' => null, "background" => null],
            [
                'round' => 1, 'game_id' => 563, "q_audio" => $AudioDomain . $G3_L14_reading_passage_path . "janes_toby.mp3", "q_content" => "My favorite food",
                'q_conver' => "What is your favorite food? \nMy favorite food is steak. I like fruit salad for breakfast. I like fried chicken and rice for lunch and dinner. But I don't like fish. What about you?  \nI don't like steak. My favorite food is hamburger. I also like spaghetti. They are the best. I don't eat vegetables a lot. I don't like fish either.",
                'a_content' => "Janes: Toby:", "background" => $l14_G563_image . "bg.png"
            ],


            ['round' => 2, 'game_id' => 563, "q_audio" => null, 'q_content' => "Yes", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 563, "q_audio" => null, 'q_content' => "No", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 563, "q_audio" => $AudioDomain . $G3_L14_reading_passage_path . "janes-doesnt-like.mp3", "q_conver" =>  "Janes doesn't like vegetables.", 'q_content' => null, 'a_content' => null, "background" => null],
            [
                'round' => 2, 'game_id' => 563, "q_audio" => $AudioDomain . $G3_L14_reading_passage_path . "janes_toby.mp3", "q_content" => "My favorite food",
                'q_conver' => "What is your favorite food? \nMy favorite food is steak. I like fruit salad for breakfast. I like fried chicken and rice for lunch and dinner. But I don't like fish. What about you?  \nI don't like steak. My favorite food is hamburger. I also like spaghetti. They are the best. I don't eat vegetables a lot. I don't like fish either.",
                'a_content' => "Janes: Toby:", "background" => $l14_G563_image . "bg.png"
            ],


            ['round' => 3, 'game_id' => 563, "q_audio" => null, 'q_content' => "Yes", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 563, "q_audio" => null, 'q_content' => "No", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 563, "q_audio" => $AudioDomain . $G3_L14_reading_passage_path . "toby-doesnt-like-fried.mp3", "q_conver" => "Toby doesn't like fried chicken.", 'q_content' => null, 'a_content' => null, "background" => null],
            [
                'round' => 3, 'game_id' => 563, "q_audio" => $AudioDomain . $G3_L14_reading_passage_path . "janes_toby.mp3", "q_content" => "My favorite food",
                'q_conver' => "What is your favorite food? \nMy favorite food is steak. I like fruit salad for breakfast. I like fried chicken and rice for lunch and dinner. But I don't like fish. What about you?  \nI don't like steak. My favorite food is hamburger. I also like spaghetti. They are the best. I don't eat vegetables a lot. I don't like fish either.",
                'a_content' => "Janes: Toby:", "background" => $l14_G563_image . "bg.png"
            ],

            ['round' => 4, 'game_id' => 563, "q_audio" => null, 'q_content' => "Yes", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 563, "q_audio" => null, 'q_content' => "No", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 563, "q_audio" => $AudioDomain . $G3_L14_reading_passage_path . "janes-doesnt-like-spaghetti.mp3", "q_conver" => "Janes doesn't like spaghetti.", 'q_content' => null, 'a_content' => null, "background" => null],
            [
                'round' => 4, 'game_id' => 563, "q_audio" => $AudioDomain . $G3_L14_reading_passage_path . "janes_toby.mp3", "q_content" => "My favorite food",
                'q_conver' => "What is your favorite food? \nMy favorite food is steak. I like fruit salad for breakfast. I like fried chicken and rice for lunch and dinner. But I don't like fish. What about you?  \nI don't like steak. My favorite food is hamburger. I also like spaghetti. They are the best. I don't eat vegetables a lot. I don't like fish either.",
                'a_content' => "Janes: Toby:", "background" => $l14_G563_image . "bg.png"
            ],

            ['round' => 5, 'game_id' => 563, "q_audio" => null, 'q_content' => "Yes", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 563, "q_audio" => null, 'q_content' => "No", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 563, "q_audio" => $AudioDomain . $G3_L14_reading_passage_path . "toby-and-janes-dont.mp3", "q_conver" => "Toby and Jane don't like fish.", 'q_content' => null, 'a_content' => null, "background" => null],
            [
                'round' => 5, 'game_id' => 563, "q_audio" => $AudioDomain . $G3_L14_reading_passage_path . "janes_toby.mp3", "q_content" => "My favorite food",
                'q_conver' => "What is your favorite food? \nMy favorite food is steak. I like fruit salad for breakfast. I like fried chicken and rice for lunch and dinner. But I don't like fish. What about you?  \nI don't like steak. My favorite food is hamburger. I also like spaghetti. They are the best. I don't eat vegetables a lot. I don't like fish either.",
                'a_content' => "Janes: Toby:", "background" => $l14_G563_image . "bg.png"
            ],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 14 Game 564 ( Writing )
        ////////////////////////////////////////////////////////

        $l14_G564_image = $domain . "/storage/images/Grade_3/lesson_14/writing/";
        $G3_L14_writing = "Grade_3/" . "Lesson_14/" . "writing/";


           $ques_G3_L12_game564 = $l14_G564_image . "pic.png";


        $sampleANS_G3_L14_game564 = "My favorite food is beef steak. I like steak a lot.I don't like fried chicken. I like omelet for breakfast. I like  rice and curry for lunch and dinner. I also like spaghetti for lunch and dinner";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 564, 'q_content' => $l14_G564_image,
                'a_content' => $sampleANS_G3_L14_game564
            ],
        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 15 Game 565 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 565, 'a_content' => '943943151', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 565, 'a_content' => 'lesson_15_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 15 Game 566 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l15_G566_image = $domain . "/storage/images/Grade_3/lesson_15/vocab/";
        $G3_L15_vocab = "Grade_3/" . "Lesson_15/" . "vocab/";


        $ans_G566 = [
            "alarm-clock", "apartment", "bedspread", "bike", "blanket", "ceiling", "closet", "cottage", "door", "drapes", "fan", "floor", "mattress", "pillow", "stairs", "tree", "window"
        ];

        foreach ($ans_G566 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 566, 'a_content' => $key, 'a_image' => $l15_G566_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L15_vocab . str_replace(' ', '-', $key) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 15 Game 567 (  learning and Practice  )
        ////////////////////////////////////////////////////////

        $G3_L15_learning_practice = "Grade_3/" . "Lesson_15/" . "learning_practice/";
        $l15_G567_image = $domain . "/storage/images/Grade_3/lesson_15/learning_practice/";


        $q_G567 = [

            ["is", "There", "alarm", "clock", 'an', "the", "floor.", "on"],
            ["a fan",   "is", "There", "the", "ceiling.", "on"],
            ["bike", "a", "under", "stairs.", "the", "is", "There"],
            ["a", "There", "door", "apartment.", "is", "the", "in"],
            ["windows",  "five", "are", "There",  "in", "house.", "the"],
            ["is", "There", "a", "in", "bedroom.", "the", "mattress"],
            ["a", "closet", "bedroom.", "in", "the", "There", "is"],
            ["flowers", "There", "are", "in", "living", "room.", "the"]

        ];

        $a_G567 = [
            "There is an alarm clock on the floor.",
            "There is a fan on the ceiling.",
            "There is a bike under the stairs.",
            "There is a door in the apartment.",
            "There are five windows in the house.",
            "There is a mattress in the bedroom.",
            "There is a closet in the bedroom.",
            "There are flowers in the living room."
        ];

        $audio_img_G567 = [
            "clock", "fan", "bike", "door", "window", "matress", "closet", "flowers"
        ];

        $G567_Index = 0;

        for ($i = 0; $i < count($q_G567); $i++) {
            foreach ($q_G567[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 567, 'q_content' => $j],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 567,
                    'q_image' => $l15_G567_image . str_replace(' ', '', strtolower($audio_img_G567[$G567_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L15_learning_practice . strtolower($audio_img_G567[$G567_Index]) . ".mp3",
                    'a_content' => $a_G567[$G567_Index],
                ],
            ]);
            $G567_Index++;
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 15 Game 568 ( Listening )
        ////////////////////////////////////////////////////////

        $l15_G568_image = $domain . "/storage/images/Grade_3/lesson_15/listening/";
        $G3_L15_listening = "Grade_3/" . "Lesson_15/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 568,  'q_audio' =>  $AudioDomain . $G3_L15_listening . "Hi-My-name-is-Janes-I-live-i" . ".mp3", "q_content" => "Yes", "q_conver" => "The house is small.", "a_content" => 0],
            ['round' => 1, 'game_id' => 568,  'q_audio' =>  null, "q_content" => "No", "q_conver" => null, "a_content" => 1],

            ['round' => 2, 'game_id' => 568,  'q_audio' =>  $AudioDomain . $G3_L15_listening . "Hi-My-name-is-Janes-I-live-i" . ".mp3", "q_content" => "Yes", "q_conver" => "There are five bedrooms.", "a_content" => 0],
            ['round' => 2, 'game_id' => 568,  'q_audio' =>  null, "q_content" => "No", "q_conver" => null, "a_content" => 1],

            ['round' => 3, 'game_id' => 568,  'q_audio' =>  $AudioDomain . $G3_L15_listening . "Hi-My-name-is-Janes-I-live-i" . ".mp3", "q_content" => "Yes", "q_conver" => "His favorite room is blue.", "a_content" => 0],
            ['round' => 3, 'game_id' => 568,  'q_audio' =>  null, "q_content" => "No", "q_conver" => null, "a_content" => 1],

            ['round' => 4, 'game_id' => 568,  'q_audio' =>  $AudioDomain . $G3_L15_listening . "Hi-My-name-is-Janes-I-live-i" . ".mp3", "q_content" => "Yes", "q_conver" => "There isn't a bookshelf in her bedroom.", "a_content" => 1],
            ['round' => 4, 'game_id' => 568,  'q_audio' =>  null, "q_content" => "No", "q_conver" => null, "a_content" => 0],

            ['round' => 5, 'game_id' => 568,  'q_audio' =>  $AudioDomain . $G3_L15_listening . "Hi-My-name-is-Janes-I-live-i" . ".mp3", "q_content" => "Yes", "q_conver" => "There aren't any books in the room.", "a_content" => 0],
            ['round' => 5, 'game_id' => 568,  'q_audio' =>  null, "q_content" => "No", "q_conver" => null, "a_content" => 1],

        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 15 Game 569 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L15_practice_speaking = "Grade_3/" . "Lesson_15/" . "practice_speaking/";
        $l15_G569image = $domain . "/storage/images/Grade_3/lesson_15/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 569, "q_audio" => $AudioDomain . $G3_L15_practice_speaking . "flowers" . ".mp3", 'q_image' => $l15_G569image . "green-star_round.png", "q_content" => "Are there any flowers in your house?", "round_instruction" => $AudioDomain . $G3_L15_practice_speaking . "flowers" . ".mp3"],
            ['round' => 2, 'game_id' => 569, "q_audio" => $AudioDomain . $G3_L15_practice_speaking . "bike" . ".mp3", 'q_image' => $l15_G569image . "green-star_round.png", "q_content" => "Is there a bike in your house?", "round_instruction" => $AudioDomain . $G3_L15_practice_speaking . "bike" . ".mp3"],
            ['round' => 3, 'game_id' => 569, "q_audio" => $AudioDomain . $G3_L15_practice_speaking . "fans" . ".mp3", 'q_image' => $l15_G569image . "green-star_round.png", "q_content" => "Are there any fans in your house?", "round_instruction" => $AudioDomain . $G3_L15_practice_speaking . "fans" . ".mp3"],
            ['round' => 4, 'game_id' => 569, "q_audio" => $AudioDomain . $G3_L15_practice_speaking . "bookshelf" . ".mp3", 'q_image' => $l15_G569image . "green-star_round.png", "q_content" => "Is there a bookshelf in your bedroom?", "round_instruction" => $AudioDomain . $G3_L15_practice_speaking . "bookshelf" . ".mp3"],
            ['round' => 5, 'game_id' => 569, "q_audio" => $AudioDomain . $G3_L15_practice_speaking . "closet" . ".mp3", 'q_image' => $l15_G569image . "green-star_round.png", "q_content" => "Is there a closet in your bedroom?", "round_instruction" => $AudioDomain . $G3_L15_practice_speaking . "closet" . ".mp3"],
            ['round' => 5, 'game_id' => 569, "q_audio" => $AudioDomain . $G3_L15_practice_speaking . "pillows" . ".mp3", 'q_image' => $l15_G569image . "green-star_round.png", "q_content" => "Are there any pillows in your bedroom?", "round_instruction" => $AudioDomain . $G3_L15_practice_speaking . "pillows" . ".mp3"],
            ['round' => 5, 'game_id' => 569, "q_audio" => $AudioDomain . $G3_L15_practice_speaking . "alarm-clock" . ".mp3", 'q_image' => $l15_G569image . "green-star_round.png", "q_content" => "Is there an alarm clock in your bedroom?", "round_instruction" => $AudioDomain . $G3_L15_practice_speaking . "alarm-clock" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 16 Game 570 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 570, 'a_content' => '943945458', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 570, 'a_content' => 'lesson_16_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 16 Game 571 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l16_G571_image = $domain . "/storage/images/Grade_3/lesson_16/vocab/";
        $G3_L16_vocab = "Grade_3/" . "Lesson_16/" . "vocab/";


        $ans_G571 = [
            "Oval", "Square", "Heart", "Rectangle", "Star", "Diamond", "Triangle", "Cone", "Circle", "Cube", "Hexagon"
        ];

        foreach ($ans_G571 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 571, 'a_content' => $key, 'a_image' => $l16_G571_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L16_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 16 Game 572 (  Choose )
        //////////////////////////////////////////////////////////////

        $G3_L16_choose = "Grade_3/" . "Lesson_16/" . "choose/";
        $l16_G572image = $domain . "/storage/images/Grade_3/lesson_16/choose/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 572, 'q_image' => $l16_G572image . "square.png", "q_content" => "Square", "a_content" => 1],
            ['round' => 1, 'game_id' => 572, 'q_image' => null, "q_content" => "Triangle", "a_content" => 0],

            ['round' => 2, 'game_id' => 572, 'q_image' => $l16_G572image . "triangle.png", "q_content" => "Triangle", "a_content" => 1],
            ['round' => 2, 'game_id' => 572, 'q_image' => null, "q_content" => "Circle", "a_content" => 0],

            ['round' => 3, 'game_id' => 572, 'q_image' => $l16_G572image . "rectangle.png", "q_content" => "Oval", "a_content" => 0],
            ['round' => 3, 'game_id' => 572, 'q_image' => null, "q_content" => "Rectangle", "a_content" => 1],

            ['round' => 4, 'game_id' => 572, 'q_image' => $l16_G572image . "circle.png", "q_content" => "Circle", "a_content" => 1],
            ['round' => 4, 'game_id' => 572, 'q_image' => null, "q_content" => "Cone", "a_content" => 0],

            ['round' => 5, 'game_id' => 572, 'q_image' => $l16_G572image . "diamond.png", "q_content" => "Diamond", "a_content" => 1],
            ['round' => 5, 'game_id' => 572, 'q_image' => null, "q_content" => "Circle", "a_content" => 0],

            ['round' => 6, 'game_id' => 572, 'q_image' => $l16_G572image . "star.png", "q_content" => "Rectangle", "a_content" => 0],
            ['round' => 6, 'game_id' => 572, 'q_image' => null, "q_content" => "Star", "a_content" => 1],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 16 Game 573 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $l16_G573_image = $domain . "/storage/images/Grade_3/lesson_16/listen_n_practice/";
        $G3_L16_listen_n_practice = "Grade_3/" . "Lesson_16/" . "listen_n_practice/";

        $q_content_G3_L16_Game573_img = ["triangle", "heart", "circle", "star", "square", "oval",];

        $a_content_G3_L16_Game573 = [
            "There are three triangles",
            "There are four hearts",
            "There are seven circles",
            "There are two stars",
            "There are eight squares",
            "There are nine ovals",

        ];

        // $q_content_G3_L16_Game573 = [
        //     "How many triangles are there?",
        //     "How many hearts are there?",
        //     "How many circle are there?",
        //     "How many stars are there?",
        //     "How many squares are there?",
        //     "How many ovals are there?",

        // ];

        foreach ($q_content_G3_L16_Game573_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 573, 'round' => $key + 1,
                    // 'q_content' => $q_content_G3_L16_Game573[$key],
                    'q_image' => $l16_G573_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L16_listen_n_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L16_Game573[$key],
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 16 Game 574 ( Listening )
        ////////////////////////////////////////////////////////

        $l16_G574_image = $domain . "/storage/images/Grade_3/lesson_16/listening/";
        $G3_L16_listening = "Grade_3/" . "Lesson_16/" . "listening/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 574,  'q_audio' =>  $AudioDomain . $G3_L16_listening . "ovals" . ".mp3", "q_content" => 3, "a_content" => 0],
            ['round' => 1, 'game_id' => 574,  'q_audio' =>  null, "q_content" => 5, "a_content" => 1],
            ['round' => 1, 'game_id' => 574,  'q_audio' =>  null, "q_content" => 2, "a_content" => 0],

            ['round' => 2, 'game_id' => 574,  'q_audio' =>  $AudioDomain . $G3_L16_listening . "star" . ".mp3", "q_content" => 2, "a_content" => 0],
            ['round' => 2, 'game_id' => 574,  'q_audio' =>  null, "q_content" => 5, "a_content" => 0],
            ['round' => 2, 'game_id' => 574,  'q_audio' =>  null, "q_content" => 1, "a_content" => 1],

            ['round' => 3, 'game_id' => 574,  'q_audio' =>  $AudioDomain . $G3_L16_listening . "circles" . ".mp3", "q_content" => 4, "a_content" => 0],
            ['round' => 3, 'game_id' => 574,  'q_audio' =>  null, "q_content" => 3, "a_content" => 1],
            ['round' => 3, 'game_id' => 574,  'q_audio' =>  null, "q_content" => 1, "a_content" => 0],

            ['round' => 4, 'game_id' => 574,  'q_audio' =>  $AudioDomain . $G3_L16_listening . "squares" . ".mp3", "q_content" => 5, "a_content" => 0],
            ['round' => 4, 'game_id' => 574,  'q_audio' =>  null, "q_content" => 2, "a_content" => 1],
            ['round' => 4, 'game_id' => 574,  'q_audio' =>  null, "q_content" => 3, "a_content" => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 16 Game 575 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L16_practice_speaking = "Grade_3/" . "Lesson_16/" . "practice_speaking/";
        $l16_G575image = $domain . "/storage/images/Grade_3/lesson_16/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 575, "q_audio" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3", 'q_image' => $l16_G575image . "door.png", "q_content" => "What is the object? What is the shape? \nHow many objects are there?", "round_instruction" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3"],
            ['round' => 2, 'game_id' => 575, "q_audio" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3", 'q_image' => $l16_G575image . "pizza.png", "q_content" => "What is the object? What is the shape? \nHow many objects are there?", "round_instruction" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3"],
            ['round' => 3, 'game_id' => 575, "q_audio" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3", 'q_image' => $l16_G575image . "ball.png", "q_content" => "What is the object? What is the shape? \nHow many objects are there?", "round_instruction" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3"],
            ['round' => 4, 'game_id' => 575, "q_audio" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3", 'q_image' => $l16_G575image . "star.png", "q_content" => "What is the object? What is the shape? \nHow many objects are there?", "round_instruction" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3"],
            ['round' => 5, 'game_id' => 575, "q_audio" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3", 'q_image' => $l16_G575image . "picture.png", "q_content" => "What is the object? What is the shape? \nHow many objects are there?", "round_instruction" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3"],
            ['round' => 6, 'game_id' => 575, "q_audio" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3", 'q_image' => $l16_G575image . "clock.png", "q_content" => "What is the object? What is the shape? \nHow many objects are there?", "round_instruction" => $AudioDomain . $G3_L16_practice_speaking . "What-is-the-object" . ".mp3"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 16 Game 576 ( reading passage )
        ////////////////////////////////////////////////////////

        $G3_L6_reading_passage_path = "Grade_3/" . "Lesson_16/" . "reading_passage/";
        $l6_G576_image = $domain . "/storage/images/Grade_3/lesson_16/reading_passage/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 576, "q_audio" => null, 'q_content' =>  "Yes", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 576, "q_audio" => null, 'q_content' =>  "No", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 576, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "there-are-three-people.mp3", "q_conver" => "There are three people in the picture.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 576, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "I-am-janes-this-is-a-pic.mp3", "q_content" => null, 'q_conver' => "I am Janes. This is a picture of me and my friends, Abby and Toby at the playground. I am wearing yellow dress. My hair is blonde. Abby is wearing a blue hat. she is wearing sunglasses,too. Toby has short hair. He is wearing a green T-shirt and blue shorts.", 'a_content' => null, "background" => $l6_G576_image . "bg.png"],


            ['round' => 2, 'game_id' => 576, "q_audio" => null, 'q_content' =>  "Yes", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 576, "q_audio" => null, 'q_content' =>  "No", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 576, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "janes-has-dark.mp3", "q_conver" =>  "Janes has dark hair.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 576, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "I-am-janes-this-is-a-pic.mp3", "q_content" => null, 'q_conver' => "I am Janes. This is a picture of me and my friends, Abby and Toby at the playground. I am wearing yellow dress. My hair is blonde. Abby is wearing a blue hat. she is wearing sunglasses,too. Toby has short hair. He is wearing a green T-shirt and blue shorts.", 'a_content' => null, "background" => $l6_G576_image . "bg.png"],


            ['round' => 3, 'game_id' => 576, "q_audio" => null, 'q_content' =>  "Yes", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 576, "q_audio" => null, 'q_content' =>  "No", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 576, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "abby-is-wearing-sun.mp3", "q_conver" => "Abby is wearing sun glasses.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 576, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "I-am-janes-this-is-a-pic.mp3", "q_content" => null, 'q_conver' => "I am Janes. This is a picture of me and my friends, Abby and Toby at the playground. I am wearing yellow dress. My hair is blonde. Abby is wearing a blue hat. she is wearing sunglasses,too. Toby has short hair. He is wearing a green T-shirt and blue shorts.", 'a_content' => null, "background" => $l6_G576_image . "bg.png"],

            ['round' => 4, 'game_id' => 576, "q_audio" => null, 'q_content' =>  "Yes", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 576, "q_audio" => null, 'q_content' =>  "No", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 576, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "toby-is-wearing-green-shorts.mp3", "q_conver" => "Toby is wearing green shorts.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 576, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "I-am-janes-this-is-a-pic.mp3", "q_content" => null, 'q_conver' => "I am Janes. This is a picture of me and my friends, Abby and Toby at the playground. I am wearing yellow dress. My hair is blonde. Abby is wearing a blue hat. she is wearing sunglasses,too. Toby has short hair. He is wearing a green T-shirt and blue shorts.", 'a_content' => null, "background" => $l6_G576_image . "bg.png"],

            ['round' => 5, 'game_id' => 576, "q_audio" => null, 'q_content' =>  "Yes", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 576, "q_audio" => null, 'q_content' =>  "No", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 576, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "they-are-in-the-park.mp3", "q_conver" => "They are in the park.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 576, "q_audio" => $AudioDomain . $G3_L6_reading_passage_path . "I-am-janes-this-is-a-pic.mp3", "q_content" => null, 'q_conver' => "I am Janes. This is a picture of me and my friends, Abby and Toby at the playground. I am wearing yellow dress. My hair is blonde. Abby is wearing a blue hat. she is wearing sunglasses,too. Toby has short hair. He is wearing a green T-shirt and blue shorts.", 'a_content' => null, "background" => $l6_G576_image . "bg.png"],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 16 Game 577 ( Answer the Question )
        ////////////////////////////////////////////////////////

        $l16_G577_image = $domain . "/storage/images/Grade_3/lesson_16/answer_the_question/";
        $G3_L16_answer_the_question = "Grade_3/" . "Lesson_16/" . "answer_the_question/";

        $q_content_G3_L16_Game577_img = ["shapes"];

        $a_content_G3_L16_Game577 = [
            "...",
        ];

        foreach ($q_content_G3_L16_Game577_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 577, 'round' => $key + 1,
                    'q_image' => $l16_G577_image . $value . ".jpg",
                    'q_audio' => $AudioDomain . $G3_L16_answer_the_question . $value . ".mp3",
                    'a_content' => $a_content_G3_L16_Game577[$key],
                ],
            ]);
        }




        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 17 Game 578 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 578, 'a_content' => '943946618', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 578, 'a_content' => 'lesson_17_video_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 17 Game 579 , 580 (  look and say  )
        ////////////////////////////////////////////////////////

        $l17_G579_G580_image = $domain . "/storage/images/Grade_3/lesson_17/look_n_say/";
        $G3_L17_look_n_say = "Grade_3/" . "Lesson_17/" . "look_n_say/";

        // Game 579
        $G3_L17_Game579_look_n_say = [

            'Yellow', 'Orange', "Green", 'Blue', 'Purple',
            $l17_G579_G580_image . 'green.png', $l17_G579_G580_image . 'purple.png', $l17_G579_G580_image . 'orange.png', $l17_G579_G580_image . 'yellow.png', $l17_G579_G580_image .  'blue.png'

        ];

        $G3_L17_Game579_look_n_say_ans = [

            'Yellow', 'Orange', "Green", 'Blue', 'Purple',
            'green', 'purple', 'orange', 'yellow', 'blue'

        ];


        foreach ($G3_L17_Game579_look_n_say as $key => $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 579, 'round' => 1, 'q_content' => $G3_L17_Game579_look_n_say_ans[$key],
                    'q_image' => $value, 'q_audio' => $AudioDomain . $G3_L17_look_n_say .  strtolower($G3_L17_Game579_look_n_say_ans[$key]) . ".mp3",
                ]
            ]);
        }


        // Game 580
        $ans_G580 = [
            "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen", "Twenty"
        ];

        foreach ($ans_G580 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 580, 'a_content' => $key, 'a_image' => $l17_G579_G580_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L17_look_n_say . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 17 Game 581 ( Write Color )
        ////////////////////////////////////////////////////////

        $l17_G581_image = $domain . "/storage/images/Grade_3/lesson_17/write_color/";
        $G3_L17_write_color = "Grade_3/" . "Lesson_17/" . "write_color/";

        $g3_l17_Game581_fill_q1 = [

            ["Red", "Yellow", "Pink"],
            ["Orange", "Grey", "Red"],
            ["Orange", "Green", "Red"],
            ["Red", "Blue", "Purple"],
            ["Blue", "Pink", "Yellow"],

        ];

        $g3_l17_Game581_fill_q2 = [
            "______ balloon.",
            "______ balloon.",
            "______ balloon.",
            "______ balloon.",
            "______ balloon.",
        ];

        $correct_G3_l17_Ans =   [

            ["Yellow"], ["Orange"], ["Green"], ["Red"], ["Blue"]

        ];

        $g3_l17_Game581_fill_a = [
            "Yellow Balloon.",
            "Orange Balloon.",
            "Green Balloon.",
            "Red Balloon.",
            "Blue Balloon.",
        ];

        $g3_l17_Game581_fill_audio_img = [
            "yellow", "orange", "green", "red", "blue"
        ];

        for ($i = 0; $i < count($g3_l17_Game581_fill_q1); $i++) {

            foreach ($g3_l17_Game581_fill_q1[$i] as $k => $word) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 581,
                        'q_content' => $word,
                        'a_content' => implode(' ', $correct_G3_l17_Ans[$i]),
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 581,
                    "q_image" => $l17_G581_image . $g3_l17_Game581_fill_audio_img[$i] . ".png",
                    // 'q_audio' => $AudioDomain . $G3_L17_write_color . "balloon.mp3",
                    'q_content' => $g3_l17_Game581_fill_q2[$i],
                    'a_content' => $g3_l17_Game581_fill_a[$i]
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 17 Game 582 ( practice )
        ////////////////////////////////////////////////////////

        $l17_G582_image = $domain . "/storage/images/Grade_3/lesson_17/practice/";
        $G3_L17_practice = "Grade_3/" . "Lesson_17/" . "practice/";

        $q_content_G3_L17_Game582_img = ["orange", "green", "red", "blue", "purple"];

        // $a_content_G3_L17_Game582 = [
        //     "There are thirteen orange buttons",
        //     "There are sixteen green stars",
        //     "There are eighteen red triangles",
        //     "There are seventeen blue diamonds",
        //     "There are nineteen purple ovals",
        // ];
        $a_content_G3_L17_Game582 = [
            "thirteen",
            "sixteen",
            "eighteen",
            "seventeen",
            "nineteen",
        ];

        // $q_content_G3_L17_Game582 = [
        //     "How many orange buttons are there?",
        //     "How many green stars are there?",
        //     "How many red triangles are there?",
        //     "How many blue diamonds are there?",
        //     "How many purple oval are there?",
        // ];

        foreach ($q_content_G3_L17_Game582_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 582, 'round' => $key + 1,
                    // 'q_content' => $q_content_G3_L17_Game582[$key],
                    'q_image' => $l17_G582_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L17_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L17_Game582[$key],
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 17 Game 583 ( Listen )
        ////////////////////////////////////////////////////////

        $l17_G583_image = $domain . "/storage/images/Grade_3/lesson_17/listen/";
        $G3_L17_listen = "Grade_3/" . "Lesson_17/" . "listen/";



        DB::table('ans_n_ques')->insert([


            ['round' => 1, 'game_id' => 583,  'q_audio' =>  $AudioDomain . $G3_L17_listen . "sally" . ".mp3", "q_content" => "red", "a_content" => 0],
            ['round' => 1, 'game_id' => 583,  'q_audio' =>  null, "q_content" => "blue", "a_content" => 1],
            ['round' => 1, 'game_id' => 583,  'q_audio' =>  null, "q_content" => "green", "a_content" => 0],

            ['round' => 2, 'game_id' => 583,  'q_audio' =>  $AudioDomain . $G3_L17_listen . "hugo" . ".mp3", "q_content" => "Thirteen", "a_content" => 1],
            ['round' => 2, 'game_id' => 583,  'q_audio' =>  null, "q_content" => "Fourteen", "a_content" => 0],
            ['round' => 2, 'game_id' => 583,  'q_audio' =>  null, "q_content" => "Twelve", "a_content" => 0],

            ['round' => 3, 'game_id' => 583,  'q_audio' =>  $AudioDomain . $G3_L17_listen . "hugo" . ".mp3", "q_content" => "red", "a_content" => 0],
            ['round' => 3, 'game_id' => 583,  'q_audio' =>  null, "q_content" => "green", "a_content" => 1],
            ['round' => 3, 'game_id' => 583,  'q_audio' =>  null, "q_content" => "blue", "a_content" => 0],

            ['round' => 4, 'game_id' => 583,  'q_audio' =>  $AudioDomain . $G3_L17_listen . "sally-num" . ".mp3", "q_content" => "Thirteen", "a_content" => 0],
            ['round' => 4, 'game_id' => 583,  'q_audio' =>  null, "q_content" => "Twelve", "a_content" => 0],
            ['round' => 4, 'game_id' => 583,  'q_audio' =>  null, "q_content" => "Fourteen", "a_content" => 1],


        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 17 Game 584 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L17_practice_speaking = "Grade_3/" . "Lesson_17/" . "practice_speaking/";
        $l17_G584image = $domain . "/storage/images/Grade_3/lesson_17/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, "q_audio" => $AudioDomain . $G3_L17_practice_speaking . "circles" . ".mp3", 'game_id' => 584, 'q_image' => $l17_G584image . "circle.png", "q_content" => "How many circles are there? \nWhat colors are they?", "round_instruction" => $AudioDomain . $G3_L17_practice_speaking . "circles" . ".mp3"],
            ['round' => 2, "q_audio" => $AudioDomain . $G3_L17_practice_speaking . "triangles" . ".mp3", 'game_id' => 584, 'q_image' => $l17_G584image . "triangle.png", "q_content" => "How many triangles are there? \nWhat colors are they?", "round_instruction" => $AudioDomain . $G3_L17_practice_speaking . "triangles" . ".mp3"],
            ['round' => 3, "q_audio" => $AudioDomain . $G3_L17_practice_speaking . "ovals" . ".mp3", 'game_id' => 584, 'q_image' => $l17_G584image . "oval.png", "q_content" => "How many ovals are there? \nWhat colors are they?", "round_instruction" => $AudioDomain . $G3_L17_practice_speaking . "ovals" . ".mp3"],
            ['round' => 4, "q_audio" => $AudioDomain . $G3_L17_practice_speaking . "hearts" . ".mp3", 'game_id' => 584, 'q_image' => $l17_G584image . "heart.png", "q_content" => "How many hearts are there? \nWhat colors are they?", "round_instruction" => $AudioDomain . $G3_L17_practice_speaking . "hearts" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 18 Game 585 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 585, 'a_content' => '943945599', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 585, 'a_content' => 'lesson_18_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 18 Game 586 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l3_G586_image = $domain . "/storage/images/Grade_3/lesson_18/vocab/";
        $G3_L18_vocab = "Grade_3/" . "Lesson_18/" . "vocab/";


        $ans_G586 = [
            "20", "21", "22", "23", "24", "25", "26", "27", "28", "29",
            "30", "31", "32", "33", "34", "35", "36", "37", "38", "39",
            "40", "41", "42", "43", "44", "45", "46", "47", "48", "49",
            "50", "51", "52", "53", "54", "55", "56", "57", "58", "59",
            "60", "61", "62", "63", "64", "65", "66", "67", "68", "69",
            "70", "71", "72", "73", "74", "75", "76", "77", "78", "79",
            "80", "81", "82", "83", "84", "85", "86", "87", "88", "89",
            "90", "91", "92", "93", "94", "95", "96", "97", "98", "99",
            "100"
        ];

        foreach ($ans_G586 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 586, 'a_content' => $key, 'a_image' => $l3_G586_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L18_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }





        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 18 Game 587 ( Choose the Number )
        ////////////////////////////////////////////////////////

        $l18_G587_image = $domain . "/storage/images/Grade_3/lesson_18/choose_number/";
        $G3_L18_choose_number = "Grade_3/" . "Lesson_18/" . "choose_number/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 587, "q_image" => $l18_G587_image . "100.png", "q_conver" => "Choose the correct answer.", 'q_content' => "Twenty-five", 'a_content' => 0],
            ['round' => 1, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Forty-seven", 'a_content' => 0],
            ['round' => 1, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "A hundred", 'a_content' => 1],

            ['round' => 2, 'game_id' => 587, "q_image" => $l18_G587_image . "76.png", "q_conver" => "Choose the correct answer.", 'q_content' => "Sixty-one", 'a_content' => 0],
            ['round' => 2, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Sixty-three", 'a_content' => 0],
            ['round' => 2, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Seventy-six", 'a_content' => 1],

            ['round' => 3, 'game_id' => 587, "q_image" => $l18_G587_image . "43.png", "q_conver" => "Choose the correct answer.", 'q_content' => "Sixty-three", 'a_content' => 0],
            ['round' => 3, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Forty-three", 'a_content' => 1],
            ['round' => 3, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Forty-four", 'a_content' => 0],

            ['round' => 4, 'game_id' => 587, "q_image" => $l18_G587_image . "35.png", "q_conver" => "Choose the correct answer.", 'q_content' => "Thirty-nine", 'a_content' => 0],
            ['round' => 4, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Thirty-five", 'a_content' => 1],
            ['round' => 4, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Fifty-one", 'a_content' => 0],

            ['round' => 5, 'game_id' => 587, "q_image" => $l18_G587_image . "66.png", "q_conver" => "Choose the correct answer.", 'q_content' => "Forty-one", 'a_content' => 0],
            ['round' => 5, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Twenty-two", 'a_content' => 0],
            ['round' => 5, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Sixty-six", 'a_content' => 1],

            ['round' => 6, 'game_id' => 587, "q_image" => $l18_G587_image . "58.png", "q_conver" => "Choose the correct answer.", 'q_content' => "Fifty-eight", 'a_content' => 1],
            ['round' => 6, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Twenty-one", 'a_content' => 0],
            ['round' => 6, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Fifty-three", 'a_content' => 0],

            ['round' => 7, 'game_id' => 587, "q_image" => $l18_G587_image . "fifty-two.png", "q_conver" => "Choose the correct answer.", 'q_content' => 52, 'a_content' => 1],
            ['round' => 7, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 54, 'a_content' => 0],
            ['round' => 7, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 65, 'a_content' => 0],

            ['round' => 8, 'game_id' => 587, "q_image" => $l18_G587_image . "forty-six.png", "q_conver" => "Choose the correct answer.", 'q_content' => 42, 'a_content' => 0],
            ['round' => 8, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 100, 'a_content' => 0],
            ['round' => 8, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 46, 'a_content' => 1],

            ['round' => 9, 'game_id' => 587, "q_image" => $l18_G587_image . "sixty-six.png", "q_conver" => "Choose the correct answer.", 'q_content' => 66, 'a_content' => 1],
            ['round' => 9, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 77, 'a_content' => 0],
            ['round' => 9, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 22, 'a_content' => 0],

            ['round' => 10, 'game_id' => 587, "q_image" => $l18_G587_image . "ninety-eight.png", "q_conver" => "Choose the correct answer.", 'q_content' => 88, 'a_content' => 0],
            ['round' => 10, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 98, 'a_content' => 1],
            ['round' => 10, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 80, 'a_content' => 0],

            ['round' => 11, 'game_id' => 587, "q_image" => $l18_G587_image . "eight-one.png", "q_conver" => "Choose the correct answer.", 'q_content' => 81, 'a_content' => 1],
            ['round' => 11, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 67, 'a_content' => 0],
            ['round' => 11, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 84, 'a_content' => 0],

            ['round' => 12, 'game_id' => 587, "q_image" => $l18_G587_image . "seventy-eight.png", "q_conver" => "Choose the correct answer.", 'q_content' => 57, 'a_content' => 0],
            ['round' => 12, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 72, 'a_content' => 0],
            ['round' => 12, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 78, 'a_content' => 1],

            ['round' => 13, 'game_id' => 587, "q_image" => $l18_G587_image . "ninety-nine.png", "q_conver" => "Choose the correct answer.", 'q_content' => 89, 'a_content' => 0],
            ['round' => 13, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 99, 'a_content' => 1],
            ['round' => 13, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 90, 'a_content' => 0],

            ['round' => 14, 'game_id' => 587, "q_image" => $l18_G587_image . "a-hundred.png", "q_conver" => "Choose the correct answer.", 'q_content' => 100, 'a_content' => 1],
            ['round' => 14, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 87, 'a_content' => 0],
            ['round' => 14, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => 75, 'a_content' => 0],

            ['round' => 15, 'game_id' => 587, "q_image" => $l18_G587_image . "29.png", "q_conver" => "Choose the correct answer.", 'q_content' => "Twenty-nine", 'a_content' => 1],
            ['round' => 15, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Ninety-seven", 'a_content' => 0],
            ['round' => 15, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Eighty-five", 'a_content' => 0],

            ['round' => 16, 'game_id' => 587, "q_image" => $l18_G587_image . "81.png", "q_conver" => "Choose the correct answer.", 'q_content' => "Seventy-one", 'a_content' => 0],
            ['round' => 16, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Eighty-one", 'a_content' => 1],
            ['round' => 16, 'game_id' => 587, "q_image" => null, "q_conver" => null, 'q_content' => "Eighty-six", 'a_content' => 0],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 18 Game 588 ( practice )
        ////////////////////////////////////////////////////////

        $l18_G588_image = $domain . "/storage/images/Grade_3/lesson_18/practice/";
        $G3_L18_practice = "Grade_3/" . "Lesson_18/" . "practice/";

        $q_content_G3_L18_Game588_img = ["81", "37", "25", "43", "79"];

        // $a_content_G3_L18_Game588 = [
        //     "There are eighty-one pages in the textbook",
        //     "There are thirty-seven pages in the textbook",
        //     "There are twenty-five pages in the textbook",
        //     "There are forty-three pages in the textbook",
        //     "There are seventy-nine pages in the textbook",

        // ];
        $a_content_G3_L18_Game588 = [
            81,
            37,
            25,
            43,
            79
        ];

        foreach ($q_content_G3_L18_Game588_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 588, 'round' => $key + 1,
                    'q_image' => $l18_G588_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L18_practice . $value . ".mp3",
                    'a_content' => $a_content_G3_L18_Game588[$key],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 18 Game 589 ( Listen )
        ////////////////////////////////////////////////////////

        $l18_G589_image = $domain . "/storage/images/Grade_3/lesson_18/listen/";
        $G3_L18_listen = "Grade_3/" . "Lesson_18/" . "listen/";



        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 589,  'q_audio' =>  $AudioDomain . $G3_L18_listen . "students" . ".mp3", "q_conver" => "Students", "q_content" => 18, "a_content" => 0],
            ['round' => 1, 'game_id' => 589,  'q_audio' =>  null, "q_conver" => null, "q_content" => 85, "a_content" => 1],
            ['round' => 1, 'game_id' => 589,  'q_audio' =>  null, "q_conver" => null, "q_content" => 15, "a_content" => 0],

            ['round' => 2, 'game_id' => 589,  'q_audio' =>  $AudioDomain . $G3_L18_listen . "teachers" . ".mp3", "q_conver" => "Teachers", "q_content" => 45, "a_content" => 0],
            ['round' => 2, 'game_id' => 589,  'q_audio' =>  null, "q_conver" => null, "q_content" => 16, "a_content" => 0],
            ['round' => 2, 'game_id' => 589,  'q_audio' =>  null, "q_conver" => null, "q_content" => 15, "a_content" => 1],

            ['round' => 3, 'game_id' => 589,  'q_audio' =>  $AudioDomain . $G3_L18_listen . "desks" . ".mp3", "q_conver" => "Desks", "q_content" => 19, "a_content" => 0],
            ['round' => 3, 'game_id' => 589,  'q_audio' =>  null, "q_conver" => null, "q_content" => 50, "a_content" => 1],
            ['round' => 3, 'game_id' => 589,  'q_audio' =>  null, "q_conver" => null, "q_content" => 100, "a_content" => 0],

            ['round' => 4, 'game_id' => 589,  'q_audio' =>  $AudioDomain . $G3_L18_listen . "chairs" . ".mp3", "q_conver" => "Chairs", "q_content" => 100, "a_content" => 1],
            ['round' => 4, 'game_id' => 589,  'q_audio' =>  null, "q_conver" => null, "q_content" => 82, "a_content" => 0],
            ['round' => 4, 'game_id' => 589,  'q_audio' =>  null, "q_conver" => null, "q_content" => 90, "a_content" => 0],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 18 Game 590 (  Speaking )
        //////////////////////////////////////////////////////////////

        $G3_18_practice_speaking = "Grade_3/" . "Lesson_18/" . "practice_speaking/";
        $l18_G590image = $domain . "/storage/images/Grade_3/lesson_18/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 590, "q_audio" => $AudioDomain . $G3_18_practice_speaking . "girls" . ".mp3", 'q_image' => $l18_G590image . "class.png", "q_content" => "How many girls are there in your classroom?", "round_instruction" => $AudioDomain . $G3_18_practice_speaking . "girls" . ".mp3"],
            ['round' => 2, 'game_id' => 590, "q_audio" => $AudioDomain . $G3_18_practice_speaking . "teachers" . ".mp3", 'q_image' => $l18_G590image . "class.png", "q_content" => "How many teachers are there in your school?", "round_instruction" => $AudioDomain . $G3_18_practice_speaking . "teachers" . ".mp3"],
            ['round' => 3, 'game_id' => 590, "q_audio" => $AudioDomain . $G3_18_practice_speaking . "boys" . ".mp3", 'q_image' => $l18_G590image . "school.png", "q_content" => "How many boys are there in your class?", "round_instruction" => $AudioDomain . $G3_18_practice_speaking . "boys" . ".mp3"],
            ['round' => 4, 'game_id' => 590, "q_audio" => $AudioDomain . $G3_18_practice_speaking . "students" . ".mp3", 'q_image' => $l18_G590image . "class.png", "q_content" => "How many students are there in your classroom?", "round_instruction" => $AudioDomain . $G3_18_practice_speaking . "students" . ".mp3"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 18 Game 591 ( reading passage )
        ////////////////////////////////////////////////////////

        $G3_L18_reading_passage_path = "Grade_3/" . "Lesson_18/" . "reading_passage/";
        $l18_G591_image = $domain . "/storage/images/Grade_3/lesson_18/reading_passage/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 591, "q_audio" => null, 'q_content' => "True", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 591, "q_audio" => null, 'q_content' => "False", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 591, "q_audio" => $AudioDomain . $G3_L18_reading_passage_path . "there-are-eighty-students.mp3", "q_conver" => "There are eighty students in the school.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 591, "q_audio" => $AudioDomain . $G3_L18_reading_passage_path . "this-is-our-school-it-is-beautiful.mp3", "q_content" => "Our school", 'q_conver' => "This is our school. It is a beautiful school. In our school, There are eighty students, fifteen teachers and thirteen classrooms. The teachers are very kind. And all the classrooms are very big. In my classroom, there are twenty-five students. There are fifteen girls and ten boys. We have six windows and two big doors in our classroom. There is a playground in front of our school. We play there when we have a break.", 'a_content' => null, "background" => $l18_G591_image . "bg.png"],


            ['round' => 2, 'game_id' => 591, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 591, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 591, "q_audio" => $AudioDomain . $G3_L18_reading_passage_path . "the-classroom-are.mp3", "q_conver" =>  "The classrooms are small.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 591, "q_audio" => $AudioDomain . $G3_L18_reading_passage_path . "this-is-our-school-it-is-beautiful.mp3", "q_content" => "Our school", 'q_conver' => "This is our school. It is a beautiful school. In our school, There are eighty students, fifteen teachers and thirteen classrooms. The teachers are very kind. And all the classrooms are very big. In my classroom, there are twenty-five students. There are fifteen girls and ten boys. We have six windows and two big doors in our classroom. There is a playground in front of our school. We play there when we have a break.", 'a_content' => null, "background" => $l18_G591_image . "bg.png"],


            ['round' => 3, 'game_id' => 591, "q_audio" =>  null, 'q_content' => "True",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 591, "q_audio" => null, 'q_content' => "False",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 591, "q_audio" => $AudioDomain . $G3_L18_reading_passage_path . "there-are-six-windows.mp3", "q_conver" => "There are six windows and one big door.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 591, "q_audio" => $AudioDomain . $G3_L18_reading_passage_path . "this-is-our-school-it-is-beautiful.mp3", "q_content" => "Our school", 'q_conver' => "This is our school. It is a beautiful school. In our school, There are eighty students, fifteen teachers and thirteen classrooms. The teachers are very kind. And all the classrooms are very big. In my classroom, there are twenty-five students. There are fifteen girls and ten boys. We have six windows and two big doors in our classroom. There is a playground in front of our school. We play there when we have a break.", 'a_content' => null, "background" => $l18_G591_image . "bg.png"],


            ['round' => 4, 'game_id' => 591, "q_audio" =>  null, 'q_content' => "True",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 591, "q_audio" => null, 'q_content' => "False",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 591, "q_audio" => $AudioDomain . $G3_L18_reading_passage_path . "they-play-behind.mp3", "q_conver" => "They play behind the school.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 591, "q_audio" => $AudioDomain . $G3_L18_reading_passage_path . "this-is-our-school-it-is-beautiful.mp3", "q_content" => "Our school", 'q_conver' => "This is our school. It is a beautiful school. In our school, There are eighty students, fifteen teachers and thirteen classrooms. The teachers are very kind. And all the classrooms are very big. In my classroom, there are twenty-five students. There are fifteen girls and ten boys. We have six windows and two big doors in our classroom. There is a playground in front of our school. We play there when we have a break.", 'a_content' => null, "background" => $l18_G591_image . "bg.png"],


            ['round' => 5, 'game_id' => 591, "q_audio" =>  null, 'q_content' => "True",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 591, "q_audio" => null, 'q_content' => "False",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 591, "q_audio" => $AudioDomain . $G3_L18_reading_passage_path . "there-are-twenty-five-students.mp3", "q_conver" => "There are twenty-five students in the classroom.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 591, "q_audio" => $AudioDomain . $G3_L18_reading_passage_path . "this-is-our-school-it-is-beautiful.mp3", "q_content" => "Our school", 'q_conver' => "This is our school. It is a beautiful school. In our school, There are eighty students, fifteen teachers and thirteen classrooms. The teachers are very kind. And all the classrooms are very big. In my classroom, there are twenty-five students. There are fifteen girls and ten boys. We have six windows and two big doors in our classroom. There is a playground in front of our school. We play there when we have a break.", 'a_content' => null, "background" => $l18_G591_image . "bg.png"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 18 Game 592 ( Writing )
        ////////////////////////////////////////////////////////

        $l18_G592_image = $domain . "/storage/images/Grade_3/lesson_18/writing/";
        $G3_L18_writing = "Grade_3/" . "Lesson_18/" . "writing/";


        // $ques_G3_L18_game592 = "1.How many students are there in your school? \n2. How many teachers are there? \n3. How many students are there in your classroom? \n4.How many boys are there? \n5.How many girls are there?";

        $sampleANS_G3_L18_game592 = "My favorite food is beef steak.\n I like steak a lot.I don't like fried chicken. \nI like omelet for breakfast. I like  rice and curry for \nlunch and dinner. I also like spaghetti for lunch and dinner";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 592,
                "q_content" => $l18_G592_image . "classroom.png",
                // 'q_content' => $ques_G3_L18_game592,
                'a_content' => $sampleANS_G3_L18_game592
            ],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 19 Game 593 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 593, 'a_content' => '943945901', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 593, 'a_content' => 'lesson_19_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 19 Game 594 , 595 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l19_G594_G595_image = $domain . "/storage/images/Grade_3/lesson_19/listen_n_repeat/";
        $G3_L19_vocab = "Grade_3/" . "Lesson_19/" . "listen_n_repeat/";

        // Game 594
        $ans_G594 = [
            "be-quiet", "close-the-door", "close-your-book", "come-here", "dont-go-there", "dont-make-a-noise", "draw-a-picture", "listen-up", "open-your-book", "pass-your-ruler",
            "put-away-your-books", "put-your-pens", "sit-down", "stand-up"
        ];

        foreach ($ans_G594 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 594, 'a_content' => $key, 'a_image' => $l19_G594_G595_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L19_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }

        // Game 595
        $g3_l19_Game595_rearrange_the_letter_q1 = [
            ['A', 'T', 'D', 'S', 'N'],
            ['O', 'N', 'P', 'E'],
            ['E', 'C', 'M', 'O'],
            ['L', 'C', 'O', 'E', 'S'],
            ['O', 'D', 'N', 'W'],
            ['O', 'K', 'O', 'B'],
        ];

        $g3_l19_Game595_rearrange_the_letter_q2 = [
            '___ up', "Don't ___ your bag", '___ here', '___ the door', 'Sit ___', 'Open your ___'
        ];

        $correctAns_G595 =   [

            ['S', 'T', 'A', 'N', 'D'],
            ['O', 'P', 'E', 'N'],
            ['C', 'O', 'M', 'E'],
            ['C', 'L', 'O', 'S', 'E'],
            ['D', 'O', 'W', 'N'],
            ['B', 'O', 'O', 'K'],

        ];

        $g3_l19_Game595_rearrange_the_letter_a = [
            'Stand up', "Don't open your bag", 'Come here', 'Close the door', 'Sit down', 'Open your book'
        ];

        $g3_l19_Game595_rearrange_the_letter_img = [
            'stand', "bag", 'come', 'door', 'sit', 'book'
        ];




        for ($i = 0; $i < count($g3_l19_Game595_rearrange_the_letter_q1); $i++) {

            foreach ($g3_l19_Game595_rearrange_the_letter_q1[$i] as $k => $word) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 595,
                        'q_audio' => $AudioDomain . $G3_L19_vocab . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correctAns_G595[$i]),
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 595,
                    'q_audio' => $AudioDomain . $G3_L19_vocab . str_replace(' ', '-',  strtolower($g3_l19_Game595_rearrange_the_letter_a[$i])) . ".mp3",
                    'q_image' => $l19_G594_G595_image . str_replace(' ', '-',  strtolower($g3_l19_Game595_rearrange_the_letter_img[$i])) . ".png",
                    'q_content' => $g3_l19_Game595_rearrange_the_letter_q2[$i],
                    'a_content' => $g3_l19_Game595_rearrange_the_letter_a[$i]
                ],
            ]);
        }







        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 19 Game 596 ( Practice )
        ////////////////////////////////////////////////////////

        $l19_G596_image = $domain . "/storage/images/Grade_3/lesson_19/practice/";
        $G3_L19_practice = "Grade_3/" . "Lesson_19/" . "practice/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 596, "q_image" => $l19_G596_image . "door.png", "q_conver" => "Look at the picture and choose.", 'q_content' => "Pass me your ruler.", 'a_content' => 0],
            ['round' => 1, 'game_id' => 596, "q_image" => null, "q_conver" => null, 'q_content' => "Close the door.", 'a_content' => 1],

            ['round' => 2, 'game_id' => 596, "q_image" => $l19_G596_image . "sitting.png", "q_conver" => "Look at the picture and choose.", 'q_content' => "Sit down.", 'a_content' => 1],
            ['round' => 2, 'game_id' => 596, "q_image" => null, "q_conver" => null, 'q_content' => "Come here.", 'a_content' => 0],

            ['round' => 3, 'game_id' => 596, "q_image" => $l19_G596_image . "book.png", "q_conver" => "Look at the picture and choose.", 'q_content' => "Don't stand there.", 'a_content' => 0],
            ['round' => 3, 'game_id' => 596, "q_image" => null, "q_conver" => null, 'q_content' => "Open your book.", 'a_content' => 1],

            ['round' => 4, 'game_id' => 596, "q_image" => $l19_G596_image . "picture.png", "q_conver" => "Look at the picture and choose.", 'q_content' => "Stand up.", 'a_content' => 0],
            ['round' => 4, 'game_id' => 596, "q_image" => null, "q_conver" => null, 'q_content' => "Draw a picture.", 'a_content' => 1],

            ['round' => 5, 'game_id' => 596, "q_image" => $l19_G596_image . "listen.png", "q_conver" => "Look at the picture and choose.", 'q_content' => "Listen up!", 'a_content' => 1],
            ['round' => 5, 'game_id' => 596, "q_image" => null, "q_conver" => null, 'q_content' => "Sit down.", 'a_content' => 0],

            ['round' => 6, 'game_id' => 596, "q_image" => $l19_G596_image . "dont-go.png", "q_conver" => "Look at the picture and choose.", 'q_content' => "Open your door.", 'a_content' => 0],
            ['round' => 6, 'game_id' => 596, "q_image" => null, "q_conver" => null, 'q_content' => "Don't go there.", 'a_content' => 1],

            ['round' => 7, 'game_id' => 596, "q_image" => $l19_G596_image . "quiet.png", "q_conver" => "Look at the picture and choose.", 'q_content' => "Be quiet.", 'a_content' => 1],
            ['round' => 7, 'game_id' => 596, "q_image" => null, "q_conver" => null, 'q_content' => "Sit down.", 'a_content' => 0],

            ['round' => 8, 'game_id' => 596, "q_image" => $l19_G596_image . "stand.png", "q_conver" => "Look at the picture and choose.", 'q_content' => "Open your book.", 'a_content' => 0],
            ['round' => 8, 'game_id' => 596, "q_image" => null, "q_conver" => null, 'q_content' => "Stand up.", 'a_content' => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 19 Game 597 ( Listen )
        ////////////////////////////////////////////////////////

        $l19_G597_image = $domain . "/storage/images/Grade_3/lesson_19/listen/";
        $G3_L19_listen = "Grade_3/" . "Lesson_19/" . "listen/";



        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 597,  'q_audio' =>  $AudioDomain . $G3_L19_listen . "sit-down-open" . ".mp3", "q_content" => "Down", "q_conver" => "____ down please.", "a_content" => 0],
            ['round' => 1, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Sit", "q_conver" => null, "a_content" => 1],
            ['round' => 1, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Open", "q_conver" => null, "a_content" => 0],

            ['round' => 2, 'game_id' => 597,  'q_audio' =>  $AudioDomain . $G3_L19_listen . "sit-down-open" . ".mp3", "q_content" => "Don't", "q_conver" => "____ your book.", "a_content" => 0],
            ['round' => 2, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Open", "q_conver" => null, "a_content" => 1],
            ['round' => 2, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Sit", "q_conver" => null, "a_content" => 0],

            ['round' => 3, 'game_id' => 597,  'q_audio' =>  $AudioDomain . $G3_L19_listen . "pass-me" . ".mp3", "q_content" => "Pass", "q_conver" => "____ me a pencil please.", "a_content" => 1],
            ['round' => 3, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Don't", "q_conver" => null, "a_content" => 0],
            ['round' => 3, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Up", "q_conver" => null, "a_content" => 0],

            ['round' => 4, 'game_id' => 597,  'q_audio' =>  $AudioDomain . $G3_L19_listen . "stand-up" . ".mp3", "q_content" => "Don't", "q_conver" => "Stand ____.", "a_content" => 0],
            ['round' => 4, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Down", "q_conver" => null, "a_content" => 0],
            ['round' => 4, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Up", "q_conver" => null, "a_content" => 1],

            ['round' => 5, 'game_id' => 597,  'q_audio' =>  $AudioDomain . $G3_L19_listen . "dont-sit" . ".mp3", "q_content" => "Down", "q_conver" => "____ sit down there.", "a_content" => 0],
            ['round' => 5, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Up", "q_conver" => null, "a_content" => 0],
            ['round' => 5, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Don't", "q_conver" => null, "a_content" => 1],

            ['round' => 6, 'game_id' => 597,  'q_audio' =>  $AudioDomain . $G3_L19_listen . "down" . ".mp3", "q_content" => "Down", "q_conver" => "Sit ____ here.", "a_content" => 1],
            ['round' => 6, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Sit", "q_conver" => null, "a_content" => 0],
            ['round' => 6, 'game_id' => 597,  'q_audio' =>  null, "q_content" => "Up", "q_conver" => null, "a_content" => 0],

        ]);

        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 19 Game 598 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L19_practice_speaking = "Grade_3/" . "Lesson_19/" . "practice_speaking/";
        $l19_G598image = $domain . "/storage/images/Grade_3/lesson_19/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 598, "q_audio" => $AudioDomain . $G3_L19_practice_speaking . "sit" . ".mp3", 'q_image' => $l19_G598image . "sit.png", "q_content" => "Look at the picture and speak.", "round_instruction" => $AudioDomain . $G3_L19_practice_speaking . "Look-at-the-pictures-and-speak" . ".mp3"],
            ['round' => 2, 'game_id' => 598, "q_audio" => $AudioDomain . $G3_L19_practice_speaking . "close-door" . ".mp3", 'q_image' => $l19_G598image . "close-door.png", "q_content" => "Look at the picture and speak.", "round_instruction" => $AudioDomain . $G3_L19_practice_speaking . "Look-at-the-pictures-and-speak" . ".mp3"],
            ['round' => 3, 'game_id' => 598, "q_audio" => $AudioDomain . $G3_L19_practice_speaking . "put-away" . ".mp3", 'q_image' => $l19_G598image . "take-away.png", "q_content" => "Look at the picture and speak.", "round_instruction" => $AudioDomain . $G3_L19_practice_speaking . "Look-at-the-pictures-and-speak" . ".mp3"],
            ['round' => 4, 'game_id' => 598, "q_audio" => $AudioDomain . $G3_L19_practice_speaking . "open-book" . ".mp3", 'q_image' => $l19_G598image . "open-book.png", "q_content" => "Look at the picture and speak.", "round_instruction" => $AudioDomain . $G3_L19_practice_speaking . "Look-at-the-pictures-and-speak" . ".mp3"],
            ['round' => 5, 'game_id' => 598, "q_audio" => $AudioDomain . $G3_L19_practice_speaking . "draw-pic" . ".mp3", 'q_image' => $l19_G598image . "draw-pic.png", "q_content" => "Look at the picture and speak.", "round_instruction" => $AudioDomain . $G3_L19_practice_speaking . "Look-at-the-pictures-and-speak" . ".mp3"],
            ['round' => 6, 'game_id' => 598, "q_audio" => $AudioDomain . $G3_L19_practice_speaking . "listen" . ".mp3", 'q_image' => $l19_G598image . "listen.png", "q_content" => "Look at the picture and speak.", "round_instruction" => $AudioDomain . $G3_L19_practice_speaking . "Look-at-the-pictures-and-speak" . ".mp3"],
            ['round' => 7, 'game_id' => 598, "q_audio" => $AudioDomain . $G3_L19_practice_speaking . "noise" . ".mp3", 'q_image' => $l19_G598image . "noise.png", "q_content" => "Look at the picture and speak.", "round_instruction" => $AudioDomain . $G3_L19_practice_speaking . "Look-at-the-pictures-and-speak" . ".mp3"],
            ['round' => 8, 'game_id' => 598, "q_audio" => $AudioDomain . $G3_L19_practice_speaking . "close-book" . ".mp3", 'q_image' => $l19_G598image . "close-book.png", "q_content" => "Look at the picture and speak.", "round_instruction" => $AudioDomain . $G3_L19_practice_speaking . "Look-at-the-pictures-and-speak" . ".mp3"],
            ['round' => 9, 'game_id' => 598, "q_audio" => $AudioDomain . $G3_L19_practice_speaking . "dont-go" . ".mp3", 'q_image' => $l19_G598image . "dont-go.png", "q_content" => "Look at the picture and speak.", "round_instruction" => $AudioDomain . $G3_L19_practice_speaking . "Look-at-the-pictures-and-speak" . ".mp3"],
            ['round' => 10, 'game_id' => 598, "q_audio" => $AudioDomain . $G3_L19_practice_speaking . "stand" . ".mp3", 'q_image' => $l19_G598image . "stand.png", "q_content" => "Look at the picture and speak.", "round_instruction" => $AudioDomain . $G3_L19_practice_speaking . "Look-at-the-pictures-and-speak" . ".mp3"],
        ]);





        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 20 Game 599 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 599, 'a_content' => '943946159', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 599, 'a_content' => 'lesson_20_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 20 Game 600 (  Vocabulary  )
        ////////////////////////////////////////////////////////

        $l20_G600_image = $domain . "/storage/images/Grade_3/lesson_20/vocab/";
        $G3_L20_vocab = "Grade_3/" . "Lesson_20/" . "vocab/";


        $ans_G600 = [
            "Bakery", "Barbershop", "Bookstore", "Bus-station", "Cafeteria", "Clinic", "Department-store", "Drugstore", "Hairsaloon", "Hospital", "Hotel", "Laundromat", "Restaurant", "School", "Train-station"
        ];

        foreach ($ans_G600 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 600, 'a_content' => $key, 'a_image' => $l20_G600_image . str_replace(' ', '-',  $key) . ".png",
                    'a_audio' => $AudioDomain . $G3_L20_vocab . str_replace(' ', '-', strtolower($key)) . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 20 Game 601 ( practice )
        ////////////////////////////////////////////////////////

        $l20_G601_image = $domain . "/storage/images/Grade_3/lesson_20/practice/";
        $G3_L20_practice = "Grade_3/" . "Lesson_20/" . "practice/";

        $q_content_G3_L20_Game601_img = ["cinema", "park", "library", "bakery", "train", "department", "zoo"];

        $a_content_G3_L20_Game601 = [
            "Yes, it has.",
            "Yes, it has.",
            "No, it hasn't.",
            "No, it hasn't.",
            "Yes, it has.",
            "No, it hasn't.",
            "No, it hasn't.",

        ];
        $a_content_G3_L20_Game601_audio = [
            "Yes_it_has",
            "Yes_it_has",
            "No_it_hasnt",
            "No_it_hasnt",
            "Yes_it_has",
            "No_it_hasnt",
            "No_it_hasnt",

        ];

        foreach ($q_content_G3_L20_Game601_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 601, 'round' => $key + 1,
                    'q_image' => $l20_G601_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_L20_practice . $a_content_G3_L20_Game601_audio[$key] . ".mp3",
                    'a_content' => $a_content_G3_L20_Game601[$key],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 20 Game 602 ( Arrange Letter )
        ////////////////////////////////////////////////////////

        $G3_L20_arrange_letter = "Grade_3/" . "Lesson_20/" . "arrange_letter/";
        $l20_G602_image = $domain . "/storage/images/Grade_3/lesson_20/arrange_letter/";


        $q_G602 = [

            ["r", "u", "d", "g", "t", "s", "r", "e", "o"],
            ["f", "a", "c", "e", "r", "i", "a", "t", "e"],
            ["b", "o", "k", "o", "t", "s", "r", "e", "o"],
            ["a", "r", "b",  "e",  "o", "p", "b", "s", "h","r"],
            ["b", "e", "k", "a", "y", "r"],
            ["t", "d", "l", "u", "n", "a", "r", "o", "a", "m"],
            ["o", "o", "s", "c", "h", "l"],
            ["n", "i", "a", "t", "r", "t", "a", "t", "s", "n", "i", "o"],

        ];

        $a_G602 = [
            "drugstore", "cafeteria", "bookstore", "barbershop", "bakery", "laundromat", "school", "trainstation"
        ];

        $G602_Index = 0;

        for ($i = 0; $i < count($q_G602); $i++) {
            foreach ($q_G602[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 602, 'q_content' => $j, 'q_audio' => $AudioDomain . $G3_L20_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 602,
                    'q_image' => $l20_G602_image . str_replace(' ', '', strtolower($a_G602[$G602_Index])) . ".png",
                    'a_audio' => $AudioDomain . $G3_L20_arrange_letter . strtolower($a_G602[$G602_Index]) . ".mp3",
                    'a_content' => $a_G602[$G602_Index],
                ],
            ]);
            $G602_Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 20 Game 603 ( Listen )
        ////////////////////////////////////////////////////////

        $l20_G603_image = $domain . "/storage/images/Grade_3/lesson_20/listen/";
        $G3_L20_listen = "Grade_3/" . "Lesson_20/" . "listen/";



        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 603,  'q_audio' =>  $AudioDomain . $G3_L20_listen . "abby_anna" . ".mp3", "q_content" => "Yes", "q_conver" => "Post office", "a_content" => 1],
            ['round' => 1, 'game_id' => 603,  'q_audio' =>  null, "q_content" => "No", "q_conver" => null, "a_content" => 0],

            ['round' => 2, 'game_id' => 603,  'q_audio' =>  $AudioDomain . $G3_L20_listen . "abby_anna" . ".mp3", "q_content" => "Yes", "q_conver" => "A hospital", "a_content" => 1],
            ['round' => 2, 'game_id' => 603,  'q_audio' =>  null, "q_content" => "No", "q_conver" => null, "a_content" => 0],

            ['round' => 3, 'game_id' => 603,  'q_audio' =>  $AudioDomain . $G3_L20_listen . "abby_anna" . ".mp3", "q_content" => "Yes", "q_conver" => "A zoo", "a_content" => 0],
            ['round' => 3, 'game_id' => 603,  'q_audio' =>  null, "q_content" => "No", "q_conver" => null, "a_content" => 1],

            ['round' => 4, 'game_id' => 603,  'q_audio' =>  $AudioDomain . $G3_L20_listen . "abby_anna" . ".mp3", "q_content" => "Yes", "q_conver" => "A park", "a_content" => 1],
            ['round' => 4, 'game_id' => 603,  'q_audio' =>  null, "q_content" => "No", "q_conver" => null, "a_content" => 0],

            ['round' => 5, 'game_id' => 603,  'q_audio' =>  $AudioDomain . $G3_L20_listen . "abby_anna" . ".mp3", "q_content" => "Yes", "q_conver" => "Restaurants", "a_content" => 1],
            ['round' => 5, 'game_id' => 603,  'q_audio' =>  null, "q_content" => "No", "q_conver" => null, "a_content" => 0],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 20 Game 604 ( reading passage )
        ////////////////////////////////////////////////////////

        $G3_L20_reading_passage_path = "Grade_3/" . "Lesson_20/" . "reading_passage/";
        $l20_G604_image = $domain . "/storage/images/Grade_3/lesson_20/reading_passage/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "restaurant.mp3", 'q_content' => "Restaurant", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "zoo.mp3", 'q_content' => "Zoo", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "cinema.mp3", 'q_content' => "Cinema", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 604, "q_audio" => $AudioDomain . $G3_L20_reading_passage_path . "what-is-your-fav-place.mp3", "q_conver" => "What is your favorite place?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 604, "q_audio" => $AudioDomain . $G3_L20_reading_passage_path . "my-fav-place-in-town-is.mp3", "q_content" => null, 'q_conver' => "My favorite place in town is cinema. We always go to the cinema on Sunday afternoons. My mom and my dad take me every weekend. They show films for children. Sometimes we have popcorn and sweets. But I don't go to the cinema during the week because I go to school from Monday to Friday. After the movie, we go out for dinner. It has got a nice restaurant in the town. Sometimes it is crowded on the weekends.", 'a_content' => null, "background" => $l20_G604_image . "bg.png"],


            ['round' => 2, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "saturday.mp3", 'q_content' => "Saturday", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "sunday.mp3", 'q_content' => "Sunday", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "during-the-week.mp3", 'q_content' => "During the week", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 604, "q_audio" => $AudioDomain . $G3_L20_reading_passage_path . "when-do-you-go.mp3", "q_conver" =>  "When do you go to the cinema?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 604, "q_audio" => $AudioDomain . $G3_L20_reading_passage_path . "my-fav-place-in-town-is.mp3", "q_content" => null, 'q_conver' => "My favorite place in town is cinema. We always go to the cinema on Sunday afternoons. My mom and my dad take me every weekend. They show films for children. Sometimes we have popcorn and sweets. But I don't go to the cinema during the week because I go to school from Monday to Friday. After the movie, we go out for dinner. It has got a nice restaurant in the town. Sometimes it is crowded on the weekends.", 'a_content' => null, "background" => $l20_G604_image . "bg.png"],


            ['round' => 3, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "breakfast.mp3", 'q_content' => "Breakfast",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "lunch.mp3", 'q_content' => "Lunch",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "dinner.mp3", 'q_content' => "Dinner",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 604, "q_audio" => $AudioDomain . $G3_L20_reading_passage_path . "after-the-movie.mp3", "q_conver" => "After the movie, we go out for", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 604, "q_audio" => $AudioDomain . $G3_L20_reading_passage_path . "my-fav-place-in-town-is.mp3", "q_content" => null, 'q_conver' => "My favorite place in town is cinema. We always go to the cinema on Sunday afternoons. My mom and my dad take me every weekend. They show films for children. Sometimes we have popcorn and sweets. But I don't go to the cinema during the week because I go to school from Monday to Friday. After the movie, we go out for dinner. It has got a nice restaurant in the town. Sometimes it is crowded on the weekends.", 'a_content' => null, "background" => $l20_G604_image . "bg.png"],


            ['round' => 4, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "mom.mp3", 'q_content' => "Your mom", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "dad.mp3", 'q_content' => "Your father", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "both.mp3", 'q_content' => "Both your mom and dad", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 604, "q_audio" => $AudioDomain . $G3_L20_reading_passage_path . "who-take-to.mp3", "q_conver" =>  "Who take you to the cinema?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 604, "q_audio" => $AudioDomain . $G3_L20_reading_passage_path . "my-fav-place-in-town-is.mp3", "q_content" => null, 'q_conver' => "My favorite place in town is cinema. We always go to the cinema on Sunday afternoons. My mom and my dad take me every weekend. They show films for children. Sometimes we have popcorn and sweets. But I don't go to the cinema during the week because I go to school from Monday to Friday. After the movie, we go out for dinner. It has got a nice restaurant in the town. Sometimes it is crowded on the weekends.", 'a_content' => null, "background" => $l20_G604_image . "bg.png"],


            ['round' => 5, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "on-saturday.mp3", 'q_content' => "On Saturday", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "on-sunday.mp3", 'q_content' => "On Sundays", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 604, "q_audio" =>  $AudioDomain . $G3_L20_reading_passage_path . "during-the-week.mp3", 'q_content' => "During the week", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 604, "q_audio" => $AudioDomain . $G3_L20_reading_passage_path . "when-do-you-go-to-the-res.mp3", "q_conver" => "When do you go to the restaurant?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 604, "q_audio" => $AudioDomain . $G3_L20_reading_passage_path . "my-fav-place-in-town-is.mp3", "q_content" => null, 'q_conver' => "My favorite place in town is cinema. We always go to the cinema on Sunday afternoons. My mom and my dad take me every weekend. They show films for children. Sometimes we have popcorn and sweets. But I don't go to the cinema during the week because I go to school from Monday to Friday. After the movie, we go out for dinner. It has got a nice restaurant in the town. Sometimes it is crowded on the weekends.", 'a_content' => null, "background" => $l20_G604_image . "bg.png"],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 20 Game 605 (  Speaking Practice )
        //////////////////////////////////////////////////////////////

        $G3_L20_practice_speaking = "Grade_3/" . "Lesson_20/" . "practice_speaking/";
        $l20_G605image = $domain . "/storage/images/Grade_3/lesson_20/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 605, "q_audio" => $AudioDomain . $G3_L20_practice_speaking . "SubBlock_Has-your-town-got-a-library" . ".mp3", 'q_image' => $l20_G605image . "town-like.png", "q_content" => "Has your town got a library?", "round_instruction" => $AudioDomain . $G3_L20_practice_speaking . "library" . ".mp3"],
            ['round' => 2, 'game_id' => 605, "q_audio" => $AudioDomain . $G3_L20_practice_speaking . "SubBlock_Has-your-town-got-a-laundromat" . ".mp3", 'q_image' => $l20_G605image . "town-dislike.png", "q_content" => "Has your town got a laundromat?", "round_instruction" => $AudioDomain . $G3_L20_practice_speaking . "laundromat" . ".mp3"],
            ['round' => 3, 'game_id' => 605, "q_audio" => $AudioDomain . $G3_L20_practice_speaking . "SubBlock_Has-your-town-got-a-hotel" . ".mp3", 'q_image' => $l20_G605image . "town-like.png", "q_content" => "Has your town got a hotel?", "round_instruction" => $AudioDomain . $G3_L20_practice_speaking . "hotel" . ".mp3"],
            ['round' => 4, 'game_id' => 605, "q_audio" => $AudioDomain . $G3_L20_practice_speaking . "SubBlock_Has-your-town-got-a-zoo" . ".mp3", 'q_image' => $l20_G605image . "town-dislike.png", "q_content" => "Has your town got a zoo?", "round_instruction" => $AudioDomain . $G3_L20_practice_speaking . "zoo" . ".mp3"],
            ['round' => 5, 'game_id' => 605, "q_audio" => $AudioDomain . $G3_L20_practice_speaking . "SubBlock_Has-your-town-got-a-clinic" . ".mp3", 'q_image' => $l20_G605image . "town-like.png", "q_content" => "Has your town got a clinic?", "round_instruction" => $AudioDomain . $G3_L20_practice_speaking . "clinic" . ".mp3"],
            ['round' => 6, 'game_id' => 605, "q_audio" => $AudioDomain . $G3_L20_practice_speaking . "SubBlock_Has-your-town-got-a-bookstore" . ".mp3", 'q_image' => $l20_G605image . "town-like.png", "q_content" => "Has your town got a bookstore?", "round_instruction" => $AudioDomain . $G3_L20_practice_speaking . "bookstore" . ".mp3"],
            ['round' => 7, 'game_id' => 605, "q_audio" => $AudioDomain . $G3_L20_practice_speaking . "Has_a_town_got_a_post_office" . ".mp3", 'q_image' => $l20_G605image . "town-dislike.png", "q_content" => "Has your town got a post office?", "round_instruction" => $AudioDomain . $G3_L20_practice_speaking . "post-office" . ".mp3"],
            ['round' => 8, 'game_id' => 605, "q_audio" => $AudioDomain . $G3_L20_practice_speaking . "Has_a_town_got_a_park" . ".mp3", 'q_image' => $l20_G605image . "town-like.png", "q_content" => "Has your town got a park?", "round_instruction" => $AudioDomain . $G3_L20_practice_speaking . "park" . ".mp3"],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Lesson 20 Game 606 ( Writing )
        ////////////////////////////////////////////////////////

        $l20_G606_image = $domain . "/storage/images/Grade_3/lesson_20/writing/";
        $G3_L20_writing = "Grade_3/" . "Lesson_20/" . "writing/";

        $sampleANS_G3_L20_game606 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum ";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 606,
                'a_content' => $sampleANS_G3_L20_game606
            ],
        ]);
    }
}
