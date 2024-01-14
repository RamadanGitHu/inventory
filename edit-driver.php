<?php
  $page_title = 'Edit driver';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  //Display all catgories.
  $drivers = find_by_id('drivers',(int)$_GET['id']);
  if(!$drivers){
    $session->msg("d","Missing categorie id.");
    redirect('drivers.php');
  }
?>

<?php
if(isset($_POST['edit_driver'])){
  $req_field = array('drivers-name');
  validate_fields($req_field);
  $driver_name = remove_junk($db->escape($_POST['drivers-name']));
  if(empty($errors)){
        $sql = "UPDATE drivers SET name='{$driver_name}'";
       $sql .= " WHERE id='{$drivers['id']}'";
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Successfully updated driver");
       redirect('drivers.php',false);
     } else {
       $session->msg("d", "Sorry! Failed to Update");
       redirect('drivers.php',false);
     }
  } else {
    $session->msg("d", $errors);
    redirect('drivers.php',false);
  }
}
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
   <div class="col-md-12">
     <?php echo display_msg($msg); ?>
   </div>
   <div class="col-md-5">
     <div class="panel panel-default">
       <div class="panel-heading">
         <strong>
           <span class="glyphicon glyphicon-th"></span>
           <span>Editing <?php echo remove_junk(ucfirst($drivers['name']));?></span>
        </strong>
       </div>
       <div class="panel-body">
         <form method="post" action="edit-driver.php?id=<?php echo (int)$drivers['id'];?>">
           <div class="form-group">
               <input type="text" class="form-control" name="drivers-name" value="<?php echo remove_junk(ucfirst($drivers['name']));?>">
           </div>
           <button type="submit" name="edit_driver" class="btn btn-primary">Update driver</button>
       </form>
       </div>
     </div>
   </div>
</div>



<?php include_once('layouts/footer.php'); ?>
