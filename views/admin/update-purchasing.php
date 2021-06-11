<?php
include 'header.php';
if ($_SESSION['div'] != 'purchasing') {
    header("location: ../" . $_SESSION['role'] . "/home.php?page=home");
}
$id = $_GET['id'];
$row = $dbconnect->query("SELECT * FROM purchasing WHERE id = '$id'");
$data = $row->fetch();
?>


<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
    <!-- TITLE -->
    <span><i class="fa fa-angle-right">&nbsp;</i>Update Purchasing</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->

<div class="row justify-content-center">
    <div class="col-lg-6">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Update Purchasing</h6>
            </div>

            <form method="post" action="../../system/update-purchasing.php">
                <div class="card-body">
                    <h5 class="mb-4">Schedule</h5>
                    <tr>
                        <div class="form-group">
                            <label>Material Name</label>
                            <select name="material_name" id="cars" class="form-control form-control-sm" required>
                                <option value="Wood" <?php echo 'Wood' == $data['material_name'] ? 'selected' : '' ?>>Wood</option>
                                <option value="Acrylic" <?php echo 'Acrylic' == $data['material_name'] ? 'selected' : '' ?>>Acrylic</option>
                                <option value="ABS Plastic" <?php echo 'ABS Plastic' == $data['material_name'] ? 'selected' : '' ?>>ABS Plastic</option>
                                <option value="Lamps" <?php echo 'Lamps' == $data['material_name'] ? 'selected' : '' ?>>Lamps</option>
                                <option value="On-off switch" <?php echo 'On-off switch' == $data['material_name'] ? 'selected' : '' ?>>On-off switch</option>
                                <option value="Speaker" <?php echo 'Speaker' == $data['material_name'] ? 'selected' : '' ?>>Speaker</option>
                                <option value="Battery" <?php echo 'Battery' == $data['material_name'] ? 'selected' : '' ?>>Battery</option>
                                <option value="Mainboard" <?php echo 'Mainboard' == $data['material_name'] ? 'selected' : '' ?>>Mainboard</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" class="form-control form-control-sm" name="quantity" value="<?php echo $data['quantity'] ?>" placeholder="Input Quantity . ." required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control form-control-sm" name="price" value="<?php echo $data['price'] ?>" placeholder="Input Price . ." required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="cars" class="form-control form-control-sm" required>
                                <option value="Requested" <?php echo 'Requested' == $data['status'] ? 'selected' : '' ?> >Requested</option>
                                <option value="Finished" <?php echo 'Finished' == $data['status'] ? 'selected' : '' ?> >Finished</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control form-control-sm" name="date" value="<?php echo $data['date'] ?>" required>
                        </div>
                        <input type="hidden" class="form-control form-control-sm" name="id" value="<?php echo $id ?>" placeholder="Input Defect Product . ." required>
                        <div class="card-footer al-right">
                            <input type="submit" class="btn btn-sm btn-success" value="Update Purchasing">
                        </div>
                    </tr>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>