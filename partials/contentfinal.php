<?php
	$action=$_GET['action'];
	$path=$_GET['filepath'];
	echo $path;
	echo "1111111111111";
	$path1=$path;
	$file=$_GET['file'];
	echo $file;
	if($action=="verify")	
	{
		$finalpath=str_replace('uploadssuggest', 'uploads', $path1);
		echo $finalpath;
		move_uploaded_file($path,$finalpath);
		unlink($path);
		
	}
	else
	{
		unlink($path);


	}
 	header("location:../trial.php");
// ?>