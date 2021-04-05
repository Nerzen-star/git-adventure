<?php
ini_set("display_errors", 1); error_reporting(-1);

class LineEquation {
    protected $x;

    public function solveLineEquation(float $a, float $b) {
        return $a !== 0 ? $this->x = -$b / $a : null;
    }
}
class SquareEquation extends LineEquation {

    protected function solveDiscriminant($a, $b, $c) {
        return $d = $b * $b - 4 * $a * $c;
    }

    public function solveSquareEquation(float $a, float $b, float $c) {
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
}

$lineEquation = new LineEquation();
$squareEquation = new SquareEquation();

var_dump($lineEquation->solveLineEquation(0, 4));
var_dump($squareEquation->solveSquareEquation(2.7, 7.2, 3.5));



//list($a, $b, $a, $b, $c) = trim(sscanf());