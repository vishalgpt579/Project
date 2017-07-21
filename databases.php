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
	$tempvariable = [];
	$i = 0;
	while($tempstring = mysqli_fetch_assoc($result))
	{
		$tempvariable[$i]=$tempstring["avg_time"];
		$i++;
	}

//This will echo 
	echo($tempvariable[5]);

//Release the data
	mysqli_free_result($result);
?>

</body>
</html>

<?php
//Close the database connection
mysqli_close($connection);
?>