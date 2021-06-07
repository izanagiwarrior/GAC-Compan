<?php 
  include 'header.php'; 
  $request_id = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM material_request WHERE request_id='$request_id'");
  $data = $row_od->fetch();
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update Material</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">MATERIAL REQUEST</h6>
		</div>  
		
		<form method="post" action="../../../system/update_material_req.php">
			<div class="card-body">
	            <div class="form-group">
	                <label>Request Id</label>
	                <input type="text" class="form-control form-control-sm" name="request_id" value="<?php echo $data['request_id'] ?>" readonly>
	            </div>
				<div class="form-group">
	            	<label>Material Id</label>
	            	<input type="text" class="form-control form-control-sm" name="material_id" value="<?php echo $data['material_id'] ?>" readonly>
	        	</div>
				<div class="form-group">
	            	<label>Material Amount</label>
	            	<input type="text" class="form-control form-control-sm" name="material_amount" value="<?php echo $data['material_amount'] ?>" readonly>
	        	</div>
	        	<div class="form-group">
					<label>Material Status</label>
					</br>Status : <?php echo $data['material_status'] ?>
		            <div class="form-group mx-4">
		              	<?php 
		              	$A = null;
						$B = null;

		              	switch ($data['material_status']) {
			                case 'Done':
			                  $A = 'checked';
			                  break;
		              		case 'Waiting':
							  $B = 'checked';
							  break;  
		              	} ?>

		                <input type="radio" name="material_status" value="Done" <?php echo $A; ?>>
		                <label class="mr-2">Done</label>

						<input type="radio" name="material_status" value="Waiting" <?php echo $B; ?>>
						<label class="mr-2">Waiting</label>
		            </div>
	        	</div>
		    </div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-warning" value="Submit">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>