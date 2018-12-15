<?php 
   require 'Dbconfig/config.php';
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>

	<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #2c3e50"> 
	<div id="main-wrapper">
		<center><h2>Home</h2>
			<h3>Welcome
			  <?php echo $_SESSION['username']; ?>
			</h3>
            <h3>Profession:
			  <?php echo $_SESSION['profession']; ?>
			</h3><br>
			<img src="images/user2.png" class="user"><br><br>
			
            <?php if ($_SESSION['profession'] == "Doctor") { ?>
			
                <form class="gradesform" action="home.php" method="post"><br>
		<label><b>Student name</label>
		<input name="student_name" type="text" class="inputvalues" placeholder="Type the student name"required/><br><br>
		<label><b>Course</label>
		<input name="course" type="text" class="inputvalues" placeholder="Type the course name"required/><br><br>
		<label><b>Grade</label><br>
		<input name="grade" type="text" class="inputvalues" placeholder="Type the grade"required/><br><br>
        
		<input name="submit_btn" type="submit" id="signup_btn" value="Enter Grade"><br>
                <?php
            }  ?>
        <input name="view_btn" type="submit" id="signup_btn" value="View Grades"><br>
		</form>
         
		<form class="myform" action="home.php" method="post"><br>
		
		<input name="logout" type="submit" id="logout_btn" value="Log Out"/>
		</center>
	</form>

	<?php

if(isset($_POST['submit_btn']))
{
	$student_name = $_POST['student_name'];
	$course = $_POST['course'];
	$grade = $_POST['grade'];
	$sql = "INSERT INTO `grades` (`student_name`, `course`, `grade`) VALUES ('$student_name', '$course','$grade')";
	$conn = mysqli_connect("localhost","root", "", "samplelogindb"); 

    if (mysqli_query($conn, $sql)) {
    echo "New record entered successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

	if(isset($_POST['logout']))
    {
	    session_destroy();
	    header('location:text.php');
	}
	
	?>
	
	</div>