<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionTimeout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() || Auth::guard('admin')->check()) {
            $lastActivity = session('last_activity');
            $timeout = 120 * 60; // 120 minutes * 60 seconds

            if ($lastActivity && (time() - $lastActivity > $timeout)) {
                Auth::logout();
                Auth::guard('admin')->logout();
                Session::flush();
                return redirect()->route('login')->with('error', 'Session expired, please login again.');
            }

            session(['last_activity' => time()]);
        }

        return $next($request);
    }
}
