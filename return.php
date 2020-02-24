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
	  <h1>Return a book</h1>
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
				<input type="text" name="personFirstName" placeholder="First Name">
			</div>
			  
			<div class="textbox">
				<input type="text" name="personLastName" placeholder="Last Name">
	  		</div>
		
		  	<input type="submit" class="btn" value="Return Book">
	</div>
	
</body>
</html>