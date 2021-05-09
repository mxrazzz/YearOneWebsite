/* register form */
/*/* ––
*    Title: Lab 6 Sample solution
*    Author: City, University of London
*    Date: 2021
*    Code version: 
*    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172

Usages: 
-To add client-side form validation using javascript

Changes: 
Adapted this for validation for my booking page
 */

// target elements from the DOM using this function
function $(id) {
    return document.getElementById(id);
}

var allowSubmit = false; // set boolean value to false

$("create-appointment").addEventListener("submit", (e) => {
    if (!allowSubmit) {
        e.preventDefault();
        checkAptData(); // check for errors
    } else {
        // prevent the preventDefault function  
    }
});


function checkAptData() {
    
    const dateValue = $("apt-booking").value.trim();
    const titleValue = $("apt-title").value.trim();
   
    // date validation
    var dateValid = false; // set boolean value to false
    if (dateValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("apt-dateTag").style.display = "inline";
        $("apt-dateTag").innerHTML = "Please fill in this field.";
    } else {
        $("apt-dateTag").style.display = "none"; // remove error message
        dateValid = true; // set boolean variable to true
    }

     // title validation
     var titleValid = false; // set boolean value to false
     if (titleValue == "") { // if empty then replace error message text with "Please fill in this field"
         $("apt-titleTag").style.display = "inline";
         $("apt-titleTag").innerHTML = "Please fill in this field.";
     } else {
         $("apt-titleTag").style.display = "none"; // remove error message
         titleValid = true; // set boolean variable to true
     }
      

     function isValid() {
        // if all boolean variables are true, then set the main boolean variable "allowSubmit" to true
        if (dateValid && titleValid ) {
            allowSubmit = true;            
        }
    }

    isValid(); // run this function

}