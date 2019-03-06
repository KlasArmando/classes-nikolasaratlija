<?php

namespace App\Entities;

class Square extends AbstractFigure
{
    private $height;
    private $width;

    public function __construct($x, $y, $height, $width, $color)
    {
        try {
            if ($this->isValidSquare($height, $width)) {
                $this->height = $height;
                $this->width = $width;
                $this->x = $x;
                $this->y = $y;
                $this->color = $color;
                $this->draw();
            }
        } catch (\Exception $e) {
            echo "Exception message: " . $e->getMessage();
        }
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

    /**
     * @param $height
     * @param $width
     * @return bool
     * @throws \Exception
     */
    private function isValidSquare($height, $width)
    {
        if ($height == $width) return true;
        throw new \Exception("Length and width of a square must be equal.");
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