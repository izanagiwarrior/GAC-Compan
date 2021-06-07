<?php 
  include 'header.php'; 
  $receipt_id = $_GET['id'];
  $row = $dbconnect->query("SELECT * FROM receipt WHERE receipt_id = '$receipt_id'");
  $data = $row->fetch();
  $row_trc = $dbconnect->query("SELECT * FROM procurement_transaction");
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update Receipt</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Update Receipt</h6>
		</div>  
		
		<form method="post" action="../../../system/update-receipt.php">
			<div class="card-body">
                <div class="form-group">
                  <label>Receipt ID</label>
                	<input type="text" class="form-control form-control-sm" name="receipt_id" value="<?php echo $data['receipt_id'] ?>" readonly>
                </div>
                <div class="form-group">
                	<label>Receipt Date</label>
                	<input type="date" class="form-control form-control-sm" name="receipt_date" value="<?php echo $data['receipt_date'] ?>" readonly>
                </div>
                <div class="form-group">
                	<label>Description</label>
                	<input type="text" class="form-control form-control-sm" name="receipt_desc" value="<?php echo $data['receipt_desc'] ?>" required>
                </div>
                <div class="form-group">
                  <label>Total Unit Quantity</label>
	            	  <input type="number" class="form-control form-control-sm" name="quantity" value="<?php echo $data['quantity'] ?>" required>
                </div>
                <div class="form-group">
	            	  <label>Price Unit</label>
	            	  <input type="number" class="form-control form-control-sm" name="price" value="<?php echo $data['price'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Choose Transaction ID</label>
                    <select id="transaction_id" name="transaction_id" class="form-control form-control-sm">
					            <?php while($data = $row_trc->fetch()){ ?>
                    	<option value="<?php echo $data['transaction_id']?>"><?php echo $data['transaction_id']?></option>
					            <?php } ?>
                    </select>
				        </div>
		  </div>
		    <div class="card-footer al-right">
	                <input type="submit" class="btn btn-sm btn-warning" value="Update Receipt">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>