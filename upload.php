<?php
if(isset($_POST['submit'])){
	// echo $_FILES['userfile']['size'];
	$path = 'upload/';
	$tmp_file = $_FILES['userfile']['tmp_name'];
	$name = $_FILES['userfile']['name'];
	$fullPath = $path.$name;
	move_uploaded_file($tmp_file, $fullPath);
} 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<!-- The data encoding type, enctype, MUST be specified as below -->
	<form enctype="multipart/form-data" action="upload.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
	    <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
	    <!-- Name of input element determines name in $_FILES array -->
	    Send this file: <input name="userfile" type="file" />
	    <input type="submit" name="submit" value="Send File" />
	</form>
</body>
</html>
