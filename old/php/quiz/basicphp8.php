
<table>
	<?php 
		for($x = 1;$x <= 6;$x++){
			echo "<tr>";
			for($y = 1;$y <=6;$y++){
				$result = $x * $y;
				echo "<td>$result<td>";
			}
			echo "</tr>";
		}
	 ?>
</table>