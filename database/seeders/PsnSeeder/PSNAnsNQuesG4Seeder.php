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

    private function removeSpace($val){
        return str_replace(' ','-',$val);
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




    //////////////////////////////////////////// Lesson 6 /////////////////////////////////////////
    // Lesson 6 Listen and Repeat (Reading_Carousel)


        $contents = [
            "he-running", "he-swimming", "she-reading", "she-sleeping", "she-writing", "bird-flying", "dog-barking", "pig-eating", "tiger-running", "they-dancing"
        ];


        $audio = $AudioDomain."Grade_4/Lesson_6/Listen_and_Repeat/";
        $img = $ImageDomain."Grade_4/Lesson_6/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 805,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }






    // Unit - 3  Practice <look_and_choose>

        $audio = $AudioDomain."Grade_4/Lesson_6/Practice/";
        $img = $ImageDomain."Grade_4/Lesson_6/Practice/";


        $given_ans = [
            ['is', 'are'],
            ['Running','Playing'],
            ['is','are'],
            ['Flying','Swimming'],
            ['Eating','Sleeping'],
            ['Sleeping','Swimming'],
            ['Singing','Dancing'],
            ['Sleeping','Running'],
            ['Barking','Singing'],
            ['Eating','Sleeping'],
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
            'fish','kids','dog','ducks','eat-boy','sleep-boy','girl-sing','horses','birds','cow'
        ];

        $ans = [
            'are','Playing','are','Swimming','Eating','Sleeping','Singing','Running','Singing','Eading'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 806,
                    'round' => $key + 1,
                    'q_image' => $img.$imgs[$key].".png",
                    'q_conver' => $ques_convers[$key] ,
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 806,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);
        }




    // Unit 4 Speaking <speaking_and_recording>

        $contents = [
           "cow","ducks","bear","elephant","geese",
           "sheep","rabbit",'turkeys','birds','girls'
        ];

        $Question_contents = [
            "How many cows are there? \n There is a ___. \n What is it doing? \n It is ___.",
            "How many ducks are there? \n There are ___. \n What are they doing? \n The are ___ in the pond.",
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
                    'game_id' => 807,
                    'round' => $key + 1,
                    'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $audio.$this->removeSpace($value).".mp3",
                    'q_image' => $images .$this->removeSpace($value) . ".png",
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
            ['Jack', 'John','Joe'],
            ['Dogs', 'Cats', 'Animals'],
            ['3', '2', '1'],
            ['1', '2', '3'],
            ['3', '2', '1'],
            ['1', '2', '3'],
            ['Running', 'Eating',"Barking"],
            ['Eating', 'Barking',"Running"],
            ['Barking', 'Running',"Eating"],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 808,
                        'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 808,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 808,
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
            ["The goats are ___.", 'sleeping'],
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
            ['Eating', 'Sleeping','Swimming'],
            ['Cows', 'Pigs','DUcks'],
            ['Eating', 'Sleeping','Swimming'],
            ['Charlie', 'Joe','Rosy'],
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
                    'q_content' => "Uncle Joe farm",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }










    ///////////////////////////////////////////////// Lesson 7 ///////////////////////////////////////////////


        // Video Lesson ----- Game id - 810

        ////////////////////////


        // Unit - 2
        // Sub -1

        $contents = [
            "bear", "cheetah", "cow", "Dolphin", "elephant", "fish", "giraffe", "leopard",
             "lion", "lobster", "monkey" ,"octopus", "seahorse", "seal", "shark", "snake",
             "starfish", "tiger", "turtle", "whale"
        ];


        $audio = $AudioDomain."Grade_4/Lesson_7/Listen_and_Repeat_1/";
        $img = $ImageDomain."Grade_4/Lesson_7/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 811,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }



    // Sub -2

      $contents = [
            ['elephant','elephants'],
            ['leopard','leopards'],
            ['monkey','monkeys'],
            ['cow','cows'],
            ['giraffe','giraffes'],
            ['cheetah','cheetahs'],
            ['snake','snakes'],
            ['octopus','octopuses'],
            ['seahorse','seahorses'],
            ['dolphin','dolphins'],
            ['shark','sharks'],
            ['starfish','starfish'],
            ['fish','fish'],
            ['whale','whales'],
            ['lobster','lobsters'],
            ['turtle','turtles'],
            ['seal','seals'],
            ['tiger','tigers'],
            ['lion','lions'],
        ];

        $audio = $AudioDomain."Grade_4/Lesson_7/Listen_and_Repeat_2/";
        $img = $ImageDomain."Grade_4/Lesson_7/Listen_and_Repeat_2/";

        foreach ($contents as $key =>  $val) {

            foreach ($val as $v) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 812,
                        'a_content' => $v,
                        'a_image' => $img.$this->removeSpace($v).".png",
                        'a_audio' => $audio.$this->removeSpace($v).".mp3",
                        'q_content' => $key
                    ],
                ]);
            }


        }





    // Unit -3 Spelling Game <rearrange_with_audio>

        $given_ans = [
            ['C','A','H','T','H','E','E'],
            ['N','H','L','I','D','P','O'],
            ['E','T','L','A','H','E','N','P'],
            ['A','G','F','F','I','R','E'],
            ['D','R','L','O','P','A','E'],
            ['O','L','I','N'],
            ['E','O','Y','K','M','N'],
            ['S','U','T','C','O','P','O'],
            ['F','H','A','R','S','S','T','I'],
            ['R','E','I','G','T'],
        ];

        $img = $ImageDomain . "Grade_4/Lesson_7/Spelling_Game/";
        $audio = $AudioDomain . "Grade_4/Lesson_7/Spelling_Game/";

        $answers = [
            'CHEETAH', 'DOLPHIN', 'ELEPHANT','GIRAFFE', 'LEOPARD', 'LION', 'MONKEY',
            'OCTOPUS','STARFISH','TIGER'
        ];


        for ($i = 0; $i < count($given_ans); $i++) {

            foreach ($given_ans[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 813,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 813,
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


        $audio = $AudioDomain."Grade_4/Lesson_7/Practice_1/";
        $img = $ImageDomain."Grade_4/Lesson_7/Practice_1/";


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
            'Leopard','Tiger', 'Giraffe','Dolphin','Seahorse',
            'Starfish', 'Whale', 'Turtle', 'Octopus', 'Shark'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 814,
                    'round' => $key + 1,
                    'q_image' => $img.$this->removeSpace($ans[$key]).".png",
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 814,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 814,
                    'round' => $key + 1,
                    'q_content' => $ga[2],
                    'a_content' => $ga[2] == $ans[$key] ? true : false
                ]
            ]);

        }



