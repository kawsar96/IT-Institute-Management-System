

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/images/title.png">
    <title>Part-time Employees</title>
  
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
								<!-- <li>
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
								</li> -->
							</ul>
						</nav>
					</div>
					<!-- Social -->
				
				</div>
			</div>
		</div>
    </header>
    @extends('layouts.app')

@section('content')
    
<!-- <div class="container">
   
<input type="text" name="firstname" id="firstname" class="form-control input-lg" placeholder="Enter First Name" />
<div id="countryList" >
    
    </div>



    <div class="col-md-12">
               
           
        </div>
    </div>
    
</div> -->
<div style="overflow-x:auto;">

<table style="background-color: #212529; color: white;" class="table">
        <tr>
            <!-- <th>Count</th> -->
            <th>Unique Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Designation</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Joining Date</th>
            <th>Present Address</th>
            <!-- <th>Parmanent Address</th> -->
            <th class="t-center">Action</th>
                
        </tr>
        @foreach($employees as $key => $employee)
        <tr>
            <!-- <td>{{++$key}}</td> -->
            <td>{{$employee->uno}}</td>
            <td>{{$employee->firstname}}</td>
            <td>{{$employee->lastname}}</td>
            <td>{{$employee->designation}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->mobile}}</td>
            <td>{{$employee->joiningdate}}</td>
            <!-- <td>{{$employee->taddress}}</td> -->
            <td>{{$employee->paddress}}</td>
          
            <td>


               
                 <!-- <form action="/employee/destroy/{{$employee->id}}" method="post">
                 @csrf
                    @method('DELETE') -->
                    <!-- <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>  -->
                    <!-- <a href="/employee/edit/{{$employee->id}}" class="btn btn-info">Edit</a> -->
                    <a href="/parttimeadmin/p-e.show/{{$employee->id}}" class="btn btn-warning">Show</a> 
                  
                <!-- </form> -->
            </td>
      </tr>
      @endforeach

    </table>
</div>
   <div class="t-center p-b-15">
            <a href="/parttimeadmin/p-e.create" class="btn btn-lg btn-success">Register New Employee</a>
        </div>
        <!-- <div style="margin-top:0px">
<button class="btn col-lg-2 offset-lg-5 btn-danger my-2 btn-lg"><a class="linked btn-lg btn-block" href="/admin">Return Back</a></button>
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

