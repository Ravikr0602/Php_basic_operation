<?php
$servername= "localhost";
$username ="root";
$password ="";
$database ="pratical";

$conn = new mysqli($servername, $username, $password, $database);

$sql = "select * from `ordertable` where `qty` >= 2";
$result = mysqli_query($conn, $sql);

// mysqli_num_row return how many record are present according to condition.

$num = mysqli_num_rows($result);
echo "total $num  number of record are present.";

?>