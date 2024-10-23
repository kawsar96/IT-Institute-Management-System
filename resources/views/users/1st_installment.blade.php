<!DOCTYPE html>
<html lang="en">
<head>
    <title>1st Installment</title>
  
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
<body class="">

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


    <div class="col-md-12">
               
           
        </div>
    </div>
    
</div>

<button class="btn col-lg-3 btn-danger my-2 indv_btn"><a class="linked btn-lg btn-block" onclick="return confirm('Are you sure you want to clear this item?');" href="/clear1">Clear All Approved Notifications</a></button>
<table class="table tabel-bordered table-dark">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Course Name</th>
            <!-- <th>Batch Name</th> -->
            <th>Email</th>
            <th>Mobile No</th>
            <th>Admission Amount</th>
            <th>1st installment</th>
            <!-- <th>2nd installment</th> -->
            <th>Due Amount</th>
            <th>Time</th>
            <th>Notice Board</th>
                
        </tr>
        @foreach($students as $key => $student)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$student->firstname}}</td>
            <td>{{$student->lastname}}</td>
            <td>{{$student->course}}</td>
            <!-- <td>{{$student->batch}}</td> -->
            <td>{{$student->email}}</td>
            <td>{{$student->mobile}}</td>
            <td>{{$student->admission}} tk</td>
            <td>{{$student->paid}} tk</td>
            <!-- <td>{{$student->paid2}} tk</td> -->
            <td>{{$student->due}} tk</td>
            <td>{{$student->created_at}}</td>
            <td>{{$student->notice}}</td>
            <td>

<div class="btn">
           
                   <a href="{{route('student.show', $student->id)}}" class="btn btn-info">Show</a>
                    @if ($student->is_approved == '0')
                    <a href="{{route('post.approve', $student->id)}}" class="btn btn-warning">Pending</a>
                    @else
                    <p class="btn btn-success">Approved</p>
                    @endif   
</div>
            </td>
      </tr>
      @endforeach

    </table>
    <div style="margin-top:0px">
<button class="btn col-lg-2 offset-lg-5 btn-danger my-2 btn-lg"><a class="linked btn-lg btn-block" href="/notification">Return Back</a></button>
</div> 

    	<!-- Footer -->
        @include('layouts.footer')
       
            
        @endsection
    <!--===============================================================================================-->
        <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    <!--===============================================================================================-->
    </body>
    </html>
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