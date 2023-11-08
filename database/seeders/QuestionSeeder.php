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


        $domain = "http://localhost:8000";
        $ImageDomain = $domain."/storage/images/";
        $AudioDomain = $domain."/storage/audios/";

        $game4 = ['D','e','f','G','j','k','w'];

        // Grade Lesson-1, game-4
            // Round - 1
        foreach ($game4 as $img) {
            DB::table('question_contents')->insert([
                ['round_id' => 1,'image' => $ImageDomain."Grade_1/"."lesson_1/"."listen_practice"."/round_1/".$img.".png",],
            ]);
        }

        foreach (['E','H','K','L','M','Small_M','T'] as $img) {
            DB::table('question_contents')->insert([
                ['round_id' => 2,'image' => $ImageDomain."Grade_1/"."lesson_1/"."listen_practice"."/round_2/".$img.".png",],
            ]);
        }


    }

}
