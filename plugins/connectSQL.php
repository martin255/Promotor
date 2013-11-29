//Povezovanje do baze podatkov

<?php include('../documents/credentals.php'); ?>

<?php 

		$con=mysqli_connect($host,$user,$password,$database);
		// Preverimo povezavo do strežnika
		if (mysqli_connect_errno())
		  {
		  echo "Povezava do MYSQL ni uspela: " . mysqli_connect_error();
		  }
		  
?>