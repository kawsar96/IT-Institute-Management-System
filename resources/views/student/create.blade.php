<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/images/title.png">
	<title>Add Student</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
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
									<a href="/home">Home</a>
								</li>
                                
                                <li>
									<a href="/stu/create">Admission</a>
								</li>

								<li>
									<a href="/stu" onclick="myFunction1()" class="dropbtn">Student </a>
                                
								</li>
                                
							</ul>
						</nav>
					</div>

			
			</div>
		</div>
	</header>

 

@extends('layouts.app')

@section('content')

<!-- @if (count($errors) > 0)
       <div class = "alert alert-danger container">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>➤{{ $error }}</li>
               @endforeach

            </ul>
            
         </div>
         
      @endif
     -->
                    <form method="POST" action="{{ route('stu.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="container">
                                <form class="col-lg-12 m-auto p-b-100">
                            <b>All fields marked in <h style="color:red">*</h> are mandatory to be filled</b>
                            <br>
                            <br>
                             
                                <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">{{ __('First Name') }}<h style="color:red">*</h></label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control" name="firstname" value="{{old('firstname')}}"  autofocus>
                                          @error('firstname')
                                       <b>   <div style="color:#000d6e">*Firstname is required.</div> </b>
                                          @enderror
                                        </div>
                                          <label for="name" class="col-sm-2 col-form-label">{{ __('Last Name') }}<h style="color:red">*</h></label>
                                        <div class="col-sm-4">
                                                <input type="text" class="form-control" name="lastname" value="{{old('lastname')}}" autofocus> 
                                                @error('lastname')
                                       <b>   <div style="color:#000d6e">*Lastname is required.</div> </b>
                                          @enderror
                                        </div>
                                      </div>
                            
                                      <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label">{{ __('Father Name') }}<h style="color:red">*</h></label>
                                            <div class="col-sm-4">
                                              <input type="text" class="form-control" name="father" value="{{old('father')}}" autofocus>
                                              @error('father')
                                       <b>   <div style="color:#000d6e">*Father name is required.</div> </b>
                                          @enderror
                                            </div>
                                              <label for="name" class="col-sm-2 col-form-label">{{ __('Mother Name') }}<h style="color:red">*</h></label>
                                            <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="mother" value="{{old('mother')}}" autofocus>
                                                    @error('mother')
                                       <b>   <div style="color:#000d6e">*Mother name is required.</div> </b>
                                          @enderror
                                            </div>
                                          </div>
                            
                                          <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">{{ __('Mobile No') }}<h style="color:red">*</h></label>
                                                <div class="col-sm-4">
                                                  <input type="number" class="form-control" name="mobile" value="{{old('mobile')}}" autofocus>
                                                  @error('mobile')
                                       <b>   <div style="color:#000d6e">*Mobile No. is required with 11 digits and should be unique.</div> </b>
                                          @enderror
                                                </div>
                                                  <label for="name" class="col-sm-2 col-form-label">{{ __('Email') }}<h style="color:red"></h></label>
                                                <div class="col-sm-4">
                                                        <input type="email" class="form-control" name="email" value="{{old('email')}}" autofocus>
                                                        @error('email')
                                       <b>   <div style="color:#000d6e">*Email is required in email format.</div> </b>
                                          @enderror
                                                </div>
                                              </div>

                                              <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">{{ __('Add School?') }}</label>
                                                <div class="col-sm-4">
                                                  <a onclick="schoolAddBtn()" class="form-control btn btn-danger">ADD</a>
                                                </div>
                                              </div>
                                              <div class="form-group row bo2 p-t-20 p-b-20 m-t-10 m-b-20 p-r-10 p-l-10 hidden"  id="schoolAddSection">
                                                <label for="name" class="col-sm-2 col-form-label">{{ __('School') }}</label>
                                                <div class="col-sm-4">
                                                  <input type="text" class="form-control" name="school" value="{{old('school')}}" autofocus>
                                                </div>
                                                  <label for="name" class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                                <div class="col-sm-4">
                                                        <input type="number" class="form-control" name="schoolyear" value="{{old('schoolyear')}}"  autofocus>
                                                </div>
                                                <label for="name" class="col-sm-2 col-form-label m-t-20">{{ __('GPA') }}</label>
                                                <div class="col-sm-4 m-t-20">
                                                        <input type="text" class="form-control" name="sgrade" value="{{old('sgrade')}}"  autofocus>
                                                </div>
                                              </div>

                                              <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">{{ __('Add College?') }}</label>
                                                <div class="col-sm-4">
                                                  <a onclick="collegeAddBtn()" class="form-control btn btn-danger">ADD</a>
                                                </div>
                                              </div>

                                                  <div class="form-group row bo2 p-t-20 p-b-20 m-t-10 m-b-20 p-r-10 p-l-10 hidden"  id="collegeAddSection">
                                                        <label for="name" class="col-sm-2 col-form-label">{{ __('College') }}</label>
                                                        <div class="col-sm-4">
                                                          <input type="text" class="form-control" name="college" value="{{old('college')}}" autofocus>
                                                        </div>
                                                          <label for="name" class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                                        <div class="col-sm-4">
                                                                <input type="number" class="form-control" name="collegeyear" value="{{old('collegeyear')}}" autofocus>
                                                        </div>
                                                        <label for="name" class="col-sm-2 col-form-label m-t-20">{{ __('GPA') }}</label>
                                                <div class="col-sm-4 m-t-20">
                                                        <input type="text" class="form-control" name="cgrade" value="{{old('cgrade')}}"  autofocus>
                                                </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label for="name" class="col-sm-2 col-form-label">{{ __('Add University?') }}</label>
                                                        <div class="col-sm-4">
                                                          <a onclick="universityAddBtn()" class="form-control btn btn-danger">ADD</a>
                                                        </div>
                                                      </div>

                                                      <div class="form-group row bo2 p-t-20 p-b-20 m-t-10 m-b-20 p-r-10 p-l-10 hidden"  id="universityAddSection">
                                                          <label for="name" class="col-sm-2 col-form-label">{{ __('University') }}</label>
                                                          <div class="col-sm-4">
                                                            <input type="text" class="form-control" name="university" value="{{old('university')}}" autofocus>
                                                          </div>
                                                            <label for="name" class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                                          <div class="col-sm-4">
                                                                  <input type="number" class="form-control" name="universityyear" value="{{old('universityyear')}}" autofocus>
                                                          </div>
                                                          <label for="name" class="col-sm-2 col-form-label m-t-20">{{ __('GPA') }}</label>
                                                <div class="col-sm-4 m-t-20">
                                                        <input type="text" class="form-control" name="ugrade" value="{{old('ugrade')}}"  autofocus>
                                                </div>
                                                      </div> 
         
                                                      <div class="form-group row">
                                                            <label for="name" class="col-sm-2 col-form-label">{{ __('Gender') }}<h style="color:red">*</h></label>
                                                            <div class="col-sm-4">
                                                            <input type="radio" name="gender" value="Male" {{ (old('gender') == 'Male') ? 'checked' : '' }}> Male &nbsp &nbsp &nbsp
                                                            <input type="radio" name="gender" value="Female" {{ (old('gender') == 'Female') ? 'checked' : '' }}> Female &nbsp &nbsp &nbsp
                                                            <input type="radio" name="gender" value="Other" {{ (old('gender') == 'Other') ? 'checked' : '' }}> Other<br> 
                                                             </select>
                                                             @error('gender')
                                       <b>   <div style="color:#000d6e">*Gender is required.</div> </b>
                                          @enderror
                                                            </div>
                                                            <label for="name" class="col-sm-2 col-form-label">{{ __('Course Name') }}<h style="color:red">*</h></label>
                                                                <div class="col-sm-4">
                                                                <input type="radio" name="course" value="Graphic Design"   {{ (old('course') == 'Graphic Design') ? 'checked' : '' }} > Graphic Design &nbsp
                                                            <input type="radio" name="course" value="Web Design" {{ (old('course') == 'Web Design') ? 'checked' : '' }} > Web Design  &nbsp
                                                            <input type="radio" name="course" value="Digital Marketing" {{ (old('course') == 'Digital Marketing') ? 'checked' : '' }}> Digital Marketing<br> 
                                                            <input type="radio" name="course" value="Office Programming" {{ (old('course') == 'Office Programming') ? 'checked' : '' }}> MS Office &nbsp &nbsp
                                                          
                                                             @error('course')
                                       <b>   <div style="color:#000d6e">*Choose a course.</div> </b>
                                          @enderror
                                                                </div>
                                                            
                                                          </div>
                                                                                         

                                                          <div class="form-group row">
                                                          <label for="name" class="col-sm-2 col-form-label">{{ __('DOB') }}<h style="color:red">*</h></label>
                                                            <div class="col-sm-4">
                                                                    <input type="date" class="form-control" name="dob" value="{{old('dob')}}" autofocus>
                                                                    @error('dob')
                                       <b>   <div style="color:#000d6e">*Date of birth is required.</div> </b>
                                          @enderror
                                                            </div>
                                                                  <label for="name" class="col-sm-2 col-form-label">{{ __('Batch name') }}</label>
                                                                <div class="col-sm-4">
                                                                        <input type="text" class="form-control" name="batch" value="{{old('batch')}}" autofocus>
                                                                </div>
                                                              </div>

                                                          <div class="form-group row">
                                                                <label for="name" class="col-sm-2 col-form-label">{{ __('Referance No') }}</label>
                                                                <div class="col-sm-4">
                                                                  <input type="text" class="form-control" name="referance" value="{{old('reference')}}" autofocus>
                                                                </div>
                                                                <label for="name" class="col-sm-2 col-form-label">{{ __('Address') }}<h style="color:red">*</h></label>
                                                                    <div class="col-sm-4">
                                                                            <input type="text" class="form-control" name="address" value="{{old('address')}}" autofocus>
                                                                            @error('address')
                                       <b>   <div style="color:#000d6e">*Address is must.</div> </b>
                                          @enderror
                                                                    </div>
                                                              </div>

                                                              <div class="form-group row">
                                                              <label for="name" class="col-sm-2 col-form-label">{{ __('Admission Total (tk)') }}<h style="color:red">*</h></label>
                                                                <div class="col-sm-4">
                                                                        <input type="number" class="form-control" name="admission" value="{{old('admission')}}" autofocus>
                                                                        @error('admission')
                                       <b>   <div style="color:#000d6e">*Admission Amount is required.</div> </b>
                                          @enderror
                                                                </div>
                                                                    <label for="name" class="col-sm-2 col-form-label">{{ __('1st Installment (tk)') }}<h style="color:red">*</h></label>
                                                                    <div class="col-sm-4">
                                                                      <input type="number" class="form-control" name="paid" value="{{old('paid')}}" autofocus>
                                                                      @error('paid')
                                       <b>   <div style="color:#000d6e">*Paid amount is required.</div> </b>
                                          @enderror
                                                                    </div>
                                                                  
                                                                     
                                                                  </div>
                                                                  


                                                                  <div class="form-group row">
                                                                  <label for="name" class="col-sm-2 col-form-label">{{ __('Gurdian Phone Number') }}</label>
                                                        <div class="col-sm-4">
                                                          <input type="number" class="form-control" name="gno" value="{{old('gno')}}" autofocus>
                                                        </div>
                                                                    <label for="name" class="col-sm-2 col-form-label">{{ __('Photo') }}<h style="color:red">*</h></label>
                                                                    <div class="col-sm-4">
                                                                      <input type="file" class="form-control" name="name" autofocus>
                                                                      @error('name')
                                       <b>   <div style="color:#000d6e">*Photo is required.</div> </b>
                                          @enderror
                                                                    </div>
                                                                      <!-- <label for="name" class="col-sm-2 col-form-label">{{ __('Address') }}<h style="color:red">*</h></label>
                                                                    <div class="col-sm-4">
                                                                            <input type="text" class="form-control" name="address" value="{{old('address')}}" autofocus>
                                                                            @error('address')
                                       <b>   <div style="color:#000d6e">*Address is must.</div> </b>
                                          @enderror
                                                                    </div> -->
                                                                  </div>
                                                                
                                                                  <!-- <div class="form-group row">
                                                                  <label for="notice" class="col-sm-2 col-form-label">{{ __('Notice') }}<h style="color:red">*</h></label>
                                                                    <div class="col-sm-4">
                                                                            <input type="text" class="form-control" name="notice" value="{{old('notice')}}" autofocus>
                                                                            @error('notice')
                                       <b>   <div style="color:#000d6e">*Notice is must.</div> </b>
                                          @enderror
                                                                    </div>
                                                                  </div>
                                                               -->
    
                                                                     
                                              <button type="submit" onclick="return confirm('Are you sure you want to register this item?');" class="btn col-lg-2 offset-lg-5 btn-danger my-2 btn-lg"><a class="linked btn-lg">
                                                    {{ __('Register') }}
                                                </button>
                                    
                            </div>
                    </form>
                  

                    

                    <!-- <div style="margin-top:50px">
<button class="btn col-lg-2 offset-lg-5 btn-danger my-2 btn-lg"><a class="linked btn-lg" href="/stu">Return Back</a></button>
</div>  -->

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
        function schoolAddBtn() {
          var MakingShow = document.getElementById("schoolAddSection");
          MakingShow.classList.toggle("hidden");
          }
        </script>
        <script>
          function collegeAddBtn() {
          var MakingShow = document.getElementById("collegeAddSection");
          MakingShow.classList.toggle("hidden");
          }
        </script>
        <script>
          function universityAddBtn() {
          var MakingShow = document.getElementById("universityAddSection");
          MakingShow.classList.toggle("hidden");
          }
        </script>
         <script type="text/javascript">
  window.onbeforeunload = confirmExit;
  function confirmExit()
  {
    return "Do you want to leave this page without saving?";
  }
</script>
    </body>
    </html>