<?php
$host ='localhost';
$user = 'root';
$pass = '';
$db = 'test1';

$conn =new mysqli($host,$user,$pass,$db);

$sql = 'update emp set salary=30000 where empid=101';

if($conn->query($sql)===True)
echo 'Table Updated';
else
echo 'Table not Updated';

$conn->close();

?>