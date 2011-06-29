<h2>Colors</h2>
<table>
<tr>
	<th>Color</th>
	<th>Color Order Number</th>
	<th>Alternate Text</th>
</tr>
<?php
	foreach($colors as $color)
	{
		//print_r ( );
		$color = $color['Color'];

		echo "<tr>\n";
		echo "<td>" . $color['color_name'] . "</td>\n";
		echo "<td>" . $color['order'] . "</td>\n";
		echo "<td>" . $color['alt_text'] . "</td>\n";
		echo "</tr>\n";
	}
?>
</table>