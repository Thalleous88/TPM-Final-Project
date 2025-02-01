<?php

namespace App\Http\Middleware;

use App\Models\Group;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    */
    public function handle(Request $request, Closure $next): Response
    {
        $group_id = $request->cookie('group_id');
        if ($group_id) {
            $group = Group::where('id', $group_id)->first();
            if ($group->is_admin == true) {
                return $next($request);
            }
        }
        return redirect('/admin/login');
    }
} 


