<?php

$dir_path = "uploads/firstsemester/physics/";


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
               					echo "<img src='$logo' width='120' height='80'>";
               					echo "<br>";
               					echo $file_name;
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





