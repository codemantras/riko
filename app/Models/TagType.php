<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagType extends Model
{
      protected $fillable = ['name'];

       public function tag()
    {
        return $this->hasMany(Tag::class);
    }
}

