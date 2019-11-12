<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>
<?php

$yes = TRUE; $no =FALSE;

$result=($no && $no)?'TRUE':'FALSE';
    echo "False and false returns $result <br>";
$result=($yes && $no)?'TRUE':'FALSE';
    echo "True and false returns $result <br>";
$result=($yes && $yes)?'TRUE':'FALSE';
    echo "True and True returns $result <hr>";

$result=($no || $no)?'TRUE':'FALSE';
    echo "False or false returns $result <br>";
$result=($yes || $no)?'TRUE':'FALSE';
    echo "True or false returns $result <br>";
$result=($yes || $yes)?'TRUE':'FALSE';
    echo "True or True returns $result <hr>";

$result=(!$yes)?'TRUE':'FALSE';
    echo "Not True returns $result <br>";

?>
</body>
</html>