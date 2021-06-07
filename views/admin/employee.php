<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM employee")
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Employee</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-10">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">List Employee</h6>
      </div>  

      <div class="card-body">
      
      <!-- BUTTON-->
      <div class="pb-3"><a href="add-employee.php" class="btn btn-sm btn-success"><i class="fas fa-fw fa-plus">&nbsp;</i>Add Employee</a></div>
      <!-- End BUTTON -->

      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>Username</th>
              <th>Password</th>
              <th>Employee Name</th>
              <th>Employee Bank</th>
              <th>Account Number</th>
              <th>Division ID</th>
              <th width="5%">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <?php if($row->rowCount() > 0) {
              $no = 1;
              while($data = $row->fetch()){
            ?>

            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['employee_name'] ?></td>
                <td><?php echo $data['employee_bank'] ?></td>
                <td><?php echo $data['account_number'] ?></td>
                <td><?php echo $data['division_id'] ?></td>
                <td align="center">
                  <a href="update-employee.php?id=<?php echo $data['employee_id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                  <a href="../../system/delete-employee.php?id=<?php echo $data['employee_id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-fw fa-trash"></i></a>
                </td>
            </tr>
            
            <?php $no++; }}?>
          </tbody>
        </table>
      </div>
      <!-- END OF TABLE -->
      
      </div>
      
    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>