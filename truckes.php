<?php
  $page_title = 'All Trucks';
  require_once('includes/load.php');
  
  $all_trucks = find_all('truckes');
  
  // Function to find a truck by name
  function find_truck_by_name($name) {
    global $db;
    $sql = "SELECT * FROM truckes WHERE name='{$name}' LIMIT 1";
    $result = find_by_sql($sql);
    return $result ? array_shift($result) : false;
  }
  
  if(isset($_POST['add_truckes'])){
    $req_field = array('truckes-name');
    validate_fields($req_field);
    $truck_name = remove_junk($db->escape($_POST['truckes-name']));
    
    // Check if a truck with the same name already exists
    $existing_truck = find_truck_by_name($truck_name);
    
    if($existing_truck) {
      $session->msg("d", "Truck with the same name already exists!");
      redirect('truckes.php', false);
    }
    
    if(empty($errors)){
      $sql  = "INSERT INTO truckes (name)";
      $sql .= " VALUES ('{$truck_name}')";
      if($db->query($sql)){
        $session->msg("s", "Successfully Added New Truck");
        redirect('truckes.php', false);
      } else {
        $session->msg("d", "Sorry Failed to insert.");
        redirect('truckes.php', false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('truckes.php', false);
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
            <span>Add New Truck</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="truckes.php">
            <div class="form-group">
                <input type="text" class="form-control" name="truckes-name" placeholder="Truck Num">
            </div>
            <button type="submit" name="add_truckes" class="btn btn-primary">Add Truck</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>All Trucks</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Trucks</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_trucks as $truck):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($truck['name'])); ?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="edit_truck.php?id=<?php echo (int)$truck['id'];?>"  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="delete_truck.php?id=<?php echo (int)$truck['id'];?>"  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
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
