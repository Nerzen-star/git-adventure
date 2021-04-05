<?php

namespace yakushev;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface {
    // fact logic
    public function _write() {
        foreach ($this->log as $value) {
            echo $value . "\r\n";
        }
    }
    // only string, array
    public static function log($str) {
        MyLog::Instance()->log[] = $str;
    }
    public static function write() {
        MyLog::Instance()->_write();
    }
}
