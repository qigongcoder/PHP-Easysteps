<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$str = '| PHP String Fun |';
echo "Original String : $str";

echo '<hr>Reversed String :'.strrev($str);
echo '<hr>Repeated String :'.str_repeat($str,3);
echo '<hr>Trimmed String : '.trim($str,'|');

$pad = str_pad($str,30,'*',STR_PAD_LEFT);
echo"<hr>Padded String : $pad";

echo '<hr>Split String:';
$token = strtok($str,' ');
while($token){
    echo "$token ...";
    $token=strtok(' ');
}

?>
</body>
</html>