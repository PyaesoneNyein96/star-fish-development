<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Student;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GameAuthMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {

        $student = Student::where('token',$request->header('token'))->first();

        if(!$student) return response()->json("Student not found.", 404);

        $request->merge(['student' => $student]);
        return $next($request);
    }
}
