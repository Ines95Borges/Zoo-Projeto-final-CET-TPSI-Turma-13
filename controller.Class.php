<?php

class Connect extends PDO{
  public function __construct(){
    parent::__construct("mysql:host=127.0.0.1:3307; dbname=fbawtft_zoo", 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  }
}

class Controller{
  // Check if the user is logged in or not
  function checkUserStatus($id, $sess){
    $db = new Connect;
    $user = $db -> prepare("SELECT Person_ID FROM persons WHERE Person_ID=:id AND session=:session");
    $user -> execute([
      'id' => intval($id),
      'session' => $sess
    ]);
    $userInfo = $user -> fetch(PDO::FETCH_ASSOC);
    if(!$userInfo){
      return FALSE;
    }else{
      return TRUE;
    }
  }
  // Generates char
  function generateCode($lenght){
    $chars = "vwyABC01256";
    $code = "";
    $clean = strlen($chars) - 1;
    while(strlen($code) < $lenght){
      $code .= $chars[mt_rand(0, $clean)];
    }
    // Hashing the password
    $code_hash = password_hash($code, PASSWORD_DEFAULT);
    return $code_hash;
  }
  function insertData($data){
    $db = new Connect;
    // The username of the person is their email
    $checkUser = $db->prepare("SELECT * FROM usernames WHERE Username=:username");
    $checkUser->execute(['username' => $data["email"]]);
    $info = $checkUser->fetch(PDO::FETCH_ASSOC);

    // If there is no user in the database register
    if(!$info){
      $session = $this->generateCode(10);
      $insertUser = $db -> prepare("CALL p_register_users(:name, :username, :password);");
      $insertUser -> execute([
        ":name" => $data["givenName"]." ".$data["familyName"],
        ":username" => $data["email"],
        ":password" => $this->generateCode(5),
      ]);
      
      // If the user was correctly inserted then iniciate cookies
      if($insertUser){
        setcookie("id", $db->lastInsertId(), time()+60*60*24*30, "/", NULL);
        setcookie("sess", $session, time()+60*60*24*30, "/", NULL);
        header("Location: ../../index.php?registrationsuccessfulandcookiesinitiated");
        exit();
      }else{
        return "Error inserting user!";
      }
    // If the user already exists in the database then iniciate cookies
    }else{
      setcookie("id", $info["id"], time()+60*60*24*30, "/", NULL);
      setcookie("sess", $info["session"], time()+60*60*24*30, "/", NULL);
      header("Location: ../../index.php?loginsuccessfulandcookiesinitiated");
      exit();
    }
  }
}