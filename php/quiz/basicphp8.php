
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php 
	//Write a PHP program to print out the multiplication table upto 6*6

	$x = 6;

	for($i = 1;$i<= $x;$i++){
		echo "<tr>";
		for($a = 1;$a <= $x;$a++){
			echo '<td>'.$a * $i.'</td>';
		}
		echo "</tr>";
	}

	
 ?>
 </table>