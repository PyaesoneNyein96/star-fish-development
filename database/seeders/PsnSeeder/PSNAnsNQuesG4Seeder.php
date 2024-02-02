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
                    'q_content' => "Jack-and-animals",
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



    /////////////////////////////////////////////////////////// Lesson 9 /////////////////////////////////////////////////////////////////

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


























    }
}