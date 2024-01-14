<?php
  require_once('includes/load.php');
  
  // Check if the user is not logged in, redirect to the sign-up page
  if (!$session->isUserLoggedIn(true)) {
    redirect('customer.php');
  }

  // Get the logged-in user's information from the database
  $user_id = $session->getUserId();
  $customer_info = get_customer_info($user_id); // You should create this function in your includes/load.php

  // Check if customer information exists
  if (!$customer_info) {
    // Redirect or display an error message as appropriate
    redirect('sign_up.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Customer Page</title>
</head>
<body>
  <h2>Welcome, <?php echo $customer_info['name']; ?>!</h2>
  <p>Email: <?php echo $customer_info['email']; ?></p>
  <p>Phone Number: <?php echo $customer_info['phone_number']; ?></p>
  <p>Address: <?php echo $customer_info['address']; ?></p>
  <!-- Add links or buttons to navigate to different customer features/pages -->
  <a href="order_history.php">Order History</a>
  <a href="wishlist.php">Wishlist</a>
  <a href="settings.php">Account Settings</a>
  <!-- Add more links as needed for other customer features/pages -->
</body>
</html>
