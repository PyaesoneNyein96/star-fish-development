<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Student;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentExist
{

    public function handle(Request $request, Closure $next): Response
    {

        $student = Student::where('email',$request->emailOrPhone)
        ->orWhere('phone',$request->emailOrPhone)->first();
        if(!$student){
            return response()->json([
                "message" => "User not found!"
            ], 404);
        }
        $request->merge(['student' => $student]);
        return $next($request);
    }
}
