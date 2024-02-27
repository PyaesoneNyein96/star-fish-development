<?php

namespace App\Http\Controllers\API\Version;

use App\Models\Student;
use App\Models\Version;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VersionAndUpdateController extends Controller
{


    public $current_version;
    public $os;

    public function __construct(Request $request) {


        $this->current_version = $request->header('current_version');
        $this->os = $request->header('os');

        // $ios = Version::where('os',1)->where('version_code',$this->current_version)->latest()->first();
        // $android = Version::where('os',0)->where('version_code',$this->current_version)->latest()->first();

        // if(($ios && $android) && collect([$ios->tag,$android->tag])->every(fn ($tag) => !in_array($tag,['Beta','RC','SR']))){
        //     return response()->json(["message" => "not yet"], 503);
        // }

    }


    public function userData(Request $request){


        return $this->updateCheck($request);


        $token = $request->header('token');
        $userData = Student::where('token', $token)->first();

        if(!$userData) return response()->json(["status" => "User Not found !!!"], 404);
        return $userData;

    }














    ///////////////// Private function ///////////////////


    private function updateCheck($request){

        $version = $this->current_version;
        $os = $this->os;

        if($os == 1){
            $code = $latest_ios = Version::where('os',1)->whereIn('tag',['Beta','RC','SR'])
            ->latest()->first();

            // if($code->version_code !== $version && $code->update_type == 'force'){
            //     return response()->json(["message" => "You need to update new version"], 503);
            // }else {
            //     return "hal hal";
            // }


            switch ($version->update_type) {
                case 'force':
                    return response()->json(["message" => "You need to update to the new version"], 503);

                case 'maintenance':
                    return response()->json(["message" => "Maintenance Break!", "time" => 30], 503);

                case 'major':
                    $request->merge(['message' => "New Update is Available."]);
                    return $next($request);

                default:
                    return response()->json(["message" => "Unexpected update type"], 500);
            }

        }





    }












}
