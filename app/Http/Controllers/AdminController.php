<?php

namespace App\Http\Controllers;
use App\User;
use App\Student;
use Illuminate\Http\Request;
use DB;


class AdminController extends Controller
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
        //return view('admin');
        $users = User::all();
        
        return view('users.user-dashboard', compact('users'));
    }

    public function reg()
    {
      return view('admin');
        
    }
    public function destroy($id)
    {
        $users=User::find($id);
       $users->delete();
       return redirect('/user/list');
    }

    public function list()
    {
        //return view('admin');
        $users = User::all();
        
        return view('users.user-list', compact('users'));
    }

    public function manage()
    {
        
        $users = User::all();
        
        return view('users.user-manage', compact('users'));
    }

    
    public function notification(){

        return view('users.notification');
        }


//1st installment
    public function pending()
    {
        
        $students = Student::where('is_approved',false)->orWhere('is_approved',true)->orderBy('created_at','desc')->get();
        
        return view('users.1st_installment', compact('students'));
    }
    public function approval($id){

        $students = Student::findorfail($id);
        $students->is_approved =1;
        $students->save();
        return redirect('/pending/post');
        }

        public function clear1(){
            $students = Student::where('is_approved', '=', 1)->update(array('is_approved' => 2));
            
           
            return redirect('/pending/post');
            }
    //when 2 clear noti

//2nd installment
        public function pending2()
        {
            
            $students = Student::where('is_approved2',true)->orWhere('is_approved2', '2')->orderBy('updated_at','desc')->get();
            
            return view('users.2nd_installment', compact('students'));
        }
        public function approval2($id){
    
            $students = Student::findorfail($id);
            $students->is_approved2 =2;
            $students->save();
            return redirect('/pending2/post2');
            }
            public function clear2(){
                $students = Student::where('is_approved2', '=', 2)->update(array('is_approved2' => 0));
                
               
                return redirect('/pending2/post2');
                }
//when 0 clear noti
// new notification delete
public function notificationDelete()
    {
        
       DB::table('notifications')->delete();
       return redirect('/student');
    }

}
