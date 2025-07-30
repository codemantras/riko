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
      public function tag_type()
    {
        return $this->belongsTo(TagType::class);
    }
    
        public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
