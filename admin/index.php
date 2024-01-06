<?php
	session_start();
	if(isset($_SESSION['id'])){
			include('admin_home.php');
	}else{
		include("admin_index.php");
		}
		
	if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == ''))
	{
		header("location:admin_index.php"); 
		exit();
	}
?>