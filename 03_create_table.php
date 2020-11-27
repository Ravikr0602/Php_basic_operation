<?php

$servername= "localhost";
$username = "root";
$password="";
$database ="pratical";

$conn = new mysqli($servername, $username, $password, $database);

if ( $conn->connect_error)
{
    die("connection was failed:".$conn->connect_error);
}
{
echo "connection successfully ";
}
$sql = "create table `emp`(`empno` INT(3) NOT NULL,`ename` VARCHAR(19) NOT NULL, PRIMARY KEY(`empno`))";
$result= mysqli_query($conn, $sql);
if($result)
{
    echo"table was create successfully";
}
else
{
    echo"table was not create successfully".mysqli_error($conn);
}
?>