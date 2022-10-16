<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'place' => $this->faker->city,
            'description' => $this->faker->realText(),
            'date' => $this->faker->dateTimeBetween('now', '+5 months')->setTime(0,0,0),
            'time' => '20:00',
            'online' => true,
        ];
    }
}
