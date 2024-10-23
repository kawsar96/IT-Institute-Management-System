<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Admin;

class AdminRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:superadmin');
        

    }

    public function showRegForm(){
        return view('auth.register-admin');
    }

    protected function createAdmin(Request $data)
    {
        Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'job_title' => $data['job_title'],
            'password' => Hash::make($data['password']),
        ]);
       return redirect('/superadmin');
      
    }
}
