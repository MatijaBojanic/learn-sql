<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalFactory extends Factory
{
    public function definition(): array
    {
        $randomClientId = Client::all()->random()->id;
        $randomRoomId = Room::all()->random()->id;
        return [
            'client_id' => $randomClientId,
            'room_id' => $randomRoomId,
            'number_of_days' => $this->faker->numberBetween(1, 14),
            'price' => $this->faker->numberBetween(30, 400)
        ];
    }
}
