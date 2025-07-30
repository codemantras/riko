<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
        'name',
        'url',
        'username',
        'password',
        'app_url',
        'storage_id',
        'source_id'
    ];

    public function source()
    {
        return $this->belongsTo(Source::class);
    }

}
