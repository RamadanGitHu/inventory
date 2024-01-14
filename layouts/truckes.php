<?php
  $page_title = 'All Drivers';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
   
  $all_drivers = find_all('drivers')
?>
<?php
 if(isset($_POST['add_truckes'])){
   $req_field = array('drivers-name');
   validate_fields($req_field);
   $driver_name = remove_junk($db->escape($_POST['drivers-name']));
   if(empty($errors)){
      $sql  = "INSERT INTO drivers (name)";
      $sql .= " VALUES ('{$driver_name}')";
      if($db->query($sql)){
        $session->msg("s", "Successfully Added New Driver");
        redirect('drivers.php',false);
      } else {
        $session->msg("d", "Sorry Failed to insert.");
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
  </div>
   <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Add New Driver</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="drivers.php">
            <div class="form-group">
                <input type="text" class="form-control" name="drivers-name" placeholder="Driver Name">
            </div>
            <button type="submit" name="add_driver" class="btn btn-primary">Add Driver</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>All Drivers</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Drivers</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_drivers as $driver):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($driver['name'])); ?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="edit-driver.php?id=<?php echo (int)$driver['id'];?>"  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="delete_driver.php?id=<?php echo (int)$driver['id'];?>"  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
                          <span class="glyphicon glyphicon-trash"></span>
                        </a>
                      </div>
                    </td>

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
