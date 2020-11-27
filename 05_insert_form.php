<?php

$servername ="localhost";
$username = "root";
$password ="";
$database ="pratical";

$conn = new mysqli($servername, $username, $password, $database);

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['address']))
{
    $id = $_POST['id'];
    $name =  $_POST['name'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `record` (`name`, `address`) VALUES ('$name', '$address')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo" thank you so much for filling this form";
        echo "Your data has been saved.";  
    }
    else
    {
        echo"sorry your data has not be saved because due to this error: ".mysqli_error($conn); 
    }
}

?>