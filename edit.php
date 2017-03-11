<?php

// check for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {

    require_once('libraries/password_compatibility_library.php');
}

require_once('config/config.php');

require_once('translations/en.php');

require_once('libraries/PHPMailer.php');

require_once('classes/Login.php');

$login = new Login();

// if logged in show the edit tool, if not show the login
if ($login->isUserLoggedIn() == true) {

    include("views/edit.php");

} else {

    include("views/not_logged_in.php");
}
