<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
  </head>

	
<div class="navbar">
  	<a href="login.php">Login Page</a>
	<a href="browse.php">Browse</a>
  	<div class="dropdown">
    	<button class="dropbtn">Book 
      		<i class="fa fa-caret-down"></i>
    	</button>
    		<div class="dropdown-content">
				<a href="browseBorrowed.php">Borrowed Books</a>
				<a href="borrow.php">Borrow</a>
				<a href="return.php">Return</a>
   			</div>
  	</div> 
</div>
	
<body>
	<header>
		<h1>Manager Home Page</h1>
	</header>
	<br><br>
	<div class="paragraph">
		<p>
			This Library Management System, or LMS, was developed by Andrew, Cole, Clayton and Justin. We created this LMS for a school project, instructed by Dr. Khadka.
		</p>
	</div>

 
	
</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>