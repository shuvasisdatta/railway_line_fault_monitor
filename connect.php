<?php
	function Connection(){
		$server="localhost";
		$user="iot_bd";
		$pass="railwayiot";
		$db="iot_bd";
	   	
		$con = mysqli_connect($server, $user, $pass, $db);

		// Check connection
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		return $con;
	}
?>