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

        $newPoint[0] = $newPoint[0] >= 3000 ? 3000 : $newPoint[0];
        $newPoint[1] = $newPoint[1] >= 3000 ? 3000 : $newPoint[1];



        if ($newPoint[1] >= 0 && $newPoint[1] <= 3000) {
            $level = floor($newPoint[1] / 10);
            Student::where('id', $request->student_id)->update([
                'point' => $newPoint[0],
                'fixed_point' => $newPoint[1],
                'level' => $level,
                'board' => $newPoint[2]
            ]);
        } else {
            Student::where('id', $request->student_id)->update([
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
        if (!$token) return response()->json(["error" => "token is required."], 400);

        $data = Reward::where('type', "achieve")->get()->groupBy('name');
        $stu = Student::where('token', $token)->first();

        if (!$stu) return response()->json(["error" => "user not found"], 400);
        if (count($data) == 0) return response()->json(["error" => "data not found"], 404);

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
            $point += 30;
        }

        return $reward;
    }

    public function displayEachReward(Request $request)
    {
        $token = $request->header("token");
        $name = $request->header("name");

        if (!$token || !$name) return response()->json(["error" => "token or name is required."], 400);

        $id = Student::where('token', $token)->first();
        $data = Reward::where("name", $name)->where('type', "achieve")->get();

        if (!$id) return response()->json(["error" => "user not found"], 400);
        if (count($data) == 0) return response()->json(["error" => "data not found"], 404);

        foreach ($data as $d) {
            $stuReward = Stud_reward::where("student_id", $id->id)->where("reward_id", $d->id)->first();
            $d["item"] = $this->each_ach . str_replace(' ', '-', $name) . "/" . $d->item . ".png";
            $d["bought"] = $stuReward ? 1 : 0;
        }

        return $data;
    }

    public function displayEachProfile(Request $request)
    {
        $token = $request->header("token");
        if (!$token) return response()->json(["error" => "token is required."], 400);

        $data = Reward::where('type', "profile")->get();
        $stu = Student::where('token', $token)->first();

        if (!$stu) return response()->json(["error" => "user not found"], 404);
        if (count($data) == 0) return response()->json(["message" => "data not found"], 404);

        $point = 50;
        $reward = [];
        foreach ($data as $idx => $value) {
            $stuReward = Stud_reward::where("student_id", $stu->id)->where("reward_id", $value->id)->first();

            $value['item'] = $this->profiles . str_replace(' ', '-', $value->name) . "/" .  $value->item . ".png";
            $value['lock'] = $stu->fixed_point < $point ? 1 : 0;
            $value["bought"] = $stuReward ? 1 : 0;
            array_push($reward, $value);

            if (isset($data[$idx + 1]) && $value->name !== $data[$idx + 1]->name) $point += 50;
        }

        return $reward;
    }

    public function getReward(Request $request)
    {
        $token = $request->header("token");

        if (!$token) return response()->json(["error" => "token is required."], 400);

        $id = Student::where('token', $token)->first();
        if (!$id) return response()->json(["error" => "user not found"], 404);

        $studReward = Stud_reward::select('rewards.*', 'stud_rewards.*')
            ->leftJoin('rewards', 'stud_rewards.reward_id', 'rewards.id')
            ->where('stud_rewards.student_id', $id->id)
            ->get();

        if (count($studReward) == 0) return response()->json(["error" => "You haven't bought any item."], 403);
        foreach ($studReward as $val) $val->item = $this->each_ach . str_replace(' ', '-',  $val->name) . "/" . $val->item . ".png";

        return $studReward->where('type', "achieve");
    }

    public function buyReward(Request $request)
    {
        $token = $request->token;
        if (!$token || !$request->reward_point || !$request->reward_id) return response()->json(["message" => "token or some fields is required."], 403);


        $stu = Student::where('token', $token)->first();
        if (!$stu) return response()->json(["error" => "user not found"], 404);

        $isReward = Reward::where('id', $request->reward_id)
            ->where("type", "achieve")
            ->first();
        if (!$isReward) return response()->json(["error" => "reward not found"], 404);

        $point = $stu->point;
        if (((int)$point < (int)$request->reward_point) || ((int)$isReward->point !== (int)$request->reward_point)) return response()->json(['error' => 'not enough points'], 403);

        $rewardConflict = Stud_reward::where('student_id', $stu->id)->get();
        $newPoint = (int)$point - (int)$request->reward_point;

        if (!count($rewardConflict)) {
            Student::where('id', $stu->id)->update([
                'point' => $newPoint
            ]);

            $studReward = Stud_reward::where('student_id', $stu->id)->create([
                'student_id' => $stu->id,
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
                    Student::where('id', $stu->id)->update([
                        'point' => $newPoint
                    ]);

                    $studReward = Stud_reward::where('student_id', $stu->id)->create([
                        'student_id' => $stu->id,
                        'reward_id' => $request->reward_id
                    ]);

                    return ($studReward);
                }
            }
        }
    }

    // level up reward
    public function getLevelUp(Request $request)
    {
        $token = $request->header("token");
        if (!$token) return response()->json(["error" => "token is required."], 400);

        $stu = Student::where("token", $token)->first();
        $profile = Reward::where("type", "profile")->get();

        $res = [
            "point" => $stu->point,
            "level" => $stu->level,
        ];

        $reward = [];
        foreach ($profile as $val) {
            if ($val->point <= $stu->fixed_point) {
                $inReward = Stud_reward::where("reward_id", $val->id)->first();
                if (!$inReward) {
                    $data = [
                        "student_id" => $stu->id,
                        "reward_id" => $val->id,
                    ];
                    $url = $this->profiles . $val->name . "/" . $val->item . ".png";
                    array_push($reward, $url);
                    Stud_reward::create($data);
                }
            }
        }

        if (count($reward)) $res["rewards"] = $reward;
        return $res;
    }

    // Profile
    public function updateProfile(Request $request)
    {
        $token = $request->token;
        $id = $request->profile_id;
        if (!$token || !$id) return response()->json(["error" => "token or profile_id is required."], 400);

        $student = Student::where("token", $token)->first();
        $stud_id = $student->id;
        $checkReward = Stud_reward::where('student_id', $stud_id)->where("reward_id", $id)->first();

        if ($checkReward) {
            $profile = Reward::where("id", $id)->first();
            if ($profile->type === "profile") {
                $student->update(["profile_picture" => $this->profiles . $profile->name . "/" . $profile->item . ".png"]);
                return response()->json(["message" => "Profile updated."]);
            }
            return response()->json(["error" => "item isn't profile."], 403);
        } else {
            return response()->json(["error" => "You don't have this profile."], 403);
        }
    }

    // private
    private function addPointFunction($request)
    {
        $oldPoint = Student::where('id', $request->student_id)->first();
        $newPoint = $oldPoint->point + (int)$request->point;
        $newFixPoint = $oldPoint->fixed_point + (int)$request->point;

        $level = $newFixPoint / 10;


        if ($level <= 50) {
            $board = 'silver';
        }
        if ($level >= 51 && $level <= 100) {
            $board = 'platinum';
        }
        if ($level >= 101 && $level <= 200) {
            $board = 'gold';
        }
        if ($level >= 201) {
            $board = 'diamond';
        }
        return [$newPoint, $newFixPoint, $board];
    }
}
