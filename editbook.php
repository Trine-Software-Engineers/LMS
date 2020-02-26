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


		
		  	<input type="submit" class="btn" value="Edit Book">
	</div>

	
</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>