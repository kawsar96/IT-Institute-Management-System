<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student;
use App\Employee;

class AutocompleteController extends Controller
{
    

    // function index()
    // {
    //  return view('autocomplete');
    // }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
        $query = $request->get('query');
        
  
      $students = Student::all()->where('mobile',"$query")->first();
    $id = $students->id;
    return view('students.show1',compact('students'));
     }
    }
    
   
}
