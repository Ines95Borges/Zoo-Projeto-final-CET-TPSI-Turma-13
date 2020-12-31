<?php

require 'keys.php';
require_once './vendor/autoload.php';

$gClient = new Google_Client();
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setApplicationName("Fantastic Beasts and Where to Find Them Zoo");
$gClient->setRedirectUri("http://localhost/Zoo/controller.php");
$gClient->setScopes("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

$login_url = $gClient->createAuthUrl();

?>