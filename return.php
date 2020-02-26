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
	$ISBN = $_POST['ISBN'];
	$Date = $_POST['date'];

    $sql="DELETE FROM `borrow` WHERE `borrow`.`Ucard` = '$Ucard' AND `borrow`.`ISBN` = '$ISBN'";

    if($conn->query($sql) == TRUE)
    {
        echo "Book has been successfully checked in";
    }
    else
    {
        echo "error";
	}
	
	$sql="UPDATE book SET numCopies= numCopies + 1 WHERE ISBN = '$ISBN'";
	$conn->query($sql);
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
	  <h1>Return a book</h1>
	  <form method="POST" action="#">
          	<div class="textbox">
				<input type="text" name="Ucard" placeholder="Ucard">
	  		</div>
            
		  	<div class="textbox">
				<input type="text" name="ISBN" placeholder="ISBN">
	  		</div>

			<div class="textbox">
				<input type="text" name="Date" placeholder="Date (YYYY-MM-DD)">
	  		</div>

		
		  	<input type="submit" name="submit" class="btn" value="Return Book">
	  </form>
</div>
	
</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>