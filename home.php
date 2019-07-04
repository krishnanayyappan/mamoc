<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  /* Slideshow container - start */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2s;
  animation-name: fade;
  animation-duration: 2s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 12px}
}
/* Slideshow container - end */


.column {
  float: left;
  /*width: 33.33%;
  height: auto;*/
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

.rowh2{
  text-align: center;
}

.highLeft {
  float: left;
  width: 50%;
  padding: 5px;
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
}

.highlightsRight::after {
  content: "";
  clear: both;
  display: table;
}

.footer {
  background-color: #a1a1a1;
  padding: 10px;
  font-size: 12px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

/* Social media styling start */
/* Style all font awesome icons */
.fa {
  padding: 10px;
  font-size: 30px;
  /*width: auto;*/
  /*height: auto;*/
  text-align: center;
  text-decoration: none;
  /*border-radius: 50%;*/
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.85;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
  width: 50px;
}

/* Twitter */
.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: #d6249f;
  background: radial-gradient(circle at 30% 107%, 
    #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
  color: white;
}

.fa-linkedin {
  background: #0077FC;
  color: white;
}
/* Social media styling end */
</style>
</head>
<body>
  <?php include 'topnav.php';?>

  <div class="slideshow-container">

<div class="mySlides fade">
  <!-- <div class="numbertext">1 / 3</div> -->
  <img src="images/m1.jpg" alt="m1" style="width: 100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">2 / 3</div> -->
  <img src="images/m2.jpg" alt="m2" style="width: 100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">3 / 3</div> -->
  <img src="images/m3.jpg" alt="m3" style="width: 100%;">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<br><br>

<div class="highlightsLeft">
  <div class="highLeft">
  <p>This product was unveiled in 2019.</p>
</div>
<div class="highLeft">
  <img src="images/highlight/high1.jpg" alt="Image 1" style="float: right;"/>
</div>
</div>

<hr>

<div class="highlightsRight">
  <div class="highRight">
  <p>Our team of experts have been working on this since 2016.</p>
</div>
<div class="highRight">
  <img src="images/highlight/high2.jpg" alt="Image 2" style="float: left;"/>
</div>
</div>

<hr>

<div class="highlightsLeft">
  <div class="highLeft">
  <p>This has best-in-class features.</p>
</div>
<div class="highLeft">
  <img src="images/highlight/high3.jpg" alt="Image 3" style="float: right;"/>
</div>
</div>

<hr>

<div class="highlightsRight">
  <div class="highRight">
  <p>This works with both IC & EV engines.</p>
</div>
<div class="highRight">
  <img src="images/highlight/high4.jpg" alt="Image 4" style="float: left;"/>
</div>
</div>

<hr>

<div class="highlightsLeft">
  <div class="highLeft">
  <p>Product is set to hit the markets in 2 months.</p>
</div>
<div class="highLeft">
  <img src="images/highlight/high5.jpg" alt="Image 5" style="float: right;"/>
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

<div class="socialmedia">
  <h2>Follow Us</h2>
  <a href="https://fb.com" class="fa fa-facebook" target="_blank"></a>
  <a href="https://twitter.com" class="fa fa-twitter" target="_blank"></a>
  <a href="https://instagram.com" class="fa fa-instagram" target="_blank"></a>
  <a href="https://linkedin.com" class="fa fa-linkedin" target="_blank"></a>
</div>

<br>
<div class="footer" >
  <p id="copyright">&copy; 2018-2019 All rights reserved</p>
  <a href="#">Privacy Policy | </a>
  <a href="#">Disclaimer | </a>
  <a href="#">Cookie Policy</a>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3500); // Change image every 3.5 seconds
}
</script>

</body>
</html>
