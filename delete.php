<?php
	include_once('config.php');

	if(isset($_GET['id'])){
			$pid = $_GET['id'];

			$sql = "DELETE FROM tblproduct WHERE id = '$pid' ";
			$result = $conn->query($sql);
			
			if($result){
				header('location: index.php');
			}else{
				echo "Failed to update product";
			}
		}

?>