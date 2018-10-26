<html>
<head>
	<title>Display Records</title>
</head>

<body>
<table width="550" border="5" >
	<tr style="background:#8ba8af">
		<th>Person number</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Delete</th>
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
		echo "<td><a href='delete_data?id=".$person->user_id."'>Delete</a></td>";
		echo "</tr>";
		$x++;
	}
	?>
</table>
</body>
</html>
