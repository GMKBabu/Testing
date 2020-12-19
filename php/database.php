<?php

function OpenCon()
 {
 $dbhost = "teleteachers-staging.cchvgvxclr8b.us-east-1.rds.amazonaws.com";
 $dbuser = "admin";
 $dbpass = "U63jB5SkmaJyhG9P";
 $db = "mydb";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>