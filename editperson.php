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
    $uCard = $_POST['uCard'];
    $card = $_POST['newPersonUCard'];
    $name = $_POST['newPersonName'];
    $add = $_POST['newPersonAddress'];
	$tele = $_POST['newPersonTelephone'];
	$type = $_POST['type'];


	$sql="DELETE FROM `user` WHERE `user`.`Ucard` = '$uCard'";
	$conn->query($sql);

    $sql="INSERT INTO `user` (`position`, `Ucard`, `name`, `address`, `telephone`) VALUES ('$type', '$card', '$name', '$add', '$tele')";

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
	  <h1>Edit a Person</h1>
	  <form method="POST" action="#">
          	<div class="textbox">
				<input type="text" name="uCard" placeholder="Original U-Card">
	  		</div>
			<div class="textbox">
				<input type="text" name="newPersonUCard" placeholder="New U-Card">
	  		</div>
            
		  	<div class="textbox">
				<input type="text" name="newPersonName" placeholder="New Name">
	  		</div>

			<div class="textbox">
				<input type="text" name="newPersonAddress" placeholder="New Address">
	  		</div>

			<div class="textbox">
				<input type="text" name="newPersonTelephone" placeholder="New Telephone">
	  		</div>
				<select id="type" name="type">
					<option value="Member">Member</option>
					<option value="Manager">Manager</option>
					<option value="Admin">Admin</option>
				</select>	
		  	<input type="submit" class="btn" name= "submit" value="Edit Person">
		</form>
	</div>

</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>