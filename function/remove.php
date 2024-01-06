<?php
include('../db/dbconn.php');

$id = $_POST['id'];

 mysqli_query($conn, "DELETE FROM product WHERE product_id = '$id'") or die(mysqli_error());

?>