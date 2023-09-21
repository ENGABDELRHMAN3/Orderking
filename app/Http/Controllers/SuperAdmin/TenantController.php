<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmmin\Tenants;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index(){
        $tenants = Tenants::all();
        return view('admin.index', compact('tenants'));
    }

    public function TenantUsers($key){
        $tenant = Tenants::whereApiKey($key)->get();
        dd($tenant);
    }
    
}
