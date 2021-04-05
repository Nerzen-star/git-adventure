<?php

namespace yakushev;

class LineEquation {
    protected $x;

    public function solve($a, $b) {
        if($a != 0) {
            MyLog::log('This is line equation');
            return $this->x = array(-$b / $a);
        }
        throw new YakushevException('No roots');
    }
}