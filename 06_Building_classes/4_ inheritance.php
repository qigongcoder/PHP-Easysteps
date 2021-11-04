<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

class Polygon{
    private $width, $height;

    function __construct(int $w=4, int $h = 5){
        $this->width=$w;
        $this->height=$h;
    }

    public function getWidth(){
        return $this->width;
    }

    public function getHeight(){
        return $this->height;
    }

}

class Rectangle extends Polygon{
    public function area(){
        return ($this->getWidth()*$this->getHeight());
    }
}

class Triangle extends Polygon{
    public function area(){
        return ($this->getWidth()*$this->getHeight()/2);
    }
}

$rect= new Rectangle();
$trio = new Triangle();

echo 'Rectangle Area :'.$rect->area().'<hr>';
echo 'Trinangle Area :'.$trio->area();






?>
</body>
</html>