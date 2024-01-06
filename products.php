<?php
    include_once 'header.php';
    require_once 'includes/dbh.inc.php';
?>

<div class="products">
    <?php
    $result = $conn->query("SELECT * FROM products");
    while($row = $result->fetch_array()){
    ?>
    <form action="includes/bid.inc.php" method="post">
      <div class="product">
        <input type="hidden" name="productid" id="productid" value=<?php echo $row['productId']; ?>>
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['productImg']); ?>" alt=<?php echo $row['productTitle']; ?> >
        <h2><?php echo $row['productTitle']; ?></h2>
        <p><?php echo $row['productDescription']; ?></p>
        <p class="price">Price:<?php echo "$".$row['productPrice']; ?> </p>
        <input type="number" name="bid" id="bid">
        <p><?php echo $row['productTime']; ?></p>
        <input type="submit" name="submit" class="submitBtn" value="BID">
      </div>
    </form>
    
    <script>

        var countDownDate = new Date(<?php echo $row['productTime']; ?>).getTime();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        
        

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = hours + "h "
            + minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }

        }, 1000)
    </script>
    
    <?php }?>

</div>




<?php
    include_once 'footer.php';
?>