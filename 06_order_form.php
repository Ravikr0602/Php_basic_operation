<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pratical";

$conn = new mysqli ($servername, $username, $password, $database);

if(isset($_POST['oid']) && isset($_POST['Pname']) && isset($_POST['price']) && isset($_POST['qty']) 
    && isset($_POST['deldate']))
    {

        $oid = $_POST['oid'];
        $Pname = $_POST['Pname'];
        $price = $_POST['price'];
        $qty =$_POST['qty'];
        $deldate = $_POST['deldate'];

        $sql = "INSERT INTO `ordertable` (`oid`, `Pname`, `price`, `qty`, `deldate`) 
                   VALUES ('$oid', '$Pname', '$price', '$qty', '$deldate');";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo"Your order has been palced.";
        }
        else
        {
            echo"Sorry! your order don't be placed".mysqli_error($conn);
        }

    }

?>

