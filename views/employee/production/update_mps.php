<?php 
  include 'header.php'; 
  $mps_id = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM mps WHERE mps_id='$mps_id'");
  $data = $row_od->fetch();
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update MPS</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">MASTER PRODUCTION SCHEDULE</h6>
		</div>  
		
		<form method="post" action="../../../system/update_mps.php">
			<div class="card-body">
	            <div class="form-group">
	                <label>MPS ID</label>
	                <input type="text" class="form-control form-control-sm" name="mps_id" value="<?php echo $data['mps_id'] ?>" readonly>
	            </div>
				<div class="form-group">
	            	<label>Production Date</label>
	            	<input type="date" class="form-control form-control-sm" name="production_date" value="<?php echo $data['production_date'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Total Production</label>
	            	<input type="text" class="form-control form-control-sm" name="total_production" value="<?php echo $data['total_production'] ?>" required>
	        	</div>
	        	<div class="form-group">
	            	<label>Due Date</label>
	            	<input type="date" class="form-control form-control-sm" name="due_date" value="<?php echo $data['due_date'] ?>" required>
	        	</div>
	        	<div class="form-group">
	            	<label>Production End</label>
	            	<input type="date" class="form-control form-control-sm" name="production_end" value="<?php echo $data['production_end'] ?>" required>
				</div>
				<div class="form-group">
		            <label>Production Status</label>
					</br>Status : <?php echo $data['product_stats'] ?>
		            <div class="form-group mx-4">
		              	<?php 
		              	$A = null;
						$B = null;

		              	switch ($data['product_stats']) {
			                case 'Complete':
			                  $A = 'checked';
			                  break;
		              		case 'In process':
							  $B = 'checked';
							  break;  
		              	} ?>

		                <input type="radio" name="product_stats" value="Complete" <?php echo $A; ?>>
		                <label class="mr-2">Complete</label>

						<input type="radio" name="product_stats" value="In process" <?php echo $B; ?>>
						<label class="mr-2">In process</label>
		            </div>
				<div class="form-group">
	            	<label>Product ID</label>
	            	<input type="text" class="form-control form-control-sm" name="product_id" value="<?php echo $data['product_id'] ?>" readonly>
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