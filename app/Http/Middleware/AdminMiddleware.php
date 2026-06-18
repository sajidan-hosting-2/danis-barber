<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login')->with('error', 'Silakan login admin terlebih dahulu.');
        }

        $user = Auth::user();

        if (!$user || !(bool) $user->is_admin) {
            abort(403, 'Forbidden');
        }

        return $next($request);
    }
}

