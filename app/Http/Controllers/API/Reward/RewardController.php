<?php

namespace App\Http\Controllers\API\Reward;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reward;
use App\Models\Stud_reward;
use Mockery\Undefined;

class RewardController extends Controller
{
    private $domain, $achieve, $each_ach, $profiles;

    public function __construct()
    {
        $this->domain = app('domain');
        $this->achieve = $this->domain . "/storage/images/Achievement/Main/";
        $this->each_ach = $this->domain . "/storage/images/Achievement/Each_achieve/";
        $this->profiles = $this->domain . "/storage/images/Achievement/Profiles/";
    }



    // =======
    // Point
    // =======

    public function getPoint($id)
    {
        $point = Student::where('id', $id)->first();

        return $point;
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

    public function displayAllReward(Request $request)
    {
        $token = $request->header("token");
        $data = Reward::where('type', "achieve")->get()->groupBy('name');
        $stu = Student::where('token', $token)->first();

        if (!$stu) return response()->json(["message" => "user not found"], 403);
        if (count($data) == 0) return response()->json(["message" => "data not found"], 404);

        $point = 30;
        foreach ($data as $name => $item) {
            $reward[] = [
                "name" => $name,
                "item" => $this->achieve .  str_replace(
                    ' ',
                    '-',
                    $name
                ) . ".png",
                "lock" => $stu->fixed_point < $point ? 1 : 0,
            ];
            $point *= 2;
        }

        return $reward;
    }

    public function displayEachReward(Request $request)
    {
        $token = $request->header("token");
        $name = $request->header("name");

        $id = Student::where('token', $token)->first();
        $data = Reward::where("name", $name)->get();

        if (!$id) return response()->json(["message" => "user not found"], 403);
        if (count($data) == 0) return response()->json(["message" => "data not found"], 404);

        foreach ($data as $d) {
            $stuReward = Stud_reward::where("student_id", $id->id)->where("reward_id", $d->id)->first();
            $d["item"] = $this->each_ach . $name . "/" . $d->item . ".png";
            $d["bought"] = $stuReward ? 1 : 0;
        }

        return $data;
    }

    public function displayEachProfile(Request $request)
    {
        $token = $request->header("token");
        $data = Reward::where('type', "profile")->get()->groupBy('name');
        $stu = Student::where('token', $token)->first();

        if (!$stu) return response()->json(["message" => "user not found"], 403);
        if (count($data) == 0) return response()->json(["message" => "data not found"], 404);

        $point = 50;
        foreach ($data as $name => $item) {
            $reward[] = [
                "name" => $name,
                "item" => $this->profiles . str_replace(
                    ' ',
                    '-',
                    $name
                ) . ".png",
                "lock" => $stu->fixed_point < $point ? 1 : 0,
            ];
            $point *= 2;
        }

        return $reward;
    }

    public function getReward(Request $request)
    {
        $token = $request->header("token");

        $id = Student::where('token', $token)->first();
        if (!$id) return response()->json(["message" => "user not found"], 403);

        $studReward = Stud_reward::select('rewards.*', 'stud_rewards.*')
            ->leftJoin('rewards', 'stud_rewards.reward_id', 'rewards.id')
            ->where('stud_rewards.student_id', $id->id)
            ->get();

        if (count($studReward) == 0) return response()->json(["message" => "You haven't bought anything."]);

        return ($studReward);
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

                return ($studReward);
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

                        return ($studReward);
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
