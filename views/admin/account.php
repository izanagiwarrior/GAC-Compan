<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM account")
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Account</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-10">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">List Account</h6>
      </div>  

      <div class="card-body">
      
      <!-- BUTTON-->
      <div class="pb-3"><a href="add-account.php" class="btn btn-sm btn-success"><i class="fas fa-fw fa-plus">&nbsp;</i>Add Account</a></div>
      <!-- End BUTTON -->

      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>Account NO</th>
              <th>Account Name</th>
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
                <td><?php echo $data['account_no'] ?></td>
                <td><?php echo $data['account_name'] ?></td>
                <td align="center">
                  <a href="update-account.php?id=<?php echo $data['account_id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                  <a href="../../system/delete-account.php?id=<?php echo $data['account_id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-fw fa-trash"></i></a>
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