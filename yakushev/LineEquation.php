<?php

namespace yakushev;

class LineEquation {
    protected $x;

    protected function checkOfNum($num) {
        return is_int($num) || is_float($num);
    }
    public function solveLineEquation($a, $b) {
        if($this->checkOfNum($a) && $this->checkOfNum($b)) {
            return $a !== 0 ? $this->x = -$b / $a : null;
        }
    }
}