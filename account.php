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
			<li><a href="#profile" href data-toggle="modal">Welcome:&nbsp;&nbsp;&nbsp;<i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname']; ?></a></li>
		</ul>
	</div>
	<div id="container">


		<?php

		$id = (int) $_SESSION['id'];

		$query = mysqli_query($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query); {
			$email = $fetch['email'];
			$password = $fetch['password'];
			$mobile = $fetch['mobile'];
			$firstname = $fetch['firstname'];
			$mi = $fetch['mi'];
			$lastname = $fetch['lastname'];
			$address = $fetch['address'];
			$country = $fetch['country'];
			$zipcode = $fetch['zipcode'];
			$customerid = $fetch['customerid'];
		}
		?>
		<div id="account">
			<form method="POST" action="function/edit_customer.php">
				<center>
					<h3>Edit My Account...</h3>
					<table>
						<tr>
							<td>Email:</td>
							<td><input type="email" name="email" placeholder="Email" required value="<?php echo $email; ?>"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" placeholder="Password" required value="<?php echo $password; ?>"></td>
						</tr>
						<tr>
							<td>No handphone:</td>
							<td><input type="text" name="mobile" placeholder="Mobile Number" value="<?php echo $mobile; ?>" maxlength="11"></td>
						</tr>
						<tr>
							<td>Nama Depan:</td>
							<td><input type="text" name="firstname" placeholder="Firstname" required value="<?php echo $firstname; ?>"></td>
						</tr>
						<tr>
							<td>Nama Tengah :</td>
							<td><input type="text" name="mi" placeholder="Middle Initial" maxlength="20" required value="<?php echo $mi; ?>"></td>
						</tr>
						<tr>
							<td>Nama Belakang:</td>
							<td><input type="text" name="lastname" placeholder="Lastname" required value="<?php echo $lastname; ?>"></td>
						</tr>
						<tr>
							<td>Alamat:</td>
							<td><input type="text" name="address" placeholder="Address" style="width:430px;" required value="<?php echo $address; ?>"></td>
						</tr>
						<tr>
							<td>Propinsi:</td>
							<td><input type="text" name="country" placeholder="Province" required value="<?php echo $country; ?>"></td>
						</tr>
						<tr>
							<td>Kode Pos:</td>
							<td><input type="text" name="zipcode" placeholder="ZIP Code" required value="<?php echo $zipcode; ?>" maxlength="4"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="edit" value="Save Changes" class="btn btn-primary">&nbsp;<a href="home.php"><input type="button" name="cancel" value="Cancel" class="btn btn-danger"></a></td>
						</tr>
					</table>
				</center>
			</form>
		</div>
		<br>
	</div>
</body>

</html>