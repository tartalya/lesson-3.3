<?php

class SmartPhone extends Product
    {

    private $ScreenDimension;
    private $ram;
    private $rom;
    private $clockSpeed;

    function getScreenDimension()
        {
        return $this->ScreenDimension;
        }

    function getRam()
        {
        return $this->ram;
        }

    function getRom()
        {
        return $this->rom;
        }

    function getClockSpeed()
        {
        return $this->clockSpeed;
        }

    function setScreenDimension($ScreenDimension)
        {
        $this->ScreenDimension = $ScreenDimension;
        return $this;
        }

    function setRam($ram)
        {
        $this->ram = $ram;
        return $this;
        }

    function setRom($rom)
        {
        $this->rom = $rom;
        return $this;
        }

    function setClockSpeed($clockSpeed)
        {
        $this->clockSpeed = $clockSpeed;
        return $this;
        }

    }

