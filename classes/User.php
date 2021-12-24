<?php

class User {
    // Class Properties
    public $name;
    protected $email;
    public $role = "Member";

    // Constructor to build blueprint
    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    // Class Methods
    public function addFriend() {
        return $this->email . " has added a new Friend";
    }

    public function message() {
        return "$this->email sent a new Message";
    }


    // Getters
    public function getEmail() {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return $this->email;
        } else {
            echo "Not valid email";
        }
    }

    // Setters
    public function setEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->email = $email;
        } else {
            echo "Not valid Email";
        }
    }

}