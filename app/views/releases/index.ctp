<h2>Releases</h2>
<table>
<tr>
	<th>Release #</th>
	<th>Date of (Scheduled) Release</th>
</tr>
<?php
	foreach($releases as $release)
	{
		$release = $release['Release'];

		echo "<tr>\n";
		echo "<td>" . $release['id'] . "</td>\n";
		echo "<td>" . $this->Time->nice($release['release_date']) . "</td>\n";
		echo "</tr>\n";
	}
?>
</table>