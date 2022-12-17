<?php
require_once "connection.php";

function updateItem($productId, $size, $quantityToReduce){
    global $con ;
    $sql = 'select * from cartadmin where id = \''.$productId . "'" ;
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_all($result)[0] ;
    // print_r($row) ;
    $sizes = explode("/", $row[3]);
    $quantities = explode("/", $row[5]) ;
    $indexToEdit = array_search($size, $sizes) ;
    $lastQuantity = $quantities[$indexToEdit] ;
    $quantities[$indexToEdit] = $lastQuantity - $quantityToReduce ;
    if(($lastQuantity - $quantityToReduce) < 2) return ;
    $updateQuery = 'update cartadmin set quantity = \''. implode("/", $quantities). "' where id = $productId" ;
    // echo $updateQuery ;


    mysqli_query($con, $updateQuery) ;
    header('location:emptyselectproduct.php');
}


 