// Sub - 2

  // Unit - 4  Choose <look_and_choose>

        $audio = $AudioDomain."Grade_4/Lesson_7/Practice_2/";
        $img = $ImageDomain."Grade_4/Lesson_7/Practice_2/";

        $contents = [
            'fish','turtle','giraffe','octopus','starfish','pig','elephant','seahorse','cheetah','lion'
        ];

        $given_ans = [
            'Land animal', 'Sea animal',
        ];

        $ans = [
            'Sea animal','Sea animal', 'Land animal', 'Sea animal', 'Sea animal','Land animal',
            'Land animal', 'Sea animal', 'Land animal','Land animal'
        ];

        foreach ($contents as $key => $content) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 815,
                    'round' => $key + 1,
                    'q_image' => $img.$this->removeSpace($content).".png",
                    'q_content' => $given_ans[0],
                    'a_content' => $given_ans[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 815,
                    'round' => $key + 1,
                    'q_content' => $given_ans[1],
                    'a_content' => $given_ans[1] == $ans[$key] ? true : false
                ]
            ]);
        }










    // Unit 5 Speaking <speaking_and_recording>

    $contents = [
        "fish","dog","dolphin","horse","tiger",
        "rabbit","sea-horse",'lobster','cheetah','elephant'
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
                 'game_id' => 816,
                 'round' => $key + 1,
                //  'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                 'q_content' => $Question_contents[0],
                 'q_audio' => $audio.$this->removeSpace($value).".mp3",
                 'q_image' => $images .$this->removeSpace($value) . ".png",
             ]

         ]);
     }





    // Unit -6  Sub -1 Listen and Practice (1) <listening_and_choosing_pics_three>



    $contents = [
        ['Tigers','Tiger'],
        ['dolphin','dolphins'],
        ['whales','whale'],
        ['lobster','lobsters'],
        ['giraffes','giraffe'],
        ['turtles','turtles'],
        ['seahorse','seahorse'],
        ['octopus','octopus'],
    ];

    $ans = [
        'Tigers','dolphin', 'whales', 'lobster' ,'giraffes','turtles','seahorse', 'octopus'
    ];


    $audio = $AudioDomain."Grade_4/Lesson_7/Listen_and_Practice_1/";
    $img = $ImageDomain."Grade_4/Lesson_7/Listen_and_Practice_1/";

    foreach ($contents as $key =>  $val) {

        foreach ($val as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 817,
                    'round' => $key + 1,
                    'a_image' => $img.$this->removeSpace($v).".png",
                    'a_audio' => $audio.$this->removeSpace($v).".mp3",
                    'a_content' => $v == $ans[$key] ? true : false,
                ],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 817,
                'round' => $key + 1,
                'a_audio' => $audio.$this->removeSpace($ans[$key]).".mp3",
                'a_content' => $ans[$key],
            ],
        ]);


    }


  // Unit -6  Sub -2 Listen and Practice (2) <mcq_grammar>


    $imgs = [
        'Seahorse','Cheetah','Octopus','Giraffe','Monkey','Elephant',
    ];


    $ques = [
        ['Octopus','Seahorse','Giraffe'],
        ['Slow','Small','First'],
        ['Octopus','Seahorse','Giraffe'],
        ['Octopus','Seahorse','Giraffe'],
        ['Slow','Small','First'],
        ['Slow','Small','First'],
    ];


    $audio = $AudioDomain."Grade_4/Lesson_7/Listen_and_Practice_2/";
    $img = $ImageDomain."Grade_4/Lesson_7/Listen_and_Practice_2/";

    $second_q_contents = [
        'This is a ____. It is a sea animal. ',
        'This is a cheetah. It is big and ____.',
        'This is a ____. It is a sea animal.',
        'This is a ____. It is a land animal. ',
        'This is a monkey. It is ____ and fast.',
        'This is an elephant. It is big and _____.'
    ];

    $ans = [
        'Seahorse','First','Octopus','Giraffe','Small','Slow',
    ];

    foreach ($imgs as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 818,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.$val.".mp3",
                'q_content' => $ques[$key][0],
                'q_conver'  => $second_q_contents[$key] ,
                'a_content' => $ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 818,
                'round'  => $key +  1,
                'q_content' => $ques[$key][1],
                'a_content' => $ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 818,
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
                'game_id' => 819,
                'q_content' => "Which animal do you see? \n How many animals are there? \n  Are they land animals or sea animals? \n  Are they big or small? \n  when it is hot?.",
                'q_audio' => $audio."which-animal-do-you-see.mp3",
                'q_image' => $images . "animals-in-ocean.png",
            ]

        ]);




    /////////////////////////////////////////// Lesson 8 ////////////////////////////////////////////////////////


    // Unit -1 ... ID - 820

    // Unit - 2

    $contents = [
        "big", "black", "blue", "brown", "fast", "green", "grey", "orange", "pink", "red", "slow", "small",
        "white", "yellow",
    ];


    $audio = $AudioDomain."Grade_4/Lesson_8/Listen_and_Repeat/";
    $img = $ImageDomain."Grade_4/Lesson_8/Listen_and_Repeat/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 821,
                'a_content' => $val,
                'a_image' => $img.$this->removeSpace($val).".png",
                'a_audio' => $audio.$this->removeSpace($val).".mp3"
            ],
        ]);
    }





    // Unit -3 Spelling Game <rearrange_with_audio>

    $given_ans = [
        ['I','B','G'],
        ['B','K','A','C','L'],
        ['B','E','L','U'],
        ['T','F','A','S'],
        ['N','E','R','E','G'],
        ['Y','G','E','R'],
        ['R','E','O','G','N','A'],
        ['N','O','R','B','W'],
        ['I','N','P','K'],
        ['R','D','E'],
        ['W','S','O','L'],
        ['S','L','L','A','M'],
        ['E','I','T','H','W'],
        ['E','O','L','L','W','Y'],
    ];

    $img = $ImageDomain . "Grade_4/Lesson_8/Spelling/";
    $audio = $AudioDomain . "Grade_4/Lesson_8/Spelling/";

    $answers = [
        'BIG', 'BLACK', 'BLUE', 'FAST', 'GREEN','GREY','ORANGE','BROWN','PINK','RED','SLOW','SMALL','WHITE','YELLOW'
    ];


    for ($i = 0; $i < count($given_ans); $i++) {

        foreach ($given_ans[$i]  as  $innerVal) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 822,
                    'round' => $i + 1,
                    'q_content' => $innerVal
                ]
            ]);
        }

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 822,
                'round' => $i + 1,
                'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                // 'q_content' => $questions[$i],
                'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                'a_content' => $answers[$i],
            ]
        ]);
    }


    // Unit -4 Practice <look_and_choose>


    $audio = $AudioDomain."Grade_4/Lesson_8/Practice/";
    $img = $ImageDomain."Grade_4/Lesson_8/Practice/";


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
        ['Orange', 'Brow', 'Pink'],
        ['First', 'Big', 'Slow'],
        ['First', 'Big', 'Slow'],


    ];

    $ans = [
        'Blue','Pink', 'Red','Grey','Green','White',
        'Yellow', 'Orange', 'Black', 'Brown', 'First','Slow'
    ];

    foreach ($given_ans as $key => $ga) {


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 823,
                'round' => $key + 1,
                'q_image' => $img.$this->removeSpace($ans[$key]).".png",
                'q_content' => $ga[0],
                'a_content' => $ga[0] == $ans[$key] ? true : false
            ]
        ]);
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 823,
                'round' => $key + 1,
                'q_content' => $ga[1],
                'a_content' => $ga[1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 823,
                'round' => $key + 1,
                'q_content' => $ga[2],
                'a_content' => $ga[2] == $ans[$key] ? true : false
            ]
        ]);

    }




    // Unit -5  Listen and Practice <listening_and_choosing_pics_three>



    $contents = [
        ['starfish','whale','fish'],
        ['pig','horse','goat'],
        ['shark','turtle','fish'],
        ['cheetah','goat','horse'],
        ['giraffe','monkey','seahorse'],
        ['monkey','elephant','giraffe'],
    ];

    $ans = [
        'whale','pig', 'turtle', 'cheetah' ,'giraffes','elephant'
    ];


    $audio = $AudioDomain."Grade_4/Lesson_8/Listen_and_Practice/";
    $img = $ImageDomain."Grade_4/Lesson_8/Listen_and_Practice/";

    foreach ($contents as $key =>  $val) {

        foreach ($val as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 824,
                    'round' => $key + 1,
                    'a_image' => $img.$this->removeSpace($v).".png",
                    'a_audio' => $audio.$this->removeSpace($v).".mp3",
                    'a_content' => $v == $ans[$key] ? true : false,
                ],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 824,
                'round' => $key + 1,
                'a_audio' => $audio.$this->removeSpace($ans[$key]).".mp3",
                'a_content' => $ans[$key],
            ],
        ]);


    }





    // Unit 6 Speaking Practice <speaking_and_recording>

    $contents = [
        "giraffe","turtle","whale","cheetah",
     ];

    //  $Question_contents = [
    //     "What is it? \n It is ___. \n It is a land animal or sea animal? \n It is a ___.
    //      \n It is a big or small? \n It is ___ \n It is fast or slow \n It is ___.",
    //  ];



     $images = $ImageDomain . "Grade_4/Lesson_8/Speaking_Practice/";
     $audios = $AudioDomain . "Grade_4/Lesson_8/Speaking_Practice/";

     foreach ($contents as $key => $value) {

         DB::table('ans_n_ques')->insert([

             [
                 'game_id' => 825,
                 'round' => $key + 1,
                //  'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                //  'q_content' => $Question_contents[0],
                 'q_audio' => $audio.$this->removeSpace($value).".mp3",
                 'q_image' => $images .$this->removeSpace($value) . ".png",
             ]

         ]);
     }





    /// Unit 7 Speaking Topic <speaking_and_recording>


    $images = $ImageDomain . "Grade_4/Lesson_8/Speaking_Topic/";
    $audios = $AudioDomain . "Grade_4/Lesson_8/Speaking_Topic/";


    DB::table('ans_n_ques')->insert([
        [
            'game_id' => 826,
            'q_conver' => $images."question-list.png",
            'q_audio' => $audio."which-animal-do-you-see.mp3",
            'q_image' => $images . "orange-starfish.png",
        ]

    ]);



     // Unit 8 Writing <writing_topic>


     $images = $ImageDomain . "Grade_4/Lesson_8/Writing/";
     $audios = $AudioDomain . "Grade_4/Lesson_8/Writing/";

     $sample_content = "My favorite animal is the dolphin.\n It is big. It has blue color. \n They live in water. \n They can swim well.";

     DB::table('ans_n_ques')->insert([
         [
             'game_id' => 827,
             'a_content' => $sample_content
         ],
     ]);



    ///////////////////////////////////////////////// Lesson 9 ///////////////////////////////////////////////////

    // Unit 1 Video -Game id (828)



    // Lesson 9 Listen and Repeat (Reading_Carousel)


    $contents = [
        'cloudy','cold','foggy','hail','hot','icy','lighting','rainbow','rainy','snow','snowy','stormy','sunny','thunder','windy',
    ];


    $audio = $AudioDomain."Grade_4/Lesson_9/Listen_and_Repeat/";
    $img = $ImageDomain."Grade_4/Lesson_9/Listen_and_Repeat/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 829,
                'a_content' => $val,
                'a_image' => $img.$this->removeSpace($val).".png",
                'a_audio' => $audio.$this->removeSpace($val).".mp3"
            ],
        ]);
    }






    // Unit -3 Spelling Game <rearrange_with_audio>

    $given_ans = [
        ['E','N','H','D','R','U','T'],
        ['N','Y','I','D','W'],
        ['Y','W','O','N','S'],
        ['I','R','N','W','B','A','O'],
        ['N','A','I','R','Y'],
        ['O','R','S','T','M','Y'],
        ['T','O','H'],
        ['O','D','L','C'],
        ['G','G','F','O','Y'],
        ['A','I','H','L'],
        ['Y','C','I'],
        ['G','H','L','I','T','N','I','G','N'],
        ['N','O','W','S'],
        ['S','Y','N','U','N'],
        ['Y','O','U','D','C','L'],
    ];

    $img = $ImageDomain . "Grade_4/Lesson_8/Spelling/";
    $audio = $AudioDomain . "Grade_4/Lesson_8/Spelling/";

    $answers = [
        'THUNDER', 'WINDY', 'SNOWY', 'RAINBOW', 'RAINY','STORMY','HOT','COLD','FOGGY','HAIL','ICY','LIGHTNING','SNOW','SUNNY','CLOUDY'
    ];


    for ($i = 0; $i < count($given_ans); $i++) {

        foreach ($given_ans[$i]  as  $innerVal) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 830,
                    'round' => $i + 1,
                    'q_content' => $innerVal
                ]
            ]);
        }

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 830,
                'round' => $i + 1,
                'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                // 'q_content' => $questions[$i],
                'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                'a_content' => $answers[$i],
            ]
        ]);
    }





    // Unit -4 Practice <look_and_choose>


    $audio = $AudioDomain."Grade_4/Lesson_9/Practice/";
    $img = $ImageDomain."Grade_4/Lesson_9/Practice/";


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
        "Thunder", "Snowy", "Foggy", "Hail", "Snow", "Thunder","Snow","Rainbow","Cold","Windy","Rainy","Stormy","Hot","Sunny","Cloudy"
    ];

    foreach ($given_ans as $key => $ga) {


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 831,
                'round' => $key + 1,
                'q_image' => $img.$this->removeSpace($ans[$key]).".png",
                'q_content' => $ga[0],
                'a_content' => $ga[0] == $ans[$key] ? true : false
            ]
        ]);
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 831,
                'round' => $key + 1,
                'q_content' => $ga[1],
                'a_content' => $ga[1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 831,
                'round' => $key + 1,
                'q_content' => $ga[2],
                'a_content' => $ga[2] == $ans[$key] ? true : false
            ]
        ]);

    }




    // Unit 5 Speaking Practice <speaking_and_recording>

    $contents = [
       "Windy", "Hot", "Snowy", "Cold", "Rainy", "Cloudy", "Sunny",
     ];

     $Question_contents = [
        "Q: What is the weather like today? \n A: ____."
     ];



     $images = $ImageDomain . "Grade_4/Lesson_7/Speaking/";
     $audios = $AudioDomain . "Grade_4/Lesson_7/Speaking/";

     foreach ($contents as $key => $value) {

         DB::table('ans_n_ques')->insert([

             [
                 'game_id' => 832,
                 'round' => $key + 1,
                //  'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                 'q_content' => $Question_contents[0],
                 'q_audio' => $audio.$this->removeSpace($value).".mp3",
                 'q_image' => $images .$this->removeSpace($value) . ".png",
             ]

         ]);
     }




    // Unit 6 Listen <listening_and_choosing_pics_one>


        $images = $ImageDomain . "Grade_4/Lesson_9/Listening_Practice/";
        $audios = $AudioDomain . "Grade_4/Lesson_9/Listening_Practice/";

        $contents = [
            ['hail', 'windy','stormy','rainy'],
            ['cold', 'snowy','rainy','foggy'],
            ['sunny', 'cloudy','hot','cold'],
            ['cloudy', 'stormy','hail','windy'],
            ['rainy', 'sunny','windy','hot'],
            ['hot', 'sunny','hot','windy'],
            ['foggy', 'rainy','sunny','stormy'],
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
                        'game_id' => 833,
                        'round' => $key + 1,
                        'q_image' => $images.$this->removeSpace($val).".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 833,
                    'round' => $key + 1,
                    'q_audio' => $audios.$this->removeSpace($value).".mp3"
                ]
            ]);


        }




    /// Unit 7 Speaking Topic <speaking_and_recording>


    $images = $ImageDomain . "Grade_4/Lesson_8/Speaking_Topic/";
    $audios = $AudioDomain . "Grade_4/Lesson_8/Speaking_Topic/";


    DB::table('ans_n_ques')->insert([
        [
            'game_id' => 834,
            'q_conver' => $images."question-list.png",
            'q_audio' => $audio."which-animal-do-you-see.mp3",
            'q_image' => $images . "orange-starfish.png",
        ]

    ]);


