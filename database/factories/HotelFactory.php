<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    protected $model = Hotel::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'construction_year' => $this->faker->numberBetween(1890, 2020),
            'number_of_rooms' => $this->faker->numberBetween(1, 200),
        ];
    }
}
