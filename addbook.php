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
      <a class="navbar-brand" href="home.php">Super Swag Software's Library Management System</a>
    </div>
  	<a href="login.php">Login Page</a>
	<a href="browse.php">Browse</a>
  	<div class="dropdown">
    	<button class="dropbtn">Book 
      		<i class="fa fa-caret-down"></i>
    	</button>
    		<div class="dropdown-content">
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