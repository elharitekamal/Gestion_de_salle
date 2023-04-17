<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{

    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
    ];
    use HasFactory;
}