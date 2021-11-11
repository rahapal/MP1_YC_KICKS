<?php
   include 'connection.php';      
   function updateItem($productId, $size, $quantityToReduce)
{
    global $con ;
    $sql = 'select * from cartadmin where id = \''.$productId . "'" ;
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_all($result)[0] ;
    //  print_r($row) ;
    $sizes = explode("/", $row[3]);
    $quantities = explode("/", $row[5]) ;
    $indexToEdit = array_search($size, $sizes) ;
    $lastQuantity = $quantities[$indexToEdit] ;
    $quantities[$indexToEdit] = $lastQuantity - $quantityToReduce ;
    if(($lastQuantity - $quantityToReduce) < 0) return ;
    $updateQuery = 'update cartadmin set quantity = \''. implode("/", $quantities). "' where id = $productId" ;
    // echo $updateQuery ;
   
    mysqli_query($con, $updateQuery) ;
}
	  $displayquery = "select * from cartadmin";
      $querydisplay = mysqli_query($con,$displayquery);
                foreach(mysqli_fetch_all($querydisplay,MYSQLI_ASSOC) as $result)
                {
                    $id_array[]=$result['id'];
                }
                $ids=implode(',',$id_array);
                $q = "select * from cartadmin where id in ($ids)";
                
                $query= mysqli_query($con,$q);
                foreach(mysqli_fetch_all($query,MYSQLI_ASSOC) as $res)
                {
                    $size_array[]=$res['Size'];
                    $quantity_array[]=$res['quantity'];
                }
                for($i=0;$i<sizeof($size_array);$i++)
                {
                    $a[$i]=((explode('/',$size_array[$i])));
                    $b[$i]=((explode('/',$quantity_array[$i])));
                }
                
                // $query = "select * from cart";
                // $display = mysqli_query($con,$query);
                // // print_r(mysqli_fetch_all($display,MYSQLI_ASSOC));
                // $ID_array = [] ;
                // foreach(mysqli_fetch_all($display,MYSQLI_ASSOC) as $result)
                // {
                //     $ID_array[]=$result['Id'];
                // }
                // $ID=implode(',',$ID_array);
                // $qq= "select * from cart where id in ($ids)";
                $qq = "select * from selectcartproduct";
                // echo "$qq";
                $dd= mysqli_query($con,$qq);
                $inCart = mysqli_fetch_all($dd,MYSQLI_ASSOC) ;
                
                foreach($inCart as $abc){
                $productId = $abc['M_ID'] ;
                $size = $abc['Size'] ;
                $quantity = $abc['quantity'] ;
                 updateItem($productId, $size, $quantity) ;
                }                   
                header('location:emptyselectproduct.php');
    ?>