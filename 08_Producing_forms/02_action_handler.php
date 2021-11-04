<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$name=$_POST['name'];
$mail= $_POST['mail'];
$comment = $_POST['comment'];
echo "<p>Thanks for this comment $name ...</p>";
echo"<p><i>$comment</i></p>";
echo"<p>We will reply to $mail</p>";

$months['jan']='January';
$months['feb']='Feburary';

foreach($_POST as $key=>$value){
    echo"<p>$key</p>";
}


?>
</body>
</html>