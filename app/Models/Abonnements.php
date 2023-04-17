<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnements extends Model
{
    use HasFactory;
    public function offers()
    {

        return $this->belongsTo(Offers::class);

    }
    public function users()
    {

        return $this->belongsTo(User::class);

    }
}