<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php
if(isset($_COOKIE['user'])){
    $user=$_COOKIE['user'];
    echo"<h1>Welcome $user !</h1><h1>";
    echo'<a href="cookie_data.php">View Cookie</a>';
}else{
    echo'Please <a href="cookie_form.html">Log In</a>';
}

?>

</body>
</html>