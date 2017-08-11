<?php

interface CarInterface
    {

    public function throttle($speed);

    public function __construct($color, $model);

    public function getWheels();

    public function setWheels($wheels);

    public function getModel();

    public function getSpeed();
    }

interface TankInterface extends CarInterface
    {

    function getCaterpillar();

    function setCaterpillar($caterpillar);
    }




abstract class Car implements CarInterface
    {

    public $color;
    protected $maxSpeed;
    protected $wheels = 4;
    protected $speed = 0;
    protected $model;

    public function __construct($color, $model)
        {

        $this->model = $model;
        $this->color = $color;
        }

    public function getWheels()
        {
        return $this->wheels;
        }

    public function setWheels($wheels)
        {
        $this->wheels = $wheels;
        return $this;
        }

    public function getModel()
        {

        return $this->model;
        }

    public function throttle($speed)
        {

        $this->speed = $speed;

        return $this;
        }

    public function getSpeed()
        {

        return $this->speed;
        }

    }






