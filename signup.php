<?php

$login=false;

	
	
	if($_SERVER['REQUEST_METHOD'] == "POST")

	{	
	
		include 'partials/_dbconnectionlogin.php';

		$username=$_POST['username'];
		$password=$_POST['password'];
		$college=$_POST['college'];
		$confirmpassword=$_POST['confirmpassword'];

		
		if($password==$confirmpassword)
		{
			$login=true;
			$sql="INSERT INTO `usersinfo` ( `username`, `password`, `college`) VALUES ('$username', '$password', '$college');";

			$result=mysqli_query($conn,$sql);

		}
		else
		{
			$login=false;
		}	

	}





?>
<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
</head>
<body>
	<?php
		if ($login)
		{
			echo "<h3> signup was successful</h3>";
		}

	?>

<h1> sign up</h1>

<form action="signup.php" method="post">
    username: <input type="text" name="username">
    password: <input type="password" name="password">
    college: <input type="text" name="college">
    confirm password: <input type="password" name="confirmpassword">

    <input type="submit" name="submit">
  </form>

</body>
</html>