<?php

session_start();
$_SESSION['sinovice']= session_id();
include"back.php";
?>

<!DOCTYPE html>
<html lang="en">
<title>BuzzX</title>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="media production , event planning,social media, branding,web development, mobile development">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Poppins", sans-serif;}
.mySlides {display: none}
</style>
<body>

<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">BuzzX</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Details</a>
    <a href="tour.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Take a tour</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact us</a>
    <a href="loginsign.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Join us</a>
  </div>
</div>

<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Details</a>
   <a href="tour.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Take a tour</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact Us</a>
  <a href="loginsign.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Join us </a>
</div>
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <div class="mySlides w3-display-container w3-center">
    <img src="3enba.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="MUSLIM.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="SHAHYN.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="DJ DAVRY.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="ramy gamal.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="AMR.jpg" style="width:100%">
  </div>
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Music Mix Festival</h2>
    <p class="w3-opacity"><i>We love music</i></p>
    <p class="w3-justify">25 February, 2022 we are waiting for you in the best festival in Egypt this year Music Mix Festival, Hurry up and book your ticket now 3enba, Muslim, Shahyn, Ramy Gamal, Amr Gaber and Dj Davry 
        all of us are waiting for you. you can book regular ticket with 210 LE, Gold ticket with 360 LE or vip ticket with 500 LE
    </p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>3enba</p>
        <img src="3enba.jpg" class="w3-round w3-margin-bottom" alt="3enba" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Muslim</p>
        <img src="MUSLIM.jpg" class="w3-round w3-margin-bottom" alt="Muslim" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Shahyn</p>
        <img src="shahyn.jpg" class="w3-round w3-margin-bottom" alt="Shahyn" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Amr Gaber</p>
        <img src="AMR.jpg" class="w3-round w3-margin-bottom" alt="Amr Gaber" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Ramy Gamal</p>
        <img src="ramy gamal.jpg" class="w3-round w3-margin-bottom" alt="Ramy Gamal" style="width:60%">
      </div>
      <div class="w3-third">
        <p>DJ Davry</p>
        <img src="DJ DAVRY.jpg" class="w3-round w3-margin-bottom" alt="DJ Davry" style="width:60%">
      </div>
    </div>
  </div>
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Event data</h2>
      <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">Regular <span class="w3-tag w3-red w3-margin-left">210 LE</span></li>
        <li class="w3-padding">Gold <span class="w3-tag w3-red w3-margin-left">360 LE</span></li>
        <li class="w3-padding">Vip<span class="w3-tag w3-red w3-margin-left">500 LE</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="Logo.jpeg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Music Mix Festival</b></p>
            <p class="w3-opacity">FRI 25 Feb 2022</p>
            <p>3enba, Muslim, Shahyn, Ramy Gamal, Amr Gaber and DJ Davry</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <form method="post" action="back.php">
        <p><label><i class="fa fa-user"></i> Name</label></p>
        <input class="w3-input w3-border" type="text" placeholder="your name ?" required name="name">
        <p><label><i class="fa fa-mobile"></i> Phone number</label></p>
        <input class="w3-input w3-border" type="text" placeholder="your phone number?" required name="phone1">
        <p><label><i class="fa fa-mobile"></i> Another phone number</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Another phone number?" required name="phone2" >
        <p><label><i class="fa fa-user"></i> Email</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter you email please" required name="email">
        <p><label><i class="fa fa-address-card"></i> Address</label></p>
        <input class="w3-input w3-border" type="text" placeholder="your address?" required name="adr">
        <p><label><i class="fa fa-shopping-cart"></i> Regular tickets, 210 LE per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?"  name="regular">
        <p><label><i class="fa fa-shopping-cart"></i> Gold tickets, 360LE per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?" name="gold">
        <p><label><i class="fa fa-shopping-cart"></i> VIP tickets, 500 LE per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?" name="vip">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right" name="ticket" >Book <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </form>
      </div>
    </div>
  </div>
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">Contact Us</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Alexandria, Egypt<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: 01234506088<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: buzzx2020@gmail.com<br>
      </div>

      <div class="w3-col m6" >
        <form action="back.php" method="post" target="_self">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text"  id="name" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" id="email"  placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" id="message"  placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit"  name="contact">SEND</button>
        </form>
      </div>
       <!---------------------- message for contact--------------------------------------->
    <?php if(isset($_REQUEST['info'])) { ?>  
        <?php if($_REQUEST['info'] == "sent") {?>
              <div  class="w3-col m6" role="alert" style=" background-color: width:500px; font-weight:bold; text-align:center; ">
              We just received your message. <br>Thank you for sharing.<br> We will contact you as soon as possible  
                </div>
                <?php } ?>
    <?php }?>
        
    <!--------------------------------------------------------------------->
     </div>
   </div>
  </div>

<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <p class="w3-medium" style="font-family: cursive;"> > Powered by Marwan A Hassan <span style="color:black; font-weight:bold;"> & </span>Hazem Elhanash</p>
</footer>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>
