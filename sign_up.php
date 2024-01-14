<?php  require_once('includes/load.php');

// Check if the user is already logged in, redirect to the customer page if logged in.
if ($session->isUserLoggedIn(true)) {
  redirect('customer.php');
}

// Handle the sign-up form submission
if (isset($_POST['submit'])) {
  // Retrieve form data (ensure proper validation and sanitation)
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $name = $_POST['name'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];

  // Perform any additional validation as needed (e.g., check if the username or email already exists)

  // Create the user in the database (You should have a function for this in your includes/load.php)
  $result = create_customer($username, $password, $email, $name, $phone_number, $address);

  // Check if the user was created successfully
  if ($result) {
    // User created successfully, redirect to the customer page
    redirect('customer.php');
  } else {
    // Failed to create the user, display an error message or handle the error as appropriate
    $error_message = "Failed to create the user. Please try again.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
</head>
<body>
<h2>Sign Up</h2>
<?php if (isset($error_message)) { echo '<p>' . $error_message . '</p>'; } ?>
<form method="post" action="sign_up.php">
  <label>Username:</label>
  <input type="text" name="username" required>
  <br>
  <label>Password:</label>
  <input type="password" name="password" required>
  <br>
  <label>Email:</label>
  <input type="email" name="email" required>
  <br>
  <!-- New form fields -->
  <label>Name:</label>
  <input type="text" name="name" required>
  <br>
  <label>Phone Number:</label>
  <input type="text" name="phone_number">
  <br>
  <label>Address:</label>
  <textarea name="address" required></textarea>
  <br>
  <!-- End of new form fields -->
  <input type="submit" name="submit" value="sign_up">
</form>
</body>
</html>