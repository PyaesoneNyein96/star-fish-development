<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameInstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $domain = app('domain');
        $Path1 = "storage/audios/Grade_1/Lesson_1/listen_practice/instructions/";
        $Path2 = "storage/audios/Grade_1/Lesson_1/Writing_Arranging_Order/instructions/";

        DB::table('game_instructions')->insert([
            // G-1 lesson_1 U-4
            ['content' => "Find the capital letter in the sentence", 'game_id' => 4, 'audio' => $domain.$Path1."Find-the-capital-letter-in-the".".mp3" ],

            ['content' => "Listen and pop the bubbles", 'game_id' => 4, 'audio' => $domain.$Path1."Listen-and-pop-the-bubbles-of".".mp3" ],
        ]);


        DB::table('game_instructions')->insert([
            // G-1 lesson_1 U-5
            ['content' => "Arranging the letters of alphabets", 'game_id' => 5, 'audio' => $domain.$Path2."Arranging-the-letters-of-alpha".".mp3" ],
        ]);

    }
}
