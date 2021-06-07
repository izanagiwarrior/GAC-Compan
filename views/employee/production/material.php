<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM material");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Material</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-10">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">MATERIAL LIST</h6>
      </div>  

      <div class="card-body">

      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>MATERIAL ID</th>
              <th>MATERIAL NAME</th>
              <th>MATERIAL PRICE</th>
              <th>MATERIAL STOCK</th>
            </tr>
          </thead>
          <tbody>
          
            <?php if($row->rowCount() > 0){
              $no = 1;
              while($data = $row->fetch()){
            ?>

            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $data['material_id'] ?></td>
              <td><?php echo $data['material_name'] ?></td>
              <td><?php echo $data['material_price'] ?></td>
              <td><?php echo $data['material_stock'] ?></td>
              
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