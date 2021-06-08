<?php


namespace App\Pattern\Composit;


class TagP implements InterfaceComposit
{
    private $text;

    public function __construct($text
    )
    {
        $this->text = $text;
    }

    public function render()
    {
        return '<p>'.$this->text.'</p>';
    }
}
