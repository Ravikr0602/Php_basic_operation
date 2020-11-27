<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pratical";

$conn = new mysqli($servername, $username, $password, $database);

$sql = "DELETE FROM `ordertable` WHERE oid= 6";

$result = mysqli_query($conn, $sql);

if($result == TRUE)
{
    echo" your record are deleted..";
}
else
{
    echo"your record are not deleted due to this error".mysqli_error($conn);
}
?>