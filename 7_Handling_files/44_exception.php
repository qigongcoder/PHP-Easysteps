<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

function check_size($num){
    if($num<10){
        throw new
        Exception("Number : $num<br>Value must exceed 10");
    }
}

try{
    check_size(5);
}

catch(Exception $e){
    echo'<br>Size Exception</b><br>'.
    $e->getMessage().
    '<br> at line '.$e->getLine().
    '<br> in file '.$e->getFile().'<hr>';;
}

class CustomException extends Exception{
    public function get_details(){
        $details = 'File : '.$this->getFile().
        '<br>Line : '.$this->getLine().
        '<br>'.$this->getMessage();
        return $details;
    }
}

function check_parity($num){
    if($num % 2 !== 0){
        throw new CustomException("Number : $num<br>Value must be even");
    }
}

try{
    check_parity(5);
}

catch(CustomException $e){
    echo'<br>Parity Exception</b><br>'.
    $e->get_details().'<hr>';
}


/*
catch(CustomerException $e){
    echo'<b>Parity Exception!</b><br>'.
    $e->get_details().'<hr>';
}
*/


?>
</body>
</html>