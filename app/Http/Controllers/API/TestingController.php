<?php

namespace App\Http\Controllers\API;

use App\Models\Grade;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Http\Controllers\Controller;

class TestingController extends Controller
{
    //

    public function lessonRecordSeeding(Request $request)
    {


        $grade_id = $request->header('grade_id');
        $start_id = $request->header('start_lesson_id');
        $end_id = $request->header('end_lesson_id');
        $count = $request->header('count');

        $student = $request->student;

        $isValid = Grade::find($grade_id)->lessons->pluck('id');


        if (!$grade_id || !$start_id || !($end_id || $count)) return response()->json(['message' => "Invalid request format!"], 403);


        if ($end_id) {
            $range = range($start_id, $end_id);
        } else {
            $range = range($start_id, $start_id + $count);
        }



        $isValid_start = in_array($start_id, $isValid->toArray());
        $isValid_end = in_array(collect($range)->last(), $isValid->toArray());

        if (!$isValid_start || !$isValid_end) {
            return "lesson not match with grade";
        }

        $oldRecords = $student->lessons;

        $filter = collect($range)->filter(function ($r) use ($oldRecords) {
            return !in_array($r, $oldRecords->pluck('id')->toArray());
        });

        foreach ($filter->values() as $k => $value) {

            StudentLesson::create([
                'student_id' => $student->id,
                'grade_id' => $grade_id,
                'lesson_id' => $value,
                'count' => 1,
            ]);
        }


        return "done";
    }


    public function lessonRecordDelete(Request $request)
    {

        $student = $request->student;

        $recordsId = $request->student->lessons->pluck('id');

        $start = $request->header('start_lesson_id');
        $end = $request->header('end_lesson_id');


        $rec = $recordsId->filter(function ($r) use ($start, $end) {
            return $r >= $start && $r <= $end;
        });


        if ($rec->count() > 0) {
            $del = StudentLesson::where('student_id', $student->id)
                ->whereIn('lesson_id', $rec)->delete();
        } else {
            return "nothing to delete";
        }


        if ($del) return "deleted";
    }
}
