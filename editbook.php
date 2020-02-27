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
    $IS = $_POST['bookISBN'];
    $newIS = $_POST['newBookISBN'];
    $Title = $_POST['newBookTitle'];
    $Author = $_POST['newBookAuthor'];
	$numCopies = $_POST['newBookQuantity'];
	$memLoanTime = $_POST['newBookMember'];
	$adminLoanTime = $_POST['newBookAdmin'];


	$sql="DELETE FROM `book` WHERE `book`.`ISBN` = '$IS'";
	$conn->query($sql);

    $sql="INSERT INTO `book` (`Title`, `Author`, `ISBN`, `memLoanTime`, `adminLoanTime`, `numCopies`) VALUES ('$Title', '$Author', '$newIS', '$memLoanTime', '$adminLoanTime', '$numCopies')";

    if($conn->query($sql) == TRUE)
    {
        echo "book has been successfully added";
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
			<input type="text" name="newBookMember" placeholder="New Member loan time">
	  	</div>
		<div class="textbox">
			<input type="text" name="newBookAdmin" placeholder="New Admin loan time">
	  	</div>
		<input type="submit" class="btn" name= "submit" value="Edit book">
	   </form>
</div>

	
</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>