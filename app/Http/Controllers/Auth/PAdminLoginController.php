<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PAdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:padmin');

    }

    public function showLoginForm(){
        return view('auth.padmin-login');
    }

    public function login(Request $request)
    {
       $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required|min:6',
       ]);

       if( Auth::guard('padmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
       return redirect()->intended(route('parttimeadmin.pdashboard'));
       }

       return redirect()->back()->withInput($request->only('email', 'remember'));



    }
 
}
