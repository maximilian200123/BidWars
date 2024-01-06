<?php 
    include_once 'header.php';
?>

    <!--template formular-->
    <div class="loginFrm">
        <form action="includes/login.inc.php" method="post" class="form">
            <h1 class="title">Welcome back! Please login in to continue to the site.</h1>
        
            <div class="inputContainer">
                <input type="text" class="input" placeholder="a" name="uid" id="username" required>
                <label for="" class="label">Username/Email</label>
            </div>
        
            <div class="inputContainer">
                <input type="password" class="input" placeholder="a" name="pwd" id="pwd" required>
                <label for="" class="label">Password</label>
            </div>
        
            <input type="submit" name="submit" class="submitBtn" value="Log in">
        </form>
    </div>

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p> Fill in all field! </p>";
            }
            else if($_GET["error"] == "wronglogin"){
                echo "<p> Incorrect login credentials! </p>";
            }
        }
    ?>

<?php
    include_once 'footer.php';
?>