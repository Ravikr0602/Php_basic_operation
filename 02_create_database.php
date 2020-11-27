<?php

$servername ="localhost";
$username= "root";
$password ="";

$conn = new mysqli($servername,$username,$password);

if($conn -> connect_error)
{
    die("connection failled..".$con->connect_error);
}
else 
{
    echo"connected successfully" ;
}

//create database
$sql = "create database pratical";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo"\ndatabase was created successfully";
}
else
{
    echo"\ndatabase was not created successfully due to this error".mysqli_error($conn);
}

?>