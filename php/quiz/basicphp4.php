<!-- Create a simple HTML form and accept the user name and display the name through PHP echo statement. -->
<!DOCTYPE html>
<html>
<head>
	<title>Exerhtmlentities(cise</title>
</head>
<body>
	<form action="" method="POST">
		Input Value : <input type="text" name="value">
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php 
		if(isset($_POST['value'])){
			$var = htmlentities($_POST['value']);
			echo 'the input value is : '.$var;
		}
	 ?>

</body>
</html>