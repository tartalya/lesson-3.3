<?php

class Basket 
    {
    
    protected $items;
    protected $totalprice = 0;
    protected $itemsCount = 0;
    
  
    
    function getItems()
        {
        return $this->items;
        }

    function getTotalprice()
        {
        return $this->totalprice;
        }

    function getItemsCount()
        {
        return $this->itemsCount;
        }

    function setItems($items)
        {
        $this->items = $items;
        }

    function setTotalprice($totalprice)
        {
        $this->totalprice = $totalprice;
        }

    function setItemsCount($itemsCount)
        {
        $this->itemsCount = $itemsCount;
        }

        
    public function addToBasket($obj)
        {
        
        //var_dump($obj->getPrice());
        
        try {    
        if ($obj->getPrice() > 0) {
            
        $this->items[] = $obj;
        $this->itemsCount++;
            }
            else {
                
                //echo 'Ошибка добавления в корзину';
                throw new Exception('Неправильная цена у товара !!! <br><br>');
            
            }
        }
 catch (Exception $e) {
     
     echo 'Ошибка: ' . $e->getMessage();
     
 }
        }
    public function showBasketItems() 
        {
        
        $this->totalprice = 0;
        
        
        foreach ($this->items as $obj) {
            
            
            
            echo $obj->getBrandname() . ' ' . $obj->getModel() . ' - ';
            
            echo $obj->CalculateFinalPrice() . 'Руб' .'<br><br>';
            
            $this->totalprice = $this->totalprice + $obj->CalculateFinalPrice();
            
        }
        
 
        echo $this->itemsCount . ' Товаров в корзине' .'<br><br>';
        echo ' Итого в корзине на сумму ' . $this->totalprice .'<br><br>';
        
        
        }
        
    function removeFromBasket($obj)
        {
        
        foreach ($this->items as $key => $item) {
            
            if ($item == $obj) {
                
                
                unset($this->items[$key]);
                $this->itemsCount = $this->itemsCount -1;
                
            }
            
            
        }
        
        }
    }

    