<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
      protected $fillable = [
        'customer_name',
        'date',
        'time',
        'credit',
        'bonus',
        'loaded',
        'free_play',
        'remarks',
        'reedem',
        'tips',
        'cashout',
        'source_id',
        'platform',
        'tag_id',
        'employee_id'
    ];
}
