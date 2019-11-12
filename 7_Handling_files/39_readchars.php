<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$filestream = fopen('Little.txt','r')
or die('Unable to open file');

while ($char = fgetc($filestream)){
    echo $char;
}


fclose($filestream);



?>
</body>
</html>