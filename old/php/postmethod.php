<!DOCTYPE html>
<html>
<head>
	<title>Working with $_POS Variables</title>
</head>
<body>
	<h4>Working with $_POS Variables</h4>
	<?php
		$match = 'pass123';
		if(isset($_POST['password'])){
			$password = $_POST['password'];
				if(!empty($password)){
					if($password == $match){
						echo 'correct password';
					}else{
						echo 'incorrect password';
					}

				}else{
					echo 'please enter the password';
				}
		}
	?>
	<form action="postmethod.php" method="POST" >
		Password : <input type="password" name="password"><br>
		<input type="submit" value"Submit">
	</form>
</body>
</html>