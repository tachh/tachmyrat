<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    public $timestamps = false;


    public function restaurants(): HasMany
    {
        return $this->hasMany(Restaurant::class);
    }
}
