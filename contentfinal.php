<?php
	$action=$_GET['action'];
	$path=$_GET['filepath'];
	echo $path;

	$path1=$path;
	$file=$_GET['file'];
	echo $file;
	if($action=="verify")	
	{
		$finalpath=str_replace('uploadssuggest', 'uploads', $path1);
		echo $finalpath;
		var_dump(rename($path,$finalpath));
		unlink($path);
		
	}
	else
	{
		unlink($path);


	}
 	 header("location: trial.php");
// ?>