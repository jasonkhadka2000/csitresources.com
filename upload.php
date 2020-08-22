<?php
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

      $file=$_FILES['file'];
      $filename=$file['name'];
      $filetype=$file['type'];
      $filetempname=$file['tmp_name'];
      $fileerror=$file['error'];
      $filesize=$file['size'];
      
      $allowed=array('pdf','docx','ppt');

      $fileextension=explode('.', $filename);

      $fileextension= strtolower(end($fileextension));

      if(in_array($fileextension, $allowed))
      {
        if($fileerror==0)
        {
          if($filesize<5000000)
          {
            $filedestination='uploads/'.$filename;
            move_uploaded_file($filetempname, $filedestination);
            header("location: filedemo.php?upload success");
          }
          else
          {
            echo "file size too big";
          }
        }
      }
      else
      {
        echo "filetype is not supported";
      }



    }

?>