<?php

namespace App\Http\Middleware;

use App\Utils\Constants;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $logined = auth(Constants::ADMIN_LOGIN)->validate(Constants::getCredential());
        if (!$logined) {
            return response()->json(Constants::genFailResponse());
        }
        return $next($request);
    }
}
