<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
        'name',
        'url',
        'user_name',
        'password',
        'app_url',
        'storage_id',
        'source_id'
    ];

}
