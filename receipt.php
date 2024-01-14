<?php
$page_title = 'Receipt';
require_once('includes/load.php');

// Check if the necessary parameters are present in the URL
if (
  isset($_GET['product_id']) && isset($_GET['quantity']) &&
  isset($_GET['price']) && isset($_GET['discount']) && isset($_GET['total_price']) &&
  isset($_GET['customer_name']) && isset($_GET['customer_address']) &&
  isset($_GET['customer_phone']) && isset($_GET['delivery_cost']) && isset($_GET['date'])
) {
  $product_id = (int)$_GET['product_id'];
  $quantity = (int)$_GET['quantity'];
  $price = (float)$_GET['price'];
  $discount = (float)$_GET['discount'];
  $total_price = (float)$_GET['total_price'];
  $customer_name = $_GET['customer_name'];
  $customer_address = $_GET['customer_address'];
  $customer_phone = $_GET['customer_phone'];
  $delivery_cost = (float)$_GET['delivery_cost'];
  $date = $_GET['date'];
} else {
  // If the necessary parameters are missing, redirect back to the order page
  header("Location: order.php");
  exit();
}
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-file"></span>
          <span>Receipt</span>
        </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-12">
          <h4>Order Details:</h4>
          <p><strong>Product ID:</strong> <?php echo $product_id; ?></p>
          <p><strong>Quantity:</strong> <?php echo $quantity; ?></p>
          <p><strong>Price:</strong> $<?php echo number_format($price, 2); ?></p>
          <p><strong>Discount:</strong> <?php echo $discount; ?>%</p>
          <p><strong>Total Price:</strong> $<?php echo number_format($total_price, 2); ?></p>
          <p><strong>Date:</strong> <?php echo $date; ?></p>

          <h4>Customer Information:</h4>
          <p><strong>Name:</strong> <?php echo $customer_name; ?></p>
          <p><strong>Address:</strong> <?php echo $customer_address; ?></p>
          <p><strong>Phone:</strong> <?php echo $customer_phone; ?></p>

          <h4>Delivery Cost:</h4>
          <p><strong>Cost:</strong> $<?php echo number_format($delivery_cost, 2); ?></p>

          <!-- You can display additional details here, like payment details or order summary -->
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>
