<?php 
  include 'header.php'; 
  $transaction_id = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM procurement_transaction WHERE transaction_id='$transaction_id'");
  $data = $row_od->fetch();
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update Procurement transaction</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Transaction List</h6>
		</div>  
		
		<!-- FORM HERE -->
  <form method="post" action="../../../system/update_pt.php">
   <div class="card-body">
          <div class="form-group">
              <label>Transaction Id</label>
              <input type="text" class="form-control form-control-sm" name="transaction_id" value="<?php echo $data['transaction_id'] ?>" readonly>
          </div> 
          <div class="form-group">
              <label>Payment Date</label>
              <input type="date" class="form-control form-control-sm" name="payment_date" value="<?php echo $data['payment_date'] ?>" placeholder="payment_date . ." required>
          </div>
          <div class="form-group">
           <label>Material Quantity</label>
              <input type="text" class="form-control form-control-sm" name="material_quantity" value="<?php echo $data['material_quantity'] ?>" placeholder="material quantitiy . ." required>
          </div>
          <div class="form-group">
           <label>Price (/unit)</label>
              <input type="text" class="form-control form-control-sm" name="price_per_unit" value="<?php echo $data['price_per_unit'] ?>"placeholder="price per unit . ." required>
          </div>
          <div class="form-group">
           <label>Total Payment</label>
              <input type="text" class="form-control form-control-sm" name="total_payment" value="<?php echo $data['total_payment'] ?>"placeholder="Insert total payment. ." required>
          </div>
          <div class="form-group">
           <label>Due Date</label>
              <input type="date" class="form-control form-control-sm" name="due_date" value="<?php echo $data['due_date'] ?>"placeholder="Insert due date. ." required>
          </div>
          <div class="form-group">
           <label>Invoice Status</label>
              <input type="text" class="form-control form-control-sm" name="invoice_status" value="<?php echo $data['invoice_status'] ?>"placeholder="invoce status. ." required>
          </div>
          <div class="form-group">
           <label>Procurement Id</label>
              <input type="text" class="form-control form-control-sm" name="procurement_id" value="<?php echo $data['procurement_id'] ?>" readonly>
          </div>
          <div class="card-footer al-right">
             <input type="submit" class="btn btn-sm btn-success" value="Submit">
         </div>
        </form>
    </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>