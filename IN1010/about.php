<?php
    if(!isset($_SESSION)) { // if session hasn't started yet, then start the session
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <script src="js/myscript.js" defer></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
      integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o="
      crossorigin="anonymous"
    />

    <title>About us | GymExpress</title>
  </head>
  <body>
    <header>
      <!-- *    Title: Humburger Menu
*    Author: Deltaty-Code
*    Date: 29 Dec 2020
*    Code version: <code version>
*    Availability: https://github.com/Deltaty-Code/Humburger-Menu -->

      <nav>
        <div class="logo">
          <h1><a href="index.html">GymExpress</a></h1>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About us</a></li>
          <li><a href="plans.php">Plans</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <li>
        <!--If the user is logged in, then add a "Log out" and "Booking" link to the navbar menu
*    Title: Lab 8 Sample solution
*    Author: City, University of London
*    Date: 2021
*    Code version: 
*    Availability: https://moodle.city.ac.uk/mod/resource/view.php?id=1846832

Changes: Added my own booking link -->
            <?php
            if (isset($_SESSION['username'])) {
              $_SESSION['appointment'] = "<li><a href='appointment.php'>Booking</a></li>";
                $_SESSION['logout'] = "<li><a href='logout.php'>Log Out</a></li>";
                echo $_SESSION['appointment']; // add to DOM
                echo $_SESSION['logout']; // add to DOM
                
            }
            ?>
        </li>

          <div class="closeMenu"><i class="fa fa-times"></i></div>
          <span class="icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
          </span>
        </ul>
      </nav>
    </header>
    <!-- About section -->
    <div>
      <h2>About our goal</h2>
      <br />
    </div>

    <div class="container">
      <div class="aboutinfo">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
        voluptatum voluptates vel, odit eveniet minus, repellat, similique
        excepturi quia enim vero. Autem molestias laboriosam a delectus
        temporibus earum, excepturi maiores?Lorem ipsum, dolor sit amet
        consectetur adipisicing elit.<br />
        <br />
        Reiciendis incidunt architecto non repudiandae numquam modi fugit harum
        minus, maxime necessitatibus consequatur ea at corrupti quaerat sequi
        similique totam libero consectetur, dolores facilis deserunt optio
        voluptates dignissimos. Nisi sint aperiam voluptates.<br />
        <br />
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod placeat ex
        velit blanditiis dolorem impedit qui, beatae voluptates quia excepturi
        at suscipit? Ipsum impedit quibusdam, ex consequuntur et veritatis
        adipisci necessitatibus nemo aspernatur officiis dolor vero provident
        eligendi soluta cum incidunt maiores sed. Unde cumque nobis quas quod,
        perspiciatis totam!
      </div>
      <div>
        <img src="images/fitness-bg.jpg" alt="weights" class="aboutimage" />
      </div>
    </div>

    <div class="container">
      <div>
        <img
          src="images/ropegirl.jpg"
          alt="girlropeexercise"
          class="aboutimage"
        />
      </div>
      <div class="aboutinfo">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
        voluptatum voluptates vel, odit eveniet minus, repellat, similique
        excepturi quia enim vero. Autem molestias laboriosam a delectus
        temporibus earum, excepturi maiores?Lorem ipsum, dolor sit amet
        consectetur adipisicing elit.<br />
        <br />
        Reiciendis incidunt architecto non repudiandae numquam modi fugit harum
        minus, maxime necessitatibus consequatur ea at corrupti quaerat sequi
        similique totam libero consectetur, dolores facilis deserunt optio
        voluptates dignissimos. Nisi sint aperiam voluptates.<br />
        <br />
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod placeat ex
        velit blanditiis dolorem impedit qui, beatae voluptates quia excepturi
        at suscipit? Ipsum impedit quibusdam, ex consequuntur et veritatis
        adipisci necessitatibus nemo aspernatur officiis dolor vero provident
        eligendi soluta cum incidunt maiores sed. Unde cumque nobis quas quod,
        perspiciatis totam!
      </div>
    </div>

                
    <!--    Image carousel

    /**    Title: HOW TO - Slideshow
    *    Author: w3schools
    *    Date: 
    *    Code version: <code version>
    *    Availability: https://www.w3schools.com/howto/howto_js_slideshow.asp
    */
    -->
   

    <!-- Slideshow container -->
    <div class="slideshow-container">
      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/carousel/image1.jpg" style="width: 100%" />
        <div class="captiontext">Lorem</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/carousel/image2.jpg" style="width: 100%" />
        <div class="captiontext">Lorem2</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/carousel/image3.jpg" style="width: 100%" />
        <div class="captiontext">Lorem</div>
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br />

    <!-- The dots/circles -->
    <div style="text-align: center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <!-- My footer with social media links at the bottom of every page-->
<footer>
      Copyright © 2020 Gym Express<br />
      <br />
      <b>Follow us on Social Media</b> <br />
      <section id="social-media">
        <br />
        <a href="https://www.facebook.com" target="_blank"
          ><img src="images/facebook.png" width="32px"
        /></a>
        <a href="https://www.instagram.com" target="_blank"
          ><img src="images/instagram.png" width="32px"
        /></a>
        <a href="https://twitter.com/home" target="_blank"
          ><img src="images/twitter.png" width="32px" /></a
        ><br />
        <p>
          DISCLAIMER: GymExpress is a fictitious brand created solely for the
          purpose of the assessment of IN1010 module at City, University of
          London, UK. All products and people associated with GymExpress are
          also fictitious. Any resemblance to real brands, products, or people
          is purely coincidental. Information provided about the product is also
          fictitious and should not be construed to be representative of actual
          products on the market in a similar product category
        </p>
      </section>
    </footer>
  </body>
</html>
