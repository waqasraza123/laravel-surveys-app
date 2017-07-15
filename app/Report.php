<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'code', 'advisor', 'first_name', 'last_name', 'email', 'completed'
    ];
}
