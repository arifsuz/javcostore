<?php
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id = 'yhannaki@gmail.com'; // Business email ID
?>
<?php
include("function/session.php");
include("db/dbconn.php");
?>
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

		$query = mysqli_query($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		?>

		<ul>
			<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
			<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname']; ?></a></li>
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

			$query = mysqli_query($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die(mysqli_error());
			$fetch = mysqli_fetch_array($query);
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

		<form method="post" class="well" style="background-color:#fff; overflow:hidden;">
			<table class="table" style="width:50%;">
				<label style="font-size:25px;">Summary of Order/s</label>
				<tr>
					<th>
						<h5>Quantity</h5>
						</td>
					<th>
						<h5>Product Name</h5>
						</td>
					<th>
						<h5>Size</h5>
						</td>
					<th>
						<h5>Price</h5>
						</td>
				</tr>

				<?php
				$t_id = $_GET['tid'];
				$query = mysqli_query($conn, "SELECT * FROM transaction WHERE transaction_id = '$t_id'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);

				$amnt = $fetch['amount'];
				$t_id = $fetch['transaction_id'];

				$query2 = mysqli_query($conn, "SELECT * FROM transaction_detail LEFT JOIN product ON product.product_id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$t_id'") or die(mysqli_error());
				while ($row = mysqli_fetch_array($query2)) {

					$pname = $row['product_name'];
					$psize = $row['product_size'];
					$pprice = $row['product_price'];
					$oqty = $row['order_qty'];

					echo "<tr>";
					echo "<td>" . $oqty . "</td>";
					echo "<td>" . $pname . "</td>";
					echo "<td>" . $psize . "</td>";
					echo "<td>" . $pprice . "</td>";
					echo "</tr>";
				}
				?>

			</table>
			<legend></legend>
			<h4>TOTAL: Php <?php echo $amnt; ?></h4>
		</form>
		<div class='pull-right'>
			<div class="">
				<form action="<?php echo $paypal_url ?>" method="post">
					<input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="item_name" value="Alphaware Shoes">
					<input type="hidden" name="item_number" value="<?php echo $t_id; ?>">
					<input type="hidden" name="credits" value="510">
					<input type="hidden" name="userid" value="1">
					<input type="hidden" name="amount" value="<?php echo $amnt; ?>">
					<input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">
					<input type="hidden" name="no_shipping" value="1">
					<input type="hidden" name="currency_code" value="PHP">
					<input type="hidden" name="handling" value="0">
					<input type="hidden" name="cancel_return" value="function/cancel.php">
					<input type="hidden" name="return" value="function/success.php">
					<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
		</div>


		<div id="purchase" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Mode Of Payment</h3>
			</div>
			<div class="modal-body">
				<form method="post">
					<center>
						<input type="image" src="images/button.jpg" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
						<br />
						<br />
						<button class="btn btn-lg">Cash</button>
					</center>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</form>
			</div>
		</div>


		<br />
		<br />
	</div>
	<br />
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; </label>
			<p style="font-size:25px;">JAVCO, Ltd. 2023</p>
		</div>

		<div id="foot">
			<h4>Links</h4>
			<a href="https://linktr.ee/jav.co" target="blank">TEAM PROJECT</a>
		</div>
	</div>
</body>

</html>