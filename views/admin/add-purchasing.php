<?php
include 'header.php';
?>


<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
	<!-- TITLE -->
	<span><i class="fa fa-angle-right">&nbsp;</i>Add Purchasing</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->

<div class="row justify-content-center">
	<div class="col-lg-6">
		<!-- DataTales Example -->
		<div class="card shadow mb-4">

			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-dark">Add Purchasing</h6>
			</div>

			<form method="post" action="../../system/add-purchasing.php">
				<div class="card-body">
					<tr>
						<div class="form-group">
							<label>Date</label>
							<input type="date" class="form-control form-control-sm" name="date" required>
						</div>
						<div class="form-group">
							<label>Material Name</label>
							<input type="text" class="form-control form-control-sm" name="material_name" placeholder="Input Material Name . ." required>
						</div>
						<div class="form-group">
							<label>Quantity</label>
							<input type="number" class="form-control form-control-sm" name="quantity" placeholder="Input Quantity . ." required>
						</div>
						<div class="form-group">
							<label>Price</label>
							<input type="number" class="form-control form-control-sm" name="price" placeholder="Input Price . ." required>
						</div>
				</div>
				<div class="card-footer al-right">
					<input type="submit" class="btn btn-sm btn-success" value="Add Purchasing">
				</div>
			</form>

		</div>
	</div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>