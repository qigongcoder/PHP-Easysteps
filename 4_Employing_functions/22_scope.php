<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$number = 1;
echo"Global number: $number<br>";

function show_local(){
    $number = 100;
    echo "Local number : $number<hr>";
}
show_local();

function recur(){
    global $number;
    static $letter = 'A';
    if($number <14){
        echo"$number:$letter | ";
        $number++;
        $letter++;
        recur();
    }
}
recur();
echo"<hr>Global number : $number";

?>
</body>
</html>

