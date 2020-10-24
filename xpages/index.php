<?php 
    include('./php/session.php');
                    include('./php/conn.php');
                    $sql="delete from booking where confirm='false'";
                    mysqli_query($conn,$sql);                
?>
<!DOCTYPE html>
<html>(

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
                                        <li class="nav-item dropdown" role="presentation"><a class="nav-link nav-link" id="fifth-dropdown-2" href="logout.php">Log out</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </nav>
                         <p style="text-align: center;">Welcome, <?php 
                         include_once('./php/conn.php');
                         $email = $_SESSION['login_email'];
                         $sql = "Select * from login where user_email='$email'";
                         $result = mysqli_query($conn,$sql);
                         if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                echo $row['username'];
                                break;
                            }
                        }
                         ?>. Let's find out our new destination.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="register-photo">
        <div class="form-container">
            <form method="post" style="text-align: center;width: 900px;" action="RouteDetails.php">
                <h2 class="text-center" id="xtake"><strong>Find</strong> me a route</h2>
                <div class="form-group"><input class="form-control" type="text" name="origin" placeholder="Origin" required></div>
                <div class="form-group"><input class="form-control" type="text" id="xarrival" name="arrival" placeholder="Arrival" required></div>
                <div class="form-group"><input class="form-control" type="date" name="date" placeholder="Date" required></div>
                <p style="text-align: left;"><strong>Choose your preferred mode of travel:</strong></p>
                <table id="halla">
                	<tr>
                		<td>
                			<input type="checkbox" id="vehicle1" name="flights" value="Flights">
  				
                		</td>
                		<td>
                			<label for="vehicle1">Flights</label>
                		</td>
                	</tr>
                	<tr>
                		<td>
                			<input type="checkbox" id="vehicle2" name="trains" value="Trains">
  				
                		</td>
                		<td>
                			<label for="vehicle2">Trains</label>
                		</td>
                	</tr>
                	<tr>
                		<td>
                			<input type="checkbox" id="vehicle3" name="bus" value="Bus">
  				
                		</td>
                		<td>
                			<label for="vehicle3">Bus Route</label>
                		</td>
                	</tr>
                </table>
                
  				
  				
				<div class="form-group">
                    <p class="text-center"><button class="btn btn-secondary" type="submit">Search</button></p>
                </div><a class="already" href="#">We have everything you need.</a></form>
        </div>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Once in a lifetime visit</h2>
                <p class="text-center">Our Popular Destinations</p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#xtake" onclick="setdata('Srinagar')"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                    <h3 class="name">Jammu and Kashmir</h3>
                    <p class="description">Soak your memories in a warm cup of Kahwah Tea, while indulging in the varied landscapes of Kashmir. Take in the crisp misty air, while gorging on warm Kashmiri pulao and home-made Rista. Feel your heart synchronize with the gushing waters that travel from the glaciers above. Dust the snow off your shoulders after a long trek up a hill and watch the sun-kissed, snow-capped mountains. </p></div>
                <div
                    class="col-sm-6 col-md-4 item"><a href="#xtake" onclick="setdata('Himachal')"><img class="img-fluid" src="assets/img/building.jpg"></a>
                    <h3 class="name">Himachal Pradesh</h3>
                    <p class="description">Himachal Pradesh is a fantastic tourist place on the basis of its diversity and natural beauty. This is the reason why a large number of tourists visit different places in Himachal every year. It is undoubtedly one of the best tourist destinations for summers. You can experience amazing scenic beauty, serene landscapes in places like Manali, Shimla, Dalhousie and many more. </p></div>
            <div
                class="col-sm-6 col-md-4 item"><a href="#xtake" onclick="setdata('Kerala')"><img class="img-fluid" src="assets/img/loft.jpg"></a>
                <h3 class="name">Kerala</h3>
                <p class="description">Popularly known as “God’s own country”, Kerala is a coastal state in India, known for its distinctive tradition and culture. Its lush unspoiled tropical beauty, exotic locales and tranquil backwaters attract travelers from across the world who seeks leisurely vacation. Apart from its picturesque scenery, Kerala is also known for its rich wildlife and elaborate temples.</p></div>
    </div>
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
    <script>
    	function setdata(x){
    		document.getElementById('xarrival').value=x;
    	}
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/DataTable-Examples.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.21/fh-3.1.7/sc-2.0.2/datatables.min.js"></script>
    <script src="assets/js/mega-menu-for-beginners-like-me.js"></script>
</body>

</html>