<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php session_start(); ?>

<?php
function kill_session(){
    unset($_SESSION['user']);
    unset($_SESSION['user']);
    session_destroy();
    echo'<hr>Session Destroyed<br>';
    echo'Session ID: '.session_id().'<br>';
    var_dump($_SESSION);
}

if(count($_SESSION)>0){
    echo'<dl>';
    foreach($_SESSION as $key=>$value){
        echo"<dt>Key: $key";
        echo"<dd>Value: $value";
    }
    echo'</dl><hr>';

    echo 'Session ID: '.session_id().'<br>';
    var_dump($_SESSION);
    kill_session();

}else{
    echo'Please <a href="session_form.html">Log In</a>';
}

?>

</body>
</html>