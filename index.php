<?php

//Start Session
session_start();

//Include Congig
require('config.php');

require('classes/Messages.php');

require('classes/Wrapper.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');

$wrapper = new Wrapper($_GET);
$controller = $wrapper->createController();

if($controller) {
	$controller->executeAction();
}