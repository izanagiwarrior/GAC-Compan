<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM procurement_transaction");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Insert procurement transaction</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
       <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-dark">Insert procurement transaction</h6>
     </div>  

     <!-- FORM HERE -->
<form method="post" action="../../../system/create_invoice.php">
   <div class="card-body"> 
    <div class="form-group">
            <label>payment_date</label>
              <input type="date" class="form-control form-control-sm" name="payment_date"  placeholder="payment_date . ." required>
          </div>
          <div class="form-group">
           <label>material_quantity</label>
              <input type="text" class="form-control form-control-sm" name="material_quantity" placeholder="material quantitiy . ." required>
          </div>
          <div class="form-group">
           <label>price_per_unit</label>
              <input type="text" class="form-control form-control-sm" name="price_per_unit" placeholder="price per unit . ." required>
          </div>
          <div class="form-group">
           <label>total_payment</label>
              <input type="text" class="form-control form-control-sm" name="total_payment" placeholder="Insert total payment. ." required>
          </div>
          <div class="form-group">
           <label>due_date</label>
              <input type="date" class="form-control form-control-sm" name="due_date" placeholder="Insert due date. ." required>
          </div>
          <div class="form-group">
           <label>invoice_status</label>
              <input type="text" class="form-control form-control-sm" name="invoice_status" placeholder="invoce status. ." required>
          </div>
          <div class="form-group">
           <label>procurement_id</label>
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