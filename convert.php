<!DOCTYPE html>
<html>
	<head>
		<title> img to data</title>
		<meta charset="utf-8">
		<style>
			textarea{ width: 50%; height: 200px; }
		</style>
	</head>
	<body>
	<?php
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

			if($check !== false) {
				$data = base64_encode(file_get_contents( $_FILES["fileToUpload"]["tmp_name"] ));

				echo "copy + paste the data below, use it as a string in ur JavaScript Code<br><br>";
				echo "<textarea id='data' style=''>data:".$check["mime"].";base64,".$data."</textarea>";

			} else {
				echo "File is not an image.";
			}
		}
	?> 
	<script>document.getElementById('data').select();</script>
	</body>
</html>
