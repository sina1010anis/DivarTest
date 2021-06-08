<?php


namespace App\Pattern\Composit;


class CardItemCompososit implements InterfaceComposit
{
    public $eml = [];
    public function render()
    {
        $div = '<div>';
        foreach ($this->eml as $i){
            $div.=$i;
        }
        $div.='</div>';
        return $div;
    }
    public function addEml(InterfaceComposit $interfaceComposit){
        $this->eml[] = $interfaceComposit->render();
    }
}
