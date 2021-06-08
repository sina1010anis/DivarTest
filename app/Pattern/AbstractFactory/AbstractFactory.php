<?php


namespace App\Pattern\AbstractFactory;


class AbstractFactory
{
    private $price;
    private $name;

    public function __construct($price , $name)
    {
        $this->price = $price;
        $this->name = $name;
    }

    public function ItemOne()
    {
        return new ItemOneAbstractFactory($this->price , $this->name);
    }
    public function ItemTow()
    {
        return new ItemTowAbstractFactory($this->price , $this->name);
    }
}
