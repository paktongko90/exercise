<?php 
	function details($name, $age = 50){
		echo 'My name is '.$name.' & my age is '.$age.'<br>';
	}

	details('Faizul',30);
	details('Jamal'); // with default value = 50
 ?>