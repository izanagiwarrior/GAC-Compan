<?php 
  include 'header.php'; 
  $product_id = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM product WHERE product_id='$product_id'");
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
		<h6 class="m-0 font-weight-bold text-dark">PRODUCT LIST</h6>
		</div>  
		
		<form method="post" action="../../../system/update_product.php">
			<div class="card-body">
	            <div class="form-group">
	                <label>Product Id</label>
	                <input type="text" class="form-control form-control-sm" name="product_id" value="<?php echo $data['product_id'] ?>" readonly>
	            </div>
				<div class="form-group">
	            	<label>Product Name</label>
	            	<input type="text" class="form-control form-control-sm" name="product_name" value="<?php echo $data['product_name'] ?>" required>
	        	</div>
	        	<div class="form-group">
	            	<label>BOM Id</label>
	            	<input type="text" class="form-control form-control-sm" name="bom_id" value="<?php echo $data['bom_id'] ?>" required>
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