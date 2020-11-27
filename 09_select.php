<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pratical";

$conn = new mysqli($servername, $username, $password, $database);


$sql = "SELECT * FROM `ordertable`";

$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo "there are $num number are records are present.";

if($num >0)
{
    while($row = $result -> fetch_assoc())
    {
        echo "Product name: " .$row["Pname"].
             "total price: "  .$row["price"].
             "Delevery date: " .$row["deldate"]."<br>";
    }
}
else
{
echo "0 records are found.";
}

?>