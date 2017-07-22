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
    width: 50%;
}

td, th {
    border: 2px solid black;
    text-align: center;
    vertical-align: center;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<?php
	$avg_time = [];
	$ip_address = [];
	$i = 0;
	while($tempstring = mysqli_fetch_assoc($result))
	{
		$avg_time[$i]=$tempstring["avg_time"];
		$ip_address[$i]=$tempstring["ip_address"];
		$i++;
	}

?>
<center>
<table>
  <tr>
    <th>IP Address</th>
    <th>Speed</th>
    <th>Status</th>
  </tr>
  <tr>
    <td><?php echo("$ip_address[0]")?></td>
    <td><?php echo("$avg_time[0]")?></td>
    <td>ON</td>
  </tr>
  <tr>
    <td><?php echo("$ip_address[1]")?></td>
    <td><?php echo("$avg_time[1]")?></td>
    <td>ON</td>
  </tr>
  <tr>
    <td><?php echo("$ip_address[2]")?></td>
    <td><?php echo("$avg_time[2]")?></td>
    <td>ON</td>
  </tr>
  <tr>
    <td><?php echo("$ip_address[3]")?></td>
    <td><?php echo("$avg_time[3]")?></td>
    <td>ON</td>
  </tr>
  <tr>
    <td><?php echo("$ip_address[4]")?></td>
    <td><?php echo("$avg_time[4]")?></td>
    <td>ON</td>
  </tr>
  <tr>
    <td><?php echo("$ip_address[5]")?></td>
    <td><?php echo("$avg_time[5]")?></td>
    <td>ON</td>
  </tr>
  <tr>
    <td><?php echo("$ip_address[6]")?></td>
    <td><?php echo("$avg_time[6]")?></td>
    <td>ON</td>
  </tr>
  <tr>
    <td><?php echo("$ip_address[7]")?></td>
    <td><?php echo("$avg_time[7]")?></td>
    <td>ON</td>
  </tr>
  <tr>
    <td><?php echo("$ip_address[8]")?></td>
    <td><?php echo("$avg_time[8]")?></td>
    <td>ON</td>
  </tr>
  <tr>
    <td><?php echo("$ip_address[9]")?></td>
    <td><?php echo("$avg_time[9]")?></td>
    <td>ON</td>
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