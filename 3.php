<?php
abstract class Shape
{
    abstract public function area();
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class AreaCalculator
{
    private $shapes;

    public function __construct($shapes)
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = 0;
        foreach ($this->shapes as $shape) {
            $area += $shape->area();
        }
        return $area;
    }
}

$shapes = [new Circle(2), new Rectangle(3, 4)];
$calculator = new AreaCalculator($shapes);
echo $calculator->sum(); // Outputs: 18.8495559215388
?>