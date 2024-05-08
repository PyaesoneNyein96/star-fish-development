<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RewardController extends Controller
{
    // get all rewards
    public function getAllRewards()
    {
        $rewards = Reward::get();
        $rewards_name = Reward::select('name')->orderBy('name')->distinct()->get();

        return inertia('Dashboard', [
            'user' => Auth::user(),
            'rewards_name' => $rewards_name,
            'rewards' => $rewards,
        ]);
    }

    // adding each reward
    public function addPerReward(Request $request)
    {
        $data = [
            "name" => $request->name,
            "point" => $request->point,
            "type" => $request->type,
        ];

        if ($request->hasFile('item')) {
            $allowedMimeTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
            $mimeType = $request->file('item')->getMimeType();

            if (in_array($mimeType, $allowedMimeTypes)) {
                $newProfile = uniqid() . "_" . str_replace(' ', '', $request->file('item')->getClientOriginalName());
                if ($request->type == "achieve") $request->file('item')->storeAs('public/images/Achievement/Each_achieve/' . $request->name . "/", $newProfile);
                if ($request->type == "profile") $request->file('item')->storeAs('public/images/Achievement/Profiles/', $newProfile);

                $data['item'] = $newProfile;
            }
            Reward::create($data);
        }
    }

    // remove reward
    public function removeReward($name)
    {
        Reward::where("name", $name)->delete();
    }

    // rename reward
    public function renameReward(Request $request)
    {
        if ($request->hasFile('name')) {
            $allowedMimeTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
            $mimeType = $request->file('name')->getMimeType();

            if (in_array($mimeType, $allowedMimeTypes)) {
                $reward = Reward::where('name', $request->old_name)->first();

                if ($reward != null) {
                    $oldProfile = $reward['item'];
                    Storage::delete('public/images/Achievement/Main/', $oldProfile);
                }

                $newProfile = uniqid() . "_" . str_replace(' ', '', $request->file('name')->getClientOriginalName());
                $request->file('name')->storeAs('public/images/Achievement/Main/' . $newProfile);
                $update['name'] = $newProfile;
                Reward::where("name", $request->old_name)->update($update);
            }
        }
    }

    // reward per edit
    public function editPerReward(Request $request)
    {
        if ($request->hasFile('item')) {
            $allowedMimeTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
            $mimeType = $request->file('item')->getMimeType();

            if (in_array($mimeType, $allowedMimeTypes)) {
                $reward = Reward::where('id', $request->id)->first();
                $oldProfile = $reward['item'];

                if ($oldProfile != null) {
                    if ($reward["type"] == "achieve") Storage::delete('public/images/Achievement/Each_achieve/' . $reward["name"] . "/", $oldProfile);
                    if ($reward["type"] == "profile") Storage::delete('public/images/Achievement/Profiles/', $oldProfile);
                }

                $newProfile = uniqid() . "_" . str_replace(' ', '', $request->file('item')->getClientOriginalName());
                if ($request->type == "achieve") $request->file('item')->storeAs('public/images/Achievement/Each_achieve/' . $request->name . "/", $newProfile);
                if ($request->type == "profile") $request->file('item')->storeAs('public/images/Achievement/Profiles/', $newProfile);
                $item = $newProfile;
            }
            $point = $request->point;
            Reward::where('id', $request->id)->update([
                'item' => $item,
                'point' => $point
            ]);
        }
    }

    // delete per reward
    public function deletePerReward($id)
    {
        Reward::where("id", $id)->delete();
    }
}
