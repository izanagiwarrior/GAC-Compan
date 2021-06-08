<?php
include 'header.php';
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
                            <label>Material Name</label>
                            <input type="text" class="form-control form-control-sm" name="product_name" placeholder="Input Product Name . ." required>
                        </div>
                        <div class="form-group">
                            <label>Stock Avaibilty</label>
                            <input type="text" class="form-control form-control-sm" name="stock" placeholder="Input Stock Avaibilty . ." required>
                        </div>
                        <div class="form-group">
                            <label>Stored</label>
                            <input type="text" class="form-control form-control-sm" name="received_date" placeholder="Input Received Data . ." required>
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