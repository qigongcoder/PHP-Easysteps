<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

if (!empty($_GET )) {

    echo'$_GET  is full<br>';
    echo 'It is an '.gettype($_GET).'<br>';
    echo 'It has size '.count($_GET).'<br>';

    foreach($_GET as $key=>$value){
        echo"key is $key and value is $value";
    }

}else{
    echo'no data sent';    
}

?>

</body>
</html>