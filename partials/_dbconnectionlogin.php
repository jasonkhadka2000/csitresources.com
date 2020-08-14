<?php
	echo "connection page";

	$server="localhost";
	$username="root";
	$password="";
	$database="usersinfo";
	
	$conn=mysqli_connect($server,$username,$password,$database);

	if($conn)
	{
		echo "connection was succesful";
	}
	else
	{
		echo "datbase connection error". mysqli_connect_error();
	}

?>