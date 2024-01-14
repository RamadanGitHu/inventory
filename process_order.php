<?php
require_once('includes/load.php');

if (isset($_POST['place_order'])) {
  $req_fields = array('customer_name', 'customer_address', 'customer_phone', 'product_id', 'quantity', 'price', 'discount', 'delivery_cost');
  validate_fields($req_fields);

  if (empty($errors)) {
    $customer_name = remove_junk($db->escape($_POST['customer_name']));
    $customer_address = remove_junk($db->escape($_POST['customer_address']));
    $customer_phone = remove_junk($db->escape($_POST['customer_phone']));
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    $price = (float)$_POST['price'];
    $discount = (float)$_POST['discount'];
    $delivery_cost = (float)$_POST['delivery_cost'];

    // Calculate total amount
    $total = ($price * $quantity) - ($price * $quantity * $discount / 100) + $delivery_cost;

    // Insert order into the database
    $date = make_date();
    $query = "INSERT INTO orders (customer_name, customer_address, customer_phone, product_id, quantity, price, discount, delivery_cost, total, date)";
    $query .= " VALUES ('{$customer_name}', '{$customer_address}', '{$customer_phone}', '{$product_id}', '{$quantity}', '{$price}', '{$discount}', '{$delivery_cost}', '{$total}', '{$date}')";

    if ($db->query($query)) {
      $session->msg('s', "Order placed successfully!");
      $receipt_url = "receipt.php?product_id={$product_id}&quantity={$quantity}&price={$price}&discount={$discount}&total_price={$total}&customer_name={$customer_name}&customer_address={$customer_address}&customer_phone={$customer_phone}&delivery_cost={$delivery_cost}&date={$date}";
      header("Location: $receipt_url");
      exit();
    } else {
      $session->msg('d', 'Sorry, failed to place the order!');
      header("Location: order.php");
      exit();
    }
  } else {
    $session->msg("d", $errors);
    redirect('order.php', false);
  }
}
?>
