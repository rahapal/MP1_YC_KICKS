<?php
    require "header.php";
?>

<?php
        include "connection.php";
     
        $m=[];
        foreach($_POST as $key => $value)
        {
                if(preg_match("/quantity_([0-9]+)/", $key, $m))
                {
                       $pid=$m[1];
                        $quantity=$value;
                        $updatequery = "update selectcartproduct set quantity = $quantity where ID = $pid";
                        $query=mysqli_query($con,$updatequery);
                }

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/proceed.css">
<body>

<form action="uploadusers.php" method="post" class="pform">
<div class="pdesign">
        <table>
        <tr>
       <td> <label for="fname">Full Name:</label></td>
        <td><input type="text" name="fullname" required><br>   </td>
        </tr>
        <tr>
       <td> <label for="address">Address:</label></td>
        <td><input type="text"  name="address" required><br></td>
        </tr>
        <tr>
        <td><label for="contact">Contact:</label></td>
        <td><input type="text" name="contact" required><br></td>
        </tr>
        <tr>
        <td><label for="Order">Order Notes:</label><br></td>
        <td><textarea name="ordernote" rows="5" cols="50" placeholder="Write Here....&#10If your about to gift someone this item.&#10OR&#10If you want to give a more detail about the location.(Optional)"></textarea><br></td>
        </tr>
        </table>
        </div>
        <input type="submit" name="checkout" value="Checkout" class="psub">
</form>

    
</body>
</html>
<?php
    require "footer.php";
?>
