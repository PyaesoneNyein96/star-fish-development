<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
