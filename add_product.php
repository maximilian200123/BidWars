<?php
    include_once 'header.php';
    include_once 'includes/dbh.inc.php';
?>

<div class="prodFrm">
        <form action="includes/create.inc.php" method="post" enctype="multipart/form-data" class="form">
            <h1 class="title">Add your product</h1>
        
            <div class="inputContainer">
                <input type="file"  placeholder="a" name="image" id="image" required>
                <label for="">Pick an image</label>
            </div>
        
            <div class="inputContainer">
                <input type="text" class="input" placeholder="a" name="title" id="title" required>
                <label for="" class="label">Title of product</label>
            </div>
        
            <div class="inputContainer">
                <input type="text" class="input" placeholder="a" name="description" id="description" required>
                <label for="" class="label">Description</label>
            </div>
        
            <div class="inputContainer">
                <input type="number" class="input" placeholder="a" name="startprice" id="startprice" required>
                <label for="" class="label">Satrting price</label>
            </div>
            <div class="inputContainer">
                <input type="number" class="input" placeholder="a" name="time" id="time" required>
                <label for="" class="label">How long you want the auction to last</label>
            </div>
            <input type="submit" class="submitBtn" name="submit" value="Add product">
        </form>
</div>

<?php
    include_once 'footer.php';
?>