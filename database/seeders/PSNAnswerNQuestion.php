<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PSNAnswerNQuestion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


                ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 7 Game 38,39 (Sub Units)
        ////////////////////////////////////////////////////////

        $g1_l7_u6_trace_n_write = [
            'G','H','e','f','g','h','F','E'
        ];
            foreach ($g1_l7_u6_trace_n_write as $i => $trace) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 39, 'q_audio' => $trace.".mp3"
                    ,'q_image' =>$trace.".GIF",'q_content' => $trace],
                ]);
            }

        $g1_l7_u6_rearrange_the_letter_q1 = [
            ['A','B','L','L'],
            ['A','C','E','K'],
            ['G','D','O'],
            ['D','U','S','T','R','E'],
            ['P','A','E','L','P'],
            ['N','A','T'],
        ];

        $g1_l7_u6_rearrange_the_letter_q2 = [
            '_all','_ake','_og','_uster','_pple','_nt'
        ];

        $correctAns =   [

         ['B'],
         ['C'],
         ['D'],
         ['D'],
         ['A'],
         ['A'],

        ];

        $g1_l7_u6_rearrange_the_letter_a = [
            'BALL','CAKE','DOG','DUSTER','APPLE','ANT'
        ];




        for ($i=0; $i < count($g1_l7_u6_rearrange_the_letter_q1) ; $i++) {

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 40,
                    'q_audio' => $g1_l7_u6_rearrange_the_letter_a[$i].".mp3",
                    'q_image' =>$g1_l7_u6_rearrange_the_letter_a[$i]."_image".".jpg" ,
                    'q_content' => $g1_l7_u6_rearrange_the_letter_q2[$i],
                    'a_content' => $g1_l7_u6_rearrange_the_letter_a[$i]
                ],
            ]);

            $roundAnswers = [];
            foreach ($g1_l7_u6_rearrange_the_letter_q1[$i] as $k => $word) {

                $isCorrect = in_array($word, $correctAns[$i]);
                $roundAnswers[] = $isCorrect;

                DB::table('ans_n_ques')->insert([
                    [   'round' => $i + 1, 'game_id' => 40,
                        'q_audio' => $word.".mp3",'q_content' => $word,
                        'a_content' => $isCorrect ? 1 : 0,
                    ]
                ]);
            }

            $roundAnswer = implode('', $roundAnswers);

            // DB::table('ans_n_ques')->insert([
            //     [
            //         'round' => $i + 1, 'game_id' => 40,
            //         'q_audio' => $g1_l7_u6_rearrange_the_letter_a[$i].".mp3",
            //         'q_image' =>$g1_l7_u6_rearrange_the_letter_a[$i]."_image".".jpg" ,
            //         'q_content' => $g1_l7_u6_rearrange_the_letter_q2[$i],
            //         'a_content' => $g1_l7_u6_rearrange_the_letter_a[$i]
            //     ],
            // ]);

        }


    ////////////////////////////////////////////////////////
    ////    Grade 1  Lesson 17 Games
    ////////////////////////////////////////////////////////


    //    Grade 1  Lesson 17 Games 2 subunit 1
    $bodyParts = ['Hair','Eye','Cheek','Lip','Tooth','Mouth','Chin'];
    foreach ($bodyParts as $part) {
          DB::table('ans_n_ques')->insert([
                ['game_id' => 99, 'q_audio' => $part.".mp3"
                ,'q_image' =>$part."image".".jpg" ],
            ]);
    }

      //    Grade 1  Lesson 17 Games 2 subunit 2


        $instructions = [ "don't touch your face", "don't touch your mouth",
                "don't touch your nose", "Touch your cheek","Touch your ears",
                "Touch your hair","Touch your Lips", "Touch your nose"
            ];

        foreach ($instructions as $key) {

            DB::table('ans_n_ques')->insert([
                ['game_id' => 100, 'a_content' => $key, 'a_image' => $key . ".png", 'a_audio' =>  $key . ".mp3"],
            ]);
        }












    }
}