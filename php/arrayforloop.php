<?php 
	//fetch array data using for loop

	$cars = array('proton','perodua','honda');
	$arrlength = count($cars); //The count() function returns the number of elements in an array.

	for ($i=0; $i < $arrlength ; $i++) { 
		echo $cars[$i];
		echo '<br>';
	}
 ?>