<?php

class Chicken extends Bird implements BirdInterface
    {

    public function fly()
        {
        // переопределим, курицы не умеет летать и тогда метод можно сделать пустым и вернуть false

        return 'Разгоняемся, машем крыльями и никак ';
        }

    }

