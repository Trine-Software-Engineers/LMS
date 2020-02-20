
<div class="topbar">
	<div class="header">
		<h1>Super Swag Software's Library Management System</h1>
	</div>
	
	<ul>
		<li><a href="login.html">Login</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="browse.html">Browse</a></li>
		<li><a href="employee.html">Employee</a></li>
		<li><a href="admin.html">Admin</a></li>
		<li><a href="home.html">Home</a></li><br>
	</ul>
</div>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lms</title>
    <link rel="stylesheet" href="style.css">
  </head>
	
<body>
	<h1>This is the browse screen.</h1>
	
	<ul class="list">
	
	<?php
	$conn = mysqli_connect("localhost", "root", "", "lms");
	if ($conn-> connect_error) {
		die("Connection failed:". $connect_error);
	}

	$sql = "SELECT id from books";
	$result = $conn-> query($sql);
	if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<li>". $row["id"] ."</li></br>";
		}
	}
	$conn-> close();

	?>

	</ul>
	
	
	<!--<ul class="list">
					<li class="scroll"><img class="pic" src="pic1.jpg"/>thing1</li>
					<li class="scroll"><img class="pic" src="pic2.jpg"/>thing2</li>
					<li class="scroll"><img class="pic" src="pic3.jpg"/>thing3</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					<li class="scroll">Link 4</li>
					
				</ul>-->
</body>
</html>