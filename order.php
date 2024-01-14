<?php
$page_title = 'Order';
require_once('includes/load.php');
// Check what level of user has permission to view this page
//page_require_level(2);
$all_products = find_all('products');
// Additional functions for order processing (to be defined)
// ...
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
          <span class="glyphicon glyphicon-shopping-cart"></span>
          <span>Place an Order</span>
        </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-12">
          <form method="post" action="process_order.php" class="clearfix">
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label for="customer_name">Customer Name</label>
                  <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Customer Name">
                </div>
                <div class="col-md-6">
                  <label for="customer_address">Customer Address</label>
                  <input type="text" class="form-control" name="customer_address" id="customer_address" placeholder="Customer Address">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label for="customer_phone">Customer Phone</label>
                  <input type="text" class="form-control" name="customer_phone" id="customer_phone" placeholder="Customer Phone">
                </div>
                <div class="col-md-6">
                  <label for="delivery_cost">Delivery Cost</label>
                  <input type="number" class="form-control" name="delivery_cost" id="delivery_cost" placeholder="Delivery Cost" oninput="calculateTotal()">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <select class="form-control" name="product_id" onchange="setPrice()">
                    <option value="">Select Product</option>
                    <?php foreach ($all_products as $product): ?>
                      <option value="<?php echo (int)$product['id'] ?>" data-price="<?php echo (float)$product['buy_price']; ?>">
                        <?php echo $product['name'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-shopping-cart"></i>
                    </span>
                    <input type="number" class="form-control" name="quantity" placeholder="Quantity" oninput="calculateTotal()" style="width: 120%;">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-usd"></i>
                    </span>
                    <input type="number" class="form-control" name="price" placeholder="Price" oninput="calculateTotal()" style="width: 120%;">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-scissors"></i>
                    </span>
                    <input type="number" class="form-control" name="discount" placeholder="Discount" oninput="calculateTotal()" style="width: 120%;">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-usd"></i>
                    </span>
                    <input type="number" class="form-control" name="total"placeholder="total" readonly style="width: 200%;" >
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" name="place_order" class="btn btn-primary">Place Order</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript to calculate the Total and set the price -->
<script>
  function calculateTotal() {
    const quantity = parseFloat(document.querySelector('input[name="quantity"]').value);
    const price = parseFloat(document.querySelector('input[name="price"]').value);
    const discount = parseFloat(document.querySelector('input[name="discount"]').value);
    const deliveryCost = parseFloat(document.querySelector('input[name="delivery_cost"]').value);

    const total = (price * quantity) - (price * quantity * discount / 100) + deliveryCost;
    document.querySelector('input[name="total"]').value = total.toFixed(2);
  }

  function setPrice() {
    const productId = document.querySelector('select[name="product_id"]').value;
    const productPrice = parseFloat(document.querySelector(`option[value="${productId}"]`).dataset.price);
    document.querySelector('input[name="price"]').value = productPrice;
    calculateTotal(); // Recalculate total after setting the price
  }
</script>

<?php include_once('layouts/footer.php'); ?>
 