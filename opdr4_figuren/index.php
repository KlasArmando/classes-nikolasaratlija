<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Entities\Circle;
use App\Entities\Rectangle;
use App\Entities\Square;
use App\Entities\Triangle;

$circle = new Circle(25, 50, 50, "green");
$rectangle = new Rectangle(150, 50, 100, 150, "purple");
$square = new Square(325, 50, 100, 100, "red");
$triangle = new Triangle(450, 50, 100, 100, "blue");