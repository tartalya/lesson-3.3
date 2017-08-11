<?php

class Tank extends Car implements TankInterface
    {

    protected $caterpillar = 2; // Добавляем гусиницы
    protected $wheels = 14; // Ведущих конечно меньше, но тут не суть, переоределяем число колес

    function getCaterpillar()
        {
        return $this->caterpillar;
        }

    function setCaterpillar($caterpillar)
        {
        $this->caterpillar = $caterpillar;
        return $this;
        }

    }

