<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM bom");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Insert BOM</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      	<div class="card-header py-3">
    	    <h6 class="m-0 font-weight-bold text-dark">Insert BOM</h6>
    	</div>  

    	<!-- FORM HERE -->
		<form method="post" action="../../../system/create_bom.php">
			<div class="card-body">	
				<div class="form-group">
	            	<label>Material Required</label>
	            	<input type="text" class="form-control form-control-sm" name="material_required" placeholder="Material Required . ." required>
	        	</div>
	        	<div class="form-group">
	        		<label>Material Id</label>
	            	<input type="text" class="form-control form-control-sm" name="material_id" placeholder="Material Id . ." required>
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