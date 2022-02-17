<?php
	include_once('config.php');

	if(isset($_POST['btn_add'])){
		$product_name = $_POST['product_name'];
		$description = $_POST['description'];
		$date_added = date('Y-m-d H:i:s');

		$sql = "INSERT INTO tblproduct (name,description,date_added) VALUES('$product_name','$description','$date_added')";
		$result = $conn->query($sql);

		if($result){
			header('location: index.php');
		}else{
			echo "Failed to add product";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New</title>
</head>
<body>
	<h2>Add Product</h2>
	<form action="add.php" method="POST">
		<div>
			<label>Product Name</label>
			<input type="text" name="product_name">
		</div>
		<div>
			<label>Product Description</label>
			<textarea name="description"></textarea>
		</div>
		<input type="submit" name="btn_add" value="Save">
	</form>

</body>
</html>