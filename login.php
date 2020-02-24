
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lms</title>
    <link rel="stylesheet" href="style.css">
  </head>

<?php
    session_start();

    $username = "user";
    $password = "password";

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        //header("Location: index.php");
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['loggedin'] = true;
            header("Location: index.php");
        } else {
			$_SESSION['loggedin'] = false;
		}
    }


?>

<body>
	<div class="login-box">
	  <h1>LMS Login</h1>
	  <form method="post" action="login.php">
          	<div class="textbox">
				<i class="fas fa-user"></i>
				<input type="text" name="username" placeholder="Username">
	  		</div>
            
		  	<div class="textbox">
				<i class="fas fa-lock"></i>
				<input type="password" name="password" placeholder="Password">
	  		</div>
		  
		  	<input type="submit" class="btn" value="Sign in" onclick="window.location.href = 'home.html';">
        </form>
	</div>
</body>



</html>