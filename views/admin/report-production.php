<?php session_start();
include '../../Config/page.php';
include '../../Config/conn.php';
$row = $dbconnect->query("SELECT * FROM production");
if ($_SESSION['div'] != 'production') {
    header("location: ../" . $_SESSION['role'] . "/home.php?page=home");
}
?>
<title>GAC Company - List Production</title>
<!-- Content here -->
<div class="row justify-content-center">
    <div class="col-lg-10">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class=" text-center">
                <h1 class="m-0 font-weight-bold text-dark" style="text-align:center; color:gray;">GAC Company - List Production</h6>
            </div>
            <hr />
            <div class="card-body">

                <!-- TABLE HERE -->
                <div class="table-responsive">
                    <table class="table table-sm" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th>Customer ID</th>
                                <th>Order Quantity</th>
                                <th>Start</th>
                                <th>Stop</th>
                                <th>Hours</th>
                                <th>Finish Good</th>
                                <th>Defect Product</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if ($row->rowCount() > 0) {
                                $no = 1;
                                while ($data = $row->fetch()) {
                            ?>

                                    <tr>
                                        <td style="text-align:center"><?php echo $no ?></td>
                                        <td style="text-align:center"><?php echo $data['customer'] ?></td>
                                        <td style="text-align:center"><?php echo $data['order_quantity'] ?></td>
                                        <td style="text-align:center"><?php echo $data['start'] ?></td>
                                        <td style="text-align:center"><?php echo $data['stop'] ?></td>
                                        <td style="text-align:center"><?php echo $data['hours'] ?></td>
                                        <td style="text-align:center"><?php echo $data['finish_good'] ?></td>
                                        <td style="text-align:center"><?php echo $data['defect_product'] ?></td>
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