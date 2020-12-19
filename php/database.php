<?php

/**
 * @file
 * Connect to mysql
 */
$con = mysqli_connect("database-2.czleudsggqsf.us-east-1.rds.amazonaws.com","admin","gmkbabu9","mydb");

//Test Connection
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}

?>
