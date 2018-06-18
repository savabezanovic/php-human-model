<!DOCTYPE html>
<html>
<head>
	<title>You are human</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>

	<h1 class="center">You are human!</h1>
	<?php

		$firstName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$age = $_POST["age"];
		$gender = $_POST["gender"];
		
	
		echo "Congratulatons, " . $firstName . " " . $lastName . " you are a " . $age . " year old " . $gender . " human ! " 

	?>

</body>
</html>