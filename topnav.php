<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /*@import url(https://fonts.googleapis.com/css?family="Roboto":400,300,600,400italic);*/
        * {
            /*font-family: "Calibri", sans-serif;*/
            box-sizing: border-box;
            margin: 0px;
        }

        #companyName {
            text-decoration: none;
            font-family: "Engravers Gothic", sans-serif;
            font-size: 16px;
        }

        #Abbreviation {
            font-size: 20px;
            font-family: "Calibri", sans-serif;
            /*font-weight: bold;*/
        }

        .logo {
            display: block;
            margin-left: 35%;
            margin-right: 50%;
            width: 40%;
            font-family: "Calibri", sans-serif;
        }

        /* CSS code for topnav - Start */
        ul {
            list-style-type: none;
            overflow: hidden;
            background-color: #ff7200;
            text-transform: uppercase;
            height: 38px;
            font-family: "Calibri", sans-serif;
            position: relative;
            margin: 0;
        }

        a::first-letter {
            /*font-size: 120%;*/
        }

        li {
            float: right;
            height: inherit;
            align-content: center;
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
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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
        .about-content a:hover {
            background-color: #ff7200;
        }

        .services:hover .services-content,
        .about:hover .about-content {
            display: block;
        }

        .searchbtn {
            float: right;
            /*padding-left: 25px;
            padding-top: 15px;*/
            padding: 11px;
        }
        /* CSS for topnav - Ends */
    </style>
</head>
<body>
	<div class="topbar">
    <ul>
        <li class="searchbtn"><input type="text" name="navsearch" id="navsearch"
                placeholder="Search..."></li>
        <li class="contact"><a href="contact.php">Contact Us</a></li>
		<li class="careers"><a href="#">Careers</a></li>
        <li class="donate"><a href="donate.php">Donate</a></li>
        <li class="services">
            <a href="javascript:void(0)" class="servicesBtn">Services</a>
            <div class="services-content">
                <a href="#">Dealers</a>
                <a href="#">Charging<br>Station</a>
            </div>
        </li>
        <li class="products">
            <a href="#">Products</a>
        </li>
		<li class="about">
          <a href="about.php" class="aboutBtn">About Us</a>
        </li>
        <li class="home"><a href="home.php">Home</a></li>
        <li class="logo" style="float: left;">
        	<a href="home.php">
        		<img src="images/logos/MMC_Logo_Razor.jpg" alt="Logo" style="width: 30px; height: 30px;" />
        	</a>
        </li>
    </ul>

	</div>

</body>

</html>