<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(1);

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $truck = find_by_id('truckes', $id);
    if (!$truck) {
        $session->msg("d", "Truck not found!");
        redirect('truckes.php', false);
    }
} else {
    $session->msg("d", "Missing truck ID!");
    redirect('truckes.php', false);
}

if (isset($_POST['update_truck'])) {
    $req_field = array('truckes-name');
    validate_fields($req_field);
    $truck_name = remove_junk($db->escape($_POST['truckes-name']));
    if (empty($errors)) {
        $query  = "UPDATE truckes SET ";
        $query .= "name='{$truck_name}' ";
        $query .= "WHERE id='{$id}'";
        $result = $db->query($query);
        if ($result && $db->affected_rows() === 1) {
            $session->msg("s", "Truck updated successfully!");
            redirect('edit_truck.php?id=' . $id, false);
        } else {
            $session->msg("d", "Sorry, failed to update the truck!");
            redirect('edit_truck.php?id=' . $id, false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('edit_truck.php?id=' . $id, false);
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
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Edit Truck</span>
                </strong>
            </div>
            <div class="panel-body">
                <form method="post" action="edit_truck.php?id=<?php echo (int)$truck['id']; ?>" class="clearfix">
                    <div class="form-group">
                        <label for="truckes-name" class="control-label">Truck Type</label>
                        <input type="text" class="form-control" name="truckes-name" value="<?php echo remove_junk(ucfirst($truck['name'])); ?>">
                    </div>
                    <div class="form-group clearfix">
                        <button type="submit" name="update_truck" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
