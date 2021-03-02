<?php   
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'gem';
$con = mysqli_connect($host,$user,$password) or die('Connection failed try again....');
mysqli_select_db($con,$db_name) or die('No Database....');
?>