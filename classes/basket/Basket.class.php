<?php

class Basket 
    {
    
    private $items;
    private $totalprice = 0;
    private $itemsCount = 0;
    
  
    
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
        
        
        if ($obj->getPrice() > 0) {
            
        $this->items[] = $obj;
        $this->itemsCount++;
            }
            else {
                
                echo 'Ошибка добавления в корзину';
                
            }
        }
    
    public function showBasketItems() 
        {
        
        foreach ($this->items as $obj) {
            
            echo $obj->getBrandname() . ' ' . $obj->getModel() . ' - ';
            
            echo $obj->CalculateFinalPrice() . 'Руб' .'<br><br>';
            
            $this->totalprice = $this->totalprice + $obj->CalculateFinalPrice();
            
        }
        
        echo $this->itemsCount . ' Товаров в корзине' .'<br><br>';
        echo ' Итого по заказу ' . $this->totalprice .'<br><br>';
        
        
        }
        
    }

    