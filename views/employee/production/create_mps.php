<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM mps");
  if(isset($_GET['message'])){
	if($_GET['message'] == "failed"){
	  $msg = "Material stock is not enough. Please check your material stock!";
	}
  }
  ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Insert MPS</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      	<div class="card-header py-3">
    	    <h6 class="m-0 font-weight-bold text-dark">Create MPS</h6>
    	</div>  

    	<!-- FORM HERE -->
		<form method="post" action="../../../system/create_mps.php">
		<!-- Check Error Message -->
		<?php if (isset($msg)){ ?>
		<div class="alert alert-danger" role="alert">
			<i class="fas fa-exclamation-circle">&nbsp;</i> 
			<?=$msg ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<?php } ?>
		<!-- /Check Error Message -->
			<div class="card-body">	
				<div class="form-group">
	            	<label>Production Date</label>
	            	<input type="date" class="form-control form-control-sm" name="production_date" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Total Production</label>
	            	<input type="text" class="form-control form-control-sm" name="total_production" placeholder="ex:1000" required>
	        	</div>
	        	<div class="form-group">
	            	<label>Due Date</label>
	            	<input type="date" class="form-control form-control-sm" name="due_date" required>
	        	</div>
	        	<div class="form-group">
	            	<label>Production End</label>
	            	<input type="date" class="form-control form-control-sm" name="production_end" required>
				</div>
				<div class="form-group">
	            	<label>Production Status</label>
	            	<input type="text" class="form-control form-control-sm" name="product_stats" value="In process" readonly>
				</div>
				<div class="form-group">
	            	<label>Product ID</label>
	            	<select class="form-control form-control-sm" name="product_id" required>
						<option value=""> --- Choose Product ---</option>
						<option value="1">1 : Stirling </option>
					</select>
				</div>
		    </div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-success" value="Submit">
	        </div>
        </form>
    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>