<?php

class Receipt
{
    private $currentDate;
    private $washingMachinePrice;
    private $dryerPrice;
    private $fridgePrice;
    private $grandTotal;
    private $grandTotalWithoutVAT;

    const VAT = 21;

    public function __construct($washingMachinePrice, $dryerPrice, $fridgePrice)
    {
        $this->washingMachinePrice = $washingMachinePrice;
        $this->dryerPrice = $dryerPrice;
        $this->fridgePrice = $fridgePrice;
        $this->currentDate = date("d-M-Y");
        $this->grandTotal = $this->calcGrandTotal();
        $this->grandTotalWithoutVAT = $this->calcGrandTotalWithoutVAT();
    }

    private function calcGrandTotal()
    {
        return $this->washingMachinePrice + $this->dryerPrice + $this->fridgePrice;
    }

    private function calcGrandTotalWithoutVAT()
    {
        return $this->grandTotal / (100 + Receipt::VAT) * 100;
    }

    // region getters and setters

    public function getGrandTotal()
    {
        return $this->grandTotal;
    }

    public function getGrandTotalWithoutVAT()
    {
        return $this->grandTotalWithoutVAT;
    }

    /**
     * @return mixed
     */
    public function getWashingMachinePrice()
    {
        return $this->washingMachinePrice;
    }

    /**
     * @return mixed
     */
    public function getDryerPrice()
    {
        return $this->dryerPrice;
    }

    /**
     * @return mixed
     */
    public function getFridgePrice()
    {
        return $this->fridgePrice;
    }

    /**
     * @return false|string
     */
    public function getCurrentDate()
    {
        return $this->currentDate;
    }

    // endregion
}