

<?php //PHP file to create booking
/* Title: Lab 9 Sample solution
*    Author: City, University of London
*    Date: 2021
*    Code version: 
*    Availability: hhttps://moodle.city.ac.uk/mod/resource/view.php?id=1862892

Usages: Connect to the database and write booking information to it
Changes: Adapted the registration.php to suit my own booking  */


if(!isset($_SESSION)) {
    session_start(); // start the session if it still does not exist
}

$db = new mysqli('smcse-stuproj00.city.ac.uk' , 'adbs944', '200020560', 'adbs944');
if ($db->connect_errno) {
    printf("Connection failed: %s\n", $conn->connect_error);
    exit();
} 
else {
    $username = $_SESSION['username'];

    //real_escape_string makes writing to db safer
    $title = $db->real_escape_string($_POST['apt-title']);
    $date = $db->real_escape_string($_POST['apt-booking']);
    $info = $db->real_escape_string($_POST['apt-info']);

    //selects the date field in the database
    $query_date = "SELECT AptDate FROM UserAppointment WHERE AptDate = '$date'";
    $reg_date = mysqli_query($db, $query_date);

    //if an appointment was already made on this date, gives an error and redirects to booking page
    if(mysqli_num_rows($reg_date) > 0){
        echo "<script language= 'javascript'>
        alert('This date has been booked already. Please choose another one.');
        window.location.href= 'https://smcse.city.ac.uk/student/adbs944/IN1010/appointment.php';
        </script>";
     }
     else{

        //writes into the database
        mysqli_query($db, "INSERT INTO UserAppointment (username, AptDate , aptTitle, aptInfo ) 
        VALUES ('$username', '$date', '$title', '$info')")
        
        or die(mysqli_error($db));

        echo "<script language= 'javascript'>
        alert('Booked appointment!');
        window.location.href= 'https://smcse.city.ac.uk/student/adbs944/IN1010/appointment.php';
        </script>";
    } 

    }

    ?>