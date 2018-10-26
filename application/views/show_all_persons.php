<html>
<head>
	<title>Showing all persons</title>
</head>

<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
	<tr style="background:#CCC">
		<th>Person number</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
	</tr>
	<?php
	$x=1;
	foreach($persons_data as $person)
	{
		echo "<tr>";
		echo "<td>".$x."</td>";
		echo "<td>".$person->name."</td>";
		echo "<td>".$person->email."</td>";
		echo "<td>".$person->mobile."</td>";
		echo "</tr>";
		$x++;
	}
	?>
</table>

</body>
</html>
