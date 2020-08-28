<?php 
	//echo "this the userssettings page";
	session_start();
	$ourusername=$_SESSION['username'];
	echo $ourusername;
	include 'partials/_dbconnectionlogin.php';
	$sql="SELECT * from usersinfo where username='$ourusername'"; //where username='$username'";
	$result=mysqli_query($conn,$sql);
	$resultcount=mysqli_num_rows($result);
	echo var_dump($resultcount);

 ?>

 <!DOCTYPE>
 <html>
 <head>
 	  <?php
      include 'includes/bootstrap.php';
    ?>
 	<title>user settings</title>
 </head>
 <body>

 <div class="container">
 	
  <!-- <table class='collegenames'> -->
		<?php
			$details=mysqli_fetch_assoc($result);
			//while($details=mysqli_fetch_assoc($result))
			// {
			// 	echo "<tr><td>";
			// 	echo "<h4 style='color: blue;font-size:30px'>".C."</h3></td></tr><br>";

			// 	echo "<tr><td><h6>"."Address: ".$details['password']."</h6></td>";
			// 	echo "<td><h6>"."Contact: ".$details['email']."</h6></td>";
			// 	echo "<td><h6>"."Email: ".$details['college']."</h6></td></tr>";
			// 	echo "<tr><td><h6>"."fees: "."</h6></td>";
			// 	echo "<h6><td>"."visit website"."</h6></td></tr>";
			// 	echo "</div>";
			// }
			// echo "<br>";
		?>

<table class="table table-borderless">
   	 <tbody>
    	<tr>
        	<td>Username</td>
        	<td><?php echo $details['username'];?></td>
        	<td>
        		<a>
              <button type="button" class="btn btn-primary">Edit</button>
            </a>
        	</td>
      	</tr>
      	<tr>
        	<td>Password</td>
        	<td><?php echo $details['password'];?></td>
        	<td>
        		<a>
              <button type="button" class="btn btn-primary">Edit</button>
            </a>
        	</td>
      	</tr>
      	<tr>
        	<td>Email</td>
        	<td><?php echo $details['email'];?></td>
        	<td>
        		<a>
              <button type="button" class="btn btn-primary">Edit</button>
            </a>
        	</td>
      	</tr>
      	<tr>
        	<td>College</td>
        	<td><?php echo $details['college'];?></td>
        	<td>
        		<a>
              <button type="button" class="btn btn-primary">Edit</button>
            </a>
        	</td>
      	</tr>
      	<tr>
        	<td>Contact</td>
        	<td><?php echo $details['contact'];?></td>
        	<td>
        		<a>
              <button type="button" class="btn btn-primary">Edit</button>
            </a>
        	</td>
      	</tr>
    </tbody>
  </table>





</div>
 </body>
 </html>