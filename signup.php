<?php 
    include_once 'header.php';
?>

    <div class="signupFrm">
        <form action="includes/signup.inc.php" method="post" class="form">
            <h1 class="title">Sign up</h1>
        
            <div class="inputContainer">
                <input type="email" class="input" placeholder="a" name="email" id="email" required>
                <label for="" class="label">Email</label>
            </div>
        
            <div class="inputContainer">
                <input type="text" class="input" placeholder="a" name="uid" id="uid" required>
                <label for="" class="label">Username</label>
            </div>
        
            <div class="inputContainer">
                <input type="password" class="input" placeholder="a" name="pwd" id="pwd" required>
                <label for="" class="label">Password</label>
            </div>
        
            <div class="inputContainer">
                <input type="password" class="input" placeholder="a" name="pwdrepeat" id="pwdrepeat" required>
                <label for="" class="label">Confirm Password</label>
            </div>
            <input type="submit" class="submitBtn" name="submit" value="Sign up">
        </form>
    </div>

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p> Fill in all field! </p>";
            }
            else if($_GET["error"] == "invaliduid"){
                echo "<p> Choose a proper username! </p>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<p> Choose a proper email! </p>";
            }
            else if($_GET["error"] == "passwordsdontmatch"){
                echo "<p> Password doesn't match! </p>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<p> Something went wrong, try again! </p>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<p> Username already taken! </p>";
            }
            else if($_GET["error"] == "none"){
                echo "<p> You have signed up! </p>";
            }
        }
    ?>

<?php 
    include_once 'footer.php' ;
?> 