<?php 
  include 'header.php'; 
  $row_finance = $dbconnect->query("SELECT * FROM employee where division_id = 2");
  $row_prod = $dbconnect->query("SELECT * FROM employee where division_id = 1");
  $row_proc = $dbconnect->query("SELECT * FROM employee where division_id = 3");
  $division = $dbconnect->query("SELECT * FROM division");
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Add Salary</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Add Salary</h6>
		</div>  
		
		<form method="post" action="../../../system/add-salary.php">
			<div class="card-body">
            <tr>
                <div class="form-group">
                    <label>Choose a Division</label>
                    <select id="division_id" class="form-control form-control-sm" name="division_id">
					<?php while($data = $division->fetch()){ ?>
                    	<option value="<?php echo $data['division_id']?>"><?php echo $data['division_name']?></option>
					<?php } ?>
                    </select>
				</div>
				<div id="finance_list" class="form-group">
                    <label>Choose a Employee Name</label>
                    <select id="employee_finance" class="form-control form-control-sm" name="employee_finance">
					<?php while($data = $row_finance->fetch()){ ?>
                    	<option value="<?php echo $data['employee_id']?>"><?php echo $data['employee_name']?></option>
					<?php } ?>
                    </select>
				</div>
                <div id="prod_list" class="form-group">
                    <label>Choose a Employee Name</label>
                    <select id="employee_prod" class="form-control form-control-sm" name="employee_prod">
					<?php while($data = $row_prod->fetch()){ ?>
                    	<option value="<?php echo $data['employee_id']?>"><?php echo $data['employee_name']?></option>
					<?php } ?>
                    </select>
				</div>
                <div id="proc_list" class="form-group">
                    <label>Choose a Employee Name</label>
                    <select id="employee_proc" class="form-control form-control-sm" name="employee_proc">
					<?php while($data = $row_proc->fetch()){ ?>
                    	<option value="<?php echo $data['employee_id']?>"><?php echo $data['employee_name']?></option>
					<?php } ?>
                    </select>
				</div>
                <div class="form-group">
	            	<label>Salary Amount</label>
	            	<input id="salary_amount" type="number" class="form-control form-control-sm" name="salary_amount" placeholder="Input Salary Amount . ." required>
	        	</div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-success" value="Add Salary">
	        </div>
        </div>
        </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#finance_list').css('display','none')
        $('#prod_list').css('display','block')
        $('#proc_list').css('display','none')
    });
    $('#mps_price').change(function(){
        $('#salary_amount').val($(this).val())
    })
    $('#division_id').change(function(){
        if ($(this).val() == 1) {
            $('#prod_list').css('display','block')
            $('#finance_list').css('display','none')
            $('#proc_list').css('display','none')
            $('#salary_amount')
        }else if($(this).val() == 2) {
            $('#prod_list').css('display','none')
            $('#finance_list').css('display','block')
            $('#proc_list').css('display','none')
            $('#salary_amount')

        }else if($(this).val() == 3) {
            $('#prod_list').css('display','none')
            $('#finance_list').css('display','none')
            $('#proc_list').css('display','block')
            $('#salary_amount')   
        } 
    })
</script>


<!-- End of Content -->

<?php include 'footer.php' ?>