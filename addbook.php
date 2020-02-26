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
    $ISBN = $_POST['bookTitle'];
    $memLoan = $_POST['bookAuthor'];
    $adminLoan = $_POST['bookISBN'];
    $title = $_POST['bookMemberLoanTime'];
    $auth = $_POST['bookAdminLoanTime'];
    $copies = $_POST['bookQuantity'];

    $sql="INSERT INTO `book` (`Title`, `Author`, `ISBN`, `memLoanTime`, `adminLoanTime`,`numCopies`) VALUES ('$ISBN', '$memLoan', '$adminLoan', '$title', '$auth', '$copies')";

    if($conn->query($sql) == TRUE)
    {
        echo "Book has been successfully added";
    }
    else
    {
        echo "ISBN already in use";
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

	
<body>

	<div class="login-box">
	  <h1>Add a Book</h1>
	  <form method="POST" action="#">
          	<div class="textbox">
				<input type="text" name="bookTitle" placeholder="Title">
	  		</div>
            
		  	<div class="textbox">
				<input type="text" name="bookAuthor" placeholder="Author">
	  		</div>
		
			<div class="textbox">
				<input type="text" name="bookISBN" placeholder="ISBN">
	  		</div>

			<div class="textbox">
				<input type="text" name="bookMemberLoanTime" placeholder="Member loan time">
	  		</div>

			<div class="textbox">
				<input type="text" name="bookAdminLoanTime" placeholder="Admin loan time">
	  		</div>

			<div class="textbox">
				<input type="text" name="bookQuantity" placeholder="Quantity">
	  		</div>
		
		  	<input type="submit" class="btn" name="submit" value="Add Book">
		</form>
	</div>

</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>