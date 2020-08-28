<?php

	include 'partials/_dbconnectioncollegesuggestions.php';
	$sql="SELECT * from collegesuggestions";
	$result1=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php 

         include 'includes/bootstrap.php';
     
  ?>
</head>
<body>
  

<div class="container">
  <h2>Suggestions for colleges</h2>

 <table width="600" border='1' class="table">
      <thead>
      <tr class="info">

        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Accept</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
      <?php
        while($faq=mysqli_fetch_assoc($result1)){


          echo "<tr class='info'>";
          echo "<td>".$faq['name']."</td>";
          echo "<td>".$faq['address']."</td>";
          echo "<td>".$faq['contact']."</td>";
          echo "<td>".$faq['email']."</td>";

          echo "<td><a href='partials/verifycollege.php?name=".$faq['name']."&address=".$faq['address']."&contact=".$faq['contact']."&email=".$faq['email']."'>
          <button type='button' class='btn btn-success'>
              Verify
          </button></a></td>";
         

          echo "<td><a href='partials/deletecollege.php?name=".$faq['name']."&address=".$faq['address']."&contact=".$faq['contact']."&email=".$faq['email']."'>
          <button type='button' class='btn btn-danger'>
              Delete
          </button></a></td>";

          echo "</tr>";
        }//end while
      ?>
      <tbody>
    </table>

  

  
</div>

</body>
</html>