<?php

	if (isset($_POST['add']))
{
	
	
	$prod_id =$_POST['product_id'];
	$cust_id =$_POST['customerid'];
	
		mysql_query ("INSERT INTO cart (prod_id,cust_id)  VALUES ('$prod_id', '$cust_id')  ") or die(mysql_error());
								
			header("location: product1.php");	
}
?>