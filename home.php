<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">

  <style>

    * {
      box-sizing: border-box;
    }
    /* CSS code for topnav - Start */

    ul {
      list-style-type: none;
      margin: 0;
      overflow: hidden;
      text-transform: uppercase;
      height: 50px;
      font-family: "Calibri", sans-serif;
    }

    a::first-letter {
      font-size: 120%;
    }

    li {
      float: right;
    }

    li a,
    .servicesBtn,
    .aboutBtn {
      display: block;
      color: white;
      font-weight: bold;
      text-align: center;
      padding: 13px 16px;
      text-decoration: none;
    }

    li a:hover,
    .services:hover .servicesBtn,
    .about:hover .aboutBtn {
      /*background-color: #a1a1a1;*/
      text-decoration: underline;
      color: white;
    }

    li.services,
    li.about {
      display: inline-block;
    }

    .services-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .services-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .services-content a:hover {
      background-color: #c0c0c0;
    }

    .services:hover .services-content {
      display: block;
    }

    /* CSS for topnav - Ends */

    .hero-image {
      background-image: url("images/comingsoon.jpg");
      /*background-color: #cccccc;*/
      height: 750px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .hero-text {
      text-align: center;
      position: relative;
      top: 32%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }

    .column {
      float: left;
      padding: 5px;
    }

    /* Clearfix (clear floats) */
    .row::after {
      content: "";
      clear: both;
      display: table;
      width: 33.33%;
      height: auto;
    }

    .rowh2 {
      text-align: center;
    }

    .highLeft {
      float: left;
      width: 50%;
      padding: 5px;
      font-size: 20px;
    }

    .highlightsLeft::after {
      content: "";
      clear: both;
      display: table;
    }

    .highRight {
      float: right;
      width: 50%;
      padding: 5px;
      font-size: 20px;
    }

    .highlightsRight::after {
      content: "";
      clear: both;
      display: table;
    }

    /* Timer - customized */
    .counts {
      float: left;
      border-right: 2px solid white;
      /*padding: 1%;*/
      width: 120px;
      height: 120px;
      font-family: 'Acme', sans-serif;
    }

    .counts2 {
      float: left;
      /*padding: 1%;*/
      width: 120px;
      height: 120px;
      font-family: 'Acme', sans-serif;
    }
  </style>
</head>

<body>
  <!-- <?php include 'topnav.php';?> -->

  <div class="hero-image">
    <div class="topnavigation">
      <br>
      <ul>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="donate.php">Donate</a></li>
        <li class="services">
          <a href="javascript:void(0)" class="servicesBtn">Services</a>
          <div class="services-content">
            <a href="#">Dealers</a>
            <a href="#">Charging<br>Station</a>
          </div>
        </li>
        <li>
          <a href="countdown.php">Products</a>
        </li>
        <li class="about">
          <a href="about.php" class="aboutBtn">About Us</a>
        </li>
        <li><a href="home.php">Home</a></li>
      </ul>
    </div>
    <div class="hero-text">
      <h1 id="coming" style="font-size:70px; font-family: 'Acme', sans-serif; color: #c4cace">
        We are Coming Soon...</h1>
      <div class="timer" style="padding-left: 31.5%;">
        <div class="counts" style="font-size: 23px">
          <p id="days"></p>
          <p>Days</p>
        </div>
        <div class="counts" style="font-size: 23px">
          <p id="hours"></p>
          <p>Hours</p>
        </div>
        <div class="counts" style="font-size: 23px">
          <p id="mins"></p>
          <p>Minutes</p>
        </div>
        <div class="counts2" style="font-size: 23px">
          <p id="secs"></p>
          <p>Seconds</p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="highlightsLeft">
    <div class="highLeft">
      <p>This product was unveiled in 2019.</p>
    </div>
    <div class="highLeft">
      <img src="images/highlight/high1.jpg" alt="Image 1" style="float: right;" />
    </div>
  </div>

  <hr>

  <div class="highlightsRight">
    <div class="highRight">
      <p>Our team of experts have been working on this since 2016.</p>
    </div>
    <div class="highRight">
      <img src="images/highlight/high2.jpg" alt="Image 2" style="float: left;" />
    </div>
  </div>

  <hr>

  <div class="highlightsLeft">
    <div class="highLeft">
      <p>This has best-in-class features.</p>
    </div>
    <div class="highLeft">
      <img src="images/highlight/high3.jpg" alt="Image 3" style="float: right;" />
    </div>
  </div>

  <hr>

  <div class="highlightsRight">
    <div class="highRight">
      <p>This works with both IC & EV engines.</p>
    </div>
    <div class="highRight">
      <img src="images/highlight/high4.jpg" alt="Image 4" style="float: left;" />
    </div>
  </div>

  <hr>

  <div class="highlightsLeft">
    <div class="highLeft">
      <p>Product is set to hit the markets in 2 months.</p>
    </div>
    <div class="highLeft">
      <img src="images/highlight/high5.jpg" alt="Image 5" style="float: right;" />
    </div>
  </div>

  <hr><br>
  <div class="row">
    <h2 class="rowh2">Our Sponsors</h2>
    <div class="column">
      <img src="images/sl2.png" alt="Logo 2">
    </div>
    <div class="column">
      <img src="images/sl3.jpg" alt="Logo 3">
    </div>
    <div class="column">
      <img src="images/sl1.png" alt="Logo 1">
    </div>
  </div>

  <hr>
  <br>
  <?php include 'footer.php';?>

  <script>
    // Set the date we're counting down to
    var countDownDate = new Date("May 3, 2020 00:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) /
        (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (
        1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("days").innerHTML = days;
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("mins").innerHTML = minutes;
      document.getElementById("secs").innerHTML = seconds;

      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdays").innerHTML =
          "EXPIRED";
      }
    }, 1000);
  </script>

</body>

</html>