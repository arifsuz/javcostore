		<?php
		include("../db/dbconn.php");
		
		$t_id = $_GET['id'];
		
		mysqli_query($conn, "UPDATE transaction SET order_stat = 'Confirmed' WHERE transaction_id = '$t_id'") or die(mysqli_error());
						
		
		$query2 = mysqli_query($conn, "SELECT * FROM transaction_detail LEFT JOIN product ON product.product_id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$t_id'") or die (mysql_error());
		while($row = mysqli_fetch_array($query2)){
		
		$pid = $row['product_id'];
		$oqty = $row['order_qty'];
		
		$query3 = mysqli_query($conn, "SELECT * FROM stock WHERE product_id = '$pid'") or die (mysqli_error());
		$row3 = mysqli_fetch_array($query3);
		
		$stck = $row3['qty']; 
		
		$stck_out = $stck - $oqty;
		
		$query = mysqli_query($conn, "UPDATE stock SET qty = '$stck_out' WHERE product_id = '$pid'") or die(mysqli_error());
		}
		header("location: transaction.php");	
		
		?>