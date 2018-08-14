<?php
error_reporting(1);
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student";

$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
mysqli_set_charset($conn,"utf8");

if(!$conn){
	echo "Connect Failed";
}else{
	echo "Connect success";	
}

/*$conn->close();*/

	
?>