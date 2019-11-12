<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>
<?php

$hello = function ($user){
    echo "Hello $user!<br>";
};

$hello ('Mike');

function greet (callable $anon){
    $anon ('Carole Anne');
}

greet($hello);

function meet(): callable{
    $time='morning';
    return function ($name) use( &$time){
        return "Good $time, $name!";
    };
}

$meeting = meet();
echo $meeting ('Susan');

?>
</body>
</html>








