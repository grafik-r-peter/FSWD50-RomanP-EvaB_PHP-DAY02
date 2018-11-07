<!DOCTYPE html>
<html>
<head>

       <title>PHP example</title>
       <?php
$viewer = getenv( "HTTP_USER_AGENT" );
$bbrowser = "An unidentified browser";
if(preg_match('/Chrome/i', "$viewer"))
{
$bbrowser = '<link rel="stylesheet" type="text/css" href="chrome.css">'; 
}
else if( preg_match( "/Mozilla/i", "$viewer" ))
{
$bbrowser =  '<link rel="stylesheet" type="text/css" href="mozilla.css">';
}
echo("$bbrowser ");
?>
</head>
<body>
<?php
$viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";
if(preg_match('/Chrome/i', "$viewer"))
{
$browser = 'Google Chrome'; 
}
else if( preg_match( "/Mozilla/i", "$viewer" ))
{
$browser = "Mozilla";
}
echo("You are using $browser ");
?>
</body>
</html>