/////////////////////////////////////////// End of Lesson 9  /////////////////////////////////////////////////////////



/////////////////////////////////////////// Lesson 26 /////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////



// Unit - 1 Video Lesson
// Game_id - 901



// Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)


        $contents = [
           "blouse","cap","dress","flip-flops","hat","sunglasses","t-shirt","shorts","jeans",
           "jacket","scarf","Skirt","socks","sweater","tracksuit","winter-coat"
        ];


        $audio = $AudioDomain."Grade_4/Lesson_26/Listen_and_Repeat_1/";
        $img = $ImageDomain."Grade_4/Lesson_26/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 962,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }




    // Unit 2 SUb - 2 <Reading_carousel_two> <skimming_reading_passage>

       $contents = [
            ['cold','hot'],
            ['cold-2','hot-2'],
        ];

        $audio = $AudioDomain."Grade_4/Lesson_26/Listen_and_Repeat_2/";
        $img = $ImageDomain."Grade_4/Lesson_26/Listen_and_Repeat_2/";

        foreach ($contents as $key =>  $val) {

            foreach ($val as $v) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 963,
                        'round'=> 1,
                        'a_content' => $v,
                        'a_image' => $img.$this->removeSpace($v).".png",
                        'a_audio' => $audio.$this->removeSpace($v).".mp3",
                        'q_content' => $key
                    ],
                ]);
            }

        }


    // next rounds for conversations
        $chars = [
            ['boy'],
            ['boy'],
            ['boy'],
            ['boy']
        ];

        $convers = [
            ["It's hot today. So, she's wearing a blouse, and pants"],
            ["It's hot today. So, she's wearing a blouse, a skirt, and sunglasses."],
            ["It's cold today. So, she's wearing a hat, a jacket, pants and trainers."],
            ["It's cold today. So, he's wearing a sweater, pants and trainers."],
        ];
        $convers_audio = [
            "hot-1",
            "hot-2",
            "cold-1",
            "cold-2",
        ];

        $audio = $AudioDomain."Grade_4/Lesson_26/Listen_and_Repeat_2/";
        $img = $ImageDomain."Grade_4/Lesson_26/Listen_and_Repeat_2/";


        foreach ($chars as $key => $char) {

        foreach ($char as $k => $v) {

                DB::table('ans_n_ques')->insert([
                    [
                    'game_id' => 963,
                    'round' => $key + 2,
                    'a_image' => $img.$v.".png",
                    'a_audio' => str_replace(' ','-',$audio.$convers_audio[$key][$k]).".mp3",
                    'a_conver' => $convers[$key][$k],
                    "background" => $img."bg".$key + 1 .".png"
                    ]
                ]);

        }
    }




    // Unit 3 Practice


        $audio = $AudioDomain."Grade_4/Lesson_7/Practice_1/";
        $img = $ImageDomain."Grade_4/Lesson_7/Practice_1/";


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
            'Scarf', 'Hat', 'Socks','tracksuit','flipflops','Winter Coat', 'Skirt', 'Shorts', 'Jacket'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 964,
                    'round' => $key + 1,
                    'q_image' => $img.$this->removeSpace($ans[$key]).".png",
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 964,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 964,
                    'round' => $key + 1,
                    'q_content' => $ga[2],
                    'a_content' => $ga[2] == $ans[$key] ? true : false
                ]
            ]);

        }




    // Unit - 3 Speaking <Speaking_and_recording>

        $contents = [
            "pink-coat", "jeans", "black-coat", "yellow-skirt", "blue shirt", "white-shirt",
        ];

        $Question_contents = [
            "She is wearing ___. \n a pink coat, a brown scarf, and blue jeans.",
            "He is wearing ___.",
            "He is wearing ___.",
            "She is wearing ___.",
            "He is wearing ___.",
            "She is wearing ___.",
        ];


        $images = $ImageDomain . "Grade_4/Lesson_26/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_26/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 965,
                    'round' => $key + 1,
                    // 'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $audio.$this->removeSpace($value).".mp3",
                    'q_image' => $images .$this->removeSpace($value) . ".png",
                ]

            ]);
        }



    // Unit - 4 Listening


    $images = $ImageDomain . "Grade_4/Lesson_26/Listen/";
    $audios = $AudioDomain . "Grade_4/Lesson_26/Listen/";

    $contents = [
        ['watering', 'listening','playing'],
        ['exercise', 'listen-teacher','help-each'],
        ['work-pair', 'draw','stay-library'],
        ['help-each', 'work-pair','play-game'],
        ['help-each', 'work-pair','playing'], // play
    ];


    $ans = [
        'playing',
        'exercise',
        'stay-library',
        'play-game',
        'work-pair'
    ];

    foreach ($ans as $key => $value) {

        foreach ($contents[$key] as $j => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 966,
                    'round' => $key + 1,
                    'q_image' => $images.$val.".png",
                    'a_content' => $val == $value ? true : false
                ]
            ]);
        }

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 966,
                'round' => $key + 1,
                'q_audio' => $audios.$value.".mp3"
            ]
        ]);


    }






        ////  Unit 5 (Reading) < reading_passage >


        $images = $ImageDomain . "Grade_4/Lesson_26/Listen_and_practice/";
        $audios = $AudioDomain . "Grade_4/Lesson_26/Listen_and_practice/";

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

        $paraName = "jack-and-animal.mp3";

        $given_answer = [
            ['She does not have a sweater', 'As it is very hot','As it is very cold'],
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
                        'game_id' => 967,
                        'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 967,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 967,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "I can dress myself",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }



        /// Unit 7 Speaking Topic <speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_26/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_26/Speaking_Topic/";

        $contents = "The father is wearing __________, _________, and _____________. \n The mother is wearing ______________, and _____________. \n The boy is wearing _____________, ____________, and ___________. \n The girl is wearing ___________, ____________, and ____________.";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 968,
                'q_content' => $contents,
                'q_audio' => $audios."father-wearing-mother-wearing.mp3",
                'q_image' => $images . "father-wearing-mother-wearing.png",
            ]

        ]);



