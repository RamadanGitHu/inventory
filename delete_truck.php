<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(1);

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $query = "DELETE FROM truckes WHERE id='{$id}'";
    if ($db->query($query)) {
        $session->msg("s", "Truck deleted successfully!");
    } else {
        $session->msg("d", "Failed to delete the truck!");
    }
} else {
    $session->msg("d", "Missing truck ID!");
}
redirect('truckes.php', false);
?>
