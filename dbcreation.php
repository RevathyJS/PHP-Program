<?php
$host = 'localhost';
$user = 'root';
$pass = '';

$conn= new mysqli($host,$user,$pass);

$sql = 'create database test1';

if($conn->query($sql)===True)
echo 'Database Created';
else
echo 'DataBase not created';

$conn->close();


?>