////////////////////////////////////////// end of Lesson 26 ///////////////////////////////////////////////////





///////////////////////////////////////////// Lesson 27 //////////////////////////////////////////////////////



    // Unit - 1 Video Lesson
    // Game_id - 969



    // Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)


        $contents = [
            'a cup','a hat', 'a raincoat', 'a scarf', 'a sweater', 'boots', 'gloves', 'socks', 'suit'
        ];


        $audio = $AudioDomain."Grade_4/Lesson_27/Listen_and_Repeat_1/";
        $img = $ImageDomain."Grade_4/Lesson_27/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 970,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }





    // Unit 2 SUb - 2 <Reading_carousel_two> <skimming_reading_passage>

       $contents = [
            ['cold'],
            ['hot','rainy'],
            ['T-shirt','blouse'],
        ];

        $audio = $AudioDomain."Grade_4/Lesson_27/Listen_and_Repeat_2/";
        $img = $ImageDomain."Grade_4/Lesson_27/Listen_and_Repeat_2/";

        foreach ($contents as $key =>  $val) {

            foreach ($val as $v) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 971,
                        'round'=> 1,
                        'a_content' => $v,
                        'a_image' => $img.$this->removeSpace($v).".png",
                        'a_audio' => $audio.$this->removeSpace($v).".mp3",
                        'q_content' => $key
                    ],
                ]);
            }

        }


    // next rounds for conversations <reading_conversation>
        $chars = [
            ['boy','girl'],
            ['boy','girl-2'],
            ['boy','girl-3'],
            ['man','woman']
        ];


        $convers = [
            ['What do you like to wear in the rainy season?',"I like to wear a raincoat, and flipflops."],
            ["What do you like to wear in the rainy season?","I like to wear a scarf, a winter coat, pants,gloves and boots."],
            ['What do you like to wear in the rainy season?',"I like to wear a T-shirt and jeans."],
            ["I like to wear a T-shirt, jeans and trainers.What about you?", "I like to wear a blouse and skirt."]
        ];
        $convers_audio = [
            ['What do you like wear rainy reason', "raincoat and flipflops"],
            ["What do you like wear rainy reason", "scarf winter coat pants gloves boots"],
            ['What do you like wear rainy reason',"T-shirt jeans"],
            ["T-shirt jeans trainers", "blouse skirt"]
        ];

        $audio = $AudioDomain."Grade_4/Lesson_27/Listen_and_Repeat_2/";
        $img = $ImageDomain."Grade_4/Lesson_27/Listen_and_Repeat_2/";


        foreach ($chars as $key => $char) {

        foreach ($char as $k => $v) {

                DB::table('ans_n_ques')->insert([
                    [
                    'game_id' => 971,
                    'round' => $key + 2,
                    'a_image' => $img.$v.".png",
                    'a_audio' => str_replace(' ','-',$audio.$convers_audio[$key][$k]).".mp3",
                    'a_conver' => $convers[$key][$k],
                    "background" => $img."bg".$key + 1 .".png"
                    ]
                ]);

        }
    }



    // Unit 3 Practice <look_and_choose>

        $audio = $AudioDomain."Grade_4/Lesson_27/Practice/";
        $img = $ImageDomain."Grade_4/Lesson_27/Practice/";

        $contents = [
            'winter coat','flipflops','rain coat','sweater',
            'rain coat','winter coat','scarf','hat','t-shirt'
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
                    'game_id' => 972,
                    'round' => $key + 1,
                    'q_image' => $img.$this->removeSpace($content).".png",
                    'q_content' => $given_ans[0],
                    'a_content' => $given_ans[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 972,
                    'round' => $key + 1,
                    'q_content' => $given_ans[1],
                    'a_content' => $given_ans[1] == $ans[$key] ? true : false
                ]
            ]);
        }



      //lesson 27  Unit - 4 Speaking Practice <Speaking_and_recording>

        $contents = range(1,6);

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
                    'game_id' => 973,
                    'round' => $key + 1,
                    'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                    'q_image' => $images.str_replace('?','',$this->removeSpace($value)).".png",
                ]

            ]);
        }



    // lesson 27 Unit 5 Listening Practice <listening_and_choosing_pics_one>



        $images = $ImageDomain . "Grade_4/Lesson_27/Listen_Practice/";
        $audios = $AudioDomain . "Grade_4/Lesson_27/Listen_Practice/";

        $contents = [
            ['green', 'smart','normal'],
        ];


        $ans = [
            'green',
        ];

        foreach ($ans as $key => $value) {

            foreach ($contents[$key] as $j => $val) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 974,
                        'round' => $key + 1,
                        'q_image' => $images.$val.".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 974,
                    'round' => $key + 1,
                    'q_audio' => $audios.$value.".mp3"
                ]
            ]);


        }



