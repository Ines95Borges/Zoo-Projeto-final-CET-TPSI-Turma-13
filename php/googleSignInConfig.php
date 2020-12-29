 <?php 

require_once './vendor/autoload.php';

$gClient = new Google_Client();
$gClient -> setClientId('85445765798-dt47q70lkmf723l7smij02t3dbnifnua.apps.googleusercontent.com');
$gClient -> setClientSecret('uxD6iisj2cu81wojiNJWjKSV');
$gClient -> setApplicationName('Fantastic Beasts and Where to Find Them Zoo');
$gClient -> setRedirectUri("http://localhost/Zoo/");
$gClient -> addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

$login_url = $gClient->createAuthUrl();