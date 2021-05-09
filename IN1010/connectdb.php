
<?php  //establishes connection to database
 $db = new mysqli('smcse-stuproj00.city.ac.uk' , 'adbs944', '200020560', 'adbs944');
 if ($db->connect_error) {
 printf("Connection failed: %s/n" . $db->connect_error);
 exit();
 }
?> 