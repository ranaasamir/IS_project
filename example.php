<?php
// Inialize session
session_start();

if (isset($_POST['submit'])) {
// Include database connection settings
    include('Dbconfig/config.php');

// Retrieve username and password from database according to user's input
    $login = mysqli_query($con, "SELECT * FROM user WHERE (username = '" . mysqli_real_escape_string($con, $_POST['username']) . "') and (password = '" . mysqli_real_escape_string($con, md5($_POST['password'])) . "')");

    while ($row = mysqli_fetch_array($login)) {
        // Check username and password match
        if ($row['profession'] == 'admin') {
// Set username session variable
            $_SESSION['profession'] = $row['profession'];
            $_SESSION['username'] = $_POST['username'];
// Jump to secured page
            header('Location:newAdmin.php');
        } else
            if ($row['profession'] == 'user') {
// Set username session variable
                $_SESSION['profession'] = $row['profession'];
                $_SESSION['username'] = $_POST['username'];
// Jump to secured page
                header('Location:user.php');
            } else {
                $_SESSION['profession'] = $row['profession'];
                echo $row['profession'];
// Jump to login page
//header('Location: ind.php');
            }
    }

}

?>
<html>
<head>
    <title></title>
</head>
<body>
<h3>User Login</h3>
<table border="0">
    <form method="POST" action="example.php">
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" size="20"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" size="20"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Login"></td>
        </tr>
    </form>
</table>
</body>
</html>