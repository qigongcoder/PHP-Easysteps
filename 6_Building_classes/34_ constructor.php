<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

class Dog{
    private $age;
    private $weight;
    private $color;

    public function bark(){
        echo 'Woof! Woof! <br>';
    }

    function __construct ( int $yrs = 2, int $lbs=8, string $fur = 'black'){
        $this->age =$yrs;
        $this->weight = $lbs;
        $this->color=$fur;
    }

    function __destruct(){
        echo'<hr>Object Destroyed.';
    }

    public function getAge(){
        return $this->age;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getColor(){
        return $this->color;
    }

}

$fido=new Dog(3,15,'brown');


echo 'Fido is a '.$fido->getColor().' dog <br>';
echo 'Fido is '.$fido->getAge().' years old <br>';
echo 'Fido weighs '.$fido->getWeight().' pounds<br>';

$fido->bark();

$pooch= new Dog(4,18,'gray');

echo'<hr>Pooch: '.$pooch->getAge().'yrs ';
echo $pooch->getWeight().'lbs '.$pooch->getColor();

$pooch->bark();

$rover = new Dog();

echo '<hr>Rover: '.$rover->getAge().'yrs ';
echo $rover->getWeight().'lbs '.$rover->getColor();
$rover->bark();

$items = get_class_vars('Dog');
echo '<br>Dog variables : '.count($items);

echo'<br>Dog methods :';
$items = get_class_methods('Dog');
foreach($items as $item){
    echo "$item, ";
}

?>
</body>
</html>