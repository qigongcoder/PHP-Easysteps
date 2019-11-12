<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$poem = "\r\n\tl never saw a man who looked";
$poem.="\r\n\tWith such a wistful eye";
$poem.="\r\n\tUpon that little tent of blue";
$poem.="\r\n\tWhich prisoners call the sky";

$filename ='poem.txt';
$filestream = fopen($filename,'w')
or die('Unable to open file');

$num = fwrite($filestream, $poem);
if($num){
    echo"$num bytes written to $filename";
}

fclose($filestream);



?>
</body>
</html>