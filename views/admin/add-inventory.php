<?php
include 'header.php';
if ($_SESSION['div'] != 'inventory') {
    header("location: ../" . $_SESSION['role'] . "/home.php?page=home");
}
?>


<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
    <!-- TITLE -->
    <span><i class="fa fa-angle-right">&nbsp;</i>Add Inventory</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->

<div class="row justify-content-center">
    <div class="col-lg-6">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Add Inventory</h6>
            </div>

            <form method="post" action="../../system/add-inventory.php">
                <div class="card-body">
                    <h5 class="mb-4">Schedule</h5>
                    <tr>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="cars" class="form-control form-control-sm" required>
                                <option value="Warehouse of Finished Product">Warehouse of Finished Product</option>
                                <option value="Warehouse of Unfinished Product">Warehouse of Unfinished Product</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Material Name</label>
                            <select name="product_name" id="cars" class="form-control form-control-sm" required>
                                <option value="Tierkarte">Tierkarte</option>
                                <option value="Wood">Wood</option>
                                <option value="Acrylic">Acrylic</option>
                                <option value="ABS Plastic">ABS Plastic</option>
                                <option value="Lamps">Lamps</option>
                                <option value="On-off switch">On-off switch</option>
                                <option value="Speaker">Speaker</option>
                                <option value="Battery">Battery</option>
                                <option value="Mainboard">Mainboard</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Stock Avaibilty</label>
                            <input type="text" class="form-control form-control-sm" name="stock" placeholder="Input Stock Avaibilty . ." required>
                        </div>

                        <div class="form-group">
                            <label>Stored</label>
                            <select name="stored" id="cars" class="form-control form-control-sm" required>
                                <option value="Aisle 1">Aisle 1</option>
                                <option value="Aisle 2">Aisle 2</option>
                                <option value="Aisle 3">Aisle 3</option>
                                <option value="Aisle 4">Aisle 4</option>
                                <option value="Aisle 5">Aisle 5</option>
                                <option value="Aisle 6">Aisle 6</option>
                                <option value="Aisle 7">Aisle 7</option>
                                <option value="Aisle 8">Aisle 8</option>
                                <option value="Aisle 9">Aisle 9</option>
                                <option value="Aisle 10">Aisle 10</option>
                                <option value="Aisle A">Aisle A</option>
                                <option value="Aisle B">Aisle B</option>
                                <option value="Aisle C">Aisle C</option>
                                <option value="Aisle D">Aisle D</option>
                                <option value="Aisle E">Aisle E</option>
                                <option value="Aisle F">Aisle F</option>
                                <option value="Aisle G">Aisle G</option>
                                <option value="Aisle H">Aisle H</option>
                                <option value="Aisle I">Aisle I</option>
                                <option value="Aisle J">Aisle J</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Received Data</label>
                            <input type="date" class="form-control form-control-sm" name="received_date" placeholder="Input Received Data . ." required>
                        </div>

                        <div class="card-footer al-right">
                            <input type="submit" class="btn btn-sm btn-success" value="Add Inventory">
                        </div>
            </form>

        </div>
    </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>