<?php

namespace Database\Seeders\Assessment\Grade1;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('assessment_ans_n_ques')->insert(['assess_id' => 1, 'a_content' => 'lesson_3_video',]);
        DB::table('assessment_ans_n_ques')->insert(['assess_id' => 2, 'a_content' => 'lesson_3_video_global']);



        DB::table('assessment_ans_n_ques')->insert([
            ['round' => 1, 'assess_id' => 3, 'a_image' => "susan.gif", "a_audio" => "helloiamsusan.mp3", "a_conver" =>  "susan-hello.png", "background" =>  "bg.png"],
            ['round' => 1, 'assess_id' => 3, 'a_image' => "mary.gif", "a_audio" => "merry_nicetomeetyou.mp3", "a_conver" =>  "nice-to.png", "background" =>  "bg.png"],

            ['round' => 2, 'assess_id' => 3, 'a_image' => "mary.gif", "a_audio" => "helloiammerry.mp3", "a_conver" =>  "mary-hello.png", "background" =>  "bg.png"],
            ['round' => 2, 'assess_id' => 3, 'a_image' => "susan.gif", "a_audio" => "nicetomeetyou_susan.mp3", "a_conver" =>  "nice-to.png", "background" =>  "bg.png"],

            ['round' => 3, 'assess_id' => 3, 'a_image' => "tom.gif", "a_audio" => "helloiamtom.mp3", "a_conver" =>  "tom-hello.png", "background" =>  "bg.png"],
            ['round' => 3, 'assess_id' => 3, 'a_image' => "jerry.gif", "a_audio" => "jerry_nicetomeetyou.mp3", "a_conver" =>  "nice-to.png", "background" =>  "bg.png"],

            ['round' => 4, 'assess_id' => 3, 'a_image' => "jerry.gif", "a_audio" => "helloiamjerry.mp3", "a_conver" =>  "jerry-hello.png", "background" =>  "bg.png"],
            ['round' => 4, 'assess_id' => 3, 'a_image' => "tom.gif", "a_audio" => "tom_nicetomeetyou.mp3", "a_conver" =>  "nice-to.png", "background" =>  "bg.png"],

        ]);
    }
}
