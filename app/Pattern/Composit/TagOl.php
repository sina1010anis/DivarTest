<?php


namespace App\Pattern\Composit;


class TagOl implements InterfaceComposit
{
    public $mt;

    public function __construct($mt)
    {
        $this->mt = $mt;
    }
    public function render()
    {
        return '<ul><li>'.$this->mt.'</li></ul>';
    }
}
