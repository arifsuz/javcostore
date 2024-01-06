<?php
include('db/dbconn.php');
if (isset($_POST['pay_now'])) {
	$cid = $_SESSION['id'];
	$total = $_POST['total'];

	include("random_code.php");
	$t_id = $r_id;
	$date = date("M d, Y");
	$que = mysqli_query($conn, "INSERT INTO `transaction` (transaction_id, customerid, amount, order_stat, order_date) VALUES ('$t_id', '$cid', '$total', 'ON HOLD', '$date')") or die(mysqli_error());

	$p_id = $_POST['pid'];
	$oqty = $_POST['qty'];

	$i = 0;
	foreach ($p_id as &$pro_id) {
		mysqli_query($conn, "INSERT INTO `transaction_detail` (`product_id`, `order_qty`, `transaction_id`) VALUES ('" . ($pro_id) . "', '" . ($oqty[$i]) . "', '" . ($t_id) . "')") or die(mysqli_error());
		$i++;
	}
	echo "<script>window.location='summary.php?tid=" . $t_id . "'</script>";
}
