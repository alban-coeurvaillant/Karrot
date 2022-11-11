<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'place', 'description', 'time', 'online', 'seats'];
    
    protected $dates = ['date'];
    
    protected $attributes = [
        'seats' => 100,
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function getYearMonthAttribute()
    {
        return $this->date->format('Y-m');
    }

    public function scopeOnline($q)
    {
        $q->where('online', true);
    }

    public function scopeCanDisplay($q)
    {
        $q->where('online', true)->where('date', '>=', date('Y-m-d'));
    }

    public function getDateFrAttribute()
    {
        return $this->date->format('d/m/Y');
    }
}
