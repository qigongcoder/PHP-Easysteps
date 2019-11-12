<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

if(count($_COOKIE)>0){
    echo'<dl>';
    foreach($_COOKIE as $key=>$value){
        echo"<dt>KEY: $key";
        echo"<dd>Value: $value";
    }
    echo'</dl><hr>';
    var_dump($_COOKIE);
}else{
    echo'Please <a href="cookie_form.html"Log In</a>';
}






?>

</body>
</html>