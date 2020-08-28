<?php

//$dir_path = "uploads/firstsemester/physics/";
$semester=$_GET['semester'];
$subject=$_GET['subject'];
$dir_path='uploads/'.$semester.'/'.$subject.'/';


?>


<!DOCTYPE html>
<html>
    <head>
    <?php

    	include 'includes/bootstrap.php'
    ?>
        
    <title>PHP GET List Of FILES NAMES FROM A Directory </title>
    </head>
    
    <body>

    <div class="container">
    	<h1>this is our available resources</h1>
        
        <?php
        if(is_dir($dir_path))
		{
    	$files = opendir($dir_path);
    		{	
       	 	if($files)
       		{
         		 while(($file_name = readdir($files)) !== FALSE)
         			{
         				
              			if($file_name != '.' && $file_name != '..')
              				{  
              				echo "<div class='group'>";	
              					$fileext=explode(".", $file_name);
              					$fileext=strtolower(end($fileext));
              					if($fileext=="docx")
              					{
              						$logotype="docx.png";
              					}
              					elseif ($fileext=="pptx")
              					 {
              						$logotype="ppt.png";
              					}
              					else
              					{
              						$logotype="pdf.png";
              					}
               					// display the file names
               					// echo $file_name."<br>";
               					$logo='filelogo/'.$logotype;
               					echo "<div class='row'>";
               						echo "<div class='col-sm-6'>";
               							echo "<img src='$logo' width='120' height='80'>";
               							echo "<br>";
               							echo $file_name;
               						echo "</div>";	
               						echo "<div class='col-sm-6'>";

               							$fileref=$dir_path.$file_name;
               							
               							echo "<a href='$fileref' target='_BLANK'>
               									<button type='button' class='btn btn-success'>Download</button></a>";

               							$viewref='viewfilecontents.php?file='.$fileref;
               							
               							echo "<a href='$viewref' target='_BLANK'><button class='btn btn-success'>View contentcs</button></a>";
               						
               						echo "</div>";
               					echo "</div>";
              				}
              			echo "</div>";	
          			}
        	}
		    }
		}



         ?>

    </div>
        
    </body>
</html>





