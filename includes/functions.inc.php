<?php

function emptyInputBid($bidprice){
    $result;
    if(empty($bidprice)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function emptyInputSignup($email, $username, $pwd, $pwdRepeat){
    $result;
    if(empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT* FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData= mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }

    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersEmail, usersUid, usersPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}       

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../products.php");
        exit();
    }
}

function createProd($conn, $prodImg, $title, $description, $startprice, $time){
    $conn->query("INSERT into products (productImg, productTitle, productDescription, productPrice, productTime) VALUES ('$prodImg', '$title', '$description', '$startprice', '$time')");
    header("location: ../add_product.php?error=none");
    exit();
}

function Bid($conn, $userid, $bidprice, $productid){
    $product = $conn->query("SELECT * FROM products");
    
    while($row = $product->fetch_array()){
        //$cv = $conn->query("SELECT productPrice FROM products WHERE productId = $userid");
        $price = $row['productPrice'];
        
        if($productid === $row['productId']){

            //if((int)$userid === $row['productBidder']){
            
                if((int)$bidprice > $price){ 
                    
                    $sql = "UPDATE products SET productBidder = '$userid', productPrice = '$bidprice' WHERE productId = $productid";
                    //$stmt = mysqli_stmt_init($conn);

                    if($conn->query($sql) !== TRUE){
                        header("location: ../products.php?error=stmtfailed");
                        exit();
                    }

                    /*mysqli_stmt_bind_param($stmt, "ss", $userid, $bidprice);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);*/
                    header("location: ../products.php?error=none");
                    exit();
                    
                }
                else{
                    header("location: ../products.php?error=pricetoolow");
                    exit();

                }
            }

            /*else{
                header("location: ../products.php?error=samebidder");
                exit();

            }*/

        }

        /*else{
            header("location: ../products.php?error=invalidproductid");
                exit();
        }*/
    }
