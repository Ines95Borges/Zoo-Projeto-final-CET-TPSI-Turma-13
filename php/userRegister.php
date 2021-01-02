<?php

if(isset($_POST['register']) && !empty($_POST['g-recaptcha-response'])){

  require 'includes/connection.php';

  $name = $_POST['firstName']." ".$_POST['lastName'];
  $username = $_POST['username'];
  $pwd = $_POST['pwd'];
  $pwdRepeat = $_POST['pwd-repeat'];
  $null = null;

  # Check if the fields in registration modal are empty
  if(empty($name) || empty($username) || empty($pwd) || empty($pwdRepeat)){
    header("Location:../index.php?error=emptyfields&firstName=".$_POST['firstName']."&lastName=".$_POST['lastName']."&username=".$username);
    exit();
  # Check if the username that was typed in is alphanumeric
  }else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location:../index.php?error=invalidusername&firstName=".$_POST['firstName']."&lastName=".$_POST['lastName']);
    exit();
  # Check if the two passords typed in are the same
  }else if($pwd !== $pwdRepeat){
    header("Location:../index.html?error=passwordcheck&firstName=".$_POST['firstName']."&lastName=".$_POST['lastName']);
    exit();
  # If everything was correctly filled in
  }else{
    $sql = "SELECT Username FROM usernames WHERE Username=?";
    $stmt = mysqli_stmt_init($conn); # Creating prepared statements
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location:../index.php?error=sqlerror1");
      exit();
    }else{
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_num_rows($stmt);
      # Check if there is already a username
      if($resultCheck > 0){
        header("Location:../index.html?error=usertaken&firstName=".$_POST['firstName']."&lastName=".$_POST['lastName']);
        exit();
      }else{ # Everything is as it should be
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); # Encrypts password
        # To enter the user data in the database
        $sql = "CALL p_register_users(?,?,?,?,?)";
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location:../index.php?error=sqlerror2");
          exit();
        }else{
          mysqli_stmt_bind_param($stmt, "sssss", $name, $username, $hashedPwd, $null, $null);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
        }
        mysqli_query($conn, $sql);
        header("Location:../index.php?registrationsuccessful");
        exit();
      }
    }
  }
  # Close the connections to save resources
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}else{
  header("Location:../index.php?registrationunsuccessfulrecaptchaorsubmit");
  exit();
}

?>