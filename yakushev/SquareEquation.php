<?php

namespace yakushev;

use core\EquationInterface;
use Exception;

class SquareEquation extends LineEquation implements EquationInterface {

    protected function solveDiscriminant($a, $b, $c) {
        return $d = $b * $b - 4 * $a * $c;
    }

    public function solve($a, $b, $c = 0) {
        if($a == 0) {
            return parent::solve($b, $c);
        }
        $d = $this->solveDiscriminant($a, $b, $c);
        if($d > 0) {
            MyLog::log('This is square Equation');
            $sd = sqrt($d);
            return $this->x = array((-$b + $sd) / (2 * $a), (-$b - $sd) / (2 * $a));
        }elseif($d == 0) {
            return $this->x = array(-$b / (2 * $a));
        }

        throw new YakushevException('No roots');
    }
}
