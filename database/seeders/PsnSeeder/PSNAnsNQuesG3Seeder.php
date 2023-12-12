<?php

namespace Database\Seeders\PsnSeeder;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PSNAnsNQuesG3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
   {
        $domain = app('domain');

        $ImageDomain = $domain . "/storage/images/";
        $AudioDomain = $domain . "/storage/audios/";
        $AtoZAudio = $domain . "/storage/audios/AtoZ/";
        $ImageDomainAZ = $domain . "/storage/images/AtoZ/";
        $ImageDomainAZ_small = $domain . "/storage/images/AtoZ_Small/";
        $prefix = "SubBlock_";

        $backgroundDomain = $domain."/storage/images/Backgrounds/";

        $AtoZUpdate = $domain."/storage/audios/A_to_Z_update/";


        $prefix = "SubBlock_";
        $AtoZ = range('A', 'Z');




        ////////////////////////////////////////////////////
        ////    Grade 3  Lesson 26 unit 7 ( no round )

        $questions_G3_L26_U7 = "
            What time do you get up in the morning? \n\n What time do you take the bath? \n\n What time do you eat breakfast? \n\n What time do you go to school? \n\n What time do you eat lunch? \n\n What time do you come back home? \n\n What time do you do homework? \n\n What time do you eat dinner? \n\n
            What time do you go to bed? \n\n
        ";

        $sampleANs_G3_L26_U7 =
            "A \n\n B \n\n C \n\n D \n\n E \n\n F \n\n G \n\n H \n\n I \n\n ";


            DB::table('ans_n_ques')->insert([
                [ 'game_id' => 113, 'q_content' => $questions_G3_L26_U7,
                  'a_content' => $sampleANs_G3_L26_U7],
            ]);






        ////////////////////////////////////////////////////
        ////    Grade 3  Lesson 33 unit 3 ( rounds )

        $qImg = $ImageDomain."Grade_3/lesson_33/Write_the_opposite/";

        $q_content_G3_L33_U3 = [
            'noisy','expensive','ugly(man)','fat','married','old','easy','poor'
        ];
        $a_content_G3_L33_U3 = [
            'quiet','cheap','handsome','thin','single','young','difficult','rich'
        ];


        foreach ($q_content_G3_L33_U3 as $key => $value) {
             DB::table('ans_n_ques')->insert([
                [
                 'game_id' => 117, 'round' => $key + 1, 'q_image' => $qImg."oppositeImage".".png",
                 'q_content' => $value, 'a_content' => $a_content_G3_L33_U3[$key]
                ],
            ]);
        }









    }
}
