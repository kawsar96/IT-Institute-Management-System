
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
		<div class="">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						
					</div>

					<!-- Menu -->
					

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20 p-t-20">
          <!-- <a href="{{route('stu.edit', $student->id)}}" class="btn btn-info">2nd Installment</a> -->
          <a href="{{route('stu.edit', $student->id)}}" class="btn btn-danger m-r-10" style="font-weight:bold ">2nd Installment</a> 
						<a href="/stu/getPDF/{{$students->id}}" class="btn btn-info" style="font-weight:bold ">Print</a>

<!--						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>-->
					</div>
				</div>
			</div>
		</div>
	</header>
    <!-- Header Ends -->
    
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
				<p><span class="txt3">Referance No :</span>{{$students->referance}}</p>
				<p><span class="txt3">Admission Total (tk):</span>{{$students->admission}}</p>
				<p><span class="txt3">1st Installment (tk):</span>{{$students->paid}}</p>
                <p><span class="txt3">Due Amount (tk):</span>{{$students->due}}</p>
                <p><span class="txt3">2nd Installment (tk):</span>{{$students->paid2}}</p>
                <p><span class="txt3">Gurdian Phone Number:</span>{{$students->gno}}</p>
                <p><span class="txt3"></span>{{$students->image}}</p>
                
            </div>
        </div>
    </div>
    <div style="margin-top:0px">
<button class="btn col-lg-2 offset-lg-5 btn-danger my-2 btn-lg"><a class="linked btn-lg" href="/stu">Return Back</a></button>
</div> 

    <!-- Footer -->
	
    <!-- Footer Ends -->

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
