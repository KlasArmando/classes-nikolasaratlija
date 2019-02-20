<?php

require_once "../Entities/Receipt.php";

$receipt = new Receipt($_GET['washingMachinePrice'], $_GET['dryerPrice'], $_GET['fridgePrice']);

echo "Datum: " . $receipt->getCurrentDate() . "<br>";
echo "Wasmachine: " . $receipt->getWashingMachinePrice() . "<br>";
echo "Droger: " . $receipt->getDryerPrice() . "<br>";
echo "Koelkast: " . $receipt->getFridgePrice() . "<br>";
echo "Totaalprijs ex btw: " . round($receipt->getGrandTotalWithoutVAT(), 2) . "<br>";
echo "Totaalprijs: " . $receipt->getGrandTotal() . "<br>";

echo "Over 10 seconden word u terug gestuurd naar de formulier";
header("Refresh: 10; url=../../index.php");
