<?php

namespace App\Entities;

class Triangle extends AbstractFigure
{
    private $baseLength;
    private $height;

    public function __construct($x, $y, $baseLength, $height, $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
        $this->baseLength = $baseLength;
        $this->height = $height;
        $this->draw();
    }

    private function draw()
    {
        $width = $this->baseLength / 2 . 'px';
        $height = $this->height . 'px';

        $borderBottom = "$height solid $this->color";

        echo "
        <div style='
        position: absolute; 
            left: {$this->x}; 
            top: {$this->y};
            width: 0;
            height: 0;
            border-bottom: {$borderBottom};
            border-left: {$width} solid transparent;
            border-right: {$width} solid transparent;
            border-bottom-color: {$this->color}'>
        </div>";
    }

    // region getters and setters

    /**
     * @return mixed
     */
    public function getBaseLength()
    {
        return $this->baseLength;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    // endregion
}