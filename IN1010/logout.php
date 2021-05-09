<?php //php file to allow user to logout
/* ––
*    Title: Lab 9 Sample solution
*    Author: City, University of London
*    Date: 2021
*    Code version: 
*    Availability: https://moodle.city.ac.uk/mod/resource/view.php?id=1862892
*/
    session_start();
    unset($_SESSION['username']); // disable the username session

    // end the session
    session_destroy();
   header("Location: contact.php");
 exit;// redirect back to the form
?>