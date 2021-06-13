<?php session_start();
include '../../Config/page.php';
include '../../Config/conn.php';
$row = $dbconnect->query("SELECT * FROM inventory");
if ($_SESSION['div'] != 'inventory') {
    header("location: ../" . $_SESSION['role'] . "/home.php?page=home");
}
?>
<title>GAC Company - List Inventory</title>
<!-- Content here -->
<div class="row justify-content-center">
    <div class="col-lg-10">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class=" text-center">
                <h1 class="m-0 font-weight-bold text-dark" style="text-align:center; color:gray;">GAC Company - List Inventory</h6>
            </div>
            <hr />
            <div class="card-body">

                <!-- TABLE HERE -->
                <div class="table-responsive">
                    <table class="table table-sm" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Material ID</th>
                                <th>Material Name</th>
                                <th>Stock Avaibilty</th>
                                <th>Status</th>
                                <th>Stored</th>
                                <th>Received Date</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if ($row->rowCount() > 0) {
                                $no = 1;
                                while ($data = $row->fetch()) {
                            ?>

                                    <tr>
                                        <td style="text-align:center"><?php echo $no ?></td>
                                        <td style="text-align:center"><?php echo $data['id'] ?></td>
                                        <td style="text-align:center"><?php echo $data['product_name'] ?></td>
                                        <td style="text-align:center"><?php echo $data['stock'] ?></td>
                                        <td style="text-align:center"><?php echo $data['status'] ?></td>
                                        <td style="text-align:center"><?php echo $data['stored'] ?></td>
                                        <td style="text-align:center"><?php echo $data['received_date'] ?></td>
                                    </tr>

                            <?php $no++;
                                }
                            } ?>
                        </tbody>
                    </table>
                    <br><br>
                    <h5 style="text-align:center; color:gray;"> === GAC Company === </h5>
                </div>
                <!-- END OF TABLE -->

            </div>

        </div>
    </div>
</div>

<!-- End of Content -->