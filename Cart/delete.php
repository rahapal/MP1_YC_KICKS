<?php

	include 'connection.php';

	$id = $_GET['id'];

	$q = "delete from cartadmin where id= $id";
	mysqli_query($con,$q);

	header('location:uploaddatabase.php');

	?>