
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/images/title.png">
    <title>Students</title>
  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <style>
         .indv_li{
             width:400px;
             padding: 5px 15px;
         }
    </style>
</head>
<body class="amargradient">

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
                    
					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="/getEXCEL" class="btn btn-danger">Full student List in Excel</a>

                    </div>

                    <!-- Notifications -->
                    <li class="nav-item dropdown"> 
                            <a style="color:black" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fa fa-bell"></i>
                            @if(auth()->user()->unreadNotifications->count())
                            <span class="badge badge-light">{{ auth()->user()->unreadNotifications->count()}}</span>
                            @endif
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <li class="indv_li"><a style="color:green" href="/markAsRead">Mark all as Read</a></li>
                            
                            <li class="indv_li"><a style="color:green" href="/notificationDelete">Delete All Notifications</a></li>
                            @foreach (auth()->user()->unreadNotifications as $notification)
                            <li class="indv_li" style="background-color: lightgray"><a href="#">{{$notification->data['data']}}</a></li>
                               @endforeach
                               @foreach (auth()->user()->readNotifications as $notification)
                            <li  class="indv_li"><a href="#">{{$notification->data['data']}}</a></li>
                               @endforeach
                               
                            </ul>
                        </li>
                      <!-- Notifications End-->
				</div>
			</div>
        </div>
        
    </header>
    
    @extends('layouts.app')
    @section('content')
 
<div class="container p-b-40">
   
<input type="number" name="mobile" id="mobile" class="form-control input-lg" placeholder="Enter Mobile Number" />
<div id="countryList" >
    
    </div>
    
</div>
<form action="/students/clearAll" method="post">
                    
                    @csrf
                        @method('DELETE')
<button   type="submit"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn col-lg-3 btn-danger my-2 indv_btn"><a class="linked btn-lg btn-block" >Clear All Student Data</a></button>
</form>
<div style="overflow-x:auto;">

<table style="background-color: #212529; color: white;" class="table">
        <tr>
            <th>Count</th>
            <th>Roll</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Course Name</th>
            <!-- <th>Batch Name</th> -->
            <th>Email</th>
            <th>Mobile No</th>
            <th>Admission</th>
            <th>1st Installment</th>
            <th>Due</th>
            <th class="t-center">Action</th>
                
        </tr>
        @foreach($students as $key => $student)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$student->roll}}</td>
            <td>{{$student->firstname}}</td>
            <td>{{$student->lastname}}</td>
            <td>{{$student->course}}</td>
            <!-- <td>{{$student->batch}}</td> -->
            <td>{{$student->email}}</td>
            <td>{{$student->mobile}}</td>
            <td>{{$student->admission}} bdt</td>
            <td>{{$student->paid}} bdt</td>
            <td>{{$student->due}} bdt</td>
            <td>


                    
                <form class="btn" action="{{route('student.destroy',$student->id)}}" method="post">
                    
                @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>
                    <a href="{{route('student.edit', $student->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('student.show', $student->id)}}" class="btn btn-light">Show</a>
                   
                </form>
            </td>
      </tr>
      @endforeach

    </table>
</div>
   <div class="t-center p-b-15">
            <a href="{{route('student.create')}}" class="btn btn-lg btn-success">Register New Students</a>
        </div>
        <div style="margin-top:0px">
<button class="btn col-lg-2 offset-lg-5 btn-danger my-2 btn-lg"><a class="linked btn-lg btn-block" href="/admin">Return Back</a></button>
</div> 
    	<!-- Footer -->
	@include('layouts.footer')
       
        @endsection
        
     <!--===============================================================================================-->
     <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    <!--===============================================================================================-->

        <script>
        $(document).ready(function(){

        $('#mobile').keyup(function(){ 
                var query = $(this).val();
                if(query != '')
                {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                url:"{{ route('autocomplete.fetch') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    
                $('#countryList').fadeIn();  
                            $('#countryList').html(data);
                }
                });
                }
            });

        });
        </script>
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
    
