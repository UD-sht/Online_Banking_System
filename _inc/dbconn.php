<?php
$serverName="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bnak_db";
$conn=mysqli_connect($serverName,$dbusername,$dbpassword)/* or die('the website is down for maintainance')*/;
mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
?>