<?php
require_once "vendor/autoload.php";

session_start();

$fb = new Facebook\Facebook([
	'app_id' => '331063092524991', // Replace {app-id} with your app id
	'app_secret' => '6cb1adbbdc2d0b9c53e5df2fbdb60090',
	'default_graph_version' => 'v2.2',
	]);
?>
