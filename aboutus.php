<?php
include("function/login.php");
include("function/customer_signup.php");
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
		<ul>
			<li><a href="#signup" data-toggle="modal">Sign Up</a></li>
			<li><a href="#login" data-toggle="modal">Login</a></li>
		</ul>
	</div>

	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">Login...</h3>
		</div>
		<div class="modal-body">
			<form method="post">
				<center>
					<input type="email" name="email" placeholder="Email" style="width:250px;">
					<input type="password" name="password" placeholder="Password" style="width:250px;">
				</center>
		</div>
		<div class="modal-footer">
			<input class="btn btn-primary" type="submit" name="login" value="Login">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
			</form>
		</div>
	</div>

	<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">Sign Up Here...</h3>
		</div>
		<div class="modal-body">
			<center>
				<form method="post">
					<input type="email" name="email" placeholder="Email" required>
					<input type="password" name="password" placeholder="Password" required>
					<input type="text" name="mobile" placeholder="Mobile" maxlength="11">
					<input type="text" name="firstname" placeholder="Firstname" required>
					<input type="text" name="mi" placeholder="Middlename" maxlength="20" required>
					<input type="text" name="lastname" placeholder="Lastname" required>
					<input type="text" name="address" placeholder="Address" style="width:650px;" required>
					<input type="text" name="country" placeholder="Province" required>
					<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
			</center>
		</div>
		<div class="modal-footer">
			<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
		</form>
	</div>

	<br>
	<div id="container">
		<div class="nav">
			<ul>
				<li><a href="index.php"> <i class="icon-home"></i>Home</a></li>
				<li><a href="product.php"> <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus.php"> <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus.php"><i class="icon-inbox"></i>Contact Us</a></li>
			</ul>
		</div>

		<img src="img/about1.jpg" style="width:1150px; height:250px; border:1px solid #000; ">
		<br />
		<br />

		<legend>About Us</legend>
		<div id="content">
			<legend>
				<h3>Team Project</h3>
			</legend>
			<div class="team">
				<ol class="tagteam">
					<li>
						<a href="https://www.instagram.com/arifsuz/" target="blank">MUHAMAD NUR ARIF</a>
					</li>
					<li>
						<a href="https://www.instagram.com/azzammuhammd_/" target="blank">MUHAMMAD MUSYAFFA AZZAM</a>
					</li>
					<li>
						<a href="https://www.instagram.com/muhammadalfaredzz/" target="blank">MUHAMMAD ALFAREDZ ARIESTU</a>
					</li>
					<li>
						<a href="https://www.instagram.com/hilmi.fn_/" target="blank">HILMI FAZLI NADIARNI</a>
					</li>
					<li>
						<a href="https://www.instagram.com/hilmi.fn_/" target="blank">INTAN PERMATA SARI</a>
					</li>
				</ol>
			</div>
		</div>
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