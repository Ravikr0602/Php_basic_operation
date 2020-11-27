<?php
$serename = "localhost";
$username = "root";
$password = "";
$database = "pratical";

$conn = new mysqli ($serename, $username, $password, $database);

$sql = "SELECT * FROM `ordertable`  where price >20000";

$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo "there are $num number of records are match your condition.."."<br>";

if($num >0)
{
  while($row = $result -> fetch_assoc())
  {
      echo "order number: ".$row["oid"].
           "Product name: ".$row["Pname"].
           "Total Price: ".$row["price"].
           "Total Quantity: ".$row["qty"].
           "Delevery Date: ".$row["deldate"]."<br>";
  }
}
else
{
    echo" 0 record found..";
}
?>