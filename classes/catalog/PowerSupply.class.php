<?php



namespace catalog;

class PowerSupply extends Product
    {

    private $power;
    private $formFactor;
    private $sataCablesCount;

    function getPower()
        {
        return $this->power;
        }

    function getFormFactor()
        {
        return $this->formFactor;
        }

    function getSataCablesCount()
        {
        return $this->sataCablesCount;
        }

    function setPower($power)
        {
        $this->power = $power;
        return $this;
        }

    function setFormFactor($formFactor)
        {
        $this->formFactor = $formFactor;
        return $this;
        }

    function setSataCablesCount($sataCablesCount)
        {
        $this->sataCablesCount = $sataCablesCount;
        return $this;
        }

    public function CalculateFinalPrice()
        {

        if ($this->getWeight() < 10) {
            $this->setDiscount(0);
        }

        $finalPrice = parent::CalculateFinalPrice();

        return $finalPrice;
        }

    }
