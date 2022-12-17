<?php
    include 'connection.php';
    if(isset($_POST['update']))
        {
			$id = $_POST['id'];
            
            $ProductName = $_POST['product_name'];
            $Size= $_POST['size'];
            $UnitPrice = $_POST['unit_price'];
            $Quantity=$_POST['quantity'];
            
            $q = "update cartadmin set Product_Name='$ProductName',Size='$Size',Unit_Price=$UnitPrice,quantity='$Quantity' where id=$id";
           if(($_FILES['pic']['size']!=0))
           {
             $file = $_FILES['pic'];
             $filename = $file['name'];
             $fileerror = $file['error'];
             $filepath = $file['tmp_name'];
             $destfile = 'upload/'.$filename;
             move_uploaded_file($filepath,$destfile);
             $q = "update cartadmin set Pic='$destfile',Product_Name='$ProductName',Size='$Size',Unit_Price=$UnitPrice,quantity='$Quantity' where id=$id";
             
           }
            $query = mysqli_query($con,$q);
            header('location:uploaddatabase.php');
        }

?>