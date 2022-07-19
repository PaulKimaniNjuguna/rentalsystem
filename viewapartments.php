<?php
require	'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table width="60%" border="1" style="border-collapse: collapse;">
		<thread>
			<tr>
				<th><strong>S.No.</strong></th>
				<th><strong>Plot No.</strong></th>
				<th><strong>Plot Name</strong></th>
				<th><strong>Location</strong></th>
				<th><strong>Delete</strong></th>
			</thread>
			<tbody>
				<?php
				$count=1;
				$query = "SELECT * FROM apartments ORDER BY id;";
				$result = mysqli_query($mysqli, $query);

				while ($row = mysqli_fetch_assoc($result)){ ?>
					<tr><td align="center"><?php echo $count; ?></td>
						<td align="center"><?php echo $row['apartmentno']; ?></td>
						<td align="center"><?php echo $row['apartmentname']; ?></td>
						<td align="center"><?php echo $row['location']; ?></td>
						<td align="center">
							<a href="deleteapartments.php?id= <?php echo $row['id']; ?>">Delete</a>
						</td>
						
					</tr>
					<?php $count++; } ?>
				
			</tbody>
		
	</table>

</body>
</html>