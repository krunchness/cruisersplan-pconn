<?php

namespace cruiserplan\Http\Middleware;

use Closure;

class AdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd(auth()->user()->hasRole());
        if (auth()->user()->hasRole->role_name == 'Client') {
            return redirect()->route('inquiries.showInquiries');
        }

        return $next($request);
    }
}
