<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\PAdmin;

class PAdminRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        

    }

    public function showRegForm(){
        return view('auth.register-padmin');
    }

    protected function createPAdmin(Request $data)
    { $data->validate([
          
        'email' => 'unique:p_admins',
       
        
    ]);
        
        PAdmin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'job_title' => $data['job_title'],
            'password' => Hash::make($data['password']),
        ]);
     return redirect('/parttimeadmin/list');
   
      
    }
}
