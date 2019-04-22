<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<form action="home.php" method="post">
		
		Name : <input type="text" name="name" ><br>
		ID : <input type="number" name="id"> <br>
		GO : <input type="submit" name="submit"> <bt>

	</form>

	<?php 
			include("db.php");
	  		if (!empty($_POST['name']) && !empty($_POST['id']))  {
					
			$name =mysqli_real_escape_string($con,$_POST['name']);
			$id = mysqli_real_escape_string($con,$_POST['id']);

	


  	 if (isset($_POST['submit'])) {

  	 	  	$query = "INSERT INTO student (name,id)
				VALUES('$name',$id)";

				if (!mysqli_query($con,$query)) {
  				die('Error: ' . mysqli_error($con). "<br>");
				}

  	
  		echo "<br>Your data has been stored";

	}
  	$con->close();
	}
	 ?>

	 <br>

	 <a href="delete.php">Delete</a>
	 <a href="home.php">home</a>
	 <a href="update.php">update</a>
	 <a href="search.php">search</a>


</body>
</html>