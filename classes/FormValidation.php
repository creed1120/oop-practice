<?php

// create a user validator class to handle validation
// constructor which tadkes in POST data from form
// check required "fields to check" are present in the data
// create methods to validate individual fields
// -- a method to validate a username
// -- a method to validate a email
// return an error array once all checks are done


// check if submit button was clicked
if(isset($_POST['submit'])) {
    FormValidation::validateForm();
}

// Validation Class
class FormValidation {

    public static $username;
    public static $email;

    public static function validateForm() {
        echo "Form Submitted";
    }
}


?>