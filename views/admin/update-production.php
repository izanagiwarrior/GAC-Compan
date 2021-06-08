<?php
include 'header.php';
$id = $_GET['id'];
$row = $dbconnect->query("SELECT * FROM production WHERE id = '$id'");
$data = $row->fetch();
?>


<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update Production</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->

<div class="row justify-content-center">
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Update Production</h6>
      </div>

      <form method="post" action="../../system/update-production.php">
        <div class="card-body">
          <h5 class="mb-4">Schedule</h5>
          <tr>
            <div class="form-group">
              <label>Customer</label>
              <input type="text" class="form-control form-control-sm" name="customer" value="<?php echo $data['customer'] ?>" placeholder="Input Customer . ." required>
            </div>
            <div class="form-group">
              <label>Order Quantity</label>
              <input type="text" class="form-control form-control-sm" name="order_quantity" value="<?php echo $data['order_quantity'] ?>" placeholder="Input Order Quantity . ." required>
            </div>

            <h5 class="my-4">Production</h5>

            <div class="form-group">
              <label>Start</label>
              <input type="text" class="form-control form-control-sm" name="start" value="<?php echo $data['start'] ?>" placeholder="Input Start . ." required>
            </div>
            <div class="form-group">
              <label>Stop</label>
              <input type="text" class="form-control form-control-sm" name="stop" value="<?php echo $data['stop'] ?>" placeholder="Input Stop . ." required>
            </div>
            <div class="form-group">
              <label>Hours</label>
              <input type="text" class="form-control form-control-sm" name="hours" value="<?php echo $data['hours'] ?>" placeholder="Input Hours . ." required>
            </div>
            <div class="form-group">
              <label>WIP</label>
              <input type="text" class="form-control form-control-sm" name="wip" value="<?php echo $data['wip'] ?>" placeholder="Input WIP . ." required>
            </div>
            <div class="form-group">
              <label>Finish Good</label>
              <input type="text" class="form-control form-control-sm" name="finish_good" value="<?php echo $data['finish_good'] ?>" placeholder="Input Finish Good . ." required>
            </div>
            <div class="form-group">
              <label>Defect Product</label>
              <input type="text" class="form-control form-control-sm" name="defect_product" value="<?php echo $data['defect_product'] ?>" placeholder="Input Defect Product . ." required>
            </div>
            <input type="hidden" class="form-control form-control-sm" name="id" value="<?php echo $id ?>" placeholder="Input Defect Product . ." required>
            <div class="card-footer al-right">
              <input type="submit" class="btn btn-sm btn-success" value="Update Production">
            </div>
      </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>