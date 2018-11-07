<!DOCTYPE html>
<html>
<head>
       <title></title>
</head>
<body>

<form action="excercise8.php" method="POST">
	First Name: <input type="text" name="firstname" />
	Last Name: <input type="text" name="lastname" />
	Mail: <input type="email" name="mail" />
	<input type="submit" name="submit" />
</form>

<form action="excercise8.php" method="POST">
	First Name: <input type="text" name="firstname" />
	Last Name: <input type="text" name="lastname" />
	Mail: <input type="email" name="mail" />
	User ID you want to update: <input type="number" name="userid" />

	<input type="submit" value="UPDATE" name="update" />
</form>


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

// SUBMIT NEW USERS //
if (isset($_POST['submit'])) {

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];

	$sql = "INSERT INTO Users (firstname, lastname, email)
	VALUES 	('$firstname' , '$lastname', '$mail')";
	if (mysqli_query($conn, $sql)) {
	   echo "New record created.\n";
	} else {
	   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
	}
}


// UPDATE EXISTING USERS //
if (isset($_POST['update'])) {

$fname = $_POST['firstname'];
$sname = $_POST['lastname'];
$mail = $_POST['mail'];
$userid = $_POST['userid'];

	// sql to update a record in the Users table
    $sql = "UPDATE Users SET firstname = '$fname' , lastname='$sname' , email='$mail' WHERE user_id='$userid'";
    	if (mysqli_query($conn, $sql)) {
	   echo "Record updated.\n";
	} else {
	   echo "Update error for: " . $sql . "\n" . mysqli_error($conn);
	}
}


// DISPLAY DB //
$sql = "SELECT user_id, firstname, lastname, email FROM users";
$result = mysqli_query($conn, $sql);
// fetch the next row (as long as there are any) into $row
while($row = mysqli_fetch_assoc($result)) {
       printf("ID: %s<br> %s<br> %s<br> %s<br><br><hr>",
                     $row["user_id"], $row["firstname"], $row["lastname"],$row["email"]);
}
echo "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);


mysqli_close($conn);
?>
</body>
</html>