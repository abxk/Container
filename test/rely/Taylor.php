<?php


namespace abxk\test\rely;


use abxk\Container;

class Taylor
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function some(Container $container)
    {

    }

    public static function test(Container $container)
    {
        return $container;
    }

    public static function __make()
    {
        return new self('Taylor');
    }
}