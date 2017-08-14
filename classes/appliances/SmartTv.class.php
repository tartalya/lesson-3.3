<?php

namespace appliances;

    class SmartTv extends Tv implements SmartTvInterface
        {
        
        protected $haveEthernet = true;
        protected $haveWifi; // на первых могло и не быть, дефолт задавать не будем
        
        function getHaveEthernet()
            {
            return $this->haveEthernet;
            }

        function getHaveWifi()
            {
            return $this->haveWifi;
            }

        function setHaveEthernet($haveEthernet)
            {
            $this->haveEthernet = $haveEthernet;
            return $this;
            }

        function setHaveWifi($haveWifi)
            {
            $this->haveWifi = $haveWifi;
            return $this;
            }

                
        
        
        }
