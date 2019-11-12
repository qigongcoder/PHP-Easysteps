<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$info = "\r\n\r\n\tThe Ballad of Reading Gaol";
$info.="\r\n\t\t\tOscar Wilde 1898";

$filename ='poem.txt';

$filestream = fopen($filename ,'a')
or die('Unable to open file');

$num=fwrite($filestream, $info);
if($num){
    echo"$num bytes appended to $filename";
}

fclose($filestream);


?>
</body>
</html>