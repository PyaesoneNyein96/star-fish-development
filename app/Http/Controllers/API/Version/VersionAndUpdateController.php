<?php

namespace App\Http\Controllers\API\Version;

use Carbon\Carbon;
use App\Models\Student;
use App\Models\Version;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VersionAndUpdateController extends Controller
{


    public $client_version;
    public $os;

    public function __construct(Request $request) {

        $this->client_version = $request->header('client_version');
        $this->os = $request->header('os');
    }


    public function userDataAndroid(Request $request){

        $userData =  $request->student;

        $version = Version::where('os',0)->latest()->first();

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




    public function userDataIOS(Request $request){

        $userData =  $request->student;

        $version = Version::where('os',1)->latest()->first();

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
