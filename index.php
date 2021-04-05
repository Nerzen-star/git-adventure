<?php

use yakushev\SquareEquation;
use yakushev\MyLog;
use yakushev\YakushevException;

ini_set("display_errors", 1); error_reporting(-1);

spl_autoload_register(function($class) {
    require_once(__DIR__ . '/' . $class . '.php');
});

// Logic
try {
    $dir = 'log\\';
    if (!file_exists($dir)) {
        mkdir($dir, 0755);
    }

    $file = fopen("version", "r");
    MyLog::log("Version program: " . fgets($file));
    fclose($file);

    echo "3 parameters entered: a, b, c \n\r";
    $read = readline();
    $param = explode(" ", $read);
    // The first way to solve the problem
    foreach($param as &$valueFloat) {
        $valueFloat = (float) $valueFloat;
    }
    unset($valueFloat); // удаление ссылки на последний элемент массива
    // Second way to solve the problem
    //$param = array_map('floatval', $param);
    //(empty($param[2])) ? $param[2] = 0 : $param[2];
    MyLog::log("The equation is introduced: $param[0]*x^2 + $param[1]*x + $param[2] = 0");
    $squareEquation = new SquareEquation();
    $resultEquation = $squareEquation->solve($param[0], $param[1], $param[2]);
    MyLog::log('Equation roots: ' . implode('; ', $resultEquation));
} catch (Exception $e) {
    MyLog::log($e->getMessage());
}
MyLog::write();