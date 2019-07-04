<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	/*@import url(https://fonts.googleapis.com/css?family="Roboto":400,300,600,400italic);*/
	* {
		font-family: "Calibri", sans-serif;
		box-sizing: border-box;
	}

.logo {
  display: block;
  margin-left: 45%;
  margin-right: 50%;
  width: 40%;
}

/* CSS code for topnav - Start */
ul {
  list-style-type: none;
  margin: 0;
  overflow: hidden;
  background-color: #ff7200 ;
  text-transform: uppercase;
  height: 50px;
}

a::first-letter {
	font-size: 120%;
}

li {
  float: left;
}

li a, .servicesBtn, .aboutBtn {
  display: block;
  color: white;
  font-weight: bold;
  text-align: center;
  padding: 13px 16px;
  text-decoration: none;
}

li a:hover, .services:hover .servicesBtn,
.about:hover .aboutBtn {
  background-color: #a1a1a1;
  color: white;
}

li.services,
li.about {
  display: inline-block;
}

.services-content,
.about-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.services-content a,
.about-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.services-content a:hover,
.about-content a:hover {background-color: #ff7200;}

.services:hover .services-content,
.about:hover .about-content {
  display: block;
}

.searchbtn {
	float: right;
	padding: 13px 16px;
}
/* CSS for topnav - Ends */

</style>
</head>
<body>
  <div class="logo">
    <a href="home.php">
      <img src="images/logo.png" alt="Logo" style="width: 15%; height: 15%;">
    </a>
  </div>

<ul>
	<li><a href="home.php">Home</a></li>
	<li><a href="#">Products</a></li>
	<li><a href="#">Accessories</a></li>
  <li class="services">
    <a href="javascript:void(0)" class="servicesBtn">Services</a>
    <div class="services-content">
    	<a href="#">Dealers</a>
      	<a href="#">Charging<br>Station</a>
    </div>
  </li>
  <li><a href="#">News</a></li>
  <li class="about">
    <a href="javascript:void(0)" class="aboutBtn">About</a>
    <div class="about-content">
    	<a href="#">Workforce</a>
      	<a href="#">Vision & Mission</a>
    </div>
  </li>
  <li><a href="#whoarewe">Donate</a></li>
  <li class="searchbtn"><input type="text" name="navsearch" id="navsearch" placeholder="Search..."></li>
</ul>

</body>
</html>
