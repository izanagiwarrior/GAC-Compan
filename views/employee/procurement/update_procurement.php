<?php 
  include 'header.php'; 
  $procurement_id = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM procurement WHERE procurement_id='$procurement_id'");
  $data = $row_od->fetch();
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update Product</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Procurement List</h6>
		</div>  
		
		<!-- FORM HERE -->
  <form method="post" action="../../../system/update_procurement.php">
   <div class="card-body">
      <div class="form-group">
          <label>Procurement Id</label>
          <input type="text" class="form-control form-control-sm" name="procurement_id" value="<?php echo $data['procurement_id'] ?>" readonly>
      </div> 
      <div class="form-group">
          <label>Procurement Date</label>
          <input type="date" class="form-control form-control-sm" name="procurement_date" value="<?php echo $data['procurement_date'] ?>" readonly>
      </div>
          <div class="form-group">
            <label>Procurement Status</label>
                <div class="form-group mx-4">
                    <?php 
                    $A = null;
                    $B = null;

                    switch ($data['procurement_stats']) {
                      case 'Done':
                        $A = 'checked';
                        break;
                      case 'On Going':
                        $B = 'checked';
                      break;  
                    } ?>

                    <input type="radio" name="procurement_stats" value="Done" <?php echo $A; ?>>
                    <label class="mr-2">Done</label>

                    <input type="radio" name="procurement_stats" value="On Going" <?php echo $B; ?>>
                    <label class="mr-2">On Going</label>
                </div>
      <div class="form-group">
          <label>BOM Id</label>
          <input type="text" class="form-control form-control-sm" name="bom_id" value="<?php echo $data['bom_id'] ?>" readonly>
      </div>
      </div>
      <div class="card-footer al-right">
          <input type="submit" class="btn btn-sm btn-warning" value="Submit">
      </div>
        </form>

    </div>
    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>