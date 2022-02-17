<?php
	include_once('config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Product List</h2>
	<a href="add.php">Add Item</a><br><br><br>
	<table border="1" cellspacing="0" cellpadding="10px">
		<thead>
			<th>S/N</th>
			<th>Product Name</th>
			<th>Description</th>
			<th>Added Date</th>
			<th>Updated Date</th>
			<th>Action</th>
		</thead>
		<?php
			$i = 1;
			$sql = "SELECT * FROM tblproduct ORDER BY id, name ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0){
				while($row = $result->fetch_array()){
		?>
		<tbody>
			<tr>
				<td><?=$i++?></td>
				<td><?=$row['name']?></td>
				<td><?=$row['description']?></td>
				<td><?=$row['date_added']?></td>
				<td><?=$row['date_updated']?></td>
				<td>
					<a href="edit.php?id=<?=$row['id']?>">Edit</a> |
					<a href="delete.php?id=<?=$row['id']?>">Delete</a>
				</td>
			</tr>
		<?php
			}
		}
		?>
		</tbody>
	</table>

</body>
</html>