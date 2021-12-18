<?php
	include 'database.php';

	$id=$_GET['id'];
	$sql="delete from todos where id=$id";
	$result=mysqli_query($connect,$sql);
	if ($result) {
		header("location: ./index.php");
	}
?>