////////////////////////////////////// end of lesson 27 /////////////////////////////



//////////////////////////////////// Lesson 28 ////////////////////////////////////////




    // Unit - 1 Video Lesson
    // Game_id - 975



    // Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)

        $contents = [
            "he-like", "I-like", "she-likes", "they-like"
        ];


        $audio = $AudioDomain."Grade_4/Lesson_28/Listen_and_Repeat_1/";
        $img = $ImageDomain."Grade_4/Lesson_28/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 976,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }

    // Unit - 2 Sub - 2 <reading_carousel_two>

      $contents = [
            ['like-t-shirt','they-like-tracksuit'],
            ['he-like-suit','they-like-hat'],
            ['he-like-scarf'],
            ['she-like-boots','they-like-sweater'],
            ['school-uniform','he-like-pyjamas'],
        ];

        $audio = $AudioDomain."Grade_4/Lesson_28/Listen_and_Repeat_2/";
        $img = $ImageDomain."Grade_4/Lesson_28/Listen_and_Repeat_2/";

        foreach ($contents as $key =>  $val) {

            foreach ($val as $v) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 977,
                        'round'=> 1,
                        'a_content' => $v,
                        'a_image' => $img.$this->removeSpace($v).".png",
                        'a_audio' => $audio.$this->removeSpace($v).".mp3",
                        'q_content' => $key
                    ],
                ]);
            }

        }


    // Unit - 2 , Sub - 3 (Reading_carousel)

        $contents = [
            "checked-shirt", "floral-shirt", "polka-dot-blouse", "stripe-shirt"
        ];


        $audio = $AudioDomain."Grade_4/Lesson_28/Listen_and_Repeat_3/";
        $img = $ImageDomain."Grade_4/Lesson_28/Listen_and_Repeat_3/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 978,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }





    // Unit 3 Practice  <look_and_choose>


        $audio = $AudioDomain."Grade_4/Lesson_28/Practice/";
        $img = $ImageDomain."Grade_4/Lesson_28/Practice/";

        $given_ans = [
            ['I Like', 'They Like'],
            ['I Like', 'They Like'],
            ['I Like', 'You Like'],
            ['He Like', 'She Likes'],
            ['He Like', 'She Likes'],
            ['He Like', 'She Likes'],
        ];

        $contents = [
           'they-like','man-like','you-like','black-like','white-like','kid-like'
        ];

        $ans = [
            'They Like', 'I Like', 'You Like', 'She Likes', 'He Like', 'He Like'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 979,
                    'round' => $key + 1,
                    'q_image' => $img.$this->removeSpace($contents[$key]).".png",
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 979,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);
        }



    // Unit 4 Speaking Practice <Speaking_and_recording>




    //lesson 27  Unit - 4 Speaking Practice <Speaking_and_recording>

    $contents = [
        'red-boy','white-girl','suit-boy','fat-boy','2-girl','cold-boy','hot-girl'
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


    $images = $ImageDomain . "Grade_4/Lesson_28/Speaking/";
    $audios = $AudioDomain . "Grade_4/Lesson_28/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 980,
                'round' => $key + 1,
                'round_instruction' => $audio.$this->removeSpace($Question_contents[$key])."_round_ins".".mp3",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                'q_image' => $images.str_replace('?','',$this->removeSpace($value)).".png",
            ]

        ]);
    }




    // lesson 28 Unit 5 Listening Practice <listening_and_choosing_pics_one>



    $images = $ImageDomain . "Grade_4/Lesson_28/Listen_Practice/";
    $audios = $AudioDomain . "Grade_4/Lesson_28/Listen_Practice/";

    $contents = [
        ['red-hat', 'blue-dress','big-hat','red-short','blue-short-dress','orange'],
    ];


    $ans = [
        'blue-short-dress',
    ];

    foreach ($ans as $key => $value) {

        foreach ($contents[$key] as $j => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 981,
                    'round' => $key + 1,
                    'q_image' => $images.$val.".png",
                    'a_content' => $val == $value ? true : false
                ]
            ]);
        }

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 981,
                'round' => $key + 1,
                'q_audio' => $audios.$value.".mp3"
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

        $paraName = "jack-and-animal.mp3";

        $given_answer = [
            ['A T-shirt and pants', 'A suit','A polka dot shirt and pants'],
            ['School uniforms', 'Pyjamas', 'Swimsuits '],
            ['School uniforms', 'Pyjamas', 'Swimsuits'],
            ['True', 'False'],
            ['Older', 'Younger ', 'The same age'],
            ['Friends', 'Brother and sister', 'Neighbours'],

        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 982,
                        'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 982,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 982,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Ben and Emma",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }




    //lesson 28  Unit - 7 Speaking Topic <Speaking_and_recording>

    $contents = [ 'home','school', 'snow-house','snow-house'];

    $Question_contents = [
        "I like to wear ___ at home?",
        "I like to wear ___ at school?",
        "I like to wear ___ at christmas?",
        "I like to wear ___ at home \n I like to wear ___ at school. \n I like to wear ___ at christmas?"
    ];


    $images = $ImageDomain . "Grade_4/Lesson_28/Speaking_Topic/";
    $audios = $AudioDomain . "Grade_4/Lesson_28/Speaking_Topic/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 983,
                'round' => $key + 1,
                'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                'q_image' => $images.str_replace('?','',$this->removeSpace($value)).".png",
            ]
        ]);
    }


    // Lesson 28 Unit 8  Writing Topic <writing_topic>


     $images = $ImageDomain . "Grade_4/Lesson_28/Writing_Topic/";
     $audios = $AudioDomain . "Grade_4/Lesson_28/Writing_Topic/";

     $sample_content = "Three-girls";

     DB::table('ans_n_ques')->insert([
         [
             'game_id' => 984,
             'a_content' => $sample_content,
             'q_image' => $images.$sample_content.".png",
         ],
     ]);




