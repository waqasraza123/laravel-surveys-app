<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction_history';

    protected $fillable = [
        'user', 'tokens', 'rate'
    ];
}
