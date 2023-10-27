<?php

namespace App\Http\Controllers\API\Lessons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonController extends Controller
{


public function lessonTest(){

    $data = Grade::where('id',1)->first();
    $data->delete();

    }

}
