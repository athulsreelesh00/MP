<?php
session_start();
$name=$_SESSION["n"];
$idd=$_SESSION["idd"];
$qty=$_SESSION["qty"];
if($_SESSION["id"]==session_id())
{
   
  //$id=$_SESSION['pid'];
  include 'connect.php';
 

  //echo $cost=$qty * $row['amt'];
  //echo $row["fuel"];
  //echo $row["amt"];


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
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <link rel="stylesheet" href="style.css">
  <style>
    .tbl1{
      border: 2px solid black;
      width: 40%;
      

    }
    th, td {
      border: 2px solid black;
      padding:5px;
      
    }

    .btn1{
      color: green;
      background-color: #4CAF50;

      border: none;
      color: white;
      padding: 6px 16px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

 
  </style>>
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
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left">Select category</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Profile </p>
                
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Business</p>
            
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Approval</p>
                  
                </div>
              </a>
            
            </div>
          </li>
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
                <li class="nav-item"> <a class="nav-link" href="#"><?php echo $latitude; ?></a></li>
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
        
      
      



      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              
              <div class="home-tab">
              <h1>Petrol Pump's Near You</h1> 
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                 
                <table class="tbl1">
                  <tr>
                        <th>Pump Name</th>
                        <th>District</th>
                        <th>Distance in KM</th>
                        <!-- <th>--------------</th> -->
                        <th colspan="2">PETROL</th>
                        <th colspan="2">DIESEL_</th>
                        <th colspan="2">SPEED_</th>
                        <th colspan="2">POWER_</th>
                       
              
                     
                  </tr>
              

                <?php 
                
                //echo $idd; 
                
                $query="SELECT `latitude`, `longitude` FROM `usign` WHERE id='$idd'";
                $result1=mysqli_query($con,$query);
                $row = mysqli_fetch_array($result1);
                $latitude=$row['latitude'];
                $longitude=$row['longitude'];

                $latitude;
                $longitude;
                

               $query2="SELECT * FROM `bunksign`";
               $result2=mysqli_query($con,$query2);
               while($row = mysqli_fetch_array($result2))
               {
                $lat2=$row['latitude'];
                $long2=$row['longitude'];

                  $latitude;
                  $longitude;

              

                    $theta = $longitude - $long2;
                    $miles = (sin(deg2rad($latitude))) * sin(deg2rad($lat2)) + (cos(deg2rad($latitude)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
                    $miles = acos($miles);
                    $miles = rad2deg($miles);
                    $result['miles'] = $miles * 60 * 1.1515; 
                    // $result['feet'] = $result['miles']*5280;
                    // $result['yards'] = $result['feet']/3;
                    $result['kilometers'] = $result['miles']*1.609344;
                    $km=$result['kilometers'];
                    ?>
                  
                   
                    <tr>
                 
                        <td><?php echo $row["name"];?> </td>
                        <td><?php echo $row["district"];?> </td>
                        <td><?php echo $km;?> </td>
                        <!-- 
                        
                        
                        -->
                        <!-- <th>STATUS-></th> -->
                        <td><?php echo $row['p1'];?>₹</td>
                        <td>
                        <?php
                        $tick= 'img\tick.png'; 
                        $cross= 'img\cross.png'; 
                          if($row['petrol']==1)
                          {
                            
                            echo '<img src="'.$tick.'">'; 
                          }
                          else
                          {
                            echo '<img src="'.$cross.'">'; 
                          }
                        ?>
                        </td>
                       
<td><?php echo $row['p2'];?>₹</td>
<td>
<?php
$tick= 'img\tick.png'; 
$cross= 'img\cross.png'; 
  if($row['diesel']==1)
  {
    
    echo '<img src="'.$tick.'">'; 
  }
  else
  {
    echo '<img src="'.$cross.'">'; 
  }
?>
</td>

                        <td><?php echo $row['p3'];?>₹</td>
                        <td>
                        <?php
                        $tick= 'img\tick.png'; 
                        $cross= 'img\cross.png'; 
                          if($row['speed']==1)
                          {
                            
                            echo '<img src="'.$tick.'">'; 
                          }
                          else
                          {
                            echo '<img src="'.$cross.'">'; 
                          }
                        ?>
                        </td>
                     
<td><?php echo $row['p4'];?>₹</td>
<td>
<?php
$tick= 'img\tick.png'; 
$cross= 'img\cross.png'; 
  if($row['power']==1)
  {
    
    echo '<img src="'.$tick.'">'; 
  }
  else
  {
    echo '<img src="'.$cross.'">'; 
  }
?>
</td>

                        <td>
                          <ul class="navbar-nav ms-auto">
                          <li class="nav-item dropdown d-none d-lg-block">
                            <div class="price-btn blue">
                            <?php $bid=$row['id'];?>
                                <input type="hidden" value="<?php $bid=$row['id'];?>" name="bunkid">
                                <a class="blue" href="orderplace.php?pid2=<?php echo $bid;?>" name="purchase">Purchase</a>
                            </div>
                          </li>
                          <!-- <form action="orderplace.php" method="post">
                          <button name="purchase" value="<?php $row['id'];?>">Purchase</button>
                          </form> -->
                        </td>
                        
                        
                   
               
                      </tr>

                 <?php
                    //$result['meters'] = $result['kilometers']*1000;
                 
              }


                ?>
  </table>
<br>

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
                 
                 
                    <h3>NB: 10₹ Delivery Charge Per KM</h3>     
               





                                </div>  
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                   
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