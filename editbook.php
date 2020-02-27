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
    $isbn = $_POST['bookISBN'];
    $newISBN = $_POST['newBookISBN'];
    $title = $_POST['newBookTitle'];
    $auth = $_POST['newBookAuthor'];
	$q = $_POST['newBookQuantity'];
	$mem = $_POST['newBookMemberLoanTime'];
	$add = $_POST['newBookAdminLoanTime'];


	$sql="DELETE FROM `book` WHERE `book`.`ISBN` = '$isbn'";
	$conn->query($sql);
/*
    $sql="INSERT INTO `book` (`Title`, `Author`, `ISBN`, `memLoanTime`, `adminLoanTime`, `numCopies`) VALUES ('$title', '$auth', '$newISBN', '$mem', '$add', '$q')";

    if($conn->query($sql) == TRUE)
    {
        echo "book has been successfully added";
    }
    else
    {
        echo "Ucard already in use";
	}
	*/
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
	  <h1>Edit a Book</h1>
	  <form method="POST" action="#">
          	<div class="textbox">
				<input type="text" name="bookISBN" placeholder="Original ISBN">
	  		</div>
            
		  	<div class="textbox">
				<input type="text" name="newBookISBN" placeholder="New ISBN">
	  		</div>
		
			<div class="textbox">
				<input type="text" name="newBookTitle" placeholder="New Title">
	  		</div>

			<div class="textbox">
				<input type="text" name="newBookAuthor" placeholder="New Author">
	  		</div>

			<div class="textbox">
				<input type="text" name="newBookQuantity" placeholder="New Quantity">
	  		</div>

			<div class="textbox">
				<input type="text" name="newBookMemberLoanTime" placeholder="New Member loan time">
	  		</div>

			<div class="textbox">
				<input type="text" name="newBookAdminLoanTime" placeholder="New Admin loan time">
	  		</div>
		  	<input type="submit" class="btn" type= "submit" value="Edit Book">
		</form>
	</div>

	
</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>