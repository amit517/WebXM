<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>

	<form method="post" action="search.php" id="delete">
		
		Search<input type="number" name="search" placeholder="ID"><br>
		<input type="submit" name="delete" value="Delete">
	</form>

	<?php 

	include("db.php");
	if (!empty($_POST['search'])) {
  	 	$search = mysqli_real_escape_string($con,$_POST['search']);
	

	  	if (isset($_POST['delete'])) {

  	 	$query = "SELECT name,id
		from student
		where id = $search";

  	 	$result = mysqli_query($con,$query);

		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        echo "<br> ID: ". $row["id"]. " - Name: ". $row["name"]."<br>";
		    }
		} else {
		    echo "0 results";
		}

	}
  
	}
	$con->close();

	 ?>
	 <br>

	 <a href="delete.php">Delete</a>
	 <a href="home.php">home</a>
	 <a href="update.php">update</a>
	 <a href="search.php">search</a>

</body>
</html>