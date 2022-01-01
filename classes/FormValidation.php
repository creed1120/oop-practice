<?php

// create a user validator class to handle validation
// constructor which tadkes in POST data from form
// check required "fields to check" are present in the data
// create methods to validate individual fields
// -- a method to validate a username
// -- a method to validate a email
// return an error array once all checks are done


// Validation Class
class FormValidation {

    private $data; // holds the input values on form
    private $errors = []; // Errors array to push errors to
    private static $fields = ['username', 'email']; // Form fields to check
    
    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm() {
        foreach (self::$fields as $field) {
            if(!array_key_exists($field, $this->data)) {
                trigger_error("$field is not present in data.");
                return;
            }
        }

        $this->validateUsername();
        $this->validateEmail();

        return $this->errors;
    }

    
    private function validateUsername() {
        $val = trim($this->data['username']);

        if(empty($val)) {
            $this->addError('username', 'Username can not be empty.');
        } else {
            if(!preg_match('/^[A-Za-z][A-Za-z0-9]{6,12}$/', $val)) {
                $this->addError('username', 'username must be at least 6-12 chars long & alphanumeric.');
            }
        }
    }

    private function validateEmail() {
        $val = trim($this->data['email']);

        if(empty($val)) {
            $this->addError('email', 'email can not be empty.');
        } else {
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)) {
                $this->addError('email', 'not a valid email.');
            }
        }
    }

    private function addError($key, $val) {
        $this->errors[$key] = $val;
    }
}

?>
