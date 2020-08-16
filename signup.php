<?php

$login=false;
$exist=false;

	
	
	if($_SERVER['REQUEST_METHOD'] == "POST")

	{	
	
		include 'partials/_dbconnectionlogin.php';

		$fullname=$_POST['fullname'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['password'];
		$college=$_POST['password'];
		$contact=$_POST['college'];
		$confirmpassword=$_POST['confirmpassword'];

		$sql="SELECT * from usersinfo where username='$username'";
		$result=mysqli_query($conn,$sql);
		$resultcount=mysqli_num_rows($result);

		if($resultcount==0)
		{	
		
			if($password==$confirmpassword && $password!=NULL && $exist==false)
			{
				$login=true;
				$sql="INSERT INTO `usersinfo` (fullname,username, password , email, college , contact) VALUES ('$fullname','$username', '$password','$email', '$college','$contact');";

				$result=mysqli_query($conn,$sql);

			}
			else
			{
				$login=false;
			}

		}
		else
		{
			$exist=true;
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
		if($exist)
		{
			echo "username already exists";
		}

	?>

<h1> sign up</h1>

<form action="signup.php" method="post">
	fullname:<input type="text" name="fullname"><br>
    username: <input type="text" name="username"><br>
    password: <input type="password" name="password"><br>
    confirm password: <input type="password" name="confirmpassword"><br>
    email: <input type="email" name="email"><br>
    contact: <input type="number" name="contact"><br>
    college: <input type="text" name="college"><br>

    <input type="submit" name="submit">
  </form>

</body>
</html>