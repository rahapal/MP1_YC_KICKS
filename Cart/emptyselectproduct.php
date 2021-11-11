<?php 
session_start();
        require_once "connection.php";
        $username=$_SESSION['userUiD'];
        $query = "delete from selectcartproduct where Username = '$username'";
        $querydisplay = mysqli_query($con,$query);

        header('location:cartfinal.php');


?>