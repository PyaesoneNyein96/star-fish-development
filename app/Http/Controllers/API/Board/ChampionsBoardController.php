<?php

namespace App\Http\Controllers\API\Board;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class ChampionsBoardController extends Controller
{
    public function getAll(Request $request)
    {
        $board = $request->header("name");

        $data = Student::where('board', $board)
            ->orderBy('fixed_point', 'desc')
            ->take(50)
            ->get();

        return response()->json($data);
    }
}
