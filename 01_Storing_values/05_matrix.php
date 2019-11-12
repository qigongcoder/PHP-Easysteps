<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$letters = array('A','B','C');
$numbers=array(1,2,3);
$matrix=array('Letter'=>$letters,'Number'=>$numbers);

foreach($matrix as $ka=>$va){
    echo"<ul>";
    foreach($va as $ki=>$vi){
        echo"<li>$ka [$ki] = $vi</li>";
    }
    echo"</ul>";
}

?>

</body>
</html>