<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM product");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Insert Product</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      	<div class="card-header py-3">
    	    <h6 class="m-0 font-weight-bold text-dark">Insert Product</h6>
    	</div>  

    	<!-- FORM HERE -->
		<form method="post" action="../../../system/create_product.php">
			<div class="card-body">	
				<div class="form-group">
	            	<label>Product Name</label>
	            	<input type="text" class="form-control form-control-sm" name="product_name" placeholder="Insert Name . ." required>
	        	</div>
	        	<div class="form-group">
	        		<label>Product Stock</label>
	            	<input type="text" class="form-control form-control-sm" name="product_stock" placeholder="Input Stock" required>
	        	</div>
	        	<div class="form-group">
	            	<label>BOM Id</label>
	            	<input type="text" class="form-control form-control-sm" name="bom_id" placeholder="Insert BOM Id . ." required>
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