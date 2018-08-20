<?php
	ob_start();
	session_start();
	if( isset($_SESSION['user'])!="" ){
		header("Location: home.php");
	}
	include_once '../database_connect.php';
	
	// select the area
	$results = mysql_query("select * from area");
		

	$error = false;

	if ( isset($_POST['btn-signup']) ) {
		
		// clean user inputs to prevent sql injections
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$tel = trim($_POST['tel']);
		
		/*$number = trim($_POST['number']);
		$number = strip_tags($number);
		$number = htmlspecialchars($number);*/
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		
		$cpass = trim($_POST['cpass']);
		$cpass = strip_tags($cpass);
		$cpass = htmlspecialchars($cpass);
		
		$pan = trim($_POST['pan']);
		$pan = strip_tags($pan);
		$pan = htmlspecialchars($pan);
		
		$gst = trim($_POST['gst']);
		$gst = strip_tags($gst);
		$gst = htmlspecialchars($gst);
		
		$address = trim($_POST['address']);
		$address = strip_tags($address);
		$address = htmlspecialchars($address);
		
		// basic name validation
		if (empty($name)) {
			$error = true;
			$nameError = "Please enter your full name.";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "Name must contain alphabets and space.";
		}
		
		/*
		if (empty($number)) {
			$error = true;
			$numberError = "Please enter your number.";
		} else if (strlen($number) < 10) {
			$error = true;
			$numberError = "number must have 10 number.";
		} else if (!preg_match("/^[0-9 ]/",$number)) {
			$error = true;
			$numberError = "number must contain number.";
		}
		*/
		
		// basic validation for mobile number
		if (empty($tel)) {
			$error = true;
			$phoneError = "Please enter your phone number.";
		}
		
		// basic gst validation
		if (empty($gst)) {
			$error = true;
			$gstError = "Please enter your GST number.";
		} 
		
		// basic pan validation
		if (empty($pan)) {
			$error = true;
			$panError = "Please enter your PAN number.";
		}
		
		// basic address validation
		if (empty($address)) {
			$error = true;
			$addressError = "Please enter your address.";
		} 
		
		
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		} else {
			// check email exist or not
			$query = "SELECT email FROM register WHERE email='$email'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
		}
		// password validation
		
		if (empty($pass)){
			$error = true;
			$passError = "Please enter password.";
		} else if($pass != $cpass){
			$error = true;
			$passError = "passwords doesn't match";
		}else if(strlen($pass) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";
		}
		
		// password encrypt using SHA256();
		$password = hash('sha256', $pass);
		
		// if there's no error, continue to signup
		if( !$error ) {
			
			$query = "INSERT INTO register(date_created,name,email,password,cpassword,tel,gst,pan,address,register_type) VALUES(NOW(),'$name','$email','$password','$cpass','$tel','$gst','$pan','$address','sales')";
			$res = mysql_query($query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				unset($name);
				unset($email);
				unset($pass);
				unset($cpass);
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		}
		
		
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Admin | Sign Up</title>
		<link rel="icon" type="image/png" href="../favicon.png">
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="../admin/plugins/iCheck/square/blue.css">
	</head>
	<body>
		

		<div class="container">

			<div id="login-form">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
			
				<div class="col-md-12">
				
					<div class="form-group">
						<h2 class="" style="text-align:center">Sign Up.</h2>
					</div>
				
					<div class="form-group">
						<hr />
					</div>
					
					<?php
					if ( isset($errMSG) ) {
						
						?>
						<div class="form-group">
						<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
						<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
						</div>
						</div>
						<?php
					}
					?>
					
					<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
						</div>
						<span class="text-danger"><?php echo $nameError; ?></span>
					</div>
					
					
					<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
						<input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
						</div>
						<span class="text-danger"><?php echo $emailError; ?></span>
					</div>
					
					<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
						</div>
						<span class="text-danger"><?php echo $passError; ?></span>
					</div>
					<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" name="cpass" class="form-control" placeholder="Confirm Password" maxlength="15" />
						</div>
						<span class="text-danger"><?php echo $passError; ?></span>
					</div>
					
					<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
						<input type="text" name="tel" class="form-control" placeholder="Enter phone number" value="<?php echo $tel ?>" />
						</div>
						<span class="text-danger"><?php echo $phoneError; ?></span>
					</div>
					
					<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
						<input type="text" name="gst" class="form-control" placeholder="Enter Name gst number" maxlength="50" value="<?php echo $gst ?>" />
						</div>
						<span class="text-danger"><?php echo $gstError; ?></span>
					</div>
					
					<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
						<input type="text" name="pan" class="form-control" placeholder="Enter number pan number" maxlength="50" value="<?php echo $pan ?>" />
						</div>
						<span class="text-danger"><?php echo $panError; ?></span>
					</div>
					
					<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
						<textarea name="address" class="form-control" placeholder="Enter number  Address" maxlength="50"/></textarea>
						</div>
						<span class="text-danger"><?php echo $addressError; ?></span>
					</div>
					
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
							<select class="form-control" name="area" id="area" required>
								 <option value="">Select Area</option>
								<?php while($row = mysql_fetch_array($results)){
									?>
									<option value="<?php echo $row[area]?>"><?php echo $row[area]?></option>
									<?php
								} ?>
								
							</select>
						</div>
						<span class="text-danger"><?php echo $areaError; ?></span>
					</div>
					
					<div class="form-group">
						<hr />
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
					</div>
					
					<div class="form-group">
						<hr />
					</div>
					
					<div class="form-group">
						<a href="index.php">Sign in Here...</a>
					</div>
				
				</div>
		   
			</form>
			</div>	

		</div>

	<?php include("../footer.php");?>
<?php ob_end_flush(); ?>