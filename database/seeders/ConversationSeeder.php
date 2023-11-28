<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConversationSeeder extends Seeder
{

    public function run(): void
    {
        $domain = app('domain');
        // $domain = "http://localhost:8000";
        $ImageDomain = $domain."/storage/images/";
        $AudioDomain = $domain."/storage/audios/";

        $G1_L1_U4_path = "Grade_1/"."Lesson_1/"."listen_practice/";

        $rounds = [

            "What's your name?",
            "My name's Mary.",
            "How are you?",
            "I'm fine.",
            "It's a bag.",
            "My name's Yuki.",
            "I'm from Japan.",
            "Apples are red.",
            "I'm Susan.",
            "My name's Tom.",

        ];

        $audios = [

            "Whats_your_name", "My_names_Mary", "How_are_you", "Im_fine", "Its_a_bag", "My-names-Yuki", "Im-from-Japan", "Apples-are-red", "My-names-Tom", "Im-Susan"

        ];


        for ($r=1; $r <= count($rounds) ; $r++) {
            DB::table('conversations')->insert([
                ['content' =>$rounds[$r -1] , 'audio' => $AudioDomain.$G1_L1_U4_path.$audios[$r -1].".mp3", 'round_id' => $r],
            ]);
        }





    }


}