<?php

namespace App\Pattern\Adapter;

interface AdapterInterface
{
	public function viewPrice(ItemTow $itemTow);
	public function viewName(ItemTow $itemTow);
}
