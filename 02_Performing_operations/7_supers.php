<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

echo 'Web Server : '.$_SERVER[ 'SERVER_SOFTWARE'].'<br>';

echo 'This Script : '.$_SERVER[ 'PHP_SELF'].'<br>';

echo'Host Name : '.$_SERVER['HTTP_HOST'].'<br>';

echo 'Request Method : '.$_SERVER['REQUEST_METHOD'];

foreach($_GET as $key => $value){
    echo'<hr>HTTP GET : '.$key.'='.$value;
}

?>
</body>
</html>