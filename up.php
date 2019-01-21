<!DOCTYPE html>
<html>
<head>
	<title>UPLOADER</title>
</head>
<body>
<h1>UPLOADER</h1>
<form method="post" enctype="multipart/form-data">
<br>
</br>
<input name="file[]" type="file" multiple/>
<br>
<input type="submit" value="upload" name="upload" />
</form>
<?php
if (isset($_POST["upload"])) {
	for ($i=0; $i < count($_FILES['file']['name']); $i++) { 
		if (copy($_FILES["file"]["tmp_name"][$i], $_FILES["file"]["name"][$i])) {
			echo $_FILES["file"]["name"][$i]."<br>";
		}
	}
}
?>
</body>
</html>