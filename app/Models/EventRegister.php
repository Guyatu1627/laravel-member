<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'event_id', 'message'
    ];

    public function event()
    {
        return $this->belongsTo(EventRegister::class);
    }
}
