<?php

// If there is a parameter called login and a response from the recaptcha api
if (isset($_POST['login']) && !empty($_POST['g-recaptcha-response'])){
  
  require './includes/connection.php'; // Sets the connection to the database

  $username = addslashes($_POST['usernameLogin']);
  $password = $_POST['pwdLogin'];

  if(empty($username) || empty($password)){ // Redirects the user to the homepage if the input fields are empty with an error
    header("Location:../index.php?error=emptyfields");
    exit();
  }else{ // If the fields are not empty
    $sql = "SELECT * FROM v_login WHERE Username=?;"; // Select all fields from the v_login view which are the username and the valid password
    $stmt = mysqli_stmt_init($conn); // Creates a prepared statement
    if(!mysqli_stmt_prepare($stmt, $sql)){ // If the SQL statement is not ready to execute sends the user the homepage with an error
      header("Location:../index.php?error=sqlerror");
      exit();
    }else{ // If the SQL statement is ready to execute
      mysqli_stmt_bind_param($stmt, "s", $username); // Binds the parameters to the SQL statement
      mysqli_stmt_execute($stmt); // Executes the SQL statement
      $result = mysqli_stmt_get_result($stmt); // Gets the result from the query
      if($row = mysqli_fetch_assoc($result)){ // gets a row from the result
        $pwdCheck = password_verify($password, $row['Pwd']); // Verify if the password is the same
        if($pwdCheck == false){ // If the password is not the same sends the user to the homepage with an error
          header("Location:../index.php?error=wrongpassword");
          exit();
        }else if($pwdCheck == true){ // If the password is the same
          session_start(); // Beggins a session
          $_SESSION['Username'] = $row['Username']; // Sets session variable with username
          $_SESSION['Client_ID'] = $row['Client_ID']; // Sets session variable with client_id
          $client_ID = $_SESSION['Client_ID'];
          # Get the privilege
          $sql = "SELECT Privilege FROM privileges WHERE Client_ID = $client_ID";
          $query = mysqli_query($conn, $sql) or die($sql);
          $fetch = mysqli_fetch_assoc($query);
          $_SESSION['Privilege'] = $fetch['Privilege'];
          header("Location:../index.php?login=success"); // Sends the user to the homepage with a success message
          exit();
        }
      }else{ // If there are no rows sends the user to the homepage with an error message
        header("Location:../index.php?error=nouser");
        exit();
      }
    }
  }

}else{ // If the parameter login is not set sends the user to homepage with an error message
  header("Location:../index.php?loginunsuccessfulrecaptchaorsubmit");
  exit();
}