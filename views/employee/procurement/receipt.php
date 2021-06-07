<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM receipt");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>receipt</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-10">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"> RECEIPT </h6>
      </div>  

      <div class="card-body">
    

      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>RECEIPT ID</th>
              <th>RECEIPT DATE</th>
              <th>RECEIPT DECS</th>
              <th>QUANTITIY</th>
              <th>PRICE</th>
              <th>TOTAL AMOUNT</th>
              <th>TRANSACTION ID</th>
            </tr>
          </thead>
          <tbody>
          
            <?php if($row->rowCount() > 0){
              $no = 1;
              while($data = $row->fetch()){
            ?>

            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $data['receipt_id'] ?></td>
              <td><?php echo $data['receipt_date'] ?></td>
              <td><?php echo $data['receipt_desc'] ?></td>
              <td><?php echo $data['quantity'] ?></td>
              <td><?php echo $data['price'] ?></td>
              <td><?php echo $data['total_amount'] ?></td>
              <td><?php echo $data['transaction_id'] ?></td>

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