<?php


namespace App\Pattern\AbstractFactory;


class ItemOneAbstractFactory implements AbstractFactoryInterface
{
    private $price;
    private $name;

    public function __construct($price , $name)
    {

        $this->price = $price;
        $this->name = $name;
    }
    public function price()
    {
        return $this->price;
    }

    public function name()
    {
        return $this->name;
    }
}
