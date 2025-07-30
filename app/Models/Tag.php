<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
       protected $fillable = [
        'name',
        'username',
        'status',
        'priority',
        'remarks',
        'tag_type_id'
    ];
}
