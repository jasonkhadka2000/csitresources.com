<?php 

//include 'includes/bootstrap.php';
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('uploadssuggest'));

$files = array(); 

foreach ($rii as $file) {

    if ($file->isDir()){ 
        continue;
    }

    $files[] = $file->getPathname(); 

}
//var_dump($files);
$length=count($files);
echo $length;
echo "<br>";
$i=0;
while($i<$length)
{
	echo "<br>";
	$a=explode('\\', $files[$i]);
	$file_name=end($a);


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

					$fileref=$files[$i];
					
					echo "<a href='$fileref' target='_BLANK'>
							<button type='button' class='btn btn-success'>Download</button></a>";

					$viewref='viewfilecontents.php?file='.$fileref.'';
					
					echo "<a href='$viewref' target='_BLANK'><button class='btn btn-success'>View contentcs</button></a>";
					echo "<a href='contentfinal.php?action=verify&filepath=".$fileref."&file=".$file_name."'><button class='btn btn-success'>
					verify
					</button></a>";
					echo "<a href='contentfinal.php?action=delete&filepath=".$fileref."&file=".$file_name."'><button class='btn btn-success'>
					reject
					</button></a>";
				
				echo "</div>";
			echo "</div>";
		}	
    $i++;     				
}
// var_dump($files);

?>
