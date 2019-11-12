<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$filestream = fopen('index.html','r');
$data=array('PHP',1,2.3,TRUE,NULL, array(),new Directory, $filestream);

foreach($data as $type){
    var_dump($type);
    echo'<br>';
}
echo'<hr>';  
foreach($data as $type){
    echo gettype($type);
    echo'<br>';
}




?>
</body>
</html>