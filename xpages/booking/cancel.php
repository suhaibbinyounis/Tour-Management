
<!DOCTYPE html>
<html>
<head>
	<title>Cancel Booking</title>
</head>
<body>
<p id="query_message">Once your ticket is cancelled, it cannot be reverted back. Your payment will be refunded back within 2 to 3 business days.</p>
<form action="cancel.php" method="post">
	<table>
		<tr>
			<td>
				<p>Please enter your Booking ID:</p>
			</td>
			<td>
				<input type="text" name="bookingID">
			</td>
		</tr>
	</table>
	
	<button type="submit" name="submit">Cancel Ticket</button>
</form>
<?php
	include("./php/conn.php");
	if(isset($_POST['submit'])){
	$bkid = $_POST['bookingID'];
	$sql = "delete from booking where bookingID='$bkid'";
	if(mysqli_query($conn,$sql)){
		echo "<script>document.getElementById('query_message').innerHTML='Your Booking has been canceled.<br>You can close this window now.';window.open(\"tickets.php\").location.reload();</script>";
	}
}
?>
</body>
</html>