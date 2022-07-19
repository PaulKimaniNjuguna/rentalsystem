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
				<th><strong>First Name</strong></th>
				<th><strong>Surname</strong></th>
				<th><strong>Monthly rent</strong></th>
				<th><strong>Amount paid</strong></th>
				<th><strong>Rent due</strong></th>
			</tr>
			</thread>
			<tbody>
				<?php
				$count=1;
				$query = "SELECT *, (rent-amountpaid) AS rentdue FROM tenants";
				$result = mysqli_query($mysqli, $query);

				while ($row = mysqli_fetch_assoc($result)){ ?>
					<tr>
						<td align="center"><?php echo $row['first']; ?></td>
						<td align="center"><?php echo $row['surname']; ?></td>
						<td align="center"><?php echo $row['rent']; ?></td>
						<td align="center"><?php echo $row['amountpaid']; ?></td>
						<td align="center"><?php echo $row['rentdue']; ?></td>
						
					</tr>
					<?php  } ?>
				
			</tbody>
		
	</table>
<a href="dashboard.html">Back</a>
</body>
</html>