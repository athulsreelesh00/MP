<?php
session_start();
$name=$_SESSION["n"];
$idd=$_SESSION["idd"];
if($_SESSION["id"]==session_id())
{
  include "connect.php";
  $sql2="SELECT * FROM usign WHERE id= '".$idd."'";
  $result2=mysqli_query($con,$sql2);
  $row2 = mysqli_fetch_array($result2);
 
 
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Welcome </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js2/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css2/vertical-layout-light/style.css">

 <!-- Price List -->
  <link rel="stylesheet" href="style.css">
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="Home.php">
            <img src="images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="Home.php">
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>

      
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                 <!-- onsitefuel logo:  bg1.png -->
            <h1 class="welcome-text"></h1>
           
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <!-- <li class="nav-item dropdown d-none d-lg-block">
          <div class="price-btn blue">
                                    <a class="blue" href="orderplace.php">Back</a>
                                </div>
          </li> -->
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                  <p class="fw-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                  <p class="fw-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold"><?php echo $name; ?></p>
               
              </div>
             
              <a class="dropdown-item" href="logouth.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>


       
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
         
      
         
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Order</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
             
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="history.php">History</a></li>
              </ul>
            </div>

           

          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Profile</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view.php">View</a></li>
              </ul>

              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="edit.php">Edit</a></li>
              </ul>

              <!-- <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="edit.php"><?php echo $idd; ?></a></li>
              </ul> -->
            </div>
          </li>

       
      
        </ul>
      </nav>
    

      

     
         <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title"></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html"></a></li>
              </ul>
            </div>
          </li> -->
        
      
         
        </ul>
      </nav>



      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                 
                 
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                         
                        </div>
                      </div>
                    </div> 
                
                    </div>



<!-- Price php -->

<!-- Price php -->
                    

                <!-- Price List -->
                <?php   
                include 'connect.php';          
                             
    if(isset($_POST["p1"]))
    {
        include 'connect.php';
        $idb=$_SESSION['idb']=$_POST['p1'];
        $sql="SELECT * FROM bunksign WHERE id= '".$_POST['p1']."'";
        $result=mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        $lat2=$row2['latitude'];
        $long2=$row2['longitude'];

        $latitude=$row['latitude'];
        $longitude=$row['longitude'];

    

          $theta = $longitude - $long2;
          $miles = (sin(deg2rad($latitude))) * sin(deg2rad($lat2)) + (cos(deg2rad($latitude)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
          $miles = acos($miles);
          $miles = rad2deg($miles);
          $result3['miles'] = $miles * 60 * 1.1515; 
          // $result['feet'] = $result['miles']*5280;
          // $result['yards'] = $result['feet']/3;
          $result3['kilometers'] = $result3['miles']*1.609344;
          $km=$result3['kilometers'];

        echo "<h2>".$row['name']." Petroleum ".$row['district']." , ".$row['state']."</h2>";
              $name=$_SESSION['n']=$row['name'];
              $district=$_SESSION['dist']=$row['district'];
              $state=$_SESSION['st']=$row['state'];
        echo "Distance: ";
        echo $kmt=$_SESSION['kmt']=$km;
        echo "&nbsp KM";
        echo "<h4>Petrol</h4>";
        $fuel="Petrol";
        $p=$_SESSION['p']=$fuel;
        echo $amt=$_SESSION['amt']=$row['p1'];
           
        echo "&nbsp ₹ per litre<br>";
        echo "Choose Quantity in Litre's:";
       

        echo "<form action='payorder.php' method='post'>
        <div class='form-group'>     
        <select name='select' class='form-control'>
          <option value=''>in Litre</option>
          <option value='1'>01</option>
          <option value='5'>05</option>
          <option value='10'>10</option>
          <option value='15'>15</option>
        </select><br>
        <input type='submit' class='btn btn-primary' name='submit' value='Submit'></form>
      </div>
      ";

      
               

    }

    if(isset($_POST["p2"]))
    {
        include 'connect.php';
        $idb=$_SESSION['idb']=$_POST['p2'];
        $sql="SELECT * FROM bunksign WHERE id= '".$_POST['p2']."'";
        $result=mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        $lat2=$row2['latitude'];
        $long2=$row2['longitude'];

        $latitude=$row['latitude'];
        $longitude=$row['longitude'];

    

          $theta = $longitude - $long2;
          $miles = (sin(deg2rad($latitude))) * sin(deg2rad($lat2)) + (cos(deg2rad($latitude)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
          $miles = acos($miles);
          $miles = rad2deg($miles);
          $result3['miles'] = $miles * 60 * 1.1515; 
          // $result['feet'] = $result['miles']*5280;
          // $result['yards'] = $result['feet']/3;
          $result3['kilometers'] = $result3['miles']*1.609344;
          $km=$result3['kilometers'];

        echo "<h2>".$row['name']." Petroleum ".$row['district']." , ".$row['state']."</h2>";
              $name=$_SESSION['n']=$row['name'];
              $district=$_SESSION['dist']=$row['district'];
              $state=$_SESSION['st']=$row['state'];
        echo "Distance: ";
        echo $kmt=$_SESSION['kmt']=$km;
        echo "&nbsp KM";
        echo "<h4>Diesel</h4>";
        $fuel="Diesel";
        $p=$_SESSION['p']=$fuel;
        echo $amt=$_SESSION['amt']=$row['p2'];
          
        echo "&nbsp ₹ per litre<br>";
        echo "Choose Quantity in Litre's:";
       

        echo "<form action='payorder.php' method='post'>
        <div class='form-group'>     
        <select name='select' class='form-control'>
          <option value=''>in Litre</option>
          <option value='1'>01</option>
          <option value='5'>05</option>
          <option value='10'>10</option>
          <option value='15'>15</option>
        </select>
        <br>
    
      <input type='submit' class='btn btn-primary' name='submit' value='Submit'></form>  </div>";
    }

    if(isset($_POST["p3"]))
    {
        include 'connect.php';
        $idb=$_SESSION['idb']=$_POST['p3'];
        $sql="SELECT * FROM bunksign WHERE id= '".$_POST['p3']."'";
        $result=mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        $lat2=$row2['latitude'];
        $long2=$row2['longitude'];

        $latitude=$row['latitude'];
        $longitude=$row['longitude'];

    

          $theta = $longitude - $long2;
          $miles = (sin(deg2rad($latitude))) * sin(deg2rad($lat2)) + (cos(deg2rad($latitude)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
          $miles = acos($miles);
          $miles = rad2deg($miles);
          $result3['miles'] = $miles * 60 * 1.1515; 
          // $result['feet'] = $result['miles']*5280;
          // $result['yards'] = $result['feet']/3;
          $result3['kilometers'] = $result3['miles']*1.609344;
          $km=$result3['kilometers'];

        echo "<h2>".$row['name']." Petroleum ".$row['district']." , ".$row['state']."</h2>";
              $name=$_SESSION['n']=$row['name'];
              $district=$_SESSION['dist']=$row['district'];
              $state=$_SESSION['st']=$row['state'];
        echo "Distance: ";
        echo $kmt=$_SESSION['kmt']=$km;
        echo "&nbsp KM";
        echo "<h4>Speed</h4>";
        $fuel="Speed";
        $p=$_SESSION['p']=$fuel;
        echo $amt=$_SESSION['amt']=$row['p3'];
         
        echo "&nbsp ₹ per litre<br>";
        echo "Choose Quantity in Litre's:";
       

        echo "<form action='payorder.php' method='post'>
        <div class='form-group'>     
        <select name='select' class='form-control'>
          <option value=''>in Litre</option>
          <option value='1'>01</option>
          <option value='5'>05</option>
          <option value='10'>10</option>
          <option value='15'>15</option>
        </select>
        
        <br>
      <input type='submit' class='btn btn-primary' name='submit' value='Submit'></form> </div>";
    }

    if(isset($_POST["p4"]))
    {
      

        include 'connect.php';
        $idb=$_SESSION['idb']=$_POST['p4'];
        $sql="SELECT * FROM bunksign WHERE id= '".$_POST['p4']."'";
        $result=mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        $lat2=$row2['latitude'];
        $long2=$row2['longitude'];

        $latitude=$row['latitude'];
        $longitude=$row['longitude'];

    

          $theta = $longitude - $long2;
          $miles = (sin(deg2rad($latitude))) * sin(deg2rad($lat2)) + (cos(deg2rad($latitude)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
          $miles = acos($miles);
          $miles = rad2deg($miles);
          $result3['miles'] = $miles * 60 * 1.1515; 
          // $result['feet'] = $result['miles']*5280;
          // $result['yards'] = $result['feet']/3;
          $result3['kilometers'] = $result3['miles']*1.609344;
          $km=$result3['kilometers'];

        echo "<h2>".$row['name']." Petroleum ".$row['district']." , ".$row['state']."</h2>";
              $name2=$_SESSION['n2']=$row['name'];
              $district=$_SESSION['dist']=$row['district'];
              $state=$_SESSION['st']=$row['state'];
        echo "Distance: ";
        echo $kmt=$_SESSION['kmt']=$km;
        echo "&nbsp KM";
        echo "<h4>Power</h4>";
        $fuel="Power";
        $p=$_SESSION['p']=$fuel;
        echo $amt=$_SESSION['amt']=$row['p4'];
    
        echo "&nbsp ₹ per litre<br>";

        echo "Choose Quantity in Litre's:";
       

        echo "<form action='payorder.php' method='post'>
        <div class='form-group'>     
        <select name='select' class='form-control'>
          <option value=''>in Litre</option>
          <option value='1'>01</option>
          <option value='5'>05</option>
          <option value='10'>10</option>
          <option value='15'>15</option>
        </select>
        
      <br>
      <input type='submit' class='btn btn-primary' name='submit' value='Submit'></form></div>";

      

        
    }
               
?>


                <!-- Price List -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
     
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js2/off-canvas.js"></script>
  <script src="js2/hoverable-collapse.js"></script>
  <script src="js2/template.js"></script>
  <script src="js2/settings.js"></script>
  <script src="js2/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js2/dashboard.js"></script>
  <script src="js2/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

<?php
}
else
{
	header('location:login.php');
}
?>