<?php 
  include 'header.php'; 
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Report</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Filter report</h6>
		</div>  
		
		<?php 
			//Replace with query code
			$filter = $_POST['filter'];
			if ($filter == "date"){
		?>  
			<form method="get" action="journal.php">
				<div class="card-body">
					<div class="form-group">
						<input type="date" class="form-control form-control-sm" name="date" required>
					</div>
				</div>

				<div class="card-footer al-right">
				<input type="submit" class="btn btn-sm btn-success" value="Submit">
				</div>

			</form>
		
		<?php 
			//Replace with query code
			} elseif ($filter == "month"){
		?>
			<form method="get" action="journal.php">
				<div class="card-body">
					<div class="form-group">
						<select name="month" class="form-control form-control-sm">
							<option>Choose Month</option>
							<option value="01">January</option>
							<option value="02">February</option>
							<option value="03">March</option>
							<option value="04">April</option>
							<option value="05">May</option>
							<option value="06">June</option>
							<option value="07">July</option>
							<option value="08">August</option>
							<option value="09">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option> 
						</select>
					</div>
				</div>

				<div class="card-footer al-right">
				<input type="submit" class="btn btn-sm btn-success" value="Submit">
				</div>

			</form>
		<?php 
			//Replace with query code
		} elseif ($filter == "year"){
		?>
			<form method="get" action="journal.php">
				<div class="card-body">
					<div class="form-group">
						<input type="year" class="form-control form-control-sm" name="year" required>
					</div>
				</div>

				<div class="card-footer al-right">
				<input type="submit" class="btn btn-sm btn-success" value="Submit">
				</div>

			</form>
		<?php 
			}
		?>
    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>
<!-- FORM HERE -->
