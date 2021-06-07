<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM procurement_transaction")
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Transaction</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-10">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">List Transaction</h6>
      </div>  

      <div class="card-body">

      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>Procurement ID</th>
              <th>Payment Date</th>
              <th>Material Quantity</th>
              <th>Material Price/Unit</th>
              <th>Total Payment</th>
              <th>Due Date</th>
              <th>Invoice Status</th>
            </tr>
          </thead>
          
          
          
              
              
          

            
                
                
                
                
                
                
                
                
            
            
            
          
        </table>
      </div>
      <!-- END OF TABLE -->
      
      </div>
      
    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>