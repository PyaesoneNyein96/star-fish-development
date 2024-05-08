<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Student;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isSubscriber
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        $student = Student::where('token',$request->header('token'))->first();

        if(!$student) return response()->json("Student not found.", 404);
        if(!$student->isSubscriber && $student->grades->count() == 0 ) return response()->json("You are not a subscriber.", 403);

        $request->merge(['student' => $student]);
        return $next($request);
    }
}
