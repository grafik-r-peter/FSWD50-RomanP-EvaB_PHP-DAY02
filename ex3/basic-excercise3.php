<!DOCTYPE html>
<html>
<head>
       <title>PHP form example: POST</title>
</head>
<body>
<form action="basic-excercise2.php" method="POST">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" name="submit" />
</form>

<?php
if(isset($_POST['submit']))
{

	if(empty($_POST['name']) || empty($_POST['age'])) 
	{
		echo "GIMME. YOUR. DATA!";
	}

	else
	{
		echo "Welcome ". $_POST['name'] ."<br />";
		echo "You are ". $_POST['age'] ." years old.";
	}
}
?>
</body>
</html>