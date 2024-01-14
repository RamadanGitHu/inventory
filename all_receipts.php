<?php
$page_title = 'All Receipts';
require_once('includes/load.php');

// Retrieve all receipts from the database
$all_receipts = find_all('orders');

?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-list-alt"></span>
          <span>All Receipts</span>
        </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Delivery Cost</th>
                <th>Total Price</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Customer Phone</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($all_receipts as $receipt): ?>
                <tr>
                  <td><?php echo $receipt['id']; ?></td>
                  <td><?php echo $receipt['product_id']; ?></td>
                  <td><?php echo $receipt['quantity']; ?></td>
                  <td><?php echo $receipt['price']; ?></td>
                  <td><?php echo $receipt['discount']; ?></td>
                  <td><?php echo $receipt['delivery_cost']; ?></td>
                  <td><?php echo $receipt['total']; ?></td>
                  <td><?php echo $receipt['customer_name']; ?></td>
                  <td><?php echo $receipt['customer_address']; ?></td>
                  <td><?php echo $receipt['customer_phone']; ?></td>
                  <td><?php echo $receipt['date']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>
