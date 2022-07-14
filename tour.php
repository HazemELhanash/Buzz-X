<?php

include"back.php";

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>BuzzX-Tour</title>
    </head>
    <body>
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card">
              <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
              <a href="index.php" class="w3-bar-item w3-button w3-padding-large">BuzzX</a>
              <a href="index.php#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Details</a>
              <a href="" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Take a tour</a>
              <a href="index.php#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact us</a>
              <a href="loginsign.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Join us</a>
            </div>
          </div>
          <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
            <a href="index.php#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Details</a>
            <a href="" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Take a tour</a>
            <a href="index.php#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact Us</a>
            <a href="loginsign.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Join us </a>
          </div>
            <!--==================== HOME ====================-->

            <!---------------------- message for signing--------------------------------------->
    <?php if(isset($_REQUEST['info'])) { ?>  
        <?php if($_REQUEST['info'] == "inserted") {?>
              <div class="alert alert-success" class="home__title" role="alert" style="margin-top:50px; text-align:center;  ">
              You have just joined us so let's take a tour of what Buzz<span style="font-size: 30px; color:red; padding:10px;">X</span> has to offer  
                </div>
                <?php } ?>
    <?php }?>
    <!--------------------------------------------------------------------->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="med2.jpg" alt="" class="home__img">

                    <div class="home__data">  
                        <h1 class="home__title">
                            MEDIA PRODUCTION
                        </h1>
                        <p class="home__description">
                            Grow your business with our creative and efficient media production team. We create animation videos, high quality live videos that can be 
                            displayed as a TV Ad., as well as various types of media which we work on to fit perfectly with your needs.
                        </p>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/MrBuzzX/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://instagram.com/buzzx_agency?utm_medium=copy_link" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="soc1.webp" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            SOCIAL MEDIA
                        </h2>

                        <p class="about__description">
                            Promote your business and services on all social media platforms with the least cost and the most profit; also track your 
company’s success through built-in data analytic tools, and follow up after campaigns we also provide a new target 
audience through Public figures and influencers all over Egypt
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Facebook ads
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Facebook management
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Twitter ads 
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Twittter management
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Instagram
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Linked in
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Snapchat
                            </p>
                        </div>

                    </div>
                </div>
            </section>
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="bran1.jpg" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            BRANDING
                        </h1>
                        <p class="home__description">
                            Every project we touch requires strategic thinking and planning. Experience, data and insight should inform your event marketing 
decisions. We take that one step further, by using goals and metrics, event and activation strategies, performance measurement, 
improvement plans and event sponsor strategy and sales to create an impactful experience that helps you surpass your 
business needs and event expectations.

                        </p>
                    </div>
                </div>
            </section>
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="pos1.jfif" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            IDENTITY & <br>PACKAGING
                        </h2>

                        <p class="about__description">
                            Your business identity is what your customers think & say about your company, depending on your type of business 
production that matches the identity of customers and potential customers. Regarding the logo BUZZX for E-marketing knows that your logo is the most important element in conveying & creating the essence of your 
company’s brand identity, that’s why we take a good care of designing, creating and publishing it in a perfect way. 
Your identity and image are handled by professionals who know well that they are dealing with a very sensitive part 
of your business. BUZZX for E-marketing is your right choice.
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Flyres
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Posters
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Banners
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Cards
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Logos
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Notes
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Agendas
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Boxes (rigid,paperboard and etc..)
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Stickers
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Bags or sacks
                            </p>
                        </div>

                    </div>
                </div>
            </section>
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="mob1.jpg" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            MOBILE DEVELOPMENT
                        </h1>
                        <p class="home__description">
                            Mobile apps increase brand awareness and make you reachable; since 2.6 billion people now have high 
powered mobile devices used to install apps.
                        </p>
                    </div>
                </div>
            </section>
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="web1.jpg" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            WEB DEVELOPMENT
                        </h2>

                        <p class="about__description">
                            BUZZX for E-Marketing web development team designs websites from the inception of the 
                            layout, colors, graphics, fonts till the content that works with the design to enhance the message 
                            of your site through visuals and text; in a way that remain the reader on the site. BUZZX for E-Marketing web design professionals create magnificent user interface design for satisfying web 
                            experience; we use critical design planning and analysis as well as paying attention to the 
                            individual client satisfaction. We create simple user-friendly websites that appears as a harmonic 
                            symphony to the end user.
                            
                        </p>

                    </div>
                </div>
            </section>
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="seo1.jpg" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            SEO
                        </h1>
                        <p class="home__description">
                            Search Engines Optimization is an organic tool that increases the visibility of your business on 
                            any platform in search engine results. Your business will go viral in no time and with no cost, 
                            BUZZX for E-marketing solutions will put you on the right track
                        </p>
                    </div>
                </div>
            </section>
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="par1.jfif" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            EVENTS <br>MANAGEMENT
                        </h2>

                        <p class="about__description">
                            Our team offers full service cutting-edge AV services, production and rentals. Together we will craft a 
concept, scenic design and the element of theater for your event. We'll be there every step of the way 
with our exceptional support and service.
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Stage supplements ( Sound systems – Monitors – Lights .. etc)
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Creating a security system prevent the customer from commercial fraud
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Electronic gates
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Tickets with QR code or access code cards
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                A suitable places for your Event or Concert
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Ticket booths
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Sponsors
                            </p>
                        </div>

                    </div>
                </div>
            </section>
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
        <script>
            // Automatic Slideshow - change image every 4 seconds
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
            
            // Used to toggle the menu on small screens when clicking on the menu button
            function myFunction() {
              var x = document.getElementById("navDemo");
              if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
              } else { 
                x.className = x.className.replace(" w3-show", "");
              }
            }
            
            // When the user clicks anywhere outside of the modal, close it
            var modal = document.getElementById('ticketModal');
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            </script>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    </body>
</html>
