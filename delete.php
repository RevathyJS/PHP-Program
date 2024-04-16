<?php
$host ='localhost';
$user = 'root';
$pass = '';
$db = 'test1';

$conn =new mysqli($host,$user,$pass,$db);

$sql = 'delete from emp where empid=101';

if($conn->query($sql)===True)
echo 'Table Updated';
else
echo 'Table not Updated';

$conn->close();

?>