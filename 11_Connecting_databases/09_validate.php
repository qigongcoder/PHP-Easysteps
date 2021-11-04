<?php
require('../connect_db.php');

$q='SELECT price FROM watches WHERE model ="Boston"';

$r=mysqli_query($dbc,$q);

while($row = mysqli_fetch_array($r, MYSQLI_NUM)){
    $var=$row[0];
}

$result = is_numeric($var)?'numeric':'not numeric';
echo"$var is $result<br>";
$result = is_int($var)?'an integer':'not an integer';
echo"$var is $result<br>";
$result = is_string($var)?'a string':'not a string';
echo"$var is $result<br>";
$result = is_bool($var)?'a boolean':'not a boolean';
echo"$var is $result<br>";

mysqli_close($dbc);

