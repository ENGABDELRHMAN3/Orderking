<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class SuperAdminMiddelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    /**
     * Iam allrady set the defulte connection in the "config\database.php" file,
     * to be SuperAdmin connection
     *  but this wall is just for confirmation
     */
        DB::purge('tenant');
        DB::connection('mysql')->reconnect();
        DB::setDefaultConnection('mysql');


        // if (!auth()->user()->SuperAdmin == 1) {
        //     abort(404, 'Page not found');
        // }
        return $next($request);
    }
}
