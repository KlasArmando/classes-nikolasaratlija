<?php

require_once "Car.php";
require_once "Client.php";

$toyotaCorolla = new Car("Toyota", "Corolla", date("Y-m-d"));
$hondaCivic = new Car("Honda", "Civic", "5-2-2019");

$client1 = new Client("klant1", "deemailvandezeklant@gmail.com", "address");
$client2 = new Client("klant2", "eeeeeemail@gmail.com", "een andere address");

$client1->addCar($toyotaCorolla);

$client2->addCar($toyotaCorolla);
$client2->addCar($hondaCivic);

var_dump($client1);
var_dump($client2);
die();