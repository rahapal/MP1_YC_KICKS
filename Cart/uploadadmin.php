<?php
        
       include 'connection.php';

        if(isset($_POST['upload']))
        {
            // print_r($_POST);
            // die();
            $file = $_FILES['pic'];
            $ProductName = $_POST['product_name'];
            $Size= $_POST['size'];
            $UnitPrice = $_POST['unit_price'];
            $Quantity = $_POST['quantity'];
           
             $filename = $file['name'];
             $fileerror = $file['error'];
             $filepath = $file['tmp_name'];
             
             $destfile = 'upload/'.$filename;
             move_uploaded_file($filepath,$destfile);
          
            $insertquery = "insert into cartadmin (Pic,Product_Name,Size,Unit_Price,quantity)values('$destfile','$ProductName','$Size','$UnitPrice','$Quantity')";
            //  echo($insertquery);
            //  die();
            $query = mysqli_query($con,$insertquery);
            if($query)
            {
               print_r("yes");
               header('Location:uploaddatabase.php');
            }
            else
            {
                print_r("no");
            }
        }
    ?>