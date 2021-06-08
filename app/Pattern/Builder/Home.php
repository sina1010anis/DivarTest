<?php


namespace App\Pattern\Builder;


class Home implements HomeInterface
{
    public $level;
    public function build($name , $value)
    {
        $this->level[$name] = $value;
    }
}
