<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/images/title.png">
	<title>Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<section>
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

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="/student/getPDF/{{$students->id}}" class="btn-danger p-t-5 p-b-5 p-l-20 p-r-20">Print</a>

<!--						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Header Ends -->
	@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-b-100">
            <!-- <img src="{{ asset('storage'.'/'.'app'.'/'.'public'.'/'.'student'.'/'. $students->name)}}" width="100%"> -->
            <img src="{{ asset('storage'.'/'.'student'.'/'. $students->name)}}" width="100%">
                <div class="bg0 p-3" width="100%"><span class="txt-white">Student</span></div>
                <br>
                        <div class="month">      
                          <ul>
                            <li class="prev">&#10094;</li>
                            <li class="next">&#10095;</li>
                            <li>
                              August<br>
                              <span style="font-size:18px">2017</span>
                            </li>
                          </ul>
                        </div>

                        <ul class="weekdays">
                          <li>Mo</li>
                          <li>Tu</li>
                          <li>We</li>
                          <li>Th</li>
                          <li>Fr</li>
                          <li>Sa</li>
                          <li>Su</li>
                        </ul>

                        <ul class="dayis">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li><span class="active">7</span></li>
                          <li>8</li>
                          <li>9</li>
                          <li>10</li>
                          <li>11</li>
                          <li><span class="absent">12</span></li>
                          <li>13</li>
                          <li>14</li>
                          <li>15</li>
                          <li>16</li>
                          <li>17</li>
                          <li>18</li>
                          <li>19</li>
                          <li><span class="absent">20</span></li>
                          <li>21</li>
                          <li>22</li>
                          <li>23</li>
                          <li>24</li>
                          <li>25</li>
                          <li>26</li>
                          <li>27</li>
                          <li>28</li>
                          <li>29</li>
                          <li>30</li>
                          <li>31</li>
                        </ul>
			</div>
			
		
			

            <div class="col-lg-8 p-b-100 profile-info">
			
                <h2 class="m-b-10"><strong>{{$students->firstname}}</strong> <strong>{{$students->lastname}}</strong></h2>
                <h5 class="m-b-10">Student</h5>
                <p><span class="txt3">Father Name :</span>{{$students->father}}</p>
				<p><span class="txt3">Mother Name :</span>{{$students->mother}}</p>
				<p><span class="txt3">Mobile :</span> {{$students->mobile}}</p>
				<p><span class="txt3">Email :</span> {{$students->email}}</p>
				<p><span class="txt3">School :</span> {{$students->school}}</p>
                <p><span class="txt3">Passing Year :</span>{{$students->schoolyear}}</p>
                <p><span class="txt3">School GPA :</span> {{$students->sgrade}}</p>
				<p><span class="txt3">College :</span>{{$students->college}}</p>
                <p><span class="txt3">Passing Year :</span>{{$students->collegeyear}}</p>
                <p><span class="txt3">College GPA :</span> {{$students->cgrade}}</p>
				<p><span class="txt3">University :</span>{{$students->university}}</p>
                <p><span class="txt3">Passing Year :</span>{{$students->universityyear}}</p>
                <p><span class="txt3">University CGPA :</span> {{$students->ugrade}}</p>
                <p><span class="txt3">Address :</span>{{$students->address}}</p>
                
                <p><span class="txt3">Gender :</span>{{$students->gender}}</p>
				<p><span class="txt3">DoB :</span>{{$students->dob}}</p>
                <p><span class="txt3">Course Name :</span>{{$students->course}}</p>
				<p><span class="txt3">Batch Name :</span>{{$students->batch}}</p>
				<p><span class="txt3">Referance Number :</span>{{$students->referance}}</p>
				<p><span class="txt3">Admission Total (tk):</span>{{$students->admission}}</p>
				<p><span class="txt3">1st Installment (tk):</span>{{$students->paid}}</p>
                <p><span class="txt3">Due Amount (tk):</span>{{$students->due}}</p>
				<p><span class="txt3">2nd Installment (tk):</span>{{$students->paid2}}</p>
                <p><span class="txt3"></span>{{$students->image}}</p>
                <p><span class="txt3">Roll:</span>{{$students->roll}}</p>
                <p><span class="txt3">Gurdian Phone Number:</span>{{$students->gno}}</p>
                
            </div>
        </div>
    </div>
    
		<div style="margin-top:0px">
<button class="btn col-lg-2 offset-lg-5 btn-danger my-2 btn-lg"><a class="linked btn-lg" href="{{route('student.index')}}">Return Back</a></button>
</div> 
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
