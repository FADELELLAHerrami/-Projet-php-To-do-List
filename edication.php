<?php
	$id=$_POST['id'];
	$title=$_POST['title'];
	include 'database.php';

	$sql="update todos set title='$title' where id=$id";
	$result=mysqli_query($connect,$sql);
	if($result){
		header("location: ./index.php");
	}

?>