////////////////////////////////// end of lesson 28 /////////////////////////////////////////////




/////////////////////////////////////// Lesson 29 //////////////////////////////////////////////

    // Unit - 1 Video Lesson
    // Game_id - 985



    // Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)



     $contents = [
          "chicken-soup", "chicken-rice", "fish-curry", "fish-sauce-and-vegetable", "fried-egg",
          "fried-rice", "hamburger", "mont-hin-gah", "noddles-in-coconut-gravy", "salad","sandwich",
          "steam-sticky-rice",
        ];


        $audio = $AudioDomain."Grade_4/Lesson_29/Listen_and_Repeat_1/";
        $img = $ImageDomain."Grade_4/Lesson_29/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 986,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }


    // Unit 2 Sub - 2 Listen and Repeat 2 <reading_conversation>

         $chars = [
            ['boy','girl'],
            ['boy','girl'],
            ['boy','girl'],
            ['boy','girl']
        ];


        $convers = [
            ['I usually have hamburger for lunch.',"Oh, yes. I like hamburger, too."],
            ["What do you usually have for lunch?","I usually have chicken rice for lunch. And you?"],
            ["I usually have mont-hin-gah for breakfast.","Oh, yes. I like mont-hin-gah, too."],
            ["What do you usually have for lunch?", "I usually have fried rice and coffee for breakfast. And you?"]
        ];

        $convers_audio = [
            ['hamburger-for-lunch', "me-too-hamburger"],
            ["what-ur-lunch", "chicken-rice-lunch"],
            ['mont-hin-gah-for-breakfast',"me-too-mont-hin-gah"],
            ["T-shirt jeans trainers", "fried-rice-coffee"]
        ];

        $audio = $AudioDomain."Grade_4/Lesson_29/Listen_and_Repeat_2/";
        $img = $ImageDomain."Grade_4/Lesson_29/Listen_and_Repeat_2/";


        foreach ($chars as $key => $char) {

        foreach ($char as $k => $v) {

                DB::table('ans_n_ques')->insert([
                    [
                    'game_id' => 987,
                    'round' => $key + 1,
                    'a_image' => $img.$v.".png",
                    'a_audio' => str_replace(' ','-',$audio.$convers_audio[$key][$k]).".mp3",
                    'a_conver' => $convers[$key][$k],
                    "background" => $img."bg".$key + 1 .".png"
                    ]
                ]);

        }
    }



    // Lesson 29 Unit 3 Practice <Matching_column>


        $audio = $AudioDomain."Grade_4/Lesson_29/Practice/Matching/";
        $img = $ImageDomain."Grade_4/Lesson_29/Practice/Matching/";


        $contents = [
            ['Fish Curry','Fish Sauce','Fried Egg','Chicken Soup','Noodle in coconut gravy'],
            ['Fried Rice', 'Steamed Sticky Rice', 'Hamburger', 'Sandwich', 'Mont hin gah'],
        ];

        $randomValues = [
           ['Fried Egg','Fish Sauce','Fish Curry','Chicken Soup','Noodle in coconut gravy'],
           ['Mont hin gah','Hamburger','Sandwich','Fried Rice','Steamed Sticky Rice'],
        ];


        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 988,
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
                        'game_id' => 988,
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
        'fried-rice','coconut-noodle','mont-hin-gah','sandwich','hamburger','salad','steam-sticky-rice'
    ];

    $Question_contents = [
        "What do you usually have for breakfast? \n I usually have fried rice and coffee.",
        "What do you usually have for breakfast? \n -------------.",
        "What do you usually have for breakfast? \n -------------.",
        "What do you usually have for lunch? \n -------------.",
        "What do you usually have for lunch? \n -------------.",
        "What do you usually have for dinner? \n -------------.",
        "What do you usually have for breakfast? \n -------------.",
    ];

    $q_instruction = [
        'breakfast-fried-rice','breakfast','breakfast','lunch','lunch','dinner','breakfast'
    ];


    $images = $ImageDomain . "Grade_4/Lesson_29/Speaking/";
    $audios = $AudioDomain . "Grade_4/Lesson_29/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 989,
                'round' => $key + 1,
                'round_instruction' => $audio.$this->removeSpace($q_instruction[$key])."_round_ins".".mp3",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                'q_image' => $images.str_replace('?','',$this->removeSpace($value)).".png",
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
        ['Fried rice', 'Hamburger','Chicken rice'],
        ['Sandwich', 'Hamburger','Rice'],
        ['Noodle', 'Salad','Sandwich'],
        ['Fried noodle', 'Hamburger','Chicken rice'],
        ['Fried noodle', 'Steamed rice','Fried Rice'],
    ];

    $ans = [
        "Hamburger","Rice","Salad","Chicken rice", "Fried Rice"
    ];


    $audio = $AudioDomain."Grade_4/Lesson_29/Listening/";
    $img = $ImageDomain."Grade_4/Lesson_29/Listening/";

    $story = "Anna-daily";

        foreach ($questions as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 990,
                'round' => $key + 1,
                // 'q_audio' => $audio.$ans[$key].".mp3",
                'q_audio' => $audio.$story.".mp3",
                'q_content' => $given_ques[$key][0],
                'q_conver'  => $val."?",
                'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 990,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][1],
                'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 990,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][2],
                'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);
    }



    // Lesson 29 Unit - 6 Speaking Topic <Speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_29/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_29/Speaking_Topic/";

        $content = "I usually have ____________, and ____________ for breakfast. \n
        I have ____________, ____________, and ___________ for lunch. \n
        I do not like eating _______________ for lunch. \n
        I usually have ____________, _____________ and __________ for dinner. \n
        I do not like eating ____________ for dinner.";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 991,
                'q_content' => $content,
                'q_audio' => $audio."Talk-about-usually-eat.mp3",
                'q_image' => $images . "girl-eating.png",
            ]

        ]);



    // Lesson 28 Unit 8  Writing Topic <writing_topic>


    $images = $ImageDomain . "Grade_4/Lesson_29/Writing_Topic/";
    $audios = $AudioDomain . "Grade_4/Lesson_29/Writing_Topic/";

    $sample_content = "eating-boy";

    DB::table('ans_n_ques')->insert([
        [
            'game_id' => 992,
            'q_image' => $images.$sample_content.".png",
            'a_content' => "I usually have fried rice and tea for breakfast.I have chicken rice, fried vegetables, and soup for lunch. I do not like eating sandwich for lunch. I usually have sandwich, salad, and juice for dinner.I do not like eating hamburgers for dinner. ",
        ],
    ]);




