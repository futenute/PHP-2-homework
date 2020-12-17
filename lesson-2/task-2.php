<?php
trait someTrait{
    public static function getInstance(){
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }
}

class SomeClass{
    protected static $_instance;

    private function __construct() {

    }

    use someTrait;

    private function __clone(){

    }

    private function __wakeup(){

    }
}