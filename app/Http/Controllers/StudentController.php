<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportStudents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;
use Intervention\Image\ImageManagerStatic as Image;
use File;


class StudentController extends Controller
{


    public function __construct()
    {
       
   
   $this->middleware('auth:admin'); 
    
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $students = Student::orderBy('id','desc')->get();
    $students = Student::all();
       return view('students.dashboard', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     // $id='0';
     $students = Student::all();
     if($students->count()){
        
        $id = Student::latest()->first()->id;
       }
       else{$id=-1;}
    // dd(++$id);
        
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'mobile' => 'required|digits:11|unique:students',
            // 'email' => 'required',
            // 'school' => 'required',
            // 'schoolyear' => 'required',
            // 'college' => 'required',
            // 'collegeyear' => 'required',
            // 'university' => 'required',
            // 'universityyear' => 'required',
            'course' => 'required',
            // 'batch' => 'required',
            // 'referance' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'admission' => 'required',
            'paid' => 'required',
           // 'due' => 'required',
            'name' => 'required',
            'address' => 'required'

            
        ]);
        
        if ($request->hasFile('name')){
            // $image = $request->file('image');
            $filename = $request->name->getClientOriginalName();
            $new_file_location = Image::make( $request->name->getRealPath())->resize(200, 200)->save(storage_path('app/public/student/'.date('Ymdhis').$filename));
          
            

       
       
        Student::insert([
            'id' => ++$id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'father' => $request->father,
            'mother' => $request->mother,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'school' => $request->school,
            'schoolyear' => $request->schoolyear,
            'sgrade' => $request->sgrade,
            'college' => $request->college,
            'collegeyear' => $request->collegeyear,
            'cgrade' => $request->cgrade,
            'university' => $request->university,
            'universityyear' => $request->universityyear,
            'ugrade' => $request->ugrade,
            'course' => $request->course,
            'batch' => $request->batch,
            'referance' => $request->referance,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'admission' => $request->admission,
            'paid' => $request->paid,
            'paid2' => '0',
            'due' => $request->admission - $request->paid,
           // 'due' => $request->due,
            'name' => date('Ymdhis').$filename,
            'address' => $request->address,
            'roll' =>date('Ymd00').++$id,
            'transactionId' =>date('Ymdhis'),
            'gno' => $request->gno,
            
            'is_approved'=>1,
            'created_at' => now()
          ]);

       
        return redirect()->route('student.index');
        
    }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::findorfail($id);
        return view('students.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::findorfail($id);
        return view('students.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $students=Student::find($id);
        
        
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'mobile' => 'required|digits:11',
            // 'email' => 'required',
            'course' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'admission' => 'required',
            'paid' => 'required',
             'due' => 'required',
            'address' => 'required'
        ]);

        $students->firstname=$request->firstname;
        $students->lastname=$request->lastname;
        $students->father=$request->father;
        $students->mother=$request->mother;
        $students->mobile=$request->mobile;
        $students->email=$request->email;
        $students->school=$request->school;
        $students->schoolyear=$request->schoolyear;
        $students->sgrade=$request->sgrade;
        $students->college=$request->college;
        $students->collegeyear=$request->collegeyear;
        $students->cgrade=$request->cgrade;
        $students->university=$request->university;
        $students->universityyear=$request->universityyear;
        $students->ugrade=$request->ugrade;
        $students->course=$request->course;
        $students->batch=$request->batch;
        $students->referance=$request->referance;
        $students->gender=$request->gender;
        $students->dob=$request->dob;
        $students->admission=$request->admission;
        $students->address=$request->address;
        $students->paid=$request->paid;
        $students->paid2=$request->paid2;
        $students->due=$request->due;
        $students->due = -((int)$students->paid2 - (int)$students->due);
        $students->gno=$request->gno;
        $students->save();
        
       return redirect()->route('student.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students=Student::find($id);

        if(\Storage::exists('student/'.$students->name)){

            \Storage::delete('student/'.$students->name);
          
            $students->delete();
            return redirect()->route('student.index');
          }else{
         
             dd('image not found in storage');
          }

    }
    
    

    public function getPDF($id){

        $students = Student::findorfail($id);
         $pdf = PDF::loadView('students.p', ['students' => $students]);
        return $pdf->download( $students->firstname.'_'.$students->lastname.'('.$students->roll.')'.'.pdf');
  
      
    
  
 }

 public function getEXCEL(){

    return Excel::download(new ExportStudents, date('Y-m-d').' students.xlsx');
}


//delete all student
public function clearAll()
{
     $count = Student::count();
    $id=Student::latest()->take($count)->skip(1)->get();

    foreach ($id as $object) {
        \Storage::delete('student/'.$object->name);
        $object->delete();
     }
     return redirect()->route('student.index');

}

    }
    

    

