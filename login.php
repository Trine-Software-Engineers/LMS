
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lms</title>
    <link rel="stylesheet" href="style.css">
  </head>


<?php

    $connect= new mysqli('localhost', 'root','' ,'lms');

    if($connect->connect_error)
    {
        die('Connection failed :(');
    }
    else
    {
        echo 'Connection worked :)';
    }

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql= "Select name FROM user WHERE name='$username' AND Ucard='$password'";

    $result= $connect->query($sql);

    if ($result-> num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            header("Location: http://localhost/LMS/home.php");
	    die();
        }
    }

    else
    {
    }

?>

<body>
	<div class="login-box">
	  <h1>LMS Login</h1>
	  <form method="post" action="login.php">
        <div class="textbox">
				<i class="fas fa-user"></i>
				<input type="text" name="username" placeholder="Name">
	  		</div>
            
		  	<div class="textbox">
				<i class="fas fa-lock"></i>
				<input id="password" type="password" name="password" placeholder="U-Card">
	  		</div>
		  
		  	<input type="submit" class="btn" value="Sign in" onclick="window.location.href = 'home.html';">
        </form>
	</div>
</body>





</html>