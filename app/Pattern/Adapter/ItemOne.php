<?php

namespace App\Pattern\Adapter;

class ItemOne implements AdapterInterface
{
	public function viewPrice(ItemTow $itemTow)
	{
		return $itemTow->getPrice();
	}
	public function viewName(ItemTow $itemTow){
		return $itemTow->getName();
	}
}
