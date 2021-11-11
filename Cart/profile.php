<?php
    require "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>

<section class="container">
        <div class="profile-container">

            <div class="profile-pic-container">
                <img src="./img/profile-pic.svg" alt="profile-pic" id="profile-pic" />
            </div>

            <div class="heading-container">
                <span class="heading-span">Welcome,</span>
            </div>

            <div class="name-container">
                <span class="name-span">
                    <?php echo $_SESSION['userUiD']; ?>
                <span>
            </div>

            <div class="btn-container">
                <div class="logout-btn">
                    <a href="./logout.php" title="Logout"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <?php 
                    if($_SESSION['admin'] == 1){
                        echo('
                            <div class="admin-panel-btn">
                                <a href="./dashboard.php" title="Admin Panel"><i class="fas fa-user-cog"></i></a>
                            </div>
                        ');
                    }
                ?>
            </div>
                
        </div>
    </section>
</body>
</html>