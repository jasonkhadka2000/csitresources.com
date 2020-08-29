<?php
 
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $semester=$_GET['semester'];
        $subject=$_GET['subject'];
        $folder=$_GET['folder'];
        $path=$folder.'/'.$semester.'/'.$subject;
        echo $path;
    
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
            $filedestination=$path.'/'.$filename;
            echo $filedestination;
            move_uploaded_file($filetempname, $filedestination);
            header("location: ../resources.php?semester=$semester&subject=$subject&upload=success");
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