<?php

use yakushev\LineEquation;
use yakushev\SquareEquation;

ini_set("display_errors", 1); error_reporting(-1);

// core
require_once('core\EquationInterface.php');
require_once('core\LogInterface.php');
require_once('core\LogAbstract.php');

// yakushev
require_once('yakushev\LineEquation.php');
require_once('yakushev\SquareEquation.php');
//require_once ('yakushev\MyLog.php');

$lineEquation = new LineEquation();
$squareEquation = new SquareEquation();

var_dump($lineEquation->solveLineEquation(4, 2));
var_dump($squareEquation->solveSquareEquation(1, 17, -18));