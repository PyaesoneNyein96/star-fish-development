<?php

namespace App\Http\Controllers\API\Version;

use Carbon\Carbon;
use App\Models\Student;
use App\Models\Version;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class VersionAndUpdateController extends Controller
{




    public function AndroidVersionCheck(Request $request) {


        $version = Version::where('os',0)->latest()->first();
        if(!$version) return null;

        $data = [
                'version' => $version->version,
                'force_update' => $version->force_update == 1 ? true : false,
                'under_maintenance' => $version->under_maintenance == 1 ? true : false,
                'url' => $version->url
            ];

            return [
                'result' => $data,
                'statusCode' => 200,
                'message' => 'Success'
            ];
    }



    public function IosVersionCheck(Request $request){

        $version = Version::where('os',1)->latest()->first();
        if(!$version) return null;

         $data = [
            'version' => $version->version,
            'force_update' => $version->force_update == 1 ? true : false,
            'under_maintenance' => $version->under_maintenance == 1 ? true : false,
            'url' => $version->url
        ];

        return [
            'result' => $data,
            'statusCode' => 200,
            'message' => 'Success'
        ];


    }




    /////////////////////////////////////////////////////////


    public function addVersion(Request $request){


        $check = Version::where('OS', $request->os)->latest()->first();


        if($check->version == $request->version) return response()->json([
            "message" => "Version conflict !!"
        ], 403);

        DB::beginTransaction();
        try {

            $create = Version::create([
                'OS' => $request->os,
                'force_update' => $request->force_update,
                'under_maintenance' => $request->under_maintenance,
                'url' => $request->url,
                'version' => $request->version,
                'created_at' => Carbon::now()
            ]);


            DB::commit();

            if($create){
                return Version::where('OS', $request->os)->latest()->first();
            }else{
                return "nope son";
            }

        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }


    }










    ///////////////// Private function ///////////////////


    // private function updateCheck($version,$os){

    //     $latest = Version::where('os',$os)->latest()->first();
    //     $client = Version::where('os',$os)->where('version_code',$version)->first();

    //     if(!$client) return [
    //         "message" => "Server isn't ready for new version.",
    //         "tag" => null,
    //         "current_version" => null,
    //         "new_version" => null,
    //         "url" => null,
    //         "status" => 0
    //     ];

    //     if($latest->version_code !== $version){

    //         switch ($latest->update_type) {
    //             case 'force':
    //                 return [
    //                     "message" => "You need to update new version",
    //                     "tag" => $client->tag,
    //                     "current_version" => $client->version_code,
    //                     "new_version" => $latest->version_code,
    //                     "url" => $latest->url,
    //                     "status" => 0
    //                 ];

    //             case 'major':
    //                 return [
    //                     "message" => "New major update is available.",
    //                     "tag" => $client->tag,
    //                     "current_version" => $client->version_code,
    //                     "current_expiry" => $client->end,
    //                     "new_version" => $latest->version_code,
    //                     "url" => $latest->url,
    //                     "status" => 1,
    //                 ];

    //             case 'minor':
    //                 return [
    //                     "message" => "New small Update is Available.",
    //                     "tag" => $client->tag,
    //                     "current_version" => $client->version_code,
    //                     "current_expiry" => $client->end,
    //                     "new_version" => $latest->version_code,
    //                     "url" => $latest->url,
    //                     "status" => 1
    //                 ];

    //             default:
    //                 return [
    //                     "message" => "New major update is available.",
    //                     "tag" => $client->tag,
    //                     "current_version" => $client->version_code,
    //                     "new_version" => $latest->version_code,
    //                     "url" => $latest->url,
    //                     "status" => 1
    //                 ];

    //         }

    //     }else if($latest->version_code == $version && $latest->update_type == 'maintenance'){
    //         return [
    //             "message" => "Maintenance Break!",
    //             "tag" => $client->tag,
    //             "start" => $latest->start,
    //             "end" => $latest->end,
    //             "takeHrs" => Carbon::parse($latest->start)->diff(Carbon::parse($latest->end))->h .":".Carbon::parse($latest->start)->diff(Carbon::parse($latest->end))->i,
    //             "status" => 0
    //         ];
    //     }
    //     else{
    //         return [
    //             "message" => "Your app is up to date.",
    //             "tag" => $client->tag,
    //             "current_version" => $client->version_code,
    //             "new_version" => null,
    //             "url" => null,
    //             "status" => 1
    //         ];
    //     }




    // }















}
