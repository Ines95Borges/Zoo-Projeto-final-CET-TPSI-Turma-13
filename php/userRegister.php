<?php

// If there is a parameter called login and a response from the recaptcha api
if(isset($_POST['register']) && !empty($_POST['g-recaptcha-response'])){

  require 'includes/connection.php'; // Sets the connection to the database

  // Gets the inputs
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
    if(!mysqli_stmt_prepare($stmt, $sql)){ // If the SQL statement is not ready to execute sends the user the homepage with an error
      header("Location:../index.php?error=sqlerror");
      exit();
    }else{ // If the SQL statement is ready to execute
      mysqli_stmt_bind_param($stmt, "s", $username); // Binds the parameters to the SQL statement
      mysqli_stmt_execute($stmt); // Executes the SQL statement
      mysqli_stmt_store_result($stmt); // Stores the resultset of the given statement locally
      $resultCheck = mysqli_num_rows($stmt); // Stores the number of rows of the query
      # Check if there is already a username
      if($resultCheck > 0){ // If there is a username sends the user to homepage with an error message
        header("Location:../index.html?error=usertaken&firstName=".$_POST['firstName']."&lastName=".$_POST['lastName']);
        exit();
      }else{ # Everything is as it should be
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); # Encrypts password
        # To enter the user data in the database
        $sql = "CALL p_register_users(?,?,?,?,?)";
        if(!mysqli_stmt_prepare($stmt, $sql)){ // If the SQL statement is not ready to execute sends the user the homepage with an error
          header("Location:../index.php?error=sqlerror");
          exit();
        }else{ // If the SQL statement is ready to execute
          mysqli_stmt_bind_param($stmt, "sssss", $name, $username, $hashedPwd, $null, $null); // Binds the parameters to the SQL statement
          mysqli_stmt_execute($stmt); // Executes the statement
          mysqli_stmt_store_result($stmt); // Stores the resultset of the given statement locally
        }
        mysqli_query($conn, $sql); // Registers the user and sends the user to homepage with successful message
        header("Location:../index.php?registrationsuccessful");
        exit();
      }
    }
  }
  # Close the connections to save resources
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}else{ // If the requested parameters are not set sends the user to homepage with a error message
  header("Location:../index.php?registrationunsuccessfulrecaptchaorsubmit");
  exit();
}

?>