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
  <?php
require_once "connectdb.php";
 ?>
  <body>
    <header>
      <!-- *    Title: Humburger Menu
*    Author: Deltaty-Code
*    Date: 29 Dec 2020
*    Code version: <code version>
*    Availability: https://github.com/Deltaty-Code/Humburger-Menu -->

<nav>
  <div class="logo">
    <h1><a href="index.php">GymExpress</a></h1>
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


    <!--/* Pricing table*/

*    Title: Pricing table
*    Author: DarkCode
*    Date: 7 May 2020
*    Code version: 
*    Availability: https://www.youtube.com/watch?v=SWyuQMCTxCQ
-->

    <div class="pricing-table">
        <div class="pricing-card">
          <h3 class="pricing-card-header">Standard</h3>
          <div class="price"><sup>£</sup>10<span>/MO</span></div>
          <ul>
            <li><strong>Access to 3 Gyms</strong> </li>
            <li><strong>Personalised Workout routines</strong></li>
            <li><strong>One free class a week</strong></li>
       
          </ul>
          <a href="contact.php" class="order-btn">Purchase</a>
        </div>
    
        <div class="pricing-card">
          <h3 class="pricing-card-header">Ultimate</h3>
          <div class="price"><sup>£</sup>50<span>/MO</span></div>
          <ul>
            <li><strong>Access to any gym</strong></li>
            <li><strong>Access to own personal trainer</strong> </li>
            <li><strong>Personalised Workout Routines</strong> </li>
            <li><strong>Daily giveaways and offers</strong> </li>
            <li><strong>Unlimited access to classes </strong> </li>
          </ul>
          <a href="contact.php" class="order-btn">Purchase</a>
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
