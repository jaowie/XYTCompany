<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xyt";

//create connection
$dbcon = new mysqli($servername, $username, $password, $dbname);

//Check connection
if($dbcon->connect_error){
	die("Connection failed: ".$dbcon->connect_error);
}else{
}

?>
