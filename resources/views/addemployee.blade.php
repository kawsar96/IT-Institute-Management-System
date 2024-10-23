<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Employee</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
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
						<a href="index.html">
							<span class="txt5">IT Institute</span>
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.html">Home</a>
								</li>
                                
                                <li>
									<a href="addstudents.html">Admission</a>
								</li>

								<li>
									<a href="students.html">Students</a>
								</li>

								<li>
									<a href="employee.html">Employee</a>
								</li>
                                <li>
									<a href="activity.html">Activity</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#" class="btn-danger p-t-5 p-b-5 p-l-20 p-r-20">Logout</a>
<!--
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>
-->

<!--						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>-->
					</div>
				</div>
			</div>
		</div>
	</header>
    <!-- Students table-->
    <div class="container">
      <form class="col-lg-12 m-auto p-b-100">
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">First Name : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Last Name : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Father's Name : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Mother's Name : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Mobile No : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Email : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Address : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Image : </label>
            <div class="col-sm-4">
              <input type="file" class="form-control" id="inputPassword" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">National ID : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
              <label for="inputPassword" class="col-sm-2 col-form-label">NID Scan Copy : </label>
            <div class="col-sm-4">
              <input type="file" class="form-control" id="inputPassword" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">School : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Passing year : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">College : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Passing year : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">University/College : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Passing year : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Referance No : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Admission total : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Paid Amount : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Due Amount : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
          </div>
<!--
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Mother's Name : </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputPassword" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Address : </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Phone Number : </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Email : </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">NID : </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">NID Scan Copy : </label>
            <div class="col-sm-8">
                <input type="file" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">School : </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">College : </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">University : </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Admission Total: </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Paid Amount : </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Due Amount : </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Admission Date: </label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Referral Code: </label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="inputPassword" placeholder="">  
            </div>
          </div>
-->
          
          <button type="submit" class="btn btn-danger col-lg-12">Submit</button>
        </form>
    </div>
    
	<!-- Footer -->
  @include('layouts.footer')



    
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
