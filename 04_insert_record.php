<?php
$servername = "localhost";
$username = "root";
$password ="";
$database = "pratical";

$conn = new mysqli($servername, $username, $password, $database);
if($conn -> connect_error)
{
    die("connected failed:".$conn->connect_error);
}
else
{
   echo"connected successfully";
}

$sql ="insert into `emp` (`empno`,`ename`) values('2','gourav kumar')";
$result = mysqli_query($conn, $sql);

if($result)
{
    echo"insert data successfully in the table..";
}
else
{
    echo"data do not insert successfully in the table..".mysqli_error($conn); 
}

?>
