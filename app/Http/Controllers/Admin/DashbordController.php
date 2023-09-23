<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashbordController extends Controller
{
    public function index(Request $request){
        $users = User::where('id','!=',auth()->user()->id)->where('SuperAdmin','!=',1)->get();
        // print_r($users);die;
        // dd($users);
        return Inertia::render('Admin/Index', compact('users'));
    }
}
