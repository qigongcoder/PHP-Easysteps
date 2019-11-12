<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<!--
<img src="image.jpg" style="width:128px;height:128px;">
-->

<?php

if(!empty($_FILES['tosend'])){

    echo'<br>';
    $name=$_FILES['tosend']['name'];
    echo gettype($name).'<br>';
    echo "$name<br><br>";

    $tmp_name=$_FILES['tosend']['tmp_name'];   
    echo gettype($name).'<br>';    
    echo "$tmp_name<br><br>";

    $size=$_FILES['tosend']['size'];   
    echo gettype($name).'<br>';    
    echo "$size<br><br>";

    echo 'count(count($_FILES): '.count($_FILES).'<br>';
    echo 'count(count($_FILES[\'tosend\']): '.count($_FILES['tosend']).'<br><br>';

    foreach($_FILES['tosend'] as $key=>$value){
        echo'$key :'."$key".'<br>';
        echo'$value :'."$value".'<br><br>';        
    }

    #CHECK PHP MANUAL ON BELOW

    move_uploaded_file($tmp_name,$name);
    echo'<br><img src="'.$name.'" style="width:128px;height:128px">';

}else{
    echo'Nothing submitted';
}

?>
</body>
</html>







