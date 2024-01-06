<?php
    session_start();
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidwars</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/add_product.css">
</head>

<body>
<nav class="header_wrapper">
    <div class="header_left">
        <?php
            if(isset($_SESSION["useruid"])){
                $useruid = $_SESSION["useruid"];
                echo "<a href=\"products.php\" class=\"first_page\">BidWars</a>";
            }
            else{
                echo "<a href=\"index.php\" class=\"first_page\">BidWars</a>";
            }
        ?>
        
    </div>
    <div class="header_right">
        <?php
            
            if(isset($_SESSION["useruid"])){
                $useruid = $_SESSION["useruid"];
                echo "<a href='add_product.php' class='sp_page'>Welcome,$useruid</a>";
                echo "<a href='includes/logout.inc.php' class='sp_page'>Log out </a>";
            }
            else{
                echo "<a href='signup.php' class='sp_page'>Sign Up </a>";
                echo "<a href='login.php' class='ln_page'>Log In </a>";
            }
        ?>
    </div>
</nav>