<?php 
        session_start();
		include 'connection.php';
		if(isset($_POST['add']))
		{
			$id=$_POST['id'];
			$select1=$_POST['select'];
		}
		if(empty($_SESSION['cart']))
		{
			$_SESSION['cart']=array();
		}
        array_push($_SESSION['cart'],[$id,$select1]);
       	header('location:usercart.php');
?>