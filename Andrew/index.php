<!DOCTYPE html>

<?php

    session_start();

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        header("Location: login.php");
    }
?>


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
		<li id="NavAbout"><a href="about.html">About</a></li>
		<li id="NavBrowse"><a href="browse.html">Browse</a></li>
		<li id="NavEmployee"><a href="employee.html">Employee</a></li>
		<li id="NavAdmin"><a href="admin.html">Admin</a></li>
		<li id="NavHome"><a href="home.html">Home</a></li><br>
	</ul>
</div>
	
	
<body>
	<h1>This is the homescreen.</h1>
	
	<button onclick="NavHide()">Hide Employee</button>
</body>
</html>