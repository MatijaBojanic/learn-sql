<?php

namespace Database\Seeders;

use App\Models\Rental;
use Illuminate\Database\Seeder;

class RentalSeeder extends Seeder
{
    public function run()
    {
        Rental::factory(300)->create();
    }
}
