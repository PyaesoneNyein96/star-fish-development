<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $domain = app('domain');

        $ImageDomain = $domain."/storage/images/";
        $AtoZAudio = $domain."/storage/audios/AtoZ/";

        // $domainAndAudioPath = $domain."/storage/AtoZ/";
        $prefix = "SubBlock_";



////////////////////////////////////////////////////
////   CLOUD //////////     Grade 1  Lesson 1 Game 4 Round_ID (1 to 10) total 70
////////////////////////////////////////////////////

        $G1_l1_U4_rounds = [

            ['D','k','f','e','W','j','G'],
            ['E','K','H','M','T','M','L'],
            ['R','M','H','W','O','A','Y'],
            ['S','B','M','F','I','D','Z'],
            ['W','g','y','e','I','T','f'],
            ['N','M','r','e','m','Y','A'],
            ['g','u','y','F','c','I','J'],
            ['D','k','f','A','W','E','G'],
            ['y','B','S','F','e','I','Z'],
            ['e','K','S','M','T','M','p'],

        ];

        for ($i = 1; $i <= count($G1_l1_U4_rounds) ; $i++) {
            foreach ($G1_l1_U4_rounds[$i -1] as  $word) {
               DB::table('question_contents')->insert([
                    ['round_id' => $i,'content' => $word ],
                ]);
            }
        }


////////////////////////////////////////////////////////
////  CLOUD //////////   Grade 1  Lesson 2 Game 9  Round_ID (14,15,16,17) total 4
///////////////////////////////////////////////////////

        $G1_l2_U9_rounds = [
          ['D','z','h','e','a','f','e','I'],
          ['h','z','g','v','a','o','x','P'],
          ['i','z','g','y','s','o','x','P'],
          ['i','t','c','n','m','r','I','e'],
        ];

        for ($i = 1; $i <= count($G1_l2_U9_rounds) ; $i++) {
            foreach ($G1_l2_U9_rounds[$i - 1] as  $word) {
               DB::table('question_contents')->insert([
                    ['round_id' => $i + 16,'content' => $word, 'audio' => $AtoZAudio.$prefix.strtoupper($word).".mp3" ],
                ]);
            }
        }


////////////////////////////////////////////////////////
////   CLOUD //////////     Grade 1  Lesson 12 Game 6  SubUnit(I)
///////////////////////////////////////////////////////

        // $G1_l12_subunit_data = [
        //     DB::table('question_contents')->insert([
        //         ['subunit_id' => 1 ,'content' => "G_image", 'image' => "G_instruction_image" ],
        //         ['subunit_id' => 1 ,'content' => "H_image", 'image' => "H_instruction_image" ],
        //         ['subunit_id' => 1 ,'content' => "e_image", 'image' => "e_instruction_image" ],
        //         ['subunit_id' => 1 ,'content' => "f_image", 'image' => "f_instruction_image" ],
        //         ['subunit_id' => 1 ,'content' => "g_image", 'image' => "g_instruction_image" ],
        //         ['subunit_id' => 1 ,'content' => "h_image", 'image' => "h_instruction_image" ],
        //         ['subunit_id' => 1 ,'content' => "F_image", 'image' => "F_instruction_image" ],
        //         ['subunit_id' => 1 ,'content' => "E_image", 'image' => "E_instruction_image" ],
        //     ])
        // ];







    }

}
