<?php 
	include 'connection.php';
		session_start();
		function sizeOfIdInCart($id)
		{
			foreach($_SESSION['cart'] as $i)
				{
					if($i[0] == $id)
					{
						return $i[1] ;
					}
				}
			}
?>
<!DOCTYPE html>
<html>
<head>
	<title>usercart</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<form action="proceed.php" method="post">
	<table border="1">
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
		$whereIN = implode(',',array_column($_SESSION['cart'],"0"));
		print_r($whereIN);
		$q ="SELECT * FROM cartadmin WHERE id in ($whereIN)"; 
		$query=mysqli_query($con,$q);	
		while($result = mysqli_fetch_array($query))
		{		
	?>
			<tr>
				<td><img src="<?php echo $result['Pic']; ?>" height="50%" width="50%"></td>
				<td><?php echo $result['Product_Name'];?></td>
				<td>
					<?php 
						echo sizeOfIdInCart($result['id']);
					?>
				</td>
                <td><?php echo $result['Unit_Price']; ?></td>
				<td><select name="quantity_<?php echo $result['id'];?>">
                           <?php
                             for($i=1;$i<=10;$i++)
                              {  
                           ?>
                                 <option value="<?php echo $i?>">
                                 <?php   
                                    echo $i;
                                 ?>       
                                 </option>
                           <?php
                              }
                           ?>
                        </select></td>
				<!-- <td><input type="number" name="quantity" min="1" max="10" multiple></td> -->
				<td>Total Price</td>
                <td><a href="itemremove.php?id=<?php echo $result['id'];?>"><div class="far fa-trash-alt" style="font-size:20px;color:red"></div></a></td>
			</tr>
		<?php
		}
		?>	
			<input type="submit" name="proceed" value="Proceed">
			</form>
			
</body>
</html>