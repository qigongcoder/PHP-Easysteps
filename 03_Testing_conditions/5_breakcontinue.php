<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

for($i=1;$i<4;$i++){
    for($j=1;$j<4;$j++){
        if($i==1 && $j == 1){
            echo"Continues inner loop when i = $i and j= $j <br>";
            continue;
        }
        echo"Running i = $i and j = $j <br>";
    }
}



?>
</body>
</html>