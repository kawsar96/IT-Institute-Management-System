<?php

namespace App\Http\Controllers;
use App\PAdmin;
// use App\Student;
use Illuminate\Http\Request;

class PAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        
        return view('parttimeadmin.p-dashboard');
    }

    // public function reg()
    // {
    //   return view('admin');
        
    // }
    public function destroy($id)
    {
        $padmins=PAdmin::find($id);
       $padmins->delete();
       return redirect('/parttimeadmin/list');
    }

    public function list()
    {
        //return view('admin');
        $padmins = PAdmin::all();
        
        return view('parttimeadmin.p-list', compact('padmins'));
        
    }

}
