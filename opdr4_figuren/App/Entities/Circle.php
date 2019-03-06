<?php

namespace App\Entities;

class Circle extends AbstractFigure
{
    private $radius;

    public function __construct($x, $y, $radius, $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
        $this->radius = $radius;
        $this->draw();
    }

    private function draw()
    {
        $width = $this->radius * 2 . "px";
        $height = $this->radius * 2 . "px";

        echo "
        <div style='
            position: absolute; 
            left: {$this->x}; 
            top: {$this->y};
            width: {$width};
            height: {$height};
            background-color: {$this->color};
            border-radius: 100%;
            '>
        </div>";
    }

    // region getters and setters

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    // endregion
}