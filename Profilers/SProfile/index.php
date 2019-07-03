<?php
include 'index1.php';
?>
<?php
include("db.php");
if(isset($_POST["submit"]))  
{  
	if(empty($_POST["email"]))  
	{  
		echo '<script>alert("Email is required!")</script>';  
	}elseif(empty($_POST["password"])){  
		echo '<script>alert("Password is required!")</script>';  
	}  
	else  
	{  
		$email = mysqli_real_escape_string($con, $_POST["email"]);  
		$password = mysqli_real_escape_string($con, $_POST["password"]);  
		//$password = md5($password);  
		$query = "SELECT * FROM registeredUser WHERE email = '$email' AND password = '$password'";  
		$result = mysqli_query($con, $query);  

		while($row = $result->fetch_assoc()) {
			$_SESSION['firstName'] = $row["firstName"];
		}
		if(mysqli_num_rows($result) > 0)  
		{  
			$_SESSION['email'] = $email;  
			$_SESSION['fullName'] = $fullName;   
			header("location:login.php");  
		}  
		else  
		{  
			echo '<script>alert("Wrong User Details")</script>';  
		}  
	}  
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<title>Student Login</title>
	<meta name="description" content="">
	<meta name="author" content="templatemo">
	<!--favicon-->
	<link rel="shortcut icon" href="favicon.ico" type="image/icon">
	<link rel="icon" href="favicon.ico" type="image/icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../../Homepage/css/style.css">
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
				<div class="square"></div>
				<h1>Student Login</h1>
			</header>
			<form class="templatemo-login-form" method="POST">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
						<input type="text" class="form-control" placeholder="Email" name="email">
					</div>	
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
						<input type="password" class="form-control" placeholder="******" name="password">           
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100" name="submit">Login</button>
				</div>
			</form>
		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Not a registered user yet? <strong><a href="Register.php" class="blue-text">Sign up now!</a></strong></p>
		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Can't Access Account? <strong><a href="Forgot Password.php" class="blue-text">Reset Password!</a></strong></p>
		</div>
		<!--Footer-->
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
							<a href="../PProfile/index.php">TPO Login</a>
						</li>
						<li>
							<a href="../HODProfile/index.php">Admin Login</a>
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
						<a href="#" target="_parent">Swati Chauhan || Rachana Gohel</a>
					</div>
				</div>
			</div>
		</body>
		</html>
