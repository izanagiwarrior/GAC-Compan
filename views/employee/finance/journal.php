<?php 
  include 'header.php';
  $filter = '1';

   if(isset($_GET['date'])){

    $val = $_GET['date'];
    $filter = "account_date='$val'";

   }elseif(isset($_GET['month'])){

    $val = $_GET['month'];
    $filter = "month(account_date)='$val'";

   }elseif(isset($_GET['year'])){

    $val = $_GET['year'];
    $filter = "year(account_date)='$val'";

   }

   $row = $dbconnect->query("SELECT journal_id, account_date, debit, credit, total_debit, total_credit FROM journal where $filter GROUP BY journal_id, account_date ");
   $row_t1 = $dbconnect->query("SELECT total_debit, SUM(total_debit) AS total_1 FROM journal where $filter");
   $row_t2 = $dbconnect->query("SELECT total_credit, SUM(total_credit) AS total_2 FROM journal where $filter");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Journal</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-10">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">
        <a style="float:right" href="report-print.php?" class="btn btn-md btn-info"><i class="fas fa-fw fa-print"></i>PRINT</a></h6>
      <div class="pb-3"><a href="add-journal.php" class="btn btn-sm btn-success"><i class="fas fa-fw fa-plus">&nbsp;</i>Add journal</a></div>
      </div>  

      <div class="card-body">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">List Debit/Credit</h6>
      </div>  

      <div class="card-body">

      <!-- BUTTON WITH MODAL (POP UP) -->
      <form action="filterreport.php" method="POST">
        <div class="row">
        <div class="col-md-5">
          <div class="form-group">
            <select name="filter" class="form-control form-control-sm">
              <option>Choose Filter . .</option>
              <option value="date">Filter by Date</option>
              <option value="month">Filter by Month</option>
              <option value="year">Filter by Year</option>
            </select>
              <!-- Replace with query code -->


          </div>
        </div>
        <div class="col-md-5">
          <!-- Replace with query code -->
          <button type="submit" class="btn btn-success btn-sm"><i >&nbsp;</i>Apply Filter</button>
        </div>
        </div>
      </form>
      <!-- End BUTTON WITH MODAL (POP UP) -->

      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>Date</th>
              <th>Debit</th>
              <th>Credit</th>
              <th>Total Debit</th>
              <th>Total Kredit</th>
            </tr>
          </thead>
          <tbody>
          
          <!-- Replace with query code -->
      <?php if ($row->rowCount() > 0){
              $no = 1;
              while($data = $row->fetch()){
      ?>

            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data['account_date'] ?></td>
                <td><?php echo $data['debit'] ?></td>
                <td><?php echo $data['credit'] ?></td>
                <td><?php echo $data['total_debit'] ?></td>
                <td><?php echo $data['total_credit'] ?></td>
            </tr>

             <?php $no++ ; }} ?>

             <?php $data = $row_t1->fetch() ?>
             <tr style="font-weight: bold;">
                <td colspan="0">TOTAL</td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $data['total_1'] ?></td>
                <?php $data = $row_t2->fetch() ?>
                <td><?php echo $data['total_2'] ?></td>

              </tr>
          </tbody>
        </table>
      </div>
      <!-- END OF TABLE -->

<!-- End of Content -->
      
      </div>
      
    </div>
  </div>
</div>

<!-- End of Content -->


<?php include 'footer.php' ?>