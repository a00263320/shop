<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;

    //可以更改的值
    protected $fillable = [
        'photo', 'class', 'name',
        'describe', 'quantity',
        'price', 'state'
    ];
}
