<!DOCTYPE html>
<html>
<head>

       <title>PHP example</title>

</head>
<body>

<form action="php_DAY02_4.php" method="POST">
First name: <input type="text" name="firstname" />
Last name: <input type="text" name="secondname" />
E-mail: <input type="email" name="mail" />
<input type="submit" name="submit" />
</form>
<br><br>
<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "exercise4";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
/* sql to create table, here as a structure reference
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
*/



if(isset($_POST['submit'])) {

$fname = $_POST['firstname'];
$sname = $_POST['secondname'];
$mail = $_POST['mail'];

	$sql = "INSERT INTO Users (firstname, lastname, email)
	VALUES ('$fname', '$sname', '$mail')";
	if (mysqli_query($conn, $sql)) {
	   echo "New record created.\n";
	} else {
	   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
	}
	
}

if(isset($_POST['update'])) {

$fname = $_POST['firstname'];
$sname = $_POST['secondname'];
$mail = $_POST['mail'];
$userid = $_POST['userid'];

	$sql = "UPDATE Users SET firstname = '$fname' , lastname='$sname' , email='$mail' WHERE user_id='$userid'";
	if (mysqli_query($conn, $sql)) {
	   echo "Record updated.\n";
	} else {
	   echo "Update error for: " . $sql . "\n" . mysqli_error($conn);
	}
	
}




$sql = "SELECT user_id, firstname, lastname, email FROM Users";
$result = mysqli_query($conn, $sql);
// fetch the next row (as long as there are any) into $row
while($row = mysqli_fetch_assoc($result)) {
       printf("Id: %s %s %s (%s)<br>",
                     $row["user_id"], $row["firstname"], $row["lastname"],$row["email"]);
}
echo "<br>Fetched data successfully\n";
// Free result set
mysqli_free_result($result);

mysqli_close($conn);
?>

<br> <br>
<form action="php_DAY02_4.php" method="POST">
Id: <input type="number" name="userid" />
First name: <input type="text" name="firstname" />
Last name: <input type="text" name="secondname" />
E-mail: <input type="email" name="mail" />

<input type="submit" value="Update" name="update" />
</form>

</body>
</html>

