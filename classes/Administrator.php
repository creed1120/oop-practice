<?php

require_once('User.php');

class Administrator extends User {

    public $adminLevel;
    public $role = "Admin";

    public function __construct($name, $email, $adminLevel)
    {
        $this->adminLevel = $adminLevel;
        parent::__construct($name, $email);
    }

    public function message() {
        return "$this->email an Admin, sent a new Message";
    }
}