<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Parent extends Model
{
    use HasFactory;

    protected $table = 'menu_parents';

    public $timestamps = false;
}
