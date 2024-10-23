<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/images/title.png">
	<title>Edit Student</title>
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

<form action="/student/update/{{$students->id}}" method="POST" >
                        @csrf

                        <div class="container">
                                <form class="col-lg-12 m-auto p-b-100">
                                <b>All fields marked in <h style="color:red">*</h> are mandatory to be filled</b>
                            <br>
                            <br>
                                <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">{{ __('First Name') }}<h style="color:red">*</h></label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control" name="firstname" value="{{$students->firstname}}" autofocus>
                                          
                                          @error('firstname')
                                       <b>   <div style="color:#000d6e">*Firstname is required.</div> </b>
                                          @enderror
                                        </div>
                                          <label for="name" class="col-sm-2 col-form-label">{{ __('Last Name') }}<h style="color:red">*</h></label>
                                        <div class="col-sm-4">
                                                <input type="text" class="form-control" name="lastname" value="{{$students->lastname}}" autofocus>
                                                @error('lastname')
                                       <b>   <div style="color:#000d6e">*Lastname is required.</div> </b>
                                          @enderror
                                        </div>
                                      </div>
                            
                                      <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label">{{ __('Father Name') }}<h style="color:red">*</h></label>
                                            <div class="col-sm-4">
                                              <input type="text" class="form-control" name="father" value="{{$students->father}}" autofocus>
                                              @error('father')
                                       <b>   <div style="color:#000d6e">*Father name is required.</div> </b>
                                          @enderror
                                            </div>
                                              <label for="name" class="col-sm-2 col-form-label">{{ __('Mother Name') }}<h style="color:red">*</h></label>
                                            <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="mother" value="{{$students->mother}}" autofocus>
                                                    @error('mother')
                                       <b>   <div style="color:#000d6e">*Mother name is required.</div> </b>
                                          @enderror
                                            </div>
                                          </div>
                            
                                          <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">{{ __('Mobile No') }}<h style="color:red">*</h></label>
                                                <div class="col-sm-4">
                                                  <input type="number" class="form-control" name="mobile" value="{{$students->mobile}}" autofocus>
                                                  @error('mobile')
                                       <b>   <div style="color:#000d6e">*Mobile No. is required with 11 digits and should be unique.</div> </b>
                                          @enderror
                                                </div>
                                                  <label for="name" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                                <div class="col-sm-4">
                                                        <input type="email" class="form-control" name="email" value="{{$students->email}}" autofocus>
                                                        @error('email')
                                       <b>   <div style="color:#000d6e">*Email is required in email format.</div> </b>
                                          @enderror
                                                </div>
                                              </div>

                                              <div class="form-group row">
                                                    <label for="name" class="col-sm-2 col-form-label">{{ __('School') }}</label>
                                                    <div class="col-sm-4">
                                                      <input type="text" class="form-control" name="school" value="{{$students->school}}" autofocus>
                                                    </div>
                                                      <label for="name" class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                                    <div class="col-sm-4">
                                                            <input type="number" class="form-control" name="schoolyear" value="{{$students->schoolyear}}" autofocus>
                                                    </div>
                                                  </div>
                                                  <div class="form-group row">
                                                    <label for="name" class="col-sm-2 col-form-label">{{ __('School GPA') }}</label>
                                                    <div class="col-sm-4">
                                                      <input type="numeric" class="form-control" name="sgrade" value="{{$students->sgrade}}" autofocus>
                                                    </div>
                                                      
                                                  </div>

                                                  <div class="form-group row">
                                                        <label for="name" class="col-sm-2 col-form-label">{{ __('College') }}</label>
                                                        <div class="col-sm-4">
                                                          <input type="text" class="form-control" name="college" value="{{$students->college}}" autofocus>
                                                        </div>
                                                          <label for="name" class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                                        <div class="col-sm-4">
                                                                <input type="number" class="form-control" name="collegeyear" value="{{$students->collegeyear}}" autofocus>
                                                        </div>
                                                      </div>
                                                      <div class="form-group row">
                                                    <label for="name" class="col-sm-2 col-form-label">{{ __('College GPA') }}</label>
                                                    <div class="col-sm-4">
                                                      <input type="numeric" class="form-control" name="cgrade" value="{{$students->cgrade}}" autofocus>
                                                    </div>
                                                      
                                                  </div>

                                                      <div class="form-group row">
                                                            <label for="name" class="col-sm-2 col-form-label">{{ __('University') }}</label>
                                                            <div class="col-sm-4">
                                                              <input type="text" class="form-control" name="university" value="{{$students->university}}" autofocus>
                                                            </div>
                                                              <label for="name" class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                                            <div class="col-sm-4">
                                                                    <input type="number" class="form-control" name="universityyear" value="{{$students->universityyear}}" autofocus>
                                                            </div>
                                                          </div>
                                                          <div class="form-group row">
                                                    <label for="name" class="col-sm-2 col-form-label">{{ __('University CGPA') }}</label>
                                                    <div class="col-sm-4">
                                                      <input type="numeric" class="form-control" name="ugrade" value="{{$students->ugrade}}" autofocus>
                                                    </div>
                                                      
                                                  </div>

                                                          <div class="form-group row">
                                                          <label for="name" class="col-sm-2 col-form-label">{{ __('Batch Name') }}</label>
                                                                <div class="col-sm-4">
                                                                        <input type="text" class="form-control" name="batch" value="{{$students->batch}}" autofocus>
                                                                </div>
                                                                <label for="name" class="col-sm-2 col-form-label">{{ __('DoB') }}<h style="color:red">*</h></label>
                                                            <div class="col-sm-4">
                                                                    <input type="date" class="form-control" name="dob" value="{{$students->dob}}" autofocus>
                                                                    @error('dob')
                                       <b>   <div style="color:#000d6e">*Date of birth is required.</div> </b>
                                          @enderror
                                                            </div>
                                                                <!-- <label for="name" class="col-sm-2 col-form-label">{{ __('Course Name') }}</label>
                                                                <div class="col-sm-4">
                                                                <input type="text" class="form-control" name="course" value="{{$students->course}}" autofocus>
                                                              
                                                             @error('course')
                                       <b>   <div style="color:#000d6e">*Choose a course.</div> </b>
                                          @enderror
                                                                </div> -->
                                                              </div>

                                                              <div class="form-group row">
                                                              <label for="gender" class="col-sm-2 col-form-label">{{ __('Gender') }}<h style="color:red">*</h></label>
                                    <div class="col-sm-4">
                                    
                                    <input type="radio" name="gender" value="Male" {{ (old('gender') == 'Male') ? 'checked' : '' }} {{ $students->gender == 'Male' ? 'checked' : '' }}> Male &nbsp &nbsp
                                    <input type="radio" name="gender" value="Female" {{ (old('gender') == 'Female') ? 'checked' : '' }} {{ $students->gender == 'Female' ? 'checked' : '' }}> Female &nbsp &nbsp
                                    <input type="radio" name="gender" value="Other" {{ (old('gender') == 'Other') ? 'checked' : '' }} {{ $students->gender == 'Other' ? 'checked' : '' }}> Other
                                              @error('gender')
                                       <b>   <div style="color:#000d6e">*Gender is required.</div> </b>
                                          @enderror
                                    </div>
                                    <label for="name" class="col-sm-2 col-form-label">{{ __('Course Name') }}<h style="color:red">*</h></label>
                                                                <div class="col-sm-4">
                                                                <input type="radio" name="course" value="Graphic Design"   {{ (old('course') == 'Graphic Design') ? 'checked' : '' }} {{ $students->course == 'Graphic Design' ? 'checked' : '' }} > Graphic Design &nbsp
                                                            <input type="radio" name="course" value="Web Design" {{ (old('course') == 'Web Design') ? 'checked' : '' }}{{ $students->course == 'Web Design' ? 'checked' : '' }} > Web Design  &nbsp
                                                            <input type="radio" name="course" value="Digital Marketing" {{ (old('course') == 'Digital Marketing') ? 'checked' : '' }} {{ $students->course == 'Digital Marketing' ? 'checked' : '' }}> Digital Marketing<br> 
                                                            <input type="radio" name="course" value="Office Programming" {{ (old('course') == 'Office Programming') ? 'checked' : '' }} {{ $students->course == 'Office Programming' ? 'checked' : '' }}> MS Office &nbsp &nbsp
                                                            
                                                             @error('course')
                                       <b>   <div style="color:#000d6e">*Choose a course.</div> </b>
                                          @enderror
                                                                </div>
                                                          </div>

                                                          <div class="form-group row">
                                                                <label for="name" class="col-sm-2 col-form-label">{{ __('Referance No') }}</label>
                                                                <div class="col-sm-4">
                                                                  <input type="text" class="form-control" name="referance" value="{{$students->referance}}" autofocus>
                                                                </div>
                                                                  <label for="name" class="col-sm-2 col-form-label">{{ __('Admission Total (tk)') }}<h style="color:red">*</h></label>
                                                                <div class="col-sm-4">
                                                                        <input type="number" class="form-control" name="admission" value="{{$students->admission}}" autofocus>
                                                                        @error('admission')
                                       <b>   <div style="color:#000d6e">*Admission Amount is required.</div> </b>
                                          @enderror
                                                                </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                    <label for="name" class="col-sm-2 col-form-label">{{ __('1st Installment (tk)') }}<h style="color:red">*</h></label>
                                                                    <div class="col-sm-4">
                                                                      <input type="number" class="form-control" name="paid" value="{{$students->paid}}" autofocus>
                                                                      @error('paid')
                                       <b>   <div style="color:#000d6e">*Paid amount is required.</div> </b>
                                          @enderror
                                                                    </div>
                                                                      <label for="name" class="col-sm-2 col-form-label">{{ __('Due Amount (tk)') }}<h style="color:red">*</h></label>
                                                                    <div class="col-sm-4">
                                                                            <input type="number" class="form-control" name="due" value="{{$students->due}}" autofocus>
                                                                            @error('due')
                                       <b>   <div style="color:#000d6e">*due amount is required.</div> </b>
                                          @enderror
                                                                    </div>
                                                                  </div>

                                                                  <div class="form-group row">
                                                                    <label for="name" class="col-sm-2 col-form-label">{{ __('2nd Installment (tk)') }}</label>
                                                                    <div class="col-sm-4">
                                                                      <input type="number" class="form-control" name="paid2" value='0' autofocus>
                                                                    </div>
                                                                      <label for="name" class="col-sm-2 col-form-label">{{ __('Address') }}<h style="color:red">*</h></label>
                                                                    <div class="col-sm-4">
                                                                            <input type="text" class="form-control" name="address" value="{{$students->address}}" autofocus>
                                                                            @error('address')
                                       <b>   <div style="color:#000d6e">*Address is must.</div> </b>
                                          @enderror
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                  <label for="name" class="col-sm-2 col-form-label">{{ __('Gurdian Phone Number') }}</label>
                                                                    <div class="col-sm-4">
                                                                      <input type="number" class="form-control" name="gno" value='{{$students->gno}}' autofocus>
                                                                    </div>
                                                                     
                                                                  </div>
    
                                                                  <button class="btn col-lg-1 offset-lg-0 btn-info my-2"><a class="linked btn-lg" href="{{route('student.index')}}">Return</a></button>
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