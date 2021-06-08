<?php
include 'header.php';
?>


<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
	<!-- TITLE -->
	<span><i class="fa fa-angle-right">&nbsp;</i>Add Production</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->

<div class="row justify-content-center">
	<div class="col-lg-6">
		<!-- DataTales Example -->
		<div class="card shadow mb-4">

			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-dark">Add Production</h6>
			</div>

			<form method="post" action="../../system/add-production.php">
				<div class="card-body">
					<h5 class="mb-4">Schedule</h5>
					<tr>
						<div class="form-group">
							<label>Customer ID</label>
							<input type="text" class="form-control form-control-sm" name="customer" placeholder="Input Customer . ." required>
						</div>
						<div class="form-group">
							<label>Order Quantity</label>
							<input type="text" class="form-control form-control-sm" name="order_quantity" placeholder="Input Order Quantity . ." required>
						</div>

						<h5 class="my-4">Production</h5>

						<div class="form-group">
							<label>Start</label>
							<select name="start" id="cars" class="form-control form-control-sm" required>
								<option value="07.00">07.00</option>
								<option value="08.00">08.00</option>
								<option value="09.00">09.00</option>
								<option value="10.00">10.00</option>
								<option value="11.00">11.00</option>
								<option value="12.00">12.00</option>
							</select>
						</div>
						<div class="form-group">
							<label>Stop</label>
							<select name="stop" id="cars" class="form-control form-control-sm" required>
								<option value="13.00">13.00</option>
								<option value="14.00">14.00</option>
								<option value="15.00">15.00</option>
								<option value="16.00">16.00</option>
								<option value="17.00">17.00</option>
							</select>
						</div>
						<div class="form-group">
							<label>Hours</label>
							<input type="text" class="form-control form-control-sm" name="hours" placeholder="Input Hours . ." required>
						</div>
						<div class="form-group">
							<label>Finish Good</label>
							<input type="number" class="form-control form-control-sm" name="finish_good" placeholder="Input Finish Good . ." required>
						</div>
						<div class="form-group">
							<label>Defect Product</label>
							<input type="text" class="form-control form-control-sm" name="defect_product" placeholder="Input Defect Product . ." required>
						</div>
						<div class="card-footer al-right">
							<input type="submit" class="btn btn-sm btn-success" value="Add Production">
						</div>
			</form>

		</div>
	</div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>