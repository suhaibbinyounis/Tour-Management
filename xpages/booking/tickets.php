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
    <style>
        #halla tr td{
            padding:6px;
            text-align: left;
            margin-top: 3px;
            margin-bottom: 3px;
        }
    </style>
</head>

<body>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" action="../index.php" method="post">
            	<h2><button class="custom-form btn btn-primary rounded-pill">Back to Home</button></h2>
                <h1>Your Tickets</h1>
                <?php
                    include('./php/conn.php');
                    $email = $_SESSION['login_email'];
                    $sqlx = "select * from login where user_email='$email'";
                    $xresult = mysqli_query($conn,$sqlx);
                    if($xresult->num_rows > 0){
                    	while($row = $xresult->fetch_assoc()){
                    		echo "<table border=\"1\" width=\"100%\"><tr><td><p>Hey ".$row['username'].", we have all your bookings at one place.</p></td></tr><tr><td><p id=\"query_text\">If you cancel your booking, the payment will be refunded back to payment method/account you opted.</p></td></tr></table><br><br>";
                    		break;
                    	}
                    }

                    $sql1 = "select * from booking where email='$email'";
                    $result = mysqli_query($conn,$sql1);
                    if ($result->num_rows > 0) {
                                $number=1;
                                while($row = $result->fetch_assoc()) {
                                echo "<div style=\"color:black\">";
                                echo "<table id=\"halla\" border=\"1\" width=\"100%\">";
                                echo "<tr><td>Origin / Arrival </td><td>".$row['originArrival']."</td></tr>";
                                echo "<tr><td>Via</td><td>".$row['via']."</td></tr>";
                                echo "<tr><td>Time Arrival-Departure</td><td>".$row['timeAD']."</td></tr>";
                                echo "<tr><td>Date</td><td>".$row['dateAD']."</td></tr>";
                                if($row['flight']!="NULL")
                                echo "<tr><td>Flight</td><td>".$row['flight']."</td></tr>";
                                if($row['train']!="NULL")
                                echo "<tr><td>Train</td><td>".$row['train']."</td></tr>";
                                if($row['bus']!="NULL")
                                echo "<tr><td>Bus</td><td>".$row['bus']."</td></tr>";

                                echo "<tr><td>Price</td><td>".$row['price']."</td></tr>";
                                echo "<tr><td>Email</td><td>".$row['email']."</td></tr>";
                                echo "<tr><td>Booking ID</td><td>".$row['bookingID']."</td></tr>";
                                echo "<tr><td>Status</td><td>Confirmed</td></tr>";
                                echo "</table><br>";
                                
                                echo "<table width=\"100%\"><tr><td><button class=\"btn btn-primary\" onclick=\"cancelTicket()\")\" type=\"button\">Cancel this ticket</button></td><td><button class=\"btn-primary\" onclick=\"statusC('statuscheck$number')\" type=\"button\">Check Status</button><input id=\"statuscheck$number\" type=\"text\" disabled></td><td><button class=\"btn btn-primary\" onclick=\"window.print()\">Print Ticket</button></td></tr></table><hr><br>";
                                echo "</div>";
                                echo "<script>document.getElementById('statuscheck$number').style.visibility='hidden';</script>";
                                $number +=1;
                            }
                        	echo "<script>function cancelTicket(){window.open(\"cancel.php\",\"Cancel Ticket\",\"height=260,width=370\");}</script>";
                        }
                    else{
                        echo "<p>You do not have any booking with us at the moment.</p>";
                    }
                ?>

                <div class="form-check"><br><br></div>
                <h2><button class="custom-form btn btn-primary rounded-pill">Back to Home</button></h2>
            </form>
            
        </div>
    </div>
    <script type="text/javascript">
    	function statusC(x){
    		document.getElementById(x).style.visibility="visible";
    		var status = ["Delayed - 4hr","Delayed - 2hr","Delayed - 1hr","On Time","Delayed - 3hr"];
    		document.getElementById(x).value = status[Math.floor(Math.random() *5)];
    	}
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form.js"></script>
</body>
</html>