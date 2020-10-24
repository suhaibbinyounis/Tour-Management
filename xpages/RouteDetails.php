<?php 
    include('./php/session.php');
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
</head>

<body style="background: url(assets/img/dominik-schroder-FIKD9t5_5zQ-unsplash.jpg);">
    <div>
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
                        <p style="text-align: center;">Hey, <?php 
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
                         ?> we have some amazing routes. Check out.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table class="table my-0" id="dataTable-1">
                              <?php
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>Origin/Arrival</th>";
                                echo "<th>via</th>";
                                echo "<th>Time(HH:MM)</th>";
                                echo "<th>Date</th>";
                                if(isset($_POST['flights']))
                                    echo "<th>Flight</th>";
                                    if(isset($_POST['trains']))
                                    echo "<th>Train</th>";
                                    if(isset($_POST['bus']))
                                    echo "<th>Bus</th>";
                                echo "<th>Price</th>";
                                echo "</tr>";
                                echo "</thead><tbody>";
                                $i=1;
                                $origin = $_POST['origin'];
                                $arrival = $_POST['arrival'];
                                $date = $_POST['date'];
                                $via = array("No Layover","Goa","Patna","Amritsar","Bangalore","Hyderabad","Lucknow","Chandigarh");
                                $flightcode = array("Qatar Airways","Indigo","Air India","Air Asia","Spice Jet");
                                $traincode = array("Rajdhani Express","Duronto Express","Shatabdi Express","Jan Shatabdi Express","Sampark Kranti Express","Garib Rath Express","Humsafar Express","Kavi Guru Express","Vande Bharat Express","Tejas Express","Gatiman Express","Vivek Express","Rajya Rani Express","Jan Sadharan Express","UDAY Express","Antyodaya Express","Mahamana Express","Suvidha Express","Yuva Express","Double Decker Express","AC Express","Intercity Express","Superfast Express");
                                $buscode = array("VRL Travels", "Neeta Bus", "Shrinath Travels", "SRS Travels", "Gujarat Travels", "HANS TRAVELS");
                                $id_ = "rowno";
                                while($i<=100){
                                    $oi = $origin." / ".$arrival;
                                    $v = $via[rand(0,count($via)-1)];
                                    $t = rand(0,23).":".rand(0,59)." - ".rand(0,23).":".rand(0,59);
                                    $d = $date;
                                    $f = $flightcode[rand(0,count($flightcode)-1)];
                                    $tr = $traincode[rand(0,count($traincode)-1)];
                                    $b = $buscode[rand(0,count($buscode)-1)];
                                    $p = "₹".rand(3000,12000);
                                    echo "<tr id=\"$id_$i\">";
                                    echo "<td>$oi</td>";
                                    echo "<td>".$v."</td>";
                                    echo "<td>".$t."</td>";
                                    echo "<td>".$d."</td>";
                                    if(isset($_POST['flights']))
                                    echo "<td>".$f."</td>";
                                    if(isset($_POST['trains']))
                                    echo "<td>".$tr."</td>";
                                    if(isset($_POST['bus']))
                                    echo "<td>".$b."</td>";
                                    
                                    echo "<td><form action=\"booking/confirmation.php\" method=\"post\"><input type=\"hidden\" name=\"oi\" value=\"$oi\"><input type=\"hidden\" name=\"v\" value=\"$v\"><input type=\"hidden\" name=\"t\" value=\"$t\"><input type=\"hidden\" name=\"d\" value=\"$d\">";
                                    if(isset($_POST['flights']))
                                    echo "<input type=\"hidden\" name=\"f\" value=\"$f\">";
                                    else
                                    echo "<input type=\"hidden\" name=\"f\" value=\"NULL\">";
                                    if(isset($_POST['trains']))
                                    echo "<input type=\"hidden\" name=\"tr\" value=\"$tr\">";
                                    else
                                    echo "<input type=\"hidden\" name=\"tr\" value=\"NULL\">";
                                    if(isset($_POST['bus']))
                                    echo "<input type=\"hidden\" name=\"b\" value=\"$b\">";
                                    else
                                    echo "<input type=\"hidden\" name=\"b\" value=\"NULL\">";
                                    echo "<input type=\"hidden\" name=\"p\" value=\"$p\"><button class=\"btn btn-secondary\" name=\"pay\">".$p."</button></form></td>";
                                    echo "</tr>";
                                    $i +=1;
                                }
                                echo "</tbody>";
                            ?>
                             <!--   <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>₹162,700</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar2.jpeg">Angelica Ramos</td>
                                    <td>Chief Executive Officer(CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09<br></td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar3.jpeg">Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12<br></td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar4.jpeg">Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13<br></td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar5.jpeg">Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07<br></td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02<br></td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar2.jpeg">Bruno Nash<br></td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>38</td>
                                    <td>2011/05/03<br></td>
                                    <td>$163,500</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar3.jpeg">Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12<br></td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar4.jpeg">Cara Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>46</td>
                                    <td>2011/12/06<br></td>
                                    <td>$145,600</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar5.jpeg">Cedric Kelly</td>
                                    <td>Senior JavaScript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29<br></td>
                                    <td>$433,060</td>
                                </tr>
                            </tbody>-->
                        </table>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-center">Happy Journey</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid resume-section-content">
            <div class="row">
                <div class="col">
                    <p class="text-center">2020</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card shadow"></div>
                </div>
            </div>
        </div>
    </div>
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