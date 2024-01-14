<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  $drivers = find_by_id('drivers',(int)$_GET['id']);
  if(!$drivers){
    $session->msg("d","Missing drivers id.");
    redirect('drivers.php');
  }
?>
<?php
  $delete_id = delete_by_id('drivers',(int)$drivers['id']);
  if($delete_id){
      $session->msg("s","driver deleted.");
      redirect('drivers.php');
  } else {
      $session->msg("d","driver deletion failed.");
      redirect('drivers.php');
  }
?>
