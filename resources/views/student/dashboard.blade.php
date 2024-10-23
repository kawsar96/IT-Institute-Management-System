
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
                    <!-- <li class="nav-item dropdown">
                            
                            <a style="color:black" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fa fa-bell"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @foreach (auth()->user()->notifications as $notification)
                            <li><a href="#">{{$notification->data['data']}}</a></li>
                               @endforeach
                           
                               
                            </ul>
                        </li> -->
                      
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

    <div class="col-md-12">
               
           
        </div>
    </div>
    
</div>
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


                    
               
                    <div class="btn">
                     
                    <a href="{{route('stu.show', $student->id)}}" class="btn btn-light">Show</a>
                    <a href="{{route('stu.edit', $student->id)}}" class="btn btn-info">2nd Installment</a>
</div>
            </td>
      </tr>
      @endforeach

    </table>
</div>
   <div class="t-center p-b-15">
            <a href="{{route('stu.create')}}" class="btn btn-lg btn-success">Register New Students</a>
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