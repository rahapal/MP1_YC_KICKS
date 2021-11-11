<?php
    require "header.php";
    $isloggedin=false;
    if(isset($_SESSION["userUiD"]) )
    {$isloggedin=true;
    }
?>

<?php
    
    include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>usercart</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/try.css">
</head>
<body>
<?php 
if($isloggedin)
{
?>
<form action="proceed.php" method="post" class="uform">
    <div>
	<table>
	<tr>
			<th> Image </th>
			<th> Product Name </th>
			<th> Size </th>
			<th> Unit Price </th>
			<th> Quantity </th>
			<th> Total Price </th>
			<th>Action</th>
    </tr>
    <?php
    if(isset($_SESSION["userUiD"]))
    {
     $username=$_SESSION['userUiD'];
   
        $q = " SELECT * FROM selectcartproduct WHERE Username='$username'";
   
        $query=mysqli_query($con,$q);
 
        while($result=mysqli_fetch_array($query))
        {
    ?>              
                <tr>
                 <td><img src="<?php echo $result['Pic'];?>" height="150%" width="150%"></td>
                 <td><?php echo $result['Product_Name'];?></td>
                 <td><?php echo $result['Size'];?></td>
                 <td><input type="text" id="price" name="price" value="<?php echo $result['Price'];?>" style="border-width:0px;border:none;outline:none;" readonly></td>
                 <td><input type="number" id="select" name="quantity_<?php echo $result['ID'];?>" value="1" min="1" max="10" onClick="(this.parentElement.nextElementSibling.firstChild.value = this.value*this.parentElement.previousElementSibling.firstChild.value)" multiple></td>
                 <td><input type="text" id="total" name="total_price" value="<?php echo $result['Price'];?>" style="border-width:0px;border:none;outline:none;" readonly></td>
                 <td><a href="itemremove.php?ID=<?php echo $result['ID'];?>"><div class="fa fa-trash-o" style="font-size:40px;color:red"></div></a></td>
                 </tr>
    
    <?php
        }
    }
    ?>
        </table>
    </div>
        <input type="submit" name="proceed" value="Proceed" class="usub">
</form>
  <?php
}
else{


  ?>
  <div class="fmessage">First,You Need to login.</div>
 
<?php } ?>
  </body>
  </html>      
  <?php
    require "footer.php";
?>
