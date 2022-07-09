<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'place', 'time', 'online'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }


    public function scopeOnline($q)
    {
        $q->where('online', true);
    }
}
