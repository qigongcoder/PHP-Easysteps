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

    public function setAge(int $yrs){
        $this->age=$yrs;
    }

    public function setWeight(int $lbs){
        $this->weight=$lbs;
    }

    public function setColor(string $fur){
        $this->color=$fur;
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


$fido = new Dog();

$fido->setAge(3);
$fido->setWeight(15);
$fido->setColor('brown');

echo 'Fido is a '.$fido->getColor().' dog <br>';
echo 'Fido is '.$fido->getAge().' years old <br>';
echo 'Fido weighs '.$fido->getWeight().' pounds<br>';

$fido->bark();



?>
</body>
</html>