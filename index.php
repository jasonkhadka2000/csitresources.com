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
	<script src='style/javascript.js'></script>
	</script>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='stylesheet' type='text/css' href='styles/stylesheet.css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'>
	<link href='https://fonts.googleapis.com/css2?family=Dancing+Script&family=Orbitron:wght@800&display=swap' rel='stylesheet'>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>
	<?php 
		//include 'includes/bootstrap.php';
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