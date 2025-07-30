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
        'redeem',
        'tips',
        'cashout',
        'source_id',
        'platform_id',
        'tag_id',
        'employee_id'
    ];
    public function source()
    {
        return $this->belongsTo(Source::class);
    }
    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
