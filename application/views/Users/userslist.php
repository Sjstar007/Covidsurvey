<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
	<?php /*print_r($users);*/?>
	<h1>User Acc. Details</h1>
	<table>
		<thead>
			<tr>
				<th>RowId</th>
				<th>Name</th>
				<th>Mobile_no</th>
				<th>A</th>
				<th>B</th>
				<th>C</th>
				<th>D</th>
				<th>E</th>
				<th>F</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $user):?>
			<tr>
				<td><?php echo $user['RowID'];?></td>
				<td><?php echo $user['Name'];?></td>
				<td><?php echo $user['Mobile_no'];?></td>
				<td><?php echo $user['a'];?></td>
				<td><?php echo $user['b'] ;?></td>
				<td><?php echo $user['c'] ;?></td>
				<td><?php echo $user['d'] ;?></td>
				<td><?php echo $user['e'] ;?></td>
				<td><?php echo $user['f'] ;?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>