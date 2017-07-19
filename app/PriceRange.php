<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceRange extends Model
{
    protected $table = 'priceranges';

    protected $fillable = [
        'start', 'end', 'rate'
    ];
}
