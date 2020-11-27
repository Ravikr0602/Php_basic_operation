<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pratical";

$conn = new mysqli($servername, $username, $password, $database);

$sql= "select * from `ordertable`";
$result = mysqli_query($conn, $sql);

// mysqli_num_row are represented to how many record are present in the table. 

$num = mysqli_num_rows($result);
echo "there are $num number of records are present in the table."."<br>";

// mysqli_fetch_assoc() method is return all record in query form. 
if($num >0)
{
    while($row = $result -> fetch_assoc())
    {
        echo "Oder number: "   .$row["oid"].
             "product name: "  .$row["Pname"].
             "total price: "   .$row["price"].
             "total quantity: ".$row["qty"].
             "delivary date: " .$row["deldate"]."<br>";
    }
}
    else
    {
        echo "no records found..";
    }


?>