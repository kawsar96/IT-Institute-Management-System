<?php

namespace App\Http\Controllers;
use App\Employee;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class PEmployeeController extends Controller
{


    public function __construct()
    {
       
     $this->middleware('auth:padmin');

    
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $employees = Employee::all()->where('category','part-time');
        return view('pemployees.dashboard', compact('employees'));
       
    }


    public function show($id)
    {
        $employees = Employee::findorfail($id);
        return view('pemployees.show',compact('employees'));
    }

    public function create()
    {
        return view('pemployees.create');
    }

    public function store(Request $request)
    {
        $employees = Employee::all();
        if($employees->count()){
           
            $id = Employee::latest()->first()->id;
           }
           else{$id=-1;}

        $request->validate([
          
          
            'firstname' => 'required',
            'lastname' => 'required',
            'designation' => 'required',
            'mobile' => 'required|digits:11|unique:employees',
            'email' => 'required',
            'taddress' => 'required',
            'paddress' => 'required',
            'dob' => 'required',
            'joiningdate' => 'required',
            'name' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'gno' => 'required|max:11',
            'gender' => 'required',
            
         ]);


         if ($request->hasFile('name')){
            // $image = $request->file('image');
            $filename = $request->name->getClientOriginalName();
            $new_file_location = Image::make( $request->name->getRealPath())->resize(300, 300)->save(storage_path('app/public/employee/'.date('Ymdhis').$filename));
            
           
        
        Employee::insert([
            'id' => ++$id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'designation' => $request->designation,
            'nid' => $request->nid,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'taddress' => $request->taddress,
            'paddress' => $request->paddress,
            'school' => $request->school,
            'schoolyear' => $request->schoolyear,
            'sgrade' => $request->sgrade,
            'college' => $request->college,
            'collegeyear' => $request->collegeyear,
            'cgrade' => $request->cgrade,
            'university' => $request->university,
            'university_major' => $request->university_major,
            'universityyear' => $request->universityyear,
            'ugrade' => $request->ugrade,
            'masters' => $request->masters,
            'masters_major' => $request->masters_major,
            'mastersyear' => $request->mastersyear,
            'mgrade' => $request->mgrade,

            'uno' => '00'.++$id.date('Ym'),
            'dob' => $request->dob,

            'joiningdate' => $request->joiningdate,
            'name' => date('Ymdhis').$filename,

            'father' => $request->father,
            'fno' => $request->fno,
            'mother' => $request->mother,
            'mno' => $request->mno,
            'gnid' => $request->gnid,
            'gno' => $request->gno,
            'category' => 'part-time',
            'gender' => $request->gender,
            'created_at' => now()
            
          ]);
        
        return redirect('/parttimeadmin/p-e.dashboard');

    }
 
 
    }
   


    public function getPDF($id){

        $employees = Employee::findorfail($id);
         $pdf = PDF::loadView('employees.p', ['employees' => $employees]);
        return $pdf->download($employees->firstname.'_'.$employees->lastname.'.pdf');
  
      
    
  
 }


 
}

