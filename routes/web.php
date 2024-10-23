<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Admin;
// use App\Notifications\TaskCompleted;

Route::get('/', function () {
    return view('welcome');
});
//new notification
Route::get('markAsRead',function(){
    $admin = Admin::find(1);
    $admin->unreadNotifications->markAsRead();
  return  redirect()->back();
})->name('markRead');

// Route::get('notificationDelete',function(){
//     $admin = Admin::find(1);
//     $admin->readNotifications->delete();
//   return  redirect()->back();
// });
Route::get('/notificationDelete', 'AdminController@notificationDelete');
//

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('/student', 'StudentController')->middleware('auth:admin','auth');
Route::resource('/student', 'StudentController');
Route::post('/student/update/{id}','StudentController@update');
Route::delete('/students/clearAll', 'StudentController@clearAll');


Route::resource('/stu', 'StuController');

Route::post('/stu/update/{id}','StuController@update');
Route::get('/stu/getPDF/{id}', 'StuController@getPDF');
//Employee Routes
Route::get('/employee/dashboard', 'EmployeeController@index');
Route::get('/employee/create', 'EmployeeController@create');
Route::post('/employee/store', 'EmployeeController@store');
Route::get('/employee/edit/{id}', 'EmployeeController@edit');
Route::post('/employee/update/{id}', 'EmployeeController@update');
Route::get('/employee/show/{id}', 'EmployeeController@show');
Route::delete('/employee/destroy/{id}', 'EmployeeController@destroy');

Route::get('/employee/fulltime', 'EmployeeController@fulltime');
Route::get('/employee/parttime', 'EmployeeController@parttime');



Route::get('/getPDF/{id}', 'EmployeeController@getPDF');
// admin prinitng
Route::get('/student/getPDF/{id}', 'StudentController@getPDF');

//Excel Exports by admin
Route::get('/getEXCEL', 'StudentController@getEXCEL');

//Student search by admin
Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');



//All AUTH
Auth::routes();
Route::get('/home', 'HomeController@index');
//admin
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/register', 'Auth\AdminRegisterController@showRegForm')->name('admin.register');
    Route::post('/submit', 'Auth\AdminRegisterController@createAdmin')->name('admin.submit');
   
 
});

Route::get('/user/dashboard', 'AdminController@manage');
Route::delete('/user/destroy/{id}', 'AdminController@destroy');
Route::get('/user/reg', 'AdminController@reg');
Route::get('/user/list', 'AdminController@list');


// All Superadmin Functinality

Route::prefix('superadmin')->group(function(){
    
    Route::get('/login', 'Auth\SuperAdminLoginController@showLoginForm')->name('superadmin.login');
    Route::post('/login', 'Auth\SuperAdminLoginController@login')->name('superadmin.login.submit');
    Route::get('/', 'SuperAdminController@index')->name('superadmin.dashboard');
  
    
});
//superadmin access
Route::get('/admin/reg', 'SuperAdminController@reg');
Route::delete('/admin/destroy/{id}', 'SuperAdminController@destroy');

//notifications
Route::get('/notification', 'AdminController@notification');


//pending changes approval by admin
Route::get('/pending/post', 'AdminController@pending')->name('post.pending');
Route::get('/post/approve/{id}', 'AdminController@approval')->name('post.approve');
// notification clear1
Route::get('/clear1', 'AdminController@clear1');

 //pending changes 2nd installment
 Route::get('/pending2/post2', 'AdminController@pending2');
Route::get('/post/approve2/{id}', 'AdminController@approval2')->name('post.approve2');
Route::get('/clear2', 'AdminController@clear2');

//part time employee management panel
Route::prefix('parttimeadmin')->group(function(){
    Route::get('/login', 'Auth\PAdminLoginController@showLoginForm')->name('parttimeadmin.login');
    Route::post('/login', 'Auth\PAdminLoginController@login')->name('parttimeadmin.login.submit');
    // Route::get('/', 'PAdminController@index')->name('parttimeadmin.dashboard');
     Route::get('/register', 'Auth\PAdminRegisterController@showRegForm')->name('parttimeadmin.register');
     Route::post('/submit', 'Auth\PAdminRegisterController@createPAdmin')->name('parttimeadmin.submit');
   
 
});


Route::get('/parttimeadmin/dashboard', 'PAdminController@index');
Route::get('/parttimeadmin/list', 'PAdminController@list');
Route::delete('/parttimeadmin/destroy/{id}', 'PAdminController@destroy');
//part time employee management
Route::get('/parttimeadmin/p-e.dashboard', 'PEmployeeController@index')->name('parttimeadmin.pdashboard');
Route::get('/parttimeadmin/p-e.create', 'PEmployeeController@create');
Route::post('/parttimeadmin/p-e.store', 'PEmployeeController@store');
Route::get('/parttimeadmin/p-e.show/{id}', 'PEmployeeController@show');
Route::get('/parttimeadmin/getPDF/{id}', 'PEmployeeController@getPDF');
