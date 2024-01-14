<?php
$page_title = 'Delivery Tracking';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
// page_require_level(2); // Adjust the required user level if needed

if (isset($_POST['add_delivery'])) {
  $req_fields = array('delivery_location', 'customer_location', 'delivery_date');
  validate_fields($req_fields);

  if (empty($errors)) {
    $delivery_location = remove_junk($db->escape($_POST['delivery_location']));
    $customer_location = remove_junk($db->escape($_POST['customer_location']));
    $delivery_date = remove_junk($db->escape($_POST['delivery_date']));

    $query = "INSERT INTO delivery_tracking (delivery_location, customer_location, delivery_date) VALUES ('$delivery_location', '$customer_location', '$delivery_date')";
    $result = $db->query($query);

    if ($result) {
      $session->msg('s', "Delivery information added.");
      redirect('delivery_tracking.php', false);
    } else {
      $session->msg('d', 'Failed to add delivery information!');
      redirect('delivery_tracking.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('delivery_trackingphp', false);
  }
}
?>

<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Add Delivery Information</span>
        </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-12">
          <form method="post" action="delivery.php" class="clearfix">
            <div class="form-group">
              <label for="delivery_location">Delivery Location</label>
              <input type="text" class="form-control" name="delivery_location" id="delivery_location" placeholder="Delivery Location" required>
            </div>
            <div class="form-group">
              <label for="customer_location">Customer Location</label>
              <input type="text" class="form-control" name="customer_location" id="customer_location" placeholder="Customer Location" required>
            </div>
            <div class="form-group">
              <label for="delivery_date">Delivery Date</label>
              <input type="date" class="form-control" name="delivery_date" id="delivery_date" required>
            </div>
            <button type="submit" name="add_delivery" class="btn btn-primary">Add Delivery</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>
 