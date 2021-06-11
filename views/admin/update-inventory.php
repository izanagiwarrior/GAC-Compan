<?php
include 'header.php';
if ($_SESSION['div'] != 'inventory') {
    header("location: ../" . $_SESSION['role'] . "/home.php?page=home");
}
$id = $_GET['id'];
$row = $dbconnect->query("SELECT * FROM inventory WHERE id = '$id'");
$data = $row->fetch();
?>


<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
    <!-- TITLE -->
    <span><i class="fa fa-angle-right">&nbsp;</i>Update Inventory</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->

<div class="row justify-content-center">
    <div class="col-lg-6">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Update Inventory</h6>
            </div>

            <form method="post" action="../../system/update-inventory.php">
                <div class="card-body">
                    <h5 class="mb-4">Schedule</h5>
                    <tr>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="cars" class="form-control form-control-sm" required>
                                <option value="Warehouse of Finished Product" <?php echo 'Warehouse of Finished Product' == $data['status'] ? 'selected' : '' ?>>Warehouse of Finished Product</option>
                                <option value="Warehouse of Unfinished Product" <?php echo 'Warehouse of Unfinished Product' == $data['status'] ? 'selected' : '' ?>>Warehouse of Unfinished Product</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Material Name</label>
                            <select name="product_name" id="cars" class="form-control form-control-sm" required>
                                <option value="Tierkarte" <?php echo 'Tierkarte' == $data['product_name'] ? 'selected' : '' ?>>Tierkarte</option>
                                <option value="Wood" <?php echo 'Wood' == $data['product_name'] ? 'selected' : '' ?>>Wood</option>
                                <option value="Acrylic" <?php echo 'Acrylic' == $data['product_name'] ? 'selected' : '' ?>>Acrylic</option>
                                <option value="ABS Plastic" <?php echo 'ABS Plastic' == $data['product_name'] ? 'selected' : '' ?>>ABS Plastic</option>
                                <option value="Lamps" <?php echo 'Lamps' == $data['product_name'] ? 'selected' : '' ?>>Lamps</option>
                                <option value="On-off switch" <?php echo 'On-off switch' == $data['product_name'] ? 'selected' : '' ?>>On-off switch</option>
                                <option value="Speaker" <?php echo 'Speaker' == $data['product_name'] ? 'selected' : '' ?>>Speaker</option>
                                <option value="Battery" <?php echo 'Battery' == $data['product_name'] ? 'selected' : '' ?>>Battery</option>
                                <option value="Mainboard" <?php echo 'Mainboard' == $data['product_name'] ? 'selected' : '' ?>>Mainboard</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Stock Avaibilty</label>
                            <input type="text" class="form-control form-control-sm" name="stock" value="<?php echo $data['stock'] ?>" placeholder="Input Stock Avaibilty . ." required>
                        </div>

                        <div class="form-group">
                            <label>Stored</label>
                            <select name="stored" id="cars" class="form-control form-control-sm" required>
                                <option value="Aisle 1" <?php echo 'Aisle 1' == $data['stored'] ? 'selected' : '' ?>>Aisle 1</option>
                                <option value="Aisle 2" <?php echo 'Aisle 2' == $data['stored'] ? 'selected' : '' ?>>Aisle 2</option>
                                <option value="Aisle 3" <?php echo 'Aisle 3' == $data['stored'] ? 'selected' : '' ?>>Aisle 3</option>
                                <option value="Aisle 4" <?php echo 'Aisle 4' == $data['stored'] ? 'selected' : '' ?>>Aisle 4</option>
                                <option value="Aisle 5" <?php echo 'Aisle 5' == $data['stored'] ? 'selected' : '' ?>>Aisle 5</option>
                                <option value="Aisle 6" <?php echo 'Aisle 6' == $data['stored'] ? 'selected' : '' ?>>Aisle 6</option>
                                <option value="Aisle 7" <?php echo 'Aisle 7' == $data['stored'] ? 'selected' : '' ?>>Aisle 7</option>
                                <option value="Aisle 8" <?php echo 'Aisle 8' == $data['stored'] ? 'selected' : '' ?>>Aisle 8</option>
                                <option value="Aisle 9" <?php echo 'Aisle 9' == $data['stored'] ? 'selected' : '' ?>>Aisle 9</option>
                                <option value="Aisle 10" <?php echo 'Aisle 10' == $data['stored'] ? 'selected' : '' ?>>Aisle 10</option>
                                <option value="Aisle A" <?php echo 'Aisle A' == $data['stored'] ? 'selected' : '' ?>>Aisle A</option>
                                <option value="Aisle B" <?php echo 'Aisle B' == $data['stored'] ? 'selected' : '' ?>>Aisle B</option>
                                <option value="Aisle C" <?php echo 'Aisle C' == $data['stored'] ? 'selected' : '' ?>>Aisle C</option>
                                <option value="Aisle D" <?php echo 'Aisle D' == $data['stored'] ? 'selected' : '' ?>>Aisle D</option>
                                <option value="Aisle E" <?php echo 'Aisle E' == $data['stored'] ? 'selected' : '' ?>>Aisle E</option>
                                <option value="Aisle F" <?php echo 'Aisle F' == $data['stored'] ? 'selected' : '' ?>>Aisle F</option>
                                <option value="Aisle G" <?php echo 'Aisle G' == $data['stored'] ? 'selected' : '' ?>>Aisle G</option>
                                <option value="Aisle H" <?php echo 'Aisle H' == $data['stored'] ? 'selected' : '' ?>>Aisle H</option>
                                <option value="Aisle I" <?php echo 'Aisle I' == $data['stored'] ? 'selected' : '' ?>>Aisle I</option>
                                <option value="Aisle J" <?php echo 'Aisle J' == $data['stored'] ? 'selected' : '' ?>>Aisle J</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Received Data</label>
                            <input type="date" class="form-control form-control-sm" name="received_date" value="<?php echo $data['received_date'] ?>" placeholder="Input Received Data . ." required>
                        </div>

                        <input type="hidden" class="form-control form-control-sm" name="id" value="<?php echo $id ?>" placeholder="Input Defect Product . ." required>
                        <div class="card-footer al-right">
                            <input type="submit" class="btn btn-sm btn-success" value="Update Inventory">
                        </div>
                    </tr>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>