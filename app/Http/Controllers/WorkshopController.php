<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Unit;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\GameAudio;
use App\Models\GameImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WorkshopController extends Controller
{
    //

    public function user(Request $request){

    //   return  Student::where('isLocal',1)->with(['country' => function($cy){
    //     $cy->select('id','name','timezone');
    //   },'city' => function($ct) {
    //     $ct->select('id','name');
    //   }])->get();

        $students = Student::where('isLocal',1)->with('city','country')->get();

       return $students->each(function ($student) {
        if ($student->country) {
            $student->city->makeHidden(['created_at', 'updated_at']);
            $student->country->makeHidden(['created_at', 'updated_at']);
        }

    });

    }


    public function lessons(){


        // Cache::flush();

       $lessons = Cache::rememberForever('lessons', function () {

            return Unit::with(['lesson' => function ($q) {
                $q->select('id','name');
            }])->get();
       });

       return  $lessons;

    }


    public function gameAudio(){

        GameAudio::insert([
            'game_id' => 2,
            'audio_id' => 2,
        ]);

        GameImage::insert([
            'game_id' => 2,
            'image_id' => 1,
        ]);

        $games = Game::where('id',2)->with(['images','audios'])->get();

        dd($games->toArray());

    }








}
