<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  * {
    box-sizing: border-box;
  }

  .container {
    max-width: 400px;
    width: 100%;
    margin: 0 auto;
    position: relative;
  }

  #contact {
  background: #F9F9F9;
  padding: 10px;
  margin: 90px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  font-family: "Calibri", sans-serif;
  font-size: 14px;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 14px;
}

#contact h3 {
  text-align: center;
}

#contact textarea {
  height: 150px;
  font-family: "Calibri", sans-serif;
  font-size: 16px;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background-color: #ff7200;
  color: white;
  height: 30px;
  font-size: 15px;
  /*margin-left: 5%;*/
}

.contact {
  background-color: red;
}
</style>
</head>
<body>

<?php include 'topnav.php' ?>

<div class="container">  
  <form id="contact" method="post" action="triggeremail.php" onsubmit="alert('Your email')">
    <h3>Contact Form</h3><br>
    <input class="inputs" id="name" type="text" name="name" placeholder="Name *" maxlength="32"
                required><br><br>
    <input class="inputs" type="email" name="email" placeholder="Email ID *" required> <br> <br>
    <input class="inputs" name="phone" type="text" placeholder="Contact number (optional)"><br><br>
    <input class="inputs" name="subject" type="text" placeholder="Subject *" required><br><br>
    <textarea placeholder="Type your message here... *" required></textarea><br><br>
    <button id="submitbtn" type="submit"><span>Submit</span></button>
  </form>
</div>

</body>
</html>
