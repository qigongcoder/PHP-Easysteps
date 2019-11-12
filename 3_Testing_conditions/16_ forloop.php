<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

for($i = 1;$i<4;$i++){
    echo"<dt>Outer loop interation $i";
    for($j=1; $j<4;$j++){
        echo"<dd>Inner loop iteration $j";
    }
}

?>
</body>
</html>