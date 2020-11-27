<?php

$servername = "localhost";
$username = "root";
$password ="";
$database = "pratical";

$conn = new mysqli($servername, $username, $password, $database);

$sql= "UPDATE `record` SET `name`='neha gupta' WHERE `id` = 3 ";

$result = mysqli_query($conn, $sql);

if($result == TRUE)
{
    echo "Your record are update successfully.. ";
}
else
{
    echo "Your record was not update due to this error..".mysqli_error($conn);
}
?>