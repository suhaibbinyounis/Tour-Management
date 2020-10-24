<?php
session_start();
?>
<!DOCTYPE html>
<html style="background: url(assets/img/eberhard-grossgasteiger-y2azHvupCVo-unsplash.jpg);">

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
</head>

<body style="background: url(assets/img/eberhard-grossgasteiger-y2azHvupCVo-unsplash.jpg);">
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
    <section class="card-section-imagia">
        <h1>Our team</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                <div class="user-imagia"><img class="img-circle" alt="" src="https://suhaibbinyounis.com/assets/img/IMG_20200417_170653%20Cropped.jpg"></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia">Suhaib Bin Younis</h3>
                                    <p class="subtitle-imagia">RA1711003011078</p>
                                    <p class="text-center"><em>Student at the SRM Institute of Science and Technology pursuing a Bachelor's degree in Computer Science</em></p>

                                </div>
                                <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                            </div>
                            <div class="back-imagia">
                                <div class="content-imagia content-back-imagia">
                                    <div>
                                        <h3 class="text-center">Catch me on:</h3>
                                        <p class="text-center"><a href="http://tiny.cc/sby"><button class="btn btn-primary">Ping Google</button></a></p>
                                        <p class="text-center"><a href="https://suhaibbinyounis.com"><button class="btn btn-primary">Portfolio</button></a></p>
                                        <p class="text-center"><a href="https://suhaib.tech"><button class="btn btn-primary">My Blogs</button></a></p>
                                    </div>
                                </div>
                                <div class="footer-imagia">
                                    <div class="social-imagia text-center"><a href="https://facebook.com/suhaibbinyounis"><i class="fa fa-facebook"></i></a><a href="https://linkedin.com/in/suhaibbinyounis"><i class="fa fa-linkedin"></i></a><a href="https://twitter.com/suhaibbinyounis"><i class="fa fa-twitter"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia cover-gradient"></div>
                                <div class="user-imagia"><img class="img-circle" alt="" src="https://scontent-del1-1.cdninstagram.com/v/t51.2885-19/s150x150/95082497_728789311260502_5695410892611518464_n.jpg?_nc_ht=scontent-del1-1.cdninstagram.com&_nc_ohc=vDs3J-txkGsAX8bgL4w&oh=3ba54e833136a607724526d3215b3038&oe=5FBBB9FE"></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia">Kashish Kharyal</h3>
                                    <p class="subtitle-imagia">RA1711003011267</p>
                                    <p class="text-center"><em>Student at the SRM Institute of Science and Technology pursuing a Bachelor's degree in Computer Science</em></p>
                                </div>
                                <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                            </div>
                            <div class="back-imagia">
                                <div class="content-imagia content-back-imagia">
                                    <div>
                                        <h3 class="text-center">Lorem Ipsum</h3>
                                        <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva
                                            aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                    </div>
                                </div>
                                <div class="footer-imagia">
                                    <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                <div class="user-imagia"><img class="img-circle" alt="" src="https://scontent-del1-1.cdninstagram.com/v/t51.2885-19/s150x150/103720685_586622855589732_3711217004574646514_n.jpg?_nc_ht=scontent-del1-1.cdninstagram.com&_nc_ohc=goIPo60WZ5gAX9Um75d&oh=5409ba5d25a203352dac0cd08f483f54&oe=5FBBDFD0"></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia">Nisarg Jadvani</h3>
                                    <p class="subtitle-imagia">RA1711003011096</p>
                                    <p class="text-center"><em>Student at the SRM Institute of Science and Technology pursuing a Bachelor's degree in Computer Science</em></p>
                                </div>
                                <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                            </div>
                            <div class="back-imagia">
                                <div class="content-imagia content-back-imagia">
                                    <div>
                                        <h3 class="text-center">Lorem Ipsum</h3>
                                        <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva
                                            aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                    </div>
                                </div>
                                <div class="footer-imagia">
                                    <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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