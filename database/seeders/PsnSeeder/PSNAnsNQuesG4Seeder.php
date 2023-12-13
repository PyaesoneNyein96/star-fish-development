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

        $AtiZUpdate = [
            'A-for-apple','B-for-ball','C-for-Cat','D-for-Dog','E-for-Elephant','F-for-Fish', 'G-for-Grapes','H-for-Hat','I-for-Ice-cream', 'J-for-Jug',
            'K-for-Kite','L-for-Lion','M-for-mouse','N-for-Noodles','O-for-Orange',
            'P-for-Panda','Q-for-Quail','R-for-ring','S-for-Snake','T-for-Tree','U-for-Umbrella','V-for-Violin','W-for-Whale','X-for-xylophone','Y-for-Yacht','Z-for-Zebra'
        ];
        // $domainAndAudioPath = $domain."/storage/AtoZ/";
        $prefix = "SubBlock_";
        $AtoZ = range('A', 'Z');


        ////////////////////////////////////////////////////
        ////    Grade 4  Lesson 4 unit 5 or 6 ( no rounds )

        $G4L4U5 = range(1,8);
        // $G4L4U5 = [1,2,3,4,5,6,7,8];
        $G4L4U5content = [
            'She has brown hair. She has straight and short hair. She has brown eyes.',
            'He has brown hair. He has straight and short hair.',
            'She has brown hair. She has long curly hair. ',
            'She has grey hair. She has straight and long hair. ',
            'She has pink hair. She has long curly hair.',
            'He has brown hair. He has short curly hair.',
            'He has short hair. He has straight hair. He is lazy. ',
            'She has short curly hair. She had dark hair. She is cheerful. She has blue eyes.',
            // 'He has short hair. He has straight hair. He has blue eyes. He is hard-working.',
        ];
        $G4L4U5Img = $ImageDomain."Grade_4/lesson_4/Listen_and_Practice/";
        $G4L4U5Audio = $AudioDomain."Grade_4/Lesson_4/Listen_and_Practice/";

            foreach ($G4L4U5 as $v) {
                DB::table('ans_n_ques')->insert([
                    [ 'game_id' => 125, 'q_image' => $G4L4U5Img.$G4L4U5[$v - 1].".png",
                     'q_audio' => $G4L4U5Audio.$G4L4U5[$v - 1].".mp3", 'a_content' => $G4L4U5content[$v - 1] ],
                ]);
            }




    }
}
