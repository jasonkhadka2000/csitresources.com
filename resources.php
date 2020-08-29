<?php

//$dir_path = "uploads/firstsemester/physics/";
$semester=$_GET['semester'];
$subject=$_GET['subject'];
$dir_path='uploads/'.$semester.'/'.$subject.'/';
$upload=$_GET['upload'];


?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>PHP GET List Of FILES NAMES FROM A Directory </title>
    </head>
    
    <body>

    <?php
      if($upload=="success")
      {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Thank you!</strong> Your suggestion has been received.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
      }
    ?>

    <div class="container">
    	     <div class="row">
                <div class="col-sm-10">

                  <h1>These are our resources<h1>
        
                </div>
                <div class="col-sm-2">

                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                      Suggest content
                    </button>  
                </div>

      
          </div>
        
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
              				echo "<div class='container group'>";	
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



<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Please select the file</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?php 

          echo "<form action='partials/upload.php?folder=uploadssuggest&subject=".$subject."
          &semester=".$semester."' method='post' enctype='multipart/form-data' name='form1'>";

        ?>

          <div class="form-group">
              <label for="email">Content for <?php echo $subject;  ?> </label><br>
              <input type="file" name="file">
          </div>
          
          <button type="submit" class="btn btn-success float-right">Suggest</button> 
        </form>
      </div>

    </div>
  </div>
</div>

  </div>
        
    </body>
</html>





