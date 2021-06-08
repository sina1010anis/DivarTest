<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['Name' , 'href' , 'id_city'];
}
