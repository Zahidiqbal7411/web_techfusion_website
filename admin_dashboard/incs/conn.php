<?php 
$localhost = 'localhost';
$name = 'root';
$password = '';
$db_name = 'techfusion_website';

$conn = mysqli_connect($localhost, $name, $password, $db_name);
if($conn){
    // echo "Connected to database";
}
if (!$conn) {
    // Show an error message if the connection fails
    echo "Connection failed: " . mysqli_connect_error();
} else {
  
}
?>