<?php 
  include 'header.php';
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Add Account</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Add Account</h6>
		</div>  
		
		<form method="post" action="../../system/add-account.php">
			<div class="card-body">
            <tr>
            <div class="form-group">
	            	<label>Account NO</label>
	            	<input type="text" class="form-control form-control-sm" name="account_no" placeholder="Input Account NO . ." required>
	        	    </div>
                <div class="form-group">
	            	<label>Account Name</label>
	            	<input type="text" class="form-control form-control-sm" name="account_name" placeholder="Input Account Name . ." required>
	        	    </div>
        </div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-success" value="Add Account">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>