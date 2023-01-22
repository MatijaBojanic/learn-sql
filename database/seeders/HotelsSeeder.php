<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelsSeeder extends Seeder
{
    public function run()
    {
        Hotel::factory(10)->create();
    }
}
