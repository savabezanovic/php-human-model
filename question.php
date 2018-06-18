<!DOCTYPE html>
<html>
<head>
	<title>What does it mean to be human?</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>

	<h1 class="center">What does it mean to be human?</h1>

	<form class="center" action="human.php" method="post"><br>

		First Name: <br> 
		<input type="text" name="firstName" required ><br>

		Last Name: <br> 
		<input type="text" name="lastName" required> <br>

		Age: <br> 
		<input type="intiger" name="age" required> <br>

		Gender:   
		<input type="radio" name="gender" value="male" required> Male
 		<input type="radio" name="gender" value="female" required> Female <br>

 		Are you a programmer ? 
 		<input type="radio" name="programmer" value="yes" required> Yes
 		<input type="radio" name="programmer" value="no" required> No <br>

		<input type="submit">

	</form>	
	
</body>
</html>
