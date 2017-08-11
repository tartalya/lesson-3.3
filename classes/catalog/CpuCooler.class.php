<?php

class CpuCooler extends Product
    {

    private $socket;
    private $speed;

    function getSocket()
        {
        return $this->socket;
        }

    function getSpeed()
        {
        return $this->speed;
        }

    function setSocket($socket)
        {
        $this->socket = $socket;
        return $this;
        }

    function setSpeed($speed)
        {
        $this->speed = $speed;
        return $this;
        }

    }
