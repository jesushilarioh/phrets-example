<?php
// *** Authentication and Connect ***/
// *** Authentication and Connect ***/
// *** Authentication and Connect ***/

$rets_login_url = "asdf";
$rets_username = "asdf";
$rets_password = "asdf";

//////////////////////////////

require_once("vendor/autoload.php");

$config = new \PHRETS\Configuration;
$config->setLoginUrl($rets_login_url)
        ->setUsername($rets_username)
        ->setPassword($rets_password)
        ->setRetsVersion('1.7.2');

# Start New Rets Session
$retsSession = new \PHRETS\Session($config);

# Call Log in request
$login = $retsSession->Login();
var_dump($login);

// *** Authentication and Connect ***/
// *** Authentication and Connect ***/
// *** Authentication and Connect ***/
