<?php

namespace App\Pattern\Adapter;

class ItemTow implements ClassInterfaceAdapter
{
	public function getPrice()
	{
		return 15000;
	}
	public function getName(){
		return 'Item Tow';
	}
}