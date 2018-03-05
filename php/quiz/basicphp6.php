<?php 
	//The FILTER_VALIDATE_EMAIL filter validates an e-mail address.

	$email = 'paktongko90@yopmail.com';

	if(filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo $email.' is valid';
	}else{
		echo $email.' is not valid';
	}
 ?>