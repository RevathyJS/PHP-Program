<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test1';

$conn = new mysqli($host,$user,$pass,$db);

$sql = "create table emp(name varchar(10),empid int(3),desgn varchar(3),salary int(5))";

if($conn->query($sql)=== True)
echo 'Table created';
else
echo 'Not cReated';

$conn->close();
?>