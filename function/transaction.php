<?php

	if (isset($_POST['add']))
{
	
	
	$customer = $_POST['customer'];
	$product = $_POST['product_name'];
	$price = $_POST['product_price'];
	$qty = $_POST['qty'];
	$amount = $_POST['amout'];
	
		mysql_query ("INSERT INTO cart (prod_id,cust_id)  VALUES ('$prod_id', '$cust_id')  ") or die(mysql_error());
								
			header("location: product1.php");	
}
?>