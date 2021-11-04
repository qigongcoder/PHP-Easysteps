<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$str = "C++ Programming in easy steps";
echo"Orginal String : '$str' <hr>";

$ver = strtolower($str);
echo "Lowercase String: '$ver' <br>";

$ver = strtoupper($str);
echo "Uppercase String : '$ver' <hr>";

$ver = ucfirst( strtolower($str));
echo "Uppercase First String Character : '$ver' <br>";
echo 'Uppercase First Word Character : '.ucwords($ver);


?>
</body>
</html>