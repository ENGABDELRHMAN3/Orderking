<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmmin\Tenants;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index(){
       
// dd($tenants);
        return view('superAdmin/index');
    }
    
}
