<?php

if(isset($_POST["submit"])){

    $title = $_POST["title"];
    $description = $_POST["description"];
    $startprice = $_POST["startprice"];
    $time = $_POST["time"];
    $prodImg;

    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $prodImg = addslashes(file_get_contents($image)); 
            // Insert image content into database 
            //$insert = $db->query("INSERT into products (productImg) VALUES ('$imgContent')"); 
             
            /*if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }
            else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } */
    }
}
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($prodImg, $title, $description, $startprice, $time) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    createProd($conn, $prodImg, $title, $description, $startprice, $time);

}
else{
    header("location: ../add_product.php");
    exit();
}