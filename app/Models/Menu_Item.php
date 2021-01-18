<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Item extends Model
{
    use HasFactory;

    protected $table='menu_items';

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'Name';
    }
}
