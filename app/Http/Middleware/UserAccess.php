<?php

// app/Http/Middleware/UserAccess.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string  ...$allowedRoles
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$allowedRoles)
    {
        $userType = auth()->user()->type;

        if (in_array($userType, $allowedRoles)) {
            return $next($request);
        }

        return response()->json(['You do not have permission to access for this page.']);
        /* ERROR PAGE: return response()->view('errors.check-permission'); */
    }
}
