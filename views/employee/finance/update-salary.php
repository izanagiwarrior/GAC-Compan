<?php 
  include 'header.php'; 
  $salary_id = $_GET['id'];
  $row = $dbconnect->query("SELECT * FROM salary WHERE salary_id = '$salary_id'");
  $data = $row->fetch();
  $row_div = $dbconnect->query("SELECT * FROM employee");
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update Salary</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Update Salary</h6>
		</div>  
		
		<form method="post" action="../../../system/update-salary.php">
			<div class="card-body">
                <div class="form-group">
                  <label>Salary ID</label>
                	<input type="text" class="form-control form-control-sm" name="salary_id" value="<?php echo $data['salary_id'] ?>" readonly>
                </div>
                <div class="form-group">
                	<label>Salary Date</label>
                	<input type="date" class="form-control form-control-sm" name="salary_date" value="<?php echo $data['salary_date'] ?>" required>
                </div>
                <div class="form-group">
                	<label>Salary Amount</label>
                	<input type="text" class="form-control form-control-sm" name="salary_amount" value="<?php echo $data['salary_amount'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Choose Employee Name</label>
                    <select id="employee_name" name="employee_name" class="form-control form-control-sm">
					          <?php while($data = $row_div->fetch()){ ?>
                    <option value="<?php echo $data['employee_name']?>"><?php echo $data['employee_name']?></option>
					          <?php } ?>
                    </select>
				</div>
		    </div>
		    <div class="card-footer al-right">
	                <input type="submit" class="btn btn-sm btn-warning" value="Update Salary">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>