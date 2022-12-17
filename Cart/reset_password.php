<?php
    require "header.php";
?>
    
    <div>
        <form action="phpOnly/changepassw.php" method="post">

            <label>
                Current Password: 
            </label>
            <input type="password" name="currentPw"><br>

            <label>
                New Password: 
            </label>
            <input type="password" name="newPw"><br>

            <label>
                Confirm Password: 
            </label>
            <input type="password" name="reNewPw"><br>
            
            <input type="submit" name="submitPw" value="Change">

        </form>
    </div>
    
<?php
    require "footer.php";
?>