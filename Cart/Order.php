<?php
    require "header.php";
?>

<?php

        include 'connection.php';    
        $displayquery = "select * from cart";
        $querydisplay = mysqli_query($con,$displayquery);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordered List</title>
    <link rel="stylesheet" href="css/order.css">
</head>
<body>
    <div class="backbutton" 
    style="
    font-size: 35px;
    margin-top: 0;
    margin-bottom: 0;
    color: #99c93f;
    padding: 10px;"
    >
    <a href="dashboard.php" 
    style="
     text-decoration: none;
    color: inherit;"
    >

        <i class="fa fa-arrow-circle-left"></i>
    </a>
    </div>
    <div class="odesign">
     <table >
        
     <th>Product Id</th>
     <th>Product Name</th>
     <th>Product Image</th>
     <th>User Name</th>
     <th>Customer Name</th>
     <th>Address</th>
     <th>Contact</th>
     <th>Sizes</th>
     <th>Quantity</th>
     <th>Total Price</th>
     <th>Order Notes</th>
           <?php
                while($result = mysqli_fetch_array($querydisplay))
                {
                ?>

            <tr>
                <td><?php echo $result['M_ID']; ?>
                
                <td><?php echo $result['Product_Name']; ?></td>
                <td><img src="<?php echo $result['Image']; ?>" height="50%" width="50%"></td>
                <td><?php echo $result['Username']; ?></td>
                <td><?php echo $result['Name']; ?></td>
                <td><?php echo $result['Address']; ?></td>
                <td><?php echo $result['Contact']; ?></td>
                <td><?php echo $result['Size'];?></td>
                <td><?php echo $result['Quantity']; ?></td>
               <td>&#8360;<?php echo $result['Total_Price']; ?></td>
               <td><?php echo $result['Order_Note'];?></td>
                

            </tr>
                <?php
               }
               
        
     ?>

     </table>     
    
    </div>
</body>
</html>
<?php
    require "footer.php";
?>
