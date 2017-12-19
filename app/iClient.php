<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class iClient extends Model
{
    protected $table = 'iclients';

    protected $fillable = [
        'code', 'name', 'email', 'mobile', 'completed', 'response'
    ];
}
