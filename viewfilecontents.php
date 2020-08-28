<?php
 	

	$file=$_GET['file'];

	$filename=$file;

	$extension=explode('.', $filename);
	$extension=strtolower(end($extension));

	if ($extension=="pdf") 
	{
		header('Content-type: application/pdf');
	}
	elseif ($extension="docx") 
	{
		echo "hello world";
		header('Content-type: application/msword');
	}
	elseif($extension="pptx")
	{
		header('Content-type: application/msword');

	}
	else
	{
		die( "unsupported format ");
	}

	header('Content-dispostion: inline; filename="' .$filename.'"');
	header('Content-Transfer-Encoding: binary');
	header('Accept-Ranges:bytes');
	@readfile($file);

	

 ?>