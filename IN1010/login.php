<?php //php file to enable user to login with data from the database

/*/* ––
*    Title: Lab 9 Sample solution
*    Author: City, University of London
*    Date: 2021
*    Code version: 
*    Availability: hhttps://moodle.city.ac.uk/mod/resource/view.php?id=1862892

Usages: Connect to the database and allow user to login with the data they used to register
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

        $userLogin = $db->real_escape_string($_POST['login_username']);
        $userPass = $db->real_escape_string($_POST['login_pwd']);
        $hashed_pword = md5($userPass);

        // select the username and password fields which match the data entered in the input fields
        $query = "SELECT username, password FROM UserDetails WHERE username = '$userLogin' AND password = '$hashed_pword'";
        // execute the query
        $result = $db->query($query);
        // store the results in $row variable
        $row = mysqli_fetch_row($result);
    
    if (!isset($row[0]) || !isset($row[1])) {
        // this will alert the user and then redirect to the specified page (Change the URL)
        echo "<script language= 'javascript'>
        alert('invalid login');
        window.location.href= 'https://smcse.city.ac.uk/student/adbs944/IN1010/contact.php';
        </script>";
    }
    // if there is a match then activate a custom session called 'username' which allows access to a new web page called appointments
    else if ($userLogin == $row[0] && $hashed_pword == $row[1]) {
        $_SESSION['username'] = $userLogin;

        // redirect to this page
        header("Location: appointment.php");
    }

    }

    ?>