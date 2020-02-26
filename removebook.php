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
    $ISBN = $_POST['ISBN'];

    $sql="DELETE FROM `book` WHERE `book`.`ISBN` = '$ISBN'";

    if($conn->query($sql) == TRUE)
    {
        echo "Book has been successfully deleted";
    }
    else
    {
        echo "Book could not be deleted";
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
	  <h1>Remove a book</h1>
	  <form method="POST" action="#">

          	<div class="textbox">
				<input type="text" name="ISBN" placeholder="ISBN">
			</div>
	
		
		  	<input type="submit" class="btn" name="submit" value="Remove book">
		</form>
	</div>
	
</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>