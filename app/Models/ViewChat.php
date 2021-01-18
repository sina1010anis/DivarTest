<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewChat extends Model
{
    use HasFactory;

    public $timestamps = false ;

    protected $fillable = ['mobile' , 'mobile_shop' , 'id_news'];
}
