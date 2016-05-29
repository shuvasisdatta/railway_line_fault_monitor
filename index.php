<?php
	include "connect.php"; 	
	
	$link=Connection();         // Establish databse Connection.
    $sql = "SELECT * FROM rail_fault ORDER BY timestamp DESC";
    $result = mysqli_query($link,$sql);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>IOT</title>
        <meta http-equiv="refresh" content="15"> 	
		<style>#align{text-align:center}</style>
		<script src="http://maps.googleapis.com/maps/api/js"></script>	
   </head>
<body>
 		
   <h1>Railway Line Fault Detecting </h1>
   
   <table border="1" cellspacing="1" cellpadding="1">
		<tr>
			<td>&nbsp;Timestamp &nbsp;</td>
			<td>&nbsp;SensorNo &nbsp;</td>
			<td>&nbsp;Latitude &nbsp;</td>
			<td>&nbsp;Longitude &nbsp;</td>
		</tr>

      <?php 
		  if($result !== FALSE){
			$i = 0;
			while($row = mysqli_fetch_array($result)){
				echo "<tr><td id='align'>". $row[0] ."</td><td id='align'>". $row[1] ."</td><td id='align'>". $row[2] ."</td><td id='align'>". $row[3] ."</td></tr>";
				if ($i == 0){
					    $lat = $row[2];
						$lon = $row[3];
				}
				$i++;
			}
		     mysqli_free_result($result);
		     mysqli_close($link);
		  }
      ?>
   </table><br />
	<script>
		var myCenter=new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $lon; ?>);

		function initialize()
		{
			var mapProp = {
			  center:myCenter,
			  zoom:15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			};

			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

			var marker=new google.maps.Marker({
				position:myCenter,
				animation:google.maps.Animation.BOUNCE
			});

			marker.setMap(map);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>	
   
   <div id="googleMap" style="width:500px;height:380px;"></div><br />

</body>
</html>