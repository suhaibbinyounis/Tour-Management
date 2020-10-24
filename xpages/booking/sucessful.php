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
                <h1>Payment Sucessful</h1>
                <p>Your Itinerary details</p>
                <?php
                    include('./php/conn.php');
                    $id = $_SESSION['booking'];
                    $sql="update booking set confirm='true' where bookingId='$id'";
                    mysqli_query($conn,$sql);
                    $sql1 = "select * from booking where bookingID='$id'";
                    $result = mysqli_query($conn,$sql1);
                    if ($result->num_rows > 0) {
                        echo "<table id=\"halla\" border=\"1\" width=\"100%\">";
                                while($row = $result->fetch_assoc()) {
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

                                break;
                            }
                        echo "</table>";
                        }
                ?>

                <div class="form-check"><br><br><p>Your Booking is confirmed with us. Thank you for choosing our service.</p></div>
                <h2><button class="custom-form btn btn-primary rounded-pill">Back to Home</button></h2>
            </form>
            <button class="btn-primary" onclick="window.print()">Print Ticket</button>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form.js"></script>
</body>
</html>