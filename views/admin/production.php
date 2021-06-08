<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM production")
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Production</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-10">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">List Production</h6>
      </div> 

      <div class="card-body">
      
      <!-- BUTTON-->
      <div class="pb-3"><a href="add-production.php" class="btn btn-sm btn-success"><i class="fas fa-fw fa-plus">&nbsp;</i>Add Production</a></div>
      <!-- End BUTTON -->

      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>Customer ID</th>
              <th>Order Quantity</th>
              <th>Start</th>
              <th>Stop</th>
              <th>Hours</th>
              <th>Finish Good</th>
              <th>Defect Product</th>
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
                <td><?php echo $data['customer'] ?></td>
                <td><?php echo $data['order_quantity'] ?></td>
                <td><?php echo $data['start'] ?></td>
                <td><?php echo $data['stop'] ?></td>
                <td><?php echo $data['hours'] ?></td>
                <td><?php echo $data['finish_good'] ?></td>
                <td><?php echo $data['defect_product'] ?></td>
                <td align="center">
                  <a href="update-production.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                  <a href="../../system/delete-production.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-fw fa-trash"></i></a>
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