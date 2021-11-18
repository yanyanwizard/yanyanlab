<?php

require 'vendor/autoload.php';

use SMTPValidateEmail\Validator as SmtpEmailValidator;

/**
 * Simple example
 */

$email     = $_GET['email'];
$sender    = 'wizardrider@gmail.com';
$validator = new SmtpEmailValidator($email, $sender);

// If debug mode is turned on, logged data is printed as it happens:
// $validator->debug = true;
$results   = $validator->validate();


echo  json_encode($results);



// Get log data (log data is always collected)
//$log = $validator->getLog();
//var_dump($log);