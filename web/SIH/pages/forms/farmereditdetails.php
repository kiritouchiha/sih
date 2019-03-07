<?php

  include_once "../../../configure.php";
  session_start();
  if($db){echo "yes";}
  else {echo "no";}
  $lot_id = $_REQUEST['lotid1'];
  $sql = "SELECT * FROM farmer WHERE LOT_ID = '$lot_id'"; 
  $result = mysqli_query($db,$sql);
  while($row = mysqli_fetch_array($result)){
  $farmerid = $row['FARM_ID'];
  $lotid = $row['LOT_ID'];
  $lotvariety = $row['LOT_VARIETY'];
  $lottype = $row['LOT_TYPE'];
  $harvesttime = $row['HARVEST_TIME'];
  $lotamount = $row['LOT_AMOUNT'];
  $elevatorid = $row['ELEVATOR_ID'];
  }
  mysqli_close($db);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Farm to Fork</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/icheck/skins/all.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />

</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html">
          <img src="../../images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html">
          <img src="../../images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="../samples/search.html" class="nav-link">Search Product
              
            </a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Ram Lal !</span>
              <img class="img-xs rounded-circle" src="../../images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                
              </a>
              
              <a class="dropdown-item" href="../samples/login.html">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="../../images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Ram Lal</p>
                  <div>
                    <small class="designation text-muted">Farmer</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/farmerprofile.html">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Farmer Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/../../newlot.html">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Submit New Lot Detail</span>
            </a>
          </li>                     
          
          
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Lot Details</h4>
                  <p class="card-description">
                    Enter Elevated Lot Details
                  </p>
                  <form class="forms-sample" action ="updatelotdetails.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">Enter your ID</label>
                      <input type="text" name ="your_id"class="form-control" id="exampleInputName1" value="<?php echo "$farmerid";?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Enter Lot ID</label>
                      <input type="text" name = "lotid" class="form-control" id="exampleInputEmail3" placeholder="Lot ID"value="<?php echo "$lotid";?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Enter Lot Type</label>
                      <input type="text" name = "lottype" class="form-control" id="exampleInputEmail3" placeholder="Lot Type"value="<?php echo "$lottype";?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Enter Lot Variety</label>
                      <input type="text" name = "lotvariety" class="form-control" id="exampleInputEmail3" placeholder="Lot Variety"value="<?php echo "$lotvariety";?>">
                    </div>  
                    <div class="form-group">
                      <label for="exampleInputEmail3">Enter Lot Amount</label>
                      <input type="text" name = "lotamount" class="form-control" id="exampleInputEmail3" placeholder="Lot Amount" value="<?php echo "$lotamount";?>">
                    </div>  
                    <div class="form-group">
                      <label for="exampleInputEmail3">Enter Harvest Time </label>
                      <input type="text" name = "harvesttime" class="form-control" id="exampleInputEmail3" placeholder="Month" value="<?php echo "$harvesttime";?>">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputName1">Enter Elevator's ID</label>
                      <input type="text" name = "elevatorid" class="form-control" id="exampleInputName1" placeholder="Elevator ID" value="<?php echo "$elevatorid";?>">
                    </div>  
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-5 d-flex align-items-stretch">
              <div class="row flex-grow">
                
                
              </div>
            </div>
    
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Team IDK made this with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
