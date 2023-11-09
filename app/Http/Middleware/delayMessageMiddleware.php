<?php

namespace App\Http\Middleware;

use App\Models\Chat;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class delayMessageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $chat = Chat::where('created_at', '>=', now()->subHours(4))->get();
        $count = count($chat->toArray());
        $delay = $count >= 1000
            ? 2
            : ($count >= 500
                ? 1
                : ($count >= 100
                    ? 0.5
                    : 0.2));

        sleep($delay);

        return $next($request);
    }
}
