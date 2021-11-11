<?php
    require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <script src="https://kit.fontawesome.com/10022afe1e.js" crossorigin="anonymous"></script>
 
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="test">
<main>
    <div class="container">
       
    <form action="phpOnly/plogin.php" method="post" enctype="multipart/form-data" class="aform">
    <div class="loginall">
    <table class="ltable">
            <h2 class="title">Log In</h2>
            <tr>
                
                <td><i class="fas fa-user">Username/Email</i>
                    <input type="text" name="uidmail" placeholder="Username/Email">
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fas fa-lock">Password</i>
                    <input type="password" name="pwd" placeholder="Password">
                </td>
            </tr>

        </table>
    </div>

    <input type="submit" name="login-submit" value="login" class="asub">
</form>
    <div class="signupdiv">
              
                <h3 class="about">New here?</h3>
                <a href="signup.php" class="signuplink">Click Here for Sign Up</a>
                
    </div>
    </div>
    </main>

<?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<script> alert("Empty field")</script>';
            
         
        }
        else if ($_GET['error'] == "nouser") {
            echo '<script> alert("No Username")</script>';
            
            // echo'<script type="text/javascript">noUsername();</script>';
        }
        else if ($_GET['error'] == "wrongpassword") {
            echo '<script> alert("Wrong Password")</script>';
            
            // echo'<script type="text/javascript">wrongPwd();</script>';
        }
    }
    else if (isset($_GET['login']) && $_GET['login'] == "success") {
        echo '<script> alert("Login Successful")</script>';
            
        // echo'<script type="text/javascript">successLogin();</script>';
    }
?>

<?php
    require "footer.php";
?>