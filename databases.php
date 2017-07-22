<!--This is code is not complete yet-->


<?php
//Create a database connection
	$dbhost = "192.168.1.36";
	$dbuser = "rpi";
	$dbpass = "thunderbolt";
	$dbname = "dbavgspeed";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//Checks for error and prints the error number
	if(mysqli_connect_errno()){
		echo(mysqli_connect_errno());
	}

//Perform database query
	$query = "SELECT * FROM tbavgspeed";
	$result = mysqli_query($connection, $query);

//Check for query error
	if(!$result){
		echo ("Database query failed");
	}
?>

<html>
<head>
<title>Test Page</title>
<style>
table {
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width: 60%;
}

td {
	text-align: center;
	vertical-align: center;
	padding: 12px;
	width: 50%;

}

th {
	text-align: center;
	vertical-align: center;
	font-size: 18;
	padding: 12px;
	width: 50%;

}

tr:nth-child(even) {
	background-color: #f5f5f5;
}

.on {
	background-color: #00ffb4;
	font-size: 10;
	padding: 8px;
}

.off {
	background-color: #ffa030;
	font-size: 10;
	padding: 8px;
}

h2 {
	font-family: Calibri;
	margin: 16px;
}
</style>
</head>
<body>

<?php
	$avg_time = [];
	$ip_address = [];
	$status = [];
	$avg_speed = [];
	$i = 0;
	while($tempstring = mysqli_fetch_assoc($result))
	{
		$avg_time[$i]=$tempstring["avg_time"];
		$ip_address[$i]=$tempstring["ip_address"];
		$status[$i]=$tempstring["status"];
		$avg_speed[$i]=round(64/$avg_time[$i],2);
		$i++;
	}
?>

<center>
<h2><b>Data Monitoring</b></h2>
<table>
  <tr>
    <th style="border-left: 2px solid black; border-top: 2px solid black; border-bottom: 2px solid black">
    	IP Address
    </th>
    <th style="border-top: 2px solid black; border-bottom: 2px solid black">
    	Speed (MB/s)
    </th>
    <th style="border-right: 2px solid black; border-top: 2px solid black; border-bottom: 2px solid black">
    	Status
    </th>
  </tr>
  <tr>
    <td style="border-left: 2px solid black">
    <?php echo("$ip_address[0]")?>
    </td>
    <td>
    <?php echo("$avg_speed[0]")?>
    </td>
    <td style="border-right: 2px solid black">
    <?php if($status[0] == 1) { ?>
    <p class="on">ON</p>
    <?php }else{?>
    <p class="off">OFF</p>
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td style="border-left: 2px solid black">
    <?php echo("$ip_address[1]")?>
    </td>
    <td>
    <?php echo("$avg_speed[1]")?>
    </td>
    <td style="border-right: 2px solid black">
    <?php if($status[1] == 1) { ?>
    <p class="on">ON</p>
    <?php }else{?>
    <p class="off">OFF</p>
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td style="border-left: 2px solid black">
    <?php echo("$ip_address[2]")?>
    </td>
    <td>
    <?php echo("$avg_speed[2]")?>
    </td>
    <td style="border-right: 2px solid black">
    <?php if($status[2] == 1) { ?>
    <p class="on">ON</p>
    <?php }else{?>
    <p class="off">OFF</p>
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td style="border-left: 2px solid black">
    <?php echo("$ip_address[3]")?>
    </td>
    <td>
    <?php echo("$avg_speed[3]")?>
    </td>
    <td style="border-right: 2px solid black">
    <?php if($status[3] == 1) { ?>
    <p class="on">ON</p>
    <?php }else{?>
    <p class="off">OFF</p>
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td style="border-left: 2px solid black">
    <?php echo("$ip_address[4]")?>
    </td>
    <td>
    <?php echo("$avg_speed[4]")?>
    </td>
    <td style="border-right: 2px solid black">
    <?php if($status[4] == 1) { ?>
    <p class="on">ON</p>
    <?php }else{?>
    <p class="off">OFF</p>
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td style="border-left: 2px solid black">
    <?php echo("$ip_address[5]")?>
    </td>
    <td>
    <?php echo("$avg_speed[5]")?>
    </td>
    <td style="border-right: 2px solid black">
    <?php if($status[5] == 1) { ?>
    <p class="on">ON</p>
    <?php }else{?>
    <p class="off">OFF</p>
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td style="border-left: 2px solid black">
    <?php echo("$ip_address[6]")?>
    </td>
    <td>
    <?php echo("$avg_speed[6]")?>
    </td>
    <td style="border-right: 2px solid black">
    <?php if($status[6] == 1) { ?>
    <p class="on">ON</p>
    <?php }else{?>
    <p class="off">OFF</p>
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td style="border-left: 2px solid black">
    <?php echo("$ip_address[7]")?>
    </td>
    <td>
    <?php echo("$avg_speed[7]")?>
    </td>
    <td style="border-right: 2px solid black">
    <?php if($status[7] == 1) { ?>
    <p class="on">ON</p>
    <?php }else{?>
    <p class="off">OFF</p>
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td style="border-left: 2px solid black">
    <?php echo("$ip_address[8]")?>
    </td>
    <td>
    <?php echo("$avg_speed[8]")?>
    </td>
    <td style="border-right: 2px solid black">
    <?php if($status[8] == 1) { ?>
    <p class="on">ON</p>
    <?php }else{?>
    <p class="off">OFF</p>
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td style="border-left: 2px solid black; border-bottom: 2px solid black">
    <?php echo("$ip_address[9]")?>
    </td>
    <td style=" border-bottom: 2px solid black">
    <?php echo("$avg_speed[9]")?>
    </td>
    <td style="border-right: 2px solid black; border-bottom: 2px solid black">
    <?php if($status[9] == 1) { ?>
    <p class="on">ON</p>
    <?php }else{?>
    <p class="off">OFF</p>
    <?php } ?>
    </td>
  </tr>
</table>
</center>

<?php
//Release the data
	mysqli_free_result($result);
?>

</body>
</html>

<?php
//Close the database connection
mysqli_close($connection);
?>