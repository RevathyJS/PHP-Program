<?php
$host ='localhost';
$user = 'root';
$pass = '';
$db = 'test1';

$conn =new mysqli($host,$user,$pass,$db);

$sql = 'select * from emp';

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc())
    {
        echo $row['name']."---".$row['empid']."---".$row['desgn']."---".$row['salary']."<br>";
    }
}


$conn->close();

?>