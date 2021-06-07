<?php 
  include 'header.php'; 
  $row_deb = $dbconnect->query("SELECT * FROM account");
  $row_cre = $dbconnect->query("SELECT * FROM account");
?>
  
  
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Add-Journal</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
    
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-dark">Add Journal</h6>
    </div>  
    
    <form method="post" action="../../../System/add-journal.php">
      <div class="card-body">
            <tr>
                <div class="form-group">
                <label>Receipt Date</label>
                <input type="date" class="form-control form-control-sm" name="account_date" placeholder="Input Date . ." required>
                </div>
                <div class="form-group">
                  <label>Debit</label>
                  <select id="debit" name="debit">
                    <?php while($data = $row_deb->fetch()){ ?>
                      <option value="<?php echo $data['account_name']?>"><?php echo $data['account_name']?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Kredit</label>
                  <select id="credit" name="credit">
                    <?php while($data = $row_cre->fetch()){ ?>
                      <option value="<?php echo $data['account_name']?>"><?php echo $data['account_name']?></option>
                    <?php } ?>
                    </select>
                <div class="form-group">
                  <label>Total Debit</label>
                  <input id="total_debit" type="number" class="form-control form-control-sm" name="total_debit" placeholder="Input Debit Amount . ." required>
                 </div>
                <div class="form-group">
                  <label>Total Credit</label>
                  <input id="total_credit" type="number" class="form-control form-control-sm" name="total_credit" placeholder="Input Credit Amount . ." required>
                </div>
        <div class="card-footer al-right">
              <input type="submit" class="btn btn-sm btn-success" value="Create Journal">
          </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>