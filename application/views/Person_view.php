/**
 * Created by PhpStorm.
 * User: Goran
 * Date: 10/14/2018
 * Time: 6:47 PM
 */
<!DOCTYPE html>
<html lang = "en">

<head>
	<meta charset = "utf-8">
	<title>Persons View</title>
</head>

	<body>
	<a href = "<?php echo base_url(); ?>
			 index.php/person/add_view">Add a Aviani</a>

		<table border = "1">
			<?php
			$i = 1;
			echo "<tr>";
			echo "<td>Broj#</td>";
			echo "<td>Person id.</td>";
			echo "<td>Name</td>";
			echo "<td>Edit</td>";
			echo "<td>Delete</td>";
			echo "<tr>";

			foreach($records as $r) {
				echo "<tr>";
				echo "<td>".$i++."</td>";
				echo "<td>".$r->person_id."</td>";
				echo "<td>".$r->name."</td>";
				echo "<td><a href = '".base_url()."index.php/person/edit/"
					.$r->person_id."'>Edit</a></td>";
				echo "<td><a href = '".base_url()."index.php/person/delete/"
					.$r->person_id."'>Delete</a></td>";
				echo "<tr>";
			}
			?>
		</table>

	</body>

</html>
