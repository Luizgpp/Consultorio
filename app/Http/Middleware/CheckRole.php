<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role, ...$permission)
    {
        if ($request->user() !== null) {
            if (!$request->user()->hasRole($role)) {
                redirect('/')->with('status', 'Não Autorizado');
            }

            if ($permission !== null && !$request->user()->can($permission)) {
                redirect('/')->with('status', 'Não Autorizado');
            }
        }
        return $next($request);
    }
}
