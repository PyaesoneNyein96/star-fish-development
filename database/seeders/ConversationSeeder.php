<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConversationSeeder extends Seeder
{

    public function run(): void
    {


        $domain = "http://localhost:8000";
        $ImageDomain = $domain."/storage/images/";

        DB::table('conversations')->insert([

                ['round_id' => 1,'content' => $ImageDomain."Grade_1/"."lesson_1/"."listen_practice"."/round_1/"."What_s_ur_name".".png",],

        ]);
    }
}
