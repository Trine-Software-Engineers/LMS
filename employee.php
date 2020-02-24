
<div class="topbar">
	<div class="header">
		<h1>Super Swag Software's LMS</h1>
	</div>
	
	<ul>
		<li><a href="login.php">Logout</a></li>
		<li><a href="admin.php">Home</a></li>
		<li><a href="admin.php">Return Book</a></li>
		<li><a href="browse.php">Browse</a></li>
		
		<li><a href="borrowbook.php">Borrow Book</a></li>
		<li><a href="returnbook.php">Return Book</a></li>

		
		
		
		<li><a href="addbook.php">Add Book</a></li>
		<li><a href="deletebook.php">Delete Book</a></li>
		<li><a href="editbook.php">Edit Book</a></li>
		<li><a href="addperson.php">Add Person</a></li>
		<li><a href="deleteperson.php">Delete Person</a></li>
		<li><a href="editperson.php">
			
			
			</a></li>

	</ul>
			<div class="dropdown">
			  <button class="dropbtn">Book</button>
				  <div class="dropdown-content">
					<a href="#">Borrow Book</a>
					<a href="#">Return Book</a>
					<a href="#">Add Book</a>
					<a href="#">Delete Book</a>
					<a href="#">Edit Book</a>
				  </div>
		</div>
</div>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lms</title>
    <link rel="stylesheet" href="style.css">
  </head>
	
<body>
	<div class="login-box">
	  <h1>Add a Book</h1>
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
				<input type="text" name="bookQuantity" placeholder="Quantity">
	  		</div>
		
		  	<input type="submit" class="btn" value="Add Book">
	</div>

	
	
	
</body>
</html>