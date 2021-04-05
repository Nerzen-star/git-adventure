<?php

namespace core;

abstract class LogAbstract {
    protected static $i;
    protected $log = array();

    private function __construct() {

    }
    public static function Instance() {
        if(!(static::$i instanceof static)) {
            static::$i = new static();
        }
        return static::$i;
    }
    abstract public function _write();
}
