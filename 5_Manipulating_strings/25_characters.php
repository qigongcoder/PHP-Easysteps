<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$str1 = 'PHP In Easy Steps';
$str2 = 'PHP In Easy Steps';
$str3 = 'PHP Easy Steps';
$str4 = 'php in easy steps';

echo"'$str1' versus '$str2' : ".strcmp($str1,$str2).'<br>';
echo"'$str1' versus '$str3' : ".strcmp($str1,$str3).'<br>';
echo"'$str1' versus '$str4' : ".strcmp($str1,$str4).'<hr>';

echo'Comparison Ignoring Case :<br>';
echo "'$str1' versus '$str4' :".strcasecmp($str1,$str4);

$total=0;
for($i =0; $i<strlen($str1);$i++){
    $total += ord($str1[$i]);
}
echo "<hr>ASCII Total $str1 : $total";


?>
</body>
</html>









