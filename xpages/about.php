<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tour Arrangements</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider-1.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider.css">
    <link rel="stylesheet" href="assets/css/DataTable-Examples.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/fh-3.1.7/sc-2.0.2/datatables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/mega-menu-for-beginners-like-me.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form-1.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
    <style>
    	#halla tr td{
    		padding:6px;
    		text-align: left;
    		margin-top: 3px;
    		margin-bottom: 3px;
    	}
    </style>
</head>

    <body style="background: repeating-linear-gradient(black, white);background-color: #ffffff;">
    <div class="container d-flex justify-content-center" style="background-color: #ffffff;">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="d-md-flex d-lg-flex d-xl-flex justify-content-md-start justify-content-lg-center justify-content-xl-center header-second clearfix" style="width: 100%;">
                    <div class="main-navigation main-navigation--mega-menu animated">
                        <nav class="navbar navbar-light navbar-expand-md sticky-top p-0" style="height: 50px;">
                            <div class="container-fluid">
                                <a class="navbar-brand text-right clearfix" href="#">
                                    <div id="logo-mobile" class="logo hidden-md-up"><a href="#"></a></div>
                                </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="background-color: #f74902;"></span></button>
                                <div class="collapse navbar-collapse"
                                    id="navcol-1">
                                    <ul class="nav navbar-nav">
                                    	<li class="nav-item dropdown" role="presentation"><a class="nav-link nav-link" id="fifth-dropdown-2" href="index.php">HOME</a>
                                        </li>
                                        <li class="nav-item dropdown" role="presentation"><a class="nav-link nav-link" id="fifth-dropdown-2" href="faq.php">FAQ</a>
                                        </li>
                                        <li class="nav-item dropdown" role="presentation"><a class="nav-link nav-link dropdown-toggle" id="fifth-dropdown-2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                            <ul class="dropdown-menu">
                                            	<li><a href="login.php"><i class="fa fa-html5"></i>&nbsp;Log in</a></li>
                                            	<li><a href="signup.php"><i class="fa fa-html5"></i>&nbsp;Create Account</a></li>
                                                <li><a href="./booking/tickets.php"><i class="fa fa-html5"></i>&nbsp;My Booking</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown" role="presentation"><a class="nav-link nav-link dropdown-toggle" id="fifth-dropdown-2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact us</a>
                                            <ul class="dropdown-menu">
                                                <li>Email</li>
                                                <li>Phone</li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown" role="presentation">
                                        	<?php 
                                        	if(isset($_SESSION['login_email']))
                                        	echo "<a class=\"nav-link nav-link\" id=\"fifth-dropdown-2\" href=\"logout.php\">Log out</a>";
                                        	else
                                        	echo "<a class=\"nav-link nav-link\" id=\"fifth-dropdown-2\" href=\"login.php\">Log in</a>";
                                        	?>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </nav>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="register-photo">
        <div class="form-container">
            <form method="post" style="text-align: center;width: 900px;" action="RouteDetails.php">
                <h2 class="text-center"><strong>About</strong> this project</h2>
                <div class="form-group">
                	<p>This is a management web application which deals with ticket booking for flights, trains and busses.</p>
                	<p> The project uses technologies like HTML, CSS, JavaScript, PHP and Mysql database.</p>
                	<p> It also allows users to login and create the account, and with the help of sessions the user doesn't need to login again and again. All user data are confidential and won't be shown to other users.</p>
                	<p>The data is encrypted and validiated before stored on the server database.</p>
                	<p>This project was done by Suhaib, Kashish and Nisarg and is completely their original work.</p>
                	<p><strong>You are not allowed to copy this project or use this project without giving <a href="teams.php">us </a>credit.</strong></p>
                	<p><strong>We are not using API's. The data generated is completely random.</strong></p>
                </div>
                </form>
        </div>
    </div>
    
    <div class="features-boxed"></div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3 style="color: rgb(255,255,255);">Quick Links</h3>
                        <ul>
                            <li><a href="./booking/tickets.php">My Booking</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3 style="color: rgb(255,255,255);">About</h3>
                        <ul>
                            <li><a href="teams.php">Team</a></li>
                            <li><a href="about.php">About this project</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3 style="color: rgb(255,255,255);">Tour management</h3>
                        <p>Work done by Suhaib, Kashish and Nisarg.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">This project is a original work. All Rights Reserved</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/DataTable-Examples.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.21/fh-3.1.7/sc-2.0.2/datatables.min.js"></script>
    <script src="assets/js/mega-menu-for-beginners-like-me.js"></script>
</body>

</html>