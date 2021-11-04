<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$filestream = fopen('poem.txt','w')
or die('Unable to open file');

fwrite($filestream,'Overwritten');

fclose($filestream);

?>
</body>
</html>