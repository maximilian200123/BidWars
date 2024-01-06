<?php
    include_once 'header.php';
?>
  
<div class="products">
      <!-- Product 1 -->
      <div class="product">
        <img src="https://static.fnac-static.com/multimedia/Images/FR/NR/05/41/aa/11157765/1507-1/tsp20191119153109/Coffret-Game-of-Thrones-L-integrale-Edition-Collector-Blu-ray.jpg" alt="Game of Thrones Collector's Edition">
        <h2>GOT Collector's Edition</h2>
        <p>La série phénomène HBO adaptée des romans de George R.R. Martin, Game of Thrones, détient le record de la série la plus récompensée de l'histoire de la télévision.
           Ce coffret collector, conçu sur mesure et en édition limitée, comprend les 73 épisodes épiques des huit saisons. 
           Cette intégrale inclut également 15 heures de séquences bonus et de scènes coupées inédites.</p>
        <p class="price">Starting Price: $1,500</p>
        <button onclick="showAlert()">Bid</button>
      </div>

      <!-- Product 2 -->
      <div class="product">
        <img src="https://www.montereytouringvehicles.com/wp-content/uploads/2020/09/ford-mustang-red-1965-monterey-ca-monterey-touring-vehicles-scaled.jpg" alt="1965 Ford Mustang Convertible(Red)">
        <h2>1965 Ford Mustang Convertible (Red)</h2>
        <p>As a family owned and run business, we love a good love story. Especially when it involves a family loving a classic car for over 40 years.
           Such is the case with our 1965 Mustang convertible, which has lived a charmed life with the same family here in California.
           This Mustang oozes originality, but also benefits from tasteful upgrades such as a Ford V8 engine, power steering and Bluetooth audio.
            It is now ready for you to cruise the coast in style, so put down the top, crank up the tunes and help us add to its history by renting the car, today.</p>
        <p class="price">Starting Price: $30,000</p>
        <p id="time_left"></p>
        <button onclick="showAlert()">Bid</button>
      </div>

      <!-- Product 3 -->
      <div class="product">
        <img src="https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6InJ4OWlhemI0c3BjMDMtQVVUT1ZJVFJPIiwidyI6W3siZm4iOiJxN216NTNiaWZwemstQVVUT1ZJVFJPIiwicyI6IjE2IiwicCI6IjEwLC0xMCIsImEiOiIwIn1dfQ.vgwIJT7hvFXI7nWSgOeXswKSazovg8esXw6NtuW5a_0/image;s=1080x720" alt="Harley-Davidson Custom">
        <h2>Harley-Davidson Custom</h2>
        <p>Bourchet Blackjack Custom
            Fabricatie - 2004
            Cai Putere - 115
            Cm ³ - 1.900
            Model - Chopper
            Kilometraj - 1.400
            Motor pe ambele parti S & S
            Chopper Favut pe Comanda de Catre cei de la ORANGE COUNTY din SUA
            Revizie recenta la Harley Davidson schimbat :
            -alternator de oras (ptr o incarcare rapida)
            -oglinzi
            -manere
            -ambele Curele
            -ambele Anvelope</p>
        <p class="price">Starting Price: $40,000</p>
        <button onclick="showAlert()">Bid</button>
      </div>

      <!-- Product 4 -->
      <div class="product">
        <img src="https://d5wt70d4gnm1t.cloudfront.net/media/a-s/artworks/eleanor-aldrich/70265-709078825834/eleanor-aldrich-sunglasses-and-a-veil-after-sargent-800x800.jpg" alt="Collapse (After 'The Kiss')">
        <h2>Irene M amiye, Collapse (After "The Kiss") , 2017</h2>
        <p>French-born and New York-based artist Mamiye is best known for her critical employment of advanced digital imaging techniques, and that penchant for up-ending the status quo is on full display in her Collapse series, which explore satirical points of rupture in the state-sanctioned patriarchal capitalism.
           This image of two policemen making out turns Klimt's romantic, covetous masterwork on its head, imbuing institutional critique with a salacious, yet familiar, flavor.</p>
        <p class="price">Starting Price: $3,659</p>
        <button onclick="showAlert()">Bid</button>
      </div>

      <!-- Product 5 -->
      <div class="product">
        <img src="https://m.media-amazon.com/images/I/41WhtiN1iaL.jpg" alt="Led Zeppelin: The Definitive Collection">
        <h2>Led Zeppelin: The Definitive Collection</h2>
        <p>LED ZEPPELIN Ten Years Gone (Very rare limited edition US box set, featuring all the studio albums along with the live release 'The Song Remains The Same'. 
          Each album is housed in their own jewel case with its respective picture sleeve, with a fold-out concert poster, live gig photos & a complete set of eight unused tickets for the cancelled concert at Chicago Stadium on November 13th 1980, within a custom printed envelope.
           The picture box measures 6" x 5" x 5½" in sizes and shows some general wear and still with the replica ticket attached, whilst all contents reamin in a fantastic condition.
            An oustanding copy of this now hard to find release).</p>
        <p class="price">Starting Price: $319.99</p>
        <button onclick="showAlert()">Bid</button>
      </div>
</div>

<div class="text_whitespace">
  <p><b>*Products are for represantation purposes only, the actual products might or might not be available at the moment so please take this into account!</p>
</div>


<!--script timer-->
<script>

var countDownDate = new Date("May 30, 2023 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("time_left").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time_left").innerHTML = "EXPIRED";
  }
}, 1000);

  function showAlert() {
    alert ("You need to be logged in!");
  }
  </script>

<?php
    include_once 'footer.php';
?>