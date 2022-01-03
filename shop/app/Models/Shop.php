<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    //可以更改的值
    protected $fillable = [
        'name', 'photo', 'describe',
        'quantity', 'price', 'class', 'state'
    ];
}
