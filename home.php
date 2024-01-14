<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  //page_require_level(2);
  if (!$session->isUserLoggedIn(true)) { redirect('login_v2.php', true);}
  //page_require_level(2);
  // Get the current user's ID from the session
  $user_id = $_SESSION['user_id'];

  // Fetch the user's information from the database based on their ID
  $user = find_by_id('users', $user_id);

  // Extract the user's name from the user array
  $user_name = $user['name'];
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Welcome <?php echo $user_name; ?> <hr> Inventory and Logistics Management System</h1>
         <p>Browse around to find out the pages that you can access!</p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
