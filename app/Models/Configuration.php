<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Configuration extends Model
{
    use HasFactory;
    protected $fillable = [
        'terms',
        'menu',
        'menu_movil',
        'url'
    ];

}
