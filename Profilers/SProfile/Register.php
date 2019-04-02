<?php

include("db.php");
if(isset($_POST['submit'])){
	// echo "<script>alert('Form Submitted')</script>";
	$enrollment = $_POST['enrollment'];
	$fullName = $_POST['fullName'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password1 = md5($_POST['password1']);
	$password2 = md5($_POST['password2']);
	$semester = $_POST['semester'];
	$department = $_POST['department'];
	$tenthPercentage = $_POST['tenthPercentage'];
	$cpi = $_POST['cpi'];
	$backlog = $_POST['backlog'];
	$currentBacklog = $_POST['currentBacklog'];
	$technology = $_POST['technology'];
	$jobLocation = $_POST['jobLocation'];
	$interestArea = $_POST['interestArea'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$phoneAddress = $_POST['phoneAddress'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$country = $_POST['country'];
	$otherActivity = $_POST['otherActivity'];

	$check=mysqli_query($con,"SELECT * FROM registeredUser WHERE email='$email'");
	$checkrows=mysqli_num_rows($check);

	if ($password1 != $password2){
		echo "<script>alert('Password and Confirm Password were not same, Pls Register again!')</script>";
	}else if ($checkrows > 0) {
		echo "<script>alert('User already exists, pls login!')</script>";
	}else{
		mysqli_query($con,"INSERT INTO registeredUser(enrollment,fullName,email,mobile,password,semester,department,tenthPercentage,cpi,backlog,currentBacklog,technology,jobLocation,interestArea,firstName,lastName,phoneAddress,address1,address2,city,state,zipcode,country,otherActivity) 
			VALUES ('$enrollment','$fullName','$email','$mobile','$password1','$semester','$department','$tenthPercentage','$cpi','$backlog','$currentBacklog','$technology','$jobLocation','$interestArea','$firstName','$lastName','$phoneAddress','$address1','$address2','$city','$state','$zipcode','$country','$otherActivity')") or die(mysqli_error());
		echo "<script>alert('Registered Successfully!')
		window.location='index.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!--favicon-->
	<link rel="shortcut icon" href="favicon.ico" type="image/icon">
	<link rel="icon" href="favicon.ico" type="image/icon">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<title>Student Register</title>
	<meta name="description" content="">
	<meta name="author" content="templatemo">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="../../Homepage/css/jquery-ui.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">
	<!-- Footer -->
	<link type="text/css" rel="stylesheet" href="../../Homepage/css/style.css">
</head>
<body class="light-gray-bg">

	<section>
		<div class="container">
			<form class="user_acc_info" method="POST">
				<div id="register_steps_tab">
					<h3><span class="step_number">1</span>Student Information</h3>
					<div class="step_content">
						<div class="row">
							<div class="col-sm-6 centered">
								<h3>Student Account</h3>
								<div class="form_input">
									<label>Enrollment Number*</label>
									<input type="text" class="input_text" required="required" name="enrollment" placeholder="Enrollment Number">
								</div>
								<div class="form_input">
									<label>Full Name *</label>
									<input type="text" class="input_text" required="required" name="fullName" placeholder="Enter FullName">
								</div>
								<div class="form_input">
									<label>Email *</label>
									<input type="text" class="input_text" required="required" name="email" placeholder="Enter your email">
								</div>
								<div class="form_input">
									<label>Mobile Number *</label>
									<input type="text" class="input_text" required="required" name="mobile" placeholder="Enter Mobile Number">
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form_input">
											<label>Create Password *</label>
											<input type="password"  required="required" name="password1" class="input_text" placeholder="*****">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form_input">
											<label>Confirm Password *</label>
											<input type="password" required="required" name="password2" class="input_text" placeholder="*****">
										</div>
									</div>
								</div>
								<div class="next_step_and_prev_step">
									<a href="javascript:void(0);" class="next_step">Next</a>
								</div>
							</div>
						</div>
					</div>
					<h3><span class="step_number">2</span>Education Information</h3>
					<div class="step_content">
						<div class="row">
							<div class="col-sm-6 centered">
								<h3></h3>
								<div class="row">
									<div class="col-sm-6">
										<div class="form_input">
											<label>Semester *</label>
											<input type="text" required="required" name="semester" class="input_text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form_input">
											<label>Department *</label>
											<input type="text" required="required" name="department" class="input_text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form_input">
											<label>10th/ 12th *</label>
											<input type="text" name="tenthPercentage" class="input_text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form_input">
											<label>CPI/SPI *</label>
											<input type="text" required="required" name="cpi" class="input_text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form_input">
											<label>Backlog *</label>
											<input type="text" required="required" name="backlog" class="input_text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form_input">
											<label>Current Backlog *</label>
											<input type="text" required="required" name="currentBacklog" class="input_text">
										</div>
									</div>
								</div>
								<div class="form_input">
									<label>Technology *</label>
									<input type="text" required="required" name="technology" class="input_text" placeholder="java/php/node/....">
								</div>
								<div class="form_input">
									<label>Job Location *</label>
									<input type="text" required="required" name="jobLocation" class="input_text" placeholder="Rajkot/Ahemadabad/....">
								</div>
								<div class="form_input">
									<label>Area of Interest *</label>
									<input type="text" required="required" name="interestArea" class="input_text">
								</div>
								<div class="next_step_and_prev_step">
									<a href="javascript:void(0);" class="prev_step">Previous</a>
									<a href="javascript:void(0);" class="next_step">Next</a>
								</div>
							</div>
						</div>
					</div>
					<h3><span class="step_number">3</span>Communication Details</h3>
					<div class="step_content">
						<div class="row">
							<div class="col-sm-6 centered">
								<h3>Address</h3>
								<div class="row">
									<div class="col-sm-6">
										<div class="form_input">
											<label>First Name *</label>
											<input type="text" required="required" name="firstName" class="input_text" placeholder="Enter first name">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form_input">
											<label>Last Name *</label>
											<input type="text" required="required" name="lastName" class="input_text" placeholder="Enter first name">
										</div>
									</div>
								</div>
								<div class="form_input">
									<label>Phone Number *</label>
									<input type="text" required="required" name="phoneAddress" class="input_text" placeholder="Enter phone number">
								</div>
								<div class="form_input">
									<label>Address *</label>
									<input type="text" required="required" name="address1" class="input_text" placeholder="Enter address">
								</div>
								<div class="form_input">
									<label>Address Line 2</label>
									<input type="text" name="address2" class="input_text" placeholder="Enter address">
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form_input">
											<label>City *</label>
											<input type="text" name="city" required="required" class="input_text" placeholder="Enter city">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form_input">
											<label>State *</label>
											<input type="text" required="required" name="state" class="input_text" placeholder="Enter state">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form_input">
											<label>Zip Code *</label>
											<input type="text" name="zipcode" class="input_text" placeholder="Enter zip code">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form_input">
											<label>Country *</label>
											<input type="text" name="country" required="required" class="input_text" placeholder="Enter Country">
										</div>
									</div>
								</div>
								<div class="next_step_and_prev_step">
									<a href="javascript:void(0);" class="prev_step">Previous</a>
									<a href="javascript:void(0);" class="next_step">Next</a>
								</div>
							</div>
						</div>
					</div>
					<h3><span class="step_number">4</span>Other Details</h3>
					<div class="step_content">
						<div class="row">
							<div class="col-sm-6 centered">
								<h3>Extra Activity / Session / Workshop</h3>
								<div class="row">
									<div class="form_input">
										<label>Other Activity *</label>
										<textarea class="input_text" style="resize: none; height: 100px;" placeholder="Extra Activity / Session / Workshop" name="otherActivity" required="required" ></textarea>
									</div>
								</div>
								<div class="next_step_and_prev_step">
									<a href="javascript:void(0);" class="prev_step">Previous</a>
									<input type="submit" class="reg_submit_btn" name="submit" value="Register">
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 ftr_navi ftr">
				<h3>NAVIGATION</h3>
				<ul>
					<li>
						<a href="../../Homepage/index.php">Home</a>
					</li>
					<li>
						<a href="../SProfile/index.php">Student Login</a>
					</li>
					<li>
						<a href="../PProfile/index.php">Placement Login</a>
					</li>
					<li>
						<a href="../HODProfile/index.php">HOD Login</a>
					</li>
					<li>
						<a href="../PriProfile/index.php">Administrative Login</a>
					</li>
				</ul>
			</div>
			<div class="col-md-3 ftr_navi ftr">
				<h3>MEMBERS</h3>
				<ul>
					<li>
						<a href="#">Customer Support</a>
					</li>
					<li>
						<a href="#">Placement Support</a>
					</li>
					<li>
						<a href="#">Faculty Support</a>
					</li>
					<li>
						<a href="#">Registered Companies</a>
					</li>
					<li>
						<a href="#">Training</a>
					</li>
				</ul>
			</div>
			<div class="col-md-3 get_in_touch ftr">
				<h3>GET IN TOUCH</h3>
				<p>GEC, Mavdi-Kankot Road,</p>
				<p>Near Hanuman Temple, Rajkot</p>
				<p>+91 9978287873</p>
				<a href="mailto:gec-rajkot-dte@gujarat.gov.in">gec-rajkot-dte@gujarat.gov.in</a>
			</div>
			<div class="col-md-3 ftr-logo">
				<p>Copyright &copy; 2019 GEC-PMS | Developed by
					<a href="#" target="_parent">SWati Chauhan || Rachna Gohel</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<script type="text/javascript" src="../../Homepage/js/jquery.js"></script>
		<script type="text/javascript" src="../../Homepage/js/jquery-ui.js"></script>
		<script type="text/javascript">
			$( ".day_wise_itinerary_accordion" ).accordion({
				collapsible: true,
				heightStyle: "content"
			});

    $("#register_steps_tab").accordion({
    	heightStyle: "content"
    });
    $('.next_step').click(function () {
    	$('#register_steps_tab.ui-accordion .ui-accordion-header-active').next('.step_content').next('h3').trigger('click');
    	$('#register_steps_tab.ui-accordion .ui-accordion-header-active').prev('.step_content').prev('h3').addClass('step_done');
    });
    $('.prev_step').click(function () {
    	$('#register_steps_tab.ui-accordion .ui-accordion-header-active').prev('.step_content').prev('h3').trigger('click');
    	$('#register_steps_tab.ui-accordion .ui-accordion-header-active').removeClass('step_done');
    });
</script>
</body>
</html>