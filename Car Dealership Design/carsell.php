<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ars_cartrade";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$brand=$_POST['brand'];
$vehicletype=$_POST['vehicletype'];
$carname=$_POST['carname'];
$transtype=$_POST['transtype'];
$colour=$_POST['colour'];
$mileage=$_POST['mileage'];
$price=$_POST['price'];

$sql="INSERT INTO car (car_name,car_brand,vehicle_type,trans_type,mileage,colour,price)
 VALUES('$carname','$brand','$vehicletype','$transtype','$mileage','$colour','$price')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>