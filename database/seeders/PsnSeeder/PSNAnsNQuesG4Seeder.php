<?php

namespace Database\Seeders\PsnSeeder;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PSNAnsNQuesG4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private function removeSpace($val)
    {
        return str_replace(' ', '-', $val);
    }



    public function run(): void
    {
        $domain = app('domain');

        $ImageDomain = $domain . "/storage/images/";
        $AudioDomain = $domain . "/storage/audios/";
        $AtoZAudio = $domain . "/storage/audios/AtoZ/";
        $ImageDomainAZ = $domain . "/storage/images/AtoZ/";
        $ImageDomainAZ_small = $domain . "/storage/images/AtoZ_Small/";
        $prefix = "SubBlock_";

        $backgroundDomain = $domain . "/storage/images/Backgrounds/";

        $AtoZUpdate = $domain . "/storage/audios/A_to_Z_update/";

        $AtiZUpdate = [
            'A-for-apple', 'B-for-ball', 'C-for-Cat', 'D-for-Dog', 'E-for-Elephant', 'F-for-Fish', 'G-for-Grapes', 'H-for-Hat', 'I-for-Ice-cream', 'J-for-Jug',
            'K-for-Kite', 'L-for-Lion', 'M-for-mouse', 'N-for-Noodles', 'O-for-Orange',
            'P-for-Panda', 'Q-for-Quail', 'R-for-ring', 'S-for-Snake', 'T-for-Tree', 'U-for-Umbrella', 'V-for-Violin', 'W-for-Whale', 'X-for-xylophone', 'Y-for-Yacht', 'Z-for-Zebra'
        ];
        // $domainAndAudioPath = $domain."/storage/AtoZ/";
        $prefix = "SubBlock_";
        $AtoZ = range('A', 'Z');


        $loream = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet blandit elit a blandit. Fusce euismod iaculis aliquet. Sed in lectus ipsum. Nam eu ipsum nec nibh sollicitudin commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam metus nunc, efficitur id risus sed, ullamcorper fringilla justo. Nullam a lacus lectus. Sed et purus non ex tristique vestibulum. Ut sed tincidunt ante. Cras augue velit, commodo ac placerat quis, eleifend sed orci.";



        //////////////////////////////////////////// Lesson 6 /////////////////////////////////////////
        // Lesson 6 Listen and Repeat (Reading_Carousel)


        $contents = [
            "he-running", "he-swimming", "she-reading", "she-sleeping", "she-writing", "bird-flying", "dog-barking", "pig-eating", "tiger-running", "they-dancing"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_6/Listen_and_Repeat/";
        $img = $ImageDomain . "Grade_4/Lesson_6/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 806,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }






        // Unit - 3  Practice <look_and_choose>

        $audio = $AudioDomain . "Grade_4/Lesson_6/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_6/Practice/";


        $given_ans = [
            ['is', 'are'],
            ['Running', 'Playing'],
            ['is', 'are'],
            ['Flying', 'Swimming'],
            ['Eating', 'Sleeping'],
            ['Sleeping', 'Swimming'],
            ['Singing', 'Dancing'],
            ['Sleeping', 'Running'],
            ['Barking', 'Singing'],
            ['Eating', 'Sleeping'],
        ];

        $ques_convers = [
            'The fish ___ swimming.',
            'The kids are ___ .',
            'The dogs ___ barking.',
            'The ducks are ___ .',
            'The boy is ___.',
            'The boy is ___.',
            'The girl is ___.',
            'The horse is ___.,',
            'The birds are ___.,',
            'The cow is ___ grass.,',
        ];

        $imgs = [
            'fish', 'kids', 'dog', 'ducks', 'eat-boy', 'sleep-boy', 'girl-sing', 'horses', 'birds', 'cow'
        ];

        $ans = [
            'are', 'Playing', 'are', 'Swimming', 'Eating', 'Sleeping', 'Singing', 'Running', 'Singing', 'Eating'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 807,
                    'round' => $key + 1,
                    'q_image' => $img . $imgs[$key] . ".png",
                    'q_conver' => $ques_convers[$key],
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 807,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);
        }




        // Unit 4 Speaking <speaking_and_recording>

        $contents = [
            "cow", "ducks", "bear", "elephant", "geese",
            "sheep", "rabbit", 'turkeys', 'birds', 'girls'
        ];

        $Question_contents = [
            "How many cows are there? \n There is a ___. \n What is it doing? \n It is ___.",
            "How many ducks are there? \n There are ___. \n What are they doing? \n They are ___ in the pool.",
            "How many bears are there? \n There is ___. \n What is it doing? \n It is ___.",
            "How many elephants are there? \n There is an ___. \n What is it doing?\n It is ___.",
            "How many geese are there?\n There are ___________.\n What are they doing? \n They are walking.",
            "How many sheep are there? \n There is ___.\n What is it doing?\n It is ___.",
            "How many rabbits are there?\n There is ___. \n What is it doing?\n It is ___.",
            "How many turkeys are there?\n There is ___.\n What is it doing?\n \n It is ___.",
            "How many birds are there?\n There are ___.\n What are they doing?\n They are ___.",
            "How many girls are there? \n There are ___.\n What are they doing?\n They are ___."
        ];



        $images = $ImageDomain . "Grade_4/Lesson_6/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_6/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 808,
                    'round' => $key + 1,
                    'round_instruction' => $audios.$this->removeSpace($value)."_round_ins".".mp3",
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $audios.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }


        ////  Unit 5 (Reading) < reading_passage >


        $images = $ImageDomain . "Grade_4/Lesson_6/Listen_and_practice/";
        $audios = $AudioDomain . "Grade_4/Lesson_6/Listen_and_practice/";

        $para = "I am Jack. I love animals. There are 3 dogs and 2 cats in the house. I also have 3 golden fish and 1 white rabbit. They are my friends. My dogs are always barking. My cats are running in the house. The rabbit is eating carrots.";

        $given_q = [
            ["What is the boy’s name?", "Jack"],
            ["What does he love?", "Animals"],
            ["How many cats does Jack have?", "2"],
            ["How many dogs does he have?.", "3"],
            ["How many fish are there in Jack’s house?", "3"],
            ["How many rabbits does he have?", "1"],
            ["What are his dogs doing?", "Barking"],
            ["What are his cats doing?", "Running"],
            ["What is the rabbit doing?", "Eating"],
        ];

        $given_audio = [
            "boy-name.mp3",
            "he-love.mp3",
            "how-cat.mp3",
            "how-dogs.mp3",
            "how-fish.mp3",
            "how-rabbit.mp3",
            "dog-doing.mp3",
            "cats-doing.mp3",
            "rabbit-doing.mp3",
        ];

        $paraName = "jack-and-animal.mp3";

        $given_answer = [
            ['Jack', 'John', 'Joe'],
            ['Dogs', 'Cats', 'Animals'],
            ['3', '2', '1'],
            ['1', '2', '3'],
            ['3', '2', '1'],
            ['1', '2', '3'],
            ['Running', 'Eating', "Barking"],
            ['Eating', 'Barking', "Running"],
            ['Barking', 'Running', "Eating"],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 809,
                        'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 809,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 809,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Jack and animals",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }







        //  Unit 6 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_4/Lesson_6/Reading/";
        $audios = $AudioDomain . "Grade_4/Lesson_6/Reading/";

        $para = "Uncle Joe lives in the countryside. He has a farm. There are many animals on his farm. There are five cows, five goats, three pigs, and ten ducks. The cows are eating grass. The goats are sleeping. The three pigs are eating now. The ducks live in a pond. They can fly and swim. They are now swimming. Uncle also has two dogs and a cat. His dogs are called Charlie and Lucky. His cat’s name is Rosy.";

        $given_q = [
            ["Uncle Joe lives in the city.", "False"],
            ["There are many animals.", "True"],
            ["There are five cows on his farm.", "True"],
            ["There is a cat.", 'True'],
            ["The cat’s name is Lucky.", 'False'],

            ["There are ___ goats.", '5'],
            ["The goats are ___.", 'Sleeping'],
            ["There are ten ___.", 'Ducks'],
            ["They are ___.", 'Swimming'],
            ["The dogs’ names are ___ and Lucky.", 'Charlie'],

        ];

        $given_audio = [
            "joe-live.mp3",
            "many-animals.mp3",
            "five-cows.mp3",
            "cats.mp3",
            "cat-name.mp3",

            "5-goats.mp3",
            "goat-sleep.mp3",
            "ten-ducks.mp3",
            "swimming.mp3",
            "dogs-name.mp3",
        ];

        $paraName = "Uncle-Joe.mp3";

        $given_answer = [
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['1', '3', '5'],
            ['Eating', 'Sleeping', 'Swimming'],
            ['Cows', 'Pigs', 'Ducks'],
            ['Eating', 'Sleeping', 'Swimming'],
            ['Charlie', 'Joe', 'Rosy'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 810,
                        'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 810,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 810,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Uncle Joe farm",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }










        ///////////////////////////////////////////////// Lesson 7 ///////////////////////////////////////////////


        // Video Lesson ----- Game id - 811

        ////////////////////////


        // Unit - 2
        // Sub -1

        $contents = [
            "Bear", "Cheetah", "Cow", "Dolphin", "Elephant", "Fish", "Giraffe", "Leopard",
            "Lion", "Lobster", "Monkey", "Octopus", "Seahorse", "Seal", "Shark", "Snake",
            "Starfish", "Tiger", "Turtle", "Whale"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_7/Listen_and_Repeat_1/";
        $img = $ImageDomain . "Grade_4/Lesson_7/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 812,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }



        // Sub -2

        $contents = [
            ['elephant', 'elephants'],
            ['leopard', 'leopards'],
            ['monkey', 'monkeys'],
            ['cow', 'cows'],
            ['giraffe', 'giraffes'],
            ['cheetah', 'cheetahs'],
            ['snake', 'snakes'],
            ['octopus', 'octopuses'],
            ['seahorse', 'seahorses'],
            ['dolphin', 'dolphins'],
            ['shark', 'sharks'],
            ['starfish', 'starfish1'],
            ['fish', 'fish1'],
            ['whale', 'whales'],
            ['lobster', 'lobsters'],
            ['turtle', 'turtles'],
            ['seal', 'seals'],
            ['tiger', 'tigers'],
            ['lion', 'lions'],
        ];

        $audio = $AudioDomain . "Grade_4/Lesson_7/Listen_and_Repeat_2/";
        $img = $ImageDomain . "Grade_4/Lesson_7/Listen_and_Repeat_2/";

        foreach ($contents as $key =>  $val) {

            foreach ($val as $v) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 813,
                        'a_content' => $v,
                        'a_image' => $img . $this->removeSpace($v) . ".png",
                        'a_audio' => $audio . $this->removeSpace(ucfirst($v)) . ".mp3",
                        'q_content' => $key
                    ],
                ]);
            }
        }





        // Unit -3 Spelling Game <rearrange_with_audio>

        $given_ans = [
            ['C', 'A', 'H', 'T', 'H', 'E', 'E'],
            ['N', 'H', 'L', 'I', 'D', 'P', 'O'],
            ['E', 'T', 'L', 'A', 'H', 'E', 'N', 'P'],
            ['A', 'G', 'F', 'F', 'I', 'R', 'E'],
            ['D', 'R', 'L', 'O', 'P', 'A', 'E'],
            ['O', 'L', 'I', 'N'],
            ['E', 'O', 'Y', 'K', 'M', 'N'],
            ['S', 'U', 'T', 'C', 'O', 'P', 'O'],
            ['F', 'H', 'A', 'R', 'S', 'S', 'T', 'I'],
            ['R', 'E', 'I', 'G', 'T'],
        ];

        $img = $ImageDomain . "Grade_4/Lesson_7/Spelling_Game/";
        $audio = $AudioDomain . "Grade_4/Lesson_7/Spelling_Game/";

        $answers = [
            'CHEETAH', 'DOLPHIN', 'ELEPHANT', 'GIRAFFE', 'LEOPARD', 'LION', 'MONKEY',
            'OCTOPUS', 'STARFISH', 'TIGER'
        ];


        for ($i = 0; $i < count($given_ans); $i++) {

            foreach ($given_ans[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 814,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 814,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                    // 'q_content' => $questions[$i],
                    'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }






        // Unit - 4   Choose <look_and_choose>

        // Sub - 1


        $audio = $AudioDomain . "Grade_4/Lesson_7/Practice_1/";
        $img = $ImageDomain . "Grade_4/Lesson_7/Practice_1/";


        $given_ans = [
            ['Tiger', 'Lion', 'Leopard'],
            ['Tiger', 'Lion', 'Leopard'],
            ['Tiger', 'Cheetah', 'Giraffe'],
            ['Dolphin', 'Whale', 'Shark'],
            ['Fish', 'Starfish', 'Seahorse'],
            ['Fish', 'Starfish', 'Seahorse'],
            ['Dolphin', 'Whale', 'Shark'],
            ['Turtle', 'Octopus', 'Lobster'],
            ['Seahorse', 'Octopus', 'Lobster'],
            ['Dolphin', 'Whale', 'Shark'],


        ];

        $ans = [
            'Leopard', 'Tiger', 'Giraffe', 'Dolphin', 'Seahorse',
            'Starfish', 'Whale', 'Turtle', 'Octopus', 'Shark'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 815,
                    'round' => $key + 1,
                    'q_image' => $img . $this->removeSpace($ans[$key]) . ".png",
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 815,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 815,
                    'round' => $key + 1,
                    'q_content' => $ga[2],
                    'a_content' => $ga[2] == $ans[$key] ? true : false
                ]
            ]);
        }



        // Sub - 2

        // Unit - 4  Choose <look_and_choose>

        $audio = $AudioDomain . "Grade_4/Lesson_7/Practice_2/";
        $img = $ImageDomain . "Grade_4/Lesson_7/Practice_2/";

        $contents = [
            'fish', 'turtle', 'giraffe', 'octopus', 'starfish', 'pig', 'elephant', 'seahorse', 'cheetah', 'lion'
        ];

        $given_ans = [
            'Land animal', 'Sea animal',
        ];

        $ans = [
            'Sea animal', 'Sea animal', 'Land animal', 'Sea animal', 'Sea animal', 'Land animal',
            'Land animal', 'Sea animal', 'Land animal', 'Land animal'
        ];

        foreach ($contents as $key => $content) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 816,
                    'round' => $key + 1,
                    'q_image' => $img . $this->removeSpace($content) . ".png",
                    'q_content' => $given_ans[0],
                    'a_content' => $given_ans[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 816,
                    'round' => $key + 1,
                    'q_content' => $given_ans[1],
                    'a_content' => $given_ans[1] == $ans[$key] ? true : false
                ]
            ]);
        }










        // Unit 5 Speaking <speaking_and_recording>

        $contents = [
            "fish", "dog", "dolphin", "horse", "tiger",
            "rabbit", "sea-horse", 'lobster', 'cheetah', 'elephant'
        ];

        $Question_contents = [
            "What is it? \n It is ___. \n It is a land animal or sea animal? \n It is a ___.
         \n It is a big or small? \n It is ___ \n It is fast or slow \n It is ___.",
        ];



        $images = $ImageDomain . "Grade_4/Lesson_7/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_7/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 817,
                    'round' => $key + 1,
                    'round_instruction' => $audios.$this->removeSpace($value)."_round_ins".".mp3",
                    'q_content' => $Question_contents[0],
                    'q_audio' => $audios . $this->removeSpace($value) . ".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }





        // Unit -6  Sub -1 Listen and Practice (1) <listening_and_choosing_pics_three>



        $contents = [
            ['Tigers', 'Tiger'],
            ['Dolphin', 'Dolphins'],
            ['Whales', 'Whale'],
            ['Lobster', 'Lobsters'],
            ['Giraffes', 'Giraffe'],
            ['Turtle', 'Turtles'],
            ['Seahorse', 'Seahorses'],
            ['Octopus', 'Octopuses'],
        ];

        $ans = [
            'Tigers', 'Dolphin', 'Whales', 'Lobster', 'Giraffes', 'Turtles', 'Seahorse', 'Octopus'
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_7/Listen_and_Practice_1/";
        $img = $ImageDomain . "Grade_4/Lesson_7/Listen_and_Practice_1/";

        foreach ($contents as $key =>  $val) {

            foreach ($val as $v) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 818,
                        'round' => $key + 1,
                        'a_image' => $img . ucfirst($this->removeSpace($v)) . ".png",
                        // 'a_audio' => $audio.$this->removeSpace($v).".mp3",
                        'a_content' => $v == $ans[$key] ? true : false,
                    ],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 818,
                    'round' => $key + 1,
                    'q_audio' => $audio . $this->removeSpace($ans[$key]) . ".mp3",
                    'a_content' => $ans[$key],
                ],
            ]);
        }


        // Unit -6  Sub -2 Listen and Practice (2) <mcq_grammar>


        $imgs = [
            'Seahorse', 'Cheetah', 'Octopus', 'Giraffe', 'Monkey', 'Elephant',
        ];


        $ques = [
            ['Octopus', 'Seahorse', 'Giraffe'],
            ['Slow', 'Small', 'Fast'],
            ['Octopus', 'Seahorse', 'Giraffe'],
            ['Octopus', 'Seahorse', 'Giraffe'],
            ['Slow', 'Small', 'Fast'],
            ['Slow', 'Small', 'Fast'],
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_7/Listen_and_Practice_2/";
        $img = $ImageDomain . "Grade_4/Lesson_7/Listen_and_Practice_2/";

        $second_q_contents = [
            'This is a ____. It is a sea animal. ',
            'This is a cheetah. It is big and ____.',
            'This is a ____. It is a sea animal.',
            'This is a ____. It is a land animal. ',
            'This is a monkey. It is ____ and fast.',
            'This is an elephant. It is big and _____.'
        ];

        $ans = [
            'Seahorse', 'Fast', 'Octopus', 'Giraffe', 'Small', 'Slow',
        ];

        foreach ($imgs as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 819,
                    'round' => $key + 1,
                    'q_image' => $img . $val . ".png",
                    'q_audio' => $audio . $val . ".mp3",
                    'q_content' => $ques[$key][0],
                    'q_conver'  => $second_q_contents[$key],
                    'a_content' => $ques[$key][0] == $ans[$key] ? true : false
                ]
            ]);



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 819,
                    'round'  => $key +  1,
                    'q_content' => $ques[$key][1],
                    'a_content' => $ques[$key][1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 819,
                    'round'  => $key +  1,
                    'q_content' => $ques[$key][2],
                    'a_content' => $ques[$key][2] == $ans[$key] ? true : false
                ]
            ]);
        }


        /// Unit 7 Speaking Topic <speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_7/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_7/Speaking_Topic/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 820,
                'round' => 1,
                'q_content' => "Which animal do you see? \n How many animals are there? \n  Are they land animals or sea animals? \n  Are they big or small? \n  when it is hot?",
                'q_audio' => $audio . "which-animal-do-you-see.mp3",
                'q_image' => $images . "animals-in-ocean.png",
            ]

        ]);




        /////////////////////////////////////////// Lesson 8 ////////////////////////////////////////////////////////


        // Unit -1 ... ID - 821

        // Unit - 2

        $contents = [
            "big", "black", "blue", "brown", "fast", "green", "grey", "orange", "pink", "red", "slow", "small",
            "white", "yellow",
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_8/Listen_and_Repeat/";
        $img = $ImageDomain . "Grade_4/Lesson_8/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 822,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace(ucfirst($val)) . ".png",
                    'a_audio' => $audio . $this->removeSpace(ucfirst($val)) . ".mp3"
                ],
            ]);
        }





        // Unit -3 Spelling Game <rearrange_with_audio>

        $given_ans = [
            ['I', 'B', 'G'],
            ['B', 'K', 'A', 'C', 'L'],
            ['B', 'E', 'L', 'U'],
            ['T', 'F', 'A', 'S'],
            ['N', 'E', 'R', 'E', 'G'],
            ['Y', 'G', 'E', 'R'],
            ['R', 'E', 'O', 'G', 'N', 'A'],
            ['N', 'O', 'R', 'B', 'W'],
            ['I', 'N', 'P', 'K'],
            ['R', 'D', 'E'],
            ['W', 'S', 'O', 'L'],
            ['S', 'L', 'L', 'A', 'M'],
            ['E', 'I', 'T', 'H', 'W'],
            ['E', 'O', 'L', 'L', 'W', 'Y'],
        ];

        $img = $ImageDomain . "Grade_4/Lesson_8/Spelling/";
        $audio = $AudioDomain . "Grade_4/Lesson_8/Spelling/";

        $answers = [
            'BIG', 'BLACK', 'BLUE', 'FAST', 'GREEN', 'GREY', 'ORANGE', 'BROWN', 'PINK', 'RED', 'SLOW', 'SMALL', 'WHITE', 'YELLOW'
        ];


        for ($i = 0; $i < count($given_ans); $i++) {

            foreach ($given_ans[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 823,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 823,
                    'round' => $i + 1,
                    'q_image' => $img . $answers[$i] . ".png",
                    // 'q_content' => $questions[$i],
                    'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }


        // Unit -4 Practice <look_and_choose>


        $audio = $AudioDomain . "Grade_4/Lesson_8/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_8/Practice/";


        $given_ans = [
            ['Blue', 'Pink', 'Green'],
            ['Pink', 'Blue', 'Green'],
            ['Red', 'Pink', 'Orange'],
            ['White', 'Black', 'Grey'],
            ['Green', 'Yellow', 'Orange'],
            ['White', 'Black', 'Grey'],
            ['Yellow', 'Green', 'orange'],
            ['Orange', 'Red', 'Pink'],
            ['White', 'Black', 'Grey'],
            ['Orange', 'Brown', 'Pink'],
            ['Fast', 'Big', 'Slow'],
            ['Fast', 'Big', 'Slow'],
        ];

        $ans = [
            'Blue', 'Pink', 'Red', 'Grey', 'Green', 'White',
            'Yellow', 'Orange', 'Black', 'Brown', 'Fast', 'Slow'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 824,
                    'round' => $key + 1,
                    'q_image' => $img . $this->removeSpace($ans[$key]) . ".png",
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 824,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 824,
                    'round' => $key + 1,
                    'q_content' => $ga[2],
                    'a_content' => $ga[2] == $ans[$key] ? true : false
                ]
            ]);
        }




        // Unit -5  Listen and Practice <listening_and_choosing_pics_three>



        $contents = [
            ['starfish', 'whale', 'fish'],
            ['pig', 'horse', 'goat'],
            ['shark', 'turtle', 'fish'],
            ['cheetah', 'goat', 'horse'],
            ['giraffe', 'monkey', 'seahorse'],
            ['monkey', 'elephant', 'giraffe'],
        ];

        $ans = [
            'whale', 'pig', 'turtle', 'cheetah', 'monkey', 'elephant'
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_8/Listen_and_Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_8/Listen_and_Practice/";

        foreach ($contents as $key =>  $val) {

            foreach ($val as $v) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 825,
                        'round' => $key + 1,
                        'a_image' => $img . $this->removeSpace($v) . ".png",
                        // 'a_audio' => $audio.$this->removeSpace($v).".mp3",
                        'a_content' => $v == $ans[$key] ? true : false,
                    ],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 825,
                    'round' => $key + 1,
                    'q_audio' => $audio . $this->removeSpace($ans[$key]) . ".mp3",
                    'a_content' => $ans[$key],
                ],
            ]);
        }





        // Unit 6 Speaking Practice <speaking_and_recording>

        $contents = [
            "leopard", "giraffe", "turtle", "whale",
        ];

        $a_contents = [
            "Example \n A leopard has four legs. \n It has yellow fur with black spots. \n It can run very fast. \n It is big. \n It lives on land.",
            null,
            null,
            null,
        ];

        $instructions = [
            "leopard_instruction",null, null,null
        ];



        $images = $ImageDomain . "Grade_4/Lesson_8/Speaking_Practice/";
        $audios = $AudioDomain . "Grade_4/Lesson_8/Speaking_Practice/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 826,
                    'round' => $key + 1,
                    'round_instruction' => $audios.$this->removeSpace($instructions[$key]).".mp3",
                    'a_content' => $a_contents[$key],
                    'q_content' => "Describe the following animals",
                    'q_audio' => $audios.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }





        /// Unit 7 Speaking Topic <speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_8/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_8/Speaking_Topic/";

        $question = "- What is your favorite animal? \n - Is it big or small? \n - What color is it? \n - Is it slow or fast? \n - Where does it live?";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 827,
                'round' => 1,
                // 'q_conver' => $images . "question-list.png",
                'q_content' => $question,
                'q_audio' => $audios . "What-is-your-favorite-animal.mp3",
                'q_image' => $images . "orange-starfish_round.png",
            ]

        ]);



        // Unit 8 Writing <writing_topic>


        $images = $ImageDomain . "Grade_4/Lesson_8/Writing/";
        $audios = $AudioDomain . "Grade_4/Lesson_8/Writing/";

        $sample_content = "My favorite animal is the dolphin.\n It is big. It has blue color. \n They live in water. \n They can swim well.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 828,
                'round' => 1,
                'q_content' => $images . "text.png",
                'a_content' => $sample_content
            ],
        ]);



        //////////////////////////////////////////// Lesson 9 /////////////////////////////////////////////

        // Unit 1 Video -Game id (829)



        // Lesson 9 Listen and Repeat (Reading_Carousel)


        $contents = [
            'Cloudy', 'Cold', 'Foggy', 'Hail', 'Hot', 'Icy', 'Lightning', 'Rainbow', 'Rainy', 'Snow', 'Snowy', 'Stormy', 'Sunny', 'Thunder', 'Windy',
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_9/Listen_and_Repeat/";
        $img = $ImageDomain . "Grade_4/Lesson_9/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 830,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }






        // Unit -3 Spelling Game <rearrange_with_audio>

        $given_ans = [
            ['E', 'N', 'H', 'D', 'R', 'U', 'T'],
            ['N', 'Y', 'I', 'D', 'W'],
            ['Y', 'W', 'O', 'N', 'S'],
            ['I', 'R', 'N', 'W', 'B', 'A', 'O'],
            ['N', 'A', 'I', 'R', 'Y'],
            ['O', 'R', 'S', 'T', 'M', 'Y'],
            ['T', 'O', 'H'],
            ['O', 'D', 'L', 'C'],
            ['G', 'G', 'F', 'O', 'Y'],
            ['A', 'I', 'H', 'L'],
            ['Y', 'C', 'I'],
            ['G', 'H', 'L', 'I', 'T', 'N', 'I', 'G', 'N'],
            ['N', 'O', 'W', 'S'],
            ['S', 'Y', 'N', 'U', 'N'],
            ['Y', 'O', 'U', 'D', 'C', 'L'],
        ];

        $img = $ImageDomain . "Grade_4/Lesson_9/Spelling/";
        $audio = $AudioDomain . "Grade_4/Lesson_9/Spelling/";

        $answers = [
            'THUNDER', 'WINDY', 'SNOWY', 'RAINBOW', 'RAINY', 'STORMY', 'HOT', 'COLD', 'FOGGY', 'HAIL', 'ICY', 'LIGHTNING', 'SNOW', 'SUNNY', 'CLOUDY'
        ];


        for ($i = 0; $i < count($given_ans); $i++) {

            foreach ($given_ans[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 831,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 831,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                    // 'q_content' => $questions[$i],
                    'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }





        // Unit -4 Practice <look_and_choose>


        $audio = $AudioDomain . "Grade_4/Lesson_9/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_9/Practice/";


        $given_ans = [
            ['Snow', 'Rain', 'Thunder'],
            ['Icy', 'Snowy', 'Windy'],
            ['Windy', 'Icy', 'Foggy'],
            ['Snow', 'Hail', 'Rainbow'],
            ['Snow', 'Hail', 'Rainbow'],
            ['Thunder', 'Rainbow', 'Lighting'],
            ['Snow', 'Rain', 'Hail'],
            ['Rainbow', 'Snow', 'Hail'],
            ['Rainbow', 'Hail', 'Cold'],
            ['Windy', 'Snowy', 'Cloudy'],
            ['Rainy', 'Snowy', 'Hail'],
            ['Rainy', 'Stormy', 'Hail'],
            ['Rainy', 'Stormy', 'Hot'],
            ['Sunny', 'Cloudy', 'Windy'],
            ['Sunny', 'Cloudy', 'Windy'],
        ];

        $ans = [
            "Thunder", "Snowy", "Foggy", "Hail", "Snow", "Thunder", "Snow", "Rainbow", "Cold", "Windy", "Rainy", "Stormy", "Hot", "Sunny", "Cloudy"
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 832,
                    'round' => $key + 1,
                    'q_image' => $img . $this->removeSpace($ans[$key]) . ".png",
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 832,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 832,
                    'round' => $key + 1,
                    'q_content' => $ga[2],
                    'a_content' => $ga[2] == $ans[$key] ? true : false
                ]
            ]);
        }




        // Unit 5 Speaking Practice <speaking_and_recording>

        $contents = [
            "Sunny", "Windy", "Hot", "Snowy", "Cold", "Rainy", "Cloudy",
        ];

        $Question_contents = [
            "Q: What is the weather like today? \n A: ____."
        ];



        $images = $ImageDomain . "Grade_4/Lesson_9/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_9/Speaking/";

        foreach ($contents as $key => $value) {


            $data = [
                'game_id' => 833,
                'round' => $key + 1,
                'round_instruction' => $audios . "What-is-the-weather-like-today.mp3",
                'q_content' => $Question_contents[0],
                // 'q_audio' => $audio.$this->removeSpace($value).".mp3",
                'q_image' => $images . $this->removeSpace($value) . ".png",
            ];

            if ($key == 0) {
                $data['q_content'] =  "Q: What is the weather like today? \n A:It is sunny.";
            }

            DB::table('ans_n_ques')->insert($data);
        }




        // Unit 6 Listen <listening_and_choosing_pics_one>


        $images = $ImageDomain . "Grade_4/Lesson_9/Listening_Practice/";
        $audios = $AudioDomain . "Grade_4/Lesson_9/Listening_Practice/";

        $contents = [
            ['snowy', 'windy', 'stormy'],
            ['cold', 'snowy', 'rainy'],
            ['sunny', 'cloudy', 'hot'],
            ['cloudy', 'stormy', 'snowy'],
            ['rainy', 'sunny', 'windy'],
            ['hot', 'sunny', 'hot'],
            ['foggy', 'rainy', 'stormy'],
        ];


        $ans = [
            'windy',
            'snowy',
            'hot',
            'cloudy',
            'sunny',
            'sunny',
            'foggy',
        ];

        foreach ($ans as $key => $value) {

            foreach ($contents[$key] as $j => $val) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 834,
                        'round' => $key + 1,
                        'q_image' => $images . $this->removeSpace($val) . ".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 834,
                    'round' => $key + 1,
                    'q_audio' => $audios . $this->removeSpace($value) . ".mp3"
                ]
            ]);
        }




        /// Unit 7 Speaking Topic <speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_9/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_9/Speaking_Topic/";

        $question = "Look outside. What is the weather like today? \n Use the prompts below \n \n It is (cloudy/sunny/rainy/windy/snowy/foggy). \n It is (hot/cold)";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 835,
                'round' => 1,
                // 'q_conver' => $images . "question-list.png",
                'q_content' => $question,
                'q_audio' => $audios . "Weather-look-like.mp3",
                'q_image' => $images . "orange-starfish_round.png",
            ]

        ]);


        /////////////////////////////////////////// End of Lesson 9  //////////////////////////////////////////



        /////////////////////////////////////////// Lesson 26 //////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////



        // Unit - 1 Video Lesson
        // Game_id - 962



        // Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)


        $contents = [
            "blouse", "cap", "dress", "flip-flops", "hat", "sunglasses", "t-shirt", "shorts", "jeans",
            "jacket", "scarf", "Skirt", "socks", "sweater", "tracksuit", "winter-coat"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_26/Listen_and_Repeat_1/";
        $img = $ImageDomain . "Grade_4/Lesson_26/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 963,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace(ucfirst($val)) . ".png",
                    'a_audio' => $audio . $this->removeSpace(ucfirst($val)) . ".mp3"
                ],
            ]);
        }



        // next rounds for conversations
        $chars = [
            ['boy', 'teacher'],
            ['boy', 'girl-1'],
            ['boy', 'girl-2'],
            ['boy', 'girl-3']
        ];


        $convers_audio = [
            ["hot-1.mp3", null],
            ["hot-2.mp3", null],
            ["cold-1.mp3", null],
            ["cold-2.mp3", null],
        ];
        $convers_gif = [
            ["hot-1.png", null],
            ["hot-2.png", null],
            ["cold-1.png", null],
            ["cold-2.png", null],
        ];

        $audio = $AudioDomain . "Grade_4/Lesson_26/Listen_and_Repeat_2/";
        $img = $ImageDomain . "Grade_4/Lesson_26/Listen_and_Repeat_2/";


        foreach ($chars as $key => $char) {

            foreach ($char as $k => $v) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 964,
                        'round' => $key + 1,
                        'a_image' => $img . $v . ".gif",
                        'a_audio' => $convers_audio[$key][$k] ? $audio . $convers_audio[$key][$k] : null,
                        'a_conver' => $convers_gif[$key][$k] ? $img . $convers_gif[$key][$k] : null,
                        "background" => $img . "bg" . $key + 1 . ".png"
                    ]
                ]);
            }
        }




        // Unit 3 Practice


        $audio = $AudioDomain . "Grade_4/Lesson_26/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_26/Practice/";


        $given_ans = [
            ['Scarf', 'Socks', 'Cap'],
            ['Hat', 'Scarf', 'Cap'],
            ['Scarf', 'Socks', 'Flipflops'],
            ['Sweater', 'Tracksuit', 'Winter Coat'],
            ['Trainers', 'Flipflops', 'Sandals'],
            ['Jacket', 'Sweater', 'Winter Coat'],
            ['Dress', 'Shirt', 'Skirt'],
            ['Shorts', 'Pants', 'Skirt'],
            ['Jacket', 'Sweater', 'WInter Coat'],



        ];

        $ans = [
            'Scarf', 'Hat', 'Socks', 'Tracksuit', 'Flipflops', 'Winter Coat', 'Skirt', 'Shorts', 'Jacket'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 965,
                    'round' => $key + 1,
                    'q_image' => $img . $this->removeSpace($ans[$key]) . ".png",
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 965,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 965,
                    'round' => $key + 1,
                    'q_content' => $ga[2],
                    'a_content' => $ga[2] == $ans[$key] ? true : false
                ]
            ]);
        }




        // Unit - 4 Speaking <Speaking_and_recording>

        $contents = [
            "pink-coat", "jeans", "black-coat", "yellow-skirt", "blue-shirt", "white-shirt",
        ];

        $Question_contents = [
            "She is wearing ___.",
            "He is wearing ___.",
            "He is wearing ___.",
            "She is wearing ___.",
            "He is wearing ___.",
            "She is wearing ___.",
        ];
        $eg966 = [
            "She is wearing a pink coat, a brown scarf, and blue jeans.", null, null, null, null, null
        ];

        $images = $ImageDomain . "Grade_4/Lesson_26/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_26/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 966,
                    'round' => $key + 1,
                    "a_content" => $eg966[$key],
                    // 'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audio.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }



        // Unit - 5 Listening


        $images = $ImageDomain . "Grade_4/Lesson_26/Listen/";
        $audios = $AudioDomain . "Grade_4/Lesson_26/Listen/";

        $contents = [
            ['white-shirt', 'dark-blue-skirt', 'purple-skirt'],
            ['red-shirt', 'dark-blue-skirt', 'purple-skirt'],
        ];


        $ans = [
            'dark-blue-skirt',
            'purple-skirt',
        ];

        foreach ($ans as $key => $value) {

            foreach ($contents[$key] as $j => $val) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 967,
                        'round' => $key + 1,
                        'q_image' => $images . $val . ".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 967,
                    'round' => $key + 1,
                    'q_audio' => $audios . $value . ".mp3"
                ]
            ]);
        }




        ////  Unit 6 (Reading) < reading_passage >


        $images = $ImageDomain . "Grade_4/Lesson_26/Reading/";
        $audios = $AudioDomain . "Grade_4/Lesson_26/Reading/";

        $para = "Mommy is sleeping and so this little will dress herself. It’s time to get up and goes to friends’ house. But, mommy is still sleeping. So, Anna tries to dress herself. Anna pushes a chair and looks for what to wear in her drawers. “A pink dress?” “No, it will be too new to wear.” “A sweater?” “No, it is hot today. Not a sweater day!” “Ah hah, this will do.” Anna quickly chooses a pink T-shirt and a purple hoodie. But, she wears the hoodie as pants. When mommy wakes up, she will laugh so bad.";

        $given_q = [
            ["Why doesn't she wear a sweater?", "As it is very hot"],
            ["What color T-shirt does she wear?", "A pink"],
            ["What does she wear instead of pants?", "A hoodie"],
            ["Why doesn't she wear a dress?.", "Because it is new"],
            ["Why does Anna dress herself?", "Because her mommy is sleeping"],
        ];

        $given_audio = [
            "sweater.mp3",
            "t-shirt.mp3",
            "hoodie.mp3",
            "new.mp3",
            "sleep.mp3",
        ];

        $paraName = "I-can-dress-myself.mp3";

        $given_answer = [
            ['She does not have a sweater', 'As it is very hot', 'As it is very cold'],
            ['A pink', 'A blue', 'A purple'],
            ['A jacket', 'A coat', 'A hoodie'],
            ['Because it is old', "Because it is her sister’s", 'Because it is new'],
            ['Because her mommy is shopping', 'Because her mommy is sleeping', 'Because her mommy is out'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 968,
                        'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 968,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 968,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "I can dress myself",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }



        /// Unit 6 Speaking Topic <speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_26/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_26/Speaking_Topic/";

        $contents = "The father is wearing __________, _________, and _____________. \n The mother is wearing ______________, and _____________. \n The boy is wearing _____________, ____________, and ___________. \n The girl is wearing ___________, ____________, and ____________.";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 969,
                'round' => 1,
                'q_content' => $contents,
                // 'q_audio' => $audios."father-wearing-mother-wearing.mp3",
                'q_image' => $images . "father-wearing-mother-wearing.png",
            ]

        ]);



        ////////////////////////////////////////// end of Lesson 26 ///////////////////////////////////////////////////





        ///////////////////////////////////////////// Lesson 27 ///////////////////////////////////////



        // Unit - 1 Video Lesson
        // Game_id - 970



        // Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)


        $contents = [
            'A cap', 'A hat', 'A raincoat', 'A scarf', 'A sweater', 'Boots', 'Gloves', 'Socks', 'Suit'
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_27/Listen_and_Repeat_1/";
        $img = $ImageDomain . "Grade_4/Lesson_27/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 971,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }





        // Unit 2 SUb - 2 <Reading_carousel_two> <skimming_reading_passage>

        //    $contents = [
        //         ['cold'],
        //         ['hot','rainy'],
        //         ['T-shirt','blouse'],
        //     ];

        //     $audio = $AudioDomain."Grade_4/Lesson_27/Listen_and_Repeat_2/";
        //     $img = $ImageDomain."Grade_4/Lesson_27/Listen_and_Repeat_2/";

        //     foreach ($contents as $key =>  $val) {

        //         foreach ($val as $v) {
        //             DB::table('ans_n_ques')->insert([
        //                 [
        //                     'game_id' => 971,
        //                     'round'=> 1,
        //                     'a_content' => $v,
        //                     'a_image' => $img.$this->removeSpace($v).".png",
        //                     'a_audio' => $audio.$this->removeSpace($v).".mp3",
        //                     'q_content' => $key
        //                 ],
        //             ]);
        //         }

        //     }


        // next rounds for conversations <reading_conversation>
        $chars = [
            ['boy', 'girl'],
            ['boy', 'girl-2'],
            ['boy', 'girl-3'],
            ['man', 'woman']
        ];


        $convers = [
            ['boy-1.png', "yellow-girl.png"],
            ["boy-2.png", "green-girl.png"],
            ['boy-3.png', "purple-girl.png"],
            ["man.png", "woman.png"]
        ];
        $convers_audio = [
            ['rainy-season.mp3', "raincoat-flipflops.mp3"],
            ["cold-season.mp3", "gloves-boots.mp3"],
            ['hot-season.mp3', "T-shirt-jeans-girl.mp3"],
            ["T-shirt-jeans-boy.mp3", "blouse-skirt.mp3"]
        ];

        $audio = $AudioDomain . "Grade_4/Lesson_27/Listen_and_Repeat_2/";
        $img = $ImageDomain . "Grade_4/Lesson_27/Listen_and_Repeat_2/";


        foreach ($chars as $key => $char) {

            foreach ($char as $k => $v) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 972,
                        'round' => $key + 1,
                        'a_image' => $img . $v . ".gif",
                        'a_audio' => $convers_audio[$key][$k] ? $audio . $convers_audio[$key][$k] : null,
                        'a_conver' => $convers[$key][$k] ?  $img . $convers[$key][$k] : null,
                        "background" => $img . "bg.png"
                    ]
                ]);
            }
        }



        // Unit 3 Practice <look_and_choose>

        $audio = $AudioDomain . "Grade_4/Lesson_27/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_27/Practice/";

        $contents = [
            'winter coat', 'flipflops', 'rain coat', 'sweater',
            'rain coat', 'winter coat', 'scarf', 'hat', 't-shirt'
        ];

        $given_ans = [
            "Yes, I do", "No, I don't",
        ];

        $questions = [
            "In the hot season, \n do you like to wear ...?",
            "In the rainy season, \n do you like to wear ...?",
            "In the rainy season, \n do you like to wear ...?",
            "In the rainy season, \n do you like to wear ...?",
            "In the cold season, \n do you like to wear ...?",
            "In the cold season, \n do you like to wear ...?",
            "In the cold season, \n do you like to wear ...?",
            "In the hot season, \n do you like to wear ...?",
            "In the hot season, \n do you like to wear ...?",
        ];

        $ans = [
            "No, I don't", "Yes, I do", "Yes, I do",  "No, I don't", "No, I don't", "Yes, I do", "Yes, I do", "Yes, I do", "Yes, I do",
        ];

        foreach ($contents as $key => $content) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 973,
                    'round' => $key + 1,
                    'q_image' => $img . $this->removeSpace($content) . ".png",
                    'q_audio' => $audio . $this->removeSpace($content) . ".mp3",
                    'q_conver' => $questions[$key],
                    'q_content' => $given_ans[0],
                    'a_content' => $given_ans[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 973,
                    'round' => $key + 1,
                    'q_content' => $given_ans[1],
                    'a_content' => $given_ans[1] == $ans[$key] ? true : false
                ]
            ]);
        }



        //lesson 27  Unit - 4 Speaking Practice <Speaking_and_recording>

        $contents = range(1, 6);

        $Question_contents = [
            "What do you like to wear in the rainy season?",
            "What do you like to wear in the cold season?",
            "What do you like to wear at the beach?",
            "What do you like to wear at the playground?",
            "What do you like to wear in the hot season?",
            "What do you like to wear at home?",
        ];


        $images = $ImageDomain . "Grade_4/Lesson_27/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_27/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 974,
                    'round' => $key + 1,
                    'round_instruction' => $audios . $this->removeSpace($value) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audios.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images . "green-starfish_round" . ".png",
                ]

            ]);
        }



        // lesson 27 Unit 5 Listening Practice <listening_and_choosing_pics_one>



        $images = $ImageDomain . "Grade_4/Lesson_27/Listen_Practice/";
        $audios = $AudioDomain . "Grade_4/Lesson_27/Listen_Practice/";

        $contents = [
            ['green', 'smart', 'normal'],
        ];


        $ans = [
            'green',
        ];

        foreach ($ans as $key => $value) {

            foreach ($contents[$key] as $j => $val) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 975,
                        'round' => $key + 1,
                        'q_image' => $images . $val . ".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 975,
                    'round' => $key + 1,
                    'q_audio' => $audios . $value . ".mp3"
                ]
            ]);
        }


        // lesson 27 Unit 6 Speaking topic < speaking_and_recording >    => Game id 976


        $images = $ImageDomain . "Grade_4/Lesson_27/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_27/Speaking_Topic/";

        $contents = "What do you like to wear during these events? \n. I like to wear ___,___, and ___ \n when I go shopping with my family. \n. I like to wear ___,___, and ___ \n when I go to school. \n. I like to wear ___,___, and ___ when I visit my friends.";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 976,
                'round' => 1,
                'q_content' => $contents,
                // 'q_audio' => $audios."father-wearing-mother-wearing.mp3",
                'q_image' => $images . "Three-kids.png",
            ]

        ]);





        ////////////////////////////////////// end of lesson 27 /////////////////////////////



        //////////////////////////////////// Lesson 28 ////////////////////////////////////////




        // Unit - 1 Video Lesson
        // Game_id - 977



        // Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)

        $contents = [
            "he-likes", "I-like", "she-likes", "they-like", "you-like"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_28/Listen_and_Repeat_1/";
        $img = $ImageDomain . "Grade_4/Lesson_28/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 978,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }

        // Unit - 2 Sub - 2 <reading_carousel_two>

        $contents = [
            ['like-t-shirt', 'they-like-tracksuit'],
            ['he-like-suit', 'they-like-hat'],
            ['he-like-scarf'],
            ['she-like-boots', 'they-like-sweater'],
            ['school-uniform', 'he-like-pyjamas'],
        ];

        $audio = $AudioDomain . "Grade_4/Lesson_28/Listen_and_Repeat_2/";
        $img = $ImageDomain . "Grade_4/Lesson_28/Listen_and_Repeat_2/";

        foreach ($contents as $key =>  $val) {

            foreach ($val as $v) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 979,
                        'round' => 1,
                        'a_content' => $v,
                        'a_image' => $img . $this->removeSpace($v) . ".png",
                        'a_audio' => $audio . $this->removeSpace($v) . ".mp3",
                        'q_content' => $key
                    ],
                ]);
            }
        }


        // Unit - 2 , Sub - 3 (Reading_carousel)

        $contents = [
            "checked-shirt", "floral-shirt", "polka-dot-blouse", "stripe-shirt"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_28/Listen_and_Repeat_3/";
        $img = $ImageDomain . "Grade_4/Lesson_28/Listen_and_Repeat_3/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 980,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }





        // Unit 3 Practice  <look_and_choose>


        $audio = $AudioDomain . "Grade_4/Lesson_28/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_28/Practice/";

        $given_ans = [
            ['I Like', 'They Like'],
            ['I Like', 'They Like'],
            ['I Like', 'You Like'],
            ['He Likes', 'She Likes'],
            ['He Likes', 'She Likes'],
            ['He Likes', 'She Likes'],
        ];

        $contents = [
            'they-like', 'man-like', 'you-like', 'black-like', 'white-like', 'kid-like'
        ];

        $ans = [
            'They Like', 'I Like', 'You Like', 'She Likes', 'He Likes', 'He Likes'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 981,
                    'round' => $key + 1,
                    'q_image' => $img . $this->removeSpace($contents[$key]) . ".png",
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 981,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);
        }



        // Unit 4 Speaking Practice <Speaking_and_recording>




        //lesson 27  Unit - 4 Speaking Practice <Speaking_and_recording>

        $contents = [
            'red-boy', 'white-girl', 'suit-boy', 'fat-boy', '2-girl', 'cold-boy', 'hot-girl'
        ];

        $Question_contents = [
            "What do you like to wear? \n I like to wear a T-shirt and pants.",
            "What does she like to wear? \n She like _____.",
            "What does he like to wear? \n  _____.",
            "What does he like to wear? \n  _____.",
            "What do they like to wear? \n  _____.",
            "What does he like to wear in the cold season? \n  _____.",
            "What do you like to wear? \n  _____.",
        ];

        $eg982 = [
            "Q: What do you like to wear? \nA: I like to wear a T-shirt and pants.", null, null, null, null, null, null
        ];

        $images = $ImageDomain . "Grade_4/Lesson_28/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_28/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 982,
                    'round' => $key + 1,
                    "a_content" => $eg982[$key],
                    'round_instruction' => $audios . $this->removeSpace($contents[$key]) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audios.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images . str_replace('?', '', $this->removeSpace($value)) . ".png",
                ]

            ]);
        }




        // lesson 28 Unit 5 Listening Practice <listening_and_choosing_pics_one>



        $images = $ImageDomain . "Grade_4/Lesson_28/Listen_Practice/";
        $audios = $AudioDomain . "Grade_4/Lesson_28/Listen_Practice/";

        $contents = [
            ['red-hat', 'big-hat', 'blue-short-dress'],
        ];


        $ans = [
            'blue-short-dress',
        ];

        foreach ($ans as $key => $value) {

            foreach ($contents[$key] as $j => $val) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 983,
                        'round' => $key + 1,
                        'q_image' => $images . $val . ".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 983,
                    'round' => $key + 1,
                    'q_audio' => $audios . $value . ".mp3"
                ]
            ]);
        }



        // Lesson 28  Unit 6 (Reading Practice) < reading_passage >


        $images = $ImageDomain . "Grade_4/Lesson_28/Reading_practice/";
        $audios = $AudioDomain . "Grade_4/Lesson_28/Reading_practice/";

        $para = "Ben and Emma are brother and sister. Ben is a year older than Emma.Ben is wearing an orange T-shirt, a white and blue jacket, pants and shoes. Emma is wearing a striped T-shirt, a green jacket, a pink skirt, polka dot pants, and shoes. They like to wear school uniforms at school. They like to wear pyjamas in bed. Ben likes to wear a T-shirt, pants, and flipflops in the rainy season. Emma likes to wear a dress and a raincoat in the rainy season. They both love the rainy season.";

        $given_q = [
            ["Ben is wearing ___ and ___", "A T-shirt and pants"],
            ["They like to wear __ in bed.", "Pyjamas"],
            ["They like to wear __ at school.", "School uniforms"],
            ["Ben likes to wear a raincoat in the rainy season.", "False"],
            ["Emma is ___ than Ben.", "Younger"],
            ["Ben and Emma are ___", "Brother and sister"],

        ];

        $given_audio = [
            "ben-wearing.mp3",
            "they-like-bed.mp3",
            "they-like-school.mp3",
            "ben-raincoat.mp3",
            "emma-young-ben.mp3",
            "ben-emma.mp3",
        ];

        $paraName = "Ben-and-Emma.mp3";

        $given_answer = [
            ['A T-shirt and pants', 'A suit', 'A polka dot shirt and pants'],
            ['School uniforms', 'Pyjamas', 'Swimsuits '],
            ['School uniforms', 'Pyjamas', 'Swimsuits'],
            ['True', 'False'],
            ['Older', 'Younger', 'The same age'],
            ['Friends', 'Brother and sister', 'Neighbours'],

        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 984,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 984,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 984,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Ben and Emma",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }




        //lesson 28  Unit - 7 Speaking Topic <Speaking_and_recording>

        $contents = ['home', 'school', 'snow-house'];

        $Question_contents = [
            "I like to wear ___ at home.",
            "I like to wear ___ at school.",
            "I like to wear ___ at christmas.",
            // "I like to wear ___ at home \n I like to wear ___ at school. \n I like to wear ___ at christmas."
        ];


        $images = $ImageDomain . "Grade_4/Lesson_28/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_28/Speaking_Topic/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 985,
                    'round' => $key + 1,
                    // 'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audios.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images . str_replace('?', '', $this->removeSpace($value)) . ".png",
                ]
            ]);
        }


        // Lesson 28 Unit 8  Writing Topic <writing_topic>


        $images = $ImageDomain . "Grade_4/Lesson_28/Writing_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_28/Writing_Topic/";

        $sample_content = "Three_girls";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 986,
                'a_content' => $loream,
                // 'q_image' => $images . $sample_content . ".png",
                'q_content' => $images . $sample_content . "_small.png",
            ],
        ]);




        ////////////////////////////////// end of lesson 28 /////////////////////////////////////////////




        /////////////////////////////////////// Lesson 29 //////////////////////////////////////////////

        // Unit - 1 Video Lesson
        // Game_id - 987



        // Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)



        $contents = [
            "chicken-soup", "chicken-rice", "fish-curry", "fish-sauce-and-vegetable", "fried-egg",
            "fried-rice", "hamburger", "mont-hin-gah", "noddles-in-coconut-gravy", "salad", "sandwich",
            "steam-sticky-rice",
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_29/Listen_and_Repeat_1/";
        $img = $ImageDomain . "Grade_4/Lesson_29/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 988,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }


        // Unit 2 Sub - 2 Listen and Repeat 2 <reading_conversation>

        $chars = [
            ['boy', 'girl'],
            ['boy', 'girl'],
            ['boy', 'girl'],
            ['boy', 'girl']
        ];


        $convers = [
            ["boy-con-2", "girl-con-2"],
            ['boy-con-1', "girl-con-1"],
            ["boy-con-4", "girl-con-4"],
            ["boy-con-3", "girl-con-3"],
        ];

        $convers_audio = [
            ["what-ur-lunch.mp3", "chicken-rice-lunch.mp3"],
            ['hamburger-for-lunch.mp3', "me-too-hamburger.mp3"],
            ["usually-breakfast.mp3", "fried-rice-coffee.mp3"],
            ['mont-hin-gah-for-breakfast.mp3', "me-too-mont-hin-gah.mp3"],
        ];

        $audio = $AudioDomain . "Grade_4/Lesson_29/Listen_and_Repeat_2/";
        $img = $ImageDomain . "Grade_4/Lesson_29/Listen_and_Repeat_2/";


        foreach ($chars as $key => $char) {

            foreach ($char as $k => $v) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 989,
                        'round' => $key + 1,
                        'a_image' => $img . $v . ".gif",
                        'a_audio' => $convers_audio[$key][$k] ? $audio . $convers_audio[$key][$k] : null,
                        'a_conver' => $convers[$key][$k] ? $img . $convers[$key][$k] . ".png" : null,
                        "background" => $img . "bg.png"
                    ]
                ]);
            }
        }



        // Lesson 29 Unit 3 Practice <Matching_column>


        $audio = $AudioDomain . "Grade_4/Lesson_29/Practice/Matching/";
        $img = $ImageDomain . "Grade_4/Lesson_29/Practice/Matching/";


        $contents = [
            ['Fish Curry', 'Fish Sauce', 'Fried Egg', 'Chicken Soup', 'Noodle in coconut gravy'],
            ['Fried Rice', 'Steamed Sticky Rice', 'Hamburger', 'Sandwich', 'Mont hin gah'],
        ];

        $randomValues = [
            ['Fried Egg', 'Fish Sauce', 'Fish Curry', 'Chicken Soup', 'Noodle in coconut gravy'],
            ['Mont hin gah', 'Hamburger', 'Sandwich', 'Fried Rice', 'Steamed Sticky Rice'],
        ];


        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 990,
                        'round' => $i + 1,
                        'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $audio . $this->removeSpace(strtolower($q)) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 990,
                        'round' => $i + 1,
                        'q_content' => $q,
                        'q_image' => $img . $this->removeSpace(strtolower($q)) . ".png",
                        'q_audio' => $audio .  $this->removeSpace(strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }




        // Unit 4 Speaking <Speaking_and_recording>


        $contents = [
            'fried-rice', 'coconut-noodle', 'mont-hin-gah', 'sandwich', 'hamburger', 'salad'
        ];

        $Question_contents = [
            "What do you usually have for breakfast? \n I usually have fried rice and coffee.",
            "What do you usually have for breakfast? \n ________.",
            "What do you usually have for breakfast? \n ________.",
            "What do you usually have for lunch? \n ________.",
            "What do you usually have for lunch? \n ________.",
            "What do you usually have for dinner? \n ________.",
            // "What do you usually have for breakfast? \n -------------.",
        ];

        // $q_instruction = [
        //     'breakfast-fried-rice','breakfast-coconut-noodle','breakfast-mont-hin-gah',
        //     'lunch-sandwich','lunch-hamburger','dinner-salad',
        // ];
        $q_instruction = [
            'breakfast', 'breakfast', 'breakfast',
            'lunch', 'lunch', 'dinner',
        ];

        $eg991 = [
            "A: What do you usually have for breakfast? \nB: I usually have fried rice and coffee.", null, null, null, null, null
        ];

        $images = $ImageDomain . "Grade_4/Lesson_29/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_29/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 991,
                    'round' => $key + 1,
                    "a_content" => $eg991[$key],
                    'round_instruction' => $audios . $this->removeSpace($q_instruction[$key]) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audios.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images . str_replace('?', '', $this->removeSpace($value)) . ".png",
                ]

            ]);
        }



        //Lesson 29 Unit 5 Listen Practice <listening_choosing_answer>

        $questions = [
            "What doesn't she have for lunch",
            "What doesn't she eat for dinner",
            "What does she usually have for dinner",
            "What does she usually have for lunch",
            "What does Anna usually have for breakfast",
        ];

        $given_ques = [
            ['Fried rice', 'Hamburger', 'Chicken rice'],
            ['Sandwich', 'Hamburger', 'Rice'],
            ['Noodle', 'Salad', 'Sandwich'],
            ['Fried noodle', 'Hamburger', 'Chicken rice'],
            ['Fried noodle', 'Steamed rice', 'Fried Rice'],
        ];

        $ans = [
            "Hamburger", "Rice", "Salad", "Chicken rice", "Fried Rice"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_29/Listening/";
        $img = $ImageDomain . "Grade_4/Lesson_29/Listening/";

        $story = "Anna-daily";

        foreach ($questions as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 992,
                    'round' => $key + 1,
                    // 'q_audio' => $audio.$ans[$key].".mp3",
                    'q_audio' => $audio . $story . ".mp3",
                    'q_content' => $given_ques[$key][0],
                    'q_conver'  => $val . "?",
                    'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
                ]
            ]);



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 992,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][1],
                    'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 992,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][2],
                    'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
                ]
            ]);
        }



        // Lesson 29 Unit - 6 Speaking Topic <Speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_29/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_29/Speaking_Topic/";

        $content = "I usually have ____________, and ____________ for breakfast. \nI have ____________, ____________, and ___________ for lunch. \nI usually have ____________, _____________ and __________ for dinner.";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 993,
                'round' => 1,
                'q_content' => $content,
                'q_audio' => $audios . "Talk-about-usually-eat.mp3",
                'q_image' => $images . "girl-eating.png",
            ]

        ]);



        // Lesson 29 Unit 8  Writing Topic <writing_topic>


        $images = $ImageDomain . "Grade_4/Lesson_29/Writing_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_29/Writing_Topic/";

        $sample_content = "eating-boy";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 994,
                // 'q_image' => $images . $sample_content . ".png",
                'q_content' => $images . $sample_content . "_small.png",
                'a_content' => "I usually have fried rice and tea for breakfast.I have chicken rice, fried vegetables, and soup for lunch. I do not like eating sandwich for lunch. I usually have sandwich, salad, and juice for dinner.I do not like eating hamburgers for dinner. ",
            ],
        ]);




        ///////////////////////////////////////////// End of Lesson 29 ////////////////////////////////////////



        ///////////////////////////////////////// Lesson 30 ///////////////////////////////////////////

        // Unit - 1 Video Lesson
        // Game_id - 995



        // Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)


        $contents = [
            "bacon-egg", "bibimbap", "fish-chip", "noodle-soup",
            "phad-thai", "pizza", "puri", "roast lamb", "sushi",
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_30/Listen_and_Repeat_1/";
        $img = $ImageDomain . "Grade_4/Lesson_30/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 996,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }


        // Unit 2 Sub - 2 Listen and Repeat 2 <reading_conversation>

        $chars = [
            ['boy', 'girl'],
            ['boy', 'girl'],
        ];


        $convers = [
            ["What-food", "pizza"],
            ['puri', null],
        ];

        $convers_audio = [
            ["what-ur-favorite-food", "pizza"],
            ['puri', null],
        ];

        $audio = $AudioDomain . "Grade_4/Lesson_30/Listen_and_Repeat_2/";
        $img = $ImageDomain . "Grade_4/Lesson_30/Listen_and_Repeat_2/";


        foreach ($chars as $key => $char) {

            foreach ($char as $k => $v) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 997,
                        'round' => $key + 1,
                        'a_image' => $img . $v . ".gif",
                        'a_audio' => $convers_audio[$key][$k] ? $audio . $convers_audio[$key][$k] . ".mp3" : null,
                        'a_conver' => $convers[$key][$k] ? $img . $convers[$key][$k] . ".png" : null,
                        "background" => $img . "bg.png"
                    ]
                ]);
            }
        }




        // Lesson 29 Unit 3 Practice <Matching_column>


        $audio = $AudioDomain . "Grade_4/Lesson_30/Practice/Matching/";
        $img = $ImageDomain . "Grade_4/Lesson_30/Practice/Matching/";


        $contents = [
            ['Puri', 'BiBimbap', 'Noodle soup', 'Pizza', 'Sushi'],
            ['Fish and chips', 'Sushi', 'Roast lamb', 'Phad Thai', 'Bacon and eggs'],
        ];



        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 998,
                        'round' => $i + 1,
                        'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $audio . $this->removeSpace(strtolower($q)) . ".mp3",
                    ]
                ]);
            }


            foreach ($contents[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 998,
                        'round' => $i + 1,
                        'q_content' => $q,
                        'q_image' => $img . $this->removeSpace(strtolower($q)) . ".png",
                        'q_audio' => $audio .  $this->removeSpace(strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }





        //Lesson 30 Unit 4 Speaking Practice <Speaking_and_recording>


        $contents = [
            'pizza', 'phat-thai', 'bibimbap', 'sushi', 'puri', 'noodle-soup', 'bacon-egg',
        ];

        $Question_contents = [
            "What is your favorite food? \n __________.",
            "What is your favorite food? \n __________.",
            "What is your favorite food? \n __________.",
            "What is your favorite food? \n __________.",
            "What is your favorite food? \n __________.",
            "What is your favorite food? \n __________.",
            "What is your favorite food? \n __________.",
        ];

        $eg999 = [
            "A: What's your favorite food? \nB: My favorite food is pizza.", null, null, null, null, null, null
        ];

        $q_instruction = "What-is-your-favorite-food";


        $images = $ImageDomain . "Grade_4/Lesson_30/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_30/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 999,
                    'round' => $key + 1,
                    "a_content" => $eg999[$key],
                    'round_instruction' => $audios . $this->removeSpace($q_instruction) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audios.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images . str_replace('?', '', $this->removeSpace($value)) . ".png",
                ]

            ]);
        }





        //Lesson 30 Unit 5 Listening Practice <listening_and_choosing_pics_one>


        $images = $ImageDomain . "Grade_4/Lesson_30/Listening/";
        $audios = $AudioDomain . "Grade_4/Lesson_30/Listening/";

        $contents = [
            ['noodle-soup', 'sushi', 'bacon-egg'],
            ['noodle-soup', 'bibimbap', 'bacon-egg'],
            ['bibimbap', 'sushi', 'bacon-egg'],
            ['noodle-soup', 'bibimbap', 'phat-thai'],
            ['noodle-soup', 'sushi', 'bacon-egg'],
            ['pizza', 'sushi', 'noodle-soup'],
        ];


        $ans = [
            'noodle-soup',
            'bibimbap',
            'sushi',
            'phat-thai',
            'bacon-egg',
            'pizza'
        ];

        foreach ($ans as $key => $value) {

            foreach ($contents[$key] as $j => $val) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 1000,
                        'round' => $key + 1,
                        'q_image' => $images . $val . ".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1000,
                    'round' => $key + 1,
                    'q_audio' => $audios . $value . ".mp3"
                ]
            ]);
        }


        //Lesson 30 Unit 6 Reading Passage <Reading_passage>



        $images = $ImageDomain . "Grade_4/Lesson_30/Reading_passage/";
        $audios = $AudioDomain . "Grade_4/Lesson_30/Reading_passage/";

        $para = "Rekai loved to eat pancakes more than anything in the world. He loved pancakes so much. He simply refused to eat any other food! Rekai’s mom said, “Eat some good food. Have some veggies and fruit! And don’t forget water and juice.” But, Rekai shook his head and said, “No, I don’t want to! Only pancakes will do.” Then, his mom had an idea. “I know how to get Rekai to eat healthy food!” she said.
        She mixed up a batch of some extra special pancakes with a surprise ingredient. Mom watched as he gobbled them up and she was very pleased. Softly, she giggled and thought, this is great. He has no clue what he has just eaten! \n Then, one day, Rekai caught mom adding butternuts to his pancakes and he was very surprised. “Your secret ingredient is a vegetable?” he cried \n To this day, he enjoys eating his pancakes, and every day mom adds many yummy surprises.
        Sometimes, she adds spinach. Sometimes, she adds carrots. Sometimes, she adds strawberries, or even apples.";

        $given_q = [
            ["What did Rekai’s mom add to his pancake?", "A secret ingredient"],
            ["Did Rekai love the pancake with a secret ingredient?", "Yes, he does"],
            ["What was the secret ingredient?", "Butternut"],
            ["Does Rekai love eating veggies now?", "Yes, he does"],
            ["What did Rekai’s mom say?", "To eat more veggies"],
            ["What did Rekai love eating?", "Pancakes"],

        ];

        $given_audio = [
            "mom-pancake.mp3",
            "love-secret.mp3",
            "secret-ingredient.mp3",
            "veggies.mp3",
            "mom-say.mp3",
            "love-eating.mp3",
        ];

        $paraName = "the-boy-only-ate-pancake.mp3";

        $given_answer = [
            ['Milk', 'A secret ingredient', 'An extra ingredient'],
            ['Yes, he does', "No, he doesn't"],
            ['Broccoli', 'Carrot', 'Butternut'],
            ['Yes, he does', "No, he doesn't"],
            ['To eat more pancake', 'To eat more veggies', 'To eat chocolate more'],
            ['chocolate', 'Carrot', 'Pancakes'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 1001,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 1001,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 1001,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "The boy only ate pancake",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }



        // Lesson 30 Unit - 7 Speaking Topic <Speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_30/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_30/Speaking_Topic/";

        $content = "I like to eat _____, and _____ because _____ .";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1002,
                'round' => 1,
                'q_content' => $content,
                'q_audio' => $audios . "Talk-about-your-favorite-food.mp3",
                'q_image' => $images . "plate.png",
            ]

        ]);


        /////////////////////////////////////////// End of Lesson 30 ///////////////////////////////////////////


        /////////////////////////////////////////// Lesson 31 ///////////////////////////////////////////////

        // Video => Game id 1003

        // Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)


        $contents = [
            "meat-fish", "noodles", "potato", "prawns", "rice", "vegetables", "beans", "bread", "fruits", "eggs"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_31/Listen_and_Repeat/";
        $img = $ImageDomain . "Grade_4/Lesson_31/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1004,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }

        // Unit - 2 Listen and Repeat , Sub - 2 => Game id 1005

        // Lesson 31 Unit - 3 Practice <look_and_choose>

        $audio = $AudioDomain . "Grade_4/Lesson_31/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_31/Practice/";


        $given_ans = [
            ['growth', 'energy', 'health'],
            ['growth', 'energy', 'health'],
            ['growth', 'energy', 'health'],
            ['growth', 'energy', 'health'],
            ['growth', 'energy', 'health'],
            ['growth', 'energy', 'health'],
            ['growth', 'energy', 'health'],
            ['growth', 'energy', 'health'],
            ['growth', 'energy', 'health'],
        ];

        $ans = [
            "growth", "health", "health", "energy", "growth", "growth", "growth", "energy", "energy",
        ];

        $contents = [
            "fish", "fruit", "vegetable", "bread", "egg", "beef", "seed", "potato", "rice"
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1006,
                    'round' => $key + 1,
                    'q_image' => $img . $this->removeSpace($contents[$key]) . ".png",
                    'q_content' => "Food for " . $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1006,
                    'round' => $key + 1,
                    'q_content' => "Food for " . $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1006,
                    'round' => $key + 1,
                    'q_content' => "Food for " . $ga[2],
                    'a_content' => $ga[2] == $ans[$key] ? true : false
                ]
            ]);
        }



        // Lesson 31 Unit 4 Speaking Practice <Speaking_and_recording>


        $contents = [
            'fish', 'egg', 'bread', 'vegetables', 'noodle',
        ];

        $Question_contents = [
            "What is your favorite food? \n ____ \n Why? \n ____.",
            "What is your favorite food? \n ____ \n Why? \n ____.",
            "What is your favorite food? \n ____ \n Why? \n ____.",
            "What is your favorite food? \n ____ \n Why? \n ____.",
            "What is your favorite food? \n ____ \n Why? \n ____.",
        ];

        $eg1007 = [
            "A: What's your favorite food? \nB: My favourite food is salmon fish. \nA: Why? \nB: They are good for growth.", null, null, null, null
        ];
        // $q_instruction = [
        //     'fish','egg','bread','vegetables','noodle',
        // ];
        $q_instruction = "what-is-your-favorite-food-why.mp3";


        $images = $ImageDomain . "Grade_4/Lesson_31/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_31/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 1007,
                    'round' => $key + 1,
                    "a_content" => $eg1007[$key],
                    'round_instruction' => $audios . $q_instruction,
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images . str_replace('?', '', $this->removeSpace($value)) . ".png",
                ]

            ]);
        }


        //Lesson 31 Unit 5 Listen Practice <listening_choosing_answer>

        $questions = [
            "Which food are good for energy",
            "Which food shouldn't you eat",
            "How many groups of food should you include in your meal",
            "Which food are good for your health",
            "Which food are good for growth",
        ];

        $given_ques = [
            ['Rice and eggs', 'Veggies and fruit', 'Meet and fish'],
            ['Veggies', 'Sweet food', 'Oily Food'],
            ['2', '3', '4'],
            ['Veggies', 'Sweet food', 'Oily Food'],
            ['Rice and eggs', 'Veggies and fruit', 'Meet and fish'],
        ];

        $ans = [
            "Rice and eggs", "Oily Food", "3", "Veggies", "Meet and fish"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_31/Listening/";
        $img = $ImageDomain . "Grade_4/Lesson_31/Listening/";

        $story = "Anna-daily";

        foreach ($questions as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1008,
                    'round' => $key + 1,
                    // 'q_audio' => $audio.$ans[$key].".mp3",
                    'q_audio' => $audio . $story . ".mp3",
                    'q_content' => $given_ques[$key][0],
                    'q_conver'  => $val . "?",
                    'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
                ]
            ]);


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1008,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][1],
                    'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1008,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][2],
                    'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
                ]
            ]);
        }



        // Lesson 31 Unit - 6 Speaking Topic <Speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_31/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_31/Speaking_Topic/";

        $content = "Which food do you like? \n Which foods are good for growth? \n Which foods are good for energy? \n Which food are good for your health? ";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1009,
                'round' => 1,
                'q_content' => $content,
                'q_audio' => $audios . "food-for-health.mp3",
                'q_image' => $images . "girl-eat.png",
            ]

        ]);


        ////////////////////////////////////// End of Lesson 31 ////////////////////////////////////////////////////



        //////////////////////////////////////// Lesson 32 //////////////////////////////////////////////////

        // Unit 1 Video -Game id (1010)

        // Lesson 9 Listen and Repeat (Reading_Carousel)

        $contents = [
            "banana", "cauliflower", "cereal", "chocolate", "corn",
            "mango", "peanuts", "pudding", "pumpkin", "watermelon"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_32/Listen_and_Repeat/";
        $img = $ImageDomain . "Grade_4/Lesson_32/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1011,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }




        // Lesson 32 Unit - 3 Spelling Game <rearrange_with_audio>

        $given_ans = [
            ['U', 'L', 'I', 'F', 'L', 'E', 'R', 'O', 'W', 'A', 'C'],
            ['O', 'C', 'H', 'C', 'L', 'T', 'E', 'A', 'O'],
            ['N', 'C', 'R', 'O'],
            ['O', 'M', 'G', 'N', 'A'],
            ['S', 'E', 'A', 'P', 'N', 'U', 'T'],
            ['U', 'P', 'D', 'I', 'N', 'G', 'D'],
            ['K', 'I', 'N', 'P', 'M', 'U', 'P'],
            ['L', 'O', 'N', 'E', 'E', 'R', 'W', 'A', 'M', 'T'],
            ['E', 'C', 'E', 'A', 'R', 'L'],
            ['A', 'N', 'A', 'A', 'B', 'N'],
        ];

        $img = $ImageDomain . "Grade_4/Lesson_32/Spelling_Game/";
        $audio = $AudioDomain . "Grade_4/Lesson_32/Spelling_Game/";

        $answers = [
            'CAULIFLOWER', 'CHOCOLATE', 'CORN', 'MANGO', 'PEANUTS',
            'PUDDING', 'PUMPKIN', 'WATERMELON', 'CEREAL', 'BANANA'
        ];


        for ($i = 0; $i < count($given_ans); $i++) {

            foreach ($given_ans[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 1012,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1012,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                    // 'q_content' => $questions[$i],
                    'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }




        // Lesson 32 Unit - 4 Practice <look_and_choose>

        $audio = $AudioDomain . "Grade_4/Lesson_32/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_32/Practice/";


        // $given_ans = [
        //     ['Watermelon', 'Pumpkin', 'Potato'],
        //     ['Rice', 'Pudding', 'Egg'],
        //     ['Rice', 'Pudding', 'Egg'],
        //     ['Banana', 'Carrot', 'Corn'],
        //     ['Banana', 'Cauliflower', 'Watermelon'],
        //     ['Banana', 'Cauliflower', 'Watermelon'],
        // ];

        // $ans = [
        //     "Pumpkin", "Rice", "Egg", "Carrot", "Banana", "Watermelon"
        // ];

        // foreach ($given_ans as $key => $ga) {


        //     DB::table('ans_n_ques')->insert([
        //         [
        //             'game_id' => 1010,
        //             'round' => $key + 1,
        //             'q_image' => $img . $this->removeSpace($ans[$key]) . ".png",
        //             'q_content' =>  $ga[0],
        //             'a_content' => $ga[0] == $ans[$key] ? true : false
        //         ]
        //     ]);
        //     DB::table('ans_n_ques')->insert([
        //         [
        //             'game_id' => 1010,
        //             'round' => $key + 1,
        //             'q_content' =>  $ga[1],
        //             'a_content' => $ga[1] == $ans[$key] ? true : false
        //         ]
        //     ]);

        //     DB::table('ans_n_ques')->insert([
        //         [
        //             'game_id' => 1010,
        //             'round' => $key + 1,
        //             'q_content' =>  $ga[2],
        //             'a_content' => $ga[2] == $ans[$key] ? true : false
        //         ]
        //     ]);
        // }

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 1013, "q_conver" => "I am green outside. I am red inside. \nI am good for your health.", "q_content" => "Banana", "a_content" => 0],
            ['round' => 1, 'game_id' => 1013, "q_conver" => null, "q_content" => "Cauliflower", "a_content" => 0],
            ['round' => 1, 'game_id' => 1013, "q_conver" => null, "q_content" => "Watermelon", "a_content" => 1],

            ['round' => 2, 'game_id' => 1013, "q_conver" => "I am yellow outside. I am sweet. \nI am good for your health.", "q_content" => "Banana", "a_content" => 1],
            ['round' => 2, 'game_id' => 1013, "q_conver" => null, "q_content" => "Cauliflower", "a_content" => 0],
            ['round' => 2, 'game_id' => 1013, "q_conver" => null, "q_content" => "Watermelon", "a_content" => 0],

            ['round' => 3, 'game_id' => 1013, "q_conver" => "I am green outside. I am yellow outside. \nI am good for your health.", "q_content" => "Watermelon", "a_content" => 0],
            ['round' => 3, 'game_id' => 1013, "q_conver" => null, "q_content" => "Pumpkin", "a_content" => 1],
            ['round' => 3, 'game_id' => 1013, "q_conver" => null, "q_content" => "Large", "a_content" => 0],

            ['round' => 4, 'game_id' => 1013, "q_conver" => "I am the main meal. I am white. You eat it every day. \nI am good for your energy.", "q_content" => "Rice", "a_content" => 1],
            ['round' => 4, 'game_id' => 1013, "q_conver" => null, "q_content" => "Pudding", "a_content" => 0],
            ['round' => 4, 'game_id' => 1013, "q_conver" => null, "q_content" => "Egg", "a_content" => 0],

            ['round' => 5, 'game_id' => 1013, "q_conver" => "I am round and oval. I am brown. I am white. \nI am good for your growth.", "q_content" => "Rice", "a_content" => 0],
            ['round' => 5, 'game_id' => 1013, "q_conver" => null, "q_content" => "Pudding", "a_content" => 0],
            ['round' => 5, 'game_id' => 1013, "q_conver" => null, "q_content" => "Egg", "a_content" => 1],

            ['round' => 6, 'game_id' => 1013, "q_conver" => "I am orange. I am tall. \nI am good for your health.", "q_content" => "Banana", "a_content" => 0],
            ['round' => 6, 'game_id' => 1013, "q_conver" => null, "q_content" => "Carrot", "a_content" => 1],
            ['round' => 6, 'game_id' => 1013, "q_conver" => null, "q_content" => "Corn", "a_content" => 0],

        ]);

        // Lesson 32 Unit 5 Speaking Practice <speaking_and_recording>

        $contents = [
            "birthday-cake", "milk", "noodle-soup", "banana", "pudding", "hamburger"
        ];

        $Question_contents = [
            "Shopkeeper: Can I help you? \n Customer: I'd like ----, please. \n Shopkeeper: Ok, here you are. \n Customer: How much is it? \n Shopkeeper: It's ----.\n  Customer: Thank you.\n Shopkeeper: You're welcome.",
            "Shopkeeper: Can I help you? \n Customer: I'd like ----, please. \n Shopkeeper: Ok, here you are. \n Customer: How much is it? \n Shopkeeper: It's ----.\n  Customer: Thank you.\n Shopkeeper: You're welcome.",
            "Shopkeeper: Can I help you? \n Customer: I'd like ----, please. \n Shopkeeper: Ok, here you are. \n Customer: How much is it? \n Shopkeeper: It's ----.\n  Customer: Thank you.\n Shopkeeper: You're welcome.",
            "Shopkeeper: Can I help you? \n Customer: I'd like ----, please. \n Shopkeeper: Ok, here you are. \n Customer: How much is it? \n Shopkeeper: It's ----.\n  Customer: Thank you.\n Shopkeeper: You're welcome.",
            "Shopkeeper: Can I help you? \n Customer: I'd like ----, please. \n Shopkeeper: Ok, here you are. \n Customer: How much is it? \n Shopkeeper: It's ----.\n  Customer: Thank you.\n Shopkeeper: You're welcome.",
            "Shopkeeper: Can I help you? \n Customer: I'd like ----, please. \n Shopkeeper: Ok, here you are. \n Customer: How much is it? \n Shopkeeper: It's ----.\n  Customer: Thank you.\n Shopkeeper: You're welcome.",
        ];


        $eg1014 = [
            "Shopkeeper: Can I help you?\nCustomer: I'd like a chocolate cake, please.\nShopkeeper: Ok, here you are.\nCustomer: How much is it?\nShopkeeper: It's 1500 kyats.\nCustomer: Thank you.\nShopkeeper: You're welcome.", null, null, null, null, null
        ];


        $images = $ImageDomain . "Grade_4/Lesson_32/Speaking_Practice/";
        $audios = $AudioDomain . "Grade_4/Lesson_32/Speaking_Practice/";

        foreach ($contents as $key => $value) {


            $data = [
                'game_id' => 1014,
                'round' => $key + 1,
                "a_content" => $eg1014[$key],
                // 'round_instruction' => $audios."can-i-help-you.mp3",
                'q_content' => $Question_contents[$key],
                // 'q_audio' => $audio.$this->removeSpace($value).".mp3",
                'q_image' => $images . $this->removeSpace($value) . ".png",
            ];
            if ($key == 0) {
                $data['round_instruction'] = $audios . "example-instruction.mp3";
            }

            DB::table('ans_n_ques')->insert($data);
        }



        //Lesson 32 Unit 5 Listen Practice <listening_choosing_answer>

        $questions = [
            "What kind of cake does he buy",
            "How much is the cake",
            "How much is the milk",
            "What else does he buy",
            "Where is Tom"
        ];

        $given_ques = [
            ['Chocolate', 'Cheese cake', 'Vanilla cake'],
            ['$ 30', '$ 40', '$ 50'],
            ['$ 10', '$ 20', '$ 30'],
            ['Orange', 'Tea', 'Milk'],
            ['At the library', 'At the store', 'At the pharmacy'],
        ];

        $ans = [
            "Cheese cake", "$ 50", "$ 20", "Milk", "At the store"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_32/Listening_Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_32/Listening_Practice/";

        $story = "Anna-daily";

        foreach ($questions as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1015,
                    'round' => $key + 1,
                    'q_audio' => $audio . "What-can-I-help-you.mp3",
                    // 'q_audio' => $audio.$story.".mp3",
                    'q_content' => $given_ques[$key][0],
                    'q_conver'  => $val . "?",
                    'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
                ]
            ]);



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1015,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][1],
                    'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1015,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][2],
                    'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
                ]
            ]);
        }






        // Lesson 32  Unit 7 (Reading Practice) < reading_passage >


        $images = $ImageDomain . "Grade_4/Lesson_32/Reading_Passage/";
        $audios = $AudioDomain . "Grade_4/Lesson_32/Reading_Passage/";

        $para = "An old woman lives here. An old man and an old woman. They don’t have children. The old woman’s in the kitchen. She’s making something. It’s a gingerbread man. He has a head. He has arms and legs. He has two eyes, a mouth, and a nose. The old woman is happy.  “You’re a little boy,” she says. “My little boy!” “In you go,” says the old woman. \n  But soon, the old woman hears a little voice. It’s coming from the oven.“Open the door!” said the voice. “I want to come out!” The old woman opens the oven door. And the gingerbread man jumps out. “Oh!” says the old woman. “Stop!” said that old woman. But, the gingerbread man doesn’t stop. He runs across the kitchen and out of the door";

        $given_q = [
            ["There was an old man and an old woman", "True"],
            ["They have four children.", "False"],
            ["The old woman is in the dining room.", "False"],
            ["The old man is making a gingerbread man", "False"],
            ["The gingerbread man has one head.", "True"],
            ["The gingerbread man comes out of the oven on his own.", "True"],

        ];

        $given_audio = [
            "old-man-woman.mp3",
            "four-children.mp3",
            "in-dining-room.mp3",
            "gingerbread-man.mp3",
            "one-head.mp3",
            "comes-out.mp3",
        ];

        $paraName = "The-Gingerbread-Man.mp3";

        $given_answer = [
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 1016,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 1016,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 1016,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "The Gingerbread Man",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }



        /// Lesson 32 Unit 8 Speaking Topic <speaking_and_recording>

        $images = $ImageDomain . "Grade_4/Lesson_32/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_32/Speaking_Topic/";

        $content = "At my school canteen, I can buy ___, ___, and ___. \n ___ is good for ___. \n ___ is good for ___. \n ___ is good for ___. \n My favorite food is ___.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1017,
                'round' => 1,
                'q_content' => $content,
                'round_instruction' => $audios . "what-is-ur-school-canteen.mp3",
                // 'q_audio' => $audio."At-my-school-canteen.mp3",
                'q_image' => $images . "At-my-school-canteen.png",
            ]

        ]);




        // Lesson 32 Unit 9  Writing Topic <writing_topic>


        $images = $ImageDomain . "Grade_4/Lesson_32/Writing_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_32/Writing_Topic/";

        $sample_content = "At my school canteen, I can buy bread, fried rice, and fruit. My school canteen is big. Bread is good for growth. Rice is good for energy. Fruit is good for your health. My favorite food is fruit.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1018,
                'a_content' => $sample_content,
                'q_content' => $images . "School-canteen" . ".png",
            ],
        ]);


        //////////////////////////////////////////// End of Lesson 32 /////////////////////////////////////////////////


        /////////////////////////////////// Lesson 33 /////////////////////////////////////



        // Unit - 1 Video Lesson
        // Game_id - 1019



        // Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)


        $contents = [
            "Art gallery", "Special food", "Traditional music", "Football team", "Fireworks",
            "Music festival", "Park", "Birthday party", "Charity fair"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_33/Listen_and_Repeat_1/";
        $img = $ImageDomain . "Grade_4/Lesson_33/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1020,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }


        // Lesson 33 Unit 2 Sub - 2 Listen and Repeat 2 <reading_conversation> (single)

        $chars = [
            ['boy', 'dad'],
            ['boy'],
            ['boy'],
            ['boy'],
            ['boy'],
            ['boy', 'girl'],

        ];


        $convers = [
            ["boy-dad.png", null],
            ["boy-bro.png", null],
            ["boy-fire.png", null],
            ['boy-festival.png', null],
            ["boy-birthday.png", null],
            ["boy-art.png", null]
        ];

        $convers_audio = [
            ['listen.mp3', null],
            ['football.mp3', null],
            ['firework.mp3', null],
            ['festival.mp3', null],
            ['birthday.mp3', null],
            ['art-gallery.mp3', null],
        ];

        $audio = $AudioDomain . "Grade_4/Lesson_33/Listen_and_Repeat_2/";
        $img = $ImageDomain . "Grade_4/Lesson_33/Listen_and_Repeat_2/";


        foreach ($chars as $key => $char) {

            foreach ($char as $k => $v) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 1021,
                        'round' => $key + 2,
                        'a_image' => $img . $v . ".gif",
                        'a_audio' => $convers_audio[$key][$k] ? $audio . $convers_audio[$key][$k] : null,
                        'a_conver' => $convers[$key][$k] ?  $img . $convers[$key][$k] : null,
                        "background" => $img . "bg" . $key + 1 . ".png"
                    ]
                ]);
            }
        }

        //////////////////////////888888888888888888888/////////////////////////

        //     $chars = [
        //         ['boy','girl'],
        //         ['boy','girl'],
        //     ];


        //     $convers = [
        //         ["What-food","pizza"],
        //         ['puri', null],
        //     ];

        //     $convers_audio = [
        //         ["what-ur-favorite-food", "noodle"],
        //         ['Why', "good-for-energy"],
        //     ];

        //     $audio = $AudioDomain."Grade_4/Lesson_30/Listen_and_Repeat_2/";
        //     $img = $ImageDomain."Grade_4/Lesson_30/Listen_and_Repeat_2/";


        //     foreach ($chars as $key => $char) {

        //     foreach ($char as $k => $v) {

        //             DB::table('ans_n_ques')->insert([
        //                 [
        //                     'game_id' => 995,
        //                     'round' => $key + 1,
        //                     'a_image' => $img.$v.".gif",
        //                     'a_audio' => $convers_audio[$key][$k] ? $audio.$convers_audio[$key][$k].".mp3" : null,
        //                     'a_conver' => $convers[$key][$k] ? $img.$convers[$key][$k].".png" : null,
        //                     "background" => $img."bg.png"
        //                 ]
        //             ]);

        //     }
        // }
        //////////////////////////888888888888888888888/////////////////////////


        // Lesson 33  Unit - 3 Practice <Matching_column>

        // For round - 1 (without Image)

        // $audio = $AudioDomain."Grade_4/Lesson_33/Practice/";
        // $img = $ImageDomain."Grade_4/Lesson_33/Practice/";


        // $contents = [
        //     ['Phone','Watch','Help','Dust','Study'],
        //     ['Play','Visit','Listen','Prepare','Enjoy'],
        // ];

        // $rightContents = [
        //     ['Phoned','Watched','Helped','Dusted','Studied'],
        //     ['Played','Visited','Listened','Prepared','Enjoyed'],
        // ];



        // for ($i = 0; $i < count($contents); $i++) {

        //     foreach ($contents[$i] as $q) {

        //         DB::table('ans_n_ques')->insert([
        //             [
        //                 'game_id' => 1019,
        //                 'round' => $i + 1,
        //                 'q_content' => $q,
        //                 'q_image' => $q,
        //                 'q_audio' => $audio . $this->removeSpace(strtolower($q)) . ".mp3",
        //             ]
        //         ]);
        //     }


        //     foreach ($rightContents[$i] as $k => $q) {
        //         DB::table('ans_n_ques')->insert([
        //             [
        //                 'game_id' => 1019,
        //                 'round' => $i + 1,
        //                 'q_content' =>  $this->removeSpace(strtolower($contents[$i][$k])),
        //                 // 'q_image' => $img . $this->removeSpace(strtolower($q)) . ".png",
        //                 'q_image' =>$q ,
        //                 'q_audio' => $audio .  $this->removeSpace(strtolower($q)) . ".mp3",
        //             ]
        //         ]);
        //     }
        // }


        // For round - 2 (with Images) <matching>


        $audio = $AudioDomain . "Grade_4/Lesson_33/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_33/Practice/";


        $contents = [
            ['Visit the art gallery', 'Watch TV', 'Studied English', 'Listen to music', 'Visit the beach'],
            ['Color the pictures', 'Listen to music', 'played badminton', 'Dust my bedroom', 'Helped my mother'],
        ];



        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 1022,
                        'round' => $i + 3,
                        'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $audio . $this->removeSpace(strtolower($q)) . ".mp3",
                    ]
                ]);
            }


            foreach ($contents[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 1022,
                        'round' => $i + 3,
                        'q_content' => $q,
                        'q_image' => $img . $this->removeSpace(strtolower($q)) . ".png",
                        'q_audio' => $audio .  $this->removeSpace(strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



        // Lesson 33 Unit 4 Speaking Practice <Speaking_and_recording>


        $contents = [
            'public-party', 'badminton', 'listening', 'color', 'art', 'football'
        ];

        $Question_contents = [
            "What did you do last week? \n ____ .",
            "What did you do last week? \n ____ .",
            "What did you do last week? \n ____ .",
            "What did you do last week? \n ____ .",
            "What did you do last week? \n ____ .",
            "What did you do last week? \n ____ .",
        ];

        $eg1023 = [
            "A: What did you do last week?\nB: I visited the music festival.", null, null, null, null, null
        ];

        // $q_instruction = [
        //     'public-party','badminton','listening','color','art','football'
        // ];
        $q_instruction = "last-week.mp3";


        $images = $ImageDomain . "Grade_4/Lesson_33/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_33/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 1023,
                    'round' => $key + 1,
                    'a_content' => $eg1023[$key],
                    'round_instruction' => $audios . $q_instruction,
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images . str_replace('?', '', $this->removeSpace($value)) . ".png",
                ]

            ]);
        }





        // Lesson 33 Unit 5 Listen and Practice <listening_choosing_answer>

        $questions = [
            "What did she do in the afternoon",
            "Where did she visit in the evening",
            "Was she happy?",
            "Which lesson did she study",
            "What did anna do in the morning",
        ];

        $given_ques = [
            ['Helped her mother', 'Watched TV', 'Visited the music festival'],
            ['Helped her mother', 'Watched TV', 'Visited the music festival'],
            ["Yes,she was", "No,she wasn't"],
            ['History', 'Science', 'English'],
            ['Helped her mother', 'Watched TV', 'Visited the music festival'],
        ];

        $ans = [
            "Watched TV", "Visited the music festival", "Yes,she was", "English", "Helped her mother"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_33/Listening_Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_33/Listening_Practice/";

        $story = "Anna-daily";

        foreach ($questions as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1024,
                    'round' => $key + 1,
                    'q_audio' => $audio . "SubBlock_Hi-I-am-Anna-I-will-tell-you.mp3",
                    // 'q_audio' => $audio.$story.".mp3",
                    'q_content' => $given_ques[$key][0],
                    'q_conver'  => $val . "?",
                    'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
                ]
            ]);



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1024,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][1],
                    'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
                ]
            ]);

            if (isset($given_ques[$key][2])) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 1024,
                        'round'  => $key +  1,
                        'q_content' => $given_ques[$key][2],
                        'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
                    ]
                ]);
            }
        }




        /// Lesson 33 Unit 6 Speaking Topic <speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_33/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_33/Speaking_Topic/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1025,
                'round' => 1,
                'q_content' => "What did you do yesterday? \n What did you do last week?\n Talk about it.",
                'q_audio' => $audios . "what-did-u-do-yesterday.mp3",
                'q_image' => $images . "green-starfish_round.png",
            ]

        ]);



        // Lesson 33 Unit 7 Writing <writing_topic>


        $images = $ImageDomain . "Grade_4/Lesson_33/Writing_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_33/Writing_Topic/";

        $sample_content = "Last week, I helped my mother in the morning. \n Then, I colored the pictures and listened to music in the afternoon. \n I played badminton with my friends in the evening.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1026,
                'q_content' => $images . "someImg" . ".png",
                'a_content' => $sample_content
            ],
        ]);




        ////////////////////////////////////////// End of Lesson 33 ///////////////////////////////////////////////






        ////////////////////////////////////////// Lesson 34 /////////////////////////////////////////////



        // Lesson -34 Unit - 1 Listen and Repeat , Sub - 1 (Reading_carousel)



        $contents = [
            "he", "help-mon-yesterday", "badminton-yesterday", "art-gallery-last-weekend",
            "watch-tv-last-night", "I", "she", "they",
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_34/Listen_and_Repeat/";
        $img = $ImageDomain . "Grade_4/Lesson_34/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1027,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }




        // Lesson 34 Unit 2 Speaking Practice <Speaking_and_recording>

        $contents = [
            'call-phone', 'watch-tv', 'football', 'paint', 'reading', 'cooking'
        ];

        $Question_contents = [
            "What did she do yesterday? \n ____ .",
            "What did they do last night? \n ____.",
            "What did he do last weekend? \n ____ .",
            "What did you do yesterday? \n ____ .",
            "What did they do yesterday? \n ____ .",
            "What did they do last weekend? \n ____ .",
        ];

        // $q_instruction = [
        //     'public-party','badminton','listening','color','art','football'
        // ];

        $eg1025 = [
            "Example \nA: What did you do yesterday? \nB: I dusted the room yesterday.", null, null, null, null, null
        ];

        $images = $ImageDomain . "Grade_4/Lesson_34/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_34/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 1028,
                    'round' => $key + 1,
                    "a_content" => $eg1025[$key],
                    'round_instruction' => $audios . $contents[$key] . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images . str_replace('?', '', $this->removeSpace($value)) . ".png",
                ]

            ]);
        }




        // Lesson 34 Unit 3 Listen and Practice <listening_choosing_answer>

        $questions = [
            "Where did Anna go last weekend",
            "Who did she go there with",
            "What did Zoe do last weekend",
            "What did Zoe’s mum cook for her",
            "Did you study English",
        ];

        $given_ques = [
            ['The Zoo', 'The Shopping Mall', 'The Playground'],
            ['With her parents', 'With her sisters', 'With her friends'],
            ['Went Shopping', 'Went to the zoo', 'Stayed at home'],
            ['Fried rice', 'Steam rice', 'Chicken rice'],
            ["Yes,She did", "No,She didn't"],
        ];

        $ans = [
            "The Playground", "With her sisters", "Stayed at home", "Chicken rice", "Yes,She did"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_34/Listening_Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_34/Listening_Practice/";

        $story = "Anna-zoe";

        foreach ($questions as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1029,
                    'round' => $key + 1,
                    // 'q_audio' => $audio.$this->removeSpace($ans[$key]).".mp3",
                    'q_audio' => $audio . $story . ".mp3",
                    'q_content' => $given_ques[$key][0],
                    'q_conver'  => $val . "?",
                    'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
                ]
            ]);



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1029,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][1],
                    'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
                ]
            ]);

            if (isset($given_ques[$key][2])) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 1029,
                        'round'  => $key +  1,
                        'q_content' => $given_ques[$key][2],
                        'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
                    ]
                ]);
            }
        }


        // Lesson 34 Unit 4 Reading Passage


        $images = $ImageDomain . "Grade_4/Lesson_34/Reading_passage/";
        $audios = $AudioDomain . "Grade_4/Lesson_34/Reading_passage/";

        $para = "How are you? I want to tell you about my last weekend. I visited to Singapore last week. I stayed at my aunt’s house for 3 days. She was very nice and friendly. She prepared special meals for us. How nice! On Saturday, I visited the amusement park with my parents. In the evening, I played badminton with my cousin, Brayan, my aunt’s son. On Sunday, we went shopping the whole day. On Monday morning, we went to the restaurant and ate chicken rice. It was so yummy! I had a wonderful week. Tell me about your weekend, Max.";

        $given_q = [
            ["Where did Max go?", "Singapore"],
            ["Where did he stay there?", "At his aunt's"],
            ["What did she do for Max?", "Prepared a meal"],
            ["Where did they visit on Saturday morning?", "Amusement Park"],
            ["What did he do on Saturday evening?", "Played badminton"],
            ["What did he do on Sunday?", "Went shopping"],

        ];

        $given_audio = [
            "max-go.mp3",
            "stay-there.mp3",
            "she-do-for-max.mp3",
            "saturday-morning.mp3",
            "saturday-evening.mp3",
            "sunday.mp3",
        ];

        $paraName = "dear-max.mp3";

        $given_answer = [
            ['Thailand', 'China', 'Singapore'],
            ['At a hotel', "At a motel", "At his aunt's"],
            ['Prepared a meal', 'Drove them somewhere', 'Bought presents'],
            ['Garden', "Amusement Park", "Shopping Mall"],
            ['Listened to Music', 'Played badminton', 'Visited the zoo'],
            ['Went shopping', 'Dusted his bedroom', 'visited the zoo'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 1030,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 1030,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 1030,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Dear Max",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }





        /// Unit 5 Speaking Topic <speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_34/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_34/Speaking_Topic/";

        $question = "Complete the following sentences with \n past tense of the verbs. Talk about them. \n \n I ___(phone) my grandmother.  I ___(play) badminton with Thant Zin. \n I ___ (walk) to school with Yar Zar.   I ___ (watch) TV at night. \n I ___ (dust) my bedroom.   I ___ (visit) the zoo \n I ___ (study) English at night.";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1031,
                'round' => 1,
                // 'a_conver' => $images . "image.png",
                'q_content' => $question,
                'q_audio' => $audios . "complete-following-sentence.mp3",
                'q_image' => $images . "red_starfish_round.png",
            ]

        ]);
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1031,
                'round' => 2,
                'q_content' => "What did you do on Monday?\n What did you do on Tuesday?\n What did you do on Wednesday?\n What did you do on Thursday?\n  What did you do on Friday?\n What did you do on Saturday\n What did you do on Sunday",
                // 'q_audio' => $audio."what-do-u-do-this-week.mp3",
                'q_image' => $images . "green_starfish_round.png",
            ]

        ]);




        /////////////////////////////////////////// End of Lesson 34 ///////////////////////////////////////



        ///////////////////////////////////////////// Lesson 35 ///////////////////////////////////////////


        // Unit - 1 Listen and Repeat  (Reading_carousel)


        $contents = [
            "bus-stop", "car-park", "dinning-table", "fast-food", "ice-cream", "living-room",
            "lunch-box", "phone", "orange-juice", "pencil-case", "shopping-center", "pool",
            "message"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_35/Listen_and_Repeat/";
        $img = $ImageDomain . "Grade_4/Lesson_35/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1032,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }



        // Lesson 35 Unit - 2 Spelling Game <rearrange_with_audio>

        $v = [
            ['INDGNINBETAL'],
            ['NGOPHSIPCRENTE'],
            ['TASFDOOF'],
            ['CNIEAPLSEC'],
            ['TTXESEMEGAS'],
            ['AGNEROICUEJ'],
        ];


        $given_ans = array_map(function ($arr) {
            return str_split($arr[0]);
        }, $v);




        $img = $ImageDomain . "Grade_4/Lesson_35/Spelling_Game/";
        $audio = $AudioDomain . "Grade_4/Lesson_35/Spelling_Game/";

        $answers = [
            'DINNING TABLE', 'SHOPPING CENTRE', 'FAST FOOD', 'PENCIL CASE', 'TEXT MESSAGE', 'ORANGE JUICE'
        ];


        for ($i = 0; $i < count($given_ans); $i++) {

            foreach ($given_ans[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 1033,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1033,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($this->removeSpace($answers[$i]))) . ".png",
                    // 'q_content' => $questions[$i],
                    'a_audio' => $audio . ucfirst(strtolower($this->removeSpace($answers[$i]))) . ".mp3",
                    'a_content' => str_replace(' ', '', $answers[$i]),
                ]
            ]);
        }




        /// Lesson 35 Unit -3 Practice 1 <matching_columns>


        // For round - 1 (without Image)

        $audio = $AudioDomain . "Grade_4/Lesson_35/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_35/Practice/";


        $contents = [
            ['Write', 'Read', 'Ride', 'Wear', 'Go'],
        ];

        $rightContents = [
            ['Wrote', 'Read', 'Rode', 'Wore', 'Went'],
        ];



        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 1034,
                        // 'round' => $i + 1,
                        'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $audio . $this->removeSpace(strtolower($q)) . ".mp3",
                    ]
                ]);
            }


            foreach ($rightContents[$i] as $k => $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 1034,
                        // 'round' => $i + 1,
                        'q_content' =>  $this->removeSpace(ucfirst($contents[$i][$k])),
                        // 'q_image' => $img . $this->removeSpace(strtolower($q)) . ".png",
                        'q_image' => $q,
                        'q_audio' => $audio .  $this->removeSpace(strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



        // Lesson 35 Unit - 4 Practice <fill_in_the_blanks_three>


        $questions = [
            "Sue _________ a letter to her grandmother last night.",
            "Jack _________ a horse with his dad last weekend.",
            "He ___________ a shirt and pants yesterday.",
            "Anna ____________ a lot of books last night.",
            "I __________ a lot of ice-creams yesterday.",
            "I ___________ to the shopping mall yesterday.",
        ];

        $given_ques = [
            ['Rode', 'Spoke', 'Wrote'],
            ['Rode', 'Wore', 'Spoke'],
            ['Wore', 'Spoke', 'Wrote'],
            ['Wore', 'Read', 'Spoke',],
            ['Ate', 'Rode', 'Wrote',],
            ['Went', 'Read', 'Rode',],

        ];

        $full_ans = [
            "Sue Wrote a letter to her grandmother last night.",
            "Jack Rode a horse with his dad last weekend.",
            "He Wore a shirt and pants yesterday.",
            "Anna Read a lot of books last night.",
            "I Ate a lot of ice-creams yesterday.",
            "I Went to the shopping mall yesterday.",
        ];

        $ans = [
            "Wrote", "Rode", "Wore", "Read", "Ate", "Went"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_35/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_35/Practice/";

        $ques_audio = [
            'sue', 'jack', 'he', 'anna', 'i-cream', 'shopping'
        ];

        foreach ($questions as $key => $val) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1035,
                    'round' => $key + 1,
                    'q_audio' => $audio . $this->removeSpace($ques_audio[$key]) . ".mp3",
                    'q_content' => $given_ques[$key][0],
                    'q_conver'  => $val . "?",
                    'a_content' => $given_ques[$key][0] == $ans[$key],
                    'a_conver' => $full_ans[$key]
                ]
            ]);


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1035,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][1],
                    'a_content' => $given_ques[$key][1] == $ans[$key]
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1035,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][2],
                    'a_content' => $given_ques[$key][2]  == $ans[$key]
                ]
            ]);
            // DB::table('ans_n_ques')->insert([
            //     [
            //         'game_id' => 1035,
            //         'round'  => $key +  1,
            //         'q_content' => $given_ques[$key][2],
            //         'a_content' => $ans[$key]
            //     ]
            // ]);









        }

        ///---------------------------------------------------------------------------//

        // $contents = round(1,6);

        // $ques = [
        //     "Sue _________ a letter to her grandmother last night.",
        //     "Jack _________ a horse with his dad last weekend.",
        //     "He ___________ a shirt and pants yesterday.",
        //     "Anna ____________ a lot of books last night.",
        //     "I __________ a lot of ice-creams yesterday.",
        //     "I ___________ to the shopping mall yesterday.",
        // ];

        // $given_ans = [
        //     ['Rode', 'Spoke', 'Wrote'],
        //     ['Rode', 'Wore', 'Spoke'],
        //     ['Wore', 'Spoke', 'Wrote'],
        //     ['Wore', 'Read', 'Spoke',],
        //     ['Ate', 'Rode', 'Wrote',],
        //     ['Went', 'Read', 'Rode',],
        // ];

        // $ans = [
        //     "Wrote", "Rode", "Wore", "Read", "Ate", "Went"
        // ];

        // $full_ans = [
        //     "Sue Wrote a letter to her grandmother last night.",
        //     "Jack Rode a horse with his dad last weekend.",
        //     "He Wore a shirt and pants yesterday.",
        //     "Anna Read a lot of books last night.",
        //     "I Ate a lot of ice-creams yesterday.",
        //     "I Went to the shopping mall yesterday.",
        // ];

        //  $audio = $AudioDomain . "Grade_4/Lesson_35/Practice/";
        // $img = $ImageDomain . "Grade_4/Lesson_35/Practice/";

        // foreach ($ques as $k => $val) {

        //     foreach ($given_ans as $j => $g_a) {
        //         DB::table('ans_n_ques')->insert([
        //             [
        //                 'round' => $k + 1,
        //                 'game_id' => 1032,
        //                 'q_content' => $g_a,
        //                 // 'a_content' => $ans[$k][$j],
        //             ],
        //         ]);
        //     }



        //     DB::table('ans_n_ques')->insert([
        //         [
        //             'game_id' => 1032,
        //             'round' => $k + 1,
        //             // 'q_audio' => $audio.$this->removeSpace($val).".mp3",
        //             // 'q_image' => $img.$this->removeSpace($val).".png",
        //             'q_content' => $ques[$k],
        //             'a_content' => $full_ans[$k],
        //         ],
        //     ]);

        // }

        ///---------------------------------------------------------------------------//



        // Lesson 35 Unit 5 Speaking Practice <Speaking_and_recording>

        $contents = [
            'reading', 'riding', 'swimming', 'cinema', 'watch-tv', 'horse-riding'
        ];

        $Question_contents = "What did you do last night? \n ____.\n I went to the shopping mall. \n What did you buy? \n ____.";

        $eg1036 = [
            "A: What did you do last night? \nB: I wrote a letter. What about you? \nA: I went to the shopping mall. \nB: What did you buy? \nI bought a pencil case.", null, null, null, null, null
        ];
        $images = $ImageDomain . "Grade_4/Lesson_35/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_35/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 1036,
                    'round' => $key + 1,
                    "a_content" => $eg1036[$key],
                    'round_instruction' => $audios . "what-did-you-do-last-night.mp3",
                    'q_content' => $Question_contents,
                    // 'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images . str_replace('?', '', $this->removeSpace($value)) . ".png",
                ]

            ]);
        }


        // Lesson 35 Unit - 6 Listening Practice <listening_choosing_answer>


        $questions = [
            "What did Tom do on Monday",
            "What did he do on Tuesday",
            "Where did he go on Thursday",
            "Who did he go there with",
            "Where did he go on Friday?",
            "Who did he play badminton with",
        ];

        $given_ques = [
            ['Went to school', 'Stayed at home', 'Went to the park'],
            ['Went to school', 'Stayed at home', 'Went to the park'],
            ['The shopping mall', 'Cinema', 'The library'],
            ['His friends', 'His parents', 'His brothers'],
            ['The library', 'The park', 'The shopping mall'],
            ['His friends', 'His parents', 'His brothers'],
        ];

        $ans = [
            "Stayed at home", "Went to school", "Cinema", "His parents", "The park", "His brothers"
        ];


        $audio = $AudioDomain . "Grade_4/Lesson_35/Listening_practice/";
        $img = $ImageDomain . "Grade_4/Lesson_35/Listening_practice/";

        $story = "What-did-you-do-last-week";

        foreach ($questions as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1037,
                    'round' => $key + 1,
                    // 'q_audio' => $audio.$ans[$key].".mp3",
                    'q_audio' => $audio . $story . ".mp3",
                    'q_content' => $given_ques[$key][0],
                    'q_conver'  => $val . "?",
                    'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
                ]
            ]);



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1037,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][1],
                    'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1037,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][2],
                    'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
                ]
            ]);
        }





        /// Lesson 35 Unit - 7 Speaking Topic <speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_35/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_35/Speaking_Topic/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1038,
                'round' => 1,
                'q_content' => "Take notes on the table.\n Talk about what you did last week.",
                'q_audio' => $audios . "take-notes-on-the-table.mp3",
                'q_image' => $images . "green_starfish_round.png",
            ]

        ]);



        // Lesson 35 Unit - 8 Writing Topic <writing_topic>


        $images = $ImageDomain . "Grade_4/Lesson_35/Writing_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_35/Writing_Topic/";

        $sample_content = "Dear Max, \n Last Monday, I phoned my grandmother. On Tuesday, I helped my mother. \n On Wednesday, I went to the cinema with my sisters. On Thursday, I went shopping with my parents. \n  On Friday, I studied English in the evening. What about you? \n What did you do last week? \n \n Anna";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1039,
                'q_content' =>   $images . "someImg" . ".png",
                'a_content' => $sample_content
            ],
        ]);







        /////////////////////////////////////////// Lesson 36 /////////////////////////////////////////
        // Unit 1 Listen and Practice <Reading_carousel>
        $contents = [
            "ice-cream", "book", "bill", "bicycle", "sent-letter", "shopping-market", "wrote-letter"
        ];
        $audio = $AudioDomain . "Grade_4/Lesson_36/Listen_and_Repeat/";
        $img = $ImageDomain . "Grade_4/Lesson_36/Listen_and_Repeat/";
        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1040,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }
        // Unit - 2  Practice <look_and_choose>
        $audio = $AudioDomain . "Grade_4/Lesson_36/Practice/";
        $img = $ImageDomain . "Grade_4/Lesson_36/Practice/";
        $given_ans = [
            ['go to the market', 'Went to the market'],
            ['Write the letter', 'Wrote the letter'],
            ['Sent a letter', 'Send a letter'],
            ['Drink Milk', 'Drank Milk'],
            ['Bought book', 'Buy book'],
            ['Clean the room', 'Cleaned the room'],
            ['Watch TV', 'Watched TV'],
        ];
        $ques_convers = [
            'What did you do last week?',
        ];
        $q_contents = [
            'market', 'write-letter', 'sent-letter', 'drink', 'book', 'clean', 'watch'
        ];
        $ans = [
            'Went to the market', 'Wrote the letter', 'Sent a letter', 'Drank Milk', 'Bought book', 'Cleaned the room', 'Watched TV'
        ];
        foreach ($given_ans as $key => $ga) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1041,
                    'round' => $key + 1,
                    'q_image' => $img . $q_contents[$key] . ".png",
                    'q_conver' => $ques_convers[0],
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1041,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);
        }
        // Lesson 36 Unit 3 Speaking Practice <Speaking_and_recording>
        $contents = [
            'thadingyut', 'christmas-shopping', 'christmas-wrote-letter', 'christmas-library',
            'water-festival', 'thadingyut-badminton'
        ];
        $Question_contents = [
            "Where did you go last Thadingyut holidays? \n ____ . \n What did you do there? \n ___.",
            "Where did you go last Christmas holidays? \n ____ . \n What did you do there? \n ___.",
            "Where did you go last Christmas holidays? \n ____ . \n What did you do there? \n ___.",
            "Where did you go last Christmas holidays? \n ____ . \n What did you do there? \n ___.",
            "Where did you go last water festival holidays? \n ____ . \n What did you do there? \n ___.",
            "Where did you go last Thadingyut holidays? \n ____ . \n What did you do there? \n ___.",
        ];

        $eg1042 = [
            "Example \nA: Where did you go last Thadingyut \nholidays? \nB: I went to the beach. \nA: What did you do there? \n I rode a bicycle on the beach.", null, null, null, null, null
        ];

        $aud = [
            'thadingyut', 'Christmas', 'Christmas', 'Christmas', 'water', 'thadingyut'
        ];
        $images = $ImageDomain . "Grade_4/Lesson_36/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_36/Speaking/";
        foreach ($contents as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1042,
                    'round' => $key + 1,
                    "a_content" => $eg1042[$key],
                    'round_instruction' => $audios . $aud[$key] . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images . str_replace('?', '', $this->removeSpace($value)) . ".png",
                ]
            ]);
        }
        // Lesson 36  Unit 4 Reading passage <reading_passage>
        $images = $ImageDomain . "Grade_4/Lesson_36/Reading_passage/";
        $audios = $AudioDomain . "Grade_4/Lesson_36/Reading_passage/";
        $para = "Christmas falls in December. It is the time of the year. I love Christmas time a lot! I went carol singing with my friends during Christmas. My mother cooked a special Christmas dinner for us as well. And we exchanged gifts. My mom and dad gave me a special Christmas gift which Santa sent me. I was so much happy. Guess what he sent me! It was a toy robot. I love it so much. ";
        $given_q = [
            ["What did his parents give him?", "Special gift"],
            ["What did he feel?", "Happy"],
            ["What was the gift?", "A toy robot"],
            ["Who sent it to him?", "Santa"],
            ["What did his mother do last Christmas?", "Cooked special meal"],
            ["What did he do during christmas?", "Went carol singing"],
        ];
        $given_audio = [
            "parents-give.mp3",
            "he-feel.mp3",
            "gift.mp3",
            "who-sent.mp3",
            "mother.mp3",
            "carol-singing.mp3",
        ];
        $paraName = "My-Last-Christmas-Holidays.mp3";
        $given_answer = [
            ['Chocolate', 'Special gift', 'A cake'],
            ['Happy', 'Excited', 'Sad'],
            ['A Barbie', 'A toy robot', 'A toy car'],
            ['Santa', 'My mother', 'Grandpa'],
            ['Went carol singing', 'Cooked special meal', "Went to friends'homes"],
            ['Went carol singing', 'Cool Special meal', "Went to friends'homes"],
        ];
        for ($i = 0; $i < count($given_answer); $i++) {
            foreach ($given_answer[$i] as $k => $value) {
                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 1043,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 1043,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 1043,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "My Last Christmas Holidays",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }


        // Lesson 36 Unit 5 Speaking Topic <speaking_and_recording>

        $images = $ImageDomain . "Grade_4/Lesson_36/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_36/Speaking_Topic/";
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1044,
                'round' => 1,
                'q_content' => "Talk about your last holiday. \n What did you do during your last Thadingyut holiday?",
                'q_audio' => $audios . "talk-about-last-holiday.mp3",
                'q_image' => $images . "green_starfish_round.png",
            ]
        ]);

        ////////////////////////////////////////////// end of Lesson 36 /////////////////////////////////////////




        //////////////////////////////////////////////// Lesson 37 ////////////////////////////////////////////////////
        // Unit 1 Listen and Practice <Reading_carousel>
        $contents = [
            "grand-mon", "library", "festival", "shopping-centre", "sport-center", "swimming-pool", "park"
        ];
        $audio = $AudioDomain . "Grade_4/Lesson_37/Listen_and_Repeat/";
        $img = $ImageDomain . "Grade_4/Lesson_37/Listen_and_Repeat/";
        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1045,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }


        // Lesson 37 Unit 2 Speaking <Speaking_and_practice>
        $contents = [
            'music-festival', 'library', 'grandmother', 'pool', 'family', 'gym', 'market'
        ];
        $Question_contents = [
            "Tomorrow is Sunday. What will you do tomorrow?",
            "Tomorrow is Sunday. What will you do tomorrow?",
            "Tomorrow is Sunday. What will you do tomorrow?",
            "Tomorrow is Sunday. What will you do tomorrow?",
            "Tomorrow is Sunday. What will you do tomorrow?",
            "Tomorrow is Sunday. What will you do tomorrow?",
            "Tomorrow is Sunday. What will you do tomorrow?",
        ];
        $eg1046 = [
            "Example\nA: Tomorrow is Sunday. What will you do tomorrow?\nB: I will go to the music festival.", null, null, null, null, null, null
        ];
        $images = $ImageDomain . "Grade_4/Lesson_37/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_37/Speaking/";
        foreach ($contents as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1046,
                    'round' => $key + 1,
                    'a_content' => $eg1046[$key],
                    'round_instruction' => $audios . "tomorrow-sunday.mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images . str_replace('?', '', $this->removeSpace($value)) . ".png",
                ]
            ]);
        }




        //Lesson 27 Unit 5 Listen Practice <listening_choosing_answer>


        $questions = [
            "Where will Max go tomorrow morning",
            "What will he do after that",
            "What will he eat for lunch",
            "What will he do after lunch",
            "Where will he go in the evening?",
            "Does he like swimming",
        ];
        $given_ques = [
            ['The shopping mall', 'The swimming pool', 'The sport center'],
            ['Will swim in the pool', 'Will help his mother', 'Will ride on the bicycle'],
            ['Chicken rice', 'Noodle', 'Hamburger'],
            ['Go shopping', 'Go swimming', 'Go tot the music festival'],
            ['The shopping mall', 'The swimming pool', 'The sport center'],
            ["Yes,he does", "No,he doesn't"],
        ];


        $ans = [
            "The sport center",
            "Will help his mother",
            "Noodle",
            "Go shopping",
            "The swimming pool",
            "Yes,he does",
        ];
        $audio = $AudioDomain . "Grade_4/Lesson_37/Listening/";
        $img = $ImageDomain . "Grade_4/Lesson_37/Listening/";
        $story = "Anna-daily";
        foreach ($questions as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1047,
                    'round' => $key + 1,
                    'q_audio' => $audio . "Listening-transcript.mp3",
                    // 'q_audio' => $audio.$story.".mp3",
                    'q_content' => $given_ques[$key][0],
                    'q_conver'  => $val . "?",
                    'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 1047,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][1],
                    'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
                ]
            ]);
            if (isset($given_ques[$key][2])) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 1047,
                        'round'  => $key +  1,
                        'q_content' => $given_ques[$key][2],
                        'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
                    ]
                ]);
            }
        }



        /// Lesson 37 Unit - 4 Speaking Topic <speaking_and_recording>

        $images = $ImageDomain . "Grade_4/Lesson_37/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_37/Speaking_Topic/";
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1048,
                'round' => 1,
                'q_content' => "What will you do tomorrow? Talk about your plan. \nI will _____ tomorrow morning.\nAnd then, I will _____ tomorrow afternoon.\nI will _____ in the evening.",
                'q_audio' => $audios . "What-will-you-do-tomorrow.mp3",
                'q_image' => $images . "green_starfish_round.png",
            ]
        ]);



        // Lesson 37 Unit - 5 Writing Topic <writing_topic>

        $images = $ImageDomain . "Grade_4/Lesson_37/Writing_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_37/Writing_Topic/";
        $sample_content = "Tomorrow, I will get up at 6 in the morning. I will have a yummy breakfast. Then, I will brush my teeth.I will go to school tomorrow, and study English. I will play football with my friends in the evening. I will read books after that";
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1049,
                'q_content' => $images . "someImg" . ".png",
                'a_content' => $sample_content
            ],
        ]);
    }
}