///////////////////////////////////////////// End of Lesson 29 ////////////////////////////////////////



///////////////////////////////////////// Lesson 30 ///////////////////////////////////////////

// Unit - 1 Video Lesson
// Game_id - 994



    // Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)


        $contents = [
           "bacon-egg", "bibimbap", "fish-chip", "noodle-soup",
           "phad-thai", "pizza", "puri", "roast lamb", "sushi",
        ];


        $audio = $AudioDomain."Grade_4/Lesson_30/Listen_and_Repeat_1/";
        $img = $ImageDomain."Grade_4/Lesson_30/Listen_and_Repeat_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 994,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }


    // Unit 2 Sub - 2 Listen and Repeat 2 <reading_conversation>

         $chars = [
            ['boy','girl'],
            ['boy','girl'],
        ];


        $convers = [
            ["What is your favorite food?","Noodle"],
            ['Why',"They are good for energy."],
        ];

        $convers_audio = [
            ["what-ur-favorite-food", "noodle"],
            ['Why', "good-for-energy"],
        ];

        $audio = $AudioDomain."Grade_4/Lesson_30/Listen_and_Repeat_2/";
        $img = $ImageDomain."Grade_4/Lesson_30/Listen_and_Repeat_2/";


        foreach ($chars as $key => $char) {

        foreach ($char as $k => $v) {

                DB::table('ans_n_ques')->insert([
                    [
                    'game_id' => 995,
                    'round' => $key + 1,
                    'a_image' => $img.$v.".png",
                    'a_audio' => str_replace(' ','-',$audio.$convers_audio[$key][$k]).".mp3",
                    'a_conver' => $convers[$key][$k],
                    "background" => $img."bg".$key + 1 .".png"
                    ]
                ]);

        }
    }




    // Lesson 29 Unit 3 Practice <Matching_column>


        $audio = $AudioDomain."Grade_4/Lesson_30/Practice/Matching/";
        $img = $ImageDomain."Grade_4/Lesson_30/Practice/Matching/";


        $contents = [
            ['Puri','BiBimbap','Noodle soup','Pizza','Sushi'],
            ['Fish and chips','Sushi','Roast lamb','Pad Thai','Bacon and egg'],
        ];



        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 996,
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
                        'game_id' => 996,
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
        'pizza','phat-thai','biBimbap','sushi','puri','noodle-soup','bacon-egg',
    ];

    $Question_contents = [
        "What is your favorite food? \n My favorite food is pizza.",
        "What is your favorite food? \n __________.",
        "What is your favorite food? \n __________.",
        "What is your favorite food? \n __________.",
        "What is your favorite food? \n __________.",
        "What is your favorite food? \n __________.",
        "What is your favorite food? \n __________.",
    ];

    $q_instruction = [
         'pizza','phat-thai','biBimbap','sushi','puri','noodle-soup','bacon-egg',
    ];


    $images = $ImageDomain . "Grade_4/Lesson_30/Speaking/";
    $audios = $AudioDomain . "Grade_4/Lesson_30/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 997,
                'round' => $key + 1,
                'round_instruction' => $audio.$this->removeSpace($q_instruction[$key])."_round_ins".".mp3",
                'q_content' => $Question_contents[$key],
                // 'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                'q_image' => $images.str_replace('?','',$this->removeSpace($value)).".png",
            ]

        ]);
    }





 //Lesson 30 Unit 5 Listening Practice <listening_and_choosing_pics_one>


    $images = $ImageDomain . "Grade_4/Lesson_30/Listening/";
    $audios = $AudioDomain . "Grade_4/Lesson_30/Listening/";

    $contents = [
        ['noodle-soup', 'sushi','bacon-egg'],
        ['noodle-soup', 'bibimbap','bacon-egg'],
        ['bibimbap', 'sushi', 'bacon-egg'],
        ['noodle-soup', 'bibimbap', 'phat-thai'],
        ['noodle-soup', 'sushi','bacon-egg'],
        ['pizza', 'sushi','noodle-soup'],
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
                    'game_id' => 998,
                    'round' => $key + 1,
                    'q_image' => $images.$val.".png",
                    'a_content' => $val == $value ? true : false
                ]
            ]);
        }

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 998,
                'round' => $key + 1,
                'q_audio' => $audios.$value.".mp3"
            ]
        ]);


    }


