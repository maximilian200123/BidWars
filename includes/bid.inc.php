<?php

session_start();

if(isset($_POST["submit"])){

    $productid = $_POST["productid"];
    $bidprice = $_POST["bid"];
    $userid = $_SESSION["userid"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputBid($bidprice) !== false){
        header("location: ../products.php?error=emptyinput");
        exit();
    }
    
    Bid($conn, $userid, $bidprice, $productid);
}

else{
    header("location: ../products.php?error=idkwtfhappens");
    exit();
}