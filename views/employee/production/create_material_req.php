<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM material_request");
  $data = $row->fetch();
  $row_div = $dbconnect->query("SELECT * FROM material");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Material Request</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      	<div class="card-header py-3">
    	    <h6 class="m-0 font-weight-bold text-dark">Material Request</h6>
    	</div>  

    	<!-- FORM HERE -->
		<form method="post" action="../../../system/create_material_req.php">
			<div class="card-body">	
				<div class="form-group">
	            	<label>Material ID</label>
                    <select id="material_id" name="material_id" class="form-control form-control-sm">
					          <?php while($data = $row_div->fetch()){ ?>
                    <option value="<?php echo $data['material_id']?>"> <?php echo $data['material_id']?></option>
					          <?php } ?>
                    </select>
	        	</div>
	        	<div class="form-group">
	        		<label>Material Amount</label>
	            	<input type="text" class="form-control form-control-sm" name="material_amount" placeholder="Input Amount . ." required>
	        	</div>
	        	<div class="form-group">
	            	<label>Request Status</label>
	            	<input type="text" class="form-control form-control-sm" name="material_status" value="Waiting" readonly>
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