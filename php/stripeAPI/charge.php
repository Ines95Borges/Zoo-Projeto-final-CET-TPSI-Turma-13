<?php 

require_once '../../keys.php';
require_once '../../vendor/autoload.php';
require_once '../includes/connection.php';

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

// Sanitize post array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$firstName = $POST['firstName'];
$lastName = $POST['lastName'];
$email = $POST['email'];
$token = $POST["stripeToken"];
$ticket = 2; // Needs to be get by a paramenter
$null = null;

// Create customer in stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Create charge in stripe
$charge = \Stripe\Charge::create(array(
  "amount" => 1000, # Needs to get from parameter
  "currency" => "eur",
  "description" => "ticket",
  "customer" => $customer->id
));

$sql = "SELECT Client_ID, username FROM usernames WHERE Username = ?";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
  header("Location:../index.php?error=sqlerror");
  exit();
}else{
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $num_rows = mysqli_num_rows($result);
  $fetch = mysqli_fetch_assoc($result);
  if($num_rows > 0){ # There is a user in the database with this email
    $sql = "INSERT INTO clienttickets VALUES(?,?,?,?)";
    if(!mysqli_stmt_prepare($stmt, $sql)){ // If the SQL statement is not ready to execute sends the user the homepage with an error
      header("Location:../../index.php?error=sqlerror");
      exit();
    }else{ // If the SQL statement is ready to execute
      mysqli_stmt_bind_param($stmt, "siis", $null, $fetch["Client_ID"], $ticket, $null); // Binds the parameters to the SQL statement
      mysqli_stmt_execute($stmt); // Executes the SQL statement
      mysqli_stmt_store_result($stmt); // Stores the resultset of the given statement locally
      mysqli_query($conn, $sql);
    }
  }else{
    header("Location: ../../index.php?error=useremailnotregistered");
  }
}

// Redirect to success page
header("Location: ../../paymentSuccess.php?paymentCheckwithsuccess?tid=".$charge->id."&product=".$charge->description);


