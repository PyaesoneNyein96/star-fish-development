<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

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








}
