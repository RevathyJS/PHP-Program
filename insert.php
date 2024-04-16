<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test1';

$conn = new mysqli($host,$user,$pass,$db);

$sql = "insert into emp values('bala',101,'ASP',20000)";

if($conn->query($sql)=== True)
echo 'Row Inserted';
else
echo 'Not Inserted';

$conn->close();
?>