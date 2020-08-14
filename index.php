<?php
	$username=$_POST['username'];
?>


<html lang="en">
<head>
	<script src="javascript.js"></script>
	</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Orbitron:wght@800&display=swap" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title>CSITstudentforum-Home page</title>
</head>
<body style="border-width: 2px;">
	<div class="container"><!-- for main dix-->
		<div class="row"><!-- row 1 open-->
			<div class="col-sm-2">
				<a href="index.html" style="color: black;">
				<i class="material-icons homeicon" style="font-size: 60px;">home</i>
				</a>
			</div>
			<div class="col-sm-7">
				<h1><span class="c">C</span>sit<span class="c">S</span>tudent<span class="c">F</span>orum.com</h1>
			</div>
			<div class="col-sm-3">
				<div class="row margin">
					<div class="col=sm-4 margin">
					<?php
						echo $username;
					?>
					</div>
					<div class="col=sm-4 margin">
					Something
					</div>
				</div>
				<div class="row">
					<div class="col=sm-4 margin">
						<i class="fa fa-bell" style="font-size:36px"></i>
					</div>
					<div class="col=sm-4 margin">
						<i class="fa fa-gear" style="font-size:36px;"></i>
					</div>
					<div class="col=sm-4 margin">
						<button type="button" class="btn btn-primary">Logout</button>
					</div>
				</div>
			</div>
		</div><!-- row 1 close-->
		<div class="row" style="border:black; border-width: 2px;"><!-- this is where menu starts-->
			<div class="col-sm-3">
			<ul style="font-size: 20px;">
				<li><a href="index.html">College lists</a></li>
				<li><a href="https://www.itcollegenepal.com/bachelors-of-science-in-computer-science-and-information-technology-bsc-csit-syllabus/">Syllabus</a></li>
				<li><a href="index.html">Course structure</a></li>
				<li><a href="index.html">Scanned notes</a></li>
				<li><a href="index.html">Powerpoint reference</a></li>
				<li><a href="index.html">Practical reference</a></li>
				<li><a href="index.html">Word notes</a></li>
				<li><a href="index.html">Sell old books</a></li>
				<li><a href="index.html">Upload contents</a></li>
			</ul>
			</div>
			<div class="col-sm-9"><!--main contents in this division-->
					main contents
			</div>
		</div>
	</div>

</body>
</html>