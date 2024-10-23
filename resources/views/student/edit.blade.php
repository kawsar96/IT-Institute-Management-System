<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/images/title.png">
	<title>Student Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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




<form action="/stu/update/{{$students->id}}" method="POST" >
                        @csrf

                        <div class="container">
                                <form class="col-lg-12 m-auto p-b-100">
                               
                                <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">{{ __('First Name') }}</label>
                                        <div class="col-sm-4">
                                        <p class="form-control">  {{$students->firstname}}</p>
                                          <!-- <input type="text" class="form-control" name="firstname" value="{{$students->firstname}}" autofocus> -->
                                          @error('firstname')
                                       <b>   <div style="color:#000d6e">*Firstname is required.</div> </b>
                                          @enderror
                                        </div>
                                          <label for="name" class="col-sm-2 col-form-label">{{ __('Last Name') }}</label>
                                        <div class="col-sm-4">
                                        <p class="form-control">  {{$students->lastname}}</p>
                                                <!-- <input type="text" class="form-control" name="lastname" value="{{$students->lastname}}" autofocus> -->
                                                @error('lastname')
                                       <b>   <div style="color:#000d6e">*Lastname is required.</div> </b>
                                          @enderror
                                        </div>
                                      </div>
                            
                                      <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label">{{ __('Father Name') }}</label>
                                            <div class="col-sm-4">
                                            <p class="form-control">  {{$students->father}}</p>
                                              <!-- <input type="text" class="form-control" name="father" value="{{$students->father}}" autofocus> -->
                                              @error('father')
                                       <b>   <div style="color:#000d6e">*Father name is required.</div> </b>
                                          @enderror
                                            </div>
                                              <label for="name" class="col-sm-2 col-form-label">{{ __('Mother Name') }}</label>
                                            <div class="col-sm-4">
                                            <p class="form-control">  {{$students->mother}}</p>
                                                    <!-- <input type="text" class="form-control" name="mother" value="{{$students->mother}}" autofocus> -->
                                                    @error('mother')
                                       <b>   <div style="color:#000d6e">*Mother name is required.</div> </b>
                                          @enderror
                                            </div>
                                          </div>
                            
                                          <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">{{ __('Mobile No') }}</label>
                                                <div class="col-sm-4">
                                                <p class="form-control">  {{$students->mobile}}</p>
                                                  <!-- <input type="text" class="form-control" name="mobile" value="{{$students->mobile}}" autofocus> -->
                                                  @error('mobile')
                                       <b>   <div style="color:#000d6e">*Mobile No. is required with 11 digits and it should be unique.</div> </b>
                                          @enderror

                                                </div>
                                                  <label for="name" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                                <div class="col-sm-4">
                                                <p class="form-control">  {{$students->email}}</p>
                                                        <!-- <input type="email" class="form-control" name="email" value="{{$students->email}}" autofocus> -->
                                                        @error('email')
                                       <b>   <div style="color:#000d6e">*Email is required in email format.</div> </b>
                                          @enderror
                                                </div>
                                              </div>

                                              <!-- <div class="form-group row">
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
                                                            <label for="name" class="col-sm-2 col-form-label">{{ __('University') }}</label>
                                                            <div class="col-sm-4">
                                                              <input type="text" class="form-control" name="university" value="{{$students->university}}" autofocus>
                                                            </div>
                                                              <label for="name" class="col-sm-2 col-form-label">{{ __('Passing Year') }}</label>
                                                            <div class="col-sm-4">
                                                                    <input type="number" class="form-control" name="universityyear" value="{{$students->universityyear}}" autofocus>
                                                            </div>
                                                          </div>  -->

                                                                  <div class="form-group row">
                                                                  <label for="notice" class="col-sm-2 col-form-label">{{ __('Due Amount (tk)') }}</label>
                                                                    <div class="col-sm-4">
                                                                  <p class="form-control">  {{$students->due}}</p>
                                                                    </div>
                                                                    @if($students->due =='0')    
                                                                    <label for="name" class="col-sm-2 col-form-label">{{ __('2nd Installment (tk)') }}</label>
                                                                    <div class="col-sm-4">
                                                                    <p class="form-control">  No Due Amount</p>
                                                                    </div>
                                                                    </div>
                                                                    @else                 
                                                                    <label for="name" class="col-sm-2 col-form-label">{{ __('2nd Installment (tk)') }}</label>
                                                                    <div class="col-sm-4">
                                                                      <input type="text" class="form-control" name="paid2" value='0' autofocus>
                                                                    </div>
                                                                    </div>
                                                                    @endif

                                                                    <div class="form-group row">
                                                                   
                                    
                                                                    <!-- <label for="name" class="col-sm-2 col-form-label">{{ __('Batch Name') }}</label>
                                                                <div class="col-sm-4">
                                                                        <input type="text" class="form-control" name="batch" value="{{$students->batch}}" autofocus>
                                                                </div>  -->



                                                                    <!-- <label for="notice" class="col-sm-2 col-form-label">{{ __('Notice') }}</label>
                                                                    <div class="col-sm-4">
                                                                            <input type="text" class="form-control" name="notice" value="{{$students->notice}}" autofocus>
                                                                            @error('notice')
                                       <b>   <div style="color:#000d6e">*Notice is mendatory to notify what changes you have made.</div> </b>
                                          @enderror
                                                                    </div>  -->
                                                                    </div>
                                                                    @if (count($errors) > 0)
                                                                    <div class = "alert alert-danger container">
                                                                          <ul>
                                                                            @foreach ($errors->all() as $error)
                                                                              <b>  <li>➤{{ $error }}</li> </b>
                                                                            @endforeach

                                                                          </ul>
                                                                          
                                                                      </div>
                                                                      
                                                                    @endif

                                                                    @if($students->due =='0')  
    

                                              <button class="btn col-lg-1 offset-lg-0 btn-info my-2"><a class="linked btn-lg" href="/stu">Return</a></button>
                                              @else   
                                                                  <button type="submit" class="btn col-lg-2 offset-lg-4 btn-danger my-2 btn-lg"><a class="linked btn-lg">
                                                    {{ __('Update') }}
                                                    @endif
                                    
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
    
    </body>
    </html>