<?php


namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use PDF;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class EmployeeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }
    
    public function index()
    {
    //    $employees = Employee::orderBy('id','desc')->get();
       $employees = Employee::all();
       return view('employees.dashboard', compact('employees'));
       
    }


    public function show($id)
    {
        $employees = Employee::findorfail($id);
        return view('employees.show',compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
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
            // 'nid' => 'required',
            'mobile' => 'required|digits:11|unique:employees',
            'email' => 'required',
            'taddress' => 'required',
            'paddress' => 'required',
            // 'school' => 'required',
            // 'schoolyear' => 'required',
            // 'sgrade' => 'required',
            // 'college' => 'required',
            // 'collegeyear' => 'required',
            // 'cgrade' => 'required',
            // 'university' => 'required',
            // 'universityyear' => 'required',
            // 'university_major' => 'required',
            // 'ugrade' => 'required',
            // 'masters' => 'required',
            // 'mastersyear' => 'required',
            // 'masters_major' => 'required',
            // 'mgrade' => 'required',
            // 'uno' => 'required',
            'joiningdate' => 'required',
            'name' => 'required',


            'father' => 'required',
            // 'fno' => 'required|max:11',
            'mother' => 'required',
            // 'mno' => 'required|max:11',
            // 'gnid' => 'required',
            'gno' => 'required|max:11',
            'category' => 'required',
            'gender' => 'required',
            'dob' => 'required',

            
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

            'joiningdate' => $request->joiningdate,
            'name' => date('Ymdhis').$filename,

            'father' => $request->father,
            'fno' => $request->fno,
            'mother' => $request->mother,
            'mno' => $request->mno,
            'gnid' => $request->gnid,
            'gno' => $request->gno,
            'category' => $request->category,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'created_at' => now()
            
          ]);

        return redirect('/employee/dashboard');
    }
    }
    public function edit($id)
    {
        $employees = Employee::findorfail($id);
        return view('employees.edit',compact('employees'));
       
    }
    public function update(Request $request, $id)
    {
        
        $employees=Employee::find($id);
        

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'designation' => 'required',
            'mobile' => 'required|digits:11',
            'email' => 'required',
            'taddress' => 'required',
            'paddress' => 'required',
            // 'uno' => 'required',
            'joiningdate' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'gno' => 'required|max:11',
            'category' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            
            
        ]);
       
        $employees->firstname=$request->firstname;
        $employees->lastname=$request->lastname;
        $employees->designation=$request->designation;
        $employees->nid=$request->nid;
        $employees->mobile=$request->mobile;
        $employees->email=$request->email;
        $employees->taddress=$request->taddress;
        $employees->paddress=$request->paddress;
        $employees->school=$request->school;
        $employees->schoolyear=$request->schoolyear;
        $employees->sgrade=$request->sgrade;
        $employees->college=$request->college;
        $employees->collegeyear=$request->collegeyear;
        $employees->cgrade=$request->cgrade;
        $employees->university=$request->university;
        $employees->universityyear=$request->universityyear;
        $employees->university_major=$request->university_major;
        $employees->ugrade=$request->ugrade;
        $employees->masters=$request->masters;
        $employees->mastersyear=$request->mastersyear;
        $employees->masters_major=$request->masters_major;
        $employees->mgrade=$request->mgrade;
        // $employees->uno=$request->uno;
        $employees->joiningdate=$request->joiningdate;
     

        $employees->father=$request->father;
        $employees->fno=$request->fno;
        $employees->mother=$request->mother;
        $employees->mno=$request->mno;
        $employees->gnid=$request->gnid;
        $employees->gno=$request->gno;
        $employees->category=$request->category;
        $employees->gender=$request->gender;
        $employees->dob=$request->dob;
      
        $employees->save();
        return redirect('/employee/dashboard');

    }

    public function destroy($id)
    {
        $employees=Employee::find($id);

        if(\Storage::exists('employee/'.$employees->name)){

            \Storage::delete('employee/'.$employees->name);
          
            $employees->delete();
            return redirect('/employee/dashboard');
          }else{
            // $employees->delete();
           
           //  return redirect('/employee/dashboard');
             dd('image not found in storage');
          }

    }



    public function getPDF($id){

        $employees = Employee::findorfail($id);
         $pdf = PDF::loadView('employees.p', ['employees' => $employees]);
        return $pdf->download($employees->firstname.'_'.$employees->lastname.'('.$employees->uno.')'.'.pdf');
  
      
    
  
 }


 public function fulltime(){

   
    $employees = Employee::all()->where('category','full-time');
    return view('employees.dashboard', compact('employees'));
  


}
public function parttime(){

  
  
    $employees = Employee::all()->where('category','part-time');
    return view('employees.dashboard', compact('employees'));

}
}

