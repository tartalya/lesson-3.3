<?php

namespace catalog\basket;

class Order 
    {
    
    protected $buyerName;
    protected $buyerAddress;
    protected $deliveryService;
    protected $zipCode;
    protected $orderStatus;
    protected static $orderId;
    protected $basket;




    public function __construct($buyerName, $buyerAddress, $deliveryService, $zipCode, $basket)
        {
        
        $this->buyerName = $buyerName;
        $this->buyerAddress = $buyerAddress;
        $this->deliveryService = $deliveryService;
        $this->zipCode = $zipCode;
        self::$orderId = self::$orderId +1;
        $this->basket = $basket;
        
        
        }
    
    function getBuyerName()
        {
        return $this->buyerName;
        }

    function getBuyerAddress()
        {
        return $this->buyerAddress;
        }

    function getDeliveryService()
        {
        return $this->deliveryService;
        }

    function getZipCode()
        {
        return $this->zipCode;
        }

    function getOrderStatus()
        {
        return $this->orderStatus;
        }

    function setBuyerName($buyerName)
        {
        $this->buyerName = $buyerName;
        }

    function setBuyerAddress($buyerAddress)
        {
        $this->buyerAddress = $buyerAddress;
        }

    function setDeliveryService($deliveryService)
        {
        $this->deliveryService = $deliveryService;
        }

    function setZipCode($zipCode)
        {
        $this->zipCode = $zipCode;
        }

    function setOrderStatus($orderStatus)
        {
        $this->orderStatus = $orderStatus;
        }

            
    public function showOrder() 
        {
        
        echo 'Здрвавствуйте ' . $this->buyerName . ' Ваш заказ номер ' . self::$orderId . ' Зарегистрирован';
        echo '<br>';
        echo 'Ваш заказ будет доставлен в ' . $this->zipCode . ' ' .$this->buyerAddress;
        echo '<br>';
        echo 'Состав вашего заказа: ' ;
        echo '<br>';
        
        //var_dump($this->basket);
        echo $this->basket->showBasketItems();
        
        }
    
    
    }
