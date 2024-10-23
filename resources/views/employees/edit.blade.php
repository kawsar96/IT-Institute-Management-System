<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/images/title.png">
	<title>Edit Employee</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../css/util.css">
<link rel="stylesheet" type="text/css" href="../../../css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
					
							<span class="txt5">PLAN - WORK - SUCCEED</span>
						
					</div>

					<!-- Menu -->
          <div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="/admin">Home</a>
								</li>
                               <li>
									<a href="/student" onclick="myFunction1()" class="dropbtn">Student </a>
                                
								</li>

								<li>
									<a href="#" onclick="myFunction2()" class="dropbtn">Employee <i class="fa fa-caret-down"></i></a>
                                    <div id="myDropdown2" class="dropdown-content" >
                                    <a href="/employee/dashboard">All Employees</a>
                                        <a href="/employee/fulltime">Full-Time Employees</a>
                                        <a href="/employee/parttime">Part-Time Employees</a>
                                       
                                    </div>
								</li>
							</ul>
						</nav>
					</div>


			
			</div>
		</div>
	</header>


@extends('layouts.app')

@section('content')

<form action="/employee/update/{{$employees->id}}" method="POST" >
                        @csrf

                        <div class="container">
                            <form class="col-lg-12 m-auto p-b-100">
                                <div class="form-group row">
                                    <h1 class="m-auto">Personal Information</h1>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">{{ __('First Name') }}</label>
                                    <div class="col-sm-4">
                                      <input type="text" class="form-control" name="firstname" value="{{$employees->firstname}}" autofocus>
                                      @error('firstname')
                                       <b>   <div style="color:#000d6e">*Firstname is required.</div> </b>
                                          @enderror
                                    </div>
                                      <label for="name" class="col-sm-2 col-form-label">{{ __('Last Name') }}</label>
                                    <div class="col-sm-4">
                                            <input type="text" class="form-control" name="lastname" value="{{$employees->lastname}}" autofocus>
                                            @error('lastname')
                                       <b>   <div style="color:#000d6e">*Lastname is required.</div> </b>
                                          @enderror
                                    </div>
                              </div>
                              <div class="form-group row">
                                <label for="designation" class="col-sm-2 col-form-label">{{ __('Designation') }}</label>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control" name="designation" value="{{$employees->designation}}" autofocus>
                                  @error('designation')
                                       <b>   <div style="color:#000d6e">*Designation is required.</div> </b>
                                          @enderror
                                </div>
                                  <label for="NID" class="col-sm-2 col-form-label">{{ __('NID No') }}</label>
                                <div class="col-sm-4">
                                        <input type="number" class="form-control" name="nid" value="{{$employees->nid}}" autofocus>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">{{ __('Mobile No') }}</label>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control" name="mobile" value="{{$employees->mobile}}" autofocus>
                                  @error('mobile')
                                       <b>   <div style="color:#000d6e">*Mobile No. is required with 11 digits and should be unique.</div> </b>
                                          @enderror
                                </div>
                                  <label for="name" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-4">
                                        <input type="email" class="form-control" name="email" value="{{$employees->email}}" autofocus>
                                        @error('email')
                                       <b>   <div style="color:#000d6e">*Email is required in email format.</div> </b>
                                          @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="temporary_address" class="col-sm-2 col-form-label">{{ __('Temporary Address') }}</label>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control" name="taddress" value="{{$employees->taddress}}" autofocus>
                                  @error('taddress')
                                       <b>   <div style="color:#000d6e">*Present address is required.</div> </b>
                                          @enderror
                                </div>
                                  <label for="permanent_address" class="col-sm-2 col-form-label">{{ __('Permanent Address') }}</label>
                                <div class="col-sm-4">
                                        <input type="text" class="form-control" name="paddress" value="{{$employees->paddress}}" autofocus>
                                        @error('paddress')
                                       <b>   <div style="color:#000d6e">*Permanent address is required.</div> </b>
                                          @enderror
                                </div>
                              </div>

                                          <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">{{ __('School') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="text" class="form-control" name="school" value="{{$employees->school}}" autofocus>
                                                </div>
                                                <label for="name" class="col-sm-2 col-form-label">{{ __('College') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="text" class="form-control" name="college" value="{{$employees->college}}" autofocus>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                                <div class="col-sm-4">
                                                        <input type="text" class="form-control" name="schoolyear" value="{{$employees->schoolyear}}" autofocus>
                                                </div>
                                                  <label for="name" class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                                <div class="col-sm-4">
                                                        <input type="text" class="form-control" name="collegeyear" value="{{$employees->collegeyear}}" autofocus>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="school_cgpa" class="col-sm-2 col-form-label">{{ __('GPA') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="text" class="form-control" name="sgrade" value="{{$employees->sgrade}}" autofocus>
                                                </div>
                                                <label for="college_cgpa" class="col-sm-2 col-form-label">{{ __('GPA') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="text" class="form-control" name="cgrade" value="{{$employees->cgrade}}" autofocus>
                                                </div>
                                              </div>

                                              

                                              <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">{{ __('University(Bachelor)') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="text" class="form-control" name="university" value="{{$employees->university}}" autofocus>
                                                </div>
                                                <label for="masters" class="col-sm-2 col-form-label">{{ __('University(Masters)') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="text" class="form-control" name="masters" value="{{$employees->masters}}" autofocus>
                                                </div>

                                              </div>
                                              <div class="form-group row">
                                                <label for="universityyear" class="col-sm-2 col-form-label">{{ __('Passing Year(Bachelor)') }}</label>
                                                <div class="col-sm-4">
                                                        <input type="number" class="form-control" name="universityyear" value="{{$employees->universityyear}}" autofocus>
                                                </div>
                                                  <label for="mastersyear" class="col-sm-2 col-form-label">{{ __('Passing Year(Masters)') }}</label>
                                                <div class="col-sm-4">
                                                        <input type="number" class="form-control" name="mastersyear" value="{{$employees->mastersyear}}" autofocus>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="university_cgpa" class="col-sm-2 col-form-label">{{ __('Major Subject(Bachelor)') }}</label>
                                                  <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="university_major" value="{{$employees->university_major}}" autofocus>
                                                  </div>
                                                  <label for="masters_cgpa" class="col-sm-2 col-form-label">{{ __('Major Subject(Masters)') }}</label>
                                                  <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="masters_major" value="{{$employees->masters_major}}" autofocus>
                                                  </div>
                                                </div>
                                              <div class="form-group row">
                                                <label for="university_cgpa" class="col-sm-2 col-form-label">{{ __('CGPA(Bachelor)') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="number" class="form-control" name="ugrade" value="{{$employees->ugrade}}" autofocus>
                                                </div>
                                                <label for="masters_cgpa" class="col-sm-2 col-form-label">{{ __('CGPA(Masters)') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="number" class="form-control" name="mgrade" value="{{$employees->mgrade}}" autofocus>
                                                </div>
                                              </div>


                                              <div class="form-group row">
                                              <label for="gender" class="col-sm-2 col-form-label">{{ __('Gender') }}<h style="color:red">*</h></label>
                                    <div class="col-sm-4">
                                    
                                    <input type="radio" name="gender" value="Male" {{ (old('gender') == 'Male') ? 'checked' : '' }} {{ $employees->gender == 'Male' ? 'checked' : '' }}> Male &nbsp &nbsp
                                    <input type="radio" name="gender" value="Female" {{ (old('gender') == 'Female') ? 'checked' : '' }} {{ $employees->gender == 'Female' ? 'checked' : '' }}> Female &nbsp &nbsp
                                    <input type="radio" name="gender" value="Other" {{ (old('gender') == 'Other') ? 'checked' : '' }} {{ $employees->gender == 'Other' ? 'checked' : '' }}> Other
                                              @error('gender')
                                       <b>   <div style="color:#000d6e">*Gender is required.</div> </b>
                                          @enderror
                                    </div>

                                    <label for="category" class="col-sm-2 col-form-label">{{ __('Category') }}<h style="color:red">*</h></label>
                                    <div class="col-sm-4">
                                    
                                    <input type="radio" name="category" value="full-time" {{ (old('category') == 'full-time') ? 'checked' : '' }} {{ $employees->category == 'full-time' ? 'checked' : '' }}> Full-Time Employee &nbsp &nbsp
                                    <input type="radio" name="category" value="part-time" {{ (old('category') == 'part-time') ? 'checked' : '' }} {{ $employees->category == 'part-time' ? 'checked' : '' }}> Part-Time Employee 
                                              @error('category')
                                       <b>   <div style="color:#000d6e">*Category is required.</div> </b>
                                          @enderror
                                    </div>

                                              </div>
                                              
                                                  <div class="form-group row">
                          
                          <label for="dob" class="col-sm-2 col-form-label">{{ __('Date of Birth') }}<h style="color:red">*</h></label>
                        <div class="col-sm-4">
                                <input type="date" class="form-control" name="dob" value="{{$employees->dob}}"  autofocus>
                                @error('dob')
                           <b>   <div style="color:#000d6e">*DoB is required.</div> </b>
                              @enderror
                        </div>
                        <label for="joining_date" class="col-sm-2 col-form-label">{{ __('Joining Date') }}<h style="color:red">*</h></label>
                        <div class="col-sm-4">
                                <input type="date" class="form-control" name="joiningdate" value="{{$employees->joiningdate}}"  autofocus>
                                @error('joiningdate')
                           <b>   <div style="color:#000d6e">*Joining date is required.</div> </b>
                              @enderror
                        </div>
                      </div>





                                              <div class="form-group row">
                                                <h1 class="m-auto">Parents Information</h1>
                                              </div>
                                              <div class="form-group row">
                                                <label for="father_name" class="col-sm-2 col-form-label">{{ __('Father Name') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="text" class="form-control" name="father" value="{{$employees->father}}" autofocus>
                                                  @error('father')
                                       <b>   <div style="color:#000d6e">*Father name is required.</div> </b>
                                          @enderror
                                                </div>
                                                  <label for="father_phn_no" class="col-sm-2 col-form-label">{{ __('Father Phone Number') }}</label>
                                                <div class="col-sm-4">
                                                        <input type="number" class="form-control" name="fno" value="{{$employees->fno}}" autofocus>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="mother_name" class="col-sm-2 col-form-label">{{ __('Mother Name') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="text" class="form-control" name="mother" value="{{$employees->mother}}" autofocus>
                                                  @error('mother')
                                       <b>   <div style="color:#000d6e">*Mother name is required.</div> </b>
                                          @enderror
                                                </div>
                                                  <label for="mother_phn_no" class="col-sm-2 col-form-label">{{ __('Mother Phone Number') }}</label>
                                                <div class="col-sm-4">
                                                        <input type="text" class="form-control" name="mno" value="{{$employees->mno}}" autofocus>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="guardian_NID" class="col-sm-2 col-form-label">{{ __('Guardian NID') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="number" class="form-control" name="gnid" value="{{$employees->gnid}}" autofocus>
                                                </div>
                                                <label for="gurdian_phn_no" class="col-sm-2 col-form-label">{{ __('Guardian Phone Number') }}</label>
                                                    <div class="col-sm-4">
                                                            <input type="number" class="form-control" name="gno"  value="{{$employees->gno}}" autofocus>
                                                            @error('gno')
                                       <b>   <div style="color:#000d6e">*Guardian phone no. is required.</div> </b>
                                          @enderror
                                                    </div>
                                              </div>
    

                                              <button class="btn col-lg-1 offset-lg-0 btn-info my-2"><a class="linked btn-lg" href="/employee/dashboard" >Return</a></button>
                                                                  <button type="submit" class="btn col-lg-2 offset-lg-4 btn-danger my-2 btn-lg"><a class="linked btn-lg">
                                                    {{ __('Update') }}
                                                </button>
                                    
                            </div>
                    </form>
                        


	<!-- Footer -->
  @include('layouts.footer')
    
    
        @endsection
        
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script> 
    <!--===============================================================================================-->
        <script src="js/main.js"></script>

         <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction1() {
        document.getElementById("myDropdown1").classList.toggle("show");
        }
        function myFunction2() {
        document.getElementById("myDropdown2").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName(".dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }
        }
        </script>
    
    </body>
    </html>