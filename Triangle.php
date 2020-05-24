<?php
include_once "Shape.php";

class Triangle extends Shape
{
    public $side1;
    public $side2;
    public $side3;
    public $color;
public function __construct($color, $side1, $side2, $side3)
{
    $this->color = $color;
    $this->side1 = $side1;
    $this->side2 = $side2;
    $this->side3 = $side3;
}

    /**
     * @return mixed
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @return mixed
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @return mixed
     */
    public function getSide3()
    {
        return $this->side3;
    }
    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function getArea()
    {
        return (sqrt($this->getPerimeter() * ($this->side1 + $this->side2 - $this->side3) * ($this->side1 - $this->side2 + $this->side3) * ($this->side2 + $this->side3 - $this->side1)))/4 ;
    }
    public function toString()
    {
        return $this->color."<br>".$this->getPerimeter()."<br>".$this->getArea();

    }
}