<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from rockstheme.com/rocks/aievari-live/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:23 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Sign Up</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
       <!-- Animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="css/magnific.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">

		<!-- modernizr css -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <script>
	function validateForm() 
	{
	  var x = document.forms["myForm"]["uname"].value;
	  if (x == "") 
	  {
		alert("Username must be Filled");
		return false;
	  }
	  var y = document.forms["myForm"]["psw"].value;
	  if (y == "") 
	  {
		alert("Password must be Filled");
		return false;
	  }
	   var z = document.forms["myForm"]["cpsw"].value;

	  if(z== "")
	  {
		alert("Confirm Password must be Filled");
		return false;
	  }  
	  if (z!=y) 
	  {
		alert("Password & Confirm Password should match");
		return false;
	  }
	  
	  
	  var u = document.forms["myForm"]["phone"].value;

	  if(u== "")
	  {
		alert("Phone Number must be Filled");
		return false;
	  } 

      var em = document.forms["myForm"]["email"].value;

        if(em== "")
        {
        alert("Email must be Filled");
        return false;
        } 
	}
	
    function isnum1(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

            return true;
            
        
        }
        function isalph1(evt)
        {
        var regEx = ^\+{0,2}([\-\. ])?(\(?\d{0,3}\))?([\-\. ])?\(?\d{0,3}\)?([\-\. ])?\d{3}([\-\. ])?\d{4};
        if(phoneNumber.value.match(regEx))
            {
            return true;
            }
        else
            {
            alert("Please enter a valid phone number.");
            return false;
            }
        }

        function phoneNumberCheck(phoneNumber)
        {
        var regEx = ^\+{0,2}([\-\. ])?(\(?\d{0,3}\))?([\-\. ])?\(?\d{0,3}\)?([\-\. ])?\d{3}([\-\. ])?\d{4};
        if(phoneNumber.value.match(regEx))
            {
            return true;
            }
        else
            {
            alert("Please enter a valid phone number.");
            return false;
            }
        }    
