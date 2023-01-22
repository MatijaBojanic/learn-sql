<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'uid' => $this->faker->numerify("#############"),
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(20, 90),
            'address' => $this->faker->city(),
        ];
    }
}
