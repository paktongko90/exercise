<?php 

	//Use the switch statement to select one of many blocks of code to be executed.
	$favcolor = 'green';

	switch ($favcolor) {
		case 'red':
			echo 'your favorite color is '.$favcolor;
			break;
		case 'green':
			echo 'your favorite color is '.$favcolor;
			break;

		default:
			echo 'your favorite color either red or green';
			break;
	}
 ?>