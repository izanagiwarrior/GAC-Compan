<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM procurement_transaction");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Procurement Transaction</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-10">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">PROCUREMENT TRANSACTION</h6>
      </div>  

      <div class="card-body">
    
      <!-- BUTTON-->
      <div class="pb-3"><a href="create_pt.php" class="btn btn-sm btn-success"><i class="fas fa-fw fa-plus">&nbsp;</i>Insert Procurement Transaction</a></div>
      <!-- End BUTTON -->

      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>TRANSACTION ID</th>
              <th>PAYMENT DATE</th>
              <th>MATERIAL QUANTITY</th>
              <th>PRICE (/unit)</th>
              <th>TOTAL PAYMENT</th>
              <th>DUE DATE</th>
              <th>INVOICE STATUS</th>
              <th>PROCUREMENT ID</th>
              <th width="10%">ACTION</th>
            </tr>
          </thead>
          <tbody>
          
            <?php if($row->rowCount() > 0){
              $no = 1;
              while($data = $row->fetch()){
            ?>

            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $data['transaction_id'] ?></td>
              <td><?php echo $data['payment_date'] ?></td>
              <td><?php echo $data['material_quantity']?></td>
              <td><?php echo $data['price_per_unit'] ?></td>
              <td><?php echo $data['total_payment'] ?></td>
              <td><?php echo $data['due_date'] ?></td>
              <td><?php echo $data['invoice_status'] ?></td>
              <td><?php echo $data['procurement_id'] ?></td>
             <td align="center">
                <a href="update_pt.php?id=<?php echo $data['transaction_id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                <a href="../../../system/delete_pt.php?id=<?php echo $data['transaction_id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-fw fa-trash"></i></a>
              </td>
            </tr>
            
            <?php $no++; }} ?>

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