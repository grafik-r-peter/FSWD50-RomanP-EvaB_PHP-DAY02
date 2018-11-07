<!DOCTYPE html>
<html>
<head>
       <title>PHP form example: POST</title>
</head>
<body>
<form action="basic-excercise3.php" method="POST">
Number1: <input type="number" name="number1" />
Number2: <input type="number" name="number2" />
<input type="submit" name="calc" />
</form>

<?php
if(isset($_POST['calc']))
{

	if(empty($_POST['number1']) || empty($_POST['number2'])) 
	{
		echo "GIMME NUMBERS!";
	}

	else
	{
		echo $_POST['number1'] / $_POST['number2'];
	}
}
?>
</body>
</html>