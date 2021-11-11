<?php
    session_start();
    include 'connection.php';   
    $id=$_GET['ID'];
    print_r($id);
    $q = "delete from selectcartproduct where ID= $id";
	mysqli_query($con,$q);

	header('location:User_Cart.php');

	?>
?>