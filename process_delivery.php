<?php
require_once('includes/load.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = array();

    // Sanitize and validate the truck number
    $truck_number = $db->escape($_POST["truck_number"]);
    if (empty($truck_number)) {
        $errors[] = "Truck number is required.";
    }

    // Sanitize and validate the delivery time
    $delivery_time = $db->escape($_POST["delivery_time"]);
    if (empty($delivery_time)) {
        $errors[] = "Delivery time is required.";
    }

    // Sanitize and validate the estimated delivery time
    $estimated_delivery_time = $db->escape($_POST["estimated_delivery_time"]);
    if (empty($estimated_delivery_time)) {
        $errors[] = "Estimated delivery time is required.";
    }

    // Check for any validation errors
    if (empty($errors)) {
        // Convert delivery time to a DateTime object
        $delivery_time_obj = new DateTime($delivery_time);

        // Convert estimated delivery time to a DateTime object
        $estimated_delivery_time_obj = new DateTime($estimated_delivery_time);

        // Format date/time strings for SQL query
        $formatted_delivery_time = $delivery_time_obj->format('Y-m-d H:i:s');
        $formatted_estimated_delivery_time = $estimated_delivery_time_obj->format('Y-m-d H:i:s');

        // Insert data into the database
        $sql = "INSERT INTO deliveries (truck_number, delivery_time, estimated_delivery_time) VALUES ('$truck_number', '$formatted_delivery_time', '$formatted_estimated_delivery_time')";

        if ($db->query($sql)) {
            $session->msg('s', "Delivery information added successfully.");
            redirect('see_time.php', false);
        } else {
            $session->msg('d', 'Sorry, failed to add delivery information.');
            redirect('delivery_form.php', false);
        }
    } else {
        $session->msg('d', $errors);
        redirect('delivery_form.php', false);
    }
}
?>
<?php include_once('layouts/footer.php'); ?>
