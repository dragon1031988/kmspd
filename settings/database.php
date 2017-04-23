<?php
	$database="sphider";
	$mysql_user = "root";
	$mysql_password = "longhomon123"; 
	$mysql_host = "localhost";
	$mysql_table_prefix = "";

	$connect = mysqli_connect ($mysql_host, $mysql_user, $mysql_password, $database);
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$GLOBALS['connect'] = $connect;
?>

