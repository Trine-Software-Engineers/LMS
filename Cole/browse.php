
<div class="topbar">
	<div class="header">
		<h1>Super Swag Software's Library Management System</h1>
	</div>
	
	<ul>
		<li><a href="login.html">Login</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="browse.html">Browse</a></li>
		<li><a href="employee.html">Employee</a></li>
		<li><a href="admin.html">Admin</a></li>
		<li><a href="home.html">Home</a></li><br>
	</ul>
</div>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lms</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table, tr, td {
	        color: white;
            border: 1px solid white;
        }
    </style>
}
  </head>
	
<body>
	<h1>This is the browse screen.</h1>
    
    <br><br>
    <h1>Search the Library</h1>
    <br><br>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by title...">


	<table id="myTable" class="list">
    
    
	<?php
	$conn = mysqli_connect("localhost", "root", "", "lms");
	if ($conn-> connect_error) {
		die("Connection failed:". $connect_error);
	}

	$sql = "SELECT id,title,author from books";
	$result = $conn-> query($sql);
	if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["id"] ."</td><td>". $row["title"] ."</td><td>". $row["author"] ."</td></tr>";
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
            td = tr[i].getElementsByTagName("td")[1];
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