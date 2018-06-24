<?php

namespace Singleton;

class Counter
{
    private static $instance;
    private $count;

    private function __construct()
    {
        $this->count = 0;
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Counter();
        }

        return self::$instance;
    }

    public function addOne()
    {
        $this->count++;
    }

    public function subOne()
    {
        $this->count--;
    }

    public function show()
    {
        return $this->count;
    }
}