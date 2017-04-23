<?php
	$database="sphider";
	$mysqli_user = "root";
	$mysqli_password = "longhomon123";
	$mysqli_host = "localhost";
	$mysqli_table_prefix = "";

	$connect = mysqli_connect ($mysqli_host, $mysql_user, $mysql_password, $database);
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$GLOBALS['connect'] = $connect;
?>
