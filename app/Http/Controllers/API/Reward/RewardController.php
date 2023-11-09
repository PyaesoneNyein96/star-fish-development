<?php

namespace App\Http\Controllers\API\Reward;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\RewardResource;
use App\Models\Reward;
use App\Models\Stud_reward;
use Mockery\Undefined;

class RewardController extends Controller
{
    // =======
    // Point
    // =======

    public function getPoint($id)
    {
        $point = Student::where('id', $id)->first();

        return new RewardResource($point);
    }

    public function addPoint(Request $request)
    {
        $newPoint = $this->addPointFunction($request);
        if ($newPoint[1] >= 0 && $newPoint[1] <= 3000) {
            $level = ceil($newPoint[1] / 10);
            Student::where('id', $request->student_id)->update([
                'point' => $newPoint[0],
                'fixed_point' => $newPoint[1],
                'level' => $level,
                'board' => $newPoint[2]
            ]);
        } else {
            Student::where('id', $request->id)->update([
                'point' => $newPoint[0],
                'fixed_point' => $newPoint[1],
                'board' => $newPoint[2]
            ]);
        }

        return response()->json([
            'message' => 'points added'
        ]);
    }


    // =========
    // Reward
    // =========

    public function displayReward()
    {
        $reward = Reward::get();

        return new RewardResource($reward);
    }

    public function getReward($id)
    {
        $studReward = Stud_reward::select('rewards.*', 'stud_rewards.*')
            ->leftJoin('rewards', 'stud_rewards.reward_id', 'rewards.id')
            ->where('stud_rewards.student_id', $id)
            ->get();

        return new RewardResource($studReward);
    }

    public function buyReward(Request $request)
    {
        $point = Student::where('id', $request->student_id)->first();
        if ($point->point < (int)$request->reward_point) {
            return response()->json([
                'error' => 'not enough points'
            ], 403);
        } else {
            $rewardConflict = Stud_reward::where('student_id', $request->student_id)->get();
            $newPoint = $point->point - (int)$request->reward_point;

            if ($rewardConflict->toArray() == []) {
                Student::where('id', $request->student_id)->update([
                    'point' => $newPoint
                ]);

                $studReward = Stud_reward::where('student_id', $request->student_id)->create([
                    'student_id' => $request->student_id,
                    'reward_id' => $request->reward_id
                ]);

                return new RewardResource($studReward);
            } else {
                foreach ($rewardConflict as $r) {
                    if ($request->reward_id == $r->reward_id) {
                        return response()->json([
                            'error' => 'reward already exist'
                        ], 403);
                    } else {
                        Student::where('id', $request->student_id)->update([
                            'point' => $newPoint
                        ]);

                        $studReward = Stud_reward::where('student_id', $request->student_id)->create([
                            'student_id' => $request->student_id,
                            'reward_id' => $request->reward_id
                        ]);

                        return new RewardResource($studReward);
                    }
                }
            }
        }
    }

    private function addPointFunction($request)
    {
        $oldPoint = Student::where('id', $request->student_id)->first();
        $newPoint = $oldPoint->point + (int)$request->point;
        $newFixPoint = $oldPoint->fixed_point + (int)$request->point;

        if ($oldPoint->level >= 1 && $oldPoint->level <= 50) {
            $board = 'silver';
        }
        if ($oldPoint->level >= 51 && $oldPoint->level <= 100) {
            $board = 'platinum';
        }
        if ($oldPoint->level >= 101 && $oldPoint->level <= 200) {
            $board = 'gold';
        }
        if ($oldPoint->level >= 201 && $oldPoint->level <= 300) {
            $board = 'diamond';
        }
        return [$newPoint, $newFixPoint, $board];
    }
}
