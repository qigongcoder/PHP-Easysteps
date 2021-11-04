<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$hdr='<h1 style="color:red">PHP in easy steps</h1>';
echo $hdr;

$hdr = filter_var($hdr, FILTER_SANITIZE_STRING);
echo"Sanitised heading : $hdr";

function validate($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo("<hr>$email IS valid email address");
    }else{
        echo("<hr>$email IS NOT a valid email address");
    }
}

$email='mike @example.com';
validate($email);
$email=filter_var($email, FILTER_SANITIZE_EMAIL);
validate($email);
?>
</body>
</html>






