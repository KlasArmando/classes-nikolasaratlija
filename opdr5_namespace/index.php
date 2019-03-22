<?php

use App\Entities\House;
use App\Entities\Room;

require_once __DIR__ . "/vendor/autoload.php";

$house1 = new House(
    "Johannes-brandstraat 73",
    1,
    100,
    3,
    100,
    [
        new Room(3, 3, 2),
        new Room(5, 5, 3),
        new Room(3, 3, 2),
        new Room(3, 3, 2),
    ]);

$house2 = new House(
    "Teldersweg 277",
    1,
    75,
    3,
    60,
    [
        new Room(2, 2, 2),
        new Room(4, 4, 3),
        new Room(2, 2, 2),
        new Room(2, 2, 2),
        new Room(0.5, 0.5, 2),
    ]);

$house3 = new House(
    "Bergpolderstraat 14A",
    2,
    60,
    4,
    60,
    [
        new Room(4, 4, 4),
        new Room(4, 4, 3),
        new Room(4, 4, 2),
        new Room(3, 3, 2),
        new Room(3, 3, 2),
        new Room(0.5, 0.5, 2),
    ]);

echo $doc = <<<EOT
    <div>
        <p style='font-size: 1.5em;'>Address: {$house1->getAddress()}</p>
        <p>Aantal verdiepingen: {$house1->getFloorAmount()}</p>
        <p>Lengte: {$house1->getLength()}</p>
        <p>Hoogte: {$house1->getHeight()}</p>
        <p>Weidte: {$house1->getWidth()}</p>
        <p>Prijs: {$house1->getPrice()}$</p>
        <br>    
    </div>

    <div>
        <p style='font-size: 1.5em;'>Address: {$house2->getAddress()}</p>
        <p>Aantal verdiepingen: {$house2->getFloorAmount()}</p>
        <p>Lengte: {$house2->getLength()}</p>
        <p>Hoogte: {$house2->getHeight()}</p>
        <p>Weidte: {$house2->getWidth()}</p>
        <p>Prijs: {$house2->getPrice()}$</p>
        <br>
    </div>
    
    <div>
        <p style='font-size: 1.5em;'>Address: {$house3->getAddress()}</p>
        <p>Aantal verdiepingen: {$house3->getFloorAmount()}</p>
        <p>Lengte: {$house3->getLength()}</p>
        <p>Hoogte: {$house3->getHeight()}</p>
        <p>Weidte: {$house3->getWidth()}</p>
        <p>Prijs: {$house3->getPrice()}$</p>
        <br>
    </div>
EOT;



