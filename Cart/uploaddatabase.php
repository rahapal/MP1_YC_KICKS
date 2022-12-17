<?php
    require "header.php";
?>
<?php

        include 'connection.php';    
        $displayquery = "select * from cartadmin";
        $querydisplay = mysqli_query($con,$displayquery);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/uploaddatabase.css">
</head>
<body>
    <div class="backbutton">
    <a href="dashboard.php" class="b"><i class="fa fa-arrow-circle-left"></i></a>
    </div>
     <div class="upload">
     <table >
        <th>Id</th>
     <th>Product Image</th>
     <th>Product Name</th>
     <th>Sizes</th>
     <th>Unit Price</th>
     <th>Quantity</th>
     <th colspan="2">Action</th>
 

    
        <?php
                while($result = mysqli_fetch_array($querydisplay))
                {
                ?>

            <tr>
                <td><?php echo $result['id']; ?>
                <td><img src="<?php echo $result['Pic']; ?>" height="50%" width="50%"></td>
                <td><?php echo $result['Product_Name']; ?></td>
                <td><?php echo $result['Size'];?></td>
               <td>&#8360;<?php echo $result['Unit_Price']; ?></td>
               <td><?php echo $result['quantity'];?></td>
                <td>
                    <a href="update.php?id=<?php echo $result['id']; ?>" class="ubtn">Edit
                    </td>
                <td><a href="delete.php?id=<?php echo $result['id']; ?>" class="ubtn">delete</td>

            </tr>
                <?php
               }
               
        
     ?>
     </table>  
</body>
</html>
<?php
    require "footer.php";
?>
