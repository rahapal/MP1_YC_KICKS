<?php
    session_start();

    include 'connection.php';
?>
<?php
$product_table = 'selectcartproduct';
$total_product = selectProduct($product_table);

function selectProduct($table)
    {
        global $con;
      if(isset($_SESSION['userUiD']))
      {
        $username=$_SESSION['userUiD'];
        // $sql = "SELECT Product_Name FROM $table WHERE Username = $_SESSION['Username']";
        $sql = "SELECT Product_Name FROM $table WHERE Username = '$username' ";
   
        
        
        $stmt = $con -> prepare($sql);
        $stmt -> execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
      }
    else 
    {
        return [];
    }
    }
       
    ?>
   
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Bigyan Bista, Sushant Rahapal, Susant Basnet">
    <meta name="keywords" content="YC Kicks, Shoes">
    <meta name="description" content="Shoe Shop">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>YC KICKS</title>
  </head>
  <body>

    <div class="headerNav">
        <input type="checkbox" id="click" class="hcheckbox">
        <label for="click" class="menu-btn">
            <i class="fas fa-equals"></i>
        </label>
        
        <div class="logo">
           <a href="displayproduct.php"> <img src="img/YCLogo.png"></a>
        </div>

        <ul>
            <li><a href="displayproduct.php">Home</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#about-us">Contact Us</a></li>
        </ul>
        
       
        
        <div class="user-cart">
           
            <a href="
                    <?php if(isset($_SESSION['userId'])){
                        echo'profile.php';
                    } else {
                        echo'login.php';
                    } ?>
                    "><div class="far fa-user"></div></a>
            <a href="User_Cart.php" ><div class="fas fa-shopping-bag bag" >
            <div class="totalproduct">
                <?php
               
                    echo(count($total_product));
              
                ?>
            </div>
            </div>
           </a> 
           <!-- <div class="stext">Hi,<?php echo$_SESSION['userUiD']?></div> -->

        </div>
</div>

  </body>
</html>