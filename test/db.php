<?php
$link = mysqli_connect("localhost", "root", "root", "test");

// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Set parameters
$registration_number = $_REQUEST['registration_number'];
$vehicle_brand =$_REQUEST['vehicle_brand'];
$vehicle_id = $_REQUEST['vehicle_id'];
$password =$_REQUEST['password'];
$vehicle_type= $_REQUEST['vehicle_type'];


// Prepare an insert statement
$sql = "INSERT INTO registration (registration_number,vehicle_brand,vehicle_id,password,vehicle_type)VALUES (?, ?, ?, ?, ?)";

if($stmt = mysqli_prepare($link, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "sss", $registration_number,$vehicle_brand, $vehicle_id,$password, $vehicle_type);


// Attempt to execute the prepared statement
if(mysqli_stmt_execute($stmt)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
}
} else{
echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
$stmt->execute();

echo "New records created successfully";



// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($link);
?>