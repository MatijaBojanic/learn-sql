<?php

namespace Database\Factories;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition(): array
    {
        $randomHotelId = Hotel::all()->random()->id;
        $nextRoomNumber = Room::whereHotelId($randomHotelId)->get()->count() + 1;

        return [
            'hotel_id' => $randomHotelId,
            'number' => $nextRoomNumber,
            'number_of_beds' => $this->faker->numberBetween(1,4)
        ];
    }
}
