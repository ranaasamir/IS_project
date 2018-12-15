<?php


require 'Dbconfig/config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registeration page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #2c3e50">
	<div id="main-wrapper">
		<center><h2>Register</h2>
		<img src="images/user.png" class="user">
		</center>

		<form class="myform" action="register.php" method="post">
		<label><b>Username</label>
		<input name="username" type="text" class="inputvalues" placeholder="Type your username"required/><br><br>
		<label><b>Password</label>
		<input name="password" type="password" class="inputvalues" placeholder="Type your password"required/><br><br>
		<label><b>Confirm password</label>
		<input name="cpassword" type="password" class="inputvalues" placeholder="confirm your password"required/><br><br>
		<label><b>Email</label><br>
		<input name="email" type="text" class="inputvalues" placeholder="Type your email"required/><br><br>
		<label><b>Profession</label><br>
		<input name="profession" type="radio" class="radiobtns" value="Doctor" checked required/>Doctor
		<input name="profession" type="radio" class="radiobtns" value="TA" checked required/>TA
		<input name="profession" type="radio" class="radiobtns" value="Student" checked required/>Student<br><br>
		<center><input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"><br>
		<input type="button" id="back_btn" value="Back to login page">
		</center>
	</form>
	
<?php

if(isset($_POST['submit_btn']))
{
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	$cpassword = $_POST ['cpassword'];
	$email = $_POST ['email'];
	$profession = $_POST ['profession'];


	if($password==$cpassword)
	{
		$encrypted_password= md5 ($password);
		$query= "select * from user WHERE username='$username'";
		$query_run= mysqli_query($con,$query);

		if(mysqli_num_rows($query_run)>0)
		{
			echo '<script type="text/javascript"> alert("user already exists") </script>';
		}
		else
		{
			$query= "insert into user values ('$username', '$encrypted_password','$email','$profession')";
			$query_run= mysqli_query($con,$query);

			if($query_run)
			{
				echo '<script type="text/javascript"> alert("User is now registered") </script>';
				header('location:text.php');	
			}
			else
			{
				echo '<script type="text/javascript"> alert("Error") </script>';
			}
		}
	}
	else
	{
		echo '<script type="text/javascript"> alert("Passwords do not match") </script>';
	}
	

}

?>
	
	</div>