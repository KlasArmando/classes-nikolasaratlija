<?php

namespace App\Entities;


class House
{
    private $address;
    private $floorAmount;
    private $price;
    private $rooms = [];

    // In meters
    private $length;
    private $height;
    private $width;

    const PRICE_PER_CUBIC_METER = 100;

    public function __construct($address, $floorAmount, $length, $height, $width, array $rooms)
    {
        $this->address = $address;
        $this->floorAmount = $floorAmount;
        $this->length = $length;
        $this->height = $height;
        $this->width = $width;
        $this->rooms = $rooms;
        $this->price = $this->calculatePrice();
    }

    public function calculatePrice()
    {
        $volume = 0;

        foreach ($this->rooms as $room)
            $volume += $room->calculateVolume();

        return $volume * self::PRICE_PER_CUBIC_METER;
    }

    //region getters and setters

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getFloorAmount()
    {
        return $this->floorAmount;
    }

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

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    //endregion
}