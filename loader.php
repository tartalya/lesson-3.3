<?php

$classesBaseDir = 'classes/';

function animalsAutoload($className)
    {

    global $classesBaseDir;
    

    $filePath = $classesBaseDir . $className . '.class.php';
    $filePath = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $filePath);
    if (file_exists($filePath)) {
        include "$filePath";
    }
    }

function appliancesAutoload($className)
    {

    global $classesBaseDir;
    

    $filePath = $classesBaseDir . $className . '.class.php';
    $filePath = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $filePath);
    if (file_exists($filePath)) {
        include "$filePath";
    }
    }

function catalogAutoload($className)
    {

    global $classesBaseDir;
    
    $filePath = $classesBaseDir . $className . '.class.php';
    $filePath = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $filePath);
    

    if (file_exists($filePath)) {


        include "$filePath";
    }
    }

function machinesAutoload($className)
    {

    global $classesBaseDir;
    

    $filePath = $classesBaseDir . $className . '.class.php';
    $filePath = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $filePath);
    if (file_exists($filePath)) {
        include "$filePath";
    }
    }

function stationeryAutoload($className)
    {

    global $classesBaseDir;
    

    $filePath = $classesBaseDir . $className . '.class.php';
    $filePath = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $filePath);
    if (file_exists($filePath)) {
        include "$filePath";
    }
    }

function basketAutoload($className)
    {

    global $classesBaseDir;
    

    $filePath = $classesBaseDir . $className . '.class.php';
    $filePath = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $filePath);
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
