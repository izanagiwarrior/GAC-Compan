<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM procurement_transaction");
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Add Receipt</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Add Receipt</h6>
		</div>  
		
		<form method="post" action="../../../system/add-receipt.php">
			<div class="card-body">
            <tr>
                <div class="form-group">
	            	<label>Description</label>
	            	<input type="text" class="form-control form-control-sm" name="receipt_desc" placeholder="Input Description . ." required>
                </div>
                <div class="form-group">
	            	<label>Total Unit Quantity</label>
	            	<input type="number" class="form-control form-control-sm" name="quantity" placeholder="Input Quantity . ." required>
                </div>
                <div class="form-group">
	            	<label>Price Unit</label>
	            	<input type="number" class="form-control form-control-sm" name="price" placeholder="Input Price . ." required>
                </div>
                <div class="form-group">
                    <label>Choose a Transaction ID</label>
                    <select id="transaction_id" class="form-control form-control-sm" name="transaction_id">
					          <?php while($data = $row->fetch()){ ?>
                    	<option value="<?php echo $data['transaction_id']?>"><?php echo $data['transaction_id']?></option>
					          <?php } ?>
                    </select>
				        </div>
	    </div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-success" value="Add Receipt">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>

