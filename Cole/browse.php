
<div class="topbar">
	<div class="header">
		<h1>Super Swag Software's Library Management System</h1>
	</div>
	
	<ul>
        <li><a href="login.php">Logout</a></li>
		<li><a href="browse.php">Browse</a></li>
		<li><a href="employee.php">Employee</a></li>
		<li><a href="admin.php">Admin</a></li>
	</ul>
</div>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lms</title>
    <link rel="stylesheet" href="style.css">
}
  </head>
	
<body>

    <br><br>
	<h1>Search the Library</h1>
    <br><br>
    
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by title...">


	<table id="myTable" class="list">

    <tr class="header">
        <th style="width:30%;">Title</th>
        <th style="width:10%;">Author</th>
	    <th style="width:10%;">ISBN</th>
	    <th style="width:10%;">Quantity</th>
    </tr>
    
    
	<?php
	$conn = mysqli_connect("localhost", "root", "", "lms");
	if ($conn-> connect_error) {
		die("Connection failed:". $connect_error);
	}

	$sql = "SELECT title,author,isbn,copies from books";
	$result = $conn-> query($sql);
	if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["title"] ."</td><td>". $row["author"] ."</td><td>". $row["isbn"] ."</td><td>". $row["copies"] ."</td></tr>";
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