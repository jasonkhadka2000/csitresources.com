<?php
	session_start();
	$username=$_SESSION['username'];
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
	{
		echo "please login to continue my dear friend";
		header("location: login.php");
	}
?>


<html lang="en">
<head>
	<<?php 
		include 'includes/bootstrap.php';
	 ?>
	<title>CSITstudentforum-Home page</title>
</head>
<body style="border-width: 2px;">
	<div class="container">
		<!-- header-->
		<?php

			include 'includes/header.php';

		?>


		<!-- row 1 close-->
		<div class="row" style="border:black; border-width: 2px;"><!-- this is where menu starts-->
			
			<?php
					include 'includes/menu.php'
			?>

			<div class="col-sm-9"><!--main contents in this division-->
					main contents
			
			</div>
		</div>
	</div>

</body>
</html>