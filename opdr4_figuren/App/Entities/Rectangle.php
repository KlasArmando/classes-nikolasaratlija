<?php

namespace App\Entities;

class Rectangle extends AbstractFigure
{
    private $height;
    private $width;

    public function __construct($x, $y, $height, $width, $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->height = $height;
        $this->width = $width;
        $this->color = $color;
        $this->draw();
    }

    private function draw()
    {
        echo "
        <div style='
            position: absolute; 
            left: {$this->x}; 
            top: {$this->y};
            width: {$this->width};
            height: {$this->height};
            background-color: {$this->color};'>
        </div>";
    }

    // region getters and setters

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    // endregion
}