<?php //php file to allow user to register account
/*/* ––
*    Title: Lab 9 Sample solution
*    Author: City, University of London
*    Date: 2021
*    Code version: 
*    Availability: hhttps://moodle.city.ac.uk/mod/resource/view.php?id=1862892

Usages: Connect to the database and write registration information to it
Changes: Adapted it to connect to my database, and also makes data safe using real_escape_string*/

if(!isset($_SESSION)) {
        session_start(); // start the session if it still does not exist
    }

$db = new mysqli('smcse-stuproj00.city.ac.uk' , 'adbs944', '200020560', 'adbs944');
if ($db->connect_errno) {
    printf("Connection failed: %s\n", $conn->connect_error);
    exit();
} 
else {

    // declare the variables for registration and assign values to these variables from the data entered by the user in the fields
        // real_escape_string makes data safe when sending a query to mySQL
    $username = $db->real_escape_string($_POST['username']);
    $firstName = $db->real_escape_string($_POST['firstname']);
    $lastName = $db->real_escape_string($_POST['lastname']);
    $mobile = $db->real_escape_string($_POST['phone']);
    $email = $db->real_escape_string($_POST['email']);
    $password = $db->real_escape_string($_POST['psw']);

    $hashed_pword = md5($password); // encrypt the given password

    //queries the usernames in the database
    $query_username = "SELECT username FROM UserDetails WHERE username = '$username'";
    $reg_username = mysqli_query($db, $query_username);

    $query_email = "SELECT email FROM UserDetails WHERE email = '$email'";
    $reg_email = mysqli_query($db, $query_email);



    //if username exists, error pops up and redirects to register page
    if(mysqli_num_rows($reg_username) > 0){
        echo "<script language= 'javascript'>
        alert('Username already exists. Please choose another one.');
        window.location.href= 'https://smcse.city.ac.uk/student/adbs944/IN1010/contact.php';
        </script>";
     }

     //if email has already been used, gives error and redirects to register page
     elseif(mysqli_num_rows($reg_email) > 0){ 
        echo "<script language= 'javascript'>
        alert('Email already exists. Use a different email address.');
        window.location.href= 'https://smcse.city.ac.uk/student/adbs944/IN1010/contact.php';
        </script>";
     }
     else{

        //writes to the database
         mysqli_query($db, "INSERT INTO UserDetails (username, fName, lName, mobile, email, password) 
         VALUES ('$username', '$firstName', '$lastName', '$mobile', '$email', '$hashed_pword')")
         
         or die(mysqli_error($db));

         echo "<script language= 'javascript'>
         alert('Registered successfully');
         window.location.href= 'https://smcse.city.ac.uk/student/adbs944/IN1010/contact.php';
         </script>";
     } 

}


 ?>
