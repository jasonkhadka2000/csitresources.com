<<?php 

  	if($_SERVER['REQUEST_METHOD']=="POST")
  	{   
  		include 'partials/_dbconnectioncollegesuggestions.php';
     	$addcollege=true;
      	$collegename=$_POST['collegename'];
      	$address=$_POST['address'];
      	$contact=$_POST['contact'];
      	$email=$_POST['email'];
		
		$sql="INSERT INTO `collegesuggestions` (`name`, `address`, `contact`, `email`) VALUES ('$collegename', '$address', '$contact', '$email')";

		$result=mysqli_query($conn,$sql);
	
	}
		
	
 ?>