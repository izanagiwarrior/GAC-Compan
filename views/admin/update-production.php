<?php
include 'header.php';
if ($_SESSION['div'] != 'production') {
  header("location: ../" . $_SESSION['role'] . "/home.php?page=home");
}
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
              <label>Customer ID</label>
              <input type="text" class="form-control form-control-sm" name="customer" value="<?php echo $data['customer'] ?>" placeholder="Input Customer . ." required>
            </div>
            <div class="form-group">
              <label>Order Quantity</label>
              <input type="text" class="form-control form-control-sm" name="order_quantity" value="<?php echo $data['order_quantity'] ?>" placeholder="Input Order Quantity . ." required>
            </div>

            <h5 class="my-4">Production</h5>

            <div class="form-group">
              <label>Start</label>
              <select name="start" id="cars" class="form-control form-control-sm" required>
                <option value="07.00" <?php echo '07.00' == $data['start'] ? 'selected' : '' ?> >07.00</option>
                <option value="08.00" <?php echo '08.00' == $data['start'] ? 'selected' : '' ?> >08.00</option>
                <option value="09.00" <?php echo '09.00' == $data['start'] ? 'selected' : '' ?> >09.00</option>
                <option value="10.00" <?php echo '10.00' == $data['start'] ? 'selected' : '' ?> >10.00</option>
                <option value="11.00" <?php echo '11.00' == $data['start'] ? 'selected' : '' ?> >11.00</option>
                <option value="12.00" <?php echo '12.00' == $data['start'] ? 'selected' : '' ?> >12.00</option>
              </select>
            </div>
            <div class="form-group">
              <label>Stop</label>
              <select name="stop" id="cars" class="form-control form-control-sm" required>
                <option value="13.00" <?php echo '13.00' == $data['stop'] ? 'selected' : '' ?> >13.00</option>
                <option value="14.00" <?php echo '14.00' == $data['stop'] ? 'selected' : '' ?> >14.00</option>
                <option value="15.00" <?php echo '15.00' == $data['stop'] ? 'selected' : '' ?> >15.00</option>
                <option value="16.00" <?php echo '16.00' == $data['stop'] ? 'selected' : '' ?> >16.00</option>
                <option value="17.00" <?php echo '17.00' == $data['stop'] ? 'selected' : '' ?> >17.00</option>
              </select>
            </div>
            <div class="form-group">
              <label>Hours</label>
              <input type="text" class="form-control form-control-sm" name="hours" value="<?php echo $data['hours'] ?>" placeholder="Input Hours . ." required>
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
          </tr>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>