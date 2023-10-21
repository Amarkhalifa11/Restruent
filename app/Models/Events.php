<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'image',
        'description',
        'user_id',
        'advan1',
        'advan2',
        'advan3',
        'advan4',
    ];
}
