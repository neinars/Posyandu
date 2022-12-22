<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user()->role[0]->name ==$role){
            return $next($request);
        }
        abort(403, 'Dont have an access to this Page!');
    }

    public function authenticated($request, $user)
    {
        if (Auth::user()->role[0]->role_name == 'Admin')
        return redirect("admin/home");

        elseif (Auth::user()->role[0]->role_name == 'Kader')
        return redirect("kader/home");

        else return redirect("pengunjung/home");
    }
}
