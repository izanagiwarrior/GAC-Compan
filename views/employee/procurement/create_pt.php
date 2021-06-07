<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM procurement_transaction");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Insert Procurement Transaction</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
       <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-dark">Insert Procurement Transaction</h6>
     </div>  

     <!-- FORM HERE -->
<form method="post" action="../../../system/create_pt.php">
   <div class="card-body"> 
    <div class="form-group">
            <label>Payment Date</label>
              <input type="date" class="form-control form-control-sm" name="payment_date"  placeholder="payment_date . ." required>
          </div>
          <div class="form-group">
           <label>Material Quantity</label>
              <input type="text" class="form-control form-control-sm" name="material_quantity" placeholder="material quantitiy . ." required>
          </div>
          <div class="form-group">
           <label>Price (/unit)</label>
              <input type="text" class="form-control form-control-sm" name="price_per_unit" placeholder="price per unit . ." required>
          </div>
          <div class="form-group">
           <label>Total Payment</label>
              <input type="text" class="form-control form-control-sm" name="total_payment" placeholder="insert total payment. ." required>
          </div>
          <div class="form-group">
           <label>Due Date</label>
              <input type="date" class="form-control form-control-sm" name="due_date" placeholder="insert due date. ." required>
          </div>
          <div class="form-group">
           <label>Invoice Status</label>
              <input type="text" class="form-control form-control-sm" name="invoice_status" value="Waiting" readonly>
          </div>
          <div class="form-group">
           <label>Procurement Id</label>
              <input type="text" class="form-control form-control-sm" name="procurement_id" placeholder="procurement id. ." required>
          </div>
          <div class="card-footer al-right">
             <input type="submit" class="btn btn-sm btn-success" value="Submit">
         </div>
        </form>
      </div>
    </div>
</div>

<!-- End of Content -->
<?php include 'footer.php' ?>