<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{



    public function __construct(Request $request){

    }



   public function profile()
    {
        return inertia('Profile/Index', [
            'admin' => Auth::user()
        ]);
    }










}
