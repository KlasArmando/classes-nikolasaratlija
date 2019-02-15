<?php

namespace App\Entities;


class Room
{
    private $length;
    private $width;
    private $height;

    public function __construct($length, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateVolume()
    {
        return $this->length * $this->height * $this->width;
    }

    //region getters and setters

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }
    //endregion
}