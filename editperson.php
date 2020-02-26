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
	  <h1>Edit a Person</h1>
          	<div class="textbox">
				<input type="text" name="uCard" placeholder="Original U-Card">
	  		</div>




			<div class="textbox">
				<input type="text" name="newPersonUCard" placeholder="New U-Card">
	  		</div>
            
		  	<div class="textbox">
				<input type="text" name="newPersonName" placeholder="New Name">
	  		</div>

			<div class="textbox">
				<input type="text" name="newPersonAddress" placeholder="New Address">
	  		</div>

			<div class="textbox">
				<input type="text" name="newPersonTelephone" placeholder="New Telephone">
	  		</div>
		
			  <form action="/action_page.php">
				<select id="type" name="type">
					<option value="Member">Member</option>
					<option value="Manager">Manager</option>
					<option value="Admin">Admin</option>


				</select>
			</form>


		
		  	<input type="submit" class="btn" value="Edit Person">
	</div>

	





</body>
</html>
<script>
function goBack() {
  window.history.back();
}
</script>