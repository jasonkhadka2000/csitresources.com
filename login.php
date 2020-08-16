<?php

$login=false;

	echo "this is th login page";

	if($_SERVER['REQUEST_METHOD']=="POST")
	{

		include "partials/_dbconnectionlogin.php";

		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql="SELECT * from usersinfo where username='$username' and password='$password'";

		$result=mysqli_query($conn,$sql);

		$resultcount=mysqli_num_rows($result);


		if($resultcount==1)
		{
			session_start();
			$login=true;
			$_SESSION['loggedin']=true;
			$_SESSION['username']=$username;
			header("location: index.php");
		}
		else
		{
			echo "bad credentials";
		}
		
		

	}

	

?>

<!DOCTYPE html>
<html>
<head>
  <title>this is the login page</title>
</head>
<body>
  <h1>  csitresource.com </h1>
  <?php
  	if($login)
  	{
  		echo "login was not succesful";

  	}

  ?>
<div class="container">

  <form action="login.php" method="post">
    username: <input type="text" name="username">
    password: <input type="text" name="password">
    <input type="submit" name="submit">
  </form>


</div>


</body>
</html>