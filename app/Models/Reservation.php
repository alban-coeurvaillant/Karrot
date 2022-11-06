<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'email', 'message', 'nb_seats'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function getFullnameAttribute()
    {
        return join(' ', [$this->firstname, $this->lastname]);
    }
}
