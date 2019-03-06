<?php

namespace App\Entities;

abstract class AbstractFigure
{
    protected $x;
    protected $y;
    protected $color;

    // region getters and setters
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
    // endregion
}