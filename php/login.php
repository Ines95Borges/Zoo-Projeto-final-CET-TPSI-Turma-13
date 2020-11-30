<?php

if (isset($_POST['login'])){
  
  require './includes/connection.php';

  $username = addslashes($_POST['usernameLogin']);
  $password = $_POST['pwdLogin'];

  if(empty($username) || empty($password)){
    header("Location:../index.php?error=emptyfields");
    exit();
  }else{
    $sql = "SELECT * FROM v_login WHERE Username=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location:../index.php?error=sqlerror");
      exit();
    }else{
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        $pwdCheck = password_verify($password, $row['Pwd']);
        if($pwdCheck == false){
          header("Location:../index.php?error=wrongpassword");
          exit();
        }else if($pwdCheck == true){
          session_start();
          $_SESSION['Username'] = $row['Username'];
          $_SESSION['Client_ID'] = $row['Client_ID'];
          header("Location:../index.php?login=success");
          exit();
        }else{
          header("Location:../index.php?error=wrongpassword");
          exit();
        }
      }else{
        header("Location:../index.php?error=nouser");
        exit();
      }
    }
  }

}else{
  header("Location:../index.php");
  exit();
}