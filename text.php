<?php
session_start(); // Inialize session

if (isset($_POST['login'])) {
// Include database connection settings
    include('Dbconfig/config.php');
    $username=mysqli_real_escape_string($con, $_POST['username']);
    $password=$_POST['password'];
    $encrypted_password= mysqli_real_escape_string($con, md5($password));
// Retrieve username and password from database according to user's input
    $login = mysqli_query($con, "SELECT * FROM user WHERE username = '". $username ."' and password = '". $encrypted_password. "';");

    $rowsCount = mysqli_num_rows($login);
    if ($rowsCount > 0 ) {
        //valid
        while ($row = mysqli_fetch_array($login)) {
            $_SESSION['profession'] = $row['profession'];
            $_SESSION['username'] = $row['username'];
            header('location:home.php');
        }
    } else {
        //invalid
        echo '<script type="text/javascript"> alert("Invalid") </script>';
        //header('location:home.php');
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #2c3e50">
	<div id="main-wrapper">
		<center><h2>Login</h2>
		<img src="images/user.png" class="user">



		</center>
	<form class="myform" action="text.php" method="post">
		<label><b>Username</label>
		<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br><br>
		<label><b>Password</label>
		<input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br><br>
		<center><input name="login" type="submit" id="login_btn" value="Login"><br>
		<a href= "register.php"><input type="button" id="register_btn" value="Register"/></a>

		</center>
	</form>

	
	</div>



</body>
</html>