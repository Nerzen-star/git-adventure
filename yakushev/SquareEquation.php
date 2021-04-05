<?php

namespace yakushev;

use core\EquationInterface;

class SquareEquation extends LineEquation implements EquationInterface {

    protected function solveDiscriminant($a, $b, $c) {
        return $d = $b * $b - 4 * $a * $c;
    }

    public function solveSquareEquation($a, $b, $c) {
        if($this->checkOfNum($a) && $this->checkOfNum($b) && $this->checkOfNum($c)) {
            if($a !== 0) {
                $d = $this->solveDiscriminant($a, $b, $c);
                if($d > 0) {
                    $sd = sqrt($d);
                    $this->x = array((-$b + $sd) / (2 * $a), (-$b - $sd) / (2 * $a));
                }else if($d === 0) {
                    $this->x = -$b / (2 * $a);
                }else {
                    return null;
                }
                return $this->x;
            }
            return parent::solveLineEquation($b, $c);
        }
        return null;
    }
}
