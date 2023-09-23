<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmmin\Tenants;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TenantController extends Controller
{
    public function index(){
        $tenants = Tenants::all();
        return Inertia::render('SuperAdmin/Index', compact('tenants'));
    }

    public function TenantUsers($key){
        $tenant = Tenants::with('users')->where('ApiKey',$key)->first();
        return Inertia::render('SuperAdmin/tenant/Users',compact('tenant'));
    }

}
