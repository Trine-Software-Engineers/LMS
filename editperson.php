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
		<button onclick="goBack()">Go Back</button>
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