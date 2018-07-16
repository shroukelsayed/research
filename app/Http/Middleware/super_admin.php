<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\UserRole;
use App\Role;
use Auth;
use Exception;

class super_admin
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
        $permission_id = Role::where('role' , 'admin')->first()->id;

        if (in_array($permission_id, UserRole::where('user_id' , Auth::user()->id)->pluck('role_id')->toArray() ))
            {
                return $next($request);
            }

            return back()->withErrors('لا يوجد صلاحية لاستخدام هذه الصفحة');

    }
}
