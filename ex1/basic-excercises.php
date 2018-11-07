<!DOCTYPE html>
<html>
<head>
       <title>PHP example</title>
    <?php
	$viewer = getenv( "HTTP_USER_AGENT" );
	$browser = "An unidentified browser";

	if(preg_match('/Chrome/i', "$viewer"))
	{ ?>
		<style>
			<?php include 'mozilla.css'; ?>
		</style> 
	<?php
	$browser = 'Google Chrome'; 
	}
	else if( preg_match( "/Mozilla/i", "$viewer" ))
	{ ?>
		<style>
			<?php include 'chrome.css'; ?>
		</style> 
	<?php
		$browser = "Mozilla";
	}
	?>
</head>
<body>

<?php
echo("You are using $browser");
?>
</body>
</html>