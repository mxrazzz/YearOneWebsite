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
    <script src="js/form_validation.js" defer></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
      integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o="
      crossorigin="anonymous"/>
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

    <!--  Grid layout for information regarding the business
      icons taken from fontawesome.com-->

    <h2>Contact us here!</h2>
    <div class="container3">
      <div class="contactinfo">
        <div class="box">
          <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
          <div class="text">
            <h3>Address</h3>
            <p>1234 Somewhere Road,London</p>
            <br />
          </div>
        </div>
        <div class="box">
          <div class="icon"><i class="fas fa-phone-alt"></i></div>
          <div class="text">
            <h3>Phone</h3>
            <p>+44 020 020 0200</p>
            <br />
          </div>
        </div>
        <div class="box">
          <div class="icon"><i class="fas fa-at"></i></div>
          <div class="text">
            <h3>E-Mail</h3>
            <p>info@gymexpress.com</p>
          </div>
        </div>
      </div>
      <div class="openingHours">
        <h3>Opening hours</h3>
        <br />
        <p>Monday - 09:00 - 21:00</p>
        <br />
        <p>Tuesday - 09:00 - 21:00</p>
        <br />
        <p>Wednesday - 09:00 - 21:00</p>
        <br />
        <p>Thursday - 09:00 - 21:00</p>
        <br />
        <p>Friday - 09:00 - 21:00</p>
        <br />
        <p>Saturday - 09:00 - 20:00</p>
        <br />
        <p>Sunday - 09:00 -17:00</p>
        <br />
      </div>
    </div>

    <!--/* register form */
/*/* ––
*    Title: Lab 6 Sample solution
*    Author: City, University of London
*    Date: 2021
*    Code version: 
*    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172
 */-->
    <div class="container4">
      <div>
        <form method="post" action="register.php" id="register-form">
          <fieldset class="fields" id="fieldset1">
            <h2>Register</h2> <br>
            <p>Please fill in this form to create an account:</p> <br>
            <hr>
            <div class="input-type-1">
                <!-- Enter username -->
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="username" id="username" maxlength="20">
                <small id="usernameTag">Error Message</small> <!-- error message for username if there is an error in the input -->
            </div>
            <div class="input-type-1">
                <!-- Enter first and last names -->
                <label for="firstname"><b>First name</b></label>
                <input type="text" placeholder="Enter your first name" name="firstname" maxlength="30" id="firstname">
                <small id="firstnameTag">Error Message</small> <!-- error message for first name if there is an error in the input -->
            </div>
            <div class="input-type-1">
                <label for="lastname"><b>Last name</b></label>
                <input type="text" placeholder="Enter your last name" name="lastname" maxlength="30" id="lastname">
                <small id="lastnameTag">Error Message</small> <!-- error message for last name if there is an error in the input -->
            </div>
            <div class="input-type-1">
                <!-- Enter phone number -->
                <label for="phone"><b>Mobile phone number</b></label>
                <input type="number" placeholder="Enter your mobile phone number" name="phone" maxlength="11" id="phone">
                <small id="mobileTag">Error Message</small> <!-- error message for mobile phone number if there is an error in the input -->
            </div>
            <div class="input-type-1">
                <!-- Enter email address -->
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter email" name="email" id="email" maxlength="40">
                <small id="emailTag">Error Message</small> <!-- error message for email address if there is an error in the input -->
            </div>
            <div class="input-type-1">
                <!-- Enter password -->
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter password" name="psw" id="psw" maxlength="20">
                <small id="pwordTag">Error Message</small> <!-- error message for password if there is an error in the input -->
            </div>
            <div class="input-type-1">
                <!-- Confirm password -->
                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat password" name="psw-repeat" id="psw-repeat" maxlength="20">
                <small id="confirmTag">Error Message</small> <!-- error message for confirmed password if there is an error in the input -->
            </div>
            <div class="input-type-1">
                <button type="submit" value="Submit" class="registerbtn" id="regBtn">Register</button>
            </div>
        </fieldset>
    </div>
</form>
<!-- Login form
*    Title: Lab 6 Sample solution
*    Author: City, University of London
*    Date: 2021
*    Code version: 
*    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172
-->

<form method="post" action="login.php" id="login-form">
                <div>
                  <fieldset class="fields" id="fieldset2">
                    <h2>Login</h2> <br>
                    <p>Please fill in this form to log into your account:</p> <br>
                    <hr>

                    <div class='input-type-1'>
                        <label for="username"><b>Username</b></label>
                        <input type='text' placeholder='Username' name='login_username' id='login_username'>
                        <small id='loginUsernameTag'>Error Message</small>
                    </div>

                    <div class='input-type-1'>
                        <label for="psw"><b>Password</b></label>
                        <input type='password' placeholder='Password' name='login_pwd' id='login_pwd'>
                        <small id='loginPasswordTag'>Error Message</small>
                    </div>

                    <div class='input-type-1'>
                        <button type="submit"  class="loginbtn" id="logBtn">Login</button>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>
      </div>
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
