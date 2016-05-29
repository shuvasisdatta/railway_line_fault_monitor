<?php
   	include "connect.php";
   	
    if (isset($_GET['s']) && isset($_GET['lat']) && isset($_GET['lon'])){
        $link=Connection();                 // Connect to databse.
        
		date_default_timezone_set("Asia/Dhaka");
        $timeStamp = date('Y-m-d H;i:s');   // Getting Present Time & Date.
    	$sensorNo = $_GET["s"];    
        $latitude = $_GET["lat"];     
        $longitude = $_GET["lon"];     
        
        // Insert into databse.
    	$query = mysqli_query($link, "INSERT INTO rail_fault (timestamp, sensorNo, latitude, longitude) VALUES ('". $timeStamp ."', '". $sensorNo ."', '". $latitude ."', '". $longitude ."')");
       	
        mysqli_close($link);                 // Close the databse connection.
		header('Location: index.php');
		exit;
	}
    else{
    	echo "Data Not Inserted.";
    }
?>