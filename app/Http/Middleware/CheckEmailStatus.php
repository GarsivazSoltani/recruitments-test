<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEmailStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request->user()->hasVerifiedEmail());
        if ($request->user() && !$request->user()->hasVerifiedEmail()) {
            session()->flash('mustVerifyEmail');
        }
        return $next($request);
    }
}
