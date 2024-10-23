<?php

namespace App\Http\Controllers;
use App\Student;
// use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Admin;
use App\Notifications\TaskCompleted;
use App\Notifications\TaskCompleted2;
use Intervention\Image\ImageManagerStatic as Image;

class StuController extends Controller
{


    public function __construct()
    {
       
     $this->middleware('auth');
  //  $this->middleware('auth:admin'); 
    
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
          
      //  $students = Student::orderBy('id','desc')->get();
      $students = Student::all();
       return view('student.dashboard', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $aname = Auth::user()->name;
        $students = Student::all();
        if($students->count()){
           
           $id = Student::latest()->first()->id;
          }
          else{$id=-1;}
        
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
            'address' => 'required',
            // 'notice' => 'required'
            
            
        ]);


        if ($request->hasFile('name')){
          $filename = $request->name->getClientOriginalName();
          $new_file_location = Image::make( $request->name->getRealPath())->resize(200, 200)->save(storage_path('app/public/student/'.date('Ymdhis').$filename));
            
           
        // Student::create($request->all());
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
             'notice' => '1st Installment paid by '.$aname,
          //  'notice' =>''.$aname,
            'roll' =>date('Ymd00').++$id,
            'transactionId' =>date('Ymdhis'),
            'gno' => $request->gno,
            'created_at' => now()
          ]);
          // $admin = Admin::find(1);
          Admin::find(1)->notify(new TaskCompleted);
       
        return redirect()->route('stu.index');
     
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
        return view('student.show',compact('students'));
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
        return view('student.edit',compact('students'));
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
        $aname = Auth::user()->name;
        $students=Student::find($id);
        

        $request->validate([
      
            
            
        ]);


        
        if($request->paid2 == $students->due){
            
        $students->paid2=$request->paid2;
        $students->due = -((int)$students->paid2 - (int)$students->due);
        // $students->notice2 ='2nd installment';
        $students->notice2 ='2nd Installment paid by '.$aname;
        $students->is_approved2 =1;
        $students->save();
        $admin = Admin::find(1);
          Admin::find(1)->notify(new TaskCompleted2);
        return redirect()->route('stu.index');
        }
       else {return redirect()->back()->withErrors(['message'=>'You have to pay exact due amount in 2nd installment']);}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $students=Student::find($id);
    //    $students->delete();
    //    return redirect()->route('stu.index')->with('success','Data Deleted');
    // }
    // public function showUploadForm()
    // {
    //     return view('upload');
    // }


    // public function storeFile(request $request)
    // {
    //     if ($request->hasFile('file')){
    //       $filename = $request->file->getClientOriginalName();
           
    //       $request->file->storeAs('public/upload',$filename);
    //       $file = new File;
    //       $file->name = $filename;
         
    //       $file->save();
    //       return redirect('/index1');
          
    //     }
         
    //     return $request->all();
    // }



    public function getPDF($id){

        $students = Student::findorfail($id);
         $pdf = PDF::loadView('student.p', ['students' => $students]);
        return $pdf->download($students->firstname.'_'.$students->lastname.'.pdf');
  
      
    
  
 }
    
    }
    

    

