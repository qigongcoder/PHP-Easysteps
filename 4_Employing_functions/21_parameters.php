<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

function drink (string $tmp = 'hot',string $flavor='tea'){
    echo"Drinking $tmp $flavor.<br>";
}

drink();
drink('iced');
drink('cold','lemonade');

function add(int ...$numbers){
    $total = 0;
    foreach($numbers as $num){
        $total +=$num;
    }
    echo"<hr>Total : $total";
}

add(1,2,3);


?>
</body>
</html>

