<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameInstructionSeeder extends Seeder
{
    public function run(): void
    {


        $domain = app('domain');
        // $Path1 = "/storage/audios/Grade_1/Lesson_1/listen_practice/instructions/";
        // $Path2 = "/storage/audios/Grade_1/Lesson_1/Writing_Arranging_Order/instructions/";

        $Grade1Instructions = "/storage/audios/Instructions/";

        DB::table('game_instructions')->insert([

            // G-1 lesson_1 U-2
            ['content' => "Find the capital letter in the sentence", 'game_id' => 2, 'audio' => $domain.$Grade1Instructions."Reading-the-alphabet-and-repeat".".mp3" ],

            // G-1 lesson_1 U-4
             ['content' => "Listen and pop the bubbles of alphabet", 'game_id' => 4, 'audio' => $domain.$Grade1Instructions."Listen-and-pop-the-bubbles-of-alphabet".".mp3" ],

            ['content' => "Find the capital letter in the sentence", 'game_id' => 4, 'audio' => $domain.$Grade1Instructions."Find-the-capital-letter-in-the-sentences".".mp3" ],

            // G-1 lesson_1 U-5
            ['content' => "Arranging the letters of alphabet in order", 'game_id' => 5, 'audio' => $domain.$Grade1Instructions."Arranging-the-letters-of-alphabet-in-order".".mp3" ],


        ]);

        //////////////


        DB::table('game_instructions')->insert([

            [
                'content' => "Reading-the-alphabet-and-repeat-after-each", "game_id" => 7,
                'audio' => $domain.$Grade1Instructions."Reading-the-alphabet-and-repeat-after-each".".mp3"
            ],
            [
                'content' => "Listen and pop the bubbles of alphabet", "game_id" => 9,
                'audio' => $domain.$Grade1Instructions."Listen-and-pop-the-bubbles-of-alphabet".".mp3"
            ],
            // [
            //     'content' => "Arranging the letters of alphabet in order", "game_id" => 11,
            //     'audio' => $domain.$Grade1Instructions."Arranging-the-letters-of-alphabet-in-order".".mp3"
            // ],



        ]);

        // DB::table('game_instructions')->insert([
        //     ['content' => "subOne GIF ......" ,"game_id" => 17 ,],
        //     ['content' => "subTwo GIF ......" ,"game_id" => 18 ,],
        // ]);



    }
}
