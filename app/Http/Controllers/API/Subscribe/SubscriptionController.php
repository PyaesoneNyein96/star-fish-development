<?php

namespace App\Http\Controllers\API\Subscribe;

use App\Models\Country;
use App\Models\Student;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{

    public function subscriptionPlans(Request $request){


        $student = Student::where('token',$request->header('token'))->with('subscription')->first();
        $plans = Subscription::all();

        if($student->isSubscriber == 0 ){

            foreach ($plans as $p) {
                $p['paid'] = false;
            }
            return $plans;
        }else{

            $studentPlan = $student->subscription;
            $result = $plans->map(function ($g) use($studentPlan){
                return [
                    'id' => $g->id,
                    'name' =>  $g->name,
                    'price' =>  $g->price,
                    'expiry' => $g->expiry,
                    'paid' => $studentPlan->id == $g->id,
                ];
            });

            return $result;

        }


    }


    public function purchaseSubscription(Request $request){

        $token = $request->header('token');

        $student = Student::where('token', $token)->where('status',1)->first();

        if(!$student){
            return response()->json([
                "status" => "you are not allowed for this process."
            ], 403);
        }

        // subscription plan buying process
        if($student && $this->purchase()){
            return response()->json($data, 200);
        }


    }


    private function purchase(){
        return true;
    }




}
