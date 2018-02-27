<!DOCTYPE html>
<html>
<head>
	<title>Working with $_GET Variables</title>
</head>
<body>
	<h4>Working with $_GET Variables</h4>
	<?php 
		if(isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])){
			$day = $_GET['day'];
			$month = $_GET['month'];
			$year = $_GET['year'];

			if(!empty($day) && !empty($month) && !empty($year)){
				echo 'the date is :'.$day.''.$month.''.$year;
			}else{
				echo "Please fill in all the field";
			}
		}
	 ?>
	<form action="getmethod.php" method="GET">
		Day : <input type="text" name="day"><br>
		Month : <input type="text" name="month"><br>
		Year : <input type="text" name="year"><br>
		<input type="submit" value"Submit" name="">
	</form>
</body>
</html>