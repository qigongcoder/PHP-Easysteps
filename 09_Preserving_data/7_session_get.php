<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php session_start(); ?>

<?php
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    echo"<h1>Welcome $user !</h1><hr>";
    echo'<a href="session_data.php">View Session</a>';
}else{
    echo'Please <a href="session_form.html">Log In</a';
}

?>

</body>
</html>