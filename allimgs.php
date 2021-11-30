<?php
$imagesDirectory = "C:/Users/Alex/Desktop/poze33";

if(is_dir($imagesDirectory))
{
	$opendirectory = opendir($imagesDirectory);

    while (($image = readdir($opendirectory)) !== false)
	{
		if(($image == '.') || ($image == '..'))
		{
			continue;
		}

		$imgFileType = pathinfo($image,PATHINFO_EXTENSION);

		if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
		{
			echo "<img src='C:/Users/Alex/Desktop/poze33".$image."' width='800'> ";
		}
    }

    closedir($opendirectory);

}
?>
