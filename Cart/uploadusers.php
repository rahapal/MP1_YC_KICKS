<?php
    session_start();
    include 'connection.php';
        // $size=array_column($_SESSION['cart'],"1");
        // print_r($size);
        // for($i=0;$i<=sizeof($size);$i++)
        // {
        //     print_r($size[$i]);
        // }
        // die();
       $username=$_SESSION['userUiD'];
        $q ="SELECT * FROM selectcartproduct WHERE Username='$username'"; 
        $query=mysqli_query($con,$q);
        foreach(mysqli_fetch_all($query,MYSQLI_ASSOC) as $result)
        {
            
             $mid=$result['M_ID'];
             $pic= $result['Pic']; 
             $size=$result['Size'];
             $productname=$result['Product_Name'];
             $unitprice=$result['Price'];  
             $Quantity=$result['quantity'];
             
            
    
    if(isset($_POST['checkout']))
    {
        $name=$_POST['fullname'];
        $address=$_POST['address'];
        $contact=$_POST['contact'];
        $note=$_POST['ordernote'];
    }
   
    $email=$_SESSION['email'];
    $totalprice=$unitprice * $Quantity;
    $q= "insert into cart(M_ID,Email,Username,Name,Address,Contact,Image,Product_Name,Size,Unit_Price,Quantity,Total_Price,Order_Note)values('$mid','$email','$username','$name','$address','$contact','$pic','$productname','$size','$unitprice','$Quantity','$totalprice','$note')";
    $query=mysqli_query($con,$q);
}
    header('location:test.php');
    //header('location:cartfinal.php');
?>
