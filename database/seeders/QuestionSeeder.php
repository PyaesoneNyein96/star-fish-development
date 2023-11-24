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

            ['D','e','f','G','j','k','w'],
            ['E','H','K','L','M','m','T'],
            ['A','H','M','O','R','W','Y'],
            ['A','H','M','O','R','W','Y'],
            ['e','f','g','I','T','W','y'],
            ['A','e','M','N','r','m','y'],
            ['c','F','g','I','J','u','y'],
            ['A','D','E','f','G','k','W'],
            ['B','e','F','I','S','y','Z'],
            ['e','K','M','M2','P','S','T']

        ];

        for ($i = 1; $i <= count($G1_l1_U4_rounds) ; $i++) {
            foreach ($G1_l1_U4_rounds[$i -1] as  $word) {
               DB::table('question_contents')->insert([
                    ['round_id' => $i,'content' => $word ],
                ]);
            }
        }


////////////////////////////////////////////////////////
////   CLOUD //////////     Grade 1  Lesson 2 Game 9  Round_ID (14,15,16,17) total 4
///////////////////////////////////////////////////////

          $G1_l2_U9_rounds = [
            ['D','z','h','e','a','f','e','I'],
            ['i','z','g','y','s','o','x','P'],
            ['i','t','c','n','m','r','L','e'],
            ['A','B','C','D','E','F','G','H'],
          ];

        for ($i = 1; $i <= count($G1_l2_U9_rounds) ; $i++) {
            foreach ($G1_l2_U9_rounds[$i - 1] as  $word) {
               DB::table('question_contents')->insert([
                    ['round_id' => $i + 13,'content' => $word, 'audio' => $AtoZAudio.$prefix.strtoupper($word).".mp3" ],
                ]);
            }
        }









        // // R_1
        // foreach (['D','e','f','G','j','k','w'] as $img) {
        //     DB::table('question_contents')->insert([
        //         ['round_id' => 1,'image' => $ImageDomain."Grade_1/"."lesson_1/"."listen_practice"."/round_1/".$img.".png",],
        //     ]);
        // }
        // // R_2
        // foreach (['E','H','K','L','M','Small_M','T'] as $img) {
        //     DB::table('question_contents')->insert([
        //         ['round_id' => 2,'image' => $ImageDomain."Grade_1/"."lesson_1/"."listen_practice"."/round_2/".$img.".png",],
        //     ]);
        // }

        // // R_3
        // foreach (['A','H','M','O','R','W','Y'] as $img) {
        //     DB::table('question_contents')->insert([
        //         ['round_id' => 3,'image' => $ImageDomain."Grade_1/"."lesson_1/"."listen_practice"."/round_3/".$img.".png",],
        //     ]);
        // }

        // // R_4
        // foreach (['A','H','M','O','R','W','Y'] as $img) {
        //     DB::table('question_contents')->insert([
        //         ['round_id' => 4,'image' => $ImageDomain."Grade_1/"."lesson_1/"."listen_practice"."/round_4/".$img.".png",],
        //     ]);
        // }

        // // R_5
        // foreach (['e','f','g','I','T','W','y'] as $img) {
        //     DB::table('question_contents')->insert([
        //         ['round_id' => 5,'image' => $ImageDomain."Grade_1/"."lesson_1/"."listen_practice"."/round_5/".$img.".png",],
        //     ]);
        // }

        // // R_6
        // foreach (['A','e','M','N','r','Small_M','y'] as $img) {
        //     DB::table('question_contents')->insert([
        //         ['round_id' => 6,'image' => $ImageDomain."Grade_1/"."lesson_1/"."listen_practice"."/round_5/".$img.".png",],
        //     ]);
        // }




    }

}
