<?php

	include 'partials/_dbconnectioncollegenames.php';
	$sql="SELECT * from collegenames";
	$result1=mysqli_query($conn,$sql);

	$addcollege=false;
  	if($_SERVER['REQUEST_METHOD']=="POST")
  	{   
      $addcollege=true; 
      include 'partials/inserttocollegesuggestions.php';
	}
	
?>


<html lang="en">
<head>
	<?php 
		include 'includes/bootstrap.php';
	 ?>
	<title>CSITstudentforum-Home page</title>
</head>
<body style="border-width: 2px;">
	<div class="container">
		  <?php
    		if($addcollege)
    			{
      				echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
	            	<strong>Thank you!</strong> Your suggestion has been received.
	            	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	            	<span aria-hidden='true'>&times;</span>
	            	</button>
	            	</div>";
    			}
  			?>
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


				<strong style="font-size: 40px ;">
    				IT colleges in Nepal.
				</strong>
  

  				<!-- Button to Open the Modal -->
  					<button type="button" class="btn btn-success float-right" data-toggle="	modal" data-target="#myModal" style="align-content: right;">
    				+ Add college
  					</button>


  				<table class='collegenames'>
				<?php
					while($details=mysqli_fetch_assoc($result1))
					{
						echo "<tr><td>";
						echo "<h4 style='color: blue;font-size:30px'>".$details['name']."</h3></td></tr><br>";

						echo "<tr><td><h6>"."Address: ".$details['address']."</h6></td>";
						echo "<td><h6>"."Contact: ".$details['contact']."</h6></td>";
						echo "<td><h6>"."Email: ".$details['email']."</h6></td></tr>";
						echo "<tr><td><h6>"."fees: "."</h6></td>";
						echo "<h6><td>"."visit website"."</h6></td></tr>";
						echo "</div>";
					}
					echo "<br>";
					?>
				</table>



					
			
			</div>
		</div>
	</div>

	<!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add college</h4>
          <!-- <small>if you are not sure of any info leave it empty</small> -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="collegenames.php" method ="post">
            <div class="form-group">
                <label for="Name">College name:</label>
                <input type="text" class="form-control" placeholder="Enter name" name="collegename">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" placeholder="Enter address" name="address">
            </div>
            <div class="form-group">
                <label for="address">Contact:</label>
                <input type="number" class="form-control" placeholder="Enter contact" name="contact">
            </div>
            <div class="form-group">
                <label for="address">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>
           <button type="submit" class="btn btn-success float-right" align="center">Suggest</button>
          </form>
        </div>
        
        <!-- Modal footer  not necessary-->
        
      </div>
    </div>
  </div>

</body>
</html>