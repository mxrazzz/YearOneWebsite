/* register and login form */
/*/* ––
*    Title: Lab 6 Sample solution
*    Author: City, University of London
*    Date: 2021
*    Code version: 
*    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172

Usages: 
-To add client-side form validation using javascript

 */

// target elements from the DOM using this function
function $(id) {
    return document.getElementById(id);
}

var allowSubmit = false; // set boolean value to false

// when clicking the submit button for the register form, if 'allowSubmit' is false, do not submit and then run function which contains form validations
$("register-form").addEventListener("submit", (e) => {
    if (!allowSubmit) {
        e.preventDefault();
        checkRegData(); // check for errors
    } else {
        // prevent the preventDefault function
    }
});

// when clicking the submit button for the login form, if 'allowSubmit' is false, do not submit and then run function which contains form validations
$("login-form").addEventListener("submit", (e) => {
    if (!allowSubmit) {
        e.preventDefault();
        checkLoginData(); // check for errors
    } else {
        // prevent the preventDefault function  
    }
});
// when clicking the submit button for the login form, if 'allowSubmit' is false, do not submit and then run function which contains form validations






function checkRegData() {
    // declare constants to have a fixed value and trim off any whitespaces on the values to escape data
    const usernameValue = $("username").value.trim(); // target id of input elements using the $ function
    const firstNameValue = $("firstname").value.trim();
    const surnameValue = $("lastname").value.trim();
    const mobileValue = $("phone").value.trim();
    const emailValue = $("email").value.trim();
    const passwordValue = $("psw").value.trim();
    const passwordMatchValue = $("psw-repeat").value.trim();
    

    var name_valid = /^[A-Za-z]+$/; // regex that configures patterns for the full name input field to only have alphabetical letters
    var pass_validation = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,15}$/; 
    // regex that configures patterns for the password input field to have at least 6-15 characters, an uppercase and lowercase letter, a number and a special character

    // username validation
    var usernameValid = false; // set boolean value to false
    if (usernameValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("usernameTag").style.display = "inline";
        $("usernameTag").innerHTML = "Please fill in this field.";
    } else {
        $("usernameTag").style.display = "none"; // remove error message
        usernameValid = true; // set boolean variable to true
    }

    // first name validation
    var nameValid = false; // set boolean value to false
    if (firstNameValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("firstnameTag").style.display = "inline";
        $("firstnameTag").innerHTML = "Please fill in this field.";
    } else if (!firstNameValue.match(name_valid)) { 
        // if there are other characters other than alphabetical characters, then display text
        $("firstnameTag").style.display = "inline";
        $("firstnameTag").innerHTML = "Alphabetical characters only.";
    } else { 
        $("firstnameTag").style.display = "none"; // if successful, hide error message and set boolean variable to true
        nameValid = true;
    }
    
    // last name validation
    var nameValid = false; // set boolean value to false
    if (surnameValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("lastnameTag").style.display = "inline";
        $("lastnameTag").innerHTML = "Please fill in this field.";
    } else if (!surnameValue.match(name_valid)) { 
        // if there are other characters other than alphabetical characters, then display text
        $("lastnameTag").style.display = "inline";
        $("lastnameTag").innerHTML = "Alphabetical characters only.";
    } else { 
        $("lastnameTag").style.display = "none"; // if successful, hide error message and set boolean variable to true
        nameValid = true;
    }

    // UK mobile number validation
    var mobileValid = false; // set boolean value to false
    if (mobileValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("mobileTag").style.display = "inline";
        $("mobileTag").innerHTML = "Please fill in this field.";
    } else if (mobileValue.length != 11) { // if the length is not equal to 11, display error message
        $("mobileTag").style.display = "inline";
        $("mobileTag").innerHTML = "Must be 11 digits.";
    } else { 
        $("mobileTag").style.display = "none"; // hide error message
        mobileValid = true; // set boolean variable to true
    }

    // email validation
    var emailValid = false; // set boolean value to false
    if (emailValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("emailTag").style.display = "inline";
        $("emailTag").innerHTML = "Please fill in this field.";
    } else if ((!emailValue.includes("@") && (!emailValue.includes(".com"))) || (!emailValue.includes("@") || !emailValue.includes(".com"))) {
        // if the value for this field does not include @ and .com, display error message
        $("emailTag").style.display = "inline";
        $("emailTag").innerHTML = "Please enter a valid email.";
    } else {
        $("emailTag").style.display = "none"; // hide error message
        emailValid = true; // set boolean variable to true
    }

    // password validation
    var pwordValid = false; // set boolean value to false
    if (passwordValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("pwordTag").style.display = "inline";
        $("pwordTag").innerHTML = "Please fill in this field.";
    } else if (!passwordValue.match(pass_validation)) { // if value of password input field does not match the regex pattern then display error message
        $("pwordTag").style.display = "inline";
        $("pwordTag").innerHTML = "Password must be 6-15 characters with at least one uppercase, one lowercase letters, one number and a special character.";
    } else {
        $("pwordTag").style.display = "none"; // hide error message 
        pwordValid = true; // set boolean variable to true
    }

    // password match validation
    var confirmValid = false; // set boolean value to false
    if (passwordMatchValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("confirmTag").style.display = "inline";
        $("confirmTag").innerHTML = "Please fill in this field.";
    } else if (passwordMatchValue != passwordValue) { // if confirm password does not match the original password, display error message
        $("confirmTag").style.display = "inline";
        $("confirmTag").innerHTML = "Must match the password given.";
    } else {
        $("confirmTag").style.display = "none"; // if input is valid, hide erroe message
        confirmValid = true; // set boolean variable to true
    }

    function isValid() {
        // if all boolean variables are true, then set the main boolean variable "allowSubmit" to true
        if (usernameValid && nameValid && mobileValid && emailValid && pwordValid && confirmValid) {
            allowSubmit = true;            
        }
    }

    isValid(); // run this function
}

// form validation for the login form
function checkLoginData() {
    // target and refine value of these input fields in the login form
    const loginUsernameValue = $("login_username").value.trim();
    const loginPasswordValue = $("login_pwd").value.trim();

    // if the input fields are empty display error messages
    if (loginUsernameValue == "" || loginPasswordValue == "") {
        $("loginUsernameTag").style.display = "inline";
        $("loginUsernameTag").innerHTML = "Please fill in this field.";

        $("loginPasswordTag").style.display = "inline";
        $("loginPasswordTag").innerHTML = "Please fill in this field.";
    }
    else if (loginUsernameValue != "" && loginPasswordValue != "") {
        // if not empty, allowSubmit is now true
        allowSubmit = true;
    }
}   

