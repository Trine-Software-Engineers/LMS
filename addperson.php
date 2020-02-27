<?php

$user = 'root';
$pass = '';
$db = 'lms';

$conn = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

if($conn->connect_error)
{
    die("Connection failed");
}

if(isset($_POST['submit']))
{
    $type = $_POST['type'];
    $name = $_POST['personName'];
    $Ucard = $_POST['personUcard'];
    $add = $_POST['personAddress'];
    $tele = $_POST['personTelephone'];

    $sql="INSERT INTO `user` (`position`, `name`, `Ucard`, `address`, `telephone`) VALUES ('$type', '$name', '$Ucard', '$add', '$tele')";

    if($conn->query($sql) == TRUE)
    {
        echo "Member has been successfully added";
    }
    else
    {
        echo "Ucard already in use";
    }
}

$conn->close();

?>




<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
  </head>

	
  <div class="navbar">

<div class="navbar-header">
        <a class="navbar-brand" href="home.php">Super Swag Software's Library Management System</a>
    </div>

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
				<a href="addbook.php">Add</a>
				<a href="editbook.php">Edit</a>
				<a href="removebook.php">Remove</a>
   			</div>
  	</div> 
	<div class="dropdown">
    	<button class="dropbtn">Person 
      		<i class="fa fa-caret-down"></i>
    	</button>
    		<div class="dropdown-content">
				<a href="addperson.php">Add</a>
				<a href="editperson.php">Edit</a>
				<a href="removeperson.php">Remove</a>
   			</div>
  	</div> 
</div>
	
<body>


<div class="login-box">
	  <h1>Add a person</h1>


			<form method="POST" action="#">
				<select id="type" name="type" class="form_input">
					<option value="Member">Member</option>
					<option value="Manager">Manager</option>
					<option value="Admin">Admin</option>

				</select>
			



          	<div class="textbox">
				<input type="text" name="personName" placeholder="Name">
			</div>

			<div class="textbox">
				<input type="text" name="personUcard" placeholder="Ucard">
			</div>

			<div class="textbox">
				<input type="text" name="personAddress" placeholder="Address">
			</div>

			<div class="textbox">
				<input type="text" name="personTelephone" placeholder="Telephone">
			</div>
			  

        
		
		  	<input type="submit" class="btn" name="submit" value="Add person">
			</form>
	</div>
	
</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>