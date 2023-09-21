<?php

namespace App\Http\Middleware;

use App\Models\SuperAdmmin\Tenants;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class TenantMiddelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // //Obtaining a tenant domain to get Database Info
        // $host= $request->getHost();

        // //get database info
        // $tanant = Tenants::where('ApiKey',$host)->firstOrFail();
   
        // $request->tenant_key = $tanant->ApiKey;
        return $next($request);
    }
}
