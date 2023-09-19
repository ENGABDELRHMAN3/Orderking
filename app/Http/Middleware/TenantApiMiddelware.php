<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\SuperAdmmin\Tenants;
use Illuminate\Support\Facades\DB;

class TenantApiMiddelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {//Obtaining a tenant {ApiKey} frome request to get Database Info
        $host= $request->apikey;

        //get database info
        $tanant = Tenants::where('domain',$host)->firstOrFail();
       
    //SET DATABASE CONECTION TO TENANT
        DB::purge('mysql');
        DB::purge('tenant');
        config()->set('database.connections.tenant.database' , $tanant->DB_DATABASE);
        config()->set('database.connections.tenant.username' , $tanant->DB_USERNAME);
        config()->set('database.connections.tenant.password' , $tanant->DB_PASSWORD);
    
        DB::connection('tenant')->reconnect();
        DB::setDefaultConnection('tenant');
        return $next($request);
    }
}
