<?php


namespace App\Pattern\Builder;


class Builder implements BuilderInterface
{
    public $home;
    public function __construct(HomeInterface $home)
    {
        $this->home = $home;
    }

    public function roof()
    {
        return $this->home->build('Roof' , 'Successful');
    }

    public function window()
    {
        return $this->home->build('Window' , 'Successful');
    }

    public function door()
    {
        return $this->home->build('Door' , 'Successful');
    }

    public function getHome()
    {
        return $this->home;
    }
}
