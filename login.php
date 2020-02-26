
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

    $sql= "SELECT position,Ucard,name,address,telephone from user WHERE name='$username' AND Ucard='$password'";
    $creds= $connect->query($sql);
    $value = $creds-> fetch_assoc();

    $admin = "Admin";
    $manager = "Manager";

    if ($result-> num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
          if (strcmp($value["position"], $admin) == 0)
          {
            header("Location: http://localhost/LMS/LMS/home.php");
          }
          elseif (strcmp($value["position"], $manager) == 0)
          {
            header("Location: http://localhost/LMS/LMS/managerHome.php");
          }
          else
          {
            header("Location: http://localhost/LMS/LMS/memberHome.php");
          }
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