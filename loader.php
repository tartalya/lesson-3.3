<?php

$classesBaseDir = 'classes/';

function animalsAutoload($className)
    {

    global $classesBaseDir;
    $path = 'animals/';

    $filePath = $classesBaseDir . $path . $className . '.class.php';
    if (file_exists($filePath)) {
        include "$filePath";
    }
    }

function appliancesAutoload($className)
    {

    global $classesBaseDir;
    $path = 'appliances/';

    $filePath = $classesBaseDir . $path . $className . '.class.php';
    if (file_exists($filePath)) {
        include "$filePath";
    }
    }

function catalogAutoload($className)
    {

    global $classesBaseDir;
    $path = 'catalog/';

    $filePath = $classesBaseDir . $path . $className . '.class.php';
    if (file_exists($filePath)) {


        include "$filePath";
    }
    }

function machinesAutoload($className)
    {

    global $classesBaseDir;
    $path = 'machines/';

    $filePath = $classesBaseDir . $path . $className . '.class.php';
    if (file_exists($filePath)) {
        include "$filePath";
    }
    }

function stationeryAutoload($className)
    {

    global $classesBaseDir;
    $path = 'stationery/';

    $filePath = $classesBaseDir . $path . $className . '.class.php';
    if (file_exists($filePath)) {
        include "$filePath";
    }
    }

    function basketAutoload($className)
    {

    global $classesBaseDir;
    $path = 'basket/';

    $filePath = $classesBaseDir . $path . $className . '.class.php';
    if (file_exists($filePath)) {
        include "$filePath";
    }
    }
    
    
    
spl_autoload_register('animalsAutoload');
spl_autoload_register('appliancesAutoload');
spl_autoload_register('catalogAutoload');
spl_autoload_register('machinesAutoload');
spl_autoload_register('stationeryAutoload');
spl_autoload_register('basketAutoload');
