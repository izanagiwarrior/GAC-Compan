<?php include 'header.php'; ?>

<!-- CONTENT HERE -->

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Home</span>
</div>

<!-- Content Row -->
<div class="row justify-content-center pt-7">



  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-4 mb-4">
    <a href="production.php?page=1A" class="link">
      <div class="card card-link border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h5 mb-0 font-weight-bold text-success text-uppercase mb-1">PRODUCTION</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-address-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-4 mb-4">
    <a href="purchasing.php?page=2A" class="link">
      <div class="card border-left-info card-link shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h5 mb-0 font-weight-bold text-info text-uppercase mb-1">PURCHASING</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-address-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-4 mb-4">
    <a href="inventory.php?page=3A" class="link">
      <div class="card border-left-danger card-link shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h5 mb-0 font-weight-bold text-danger text-uppercase mb-1">INVENTORY</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-address-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>
</div>

<p class="text-center">Hello, <?=$_SESSION['name']?>. You can only access <?=$_SESSION['div']?></p>

<!-- END OF CONTENT -->

<?php include 'footer.php'; ?>