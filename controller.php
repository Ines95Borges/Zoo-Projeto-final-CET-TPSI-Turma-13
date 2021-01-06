<?php

require_once './controller.Class.php';
require_once './googleSignInConfig.php';

if(isset($_GET['code'])){
  $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
}else{
  header("Location: index.php?error=codenotfound");
  exit();
}

// If token is allowed
if(isset($token["error"]) != "invalid_grant"){
  $oAuth = new Google_Service_Oauth2($gClient);
  $userData = $oAuth->userinfo_v2_me->get();

  // Insert data
  $controller = new Controller;
  echo $controller -> insertData(array(
    'avatar' => $userData['picture'],
    'email' => $userData['email'],
    'familyName' => $userData['familyName'],
    'givenName' => $userData['givenName']
  ));
}else{ // If token is not valid sends the user to homepage with an error message
  header("Location: index.php?error=tokennotallowed");
  exit();
}

?>