<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lms</title>
    <link rel="stylesheet" href="style.css">
	<script src="javascript.js"></script>
  </head>

<div class="topbar">
	<div class="header">
		<h1>Super Swag Software's Library Management System</h1>
	</div>
	
	<ul>
		<li id="NavLogin"><a href="login.php">Login</a></li>
		<li id="NavAbout"><a href="about.php">About</a></li>
		<li id="NavBrowse"><a href="browse.php">Browse</a></li>
		<li id="NavEmployee"><a href="employee.php">Employee</a></li>
		<li id="NavAdmin"><a href="admin.php">Admin</a></li>
		<li id="NavHome"><a href="index.php">Home</a></li><br>
	</ul>
</div>
	
	
<body>
	<h1>This is the homescreen.</h1>
	<?php

    session_start();

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        header("Location: login.php");
    }
	echo "<h1>You logged in!</h1>";
	?>
	<button onclick="NavHide()">Hide Employee</button>
</body>
</html>