<!--
<div class="topbar">
	<div class="header">
		<h1>Super Swag Software's Library Management System</h1>
	</div>
	
	<ul>
		<li><a href="home.html">Logout</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="browse.html">Browse</a></li>
		<li><a href="employee.html">Employee</a></li>
		<li><a href="admin.html">Admin</a></li>
	</ul>
</div>
-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lms</title>
    <link rel="stylesheet" href="style.css">
  </head>
	
<!--<body>
	<div class="login-box">
	  <h1>Login</h1>
	  <div class="textbox">
		<i class="fas fa-user"></i>
		<input type="text" placeholder="Username">
	  </div>

	  <div class="textbox">
		<i class="fas fa-lock"></i>
		<input type="password" placeholder="Password">
	  </div>

	  <input type="button" class="btn" value="Sign in" onclick="window.location.href = 'home.html';">
	</div>
</body>-->

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
	  <h1>Login</h1>
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
</body>



</html>