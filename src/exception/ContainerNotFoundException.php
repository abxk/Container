<?php


namespace abxk\exception;


use Psr\Container\NotFoundExceptionInterface;

class ContainerNotFoundException extends \RuntimeException implements NotFoundExceptionInterface
{

}
