<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>

	<form method="post" action="delete.php" id="delete">
		
		Delete<input type="number" name="delete_data" placeholder="ID"><br>
		<input type="submit" name="delete" value="Delete">
	</form>

	<?php 

	include("db.php");
	if (!empty($_POST['delete_data'])) {
  	 	$delete_data = mysqli_real_escape_string($con,$_POST['delete_data']);
	


  	 //deleting data comnnection

	  	if (isset($_POST['delete'])) {

  	 	$query = "delete from student where id='$delete_data'";

				if (!mysqli_query($con,$query)) {
  				die('Error: ' . mysqli_error($con));
				}
  	
  		echo "Your data has been deleted";




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