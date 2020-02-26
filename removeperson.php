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
    $Ucard = $_POST['Ucard'];

    $sql="DELETE FROM `user` WHERE `user`.`Ucard` = '$Ucard'";

    if($conn->query($sql) == TRUE)
    {
        echo "Member has been successfully deleted";
    }
    else
    {
        echo "Member could not be deleted";
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
	  <h1>Remove a person</h1>
	  <form method="POST" action="#">
          	<div class="textbox">
				<input type="text" name="Ucard" placeholder="Ucard">
			</div>

		
		  	<input type="submit" class="btn" name="submit" value="Remove person">
		</form>
	</div>
	
</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>