<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php
$str = 'Most Users usually find PHP useful.';
echo "'$str'<br>String Length : ".strlen($str);

echo "<br>First 'us' found at : ".strpos($str,'us');
echo"<br>Final 'us' found at : ".strrpos($str, 'us');

echo"<hr>Substring from first 'us' : ".strstr($str,'us');
echo"<br>Substring from first 'us' case insensitive : " .stristr($str,'us');

echo"<hr>Characters from first 'u' : ".strchr($str,'u');
echo"<br>Characters from final 'u' : ".strrchr($str,'u');
?>
</body>
</html>









