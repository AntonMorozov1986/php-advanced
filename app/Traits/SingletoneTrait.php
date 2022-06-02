<?php
namespace Traits;

trait SingletoneTrait
{
    private static $instance;

    private function __construct()
    {
        $this->instanceInit();
    }

    abstract protected function instanceInit();

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __clone() {}
    protected function __sleep() {}
    protected function __wakeup() {}
}
