<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\UserRole;
use App\Role;
use Auth;
use Exception;

class create_user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $permission_id = Role::where('role', 'admin')->first()->id;

        $user_permissions = UserRole::where('user_id', Auth::user()->id)->pluck('role_id')->toArray();
        if (in_array($permission_id, $user_permissions) || in_array(1, $user_permissions)) {
            
            return $next($request);
        }

        return back()->withErrors('لا يوجد صلاحية لاستخدام هذه الصفحة');
    }
}
