<?php 
	session_start();
	session_destroy(); // for destroy all active session
	//unset($_SESSION['USERNAME']); --> for destroy single session
 ?>