<!DOCTYPE html>
<html>
<head>
       <title></title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "excercise4_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
// sql to create table
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
   echo "Table Users created successfully" . "\n";
} else {
   echo "Error creating table: " . mysqli_error($conn) . "\n";
}
mysqli_close($conn);
?>


</body>
</html>