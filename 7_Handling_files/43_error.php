<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

function error_handler($level,$message){
    switch($level){
        case 2:$str='Warning'; break;
        case 8:$str='Notice'; break;
        default:$str='Error';
    }
    echo"<br>$str</br><br>$message<hr>";
}

set_error_handler('error_handler');

echo($var);
$file=fopen('nonsuch.txt','r');

$number=2;
if($number>=1){
    trigger_error('Value of number must be 1 or less');
}


?>
</body>
</html>