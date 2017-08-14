<?php

// Придется воссоздать настоящую утку, а не больничную (

namespace animals;

interface BirdInterface
    {

    public function __construct($color, $sound);

    public function fly();

    public function getSound();
    
    public function getColor();
    public function setColor($color);
    
    }

class Bird implements BirdInterface
    {

    protected $color;
    protected $sound;

    public function getColor()
        {
        return $this->color;
        }

    public function setColor($color)
        {
        $this->color = $color;
        }

    
        public function __construct($color, $sound = '')
        {

        $this->color = $color;
        $this->sound = $sound;
        }

    public function fly()
        {

        return 'Разгоняемся, машем крыльями и взлетаем';
        }

    public function getSound()
        {

        return 'издает звук ' . $this->sound;
        }

    }



