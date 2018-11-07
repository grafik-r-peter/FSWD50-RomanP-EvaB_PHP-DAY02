<!DOCTYPE html>
<html>
<head>

       <title>PHP example</title>

</head>
<body>


<br>
<br>
<form action="php_DAY02_3.php" method="POST">
First number: <input type="number" name="num1" />
Second number: <input type="number" name="num2" />
<input type="submit" name="submit" />
</form>


<?php



if(isset($_POST['submit']))
{

	if(empty($_POST['num1']) || empty($_POST['num2'])) 
	{
		echo "Enter all fields please";
	}

	else
	{
		echo $_POST['num1'] / $_POST['num2'];
		
	}
}

?>

</body>
</html>


