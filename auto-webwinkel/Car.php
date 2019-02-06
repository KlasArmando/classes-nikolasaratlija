<?php

class Car
{
    private $owner;
    private $brand;
    private $model;
    private $dateAddedToShop;
    private $datePurchased;

    public function __construct($brand, $model, $dateAddedToShop)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->dateAddedToShop = $dateAddedToShop;
    }

    //<editor-fold desc="getters and setters">
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setDateAddedToShop($date)
    {
        $this->dateAddedToShop = $date;
    }

    public function getDateAddedToShop()
    {
        return $this->dateAddedToShop;
    }

    public function setDatePurchased($date)
    {
        $this->datePurchased = $date;
    }

    public function getDatePurchased()
    {
        return $this->datePurchased;
    }
    //</editor-fold>
}