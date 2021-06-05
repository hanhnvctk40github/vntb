<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Auth
{
    public function handle($request, Closure $next)
    {
        // Perform action
        $session = Session::get('user') ?? null;
        if ( $session == null) {
            return redirect('admin/login');
        }

        return $next($request);
    }
}