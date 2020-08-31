<?php
$college=$_GET['college'];
include 'partials/_dbconnectioncollegereviews.php';
$sql="SELECT * from reviews";
$result=mysqli_query($conn,$sql);
session_start();
echo $_SESSION['username'];


?>

<!DOCTYPE html>
<html>
<head>
	<?php  

			include 'includes/bootstrap.php';

	?>
	<title></title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<h1>Reviews for <?php echo $college; ?></h1>
			</div>
			<div class="col-sm-2">
				<!-- button -->
			</div>
		</div>
		<div>

 <table width="600" border='1' class="table">
      <thead>
      <tr class="info">

        <th>Name</th>
        <th>collegename</th>
        <th>Rating</th>
        <th>Review</th>
      </tr>
      </thead>
      <tbody>
      <?php
        while($faq=mysqli_fetch_assoc($result)){
        	if($faq['collegename']==$college)
        	{


          		echo "<tr class='info'>";
          		echo "<td>".$faq['name']."</td>";
          		echo "<td>".$faq['collegename']."</td>";
         		echo "<td>".$faq['rating']."</td>";
          		echo "<td>".$faq['review']."</td>";

          		echo "</tr>";
      		}
        }//end while
      ?>
      <tbody>
    </table>
			<!-- table for reviews-->

		</div>
		<?php
			echo "<form action='addreview.php?college=".$college."' method='POST'>";
		?>	
		<div class=row>
			<div class="col-sm-10">
				<textarea name="review" type="text" placeholder="write reviews"> </textarea>
				<input type="number" name="rating" placeholder="Rate out of 10"></input>
			</div>
			<div class="col-sm-2">
				<input type="submit" name="submit"></input>
			</div>
			
		</div>
		</form>	
	</div>


</body>
</html>