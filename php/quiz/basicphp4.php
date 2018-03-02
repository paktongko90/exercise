<!-- Create a simple HTML form and accept the user name and display the name through PHP echo statement. -->
<?php 
	$title = 'Simple HTML Form';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<h2><?php echo $title; ?></h2>
	<form action="" method="POST">
		Input Value : <br><input type="text" name="value"><br><br>
		<input type="submit" name="submit" Value="Submit">
	</form>

	<?php 
		if(!isset($_POST['value'])){
			$name ="";
		}else{
			$name = $_POST['value'];
			echo '<h3>The Input value is : '.$name.'<h3>';
		}
	 ?>
</body>
</html>