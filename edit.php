<?php
	include_once('config.php');

	if(isset($_POST['btn_updated'])){
		$id = $_POST['pid'];
		$product_name = $_POST['product_name'];
		$description = $_POST['description'];
		$date_updated = date('Y-m-d H:i:s');

		$sql = "UPDATE tblproduct SET name='$product_name',description='$description',date_updated='$date_updated' WHERE id = '$id' ";
		$result = $conn->query($sql);

		if($result){
			header('location: index.php');
		}else{
			echo "Failed to update product";
		}
	}

	if(isset($_GET['id'])){
		$pid = $_GET['id'];

		$sql = "SELECT * FROM tblproduct WHERE id = '$pid' ";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_array()){
				$p_id = $row['id'];
				$p_name = $row['name'];
				$p_description = $row['description'];
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update New</title>
</head>
<body>
	<h2>Update Product</h2>
	<form action="edit.php" method="POST">
		<div>
			<label>Product Name</label>
			<input type="hidden" name="pid" value="<?php echo $p_id; ?>">
			<input type="text" name="product_name" value="<?php echo $p_name; ?>">
		</div>
		<div>
			<label>Product Description</label>
			<textarea name="description" value="<?php $p_description; ?>"><?php echo $p_description; ?></textarea>
		</div>
		<input type="submit" name="btn_updated" value="Update">
	</form>

</body>
</html>