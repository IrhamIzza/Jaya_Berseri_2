<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user =  auth()->user();
        if ($user-> role == 1) {
            $user = auth()->user();
            return response()->json($user);
        } else {
            return response()->json(['message' => 'Anda Bukan Admin'], 401);
        }
        return $next($request);
    }
}
