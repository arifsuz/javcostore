<?php
include("function/session.php");
include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Javco Store</title>
	<link rel="icon" href="img/logojavco.jpg" />
	<link rel="icon" href="img/logo.jpg" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<div id="header">
		<img src="img/logojavco.jpg">
		<label>Javco Store</label>

		<?php
		$id = (int) $_SESSION['id'];

		$query = mysql_query("SELECT * FROM customer WHERE customerid = '$id' ") or die(mysql_error());
		$fetch = mysql_fetch_array($query);
		?>

		<ul>
			<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
			<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" href data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname']; ?></a></li>
		</ul>
	</div>

	<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">My Account</h3>
		</div>
		<div class="modal-body">
			<?php
			$id = (int) $_SESSION['id'];

			$query = mysql_query("SELECT * FROM customer WHERE customerid = '$id' ") or die(mysql_error());
			$fetch = mysql_fetch_array($query);
			?>
			<center>
				<form method="post">
					<center>
						<table>
							<tr>
								<td class="profile">Email:</td>
								<td class="profile"><?php echo $fetch['email']; ?></td>
							</tr>
							<tr>
								<td class="profile">Mobile:</td>
								<td class="profile"><?php echo $fetch['mobile']; ?></td>
							</tr>
							<tr>
								<td class="profile">Name:</td>
								<td class="profile"><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['mi']; ?>&nbsp;<?php echo $fetch['lastname']; ?></td>
							</tr>
							<tr>
								<td class="profile">Address:</td>
								<td class="profile"><?php echo $fetch['address']; ?></td>
							</tr>
							<tr>
								<td class="profile">Country:</td>
								<td class="profile"><?php echo $fetch['country']; ?></td>
							</tr>
							<tr>
								<td class="profile">ZIP Code:</td>
								<td class="profile"><?php echo $fetch['zipcode']; ?></td>
							</tr>
						</table>
					</center>
		</div>
		<div class="modal-footer">
			<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
		</form>
	</div>



	<br>
	<div id="container">
		<div class="nav">
			<ul>
				<li><a href="home.php"> <i class="icon-home"></i>Home</a></li>
				<li><a href="product1.php"> <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus1.php"> <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus1.php"><i class="icon-inbox"></i>Contact Us</a></li>
			</ul>
		</div>
		<br>

		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
			<!-- the cmd parameter is set to _xclick for a Buy Now button -->
			<?php
			$cusid = $_POST['cusid'];
			$total = $_POST['total'];
			$time = $_POST['time'];
			$portal = $_POST['portal'];
			$distination = $_POST['distination'];
			$transactioncode = $_POST['transactioncode'];

			if ($portal == 'Pick-Up') {
				$charge = 0;
			}
			if ($portal == 'Delivery') {
				$charge = 50;
			}
			if ($distination == 'City Proper') {
				$charge1 = 0;
			}
			if ($distination == 'Outside City') {
				$charge1 = 50;
			}
			$totalcharge = $charge + $charge1;
			$grandtotal = $totalcharge + $total;
			?>

			<input type="hidden" name="cmd" value="_xclick" />
			<input type="hidden" name="business" value="mamma__1330248786_biz@yahoo.com" />
			<input type="hidden" name="item_name" value="<?php echo $cusid; ?>" />
			<input type="hidden" name="item_number" value="<?php echo $transactioncode; ?>" />
			<input type="hidden" name="amount" value="<?php echo $grandtotal; ?>" />
			<input type="hidden" name="no_shipping" value="1" />
			<input type="hidden" name="no_note" value="1" />
			<input type="hidden" name="currency_code" value="PHP" />
			<input type="hidden" name="lc" value="GB" />
			<input type="hidden" name="bn" value="PP-BuyNowBF" /><br />
			<div style="margin:0 auto; width:50px;">
				<input type="image" src="images/button.jpg" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
				<img alt="fdff" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
			</div>
			<!-- Payment confirmed -->
			<input type="hidden" name="return" value="http://mammamarias.elementfx.com/showconfirm.php" />
			<!-- Payment cancelled -->
			<input type="hidden" name="cancel_return" value="http://mammamarias.elementfx.com/cancel.php" />
			<input type="hidden" name="rm" value="2" />
			<input type="hidden" name="notify_url" value="http://mammamarias.elementfx.com/ipn.php" />
			<input type="hidden" name="custom" value="any other custom field you want to pass" />
		</form>
	</div>
</body>

</html>