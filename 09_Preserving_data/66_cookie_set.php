<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php
function reject($entry){
    echo"Invalid $entry <br>";
    echo'Please <a href="cookie_form.html">Log In</a>';
    exit();
}

if(isset($_POST['user'])){
    $user = trim($_POST['user']);
    if(!ctype_alnum($user)){
        reject('User Name');
    }
    if(isset($_POST['pass'])){
        $pass=trim($_POST['pass']);
        if(!ctype_alnum($pass)){
            reject('Password');
        }else{
            setcookie('user',$user, time()+3600);
            setcookie('pass',md5($pass),time()+3600);
            header('Location: cookie_get.php');
        }
    }
}else{
    header('Location: cookie_form.html');
}



?>

</body>
</html>