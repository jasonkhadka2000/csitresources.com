<?php
session_start();

echo $_SESSION['username'];

	if($_SERVER['REQUEST_METHOD']=="POST")
	{	
		$name=$_SESSION['username'];
		$collegename=$_GET['college'];
		$review=$_POST['review'];
		$rating=$_POST['rating'];
		echo $name,$collegename,$review,$rating;
		include 'partials/_dbconnectioncollegereviews.php';
		$sql="INSERT INTO `reviews` (`name`,`collegename`, `rating`, `review`) VALUES ('$name','$collegename', '$rating', '$review')";

		$result=mysqli_query($conn,$sql);
	
		header("location:reviews.php?college=".$collegename."");
	}
 ?>
