<?php 
  include 'header.php'; 
  $account_id = $_GET['id'];
  $row = $dbconnect->query("SELECT * FROM account WHERE account_id = '$account_id'");
  $data = $row->fetch();
  //$row_div = $dbconnect->query("SELECT * FROM division");
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update Account</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Update Account</h6>
		</div>  
		
		<form method="post" action="../../system/update-account.php">
			<div class="card-body">
        <div class="form-group">
          <label>Account ID</label>
          <input type="number" class="form-control form-control-sm" name="account_id" value="<?php echo $data['account_id'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Account NO</label>
          <input type="text" class="form-control form-control-sm" name="account_no" value="<?php echo $data['account_no'] ?>" required>
        </div>
        <div class="form-group">
          <label>Account Name</label>
          <input type="text" class="form-control form-control-sm" name="account_name" value="<?php echo $data['account_name'] ?>" required>
        </div>
			</div>
		  <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-warning" value="Update Account">
	    </div>
    </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>