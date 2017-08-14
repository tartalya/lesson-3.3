<?php


namespace catalog;


require_once 'loader.php';

$powerSupplyHiper = new PowerSupply('M600', 'black', 3200, '100x100x50', 5,'блоки питания', 'china', 10, 'hiper');
$powerSupplyHiper->setPower('600watt')
        ->setSataCablesCount(6)
        ->setFormFactor('ATX');



$powerSupplyThermaltake = new PowerSupply('W0431RE', 'black', 21999, '220x150x86', 15,'блоки питания', 'china', 10, 'Thermaltake');
$powerSupplyThermaltake->setPower('1500watt')
        ->setSataCablesCount(16)
        ->setFormFactor('ATX');


   $coolerMaster = new CpuCooler('DKM-00001-A1-GP', 'silver', 210, '50x50x50', 0.2, 'cpu cooler', 'china', 10, 'cooler master');
   
   $coolerMaster->setSocket('AM1')
           ->setSpeed(4800);
   
   
   
   
   
   namespace catalog\basket;
   
   $basket = new Basket();
   
   $basket->addToBasket($coolerMaster);
   $basket->addToBasket($powerSupplyThermaltake);
   $basket->addToBasket($powerSupplyHiper);
   
   
   $basket->showBasketItems();
   
   $basket->removeFromBasket($powerSupplyHiper);
   
   echo '<br><br>';
   echo 'После удаления powerSupplyHiper в корзине';
   echo '<br><br>';
   
   
   $basket->showBasketItems();
   
   echo '<br><br>';
   echo '<br><br>';
   
   $order = new Order('Александр', 'Ул. уличная 63', 'Почта России', 141983, $basket);
   
   $order->showOrder();
   
   
   namespace appliances;
   
   
   $tv = new Tv();
   
   echo 'Я сделал заказ и пошел смотреть свой ' . $tv->getColor() . ' телевизор';
   
   echo '<br><br>';
   
   namespace animals;
   
   $animal = new Duck('красная');
   
   echo 'Моя утка ' . $animal->getColor();
   
   namespace machines;
   
   $myAuto = new Tank('Золотой', 'Т34');
   
   echo '<br><br>';
   
   echo 'Мой ' . $myAuto->getModel() . ' ' . $myAuto->color . ' цвета';
   
   echo '<br><br>';
   
   namespace stationery;
   
   $myPencil = new Pencil('белый', 'серый');
   
   echo 'У меня есть карандаш ' . $myPencil->getColor() . ' цвета';
        