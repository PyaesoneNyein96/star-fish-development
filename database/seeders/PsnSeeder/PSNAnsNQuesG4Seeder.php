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


        ////////////////////////////////////////////////////
        ////    Grade 4  Lesson 4 unit 5* or 6 ( no rounds )

        // $G4L4U5 = range(1,8);
        // // $G4L4U5 = [1,2,3,4,5,6,7,8];
        // $G4L4U5content = [
        //     'She has brown hair. She has straight and short hair. She has brown eyes.',
        //     'He has brown hair. He has straight and short hair.',
        //     'She has brown hair. She has long curly hair. ',
        //     'She has grey hair. She has straight and long hair. ',
        //     'She has pink hair. She has long curly hair.',
        //     'He has brown hair. He has short curly hair.',
        //     'He has short hair. He has straight hair. He is lazy. ',
        //     'She has short curly hair. She had dark hair. She is cheerful. She has blue eyes.',
        //     // 'He has short hair. He has straight hair. He has blue eyes. He is hard-working.',
        // ];
        // $G4L4U5Img = $ImageDomain."Grade_4/lesson_4/Listen_and_Practice/";
        // $G4L4U5Audio = $AudioDomain."Grade_4/Lesson_4/Listen_and_Practice/";

        //     foreach ($G4L4U5 as $v) {
        //         DB::table('ans_n_ques')->insert([
        //             [ 'game_id' => 272, 'q_image' => $G4L4U5Img.$G4L4U5[$v - 1].".png",
        //              'q_audio' => $G4L4U5Audio.$G4L4U5[$v - 1].".mp3", 'a_content' => $G4L4U5content[$v - 1] ],
        //         ]);
        //     }





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



        $images = $ImageDomain . "Grade_4/Lesson_40/Speaking/";
        $audios = $AudioDomain . "Grade_4/Lesson_40/Speaking/";

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



  // Unit - 3  Choose <look_and_choose>

        $audio = $AudioDomain."Grade_4/Lesson_7/Practice_2/";
        $img = $ImageDomain."Grade_4/Lesson_7/Practice_2/";


        $given_ans = [
            'Land animal', 'Sea animal',
        ];

        $ans = [
            'Land animal','On the right', 'On the left',
            'Walk up', 'Walk along', 'Turn right','Go straight'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 729,
                    'round' => $key + 1,
                    'q_image' => $img.$this->removeSpace($ans[$key]).".png",
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 729,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);
        }













    }
}