</script>


	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
        <header class="header-one">
            <!-- Start top bar -->
            <div class="topbar-area fix hidden-xs">
                <div class="container">
                    <div class="row">
                       <div class="col-md-6 col-sm-6">
                           <div class="topbar-left">
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i> onsitefuelsindia@gmail.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> +91 9876543210</a></li>
                                </ul>
							</div>
                        </div>
                        <div class=" col-md-6 col-sm-6">
                            <div class="topbar-right">
                                <div class="top-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <!-- logo start -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="logo">
                                        <!-- Brand -->
                                        <a class="navbar-brand page-scroll white-logo" href="index.php">
                                            <img src="img/logo/logo3.png" alt="">
                                        </a>
                                        <a class="navbar-brand page-scroll black-logo" href="index.php">
                                            <img src="img/logo/logo.png" alt="">
                                        </a>
                                    </div>
                                    <!-- logo end -->
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="header-right-link">
                                        <!-- search option end -->
                                        <a class="s-menu" href="login.php">Login</a>
                                    </div>
                                    <!-- mainmenu start -->
                                    <nav class="navbar navbar-default">
                                        <div class="collapse navbar-collapse" id="navbar-example">
                                            <div class="main-menu">
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li><a class="pages" href="index.php">Home</a>
                                                    </li>
                                                    <li><a href="about.php">About us</a></li>
                                                    <li><a class="pages" href="#">Pages</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="login.php">Login</a></li>
                                                            <li><a href="signup.php">Register</a></li>
                                                          
                                                        </ul>
                                                    </li>
                                                  
                                                    <li><a class="pages" href="#">Bunk Owner</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="bunklogin.php">Login</a></li>
                                                            <li><a href="bunksignup.php">Register</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                    <!-- mainmenu end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="index.php"><img src="img/logo/logo.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li><a class="pages" href="index.php">Home</a>
                                        </li>
                                        <li><a href="about.php">About us</a></li>
                                        <li><a class="pages" href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="login.php">Login</a></li>
                                                <li><a href="signup.php">Register</a></li>
                                               
                                            </ul>
                                        </li>
                                      
                                        <li><a class="pages" href="#">Bunk Owner</a>
                                            <ul class="sub-menu">
                                                <li><a href="bunklogin.php">Login</a></li>
                                                <li><a href="bunksignup.php">Register</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>
        <!-- header end -->
        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>Register</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start Slider Area -->
        <div class="signup-area page-padding">
            <div class="container">
                <div class="row">
                    <div class=" col-md-12 col-sm-12 col-xs-12">
                        <div class="login-page signup-page">
                            <div class="login-form signup-form">
                                <h4 class="login-title ">REGISTER</h4>
                                <div class="row">
                                    <form  method="POST" action="smbrsign.php" class="log-form" name="myForm" onsubmit="return validateForm()">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text"  class="form-control" placeholder="Username" name="uname" required data-error="Please Enter Your Username">
                                        </div>
                                       
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="password"  class="form-control" placeholder="Password" name="psw" required data-error="Please Enter Your Password">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="password"  class="form-control" placeholder="Confirm Password" name="cpsw" required data-error="Please Confirm Your Password">
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="email"  class="form-control" placeholder="Your Email" name="email" required data-error="Please Enter Your Email">
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text"  class="form-control" maxlength="10" minlength="10" onkeypress="return isnum1(event)" placeholder="Your Mobile No:" name="phone" required data-error="Please Enter Your Mobile Number">
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                                            <div class="check-group flexbox">
                                                <label class="check-box">
                                                   
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit"  name="submit" class="login-btn">Sign up</button>
                                            <div id="msgSubmit" class="h3 hidden"></div> 
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="clear"></div>
                                            <div class="separetor"><span>Or with signup</span></div>
                                            <div class="sign-icon">
                                                <ul>
                                                    <li><a class="facebook" href="#">Facebook</a></li>
                                                    <li><a class="twitter" href="#">twitter</a></li>
                                                    <li><a class="google" href="#">google+</a></li>
                                                </ul>
                                                <div class="acc-not">have an account?  <a href="login.php">Login</a></div>
                                            </div>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- Start Footer Area -->
        <footer class="footer1">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="footer-content logo-footer">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                    	<a class="footer-black-logo" href="#"><img src="img/logo/logo.png" alt=""></a>
                                    </div>
                                    <p>
                                        Are you looking for roadside fuel assitance. Are you looking for easy re-fill of your vehicle. Are you looking for professional 24/7 service.
                                    </p>
                                    <div class="subs-feilds">
                                        <div class="suscribe-input">
                                            <input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                            <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Services Link</h4>
                                    <ul class="footer-list">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Services </a></li>
                                        <li><a href="#">Events</a></li>
                                        <li><a href="#">Promotion</a></li>
                                        <li><a href="#">Transition</a></li>
                                        <li><a href="#">Social Media</a></li>
                                    </ul>
                                    <ul class="footer-list hidden-sm">
										<li><a href="#">Customer Care</a></li>
                                        <li><a href="#">Live chat</a></li>
                                        <li><a href="#">Notification</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Terms & Condition</a></li>
                                        <li><a href="#">Contact us </a></li>
									</ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-content last-content">
                                <div class="footer-head">
                                    <h4>Information</h4> 
                                    <div class="footer-contacts">
										<p><span>Tel :</span> +91 9876543210</p>
										<p><span>Email :</span> onsitefuelsindia@gmail.com</p>
										<p><span>Location :</span> Mumbai- 65/4, India</p>
									</div> 
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2021
                                    <a href="#">OnsiteFuel</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer area -->
		
		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		  <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
		<!-- magnific js -->
        <script src="js/magnific.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
	</body>

<!-- Mirrored from rockstheme.com/rocks/aievari-live/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:23 GMT -->
</html>