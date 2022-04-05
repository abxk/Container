<?php


namespace abxk\test\rely;

use abxk\Container;

class SomeClass
{
    public $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }
}