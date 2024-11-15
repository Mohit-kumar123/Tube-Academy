<!-- write a php script to sanitise  the string -->

<?php

$str = "<h1>Hello World!</h1>"; 
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;

echo"<br>";
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}


echo"<br>";
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}

echo"<br>";
$ip = "127..0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}


?>


<!-- take age input from the user and valuidate it -->


