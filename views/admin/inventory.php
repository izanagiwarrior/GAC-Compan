<?php
include 'header.php';
$row = $dbconnect->query("SELECT * FROM inventory");
if ($_SESSION['div'] != 'inventory') {
    header("location: ../" . $_SESSION['role'] . "/home.php?page=home");
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- TITLE -->
    <span><i class="fa fa-angle-right">&nbsp;</i>Inventory</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center">
    <div class="col-lg-10">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">List Inventory</h6>
            </div>

            <div class="card-body">

                <!-- BUTTON-->
                <div class="pb-3"><a href="add-inventory.php" class="btn btn-sm btn-success"><i class="fas fa-fw fa-plus">&nbsp;</i>Add Inventory</a></div>
                <!-- End BUTTON -->

                <!-- TABLE HERE -->
                <div class="table-responsive">
                    <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Material ID</th>
                                <th>Material Name</th>
                                <th>Stock Avaibilty</th>
                                <th>Status</th>
                                <th>Stored</th>
                                <th>Received Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if ($row->rowCount() > 0) {
                                $no = 1;
                                while ($data = $row->fetch()) {
                            ?>

                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data['id'] ?></td>
                                        <td><?php echo $data['product_name'] ?></td>
                                        <td><?php echo $data['stock'] ?></td>
                                        <td><?php echo $data['status'] ?></td>
                                        <td><?php echo $data['stored'] ?></td>
                                        <td><?php echo $data['received_date'] ?></td>
                                        <td align="center">
                                            <a href="update-inventory.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                                            <a href="../../system/delete-inventory.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-fw fa-trash"></i></a>
                                        </td>
                                    </tr>

                            <?php $no++;
                                }
                            } ?>
                        </tbody>
                    </table>
                    <div class="text-right mt-4">
                        <a href="report-inventory.php" class="btn btn-primary" target="_blank">Report</a>
                    </div>
                </div>
                <!-- END OF TABLE -->

            </div>

        </div>
    </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>