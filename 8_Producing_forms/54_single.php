<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

if($_SERVER['REQUEST_METHOD']!= 'POST'){

    echo'
    <form action="single.php" method="POST">
    <fieldset>
    <legend>Send us your comments</legend>
    <textarea rows="5" cols="40" name="comment">
    </textarea>
    </fieldset>
    <p><input type="submit"></p>
    </form>';

}else{

    if(!empty($_POST['comment'])){
        $comment=$_POST['comment'];
        echo "Comment : $comment";

    }else{
        $comment=NULL;
        echo'You must enter a comment';
    }
}

?>
</body>
</html>