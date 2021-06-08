<?php


namespace App\Pattern\Builder;


class BuilderToDecorator
{
    public $build;
    public function __construct()
    {
        $build = new Builder(new Home());
        $this->build = $build;
    }
    public function BuildHome()
    {
        $this->build->roof();
        $this->build->window();
        $this->build->door();
        return $this->build->getHome();
    }
}
