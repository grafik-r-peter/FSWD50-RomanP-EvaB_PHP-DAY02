<!DOCTYPE html>
<html>
<head>

       <title>PHP example</title>

</head>
<body>

<form action="php_DAY02_2.php" method="POST">
Name: <input type="text" name="name" />
Surname: <input type="text" name="surname" />
<input type="submit" name="submit" />
</form>



<?php
if(isset($_POST['submit']))
{
	
	  if (empty($_POST["name"]))  {
	    echo "Please insert your name<br>";
	  } else {
	    echo "Welcome ". $_POST['name']. " ";
	  }
	
	
	  if (empty($_POST["surname"])) {
	    echo "Please insert your surname";
	  } else {
	    echo $_POST['surname'];
	  }
}




?>

</body>
</html>


