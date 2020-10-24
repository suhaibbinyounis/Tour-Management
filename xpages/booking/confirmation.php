<?php 
    include('./php/session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>nextStep</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Payment-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" action="payment.php" method="post">
                <h1>Confirmation</h1>
                <?php
                if(isset($_POST['pay'])){
                $a=$_POST['oi'];
                $b=$_POST['v'];
                $c=$_POST['t'];
                $d=$_POST['d'];
                $e=$_POST['f'];
                $f=$_POST['tr'];
                $g=$_POST['b'];
                $h=$_POST['p'];
                $i =$_SESSION['login_email'];
                $j = "TM".rand(0,9)."X".rand(0,9)."K".rand(10,99);
                include('./php/conn.php');
                //echo "<p>".$a." ".$i."</p>";
                $sql = "insert into booking values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','false')";
                $result = mysqli_query($conn,$sql);
                $_SESSION["booking"] = $j;
            }
                ?>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Full Name </label></div>
                    <div class="col-sm-6 input-column">
                        <?php
                        echo "<input class=\"form-control\" type=\"text\" value=\"";
                        include('./php/conn.php');
                        $email = $_SESSION['login_email'];
                        $sql = "SELECT * from login where user_email='$email'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){ 
                        while($row = $result->fetch_assoc()) {
                                echo $row['username'];
                                break;
                            } 
                        }
                    echo "\">";
                ?>

                    </div></div><div class="form-row form-group"><div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email</label></div>
                    <div class="col-sm-6 input-column">
                        <?php
                        echo "<input class=\"form-control\" type=\"email\" value=\"";
                        include('./php/conn.php');
                        $email = $_SESSION['login_email'];
                        $sql = "SELECT * from login where user_email='$email'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){ 
                        while($row = $result->fetch_assoc()) {
                                echo $row['user_email'];
                                break;
                            } 
                        }
                        echo "\">";
                         ?>
                        
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Price</label></div>
                    <div class="col-sm-6 input-column">
                        <?php
                        echo "<input class=\"form-control\" type=\"text\" value=\"";
                        include('./php/conn.php');
                        $email = $_SESSION['login_email'];
                        $x = $_SESSION["booking"];
                        $sql = "SELECT * from booking where bookingID ='$x'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){ 
                        while($row = $result->fetch_assoc()) {
                                echo $row['price'];
                                break;
                            } 
                        }
                         echo "\" disabled>";
                        ?>
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Booking Id</label></div>
                    <div class="col-sm-6 input-column">
                    	<?php
                        echo "<input class=\"form-control\" type=\"text\" value=\"";
                        include('./php/conn.php');
                        $email = $_SESSION['login_email'];
                        $x = $_SESSION['booking'];
                        $sql = "SELECT * from booking where bookingID='$x'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){ 
                        while($row = $result->fetch_assoc()) {
                                echo $row['bookingID'];
                                break;
                            } 
                        }
                         echo "\" disabled>";
                        ?>
                    </div>
                </div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" checked><label class="form-check-label" for="formCheck-1">I've read and accept the terms and conditions</label></div><button class="btn btn-light submit-button" type="submit">Pay Now</button></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form.js"></script>
</body>
</html>