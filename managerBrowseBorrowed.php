<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
  </head>

	
  <div class="navbar">
	<div class="navbar-header">
        <a class="navbar-brand" href="managerHome.php">Super Swag Software's Library Management System</a>
    </div>

  	<a href="login.php">Login Page</a>
	<a href="managerBrowse.php">Browse</a>
  	<div class="dropdown">
    	<button class="dropbtn">Book 
      		<i class="fa fa-caret-down"></i>
    	</button>
    		<div class="dropdown-content">
				<a href="managerBrowseBorrowed.php">Borrowed Books</a>
				<a href="managerBorrow.php">Borrow</a>
				<a href="managerReturn.php">Return</a>
   			</div>
  	</div> 
</div>
	
<body>

    <br><br>
	<h1>Search the Borrowed Books</h1>
    <br><br>
    
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Ucard...">


	<table id="myTable" class="list">

    <tr class="header">
        <th style="width:30%;">Ucard</th>
        <th style="width:10%;">ISBN</th>
	    <th style="width:10%;">Date</th>
    </tr>
    
    
	<?php
	$conn = mysqli_connect("localhost", "root", "", "lms");
	if ($conn-> connect_error) {
		die("Connection failed:". $connect_error);
	}

	$sql = "SELECT `Ucard`, `ISBN`, `date` from borrow";
	$result = $conn-> query($sql);
	if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["Ucard"] ."</td><td>". $row["ISBN"] ."</td><td>". $row["date"];
		}
	}
	$conn-> close();
    
	?>

    </table>

    <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i=0; i<tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
	
</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>