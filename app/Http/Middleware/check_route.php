<?php

namespace App\Http\Middleware;

use App\Models\adminlog;
use Closure;
use App\User;
use App\UserRole;
use App\Role;
use Auth;
use Exception;
use App\Http\Middleware\create_user;
use App\Http\Middleware\update_user;
use App\Http\Middleware\delete_user;

class check_route
{
    protected $create_user;
    protected $update_user;
    protected $delete_user;

    function __construct()
    {
        $this->create_user = new create_user;
        $this->update_user = new update_user;
        $this->delete_user = new delete_user;
    }

    /**
     * Handle an incoming request.
     * get url
     * check methos
     * post or url have create use create_user
     * delete -> create_user
     * patch or put or have edit in url update_user
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // get url 
        $url = $request->url();

        $url_elements = explode('/', $url);

        $method = $request->method();
        // create pages 
        if (in_array('create', $url_elements)) {
            return $this->create_user->handle($request, $next);
        }

        // update actions and edit pages
        if ($method === "PATCH" || $method === "PUT" || in_array('edit', $url_elements)) {
            return $this->update_user->handle($request, $next);
        }

        // delete actions 
        if ($method === 'DELETE') {
            return $this->delete_user->handle($request, $next);
        }

        // filter action
        if ($method === "POST") {
            // editor only can search
            if (in_array('filter', $url_elements)) {
                return $this->update_user->handle($request, $next);
            }
            return $next($request);


        }

        // any get url
        if ($method === 'GET') {
            return $next($request);
        }

        return redirect('/')->withErrors('لا يوجد صلاحية لاستخدام هذه الصفحة');
    }
}
