<?php


$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM users WHERE ID='$id'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$user = $row["Username"];
	}
}

?>
<div class="jumbotron">
	<center>
		<h1>Welcome <?php echo $user; ?></h1>
	</center>
</div>