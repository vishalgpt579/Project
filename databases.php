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
<head><title>
Test Page
</title></head>
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

//This echos avg_time
	for($i=0 ; $i<=9 ; $i++){
		echo("$avg_time[$i]\n\n");
	}
?>
<br />
<hr />
<?php
//This echos ip_address
	for($i=0 ; $i<=9 ; $i++){
		echo("$ip_address[$i]\n\n");
	}

//Release the data
	mysqli_free_result($result);
?>

</body>
</html>

<?php
//Close the database connection
mysqli_close($connection);
?>