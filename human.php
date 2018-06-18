<!DOCTYPE html>
<html>
<head>
	<title>This could be you.</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>

	<h1 class="center">This could be you.</h1>
	<?php

		$firstName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$age = $_POST["age"];
		$gender = $_POST["gender"];
		$programmer = $_POST["programmer"];
		$image;
	
	if ($gender === "male") {
		$image = "https://i.pinimg.com/736x/d5/7a/32/d57a32fa263941826019eaeb840ee9db--dead-inside-lift.jpg";
	}	elseif ($gender === "female") {
		$image = "https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2013/06/valentina_tereshkova/12890201-1-eng-GB/Valentina_Tereshkova_medium.jpg";
	}	

	if ($programmer === "no") {
		echo '<h4 class="center"> Congratulations, ' . $firstName . " " . $lastName . " you are a " . $age . " years old " . $gender . " human! <h4>" . '<img class="center" src="' . $image . '">';
	} else {
		echo "May god have murcy on our souls!" . "<br>";
		var_dump($_POST);
	}
		

	?>
	
</body>
</html>

