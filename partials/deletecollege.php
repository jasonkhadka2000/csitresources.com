<?php 

  	if($_SERVER['REQUEST_METHOD']=="GET")
  	{   
  		include '_dbconnectioncollegesuggestions.php';
      	$collegename=$_GET['name'];
      	$address=$_GET['address'];
      	$contact=$_GET['contact'];
      	$email=$_GET['email'];

      	echo $collegename, $address,$contact,$email;
		
		$sql1="DELETE FROM collegesuggestions WHERE name='$collegename' and address='$address' and email='$email'";

		$result1=mysqli_query($conn,$sql1);
		echo var_dump($result1);

		header("location: ../admin.php");
	
	}
		


 ?>