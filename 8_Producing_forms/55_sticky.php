<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>


<form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
<p>Name:
<input type="text" name="name" value="<?php
    if (isset($_POST['name']))
        echo $_POST['name'];
        ?>">
</p>
<p>Email:
<input type="text" name="email" value="<?php
    if (isset($_POST['email']))
        echo $_POST['email'];
        ?>">
</p>

<p><input type="submit"></p>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $errors=array();
   if(empty($_POST['name'])){
       $errors[]='name';
   }else{
       $name=trim($_POST['name']);
   }
   if(empty($_POST['email'])){
       $errors[]='email';
   }else{
        $email = trim($_POST['email']);
   }
   if(!empty($errors)){
       echo'Error! Please enter your ';
       foreach($errors as $msg){
           echo "-$msg";}
    }else{
        echo"Sucess! Thanks $name";
    }
}
?>

</body>
</html>




