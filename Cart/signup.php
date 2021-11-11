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
    <link rel="stylesheet" href="css/signup.css"> 
</head>
<body>
    <main>
    <div class="container">
      
            
                <form action="phpOnly/psignup.php" method="post" class="aform">
                 <div class="signupall">
                    <table class="stable">
                     
                    <h2 class="title">Sign Up</h2>
                    
                    <input type="text" name="admin" value='0' hidden>
                    <tr>
                        <td>
                            <i class="fas fa-user">Username</i>
                        <input type="text" name="uid" placeholder="Username">
                        </td>
                    </td>
                  
                    </tr>
                     <tr>
                        <td>
                            <i class="fas fa-envelope">Email</i>
                        <input type="text" name="email" placeholder="Email">
                        </td>
                    
                    </tr> 
                <tr> 
                   
                      <td><i class="fas fa-lock">Password</i>
                        <input type="password" name="pwd" placeholder="Password">
                     </td>
                     </div>
                </tr>
                  
                <tr>
                        <td>
                        <i class="fas fa-lock">Conform Password</i>
                        <input type="password" name="pwd-repeat" placeholder="Conform Password">
                        </td>
                </tr>
                     
                        </table>
                </div>
                    <input type="submit" value="Signup" name="signup-submit" class="asub">
                </form>
            <div class="signupdiv">
              
                <h3 class="about">Already have account?</h3>
                <a href="login.php" class="signuplink">Click Here for Login</a>
              
            
             </div>
    </div>
    
    </main>

<?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<script>alert("Empty")</script>';
            //errormessage
        }
        else if ($_GET['error'] == "invaliduidandmail") {
            echo '<script> alert("invalid id and email")</script>';
          
        }
        else if ($_GET['error'] == "invalidmail") {
            echo '<script> alert("invalid email")</script>';
           
        }
        else if ($_GET['error'] == "invaliduid") {
            echo '<script> alert("invalid username")</script>';
            //errormessage for invalid username
        }
        else if ($_GET['error'] == "passwordcheck") {
            echo '<script> alert("password mismatch")</script>';
            //errormessage for password mismatch
        }
        else if ($_GET['error'] == "usernametaken") {
            echo '<script> alert("username already taken")</script>';
            //errormessage for username already taken
        }                          
    }
    else if (isset($_GET['signup']) && $_GET['signup'] == "success") {
        echo '<script> alert("Successful signup")</script>';
        //Successful signup msg
    }
?>

</body>
</html>