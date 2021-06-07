<?php 
  include 'header.php'; 
  $row_div = $dbconnect->query("SELECT * FROM division");
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Add Employee</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Add Employee</h6>
		</div>  
		
		<form method="post" action="../../system/add-employee.php">
			<div class="card-body">
            <tr>
                <div class="form-group">
	            	<label>Username</label> 
	            	<input type="text" class="form-control form-control-sm" name="username" placeholder="Input Username . ." required>
	        	</div>
                <div class="form-group">
	            	<label>Password</label>
	            	<input type="password" class="form-control form-control-sm" name="password" placeholder="Input Password . ." required>
	        	</div>
	            <div class="form-group">
	            	<label>Employee Name</label>
	            	<input type="text" class="form-control form-control-sm" name="employee_name" placeholder="Input Employee Name . ." required>
	        	</div>
	        	<div class="form-group">
	            	<label>Employee Bank</label>
	            	<input type="text" class="form-control form-control-sm" name="employee_bank" placeholder="Input Employee Bank . ." required>
	        	</div>
	        	<div class="form-group">
	        		<label>Account Number</label>
	            	<input type="number" class="form-control form-control-sm" name="account_number" placeholder="Input Account Number . ." required>
	        	</div>
				<div class="form-group">
                    <label>Choose a Division</label>
                    <select id="division_id" class="form-control form-control-sm" name="division_id">
					<?php while($data = $row_div->fetch()){ ?>
                    	<option value="<?php echo $data['division_id']?>"><?php echo $data['division_name']?></option>
					<?php } ?>
                    </select>
				</div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-success" value="Add Employee">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>