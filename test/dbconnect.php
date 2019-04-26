<?php

$link = mysqli_connect("localhost", "root", "root", "test");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$registration_number = mysqli_real_escape_string($link, $_REQUEST['registration_number']);
$vehicle_brand = mysqli_real_escape_string($link, $_REQUEST['vehicle_brand']);
$vehicle_id = mysqli_real_escape_string($link, $_REQUEST['vehicle_id']);
$password=   mysqli_real_escape_string($link, $_REQUEST['password']);
$vehicle_type=mysqli_real_escape_string($link, $_REQUEST['vehicle_type']);

$sql = "INSERT INTO registration (registration_number,vehicle_brand,vehicle_id,password,vehicle_type)VALUES ('$registration_number','$vehicle_brand', '$vehicle_id','$password','$vehicle_type')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>