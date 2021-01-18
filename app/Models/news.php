<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'Title';
    }

    protected $fillable = ['id_user' , 'mobile' , 'Title' , 'Price' , 'City' , 'Address' , 'ItemMenu' , 'Parent_Menu' , 'Chat' , 'Desc' , 'Image'];
}
