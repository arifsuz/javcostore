<?php
include("function/session.php");
include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Javco Store</title>
	<link rel="icon" href="img/logojavco.jpg" />
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




		<div id="content">
			<div class="nav">

				<ul>
					<li><a href="home.php"><i class="icon-home"></i>Home</a></li>
					<li><a href="product1.php"><i class="icon-th-list"></i>Product</a>
					<li><a href="aboutus1.php"><i class="icon-bookmark"></i>About Us</a></li>
					<li><a href="contactus1.php"><i class="icon-inbox"></i>Contact Us</a></li>
				</ul>
			</div>

			<div id="carousel">
				<div id="myCarousel" class="carousel slide">
					<div class="carousel-inner">
						<div class="active item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner1.jpg" class="carousel"></div>
						<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner2.jpg" class="carousel"></div>
						<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner3.jpg" class="carousel"></div>
					</div>
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
			</div>


			<div id="video">
				<video controls autoplay width="445px" height="300px">
					<source src="video/commercial.mp4" type="video/mp4">
				</video>
			</div>

			<div id="product" style="position:relative; margin-top:30%;">
				<center>
					<h2>
						<legend>Featured Items</legend>
					</h2>
				</center>
				<br />

				<?php

				$query = mysqli_query($conn, "SELECT *FROM product WHERE category='feature' ORDER BY product_id DESC") or die(mysqli_error());

				while ($fetch = mysqli_fetch_array($query)) {

					$pid = $fetch['product_id'];

					$query1 = mysqli_query($conn, "SELECT * FROM stock WHERE product_id = '$pid'") or die(mysqli_error());
					$rows = mysqli_fetch_array($query1);

					$qty = $rows['qty'];
					if ($qty <= 5) {
					} else {
						echo "<div class='float'>";
						echo "<center>";
						echo "<a href='details.php?id=" . $fetch['product_id'] . "'><img class='img-polaroid' src='photo/" . $fetch['product_image'] . "' height = '300px' width = '300px'></a>";
						echo "" . $fetch['product_name'] . "";
						echo "<br />";
						echo "Rp " . $fetch['product_price'] . "";
						echo "<br />";
						echo "<h3 class='text-info' style='position:absolute; margin-top:-90px; text-indent:15px;'> Size: " . $fetch['product_size'] . "</h3>";
						echo "</center>";
						echo "</div>";
					}
				}
				?>
			</div>


		</div>

		<br />
	</div>
	<br />
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