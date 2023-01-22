<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Hotel;
use App\Models\Rental;
use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ClientSeeder::class,
            HotelsSeeder::class,
            RoomSeeder::class,
            RentalSeeder::class
        ]);

        $this->hotelsWithSameNumberOfRooms();
        $this->hotelWithRoomsWithSameNumberOfBeds();
        $this->hotelRentedByOldClients();
        $this->hotelRentedByEveryClient();
        $this->clientRentedEveryHotelTwice();
    }

    private function hotelsWithSameNumberOfRooms() {
        Hotel::factory(2)->has(Room::factory()->count(3))->make();
    }

    private function hotelWithRoomsWithSameNumberOfBeds() {
        $hotel = Hotel::factory()->has(Room::factory()->count(3))->create();
        foreach($hotel->rooms as $room) {
            $room->number_of_beds = 2;
            $room->save();
        }
    }

    private function hotelRentedByOldClients() {
        $clients = Client::factory(3)->create(['age'=>76]);
        $hotel = Hotel::factory()->has(Room::factory()->count(3))->create();
        foreach($clients as $client) {
            Rental::factory()->create([
                'room_id' =>  $hotel->rooms->random()->id,
                'client_id' => $client->id
            ]);
        }
    }

    private function hotelRentedByEveryClient() {
        $hotel = Hotel::factory()->has(Room::factory()->count(3))->create();
        $clients = Client::all();
        foreach($clients as $client) {
            Rental::factory()->create([
                'room_id' =>  $hotel->rooms->random()->id,
                'client_id' => $client->id
            ]);
        }
    }

    private function clientRentedEveryHotelTwice() {
        $client = Client::whereAge(76)->first();
        $hotels = Hotel::all();
        foreach($hotels as $hotel) {
            Rental::factory(2)->create([
                'room_id' =>  $hotel->rooms->random()->id,
                'client_id' => $client->id
            ]);
        }
    }
}
