<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pratical";

$conn = new mysqli($servername, $username, $password, $database);

$sql = "SELECT `Pname`,`price` from `ordertable` order by price DESC";

$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo "there are $num number are record present in table."."<br>";

if($num >0)
{
   while($row = $result -> fetch_assoc())
   {
       echo "Product Name : ". $row["Pname"].
            "Total Price : " . $row["price"]."<br>";
   }
}
else
{
    echo"0 record found.";
}
?>