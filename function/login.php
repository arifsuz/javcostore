<?php

include('db/dbconn.php');

if (isset($_POST['login']))

	{
		$email=$_POST['email'];
		$password=$_POST['password'];

		
			$result=mysqli_query($conn, "SELECT * FROM customer WHERE email='$email' AND password='$password' ")
				or die ('cannot login' . mysql_error());
			$row=mysqli_fetch_array  ($result);
			$run_num_rows = mysqli_num_rows($result);
							
						if ($run_num_rows > 0 )
						{
							session_start ();
							$_SESSION['id'] = $row['customerid'];
							header ("location:home.php");
						}
						
						else
						{
							echo "<script>alert('Invalid Email or Password')</script>";
							header("location:home.php");
						}
	}

?>