//Lesson 30 Unit 6 Reading Passage <Reading_passage>



        $images = $ImageDomain . "Grade_4/Lesson_30/Reading_passage/";
        $audios = $AudioDomain . "Grade_4/Lesson_30/Reading_passage/";

         $para = "I am Jack. I love animals. There are 3 dogs and 2 cats in the house. I also have 3 golden fish and 1 white rabbit. They are my friends. My dogs are always barking. My cats are running in the house. The rabbit is eating carrots.";

        $given_q = [
            ["What did Rekai’s mom add to his pancake?", "A secret ingredient"],
            ["Did Rekai love the pancake with a secret ingredient?", "Yes,he does"],
            ["What was the secret ingredient?", "Butternut"],
            ["Does Rekai love eating veggies now?", "Yes,he does"],
            ["What did Rekai’s mom say?", "To eat more veggies"],
            ["What did Rekai love eating?", "Pancakes"],

        ];

        $given_audio = [
            "mom-pancake.mp3",
            "love=secret.mp3",
            "secret-ingredient.mp3",
            "veggies.mp3",
            "mom-say.mp3",
            "love-eating.mp3",
        ];

        $paraName = "the-boy-only-ate-pancake.mp3";

        $given_answer = [
            ['Milk', 'A secret ingredient','An extra ingredient'],
            ['Yes,he does', "No,he doesn't"],
            ['Broccoli', 'Carrot', 'Butternut'],
            ['Yes,he does', "No, he does'nt"],
            ['To eat more pancake', 'To eat more veggies','To eat chocolate more'],
            ['chocolate', 'Carrot', 'Pancakes'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 999,
                        'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 999,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 999,
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

        $content = "I like to eat ………………………, …………………….., and …………………… \n I like to eat ……………………, and ……………………… because ……………………….";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1000,
                'q_content' => $content,
                'q_audio' => $audio."What-is-your-favorite-food.mp3",
                'q_image' => $images . "plate.png",
            ]

        ]);


/////////////////////////////////////////// End of Lesson 30 ///////////////////////////////////////////


/////////////////////////////////////////// Lesson 31 ///////////////////////////////////////////////



// Unit - 2 Listen and Repeat , Sub - 1 (Reading_carousel)


    $contents = [
        "meat-fish", "noodles", "potato", "prawns", "rice", "vegetables"
    ];


    $audio = $AudioDomain."Grade_4/Lesson_31/Listen_and_Repeat/";
    $img = $ImageDomain."Grade_4/Lesson_31/Listen_and_Repeat/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1002,
                'a_content' => $val,
                'a_image' => $img.$this->removeSpace($val).".png",
                'a_audio' => $audio.$this->removeSpace($val).".mp3"
            ],
        ]);
    }



// Lesson 31 Unit - 3 Practice <look_and_choose>

    $audio = $AudioDomain."Grade_4/Lesson_31/Practice/";
    $img = $ImageDomain."Grade_4/Lesson_31/Practice/";


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
        "energy", "health", "health", "growth", "energy", "growth", "growth","growth","energy",
    ];

    foreach ($given_ans as $key => $ga) {


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1003,
                'round' => $key + 1,
                'q_image' => $img.$this->removeSpace($ans[$key]).".png",
                'q_content' => "Food for ". $ga[0],
                'a_content' => $ga[0] == $ans[$key] ? true : false
            ]
        ]);
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1003,
                'round' => $key + 1,
                'q_content' => "Food for ". $ga[1],
                'a_content' => $ga[1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1003,
                'round' => $key + 1,
                'q_content' => "Food for ". $ga[2],
                'a_content' => $ga[2] == $ans[$key] ? true : false
            ]
        ]);

    }



    // Lesson 31 Unit 4 Speaking Practice <Speaking_and_recording>


    $contents = [
        'fish','egg','bread','vegetables','noodle',
    ];

    $Question_contents = [
        "What is your favorite food? \n My favorite food is salmon fish.",
        "What is your favorite food? \n ____ \n Why? \n ----.",
        "What is your favorite food? \n ____ \n Why? \n ----.",
        "What is your favorite food? \n ____ \n Why? \n ----.",
        "What is your favorite food? \n ____ \n Why? \n ----.",
    ];

    $q_instruction = [
        'fish','egg','bread','vegetables','noodle',
    ];


    $images = $ImageDomain . "Grade_4/Lesson_31/Speaking/";
    $audios = $AudioDomain . "Grade_4/Lesson_31/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 1004,
                'round' => $key + 1,
                'round_instruction' => $audio.$this->removeSpace($q_instruction[$key])."_round_ins".".mp3",
                'q_content' => $Question_contents[$key],
                // 'q_audio' => $audio.str_replace('?','',$this->removeSpace($value)).".mp3",
                'q_image' => $images.str_replace('?','',$this->removeSpace($value)).".png",
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
        ['Rice and eggs', 'Veggies and fruit','Meet and fish'],
        ['Veggies', 'Sweet food','Oily Food'],
        ['2', '3','4'],
        ['Veggies', 'Sweet food','Oily Food'],
        ['Rice and eggs', 'Veggies and fruit','Meet and fish'],
    ];

    $ans = [
        "Rice and eggs","Oily Food","3","Veggies", "Meet and fish"
    ];


    $audio = $AudioDomain."Grade_4/Lesson_32/Listening/";
    $img = $ImageDomain."Grade_4/Lesson_32/Listening/";

    $story = "Anna-daily";

        foreach ($questions as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1005,
                'round' => $key + 1,
                // 'q_audio' => $audio.$ans[$key].".mp3",
                'q_audio' => $audio.$story.".mp3",
                'q_content' => $given_ques[$key][0],
                'q_conver'  => $val."?",
                'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1005,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][1],
                'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1005,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][2],
                'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);
    }





    // Lesson 31 Unit - 6 Speaking Topic <Speaking_and_recording>


        $images = $ImageDomain . "Grade_4/Lesson_31/Speaking_Topic/";
        $audios = $AudioDomain . "Grade_4/Lesson_31/Speaking_Topic/";

        $content = "Which food do you like? \n Which foods are good for growth? \n Which foods are good for energy \n Which food are good for your health? ";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 1006,
                'q_content' => $content,
                'q_audio' => $audio."food-for-health.mp3",
                'q_image' => $images . "girl-eat.png",
            ]

        ]);













    }
}
