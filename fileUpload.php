<html>
<body>
<h3>Image File Upload Stats: </h3>
<?php
$domain = fw.garantibbva.com.tr
$mail = 11xx33@fw.garantibbva.com.tr
$password = $12GRNT
	
	if($_FILES["file"]["error"])
	{
		header("Location: file.html");
		die();	
	}
	else{
		echo "Name: ".$_FILES["file"]["name"];
		echo "<br>Size: ".$_FILES["file"]["size"];
		echo "<br>Temp File: ".$_FILES["file"]["tmp_name"];
		move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$_FILES["file"]["name"]);
	}
?>
</body>
</html>
