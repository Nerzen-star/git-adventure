<?php

namespace yakushev;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface{
    public function _write() {
        // TODO: Implement _write() method.
    }
    public static function log($str) {
        // TODO: Implement log() method.
    }
    public static function write() {
        // TODO: Implement write() method.
    }
}
