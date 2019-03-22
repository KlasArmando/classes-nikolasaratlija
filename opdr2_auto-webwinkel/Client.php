<?php

class Client
{
    private $name;
    private $email;
    private $homeAddress;
    private $cars = [];

    public function __construct($name, $email, $homeAddress)
    {
        $this->name = $name;
        $this->email = $email;
        $this->homeAddress = $homeAddress;
    }

    public function removeCar($index)
    {
        array_splice($this->cars, $index - 1, 1);
    }

    public function addCar(Car $car)
    {
        $car->setDatePurchased(date("Y-m-d"));
        $car->setOwner($this->name);
        array_push($this->cars, $car);
    }

    //<editor-fold desc="getters and setters">
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getHomeAddress()
    {
        return $this->homeAddress;
    }

    public function setHomeAddress($address)
    {
        $this->homeAddress = $address;
    }
    //</editor-fold>
}