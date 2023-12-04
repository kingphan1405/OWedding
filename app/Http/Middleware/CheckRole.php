<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{

    public function handle(Request $request, Closure $next): Response
    {
      
    
        if (auth()->check()) {
            $role = auth()->user()->role;

            if ($role === 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('users.index');
            }
        }
        return $next($request);
    }
}
