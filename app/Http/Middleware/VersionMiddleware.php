<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Version;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VersionMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {

        $ios = Version::where('os',1)->latest()->first();
        $android = Version::where('os',0)->latest()->first();

        // if(!in_array($ios->tag, ['Beta','RC','SR']) || !in_array($android->tag, ['Beta','RC','SR'])){
        //     return response()->json(["message" => "not yet"], 503);
        // }

        if(collect([$ios->tag,$android->tag])->every(fn ($tag) => !in_array($tag,['Beta','RC','SR']))){
            return response()->json(["message" => "not yet"], 503);
        }






    }
}
