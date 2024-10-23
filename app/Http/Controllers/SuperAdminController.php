<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:superadmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admins = Admin::all();
        
        return view('admins.admin-dashboard', compact('admins'));
    }

    public function reg()
    {
      return view('superadmin');
        
    }
    public function destroy($id)
    {
        $admins=Admin::find($id);
       $admins->delete();
       return redirect('/superadmin');
    }

}
