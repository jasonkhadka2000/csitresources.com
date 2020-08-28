<?php 

  	if($_SERVER['REQUEST_METHOD']=="GET")
  	{   
  		include '_dbconnectioncollegenames.php';
     	//$addcollege=true;
      	$collegename=$_GET['name'];
      	$address=$_GET['address'];
      	$contact=$_GET['contact'];
      	$email=$_GET['email'];

      	//echo $collegename, $address,$contact,$email;
		
		$sql="INSERT INTO `collegenames` (`name`, `address`, `contact`, `email`) VALUES ('$collegename', '$address', '$contact', '$email')";

		$result=mysqli_query($conn,$sql);

		header("location: deletecollege.php?name=".$collegename."&address=".$address."&contact=".$contact."&email=".$email."");
	
	}
		


 ?>